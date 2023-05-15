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
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($protypes as $protype)
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{$protype->type_id}}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{$protype->type_name}}</p>
                            </td>
                            <td>
                            <form method="get" action="{{ route('admin.editprotype', $protype->type_id) }}">
                                @csrf
                                <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                    <i class="fas fa-edit fa-lg" style="color: #0818fd;"></i>
                                </button>
                            </form>
                            </td>
                            <td>
                            <form method="post" action="{{ route('admin.deletetype', ['type_id' => $protype->type_id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                    <i class="fas fa-trash fa-lg" style="color: #f40101;"></i>
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@section('admin.footer')
    @include('admin.footer')
@endsection
