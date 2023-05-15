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
            <form method="POST" action="{{ route('admin.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input name="name" type="text" id="form4Example1" placeholder="Name" class="form-control" value="{{$product->name}}" />
                </div>
                <select class="form-select mb-4" aria-label="Default select example"  name="manufacture">
                    <option selected>Manufacture</option>
                    @foreach ($manufactures as $manufacture)
                    <option value="{{$manufacture->manu_id}}">{{$manufacture->manu_name}}</option>
                    @endforeach
                </select>
                <select class="form-select mb-4" aria-label="Default select example" name="protype">
                    <option selected>Protype</option>
                    @foreach ($protypes as $protype)
                        <option value="{{ $protype->type_id }}">{{ $protype->type_name }}</option>
                    @endforeach
                </select>

                <div class="form-outline mb-4">
                    <input name="price" type="number" id="form4Example2" placeholder="Price" class="form-control" value="{{$product->price}}"/>   
                </div>
                <div class="mb-3">
                   <input name="image" class="form-control" type="file" id="formFile" value="{{ $protype->image }}">
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea name="description" class="form-control" id="form4Example3" placeholder="Description"  rows="4">{{$product->description}}</textarea>
                </div>
                <div class="form-outline mb-4">
                    <input name="feature" type="number" id="form4Example1" placeholder="Feature" class="form-control" value="{{$product->feature}}" />
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