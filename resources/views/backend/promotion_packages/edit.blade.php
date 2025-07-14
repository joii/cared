@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Promotion Packages</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.promotion_package.index') }}">Promotion Packages</a></li>
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
                        <form id="myForm" action="{{ route('backend.promotion_package.update') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="package_category_id" class="form-label">Category<span class="text-danger"> *</span></label>
                                             <select class="form-select" id="package_category_id" name="package_category_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                @if($package_categories !=null)
                                                     @foreach ($package_categories as $item)
                                                    <option value="{{ $item->id }}" {{ $promotion->package_category_id==$item->id?'selected':'' }}>{{ $item->name_en }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_en" class="form-label">Name in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_en"  id="name_en" onchange="syncSlugENValue()" required value="{{ $promotion->name_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_th" class="form-label">Name in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_th"  id="name_th" onchange="syncSlugTHValue()" required value="{{ $promotion->name_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="description_en"  id="description_en"  required value="{{ $promotion->description_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="description_th"  id="description_th"  onchange="syncMetaDescTHValue()" required value="{{ $promotion->description_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Price (leave blank if none)</label>
                                            <input class="form-control" type="number" name="price"  id="price" value="{{ $promotion->price }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="start_date">Start Date<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control datepicker" name="start_date"  id="start_date" required value="{{ $promotion->start_date }}">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="end_date">End Date<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control datepicker" name="end_date"  id="end_date" required value="{{ $promotion->end_date }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="thumbnail_path" class="form-label">Thumbnail (1000x1000px)</label>
                                             @if (file_exists($promotion->thumbnail_path) && $promotion->thumbnail_path!= '')
                                                 <p><img src="{{ asset($promotion->thumbnail_path) }}" style="max-width: 100px; max-height: 100px;"></p>
                                             @endif
                                            <input class="form-control" type="file" name="thumbnail_path"  id="thumbnail_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Main Photo (Maximum Width:1000px)</label>
                                             @if (file_exists($promotion->image_path) && $promotion->image_path!= '')
                                                 <p><img src="{{ asset($promotion->image_path) }}" style="max-width: 100px; max-height: 100px;"></p>
                                             @endif
                                            <input class="form-control" type="file" name="image_path"  id="image_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="external_url" class="form-label">External URL (leave blank if none)</label>
                                            <input class="form-control" type="text" name="external_url"  id="external_url" value="{{ $promotion->external_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_title" class="form-label">Meta Title<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_title"  id="meta_title" required value="{{ $promotion->meta_title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_description" class="form-label">Meta Description<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_description"  id="meta_description" required value="{{ $promotion->meta_description }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_keywords" class="form-label">Meta Keyword</label>
                                            <input class="form-control" type="text" name="meta_keywords"  id="meta_keywords" value="{{ $promotion->meta_keywords }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="canonical_url" class="form-label">Canonical URL</label>
                                            <input class="form-control" type="text" name="canonical_url"  id="canonical_url" value="{{ $promotion->canonical_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_en" class="form-label">Slug in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_en"  id="slug_en" required value="{{ $promotion->slug_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_th" class="form-label">Slug in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_th"  id="slug_th" required value="{{ $promotion->slug_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">สถานะ</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{  $promotion->status=='active'?'checked':'' }} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" value="inactive" {{  $promotion->status=='inactive'?'checked':'' }}>
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $promotion->id }}">
                                <input type="hidden" name="old_thumbnail" value="{{ $promotion->thumbnail_path }}">
                                <input type="hidden" name="old_image" value="{{ $promotion->image_path }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.promotion_package.destroy',$promotion->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
