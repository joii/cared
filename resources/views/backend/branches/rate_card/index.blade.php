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
                           <li class="breadcrumb-item"><a href="{{ route('backend.branch.edit',$branch->id) }}">{{ $branch->name_en }}</a></li>
                            <li class="breadcrumb-item active">Rate Card</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

           <!-- start content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="text-align: right;">
                                <a href="{{ route('backend.branch_rate_card.create',$branch_id) }}" class="btn btn-success" >Add New</a>
                            </div>

                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Branch</th>
                                        <th>Type</th>
                                        <th>Period</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($rate_cards as $item)
                                    <tr>
                                        <td>{{ $branch->name_th}}</td>
                                         <td>
                                            @switch($item->program_id)
                                                @case(1)
                                                    Standard
                                                    @break
                                                 @case(2)
                                                    Rehab
                                                    @break
                                                 @case(3)
                                                    Happy Like
                                                    @break

                                                @default

                                            @endswitch
                                         </td>
                                        <td>
                                            @switch($item->period_id)
                                                @case(1)
                                                      Daily
                                                    @break
                                                @case(2)
                                                      Weekly(7days)
                                                    @break
                                                @case(3)
                                                      fortnightly(15 days)
                                                    @break
                                                @case(4)
                                                      Monthly(30 days)
                                                    @break

                                                @default

                                            @endswitch
                                        </td>
                                        <td>
                                            {{ $item->dormitory_room_price==''?'':'dormitory room:'.$item->dormitory_room_price}}<br/>
                                            {{ $item->double_room_price==''?'':'double room:'.$item->double_room_price}}<br/>
                                            {{ $item->single_room_price==''?'':'single room:'.$item->single_room_price}}<br/>
                                            {{ $item->detached_house_price==''?'':'detached house:'.$item->single_room_price}}
                                        </td>
                                        <td>{!! $item->status =='active'?'Active':'Inactive' !!}</td>
                                        <th><a href="{{ route('backend.branch_rate_card.edit',$item->id) }}" class="btn btn-outline-danger">Edit</a></th>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            <!-- end content -->



    </div><!-- container-fluid -->
</div><!-- page-content -->
@endsection
