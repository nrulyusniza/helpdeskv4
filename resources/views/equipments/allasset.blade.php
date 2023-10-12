@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('equipments.allasset') }}">User & Asset Management</a>
        </li>
        <li class="breadcrumb-item active">Asset</li>
    </ol>
</nav>

<!-- Bordered Table rows -->
<div class="col-12">
    <div class="card">
        
        <!-- Top Card -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">Asset List</h4>
            <div class="btn-text-right">
                <a href="{{ route('equipments.create') }}"
                    <button type="button" class="btn btn-primary"><i class='bx bx-plus'></i>&nbsp; New Asset</button>
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
                            <th>Hostname</th>
                            <th>Location</th>
                            <th>IP</th>
                            <th>Asset Type</th>
                            <th>Site</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($equipments as $e)
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $e->asset_hostname }}</td>
                            <td>{{ $e->asset_location }}</td>
                            <td>{{ $e->asset_ip }}</td>
                            <td>{{ $e->asset_type }}</td>
                            <td>{{ $e->site->site_name ?? "-" }}</td>
                            <td>
                                <form action="{{ route('equipments.destroy',$e->id) }}" method="POST">
                                    <a class="menu-icon tf-icons bx bx-edit" href="{{ route('equipments.edit',$e->id) }}"></a>                
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