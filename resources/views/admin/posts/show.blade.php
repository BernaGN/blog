@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Show Post">
                        <x-buttons.a route="posts.index" />
                    </x-div.header>

                    <div class="card-body">
                        <ul>
                            <p>
                                <strong>ID:</strong>
                                {{ $post->id }}
                            </p>
                            <p>
                                <strong>Name:</strong>
                                {{ $post->name }}
                            </p>
                            <p>
                                <strong>Post:</strong>
                                {{ $post->post }}
                            </p>
                            <p>
                                <strong>Img:</strong>
                                {{ $post->img }}
                            </p>
                            <p>
                                <strong>User:</strong>
                                {{ $post->user->name }}
                            </p>
                            <p>
                                <strong>Category:</strong>
                                {{ $post->category->name }}
                            </p>
                            <p>
                                <strong>Tags:</strong>
                                @foreach ($post->tags as $tag)
                                    {{ $tag->name }}
                                @endforeach
                            </p>
                            <p>
                                <strong>Created At:</strong>
                                {{ $post->created_at }}
                            </p>
                            <p>
                                <strong>Updated At:</strong>
                                {{ $post->updated_at }}
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
