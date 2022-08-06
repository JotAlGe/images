<!DOCTYPE html>
<html>
    {{-- head --}}
    @include('layouts.partials.head')

    {{-- body --}}

    <body>

        <nav>
            <div class="logo">
                <a href="{{ route('home') }}">Ho<em>me</em></a>
            </div>
            <div class="menu-icon">
                <span></span>
            </div>
        </nav>

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


        <div class="full-screen-portfolio" id="portfolio">
            <div class="container-fluid">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_4.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Biodiesel <em>squid</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_4.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_2.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>raclette <em>taxidermy</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_2.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_3.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>humblebrag <em>brunch</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_3.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_1.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Succulents <em>chambray</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_1.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_5.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>freegan <em>aesthetic</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_5.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_6.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>taiyaki <em>vegan</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_6.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_7.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Thundercats <em>santo</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_7.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_8.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>wayfarers <em>yuccie</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_8.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="img/big_portfolio_item_9.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>disrupt <em>street</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="img/portfolio_item_9.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

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



        <section class="overlay-menu">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home - Full-width</a>
                            </li>
                            {{-- logaout --}}
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn btn-link">Logout</button>
                                </form>
                            </li>
                            {{--
                        <li>
                            <a href="masonry.html">Home - Masonry</a>
                        </li>
                        <li>
                            <a href="grid.html">Home - Small-width</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog Entries</a>
                        </li>
                        <li>
                            <a href="single-post.html">Single Post</a>
                        </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        {{-- scripts --}}
        @include('layouts.partials.scripts')
    </body>

</html>
