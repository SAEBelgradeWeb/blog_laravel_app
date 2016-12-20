@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="/admin/posts/{{$post->id}}">
            <input type="hidden" name="_method" value="PUT">

            {{ csrf_field() }}

            @include('admin.fields')

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>

@endsection