@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                LIST USERS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Operation</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Operation</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                @if ($user->is_blocked)
                                                    <span>Blocked</span>
                                                @else
                                                    <a href="{{ route('admin.users.block', ['id' => $user->id]) }}">Block</a>
                                                @endif
                                            </td>
                                            <td><a href="#">DELETE</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </main>
@section('admin.footer')
    @include('admin.footer')
@endsection