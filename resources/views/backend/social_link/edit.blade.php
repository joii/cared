@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Social Links</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.social_link.index') }}">Social Links</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>

                </div>
            </div>
            </div>
            <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">

                    <div class="card-body">
                        <form id="myForm" action="{{ route('backend.social_link.update') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_en" class="form-label">Name in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_en"  id="name_en"  required value="{{ $social->name_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_th" class="form-label">Name in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_th"  id="name_th"  required value="{{ $social->name_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="link_url" class="form-label">Link URL<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="link_url"  id="link_url" required value="{{ $social->link_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if (file_exists($social->qrcode))
                                        <div>
                                            <img src="{{ asset($social->qrcode) }}" alt="QR Code" width="150" height="150">
                                        </div>
                                    @endif

                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="qrcode" class="form-label">QR Code (300x300px)</label>
                                            <input class="form-control" type="file" name="qrcode"  id="qrcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="icon_class" class="form-label">Icon Class (leave blank if none)</label>
                                            <input class="form-control" type="text" name="icon_class"  id="icon_class"  value="{{ $social->icon_class }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Status</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{ $social->status=='active'?'checked':'' }} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" {{ $social->status=='inactive'?'checked':'' }} value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $social->id }}">
                                <input type="hidden" name="old_qrcode" value="{{ $social->qrcode }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.social_link.destroy',$social->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
