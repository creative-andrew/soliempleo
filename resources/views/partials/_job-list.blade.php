@unless(count($jobs) == 0)
<ul class="list-group mb-5">
    @foreach($jobs as $job)
        <li class="list-group-item d-flex align-items-center gap-3">
            <span class="flex-fill" >{{$job->title}}</span>
            <a class="btn btn-sm btn-success" href="{{route('jobs-edit', $job->id)}}"> <i class="fa-solid fa-pen-to-square"></i> </a>
            <form method="POST" action="{{route('jobs-delete', $job->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
        </li>
    @endforeach
</ul>
@endunless
