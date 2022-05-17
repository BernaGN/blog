@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Tags') }}
                    </div>

                    <div class="card-body">
                        <form action="{{ route('tags.update', $tag->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            @include('admin.tags.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
