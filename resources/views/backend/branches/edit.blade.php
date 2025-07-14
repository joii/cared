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
                        <form id="myForm" action="{{ route('backend.branch.update') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Room Type</label>
                                        <div class="selectgroup selectgroup-pills">


                                            <label class="selectgroup-item">
                                                 @if($room_types !=null)
                                                     @foreach ($room_types as $key=>$item)

                                                       <input type="checkbox" name="room_type[]" value="{{ $item->id }}" {{ $item->id ==$b_room_type[$key]?'checked':'' }} class="selectgroup-input" >

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
                                                     @foreach ($facilities as $key=>$item)
                                                    <input type="checkbox" name="facilities[]" value="{{ $item->id }}" {{ $item->id ==$b_facilities[$key]?'checked':'' }} class="selectgroup-input" >
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
                                            <input class="form-control" type="text" name="name_en"  id="name_en" onchange="syncSlugENValue()" required value="{{ $branch->name_en }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="name_th" class="form-label">Name in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="name_th"  id="name_th" onchange="syncSlugTHValue()" required value="{{ $branch->name_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="subtitle_en" class="form-label">Subtitle in English</label>
                                            <input class="form-control" type="text" name="subtitle_en"  id="subtitle_en" value="{{ $branch->subtitle_en }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="subtitle_th" class="form-label">Subtitle in Thai</label>
                                            <input class="form-control" type="text" name="subtitle_th"  id="subtitle_th" value="{{ $branch->subtitle_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="address_en" class="form-label">Address in English</label>
                                            <input class="form-control" type="text" name="address_en"  id="address_en" value="{{ $branch->address_en }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="address_th" class="form-label">Address in Thai</label>
                                            <input class="form-control" type="text" name="address_th"  id="address_th" value="{{ $branch->address_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_en" class="form-label">Detail in English</label>
                                            <textarea class="summernote" name="detail_en">{{ $branch->detail_en }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_th" class="form-label">Detail in Thai</label>
                                            <textarea class="summernote" name="detail_th">{{ $branch->detail_th }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="logo_path" class="form-label">Branch Logo(Maximum Height:100px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($branch->logo_path))
                                               <p>
                                                <img src="{{ asset($branch->logo_path) }}" alt="Image" style="max-width: 200px; max-height: 100px;">
                                               </p>
                                            @endif
                                            <input class="form-control" type="file" name="logo_path"  id="logo_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="thumbnail_path" class="form-label">Thumbnail (600 × 480px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($branch->thumbnail_path))
                                               <p>
                                                <img src="{{ asset($branch->thumbnail_path) }}" alt="Image" style="max-width: 200px; max-height: 100px;">
                                               </p>
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
                                            <label for="image_path" class="form-label">Banner (1920 × 640px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($branch->image_path))
                                               <p>
                                                <img src="{{ asset($branch->image_path) }}" alt="Image" style="max-width: 200px; max-height: 100px;">
                                               </p>
                                            @endif
                                            <input class="form-control" type="file" name="image_path"  id="image_path" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="nearby_en" class="form-label">Near By in English (leave blank if none)</label>
                                            <input class="form-control" type="text" name="nearby_en"  id="nearby_en" value="{{ $branch->nearby_en }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="nearby_th" class="form-label">Near By in Thai (leave blank if none)</label>
                                            <input class="form-control" type="text" name="nearby_th"  id="nearby_th" value="{{ $branch->nearby_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="price_range" class="form-label">Price (leave blank if none)</label>
                                            <input class="form-control" type="number" name="price_range"  id="price_range" value="{{ $branch->price_range }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="area_en" class="form-label">Area in English (leave blank if none)</label>
                                            <input class="form-control" type="text" name="area_en"  id="area_en" value="{{ $branch->area_en }}">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="area_th" class="form-label">Area in Thai (leave blank if none)</label>
                                            <input class="form-control" type="text" name="area_th"  id="area_th" value="{{ $branch->area_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pdf_en_path" class="form-label">Upload PDF File (English Version)</label>

                                                <p><a href="{{ asset($branch->pdf_en_path) }}" target="_blank">Download PDF</a></p>

                                            <input class="form-control" type="file" name="pdf_en_path"  id="pdf_en_path" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pdf_th_path" class="form-label">Upload PDF File (Thai Version)</label>

                                                <p><a href="{{ asset($branch->pdf_th_path) }}" target="_blank">Download PDF</a></p>

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
                                            <input class="form-control" type="text" name="line_url"  id="line_url" value="{{ $branch->line_url }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="facebook_url" class="form-label">Facebook (leave blank if none)</label>
                                            <input class="form-control" type="text" name="facebook_url"  id="facebook_url" value="{{ $branch->facebook_url }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="gmap_url" class="form-label">Google Map (leave blank if none)</label>
                                            <input class="form-control" type="text" name="gmap_url"  id="gmap_url" value="{{ $branch->gmap_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="pnone_no" class="form-label">Pnone No. (leave blank if none)</label>
                                            <input class="form-control" type="text" name="pnone_no"  id="pnone_no" value="{{ $branch->pnone_no }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="call_center_no" class="form-label">Call Center No. (leave blank if none)</label>
                                            <input class="form-control" type="text" name="call_center_no"  id="call_center_no" value="{{ $branch->call_center_no }}">
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
                                            <input class="form-control" type="text" name="meta_title"  id="meta_title" required value="{{ $branch->meta_title }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_description" class="form-label">Meta Description<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_description"  id="meta_description" required value="{{ $branch->meta_description }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_keywords" class="form-label">Meta Keyword</label>
                                            <input class="form-control" type="text" name="meta_keywords"  id="meta_keywords" value="{{ $branch->meta_keywords }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="canonical_url" class="form-label">Canonical URL</label>
                                            <input class="form-control" type="text" name="canonical_url"  id="canonical_url" value="{{ $branch->canonical_url }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_en" class="form-label">Slug in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_en"  id="slug_en" required value="{{ $branch->slug_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_th" class="form-label">Slug in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_th"  id="slug_th" required value="{{ $branch->slug_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Status</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{ $branch->status=='active'?'checked':'' }} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" {{ $branch->status=='inactive'?'checked':'' }} value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $branch->id }}">
                                <input type="hidden" name="old_pdf_en" value="{{ $branch->pdf_en_path }}">
                                <input type="hidden" name="old_pdf_th" value="{{ $branch->pdf_th_path }}">
                                <input type="hidden" name="old_image" value="{{ $branch->image_path }}">
                                <input type="hidden" name="old_thumbnail" value="{{ $branch->thumbnail_path }}">
                                <input type="hidden" name="old_logo" value="{{ $branch->logo_path }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.branch.destroy',$branch->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
                                <a href="{{ route('backend.branch_gallery.index',$branch->id) }}" class="btn btn-warning waves-effect waves-light" target="_blank">Photo Gallery</a>
                                <a href="{{ route('backend.branch_rate_card.index',$branch->id) }}" class="btn btn-secondary waves-effect waves-light" target="_blank">Rate Card</a>
                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
