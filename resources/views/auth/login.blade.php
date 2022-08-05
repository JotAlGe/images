<form action="{{ route('login') }}" method="post">
    @csrf
    <label>
        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}">
        @error('email')
        {{ $message }}
        @enderror
    </label>
    <br>
    <label>
        <input type="password" name="password" placeholder="Password..">
        @error('password')
        {{ $message }}
        @enderror
    </label>
    <br>
    <input type="submit" value="Login">
</form>
