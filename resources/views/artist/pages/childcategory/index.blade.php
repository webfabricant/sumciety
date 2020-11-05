@extends('artist.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <a href="{{route('childcategory.create')}}"> <button type="submit" class="btn btn-primary">Add New Child Category</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Sub Category</th>
                                <th>Child Category</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($childcategory as $data)
                                <tr>
                                    <td>{{\App\Subcategory::find($data->subcategory_id)->name}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>
                                        <a href="{{route('childcategory.edit', $data->id)}}" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                        <a href="{{route('childcategory.destroy', $data->id)}}" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
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
