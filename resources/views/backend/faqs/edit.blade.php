@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">FAQs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.faqs.index') }}">FAQs</a></li>
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
                        <form id="myForm" action="{{ route('backend.faqs.update') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="question_en" class="form-label">Question in English<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="question_en"  id="question_en"  required value="{{ $faq->question_en }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="question_th" class="form-label">Question in Thai<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" name="question_th"  id="question_th" required value="{{ $faq->question_th }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="answer_en" class="form-label">Answer in English</label>
                                            <textarea class="summernote" name="answer_en">{{ $faq->answer_en }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="answer_th" class="form-label">Answer in Thai</label>
                                            <textarea class="summernote" name="answer_th">{{ $faq->answer_th }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="font-size-14 mb-3">สถานะ</h5>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="status" id="status1" checked="" value="active">
                                            <label class="form-check-label" for="status1">
                                               Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="hidden" name="id" value="{{ $faq->id }}">
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
                                 <a href="{{ route('backend.faqs.destroy',$faq->id) }}" class="btn btn-danger waves-effect waves-light" onclick="confirm('Are you sure you want to delete this?')">Delete</a>
                        </div>
                        </div>
                        </form>
                    </div>

                </div>
                <!-- end card -->
            </div> <!-- end col -->
    </div>
</div>



@endsection
