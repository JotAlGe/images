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
        <!-- Gallery -->
        <h1 class="text-center">Gallery</h1>
        <div class="grid">
            <div class="g-col-4">
                @forelse ($photos as $photo)

                <div style="border: .3px solid rgba(128, 128, 128, .5)" class="col-sm-6 col-md-3 col-lg-3 p-3 m-3">
                    <div class="card">
                        <div style="display: flex; justify-content: space-between; padding: 1%;">
                            <img width="30px" src="{{ $photo->user->photo_profile }}"
                                alt="Foto de {{ $photo->user->name }}" class="img-fluid img-thumbnail" />
                            <h5 class="card-title">{{$photo->user->name}}</h5>
                        </div>
                        <img src="{{$photo->url}}" class="img-fluid" alt="{{$photo->name}}"
                            title="Foto de {{ $photo->user->name }}" />
                        <div class="card-body p-3">
                            <div style="display: flex; justify-content: space-between;">

                                <p class="card-text">{{$photo->name}} {{$photo->lastname}}</p>
                                <small class="card-footer">{{$photo->created_at->diffForHumans()}}</small>
                            </div>
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
