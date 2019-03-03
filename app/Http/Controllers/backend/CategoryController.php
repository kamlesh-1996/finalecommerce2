<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use DB;

class CategoryController extends Controller
{

    public $text = '';
    public $arr;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryArr = Category::where('isDeleted','No')
                                ->orderBy('id','DESC')
                                ->get();
        if(!empty($categoryArr)){
            foreach ($categoryArr as $key => $value) {
                
                $categoryArr[$key]['category_chain'] = $this->getSubCategory($value['category_id']);
                $this->arr = [];
            }
        }
        return view('backend.category.category',['categoryArr'=>$categoryArr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $text = $this->categoryTree();
        return view('backend.category.create-category',['categoryArr'=>$text]);
    }

    public function categoryTree($parent_id = null, $sub_mark = ''){

        $query = Category::where('isDeleted','No')
                            ->where('category_id',$parent_id)
                            ->get();

        if(count($query)> 0){
            foreach($query as $key => $value){
                $this->text .= '<option value="'.$value['id'].'">'.$sub_mark.ucfirst($value['category']).'</option>';
                $this->categoryTree($value['id'], $sub_mark.'---');
            }
        }
        return $this->text;
    }

    public function getSubCategory($category_id)
    {
        $query = Category::where('isDeleted','No')
                           ->where('id',$category_id)
                           ->first();


        if(!empty($query)){
            // foreach ($query as $key => $value) {
                $this->arr[] = ucfirst($query['category']);
                $this->getSubCategory($query['category_id']);   
            // */
        }
        return $this->arr;
    }

    public function get_options($array, $parent="", $indent="")
    {
        $return = array();
        foreach($array as $key => $val) {
             if($val["parent category"] == $parent) {
                $return[] = $indent.$val["category name"];
                $return = array_merge($return, $this->get_options($array, $val["category name"], $indent."&nbsp;&nbsp;&nbsp;"));
            }
        }
        return $return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        unset($input['_token']);

        if($request->hasFile('image'))
        {
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().rand(0,200).'.'.$extension;
             $file->move('public/category/',$filename);
             $image = $filename;
        }else{
            $image = "dummy.png";
        }


        $category  = new Category([
            'category' => $input['category'],
            'category_id' => $input['category_id'],
            'slug'    => $this->createSlug($input['category'],$input['category_id']),
            'image'   => $image
        ]);

        if($category->save()){
            return redirect('backend/category')->with('success','Category Addedd Successfully');
        }else{
            return redirect('backend/category')->with('error','Some error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = $id;
        $category = Category::findOrFail($id);
        $text = $this->categoryTree();

        return view('backend.category.create-category',['eCategory'=>$category,'categoryArr'=>$text,'id'=>base64_encode($category->category_id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input =  $request->all();
        unset($input['_token']);
        
        $category = Category::findOrFail($id);
        $category->category = trim(strtolower($input['category']));
        $category->category_id = $input['category_id'];

        if($request->hasFile('image'))
        {
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().rand(0,200).'.'.$extension;
             $file->move('public/category/',$filename);
             $category->image = $filename;
         }

        if($category->save()){
           return redirect('backend/category')->with('success','Category Updated Successfully');
       }else{
           return redirect('backend/category')->with('error','Errors');
       }
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $input  = $request->all();
        $id     = $input['id'];

        $category = Category::findOrFail($id);
        $subCategoryAvilable = Category::where('isDeleted','No')
                                        ->where('category_id',$id)
                                        ->count();
        if($subCategoryAvilable == 0){
            $category->isDeleted = 'Yes';
            $category->save();
            echo json_encode(['success'=>'success']);
            die;
        }

        echo json_encode(['error'=>'sub_category_avilable']);
        die;
    }

    public function forcefullyDelete(Request $request)
    {
       // $input  = $request->all();
       // $id     = $input['id'];
       
       // $category = Category::findOrFail($id);
       // $categoryId = $category->category_id;

       // Category::where('id',$categoryId,)        


    }


    public function fetchSubCategory(Request $request)
    {
        $input = $request->all();
        if(isset($input['id']) && !empty($input['id'])){

            $id = $input['id'];
            $subCategoryArr = Category::where('isDeleted','No')
            ->where('category_id',$id)
            ->get(); 
            if(!empty($subCategoryArr) && count($subCategoryArr) > 0){
                echo  json_encode(['success'=>'success','sub_category'=>$subCategoryArr]);
                die;
            }
        }

        echo json_encode(['error'=>'error','sub_category'=>'No Found']);
        die;
    }


    public function categoryExists(Request $request){

        $category = request('category');

    }

    public function createSlug($category,$category_id)
    {
        $slug = str_slug($category);
        $check = Category::where('isDeleted','No')
                           ->where('category_id',$category_id)
                           ->where('slug',$slug)
                           ->count();
        if($check == 0){
            return $slug;
        }else{
            return $this->createSlug($slug.rand(0,10));
        }
    }


}
