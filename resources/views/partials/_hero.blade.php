<div class="row flex-lg-row-reverse align-items-center g-5 pt-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="{{asset('images/hero.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Encuentra trabajo en miles de empresas solidarias</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra non ex ac porttitor. Nullam sodales pretium augue in ultricies. Mauris et magna et ipsum imperdiet tincidunt.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a type="button" href="#empleos" class="btn btn-primary btn-lg px-4 me-md-2">Ver empleos</a>
        @guest
            @if (Route::has('login'))
            <a type="button" href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4" >Publicar empleos</a>
            @endif
        @else
        <a type="button" href="{{ route('jobs-create') }}" class="btn btn-outline-secondary btn-lg px-4" >Publicar empleos</a>
        @endguest
      </div>
    </div>
</div>
