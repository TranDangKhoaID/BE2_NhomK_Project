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
                                        <th scope="col" class="text-center">DONE</th>
                                        <th scope="col" class="text-center">Cancel</th>
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
                                        <td style="text-align: center;">
                                            <form action="{{ route('admin.billings-xn.done', ['id' => $billing->id]) }}" method="get">
                                                <button type="submit" class="btn btn-success btn-sm px-3">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td style="text-align: center;">
                                            <form action="{{ route('admin.billings-cancel', ['id' => $billing->id]) }}" method="get">
                                                <button type="submit" class="btn btn-danger btn-sm px-3">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </td>

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