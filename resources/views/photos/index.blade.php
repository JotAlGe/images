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
        <div class="row mb-3">
            <div class="col-md-2">

            </div>
            <div class="input-group mb-3 col-md-8 d-inline-flex">
                <form action="{{ route('photos.index') }}" method="GET" class="form"
                    style="display: flex; justify-content: center;">

                    <label for="categories" style="margin: 1%">Categories: </label>
                    <select name="category" class="form-select form-group" aria-label="Default" id="categories"
                        style="margin: 1%">

                        @foreach ($categories as $category)
                        <option value=" {{$category->id}}">{{$category->description}}</option>
                        @endforeach
                    </select>
                    <x-form.button type="submit" color="info" style="margin: 1%">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        Filter
                    </x-form.button>
                </form>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="g-col-4">
            @forelse ($photos as $photo)
            <div style="border: .3px solid rgba(128, 128, 128, .5)" class="col-sm-6 col-md-3 col-lg-3 p-3 m-3">
                <div class="card">
                    <div style="display: flex; justify-content: space-between; padding: 1%; align-items: center;">
                        <img width="30px" src="{{ $photo->user->photo_profile }}" alt="Foto de {{ $photo->user->name }}"
                            class="img-fluid img-thumbnail" />
                        <h5 class="card-title">{{$photo->user->name}}</h5>

                        {{-- delete button --}}
                        @if (Auth::id() === $photo->user->id)
                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-form.button type="submit" color="">
                                <svg width="12px" fill="#ff0000" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z" />
                                </svg>
                            </x-form.button>
                        </form>
                        @endif
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
                                    <h1 class="modal-title text-info" id="exampleModalLabel">
                                        {{$photo->name}}
                                    </h1>
                                </div>

                                <div class="modal-body">
                                    <img src="{{ $photo->url }}" alt="{{ $photo->name }}" style="max-width: 100%">
                                </div>

                                <div class="text-info text-left p-4">
                                    <p class="text-warning">
                                        {{ $photo->comments->count() }} comments
                                    </p>
                                    @forelse($photo->comments as $comment)
                                    <div style="border: .5px solid rgba(177, 177, 177, .5); padding: 1%;">
                                        <small style="color:white;">
                                            {{$comment->user->name}} {{$comment->user->lastname}}
                                        </small>
                                        <p>
                                            {{ $comment->description}}
                                        </p>
                                        <br>
                                        <p class="text-warning text-right">
                                            {{ $comment->created_at->diffForHumans()}}
                                        </p>
                                    </div>
                                    @empty
                                    <h4 class="text-center text-danger">No comments yet...</h4>
                                    @endforelse
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
