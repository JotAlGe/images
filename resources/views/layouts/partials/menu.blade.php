<section class="overlay-menu">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home - Full-width</a>
                    </li>
                    <li>
                        <a href="{{ route('photos.index') }}">Gallery</a>
                    </li>
                    {{-- logaout --}}
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-link">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
