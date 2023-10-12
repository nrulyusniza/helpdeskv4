@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('roles.allrole') }}">User & Asset Management</a>
        </li>
        <li class="breadcrumb-item active">User Group</li>
    </ol>
</nav>

<!-- Bordered Table rows -->
<div class="col-12">
    <div class="card">
        
        <!-- Top Card -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">User Group List</h4>
            <div class="btn-text-right">
                <a href="{{ route('roles.create') }}"
                    <button type="button" class="btn btn-primary"><i class='bx bx-plus'></i>&nbsp; New User Group</button>
                </a>
            </div>
        </div>

        <!-- Search -->
        <nav class="navbar navbar-example navbar-expand-lg">
            <div class="container-fluid">           
                <div class="collapse navbar-collapse" id="navbar-ex-4">
                    <div class="navbar-nav me-auto">
                    <!-- here -->
                    </div>

                    <form class="d-flex">
                        <div class="input-group">
                            <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                            <input type="text" class="form-control" placeholder="" />
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Table -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($roles as $r)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $r->role_name }}</td>
                            <td>{{ $r->role_desc }}</td>
                            <td>
                                <!--
                                <form action="{{ route('roles.destroy',$r->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('roles.edit',$r->id) }}">Edit</a>                
                                    @csrf
                                    @method('DELETE')                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                -->
                                <form action="{{ route('roles.destroy',$r->id) }}" method="POST">
                                    <a class="menu-icon tf-icons bx bx-edit" href="{{ route('roles.edit',$r->id) }}"></a>                
                                    @csrf
                                    @method('DELETE')                    
                                    <a type="submit" class="menu-icon tf-icons bx bx-trash" style="color:#ff0000"></a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
<!--/ Bordered Table -->

@endsection