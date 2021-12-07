@extends('admin.layouts.template')

@section('content')
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Edit Donor Detail</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                     @if(Session::has('message'))
                                         <alert class="alert alert-warning">{{Session::get('message')}}</alert>
                                     @endif
                                     @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
@endif
                                        </div>
                                        <hr>
                                        <form action="{{route('admin.donor.update',$user->id)}}" method="post" novalidate="novalidate">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Name</label>
                                                        <input id="name" name="name" type="text" class="form-control cc-exp" value="{{$user->name}}" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Email</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="email" type="email" class="form-control cc-cvc" value="{{$user->email}}" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Address</label>
                                                        <input id="cc-exp" name="address" type="text" class="form-control cc-exp" value="{{$user->address}}" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year"  >
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Phone</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="phone" type="text" class="form-control cc-cvc" value="{{$user->phone}}" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Occupation</label>
                                                        <input id="cc-exp" name="occupation" type="text" class="form-control cc-exp" value="{{$user->occupation}}" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" >
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                    @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">N.I.C</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="nic" type="tel" class="form-control cc-cvc" value="{{$user->nic}}" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code">

                                                    </div>
                                                </div>
                                                @error('nic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div>
                                            <div class="row">
                                            <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Status</label>
                                                        <select class="form-control cc-cvc" name="status">
                                                        <option <?php if($user->status == '0'){ echo "selected"; } ?> value="0"> Pending</option>
                                                           <option <?php if($user->status == '1'){ echo "selected"; } ?> value="1"> Approved</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    
                                                    <span id="payment-button-sending" style="display:none;">Submit</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

<div>
</div>

@endsection