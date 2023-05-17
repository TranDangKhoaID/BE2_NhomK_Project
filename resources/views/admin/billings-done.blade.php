@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid py-4 px-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container">
            <section class="intro">
                <div class="bg-image h-100">
                    <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">PHONE</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($billings as $billing)
                                    <tr>
                                        <td>{{ $billing->lname }} {{ $billing->fname }}</td>
                                        <td>{{ $billing->address }}</td>
                                        <td>{{ $billing->id }}</td>
                                        <td>{{ $billing->phone }}</td>
                                        <td>{{ $billing->status }}</td>    
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </main>
</div>

@section('admin.footer')
    @include('admin.footer')
@endsection