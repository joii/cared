@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">SEO Meta</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">SEO Meta</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->



        <div class="row">
             <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Meta Tags</h4>
                        <p class="card-title-desc">Meta Tags ที่สำคัญต่อการทำ SEO ที่สุดประกอบด้วย Meta Title, Meta Description, Meta Keyword และ Meta Robots ดูข้อมูลเพิ่ม
                            <a href="https://pacymedia.com/blog/meta-tags-for-seo/" target="_blank">คลิก</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation was-validated" novalidate="" action="{{ route('backend.seo_meta.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label class="form-label" for="meta_title">Meta Title <span class="text-danger ">*</span></label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title"  required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="meta_description">Meta Description <span class="text-danger ">*</span></label>
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description"  required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="meta_keyword">Meta Keyword <span class="text-danger ">*</span></label>
                                        <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Meta Keyword" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="meta_robots">Meta Robots <span class="text-danger ">*</span></label>
                                        <select class="form-select" id="meta_robots" name="meta_robots"  required="">
                                            <option value="" selected>กรุณาระบุ</option>
                                            {{-- <option value="all" {{ $meta->meta_robots=='all'?'selected':'' }}>all</option>
                                            <option value="index" {{ $meta->meta_robots=='index'?'selected':'' }}>index</option>
                                            <option value="index,follow" {{ $meta->meta_robots=='index,follow'?'selected':'' }}>index,follow</option>
                                            <option value="noindex" {{ $meta->meta_robots=='noindex'?'selected':'' }}>noindex</option>
                                            <option value="noindex,follow" {{ $meta->meta_robots=='noindex,follow'?'selected':'' }}>noindex,follow</option>
                                            <option value="noindex,nofollow" {{ $meta->meta_robots=='noindex,nofollow'?'selected':'' }}>noindex,nofollow</option>
                                            <option value="none" {{ $meta->meta_robots=='none'?'selected':'' }}>none</option>
                                            <option value="noarchive" {{ $meta->meta_robots=='noarchive'?'selected':'' }}>noarchive</option>
                                            <option value="nosnippet" {{ $meta->meta_robots=='nosnippet'?'selected':'' }}>nosnippet</option>
                                            <option value="max-snippet" {{ $meta->meta_robots=='max-snippet'?'selected':'' }}>max-snippet</option> --}}

                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="canonical">Canonical</label>
                                        <input type="text" class="form-control" id="canonical" name="canonical" placeholder="canonical" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="author">Author</label>
                                        <input type="text" class="form-control" id="author" name="author"  placeholder="Author" >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="googlebot">Googlebot</label>
                                        <input type="text" class="form-control" id="googlebot" name="googlebot"  placeholder="googlebot" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="alt">ALT</label>
                                        <input type="text" class="form-control" id="alt" name="alt"  placeholder="alt" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="refresh_content">Refresh Content</label>
                                        <input type="text" class="form-control" id="refresh_content" name="refresh_content"  placeholder="googlebot" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="refresh_url">Refresh URL</label>
                                        <input type="text" class="form-control" id="refresh_url" name="refresh_url"  placeholder="Refresh URL" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                                            <label class="form-check-label" for="invalidCheck">ยืนยันการตั้งค่า</label>
                                            <div class="invalid-feedback">
                                                กรุณายืนยันการตั้งค่า
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->

        </div><!-- end row -->


    </div>
    <!-- container-fluid -->
</div>
@endsection
