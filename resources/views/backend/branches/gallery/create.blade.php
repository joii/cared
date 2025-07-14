@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Branches</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.branch_gallery.index',$branch_id) }}">Gallery</a></li>
                            <li class="breadcrumb-item active">Add New</li>
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
                        <form id="myForm" action="{{ route('backend.branch_gallery.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Branch</label>
                                          <select class="form-select" id="branch_id" name="branch_id"  required="">
                                                <option value="" selected>--Select--</option>
                                               @if($branches !=null)
                                                     @foreach ($branches as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id==$branch_id?'selected':'' }} >{{ $item->name_en }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Category</label>
                                          <select class="form-select" id="category_id" name="category_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                    <option value="1">Photo Gallery</option>
                                                    <option value="2">Vibe of the place</option>
                                            </select>
                                        </div>
                                </div>
                             </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="ttitle_en" class="form-label">title in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_en"  id="title_en"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title_th" class="form-label">Title in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_th"  id="title_th" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Banner (800 × 535px)<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="file" name="image_path"  id="image_path" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Status</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" checked="" value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
