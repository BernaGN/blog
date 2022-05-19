@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-div.header name="Create Tags">
                        <x-buttons.a route="tags.index" />
                    </x-div.header>

                    <div class="card-body">
                        <form action="{{ route('tags.store') }}" method="post">
                            @csrf
                            @include('admin.tags.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
