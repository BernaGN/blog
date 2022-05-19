@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Tags">
                        <x-buttons.a text="Create Tag" route="tags.create" />
                    </x-div.header>

                    <div class="card-body">
                        @if ($tags->count())
                            <x-tables.table :headers="['ID', 'Name', 'Created At', 'Update At', 'Accions']" id="tags">
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td scope="row">{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->created_at }}</td>
                                        <td>{{ $tag->updated_at }}</td>
                                        <td>
                                            <x-buttons.dropdown :id="$tag->id" route="tags" />
                                        </td>
                                    </tr>
                                @endforeach
                            </x-tables.table>
                        @else
                            <h1>No hay registros</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
