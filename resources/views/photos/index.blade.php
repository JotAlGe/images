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
        <!-- Gallery -->
        <h1 class="text-center">Gallery</h1>
        <div class="grid">
            <div class="g-col-4">
                @forelse ($photos as $photo)

                <div class="col-sm-6 col-md-3 col-lg-3 p-3">
                    <div class="card">
                        <img src="{{$photo->url}}" class="card-img-top" alt="{{$photo->name}}" />
                        <div class="card-body p-3">
                            <h5 class="card-title">{{$photo->name}}</h5>
                            <p class="card-text">{{$photo->user->name}} {{$photo->user->lastname}}</p>
                            <small class="card-footer">{{$photo->created_at->diffForHumans()}}</small>
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
