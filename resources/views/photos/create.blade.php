@include('layouts.partials.head')

<form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
    @csrf


    <input type="text" name="name">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <input type="file" name="url">
    @error('url')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <select name="category_id">
        <option>Select one...</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->description }}</option>
        @endforeach
    </select>

    @error('category_id')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <input type="submit" value="Upload">
</form>
@include('layouts.partials.scripts')
