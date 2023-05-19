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
            <form method="POST" action="{{ route('admin.storeSlider') }}" enctype="multipart/form-data">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="title1" type="text" id="form4Example1" placeholder="Title 1" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <input name="title2" type="text" id="form4Example1" placeholder="Title 2" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <input name="title3" type="text" id="form4Example1" placeholder="Title 3" class="form-control" />
                </div>
                <div class="mb-3">
                   <input name="image" class="form-control" type="file" id="formFile">
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