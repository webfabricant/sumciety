@extends('artist.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <a href="{{route('subcategory.create')}}"> <button type="submit" class="btn btn-primary">Add New Sub Category</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Main Category</th>
                                <th>Sub category</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $data)
                                <tr>
                                    <td>{{\App\Category::find($data->category_id)->name}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>
                                        <a href="{{route('subcategory.edit', $data->id)}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                        <a href="{{route('subcategory.destroy', $data->id)}}" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
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
