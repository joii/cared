@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Gallery</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                           <li class="breadcrumb-item"><a href="{{ route('backend.branch.edit',$branch->id) }}">{{ $branch->name_en }}</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
                                <a href="{{ route('backend.branch_gallery.create',$branch_id) }}" class="btn btn-success" >Add New</a>
                            </div>

                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Category</th>
                                        <th>Titlein English</th>
                                        <th>Title in Thai</th>
                                        <th>Slug in English</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($galleries as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->image_path) }}" width="150" /></td>
                                         <td>{{ $item->category_id==1?'Photo Gallery':'Vibe of the place' }}</td>
                                        <td>{!! $item->title_th !!}</td>
                                        <td>{!! $item->title_en !!}</td>
                                        <td>{!! $item->status =='active'?'Active':'Inactive' !!}</td>
                                        <th><a href="{{ route('backend.branch_gallery.edit',$item->id) }}" class="btn btn-outline-danger">Edit</a></th>
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
