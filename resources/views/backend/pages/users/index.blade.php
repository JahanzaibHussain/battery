@extends('backend.layout.admin')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Verified Email</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Verified Email</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->email_verified_at}} </td>
                                    <td> - </td>
                                    <td> {{$user->created_at}} </td>
                                    <td> {{$user->updated_at}} </td>
                                    <td> 
                                        <a href="#" class="btn btn-sm btn-primary"> <i class="py-1 fas fa-fw fa-eye"></i> </a>    
                                        <a href="#" class="btn btn-sm btn-info"> <i class="py-1 fas fa-pencil-alt"></i> </a>    
                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#userDel{{$user->id}}"> <i class="py-1 fas fa-fw fa-trash"></i> </a>    
                                        <div class="modal fade" id="userDel{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">Do you want to delete the user "{{$user->name}}" ?</div>
                                                <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                {{-- {{ Form::open(array('url' => 'users',  'method' => 'delete')) }}
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                {{ Form::close() }} --}}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    <!-- /.container-fluid -->
@endsection