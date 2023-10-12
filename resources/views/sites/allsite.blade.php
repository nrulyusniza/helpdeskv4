@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('sites.allsite') }}">User & Asset Management</a>
        </li>
        <li class="breadcrumb-item active">Site</li>
    </ol>
</nav>

<!-- Bordered Table rows -->
<div class="col-12">
    <div class="card">
        
        <!-- Top Card -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">Site List</h4>
            <div class="btn-text-right">
                <a href="{{ route('sites.create') }}"
                    <button type="button" class="btn btn-primary"><i class='bx bx-plus'></i>&nbsp; New Site</button>
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
                            <th>Address</th>
                            <th>Abbreviation</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($sites as $s)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->site_name }}</td>
                            <td>{{ $s->site_address }}</td>
                            <td>{{ $s->site_abbreviation }}</td>
                            <td>
                                <form action="{{ route('sites.destroy',$s->id) }}" method="POST">
                                    <a class="menu-icon tf-icons bx bx-edit" href="{{ route('sites.edit',$s->id) }}"></a>                
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