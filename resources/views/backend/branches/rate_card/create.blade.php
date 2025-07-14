@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
          <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Rate Card</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backend.branch_gallery.index',$branch_id) }}">Rate Card</a></li>
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
                        <form id="myForm" action="{{ route('backend.branch_rate_card.store') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Branch</label>
                                          <select class="form-select" id="branch_id" name="branch_id"  required="">
                                                <option value="" selected>--Select--</option>
                                               @if($branches !=null)
                                                     @foreach ($branches as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id==$branch_id?'selected':'' }} >{{ $item->name_en }}{{ $item->address_en }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Program</label>
                                          <select class="form-select" id="program_id" name="program_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                   @if($programs !=null)
                                                    @foreach ($programs as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name_en }}</option>
                                                    @endforeach
                                                   @endif
                                            </select>
                                        </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Period</label>
                                          <select class="form-select" id="period_id" name="period_id"  required="">
                                                <option value="" selected>--Select--</option>
                                                   @if($periods !=null)
                                                    @foreach ($periods as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name_en }}</option>
                                                    @endforeach
                                                   @endif
                                            </select>
                                        </div>
                                </div>
                             </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="dormitory_room_price" class="form-label">Dormitory Room</label>
                                            <input class="form-control" type="number" name="dormitory_room_price"  id="dormitory_room_price">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="double_room_price" class="form-label">Double Room</label>
                                            <input class="form-control" type="number" name="double_room_price"  id="double_room_price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="single_room_price" class="form-label">Single Room</label>
                                            <input class="form-control" type="number" name="single_room_price"  id="single_room_price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="detached_house_price" class="form-label">Detached house</label>
                                            <input class="form-control" type="number" name="detached_house_price"  id="detached_house_price">
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
