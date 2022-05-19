@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header name="Create Post">
                        <x-buttons.a route="posts.index" />
                    </x-header>

                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post">
                            @csrf
                            @include('admin.posts.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
