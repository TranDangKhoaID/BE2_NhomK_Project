
@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid py-4 px-4">
            <div class="container">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
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
                            <div class="candidates-listing-item">
                                @foreach ($products as $product)
                                <div class="list-grid-item mt-4 p-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="candidates-img float-left mr-4">
                                                <img src="{{ asset('img/product/' . $product->image) }}" alt="" class="img-fluid d-block rounded">
                                            </div>
                                            <div class="candidates-list-desc job-single-meta  pt-2">
                                                <h5 class="mb-2 f-19">{{$product->name}}</h5>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <p class="text-muted f-15 mb-0"><i class="mdi mdi-currency-usd mr-1"></i>{{$product->price}}</p>
                                                    </li>
                                                </ul>
                                                <p class="text-muted mt-1 mb-0">Manufacture : {{$product->manu_id}}</p>
                                                <p class="text-muted mt-1 mb-0">Protype : {{$product->type_id}}</p>
                                                <p class="text-muted mt-1 mb-0">Feature : {{$product->feature}}</p>
                                                <p class="text-muted mt-1 mb-0">Created At : {{$product->created_at}}</p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="candidates-list-fav-btn text-right">
                                                <div class="candidates-listing-btn mt-4">
                                                    <form action="{{ route('admin.editproducts', $product->id) }}" method="GET">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline btn-sm">EDIT</button>
                                                    </form>
                                                </div>
                                                
                                                <div class="candidates-listing-btn mt-4">
                                                    <form action="{{ route('admin.deleteproduct', ['id' => $product->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline btn-sm">DELETE</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-11 offset-lg-1">
                                            <div class="candidates-item-desc">
                                                <hr>
                                                <p class="text-muted mb-2 f-14">{{$product->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@section('admin.footer')
    @include('admin.footer')
@endsection
