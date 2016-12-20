@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="/admin/posts/">


            {{ csrf_field() }}

            @include('admin.fields')

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>

@endsection