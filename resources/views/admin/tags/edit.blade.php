@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header route="tags.index" name="Edit Tags" />

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
