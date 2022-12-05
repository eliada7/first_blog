@extends('layouts.app')

@section('title', 'Home')
@section('content')


    <div class="container">
        <div class="hero-bg-image d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-light h1 text-uppercase font-weight-bold p-10">Welcome to my Blog</h1>
            <a class="bg-secondary py-4 px-5 border border-radius-lg" href="/">Start Reading</a>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <button class="btn btn-success"> Button</button>
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
