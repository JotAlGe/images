@include('layouts.partials.head')

<form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
    @csrf


    <input type="text" name="name">
    <br>
    <input type="file" name="url">

    <select name="category_id">
        <option>Select one...</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->description }}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="Upload">
</form>
@include('layouts.partials.scripts')
