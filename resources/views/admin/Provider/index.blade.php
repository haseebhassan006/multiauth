@extends('admin.layouts.template')
@include('sweetalert::alert')
@section('content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Service Providers</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2 select2-hidden-accessible" name="property" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 120px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-property-31-container"><span class="select2-selection__rendered" id="select2-property-31-container" title="Option 1">Option 1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 78px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-dc-container"><span class="select2-selection__rendered" id="select2-time-dc-container" title="1 Week">1 Week</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2 select2-hidden-accessible" name="type" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 85px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-type-h5-container"><span class="select2-selection__rendered" id="select2-type-h5-container" title="Export">Export</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>Phone</th>
                                                <th>N.I.C</th>
                                                <th>Status</th>
                                                <th>Update Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($providers as $provider)
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$provider->name}}</td>
                                                <td>
                                                    <span class="block-email">{{$provider->email}}</span>
                                                </td>
                                                <td class="desc">{{$provider->phone}}</td>
                                                <td>{{$provider->nic}}</td>
                                                <td>
                                                @if($provider->status == 0)
                                                    <span class="status--process">Pending</span>
                                                @elseif($provider->status == 1)
                                                <span class="status--process">Approved</span>
                                                @endif
                                                </td>
                                                <td>
                                                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="updateStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Update Status
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item statusUpdate" data-id="0" id="{{$provider->id}}">Pending</a>
    <a class="dropdown-item statusUpdate" data-id="1" id="{{$provider->id}}">Approved</a>
  
  </div>
</div>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" href="{{route('admin.donor.show',$provider->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                        <i class="zmdi zmdi-eye"></i>
                                                        </a>
                                                        <a href="{{route('admin.donor.edit',$provider->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <button data-id="{{$provider->id}}"  class="item dltBtn" data-toggle="tooltip" data-placement="top" type="button" id="dltBtn" title="" data-original-title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                          @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        </div>
                        </div>
@endsection