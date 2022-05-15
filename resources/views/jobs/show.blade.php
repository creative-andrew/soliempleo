@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <span class="job-type">{{$job->type}}</span>
                    <img src="{{asset('storage/logos/'. $job->employer->logo)}}" class="pt-3 img-fluid rounded-circle mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{$job->employer->name}}</h4>
                        <h5 class="card-title">{{$job->title}}</h5>
                        <p class="card-text">{{$job->description}}</p>

                        <a class="btn btn-primary mb-3" href="mailto:{{$job->employer->email}}">Postular</a>
                        <div>
                        @foreach(explode(',', $job->keywords) as $keyword)
                            <span class="badge rounded-pill bg-primary">{{$keyword}}</span>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
