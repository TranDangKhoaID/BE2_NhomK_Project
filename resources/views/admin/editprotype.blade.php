@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid py-4 px-4">
            <div class="container">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
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
                <form method="POST" action="#">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input value="{{$protype->type_name}}" name="name" type="text" id="form4Example1" placeholder="Name" class="form-control" />
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">SAVE</button>
                </form>
            </div>
        </div>
    </main>
</div>

@section('admin.footer')
    @include('admin.footer')
@endsection