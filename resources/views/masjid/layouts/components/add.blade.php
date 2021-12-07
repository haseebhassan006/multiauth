

<div class="col-lg-6 offset-md-3">
    <div class="card m-2 ml-4">
        <div class="card-header">
            <strong>{{__('vocab.create_request')}}</strong>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        </div>
        <form @if(isset($request)) id="updateRequestForm" @else id="addRequestForm" @endif>
         @if(isset($request)) <input type="hidden" name="id" id="id" value="{{$request->id}}" >  @endif
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Title</label>
                <input type="text" id="title" placeholder="Enter request title" class="form-control" name="title" @if(isset($request)) value="{{$request->title}}" @endif>
            </div>
             <div class="form-group">
                <label for="company" class=" form-control-label">Masjid Name</label>
                <input type="text" id="title" placeholder="Enter request title" class="form-control" name="masjid_name"  @if(isset($request)) value="{{$request->masjid_name}}" @endif>
            </div>
             <div class="form-group">
                <label for="company" class=" form-control-label">Masjid Address</label>
                <input type="text" id="title" placeholder="Enter request title" class="form-control" name="masjid_address" @if(isset($request)) value="{{$request->masjid_address}}" @endif>
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Category</label>
                <select class="form-control" name="category">
                    <option value="">Choose Category</option>
                    @foreach($categories as $category)

                     <option @if(isset($request)) {{ ($request->category->id === $category->id) ?   "selected"    : '' }}  @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Request Type</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input  @if(isset($request)) {{( $request->request_type == "normal") ? 'checked'  : ''}} @endif type="radio" id="radio1" name="type" value="normal" class="form-check-input">Normal
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                            <input @if(isset($request)) {{( $request->request_type == "urgent") ? 'checked'  : ''}} @endif type="radio" id="radio2" name="type" value="urgent" class="form-check-input">Urgent
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="description" id="textarea-input" rows="9" placeholder="Enter Your Request Description.." class="form-control">@if(isset($request)){!! $request->description !!}@endif</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Upload An Image</label>
                </div>
                <div class="col-12 col-md-9">
                    @if(isset($request))
                      <img class="img-thumbnail" width="60px" height="40px" src="{{asset('request/images/'.$request->image)}}">
                      <input type="text" value="{{$request->image}}" name="oldimage">
                    @endif
                    <input type="file" id="file-input" name="image" class="form-control-file"  >
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </form>
    </div>
</div>


