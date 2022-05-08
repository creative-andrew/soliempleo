@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Editar empleo') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jobs-update', $job->id) }}">
                    @method('PUT')
                    @csrf
                        <div class="row mb-3">
                            <label for="keywords" class="col-md-4 col-form-label text-md-end">{{ __('Keywords') }}</label>

                            <div class="col-md-6">
                                <input id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{$job->keywords}}" required autofocus>

                                @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $job->title }}" required>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('password') is-invalid @enderror" name="description" required>
                                    {{$job->description}}
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Ubicación') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ $job->location }}"required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Jornada') }}</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" required>
                                <option value="" disabled hidden>{{ __('Seleccione') }}</option>
                                <option value="full-time" @if ($job->type == 'full-time' ) selected @endif>{{ __('Full time') }}</option>
                                <option value="part-time" @if ($job->type == 'part-time' ) selected @endif>{{ __('Part time') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar empleo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
