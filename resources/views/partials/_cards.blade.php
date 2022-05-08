
@unless(count($jobs) == 0)
<div class="card-group mt-5 gap-5">
    @foreach($jobs as $job)
        <a class="card job-card p-5" href="{{route('jobs-show', $job->id)}}">
            <span class="job-type">{{$job->type}}</span>
            <img src="{{asset('storage/logos/'. $job->employer->logo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h4 class="card-title">{{$job->employer->name}}</h4>
                <h5 class="card-title">{{$job->title}}</h5>
                <p class="card-text">{{Str::of($job->description)->words(14)}}</p>
                @foreach(explode(',', $job->keywords) as $keyword)
                 <span class="badge rounded-pill bg-primary">{{$keyword}}</span>
                @endforeach
            </div>
      </a>
    @endforeach
</div>
@endunless


