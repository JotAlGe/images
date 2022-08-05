<h1> Hola
    {{ auth()->user()->name; }} {{ auth()->user()->lastname; }}
</h1>

{{-- logaout --}}
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
