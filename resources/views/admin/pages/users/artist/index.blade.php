@extends('admin.index')

@section('content')

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Default Datatable</h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($artists as $artist)
                                    <tr>
                                        <td>{{$artist->firstname}} {{$artist->lastname}}</td>
                                        <td>{{$artist->email}}</td>
                                        <td>{{$artist->phone}}</td>
                                        <td>{{$artist->address}}</td>
                                        <td>
                                            <a href="" title="edit"><i class="fa fa-pencil"></i></a>
                                            <a href="" title="delete"><i class="fa fa-trash"></i></a>
                                            <a href="" title="view"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div><!-- container-fluid -->

    </div> <!-- Page content Wrapper -->

@endsection
