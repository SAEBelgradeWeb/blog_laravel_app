@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/admin/posts/create" class="btn-sm btn-primary btn pull-right">Create</a>
        <table class="table table-striped" style="margin-top: 80px">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Tags</th>
                <th>Auhor</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td><strong>
                            <a href="/admin/posts/{{$post->id}}">{{ $post->title }}</a>
                        </strong>
                    </td>
                    <td>{{ str_limit($post->body, 80) }}</td>
                    <td>
                        @foreach($post->tags as $tag)
                            {{$tag->title}}
                        @endforeach

                    </td>
                    <td>{{ $post->author->name }}</td>
                    <td>{{ date("d. M y H:i", strtotime($post->created_at)) }}</td>
                    <td><a href="/admin/posts/{{$post->id}}/edit"><i class="fa fa-edit"></i></a>
                        <a href="#"
                           onclick="event.preventDefault();
                           document.getElementById('delete-form-{{$post->id}}').submit();">
                            <i class="fa fa-trash"></i>
                        </a>

                        <form id="delete-form-{{$post->id}}" action="/admin/posts/{{$post->id}}" method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                        </form>

                        </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection