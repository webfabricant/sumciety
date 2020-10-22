@extends('artist.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success pull-right" data-toggle="modal" data-target="#studentadd"
               data-whatever="@getbootstrap">Add Category</a>
            <div class="modal fade" id="studentadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  id="studentForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="firstname" class="col-form-label">Name:</label>
                                    <input type="text" name="name" class="form-control" id="name" />
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-form-label">Image:</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                </div>

                                <button type="submit" id="saveBtn" value="create" class="btn btn-primary">Add</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical data-table" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $cat)
                        <tr>
                            <td>{{$cat->name}}</td>
                            <td><img src="{{asset($cat->image)}}" alt="text for pic" width="70" height="70" /></td>

                            <td>{{$cat->status}}</td>
                            <td>{{$cat->status}}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script>

        $("#studentForm").submit(function(e)
        {
            e.preventDefault();
            var formData = new FormData(this);
            let name = $("#name").val();
            let image = $("#image").val();
            let _token = $("input[name=_token]").val();
            $.ajax({

                url: "{{route('category.store')}}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success:function(response)
                {
                    if(response)
                    {
                        $("#studentTable tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
                        $("#studentForm")[0].reset();
                        $("#studentadd").modal('hide');
                    }
                }
            });
        });


    </script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
    @endsection
