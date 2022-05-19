@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Create Post">
                        <x-buttons.a route="posts.index" />
                    </x-div.header>

                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.posts.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
