@extends('layouts.front-master')
@section('content')
<div class="main-container col2-left-layout container">
    <div class="main row">
        <div class="breadcrumbs row">
            <ul>
                <li class="home">
                    <a href="#" title="Go to Home Page">Home</a>
                    <span>> </span>
                </li>
                <li class="category300">
                    <a href="#" title="">Header Menu</a>
                    <span>> </span>
                </li>
                <li class="category301">
                    New Products 
                </li>
            </ul>
        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12"></div>
        <div class="col-main col-sm-9 col-xs-12 no-padding">
            <div class="category-products">
                <ul class="products-grid row">
                    @if(isset($products) && count($products) > 0)
                        @foreach($products as $key => $value )
                            <li class="col-md-4 col-xs-12 col-sm-6">
                                <div class="surgiwear-products item first">
                                    <a href="{{ url('product/'.$value['slug']) }}" class="link-wishlist"><div class="wishlist-icon"></div></a>
                                    <a href="{{ url('product/'.
                                    $value['slug']) }}" title="cranioplasty" class="product-image">
                                        <img src="{{ asset('product-asset/'.$value['product_code'].'/product_images/'.$value['images']) }}" class="img-responsive" alt="cranioplasty" />
                                    </a>
                                    <h2 class="product-name"><a href="{{url('product/'.$value['slug'])}}" title="Patient Specific CRANIOPLASTY Implants">{{$value['title']}}</a></h2>
                                    <div class="price-box">
                                        <span class="regular-price" id="product-price-1646">
                                            @if($value['multi_price'] == "Yes")  Starting at: @endif
                                            <span class="price">Rs{{$value['price']}}</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <a href="{{url('product/'.$value['slug'])}}" title="Details" class="listbtn-detail">Details</a>
                                        <button type="button" title="Add to Cart" class="button btn listing-btn-cart" onclick="setLocation()">Add to Cart</button>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="alert alert-danger"><h3 class="text-center">No Product Found</h3></div>
                    </div>
                    @endif
                </ul>
                <div class="toolbar-bottom">
                    <div class="toolbar">
                        <div class="pager">
                            <p class="amount">
                                <strong>3 Item(s)</strong>
                            </p>
                            <div class="limiter">
                                <label>Show</label>
                                <select onchange="setLocation(this.value)">
                                    <option value=" " selected="selected">9</option>
                                    <option value=" ">15</option>
                                    <option value=" ">30</option>
                                </select> per page</div>
                            </div>
                            <div class="sorter">
                                <p class="view-mode"></p>
                                <div class="sort-by" style="padding-right: 0px;">
                                    <label>Sort By</label>
                                    <select onchange="setLocation(this.value)">
                                        <option value=" ">Position</option>
                                        <option value=" ">Name</option>
                                        <option value=" ">Price</option>
                                    </select>
                                    <a href="#" title="Set Descending Direction"><img src="assets/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle" /></a>
                                </div>
                                <div class="filter-by" style="float: left; padding-left: 10px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <label>Filter By</label>
                                            </td>
                                            <td>
                                                <select onchange="fillattvalue(this.value)" id="attributes" style="width: 82px;">
                                                    <option value="select">Please Select</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <script type="text/javascript">
        function mycart_update(){
            jQuery("#btn-prod-update").show();
            jQuery("#btn-proceed-checkout").hide();
        };
        jQuery(document).ready(function(){
            jQuery('.login').hover(function () {
                jQuery('#loginlinks').show();
            },
            function () {
                jQuery('#loginlinks').hide();
            });         
        });         
        jQuery(".price").html(function(i, val) {
            return val.replace(/(Rs)/, "<span>$1.</span>");
        });
    </script>
</div>
</div>


@endsection