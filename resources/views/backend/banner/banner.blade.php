@extends('layouts.master')

@section('title','Banner')

@section('vender-css')
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/krajee/css/fontaws.css') }}">
<link href="{{ asset('backassets/krajee/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link href="{{ asset('backassets/krajee/themes/explorer-fas/theme.css') }}" rel="stylesheet">

@endsection


@section('page-title','Banner')

@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ url('backend/category') }}">Banner</a> </li>
@endsection

@section('action')

@endsection

@section('content')
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('backend/banner/store') }}">
                            @csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-image"></i>Banner Images</h4>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="companyName">Select Images</label>
                                        <input id="input-id" type="file" class="file" name="images[]" data-preview-file-type="text" multiple>
                                    </div>
                                </div>
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
<script src="{{ asset('backassets/krajee/themes/explorer-fas/sortable.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backassets/krajee/js/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backassets/krajee/themes/explorer-fas/theme.js') }}"></script>
@endsection

@section('custome-js')
<script type="text/javascript">
    $("#input-id").fileinput({
     theme: "explorer-fas",
     showUpload: true,
     overwriteInitial: false,
     uploadAsync: true,

     // minFileCount: 1,
     maxFileCount: 3,
     initialPreviewAsData: true,
     @if(isset($banners) && count($banners) > 0)
     initialPreview : [
        @foreach($banners as $value)
            '{{ url('/') }}/public/banner/{{ $value->image }}',
        @endforeach 
     ],
     initialPreviewConfig: [
        @foreach($banners as $value)
         {type: "image",caption: "{{ $value->image }}", width: "120px", url: "banner/delete", key: {{ $value->id }}, extra: { id: '{{ base64_encode($value->id) }}'}},
         @endforeach
     ],
     @endif

     previewFileIcon: '<i class="fa fa-file"></i>',
     previewFileType: "image",
     allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
     browseClass: "btn btn-primary btn-block",
     showCaption: true,

     showRemove: true,
 });

</script>
@endsection


