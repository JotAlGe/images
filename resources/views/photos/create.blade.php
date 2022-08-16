@include('layouts.partials.head')

<div class="container-fluid">
    <h1 class="text-center">
        Upload a photo...
    </h1>
    <div class="row">
        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="xsinput">Name:</label>
                    <x-form.input type="text" name="name" class="form-control input-xs" id="xsinput" />

                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="xsinput">File:</label>
                    <x-form.input type="file" name="url" class="form-control input-xs" />

                    @error('url')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="xsinput">Category:</label>
                    <select name="category_id" class="form-control input-xs">
                        <option>Select one...</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <x-form.button type="submit" class="form-control input-xs" color="info">
                        Upload
                    </x-form.button>
                </div>

            </form>

        </div>

        <div class="col-lg-3"></div>
    </div>
</div>
@include('layouts.partials.scripts')
