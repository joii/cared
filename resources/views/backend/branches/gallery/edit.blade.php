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
                        <form id="myForm" action="{{ route('backend.branch_gallery.update') }}" method="post" enctype="multipart/form-data" >
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
                                                    <option value="1" {{ $gallery->category_id=='1'?'selected':'' }}>Photo Gallery</option>
                                                    <option value="2" {{ $gallery->category_id=='2'?'selected':'' }}>Vibe of the place</option>
                                            </select>
                                        </div>
                                </div>
                             </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="ttitle_en" class="form-label">title in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_en"  id="title_en"  required value="{{ $gallery->title_en }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title_th" class="form-label">Title in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_th"  id="title_th" required value="{{ $gallery->title_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Banner (800 × 535px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($gallery->image_path))
                                               <p>
                                                <img src="{{ asset($gallery->image_path) }}" alt="Image" style="max-width: 200px; max-height: 100px;">
                                               </p>
                                            @endif
                                            <input class="form-control" type="file" name="image_path"  id="image_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Status</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{ $gallery->status=='active'?'checked':'' }} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" {{ $gallery->status=='inactive'?'checked':'' }} value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $gallery->id }}">
                                <input type="hidden" name="old_image" value="{{ $gallery->image_path }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.branch_gallery.destroy',$gallery->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>

                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
