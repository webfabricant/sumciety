@extends('artist.index')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Sub category Edit</h4>
                        <br>
                        <form  class="" action="{{route('subcategory.update', $subcategory->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Category *</label>
                                <select class="browser-default custom-select" name="category_id">
                                    <option value="{{\App\Category::find($subcategory->category_id)->id}}" selected>{{\App\Category::find($subcategory->category_id)->name}}</option>
                                    @foreach($category as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" value="{{$subcategory->name}}" name="name" required placeholder="Enter Sub Category Name"/>
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
