@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Последние новости</h1>

        @foreach ($posts as $post)
            <section class="row p-3 mb-5 rounded shadow">
                <div class="col-3">
                    <div class="mb-5">
                        <b>{{ $post->created_at }}</b>
                        <b>{{ $post->user->name }}</b>
                    </div>
                    <img src="{{ $post->image_url }}" alt="фото поста" class="img-fluid" />
                </div>
                <div class="col-9">
                    <h2><a href="{{ route('show', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
                    <div>{{ $post->text }}</div>
                </div>
            </section>
        @endforeach
    </div>
@endsection