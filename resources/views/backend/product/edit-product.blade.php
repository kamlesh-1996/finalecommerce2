@extends('layouts.master')

@section('title','Edit Product')

@section('vender-css')
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/krajee/css/fontaws.css') }}">
<link href="{{ asset('backassets/krajee/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/all.css') }}">
<link href="{{ asset('backassets/krajee/themes/explorer-fas/theme.css') }}" rel="stylesheet">

@endsection

@section('page-css')
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/plugins/animate/animate.css') }}">
<style type="text/css">
.hide{
    display: none;
}
.show{
    display: block;
}
</style>
@endsection


@section('page-title','Edit Product')

@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ url('backend/product/create-new-product') }}">Edit Product</a> </li>
@endsection

@section('action')
<a href="{{ url('backend/product') }}" class="btn btn-info" type="button"><span class="ft-eye"></span> View Products</a>
{{-- <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> --}}

@endsection

@section('content')

<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" id="product_form" method="POST" enctype="multipart/form-data" action="{{ url('backend/product/update') }}" novalidate="">
                            @csrf
                            @if(isset($product))
                            <input type="hidden" value="{{$product['id']}}" name="id">
                            @endif
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-image"></i>Product Image</h4>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="companyName">Upload</label>
                                        <input id="product_images" type="file" class="file" name="product_images[]" data-preview-file-type="text" multiple>
                                        <label id="product_images-error" style="display: none;" class="text-danger" for="product_images">Please select category</  label>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="la la-paperclip"></i> General Information</h4>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <textarea id="title" rows="3" class="form-control" name="title" id="title" placeholder="Enter Title">@if(isset($product) && !empty($product['title'])){{$product['title']}}@endif</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sub_title">Sub Title</label>
                                        <textarea id="sub_title" rows="3" class="form-control" name="sub_title" placeholder="Enter Sub Title">@if(isset($product) && !empty($product['sub_title'])){{$product['sub_title']}}@endif</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="qty">Quantity</label>
                                        <input id="qty" class="form-control" name="qty" placeholder="Enter Quantity" @if(isset($product) && !empty($product['qty'])) value="{{$product['qty']}}" @endif>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="attachment">Attachment</label>
                                        <input id="attachment" type="file" class="form-control" name="attachment[]" id="attachment" multiple="">
                                        @if(isset($product['attachment']) && !empty($product['attachment']))
                                        @foreach($product['attachment'] as $innerValue)
                                        <a href="{{ url('public/product-asset/'.$product["product_code"].'/attachment/'.$innerValue)}}" target="_blank" class="badge badge-success">{{ $innerValue }}</a>
                                        @endforeach
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="desc">Description</label>
                                        <textarea name="desc" id="desc" cols="30" rows="15" class="ckeditor">@if(isset($product) && !empty($product['description'])){{$product['description']}}@endif</textarea>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="la la-paperclip"></i> Select Category</h4>

                                <div class="form-group">
                                    <label for="category_id">Select Category</label>
                                    <select id="category_id" name="category_id" class="form-control">
                                        <option value="0" selected="" disabled="">Select Category</option>
                                        @if(isset($categoryTree))
                                        {!! $categoryTree !!}
                                        @endif
                                    </select>
                                </div>

                                <h4 class="form-section"><i class="la la-paperclip"></i> Princing</h4>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="checkbox" name="single_or_multiprice_checkbox" class="switch" @if(isset($product) && $product['multi_price'] != "No") checked="" @endif id="switch11"  disabled="" >
                                    </div>
                                </div>
                                @if(isset($product) && !empty($product['price']) && $product['multi_price'] == "No")
                                <div class="single_price">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <input type="text" name="single_price" placeholder="Enter Price" id="price" required="" @if(isset($product) && !empty($product['price'])) value="{{$product['price']}}" @endif class="form-control">
                                        </div>
                                     </div>
                                </div>
                                @else
                                <div class="multi_price col-md-12">
                                    <table class="table table-responsive">
                                        <thead class="bg-success white">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>CODE NO</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            @if(isset($product['multi_price']) && count($product['multi_price']) >0)
                                             @foreach($product['multi_price'] as $key => $value )
                                              <tr>
                                                  <td>
                                                      <input type="text" name="product_name[]" class="form-control" value="{{ 
                                                        $value->name }}" placeholder="Enter Product name">
                                                  </td>
                                                  <td>
                                                      <input type="text" name="product_code[]" class="form-control" value="{{ $value->code }}" placeholder="Enter Product Code">
                                                  </td>
                                                  <td>
                                                      <input type="text" name="product_price[]" value="{{ $value->price }}" class="form-control" placeholder="Enter Product Price">
                                                  </td>

                                                  <td></td>
                                              </tr>      
                                              @endforeach       
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    <button type="button" class="btn btn-success" id="more_row">Add More Row</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table> 
                                </div>
                            </div>
                            @endif
                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page-vendor-js')
<script src="{{ asset("backassets/krajee/js/plugins/sortable.min.js") }}" type="text/javascript"></script>
<script src="{{ asset('backassets/krajee/js/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backassets/krajee/themes/explorer-fas/theme.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.1/ckeditor.js"></script>
<script src="{{ asset('backassets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}"></script>
<script src="{{  asset('backassets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>


@endsection

@section('custome-js')

<script type="text/javascript">
    jQuery(document).ready(function($) {

        // CKEDITOR.instances['desc'].setData({{$product['desc']}}); 

        @if(isset($product) && !empty($product['category_id']))

        $('#category_id option[value="{{ $product['category_id'] }}"').prop('selected', true);
        @endif

        $('.switch:checkbox').checkboxpicker({
            html: true,
            offLabel: '<span class="icon-remove">Single Princing</span>',
            onLabel: '<span class="icon-ok">Multiple Princing</span>'
        });

        $('#more_row').click(function(event) {
            var tbody = '<tr><td><input type="text" name="product_name[]" class="form-control" placeholder="Enter Product name"></td><td><input type="text" name="product_code[]" class="form-control" placeholder="Enter Product Code"></td><td><input type="text" name="product_price[]" class="form-control" placeholder="Enter Product Price"></td><td class="remove"><button type="button" class="btn btn-success"><span class="la la-remove" style="color:red;"></span></button></td></tr>';
            $('#tbody').append(tbody);
        });

        $('body').on('click', '.remove', function(event) {
            event.preventDefault();
            $(this).parent().fadeOut();
        });

        $('#product_form').validate({
            errorClass : 'text-danger',
            rules : {
                title : {
                    required : true     
                },
                sub_title : {
                    required : true   
                },
                qty : {
                    required : true
                },
                category_id : {
                    required : true
                },
                desc : {
                    required : true
                },
                // "product_images[]" : "required",
                gst : {
                    required : true,
                },
                total : {
                    required : true,
                },
                "product_name[]" : "required",
                "product_code[]" : "required",
                "product_price[]" : "required"
            },
            messages : {
                title : {
                    required : 'Title is required'
                },
                sub_title : {
                    required : 'Sub Title is required'
                },
                qty : {
                    required : 'Quantity is required'  
                },
                category_id : {
                    required : 'Category is required'
                },
                "product_images[]": "Please select Image",
                gst : {
                    required : "GST is required",
                },
                total : {
                    required : 'Total is required'
                },
                "product_name[]" : "Product name required",
                "product_code[]" : "Product code required",
                "product_price[]" : "Product price required"
            },
            submitHandler: function(form) {
                show_loader();
                form.submit();
            }
        });
    });

    $("#product_images").fileinput({
        theme: "explorer-fas",
        showUpload: false,
        overwriteInitial: false,
        initialPreviewAsData: true,
        @if(isset($product) && !empty($product['images']))
        initialPreview : [
           @foreach($product['images'] as $value)
               '{{ url('/') }}/public/product-asset/{{ $product['product_code'] }}/product_images/{{ $value }}',
           @endforeach 
        ],
        initialPreviewConfig: [ 
           @foreach($product['images'] as $value)
            {type: "image", caption: "{{ $value }}", width: "120px", url: "{{ url('/') }}/backend/product/delete-product-image", key: {{ $product->id }}, extra: { name: '{{ $value }}'}},
            @endforeach
        ],
        @endif
        previewFileIcon: '<i class="fa fa-file"></i>',
        previewFileType: "image",
        allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
        browseClass: "btn btn-primary btn-block",
        showCaption: true,
        showRemove: true,
        showUpload: false
    });

    function setMultiPrice(str)
    {
        if(str==true)
        {
            $('#price').val('');
            $('#gst').val('');
            $('#total').val('');
            $('.single_price').addClass('hide');
            $('.single_price').removeClass('show');   
            $('.multi_price').removeClass('hide');   
            $('.multi_price').addClass('show');
        }
        else
        {

            $('.multi_price').addClass('hide');
            $('.multi_price').removeClass('show');
            $('.single_price').removeClass('hide');
            $('.single_price').addClass('show');
        }
    }
</script>
@endsection


