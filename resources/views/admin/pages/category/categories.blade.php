@extends('admin.index')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <a href="{{route('category.create')}}"> <button type="submit" class="btn btn-primary">Add New Category</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td><img src="{{asset($data->image)}}" style="height: 40px; width: 40px" alt=""></td>
                                    <td>
                                        <a href="{{route('category.edit', $data->id)}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                        <a href="{{route('category.destroy', $data->id)}}" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div><!-- container -->

    @endsection
