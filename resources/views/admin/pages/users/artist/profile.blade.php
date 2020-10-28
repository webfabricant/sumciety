@extends('admin.index')

@section('content')
    <div class="sl-pagebody">

    <h6 class="card-body-title">Edit Profile Form : </h6><br>
    <form  method="POST" action="{{route('profile.update',$artist->id)}}" enctype="multipart/form-data">
        @csrf

        <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label"> First Name: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" value="{{$artist->firstname}}" name="firstname" required="" >
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{$artist->firstname}}" type="text" name="lastname" required="">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="email" value="{{$artist->email}}" name="email"  placeholder="Email" required="">
                    </div>
                </div><!-- col-4 -->


                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" value="{{$artist->phone}}" name="phone"  placeholder="Enter Phone"  placeholder="Phone" required="">
                    </div>
                </div><!-- col-4 -->



                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country" name="gender" required="">
                            <option value="Male">Male</option>
                            <option value="{{$artist->gender}}">--Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">DOB: <span class="tx-danger">*</span></label>
                        <input type="date" value="{{$artist->dob}}" class="form-control"  name="dob"  required="">
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">link: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{$artist->link}}"  name="link"  placeholder="Link"  required="">
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{$artist->city}}" name="city"  placeholder="City"  required="">
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{$artist->country}}" name="country"  placeholder="Country"  required="">
                    </div>
                </div><!-- col-4 -->



                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{$artist->address}}"  name="address"  placeholder="Address"  required="">
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Profile: <span class="tx-danger">*</span></label><br>
                        <label class="custom-file">
                            <input type="file"  name="profile_image">
                            <span class="custom-file-control"></span><br>
                            <img src="{{asset('images/'.$artist->profile_image)}}" style="height: 80px; width: 80px;">
                        </label>
                    </div>
                </div><!-- col-4 -->

            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">About: <span class="tx-danger">*</span></label>
                    <textarea class="form-control"   name="about" rows="5" required=""> {{$artist->about}}</textarea>
                </div>
            </div><!-- col-12 -->
            </div><!-- row -->
            <div class="form-layout-footer">
                <button type="submit" class="btn btn-info mg-r-5">UPDATE  </button>
            </div><!-- form-layout-footer -->
        </div>


@endsection

