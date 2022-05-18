@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <x-header route="tags.index" name="Create Tags" />

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
