@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Create a new post</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

        <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-success w-100" type="submit">Store post</button>
            </form>
        </div>
    </div>
@endsection