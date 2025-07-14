@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Banners</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Banners</li>
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
                                <a href="{{ route('backend.banner.create') }}" class="btn btn-success" >Add New</a>
                            </div>

                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Banner</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($banners as $item)
                                    <tr>
                                        <td>
                                            @foreach ($navigations as $nav)
                                              @if($nav->id == $item->section_id)
                                              <span>{{$nav->name_en }}</span>
                                              @endif
                                            @endforeach
                                        </td>
                                        <td>@if(file_exists($item->image_path)) <img src="{{ asset($item->image_path) }}" width="200" /> @endif </td>
                                        <td>{!! $item->status =='active'?'Active':'Inactive' !!}</td>
                                        <th><a href="{{ route('backend.banner.edit',$item->id) }}" class="btn btn-outline-danger">Edit</a></th>
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
