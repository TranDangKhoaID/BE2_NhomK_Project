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
                <hr>
                <div class="container bootstrap snippets bootdey">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-box no-header clearfix">
                                <div class="main-box-body clearfix">
                                    <div class="table-responsive">
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                <th><span>ID</span></th>
                                                <th><span>User</span></th>
                                                <th><span>Created</span></th>
                                                <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($blogs as $blog)
                                                <tr>
                                                    <td>#{{ $blog->id }}</td>
                                                    <td>
                                                        <img src="{{ asset('img/blog/' . $blog->image) }}" alt="">
                                                        <h6>{{ $blog->title }}</h6>
                                                        <span class="user-subhead">{{ $blog->author }}</span>
                                                    </td>
                                                    <td>{{ $blog->created_at }}</td>
                                                    <td style="width: 10%;">
                                                        <form action="{{ route('admin.deleteblog', ['id' => $blog->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-labeled btn-danger">
                                                                <span class="btn-label"><i class="fa fa-trash"></i></span> Delete
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
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </main>
</div>

@section('admin.footer')
    @include('admin.footer')
@endsection
      
