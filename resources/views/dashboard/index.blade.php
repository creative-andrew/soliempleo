@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('partials/_job-list')

                    <a class="btn btn-primary" href={{route('jobs-create')}} role="button">{{__('Crear nuevo empleo')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
