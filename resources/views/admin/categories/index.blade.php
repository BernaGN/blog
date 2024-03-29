@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Categories">
                        <x-buttons.a text="Create Category" route="categories.create" />
                    </x-div.header>

                    <div class="card-body">
                        @if ($categories->count())
                            <x-tables.table :headers="['ID', 'Name', 'Created At', 'Update At', 'Accions']" id="categories">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                        <td>
                                            <x-buttons.dropdown :id="$category->id" route="categories" />
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
