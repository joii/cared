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
                            <li class="breadcrumb-item"><a href="{{ route('backend.banner.index') }}">Banners</a></li>
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
                        <form id="myForm" action="{{ route('backend.banner.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="section_id" class="form-label">Section<span class="text-danger"> *</span></label>
                                             <select class="form-select" id="section_id" name="section_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                @if($navigations !=null)
                                                     @foreach ($navigations as $item)
                                                    <option value="{{ $item->id }}" >{{ $item->name_en }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title1_en" class="form-label">Title#1 in English</label>
                                            <input class="form-control" type="text" name="title1_en"  id="title1_en">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title1_th" class="form-label">Title#1 in Thai</label>
                                            <input class="form-control" type="text" name="title1_th"  id="title1_th">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title2_en" class="form-label">Title#2 in English</label>
                                            <input class="form-control" type="text" name="title2_en"  id="title2_en">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title2_th" class="form-label">Title#2 in Thai</label>
                                            <input class="form-control" type="text" name="title2_th"  id="title2_th">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title3_en" class="form-label">Title#3 in English</label>
                                            <input class="form-control" type="text" name="title3_en"  id="title3_en">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title3_th" class="form-label">Title#3 in Thai</label>
                                            <input class="form-control" type="text" name="title3_th"  id="title3_th">
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title4_en" class="form-label">Title#4 in English</label>
                                            <input class="form-control" type="text" name="title4_en"  id="title4_en">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title4_th" class="form-label">Title#4 in Thai</label>
                                            <input class="form-control" type="text" name="title4_th"  id="title4_th">
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Banner (Home:1920 × 1957px, Other page:1920 × 640px)<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="file" name="image_path"  id="image_path" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="link_url" class="form-label">External Link (leave blank if none)</label>
                                            <input class="form-control" type="text" name="link_url"  id="link_url">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="alt_text" class="form-label">Alternative Text (alt)</label>
                                            <input class="form-control" type="text" name="alt_text"  id="alt_text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Theme</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="theme" id="theme1" checked="" value="text-light">
                                            <label class="form-check-label" for="theme1">
                                               Light
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="theme" id="theme2" value="text-dark">
                                            <label class="form-check-label" for="theme2">
                                               Dark
                                            </label>
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
