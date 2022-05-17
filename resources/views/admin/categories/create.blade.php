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
