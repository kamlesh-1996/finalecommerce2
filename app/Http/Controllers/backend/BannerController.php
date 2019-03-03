<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Model\Banner;
use Image;
use File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::where('isDeleted','No')
                          ->orderBy('id','DESC')
                          ->get();
        return view('backend.banner.banner',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $input = $request->all();
        unset($input['_token']);
        if($request->hasFile('images'))
        {
            $allowedfileExtension=['jpg','png','jpeg'];
            $files = $request->file('images');
            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {   
                    $filename = time().'.'.$extension;
                    $thumbnailImage = Image::make($file);
                    $thumbnailPath = public_path().'/banner/';
                    $originalPath = public_path().'/banner/original/';
                    if(!is_dir($thumbnailImage)){
                        $path = public_path().'/banner';
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    if(!is_dir($thumbnailImage)){
                        $path = public_path().'/banner/original';
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $thumbnailImage->save($originalPath.$filename);
                    $thumbnailImage->resize(1343,476);
                    $thumbnailImage->save($thumbnailPath.$filename); 
                    $banner= Banner::create(['image'=>$filename]);
                    $banner->save();
                }
                else
                {
                    return Redirect::back();
                }
            }
            return redirect('backend/banner')->with('success','Images Uploaded Successfully');
        }
        return redirect('backend/banner')->with('success','Please Upload Image');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $input = $request->all();
        $id = base64_decode($input['id']);

        $banner = Banner::findOrFail($id);
        $update = Banner::where('id',$id)
                        ->update(['isDeleted'=>'Yes']);
        if($update){
            echo json_encode(['success'=>'success']);
        }else{
            echo json_encode(['error'=>'error']);
        }

    }
}
