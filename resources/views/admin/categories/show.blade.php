@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Categories') }}
                        <a class="btn btn-primary" href="{{ route('categories.index') }}">Regresar</a>
                    </div>

                    <div class="card-body">
                        <ul>
                            <p>
                                <strong>ID:</strong>
                                {{ $category->id }}
                            </p>
                            <p>
                                <strong>Name:</strong>
                                {{ $category->name }}
                            </p>
                            <p>
                                <strong>Created At:</strong>
                                {{ $category->created_at }}
                            </p>
                            <p>
                                <strong>Updated At:</strong>
                                {{ $category->updated_at }}
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
