@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header route="posts.index" name="Edit Posts" />

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
