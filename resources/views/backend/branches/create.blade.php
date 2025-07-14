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
                            <li class="breadcrumb-item"><a href="{{ route('backend.branch.index') }}">Branches</a></li>
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
                        <form id="myForm" action="{{ route('backend.branch.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Room Type</label>
                                        <div class="selectgroup selectgroup-pills">

                                            <label class="selectgroup-item">
                                                 @if($room_types !=null)
                                                     @foreach ($room_types as $item)
                                                    <input type="checkbox" name="room_type[]" value="{{ $item->id }}" class="selectgroup-input" checked >
                                                    <span class="selectgroup-button">{{ $item->name_en }}</span>
                                                     @endforeach
                                                @endif
                                            </label>

                                        </div>
                                        </div>
                                </div>
                             </div>

                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Facilities</label>
                                        <div class="selectgroup selectgroup-pills">

                                            <label class="selectgroup-item">
                                                 @if($facilities !=null)
                                                     @foreach ($facilities as $item)
                                                    <input type="checkbox" name="facilities[]" value="{{ $item->id }}" class="selectgroup-input" checked >
                                                    <span class="selectgroup-button">{{ $item->name_en }}</span>
                                                     @endforeach
                                                @endif
                                            </label>

                                        </div>
                                        </div>
                                </div>
                             </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_en" class="form-label">Name in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_en"  id="name_en" onchange="syncSlugENValue()" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_th" class="form-label">Name in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_th"  id="name_th" onchange="syncSlugTHValue()" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="subtitle_en" class="form-label">Subtitle in English</label>
                                            <input class="form-control" type="text" name="subtitle_en"  id="subtitle_en" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="subtitle_th" class="form-label">Subtitle in Thai</label>
                                            <input class="form-control" type="text" name="subtitle_th"  id="subtitle_th" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="address_en" class="form-label">Address in English</label>
                                            <input class="form-control" type="text" name="address_en"  id="address_en" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="address_th" class="form-label">Address in Thai</label>
                                            <input class="form-control" type="text" name="address_th"  id="address_th" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_en" class="form-label">Detail in English</label>
                                            <textarea class="summernote" name="detail_en"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_th" class="form-label">Detail in Thai</label>
                                            <textarea class="summernote" name="detail_th"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="logo_path" class="form-label">Branch Logo(Maximum Height:100px)<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="file" name="logo_path"  id="logo_path" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="thumbnail_path" class="form-label">Thumbnail (600 × 480px)<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="file" name="thumbnail_path"  id="thumbnail_path" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="image_path" class="form-label">Banner (1920 × 640px)<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="file" name="image_path"  id="image_path" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="nearby_en" class="form-label">Near By in English (leave blank if none)</label>
                                            <input class="form-control" type="text" name="nearby_en"  id="nearbyr_en">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="nearby_th" class="form-label">Near By in Thai (leave blank if none)</label>
                                            <input class="form-control" type="text" name="nearby_th"  id="nearby_th">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="price_range" class="form-label">Price (leave blank if none)</label>
                                            <input class="form-control" type="number" name="price_range"  id="price_range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="area_en" class="form-label">Area in English (leave blank if none)</label>
                                            <input class="form-control" type="text" name="area_en"  id="area_en">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="area_th" class="form-label">Area in Thai (leave blank if none)</label>
                                            <input class="form-control" type="text" name="area_th"  id="area_th">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pdf_en_path" class="form-label">Upload PDF File (English Version)</label>
                                            <input class="form-control" type="file" name="pdf_en_path"  id="pdf_en_path">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pdf_th_path" class="form-label">Upload PDF File (Thai Version)</label>
                                            <input class="form-control" type="file" name="pdf_th_path"  id="pdf_th_path">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="line_url" class="form-label">Line (leave blank if none)</label>
                                            <input class="form-control" type="text" name="line_url"  id="line_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="facebook_url" class="form-label">Facebook (leave blank if none)</label>
                                            <input class="form-control" type="text" name="facebook_url"  id="facebook_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="gmap_url" class="form-label">Google Map (leave blank if none)</label>
                                            <input class="form-control" type="text" name="gmap_url"  id="gmap_url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pnone_no" class="form-label">Pnone No. (leave blank if none)</label>
                                            <input class="form-control" type="text" name="pnone_no"  id="pnone_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="call_center_no" class="form-label">Call Center No. (leave blank if none)</label>
                                            <input class="form-control" type="text" name="call_center_no"  id="call_center_no">
                                        </div>
                                    </div>
                                </div>
                             </div>

                              <div class="row">
                                <div class="col-lg-12">
                                    <h4>SEO</h4><hr/>
                                </div>
                              </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_title" class="form-label">Meta Title<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_title"  id="meta_title" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_description" class="form-label">Meta Description<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_description"  id="meta_description" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_keywords" class="form-label">Meta Keyword</label>
                                            <input class="form-control" type="text" name="meta_keywords"  id="meta_keywords">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="canonical_url" class="form-label">Canonical URL</label>
                                            <input class="form-control" type="text" name="canonical_url"  id="canonical_url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_en" class="form-label">Slug in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_en"  id="slug_en" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_th" class="form-label">Slug in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_th"  id="slug_th" required>
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
