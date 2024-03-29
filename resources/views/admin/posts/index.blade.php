@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Posts">
                        <x-buttons.a text="Create Post" route="posts.create" />
                    </x-div.header>

                    <div class="card-body">
                        @if ($posts->count())
                            <x-tables.table :headers="['ID', 'Name', 'Post', 'Created At', 'Updated At', 'Accions']" id="posts">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td scope="row">{{ $post->id }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->post }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>
                                            <x-buttons.dropdown :id="$post->id" route="posts" />
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script>
        $('#posts').DataTable()
    </script>
@endsection
