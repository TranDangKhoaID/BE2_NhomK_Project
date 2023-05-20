@extends('admin.layout')

@section('admin.header')
    @include('admin.header')

@section('admin.content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Comments</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Comments</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                LIST COMMENTS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Content</th>
                                            <th>ID Blog</th>
                                            <th>Created At</th>
                                            <th>Operation</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Content</th>
                                            <th>ID Blog</th>
                                            <th>Created At</th>
                                            <th>Operation</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->content}}</td>
                                            <td>{{$comment->blog_id}}</td>
                                            <td>{{$comment->created_at}}</td>
                                            <td>
                                                @if ($comment->is_reported)
                                                    <span>Reported</span>
                                                @else
                                                    <a href="{{ route('admin.comments.reported', ['id' => $comment->id]) }}">REPORT</a>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.deletecomment', ['id' => $comment->id]) }}" method="POST">
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