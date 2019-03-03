@extends('layouts.front-master')

@section('content')
<div class="main-container col1-layout container no-padding">
    <div class="main">
        <div class="breadcrumbs row">
            <ul>
                <li class="home">
                    <a href="{{ url('/') }}" title="Go to Home Page">Home</a>
                    <span>> </span>
                </li>
                <li class="category300">
                    <a href="{{ url('/') }}" title="">Header Menu</a>
                    <span>> </span>
                </li>
                <li class="category301">
                    <a href="#" title="">New Products</a>
                    <span>> </span>
                </li>
                <li class="product">{{ $product['title'] }}</li>
            </ul>
        </div>
        <div class="col-main">
            <script type="text/javascript">
                var optionsPrice = new Product.OptionsPrice([]);
            </script>
            <div id="messages_product_view"></div>
            <div class="product-view">
                <div class="product-essential">
                    <form action=" " method="post" id="product_addtocart_form">
                        <input name="form_key" type="hidden" value=" " />
                        <div class="no-display">
                            <input type="hidden" name="product" value="1646" />
                            <input type="hidden" name="related_product" id="related-products-field" value="" />
                        </div>
                        <div class="product-img-box col-md-5 col-sm-5 col-xs-12">
                            <div id="carousel-example-generic" data-ride="carousel" class="carousel slide product-image product-image-zoom col-md-12 col-sm-12 col-xs-12">
                                <div class="carousel-inner">
                                    @if(isset($product) && !empty($product['images']))
                                    @foreach($product['images'] as $key => $value)
                                    <div class="item @if($key <= 0) active @endif">
                                        <img src="{{ asset('product-asset/'.$product['product_code'].'/product_images/'.$value) }}" alt="cranioplasty" height="278" />
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="more-views col-md-12 col-sm-12 col-xs-12">
                                <ul>
                                	@if(isset($product) && !empty($product['images']))
                                	@foreach($product['images'] as $key => $value)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{++$key}}">
                                        <a class="thumb-link" onclick=imageswitcher("{{ asset('product-asset/'.$product['product_code'].'/product_images/'.$value) }}"); href="javascript:void(0)" title="cranioplasty" data-image-index="{{++$key}}">
                                            <img src="{{ asset('product-asset/'.$product['product_code'].'/product_images/'.$value) }}"width="75" height="75" alt="cranioplasty" />
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                 {{--    <li data-target="#carousel-example-generic" data-slide-to="1">
                                        <a class="thumb-link" onclick="imageswitcher('assets/images/cranioplasty_implant.jpg');" href="javascript:void(0)" title="cranioplasty" data-image-index="1">
                                            <img src="assets/images/cranioplasty_implant.jpg" width="75" height="75" alt="cranioplasty" />
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="product-view-files col-md-12">
                            	@if(isset($product) && !empty($product['attachment']))
                            	@foreach($product['attachment'] as $key => $value)
                                	<div class=pdf-link><a href='{{ asset('product-asset/'.$product['product_code'].'/attachment/'.$value) }}' target='_blank' />{{ ucwords($product['title']) }}</a>
                                	</div>
                                @endforeach
                                @endif
                                <div class="video-link">
                                    <a href="javascript:void(0)"> watch video</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearer"></div>
                        </div>
                        <div class="product-shop col-md-7 col-sm-7 col-xs-12">
                            <div id="messages_product_view"></div>
                            <div class="product-name">
                                <h1>{{ strtoupper($product['title']) }}</h1>
                            </div>
                            <div class="sku">Product Id:<span>{{$product['product_code']}}</span></div>
                            <div class="short-description">
                                <div class="std"><strong>{{ucwords($product['sub_title'])}}</strong></div>
                            </div>
                            <div class="pricedetails">
                                <p class="availability in-stock">Availability: <span>In stock</span></p>

                                @if(!empty($product['price']) && 
                                $product['multi_price'] == "No")
                                <div class="price-box">
                                    <span class="regular-price" id="product-price-1646">
                                        <span class="price">Rs{{$product['price']}}</span>
                                    </span>                        
                                </div>
                                @else
                                    <table class="data-table grouped-items-table" id="super-product-table">
                                       <colgroup>
                                          <col>
                                          <col>
                                          <col width="1">
                                       </colgroup>
                                       <thead>
                                          <tr class="first last">
                                             <th>Product Name</th>
                                             <th>Code No</th>
                                             <th class="a-right">Price</th>
                                             <th class="a-center">Qty</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($product['multi_price']) && !empty($product['multi_price']))
                                            {{ dd("asdas") }}
                                            @foreach($product['multi_price'] as $key => $value)
                                            <tr class="first odd">
                                               <td>{{ $value['navbar-expand-md     '] }}</td>
                                               <td>{{ $value['code']}}</td>
                                               <td class="a-right">
                                                  <div class="price-box">
                                                     <span class="regular-price" id="product-price-47">
                                                     <span class="price"><span>Rs.</span>{{ $value['price'] }}</span>                  </span>
                                                  </div>
                                               </td>
                                               <td>4</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                            <div class="cartdetails col-md-12">
                                <div class="add-to-box-detail1 col-md-12" style="border-right:none; padding:10px 0;">
                                    <label for="qty" class="quantity">Quantity:</label>
                                    <input type="text" name="qty" id="qty" maxlength="12" minlength="1" value="1" title="Qty" class="input-text qty" />
                                    <div class="add-to-box col-md-12 no-padding">
                                    <div class="add-to-cart col-md-12 col-sm-12 col-xs-12 no-padding pull-right">
                                        <button type="submit" id="cartupdate" title=" + Add to Bag" class="button cartbtn btn-cart" onclick="productAddToCartForm.submit(this)"><span><span> + Add to Bag</span></span></button>
                                        <div class="input-box col-md-7 col-sm-7 col-xs-12 customzip">
                                            <div class="z-btn">
                                                <label>Zip Code : </label>
                                                <input type="text" id="cod" class="product-custom-option" name="cod" value="">
                                                <button type="button" onclick="checkCOD();" name="zip-check" title="Check" class="button" id="zip-check">
                                                    <span>
                                                        <span>Check</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div id="cod_msg"></div>
                                        </div>
                                    </div>
                                    <ul class="add-to-links">
                                        <li class="wishlist">
                                            <a href="#" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist" alt="add to wishlist" title="add to wishlist">Add to wishlist</a>
                                        </li>
                                    </ul>
                                </div>                                       
                            </div>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="product-collateral row no-margin no-padding" id="prodcollat">
                <div class="col-md-12 no-padding box-collateral box-description">
                    <div class="surgiproduct-detail-head">
                        <span>Details</span>
                    </div>
                    <div class="std">{!! $product['description'] !!}
                    </div>
                </div>
                <div class="col-md-12 no-padding box-collateral">
                    <div class="surgiproduct-detail-head">
                        <span>Reviews</span>
                    </div>
                    <div class="std">
                        <p class="no-rating"><a href="javascript(void);" alt="add your review" title="add your review" data-toggle="modal" data-target="#review-model">Be the first to review this product</a></p>
                    </div>
                </div>
            </div>
            <div class="surgiproduct-detail surgi-specification col-md-6 col-sm-6">
                <div class="surgiproduct-detail-head">
                    <span>specification</span>
                </div>
                <table border="0">
                    <tbody>
                        <tr>
                            <td>item code</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>work</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>material</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>quality</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>color</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade in" id="review-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Write Your Own Review</h4>
                    </div> 
                    <div class="modal-body">
                        <div class="form-add">
                            <form action="#" method="post" id="review-form">
                                <input name="form_key" type="hidden" value=" " />
                                <fieldset>
                                    <h5>You're reviewing: <span>Patient Specific CRANIOPLASTY Implants</span></h5>
                                    <span id="input-message-box"></span>
                                    <table class="data-table table" id="product-review-table">
                                    <col />
                                    <col width="1" />
                                    <col width="1" />
                                    <col width="1" />
                                    <col width="1" />
                                    <col width="1" />
                                    <thead>
                                        <tr>
                                            <th>How do you rate this product?</th>
                                            <th><span class="nobr">&#9733;</span></th>
                                            <th><span class="nobr">&#9733;&#9733;</span></th>
                                            <th><span class="nobr">&#9733;&#9733;&#9733;</span></th>
                                            <th><span class="nobr">&#9733;&#9733;&#9733;&#9733;</span></th>
                                            <th><span class="nobr">&#9733;&#9733;&#9733;&#9733;&#9733;</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Quality</th>
                                            <td class="value"><label><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio" /><div class="star"></div></label></td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td class="value"><label><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio" /><div class="star"></div></label></td>
                                        </tr>
                                        <tr>
                                            <th>Value</th>
                                            <td class="value"><label><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio" /><div class="star"></div></label></td>
                                            <td class="value"><label><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio" /><div class="star"></div></label></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" name="validate_rating" class="validate-rating" value="" />
                                <script type="text/javascript">decorateTable('product-review-table')</script>
                                <div class="row">
                                    <ul class="form-list">
                                        <li class="col-md-6 col-xs-12">
                                            <div class="input-box">
                                                <input type="text" name="nickname" id="nickname_field" class="input-text required-entry form-control" value="" placeholder="Name"/>
                                            </div>
                                        </li>
                                        <li class="col-md-6 col-xs-12">
                                            <div class="input-box">
                                                <input type="text" name="title" id="summary_field" class="input-text required-entry form-control" value="" placeholder="Summary of Your Review"/>
                                            </div>
                                        </li>
                                        <li class="col-md-12">
                                            <div class="input-box">
                                                <textarea name="detail" id="review_field" rows="3" class="required-entry form-control" placeholder="Review"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                            <div class="buttons-set" style="border:0px; margin-top:0px;">
                                <button type="submit" title="Submit Review" class=" btn btn-success button btn orng btn-md">Submit Review</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-related col-md-6 col-sm-12">
        <div class="block-title surgirelated-detail-head">
            <span class="relatedname">Related Products</span>
        </div>
        <div class="block-content">
            <ul class="mini-products-list" id="flexiselDemo4">
            	@if(isset($related_products) && count($related_products) > 0)
            	@foreach($related_products as $key => $value)
                {{-- <li class="item related">
                    <div class="products">
                        <a href="#" style="padding:0;">
                            <div class="addcart-icon"></div>
                        </a>
                        <a href="#" style="padding:0;" >
                            <div class="wishlist-icon"></div>
                        </a>
                        <a href="#" title="MONAKATO" class="product-image"><img src="{{ asset('product-asset/'.$value['product_code'].'/product_images/'.$value['images']) }}" width="150" alt="MONAKATO" /></a>
                        <div class="product-details">
                            <p class="product-name"><a href="#">{{ ucwords($value['title'])}}</a></p>
                        </div>
                    </div>
                </li> --}}
                <li class="item related">
                    <div class="products">
                        <a href="#" style="padding:0;">
                            <div class="addcart-icon"></div>
                        </a>
                        <a href="#" style="padding:0;" >
                            <div class="wishlist-icon"></div>
                        </a>
                        <a href="{{url('product/'.$value['slug'])}}" title="Raney Clip" class="product-image"><img src="{{ asset('product-asset/'.$value['product_code'].'/product_images/'.$value['images']) }}"  width="165" alt="Raney Clip" /></a>
                        <div class="product-details">
                            <p class="product-name"><a href="{{url('product/'.$value['slug'])}}">{{ucwords($value['title'])}}</a></p>
                            <div class="price-box">
                                <span class="regular-price" id="product-price-1647-related">
                                    <span class="price">Rs{{$value['price']}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </div>  
    </div>
@endsection