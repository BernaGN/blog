@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header buttonText="Create Post" route="posts.create" name="Posts" />

                    <div class="card-body">
                        @if ($posts->count())
                            <x-tables.table :headers="['ID', 'Name', 'Post', 'Created At', 'Updated At', 'Accions']">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td scope="row">{{ $post->id }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->post }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>
                                            <x-buttons.dropdown :id="$post->id" show="posts" edit="posts"
                                                destroy="posts" />
                                        </td>
                                    </tr>
                                @endforeach
                            </x-Tables.table>
                        @else
                            <h1>No hay registros</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
