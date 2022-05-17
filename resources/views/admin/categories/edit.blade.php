@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Categories') }}
                    </div>

                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            @include('admin.categories.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
