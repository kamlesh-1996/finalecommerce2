@extends('layouts.master')

@if(isset($eCategory) && !empty($eCategory))
@section('title','Edit Category')
@else
@section('title','Add New Category')
@endif

@section('vender-css')

@endsection

@section('page-css')


@endsection

@if(isset($eCategory) && !empty($eCategory))
@section('page-title','Edit Category')
@else
@section('page-title','Add New Category')
@endif

@section('breadcrumb')
@if(isset($eCategory) && !empty($eCategory))
<li class="breadcrumb-item active"><a href="{{ url('backend/category/create-new-category') }}">Edit Category</a></li>
@else
<li class="breadcrumb-item active"><a href="{{ url('backend/category/create-new-category') }}">Create New Category</a> </li>
@endif
@endsection

@section('action')
<a href="{{ url('backend/category') }}" class="btn btn-info"><span class="ft-eye"></span> View Categories</a>
{{-- <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> --}}

@endsection

@section('content')

<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" id="category_form" method="POST" @if(isset($eCategory) && !empty($eCategory)) 
                        action="{{ url('backend/category/update/'.$eCategory->id) }}" @else action="{{ url('backend/category/store') }}" @endif enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                            <h4 class="form-section"><i class="la la-briefcase"></i>Image</h4>
                            <div class="form-group">
                                <input type="file" style="display: none;" name="image" class="form-control col-md-9" id="image" @if(isset($eCategory) && !empty($eCategory->category)) value="{{ $eCategory->category }}" @endif>
                                <center>
                                <button type="button" class="btn btn-success select_img_btn">Select Image</button>
                                @if(isset($eCategory['image']) && !empty($eCategory['image']))
                                <img src="{{ asset('category/'.$eCategory['image']) }}" style="width:70px;height: 70px;" class="img-thumbnail image-previous">
                                @else
                                <img src="{{ asset('category/dummy.png') }}" style="width:70px;height: 70px;" class="img-thumbnail image-previous">
                                @endif
                                </center>
                                <br><br>
                            </div>
                             <h4 class="form-section"><i class="la la-briefcase"></i>Category</h4>
                             <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" name="category" class="form-control"  placeholder="Enter Category" @if(isset($eCategory) && !empty($eCategory->category)) value="{{ $eCategory->category }}" @endif>
                            </div>

                            <div class="form-group category_wrapper">
                                <label for="category">Parent Category</label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">Root</option>
                                    @if(isset($categoryArr) && !empty($categoryArr))
                                    {!! $categoryArr !!}
                                    @endif
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-actions">
                            @if(isset($eCategory) && !empty($eCategory))
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Update
                            </button>
                            @else
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                            @endif
                            <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
     <div class="form-group">
        <div class="text-bold-600 font-medium-2">
            Single Select with Label
        </div>
        <select class="select2 form-control" id="id_h5_single">
            <?php echo $categoryArr; ?>
        </select>
    </div>
</div>

</div>
</section>
@endsection

@section('page-vendor-js')

<script src="{{  asset('backassets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>

@endsection

@section('custome-js')
<script type="text/javascript">

    jQuery(document).ready(function($){ 

    $('#image').change(function(event) {
        readUrl(this);
    });

    $('.select_img_btn').click(function(event) {
       $('#image').trigger('click');
    });

     @if(isset($id) && !empty($id) && !empty($eCategory['category_id']))   
     $('#category option[value="{{ base64_decode($id) }}"]').prop('selected', true);
     @endif
     $('#category_form').validate({
        errorClass : 'text-danger',
        rules : {
            category : {
                required : true     
            }
        },
        messages : {
            category : {
                required : 'Category is required'
            }
        },
        submitHandler: function(form) {
            show_loader();
            form.submit();
        }
    });
 });



    function show_loader()
    {
       $.blockUI({
        message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
        overlayCSS: {
            backgroundColor: '#FFF',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
   }

   function readUrl(input)
   {
    var fileTypes = ["jpg","jpeg","png","gif"];
    var extension  = input.files[0].name.split('.').pop().toLowerCase();
    var isSuccess = fileTypes.indexOf(extension) > -1;
    if(isSuccess)
    {
        var reader = new FileReader();
        reader.onload = function ( e ){
            $('.image-previous').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $('#file-error').hide();
    }
    else
    {
        alert('Invalid Image');
        // $('#png_file_custom').show();
    }

   }

</script>
@endsection


