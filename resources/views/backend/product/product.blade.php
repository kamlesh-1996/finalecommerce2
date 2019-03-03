@extends('layouts.master')

@section('title','Dashboard')

@section('vender-css')
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
@endsection


@section('page-title','Products List')

@section('breadcrumb')
<li class="breadcrumb-item active"><a href="{{ url('backend/product') }}">Products</a> </li>
@endsection

@section('action')
<a href="{{ url('backend/product/create-new-product') }}" class="btn btn-info" type="button"><span class="ft-plus-circle"></span> Add New Product</a>
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
                                    <th>Code</th>
                                    <th>Images</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Quinity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($products) && count($products) > 0)
                                @foreach($products as $key => $value)
                                <tr id="row{{ $value->id }}">
                                    <td width="10">  
                                        <a href="{{ url('backend/product/view/'.$value['product_code']) }}">{{ $value['product_code'] }}
                                        </a>
                                    </td>
                                    <td width="220">
                                        @if(empty($value['new_images']))
                                        <strong><hr></strong>
                                        @else
                                        @foreach($value['new_images'] as 
                                        $imgkeys => $imgvalues)
                                        <img src="{{ asset('product-asset/'.$value['product_code'].'/product_images/'.$imgvalues) }}" class="img-thumbnail" height="50px" width="50px">
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>{{ ucfirst($value['title']) }}</td>
                                    <td>
                                        @if(!empty($value['category']['category']))
                                        {{ $value['category']['category'] }}
                                        @else
                                        Uncategory
                                        @endif
                                    </td>
                                    <td style="width:10px">{{ $value['qty'] }}</td>
                                    <td>
                                        <a href="{{ url('backend/product/edit/'.base64_encode($value->id)) }}">
                                            <span class="la la-pencil" style="color: red;font-size: 25px;"></span>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteProduct({{ $value->id }})">
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
<script src="{{ asset('backassets/vendors/js/extensions/sweetalert.min.js') }}"></script>
@endsection


@section('custome-js')
<script type="text/javascript">
    jQuery(document).ready(function($) {

        $('.dataex-html5-selectors').DataTable();
    });

    function deleteProduct(id = 0)
    {   
        swal({
            title: "Are you sure?",
            text: "Delete this product",
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
                    url: '{{ url('/') }}/backend/product/delete',
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id},
                    success : function(response)
                    {
                        if(response.success){
                            $('#row'+id).fadeOut();
                             swal('Success','Product Deleted Successfully','success');
                            // swal.close();
                        }
                    }
                });
            }
        });
    }

</script>
@endsection


