@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Footer Area</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Footer Area</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

           <!-- start content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="text-align: right;">
                                <a href="{{ route('backend.footer.create') }}" class="btn btn-success" >Add New</a>
                            </div>

                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Name in English</th>
                                        <th>Name in Thai</th>
                                        <th>Description</th>
                                        <th>Address</th>
                                        <th>External URL</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($footers as $item)
                                    <tr>
                                        <td>{!! $item->name_en !!}</td>
                                        <td>{!! $item->name_th !!}</td>
                                        <td>{!! $item->description_en !!}</td>
                                        <td>{{ $item->address_en!=NULL?$item->address_en:'-' }}</td>
                                        <td>{{ $item->external_url!=NULL?$item->external_url:'-' }}</td>
                                        <td>{!! $item->status =='active'?'Active':'Inactive' !!}</td>
                                        <th><a href="{{ route('backend.footer.edit',$item->id) }}" class="btn btn-outline-danger">Edit</a></th>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            <!-- end content -->



    </div><!-- container-fluid -->
</div><!-- page-content -->
@endsection
