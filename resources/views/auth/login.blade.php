<!DOCTYPE html>
<html lang="en">

    @include('layouts.partials.head')

    <body>

        <div class="modal" style="display: block;">
            <!-- Modal Content -->
            <div class="modal-content" style="display: block;">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="header-title">Log <em>in</em></h3>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="col-md-6 col-md-offset-3">
                        <form id="contact" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>

                                        <x-form.input type="text" name="email" placeholder="Email..."
                                            value="{{ old('email') }}" class="form-control" />
                                        <span class="text-danger">

                                            @error('email')
                                            {{ $message }}
                                            @enderror

                                        </span>

                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <x-form.input type="password" name="password" placeholder="Password.."
                                            class="form-control" />

                                        <span class="text-danger">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </span>

                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <fieldset>

                                        <x-form.button type="submit" id="form-submit" class="btn">
                                            Login
                                        </x-form.button>

                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>

    @include('layouts.partials.scripts')

</html>
