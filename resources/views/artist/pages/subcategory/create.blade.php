@extends('artist.index')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Add New Sub category</h4>
                        <br>
                        <form method="post" class="" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Main Category *</label>
                                 <select class="browser-default custom-select" name="category_id">
                                    <option selected>Select Category</option>
                                    @foreach($categories as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sub Category Name *</label>
                                <input type="text" class="form-control" name="name" required placeholder="Enter Sub Category Name"/>
                            </div>
                            <br>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-pink waves-effect waves-light m-r-5">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
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
