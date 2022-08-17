<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gallery</title>
        @include('layouts.partials.head')
    </head>

    <body>
        {{-- nav --}}
        @include('layouts.partials.nav')
        @include('layouts.partials.menu')


        {{-- alert success --}}
        @if (session()->has('success'))

        <x-form.alert color="success">
            {{ session('success') }}
        </x-form.alert>
        @endif

        <div style="display: flex; justify-content: space-around; align-items:center;">
            <h1>Gallery</h1>
            <a href="{{ route('photos.create') }}" class="btn btn-info">New photo</a>
        </div>

        <div class="g-col-4">
            @forelse ($photos as $photo)
            <div style="border: .3px solid rgba(128, 128, 128, .5)" class="col-sm-6 col-md-3 col-lg-3 p-3 m-3">
                <div class="card">
                    <div style="display: flex; justify-content: space-between; padding: 1%;">
                        <img width="30px" src="{{ $photo->user->photo_profile }}" alt="Foto de {{ $photo->user->name }}"
                            class="img-fluid img-thumbnail" />
                        <h5 class="card-title">{{$photo->user->name}}</h5>
                    </div>


                    <div class="card-body p-3">
                        <a data-toggle="modal" data-target="#{{$photo->id}}">
                            <img src="{{$photo->url}}" class="img-fluid mx-auto" alt="{{$photo->name}}"
                                title="Foto de {{ $photo->user->name }}" style=" max-width: 100%; cursor: pointer;" />
                        </a>

                        <div style="display: flex; justify-content: space-between;">

                            <p class="card-text">{{$photo->name}} {{$photo->lastname}}</p>

                            <small class="card-footer">{{$photo->created_at->diffForHumans()}}</small>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="{{$photo->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title text-info" id="exampleModalLabel"> {{$photo->name}}
                                    </h1>

                                </div>
                                <div class="modal-body">
                                    <img src="{{ $photo->url }}" alt="{{ $photo->name }}" style="max-width: 100%">
                                </div>
                                <div class="modal-footer">
                                    <x-form.button data-dismiss="modal" color="danger">
                                        Close
                                    </x-form.button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="text-center
                            bg-{{$photo->category->color->description}}">
                        {{$photo->category->description}}
                    </div>
                </div>
            </div>

            @empty
            <h5 class="card-title">No post... yet</h5>
            @endforelse

        </div>
        </div>


        @include('layouts.partials.scripts')
    </body>

</html>
