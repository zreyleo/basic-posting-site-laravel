@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        @if ($post->imagen)
                            {{$post->imagen}}
                            <img src="{{ asset("$post->imagen") }}" alt="hola">
                        @endif
                        <p class="card-text">{{ $post->get_excerpt }}</p>
                        <a href="{{ route('post', $post) }}">Leer más</a>
                        <p class="text-muted">
                            <em>&ndash; {{ $post->user->name }}</em>
                            {{ $post->created_at->format('d m y') }}
                        </p>
                    </div>
                </div>
            @endforeach

            {{ $posts->links() }}

        </div>
    </div>
</div>
@endsection
