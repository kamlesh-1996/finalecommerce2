@extends('layouts.master')

@section('title','Dashboard')

@section('vender-css')
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/extensions/sweetalert.css') }}">
@endsection

@section('page-title','Catogory')

@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ url('backend/category') }}">Category</a> </li>
@endsection

@section('action')
<a href="{{ url('backend/category/create-new-category') }}" class="btn btn-info"><span class="ft-plus-circle"></span> Add New Category</a>
@endsection

@section('content')
<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <table class="table table-striped table-bordered dataex-html5-selectors">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($categoryArr) && count($categoryArr) > 0)
                                @foreach($categoryArr as $key => $value)
                                <tr id="row{{ $value->id }}">
                                    <td width="40"><img src="{{ asset('category/'.$value['image']) }}" width="50" class="img-thumbnail"></td>
                                    <td><b style="color:black;">{{ ucfirst($value->category) }}</b><br>
                                        @if(!empty($value['category_chain']))
                                            @foreach($value['category_chain'] as $innerkey => $innervalue )
                                            <span class="badge badge-success">{{ $innervalue }}</span>
                                            @endforeach
                                            @if($loop->last)
                                
                                            @endif
                                        @endif
                                    </td>
                                    <td width="100">
                                        <a href="{{ url('backend/category/edit/'.$value->id) }}">
                                            <span class="la la-pencil" style="color: red;font-size: 25px;"></span>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteCategory({{ 
                                            $value->id }})">
                                            <span class="la la-trash" style="color: blue;font-size: 25px;"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('page-vendor-js')
<script src="{{ asset('backassets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/jszip.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/pdfmake.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/vfs_fonts.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/buttons.print.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/tables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backassets/vendors/js/extensions/sweetalert.min.js') }}"></script>

@endsection


@section('custome-js')
<script type="text/javascript">
    jQuery(document).ready(function($) {

        $('.dataex-html5-selectors').DataTable({
            // "pageLength": 5
        });
    });

    function deleteCategory(id = 0)
    {   
        swal({
            title: "Are you sure?",
            text: "Delete This Categiory",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, cancel plx!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                 $.ajax({
                    url: '{{ url('/') }}/backend/category/delete',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id},
                    success : function(response)
                    {
                        if(response.success){
                            $('#row'+id).fadeOut();
                            swal("Success","Category Deleted Successfully","success");
                        }
                        if(response.error){
                            // deleteForceFullly(id);
                            swal("Warning!","Sorry! This Category Has Multiple Subcategory", "warning");
                        }
                    }
                });
                
            } else {
                 swal("Cancelled", "Category is not Deleted", "error");
            }
        });
    }

    function deleteForceFullly(id)
    {
        swal({
            title: "Are you sure?",
            text: "This Category have multiple sub category",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, Delete ForceFully!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                 $.ajax({
                    url: '{{ url('/') }}/backend/category/forcefully-delete',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id },
                    success : function(response)
                    {
                        if(response.success){
                            $('#row'+id).fadeOut();
                            swal('Success','Categoried Deleted Successfully','success');
                        }
                        if(response.error){
                            swal('Error','Some erorr','error');
                        }   
                    }
                });
                
            } else {
                 swal("Cancelled", "Category is safe", "error");
            }
        });


    }

</script>
@endsection


