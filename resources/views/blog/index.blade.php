@extends('layouts.app')
@section('title', 'Blog')


@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto d-flex justify-content-center text-center pt-15">
            <h1 class="h1 font-weight-bold">All Posts</h1>
        </div>
        <div class="container d-grid">
            <div>
                <img src="https://picsum.photos/id/343/960/620?grayscale&blur=2" alt="">
            </div>
            <div>
                <h2 class="font-weight-bold"> How to create a Blog with Laravel</h2>
                <span>Created by Eliada</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio, distinctio minus quo adipisci
                    facere consectetur iusto accusantium, rerum, ipsum sint assumenda temporibus veritatis sunt. Aspernatur
                    ut dolores assumenda debitis?</p>
                <a href="/">Read More</a>
            </div>
        </div>
    </div>
@endsection
