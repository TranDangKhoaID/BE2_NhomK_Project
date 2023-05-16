@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid py-4 px-4">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.storeBlog') }}" enctype="multipart/form-data">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="title" type="text" id="form4Example1" placeholder="Title" class="form-control" />
                </div>
                <div class="mb-3">
                   <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea name="content" class="form-control" id="form4Example3" placeholder="Content"  rows="10"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <input name="author" type="text" id="form4Example1" placeholder="Author" class="form-control" />
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">ADD</button>
            </form>
        </div>
    </div>
    </main>
</div>
@section('admin.footer')
    @include('admin.footer')
@endsection