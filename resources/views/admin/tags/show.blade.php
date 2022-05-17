@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Tags') }}
                        <a class="btn btn-primary" href="{{ route('tags.index') }}">Regresar</a>
                    </div>

                    <div class="card-body">
                        <ul>
                            <p>
                                <strong>ID:</strong>
                                {{ $tag->id }}
                            </p>
                            <p>
                                <strong>Name:</strong>
                                {{ $tag->name }}
                            </p>
                            <p>
                                <strong>Created At:</strong>
                                {{ $tag->created_at }}
                            </p>
                            <p>
                                <strong>Updated At:</strong>
                                {{ $tag->updated_at }}
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
