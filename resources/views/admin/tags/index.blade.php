@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Tags') }}
                        <a class="btn btn-link" href="{{ route('tags.create') }}">Create Tag</a>
                    </div>

                    <div class="card-body">
                        @if ($tags->count())
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Update At</th>
                                        <th>Accions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td scope="row">{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td>
                                                <div class="dropdown open">
                                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                                        id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Options
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                                        <form action="{{ route('tags.destroy', $tag->id) }}"
                                                            method="post">
                                                            <a class="dropdown-item"
                                                                href="{{ route('tags.show', $tag->id) }}"> Show
                                                            </a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('tags.edit', $tag->id) }}"> Edit
                                                            </a>
                                                            @csrf
                                                            @method('Delete')
                                                            <button class="dropdown-item" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1>No hay registros</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
