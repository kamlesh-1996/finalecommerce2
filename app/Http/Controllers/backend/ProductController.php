<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\ProductMultiPrice;
use App\Http\Requests\ProductRequest;
use File;

class ProductController extends Controller
{
    public $text = '';
    public function index()
    {
        $products =  Product::where('isDeleted','No')
                           ->orderBy('id','DESC')
                           ->get();
                           
        if(!empty($products)){
            foreach ($products as $key => $value) {
                if(!empty($value['images'])){
                    $value['new_images'] = json_decode($value['images']);
                }else{
                    $value['images'] = array();
                }
            }
        }                  
        return view('backend.product.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $text = $this->categoryTree();
        return view('backend.product.create-product',['categoryTree'=>$text]);
    }

    public function categoryTree($parent_id = null, $sub_mark = ''){

        $query = Category::where('isDeleted','No')
                            ->where('category_id',$parent_id)
                            ->get();

        if(count($query)> 0){
            foreach($query as $key => $value){
                $this->text .= '<option value="'.$value['id'].'">'.ucfirst($sub_mark.$value['category']).'</option>';
                $this->categoryTree($value['id'], $sub_mark.'---');
            }
        }
        return $this->text;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $input = $request->all();
        unset($input['_token']);
        $productCode = $this->generateRandomString();
        if($request->hasFile('product_images'))
        { 
            $files = $request->file('product_images');
            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $filename = time().rand(0,200).'.'.$extension;
                $file->move('public/product-asset/'.$productCode.'/product_images/',$filename);
                $images[] = $filename;
            }
            $contents = "<h1> Not Allowed To Access </h1>";
            $path = 'public/product-asset/'.$productCode.'/product_images/index.php';
            if(!file_exists($path)){
                File::put($path,$contents);
            }
        }

        if($request->hasFile('attachment'))
        {
           $files = $request->file('attachment');
           foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('public/product-asset/'.$productCode.'/attachment/',$filename);
                $attachment[] = $filename;
            }
           $contents = "<h1> Not Allowed To Access </h1>";
           $path = 'public/product-asset/'.$$productCode.'/product_images/index.php';
           if(!file_exists($path)){
             File::put($path,$contents);
           }
        }

        $product = new Product();
        if(isset($images) && !empty($images)){
            $product->images = json_encode($images);
        }
        $product->product_code = $productCode;
        $product->title   = trim(strtolower($input['title']));
        $product->sub_title = trim(strtolower($input['sub_title']));
        $product->qty = $input['qty'];
        $product->description = $input['desc'];
        if(isset($attachment) && !empty($attachment)){
            $product->attachment = json_encode($attachment);
        }
        $product->category_id = $input['category_id'];
        $product->slug = $this->createSlug($input['title']);

        if(isset($input['single_or_multiprice_checkbox']) && empty($input['price']) && empty($input['total'])){

            $product->price = 0;
            $product->multi_price = 'Yes';
            $product->save();
            $productId = $product->id;
            $this->storeMultiplePrice($productId,$input['product_name'],$input['product_code'],$input['product_price']);
        }
        else{

            $product->multi_price = 'No';
            if(!empty($input['gst']) && !empty($input['total'])){
                 $product->price = $input['total'];   
            }else{
                $product->price = $input['single_price'];
            }
            $product->save();
        }
        return redirect('backend/product')->with('success','Product Added Successfully');

    }

    private function createSlug($title)
    {

        $slug = str_slug($title,'-');
        $count = Product::where('isDeleted','No')
                        ->where('slug',$slug)
                        ->count();
        if($count == 0){
            return $slug;
        }else{
            return $this->createSlug($slug.rand(0,500));
        }
    }


    private function generateRandomString($length = 3) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= 'PR'.$characters[rand(0, $charactersLength - 1)];
        }
        $product = Product::where('product_code',$randomString)
                           ->where('isDeleted','No')
                           ->count();
        if($product == 0){
            return $randomString;
        }else{
            $this->generateRandomString();
        }

    }

    private function storeMultiplePrice($productId,$producName,$productCode,$productPrice)
    {
        $productMultiPrice = new ProductMultiPrice(); 
        $result = array_map(function ($producName, $productCode, $productPrice) {
            return array_combine(
                ['name', 'code', 'price'],
                [$producName, $productCode, $productPrice]
            );
        }, $producName, $productCode, $productPrice);
        $result =  json_encode($result);
        $productMultiPrice->product_id = $productId; 
        $productMultiPrice->multi_price_data = $result;
        $productMultiPrice->save();

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
        $id = base64_decode($id);
        $product = Product::findOrFail($id);
        if(!empty($product['images'])){
            $product['images'] = json_decode($product['images']);
        }
        if(!empty($product['attachment'])){
            $product['attachment'] = json_decode($product['attachment']);
        }
        if($product['multi_price'] == "Yes" && $product['price'] == 0){
            $productMultiPrice = ProductMultiPrice::where('isDeleted','No')->where('product_id',$product['id'])->first();
            $product['multi_price'] = json_decode($productMultiPrice['multi_price_data']);
        }
        // dd($product);
        $categoryTree = $this->categoryTree();
        return view('backend.product.edit-product',compact('product','categoryTree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all(); 
        unset($input['_token']);
        $product = Product::findOrFail($input['id']);
        $productCode = $product['product_code'];

        if($request->hasFile('product_images'))
        {
           $files = $request->file('product_images');
           foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $filename = time().rand(0,200).'.'.$extension;
                $file->move('public/product-asset/'.$productCode.'/product_images/',$filename);
                $images[] = $filename;
            }
        }

        if($request->hasFile('attachment'))
        {
           $files = $request->file('attachment');
           foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('public/product-asset/'.$productCode.'/attachment/',$filename);
                $attachment[] = $filename;
            }
        }

        if(isset($images) && !empty($images)){
            if(!empty($product['images'])){
                $imagesArr = json_decode($product['images']);
                $merge = array_merge($imagesArr, $images);
            }else{
                $merge = $images;
            }
            $product->images = json_encode($merge);
        }
        $product->title   = trim(strtolower($input['title']));
        $product->sub_title = trim(strtolower($input['sub_title']));
        $product->qty = $input['qty'];
        $product->description = $input['desc'];
        if(isset($attachment) && !empty($attachment)){
            if(!empty($product['attachment'])){
                $attachmentArr = json_decode($product['attachment']);
                $attcMerge = array_merge($attachment, $attachment);
                //arrray_mere_recrie
            }else{
                $attcMerge = $attachment;
            }
            $product->attachment = json_encode($attcMerge);
        }
        $product->category_id = $input['category_id'];
        $product->slug = $this->createSlug($input['title']);
        
        // dd($input);
        if(isset($input['single_price']) && !empty($input['single_price'])){

            $product->price = $input['single_price'];
            $product->save();
        }else{
            ProductMultiPrice::where('product_id',$product['id'])
                              ->update(['isDeleted'=>'Yes']);
            $productId = $product->id;
            $this->storeMultiplePrice($product['id'],$input['product_name'],$input['product_code'],$input['product_price']);
        }
        if($product->save()){
            return redirect('backend/product')->with('success','Product Updated Successfully');
        }else{
            return redirect('backend/product')->with('error','Some Error');
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

        $delProduct = Product::where('isDeleted','No')
                            ->where('id',$id)
                            ->update(['isDeleted'=>'Yes']);
        if($delProduct){
            echo json_encode(['success'=>'success']);
            ProductMultiPrice::where('product_id',$id)
                                ->update(['isDeleted'=>'Yes']);
            die;
        }
        echo json_encode(['error'=>'no delete']);
        die;
    }

    public function removeProductImage(Request $request)
    {
        $input = $request->all();
        $key = $input['key'];

        $product = Product::findOrFail($key);
        $imagesArr = json_decode($product['images']);
        $array = \array_diff($imagesArr,[$input['name']]);
        if(count($array) > 0){
            $product->images = json_encode($array);
        }else{
            $product->images = null;
        }

        if($product->save()){
            echo json_encode(['success'=>'success']);
        }else{
            echo json_encode(['error'=>'error']);
        }
    }
}
