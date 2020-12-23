@extends('_layout')
@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">
        <form action="{{url('role')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-3">
                    <h6 class="card-title m-b-20">Role</h6>
                    <input type="text" class="form-control" name="role">
                    <br>
                    <select name="position" id="" class="form-control">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>  
                    </select>
                    <br>
                    <div class="col-md-12 text-right">
                        <a href="{{url('role')}}" class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Save" class="btn btn-info" required>
                    </div>
                    
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                    <h6 class="card-title m-b-20">Module Access</h6>
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Module Permission</th>
                                    <th class="text-center">Read</th>
                                    <th class="text-center">Write</th>
                                    <th class="text-center">Create</th>
                                    <th class="text-center">Delete</th>
                                    {{-- <th class="text-center">Import</th>
                                    <th class="text-center">Export</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($module as $mode)
                                    <tr>
                                        <td>{{$mode->name}}</td>
                                        <td class="text-center">
                                            <input type="checkbox" name="read[]" value="{{$mode->id}}">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="write[]" value="{{$mode->id}}">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="create[]" value="{{$mode->id}}">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="delete[]" value="{{$mode->id}}">
                                        </td>
                                        {{-- <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
	</div>
	<!-- /Page Content -->
@endsection