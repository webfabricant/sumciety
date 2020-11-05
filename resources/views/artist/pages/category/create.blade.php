@extends('artist.index')
@section('content')

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Main category</h4>
                            <br>
                                <form method="post" class="" action="{{route('category.store')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" name="name" required placeholder="Enter Category Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Image *</label>
                                        <div>
                                            <input type="file" name="image" id="pass2"  required
                                                   placeholder="Password"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-pink waves-effect waves-light m-r-5">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                    <!-- end col -->
                </div> <!-- end row -->
@endsection
