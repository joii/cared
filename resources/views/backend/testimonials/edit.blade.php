@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Testimonials</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.testimonials.index') }}">Testimonials</a></li>
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
                        <form id="myForm" action="{{ route('backend.testimonials.update') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_en" class="form-label">Name in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_en"  id="name_en"  required value="{{ $testimonial->name_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_th" class="form-label">Name in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_th"  id="name_th" required value="{{ $testimonial->name_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="branch_en" class="form-label">Branch in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="branch_en"  id="branch_en" required value="{{ $testimonial->branch_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="branch_th" class="form-label">Branch in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="branch_th"  id="branch_th" required value="{{ $testimonial->branch_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in English<span class="text-danger"> *</span></label>
                                             <textarea class="form-control" name="description_en" id="description_en" required>{{ $testimonial->description_en }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in Thai<span class="text-danger"> *</span></label>
                                            <textarea class="form-control" name="description_th" id="description_th" required>{{ $testimonial->description_th }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Main Photo (100x100px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($testimonial->image_path) && $testimonial->image_path!= '')
                                                 <p><img src="{{ asset($testimonial->image_path) }}" style="max-width: 100px; max-height: 100px;"></p>
                                            @endif
                                            <input class="form-control" type="file" name="image_path"  id="image_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">สถานะ</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{ $testimonial->status=='active'?'checked':''}} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" {{ $testimonial->status=='inactive'?'checked':''}} value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $testimonial->id }}">
                                <input type="hidden" name="old_image" value="{{ $testimonial->image_path }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.testimonials.destroy',$testimonial->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>

                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
