<!DOCTYPE html>
<html>
    {{-- head --}}
    @include('layouts.partials.head')

    {{-- body --}}

    <body>
        @include('layouts.partials.nav')

        <div id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <h1> Hello
                        {{ auth()->user()->name; }} {{ auth()->user()->lastname; }}
                    </h1>

                    <p>Homepage with full-width image gallery</p>
                    <div class="scroll-icon">
                        <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <video autoplay="" loop="" muted>
                <source src="highway-loop.mp4" type="video/mp4" />
            </video>
        </div>

        {{--
        @include('photos.index') --}}

        {{-- footer --}}
        <x-footer>
            Copyright &copy; 2018 Company Name

            | Designed by TemplateMo
        </x-footer>


        <!-- Modal button -->
        <div class="popup-icon">
            <button id="modBtn" class="modal-btn"><img src="img/contact-icon.png" alt=""></button>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="header-title">Say hello to <em>Highway</em></h3>
                    <div class="close-btn"><img src="img/close_contact.png" alt=""></div>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="col-md-6 col-md-offset-3">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Your email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- menu --}}
        @include('layouts.partials.menu')


        {{-- scripts --}}
        @include('layouts.partials.scripts')
    </body>

</html>
