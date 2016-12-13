@extends('layouts.app')

@section('content')

    <div class="container">
    {!! BootForm::open() !!}

    {!! BootForm::text('Insert title', 'title') !!}
    {!! BootForm::textarea('Content', 'body') !!}
    {!! BootForm::submit('Submit') !!}
    {!! BootForm::close() !!}

    </div>

@endsection