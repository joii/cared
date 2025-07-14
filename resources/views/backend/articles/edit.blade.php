@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Articles</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.article.index') }}">Articles</a></li>
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
                        <form id="myForm" action="{{ route('backend.article.update') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="category_id" class="form-label">Category<span class="text-danger"> *</span></label>
                                             <select class="form-select" id="category_id" name="category_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                @if($categories !=null)
                                                     @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id==$article->category_id?'selected':'' }} >{{ $item->name_en }}</option>
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
                                            <label for="title_en" class="form-label">Title in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_en"  id="title_en" onchange="syncSlugENValue()" required value="{{ $article->title_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="title_th" class="form-label">Title in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="title_th"  id="title_th" onchange="syncSlugTHValue()" required value="{{ $article->title_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="description_en"  id="description_en"  required value="{{ $article->description_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="description_en" class="form-label">Description in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="description_th"  id="description_th"  onchange="syncMetaDescTHValue()" required value="{{ $article->description_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_en" class="form-label">Detail in English</label>
                                            <textarea class="summernote" name="detail_en">{!! $article->detail_en !!}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detail_th" class="form-label">Detail in Thai</label>
                                            <textarea class="summernote" name="detail_th">{!! $article->detail_th !!}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="published_at">Published At<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control datepicker" name="published_at"  id="published_at" required value="{{ $article->published_at }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="thumbnail_path" class="form-label">Thumbnail (1000x1000px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($article->thumbnail_path) && $article->thumbnail_path!= '')
                                                 <p><img src="{{ asset($article->thumbnail_path) }}" style="max-width: 100px; max-height: 100px;"></p>
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
                                            <label for="image_path" class="form-label">Main Photo (Maximum Width:1000px)<span class="text-danger"> *</span></label>
                                            @if (file_exists($article->image_path) && $article->image_path!= '')
                                                 <p><img src="{{ asset($article->image_path) }}" style="max-width: 100px; max-height: 100px;"></p>
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
                                            <label for="author_en" class="form-label">Author in English (leave blank if none)</label>
                                            <input class="form-control" type="text" name="author_en"  id="author_en" value="{{ $article->author_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="author_th" class="form-label">Author in Thai (leave blank if none)</label>
                                            <input class="form-control" type="text" name="author_th"  id="author_th" value="{{ $article->author_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="external_url" class="form-label">External URL (leave blank if none)</label>
                                            <input class="form-control" type="text" name="external_url"  id="external_url" value="{{ $article->external_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_title" class="form-label">Meta Title<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_title"  id="meta_title" required value="{{ $article->meta_title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_description" class="form-label">Meta Description<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="meta_description"  id="meta_description" required value="{{ $article->meta_description }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="meta_keywords" class="form-label">Meta Keyword</label>
                                            <input class="form-control" type="text" name="meta_keywords"  id="meta_keywords" value="{{ $article->meta_keywords }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="canonical_url" class="form-label">Canonical URL</label>
                                            <input class="form-control" type="text" name="canonical_url"  id="canonical_url" value="{{ $article->canonical_url }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_en" class="form-label">Slug in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_en"  id="slug_en" required value="{{ $article->slug_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="slug_th" class="form-label">Slug in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="slug_th"  id="slug_th" required value="{{ $article->slug_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">Status</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" {{ $article->status=='active'?'checked':'' }} value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status2" {{ $article->status=='inactive'?'checked':'' }} value="inactive">
                                            <label class="form-check-label" for="status2">
                                               Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="id" value="{{ $article->id }}">
                                <input type="hidden" name="old_thumbnail" value="{{ $article->thumbnail_path }}">
                                <input type="hidden" name="old_image" value="{{ $article->image_path }}">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                <a href="{{ route('backend.article.destroy',$article->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
                        </div>
                            </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
