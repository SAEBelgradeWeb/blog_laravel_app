@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Auhor</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td><strong>{{ $post->title }}</strong></td>
                <td>{{ str_limit($post->body, 80) }}</td>
                <td>{{ $post->author->name }}</td>
                <td>{{ date("d. M y H:i", strtotime($post->created_at)) }}</td>
                <td><i class="fa fa-edit"></i> <i class="fa fa-trash"></i></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection