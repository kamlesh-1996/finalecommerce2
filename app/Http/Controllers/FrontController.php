<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Banner;
use App\Model\Product;
use App\Model\ProductMultiPrice;

class FrontController extends Controller
{
    public function index()
    {
    	$categories = Category::where('category_id',null)
                               ->where('isDeleted','No') 
                               ->get();
        // dd($categories);
    	$banners    = Banner::where('isDeleted','No')->get();
    	return view('front.index',['categories'=>$categories,'banners'=>$banners]);
    }
    public function getProduct($id)
    {
    	$id = base64_decode($id);
        $categories = Category::where('category_id',null)
                                ->where('isDeleted','No') 
                                ->get();
        $categoriesArr = Category::where('isDeleted','No')
                            ->orderBy('id','DESC')
                            ->where('category_id',$id)
                            ->get();

        if(!empty($categoriesArr) && count($categoriesArr) >0){
            return view('front.show-all-category',compact('categoriesArr','categories'));
        }else{
            $products = Product::where('isDeleted','No')
                            ->where('category_id',$id)
                            ->get();
            if(!empty($products) && count($products)>0){
                foreach ($products as $key => $value) {
                    if(!empty($value['images'])){
                        $value['images'] = json_decode($value['images'])[0];
                    }else{
                        $value['images'] = 'default.png';
                    }
                    if($value['multi_price'] == "Yes"){
                        $singlePrice = ProductMultiPrice::where('product_id',$value['id'])               ->where('isDeleted','No')
                            ->first();
                        $singlePriceArr  = json_decode($singlePrice['multi_price_data']);
                        $value['price'] = $singlePriceArr[0]->price; 
                    }
                }
            }
            $categories = Category::where('category_id',null)
                                    ->where('isDeleted','No')
                                    ->get();
            return view('front.product.show-all-products',compact('products','categories'));
        }   
    }

    public function getSingleProduct($slug)
    {
        $product = Product::where('slug',$slug)
                           ->where('isDeleted','No')
                           ->first();

        if($product){
            if(!empty($product['images'])){
                $product['images'] = json_decode($product['images']);
            }else{
                $product['images'][0] = 'default_product.png';
            }
            if(!empty($product['attachment'])){
                $product['attachment'] = json_decode($product['attachment']);
            }   

            if($product['multi_price'] == "Yes" && $product['price'] == 0){
                $productMultiPrice = ProductMultiPrice::where('isDeleted','No')
                                                            ->where('product_id',$product['id'])
                                                            ->orderBy('id','DESC')
                                                            ->first();  
                $product['multi_price'] = json_decode($productMultiPrice['multi_price_data']);
                // dd($product['multi_price']);
            }

            $categories = Category::where('category_id',null)
                                   ->where('isDeleted','No')
                                   ->get();
            $related_products = Product::where('isDeleted','No')
                                        ->where('category_id',$product['category_id'])
                                        ->get();
            if(count($related_products) > 0 && !empty($related_products)){
                $related_products = Product::where('isDeleted','No')->orderByRaw('RAND()')->take('1')->get();
                foreach ($related_products as $key => $value) {
                    if(!empty($value['images'])){
                        $imagesArr = json_decode($value['images']);
                        $value['images'] = $imagesArr[0];
                    }else{
                        $value['images'] = 'default_product.png'; 
                    }
                }
            }
            return view('front.product.single-product',compact('product','categories','related_products'));

        }else{
            return redirect('/');
        }
    }

    public function getNewProduct()
    {
        $categories = Category::where('category_id',null)->where('isDeleted','No')->get();
        $products = Product::where('isDeleted','No')
                            ->orderBy('id','DESC')
                            ->paginate(5);
        if(!empty($products) && count($products)>0){
            foreach ($products as $key => $value) {
                if(!empty($value['images'])){
                    $value['images'] = json_decode($value['images'])[0];
                }else{
                    $value['images'] = 'default.png';
                }
                if($value['multi_price'] == "Yes"){
                    $singlePrice = ProductMultiPrice::where('product_id',$value['id'])                            ->where('isDeleted','No')
                                                    ->first();
                    $singlePriceArr  = json_decode($singlePrice['multi_price_data']);
                    // dd($singlePriceArr);
                    $value['price'] = $singlePriceArr[0]->price; 

                }
            }
        }
        return view('front.all-products',compact('products','categories'));   
    }
}
