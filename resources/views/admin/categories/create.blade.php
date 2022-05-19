@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header name="Create Categories">
                        <x-buttons.a route="categories.index" />
                    </x-header>

                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            @include('admin.categories.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
