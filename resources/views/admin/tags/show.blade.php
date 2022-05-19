@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Show Tags">
                        <x-buttons.a route="tags.index" />
                    </x-div.header>

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
