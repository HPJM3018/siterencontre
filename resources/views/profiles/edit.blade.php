@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Modifier mes informations </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update',$user) }}" enctype="multipart/form-data">
                        @csrf
                      <input name="_method" type="hidden" value="PATCH">
                        <label for="title"> Titre </label>

                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Titre</label>

                                <div class="col-md-6">
                                    <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')  ?? $user->profile->title }} "  autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description"   autocomplete="description" autofocus> {{ old('description') ?? $user->profile->description }}  </textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="url" class="col-md-4 col-form-label text-md-end">Url</label>

                                <div class="col-md-6">
                                <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }} "  autocomplete="url" autofocus>

                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier mes informations
                                </button>
                            </div>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
