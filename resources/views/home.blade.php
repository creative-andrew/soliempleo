@extends('layouts.app')

@section('content')
<div class="container">
    <section class="hero">
        <div class="row justify-content-center">
            <div class="col-12">
                @include('partials/_hero')
            </div>
        </div>
    </section>

    <section id="empleos">
        <div class="row justify-content-center pb-5 text-center">
            <div class="col-12">
                <h2>Encuentra trabajo</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                @include('partials/_cards')
            </div>
        </div>
    </section>

</div>
@endsection
