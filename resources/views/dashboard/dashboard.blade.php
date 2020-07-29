@extends('layouts.ethos')

@section('navbar')
<div class="header-content">

            <nav class="row header-nav-wrap">
                <ul class="header-nav">
                    <li><a class="smoothscroll" href="#hero" title="Intro">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="About">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="Services">Services</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works">Works</a></li>
                    <li><a href="mailto:#0" title="Contact us">Say Hello</a></li>
                    <!-- <li><a class="btn" href="/login" title="login">Login</a></li> -->
                </ul>
            </nav> <!-- end header-nav-wrap -->

            <a href="/login" title="login" class="btn btn--stroke btn--small">Login</a>

        </div> <!-- end header-content -->
@endsection

@section('content')
    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section" data-parallax="scroll" data-image-src="{{asset('ethos/images/elsa-bg.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="row hero-content">

            <div class="column large-full">

                <h1>
                    Event Space, <br>
                    Shared Desk, <br>
                    Private Office, <br>
                    Meeting Room, <br>
                    Open: 08.00 - 22.00.
                </h1>

                <ul class="hero-social">
                    <li>
                        <a href="https://linktr.ee/el_samara" title="">Info & Book</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/elsamara.id/" title="">Instagram</a>
                    </li>
                </ul> <!-- end hero-social -->

            </div>

        </div> <!-- end hero-content -->

        <div class="hero-scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12 24l-8-9h6v-15h4v15h6z" /></svg>
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="s-about__section s-about__section--profile">

            <div class="right-vert-line"></div>

            <div class="row">
                <div class="column large-6 medium-8 tab-full">

                    <div class="section-intro" data-num="01" data-aos="fade-up">
                        <h3 class="subhead">About Us</h3>
                        <h1 class="display-1">A Place To Develop Your Dreams.</h1>
                    </div>

                    <div class="profile-pic" data-aos="fade-up">
                        <img src="{{asset('ethos/images/pict3.jpg')}}" srcset="{{asset('ethos/images/pict3.jpg 1x, images/pict3@2x.jpg 2x')}}" alt="">
                    </div>

                    <h3 data-aos="fade-up">EL Samara</h3>

                    <p data-aos="fade-up">
                        Coworking Space itu apa?
                        Coworking adalah "style of work" atau gaya kerja yang memerlukan tempat kerja bersama. Tidak seperti kantor biasa, 
                        rekan kerja pada suatu tempat biasanya berasal dari perusahaan yang berbeda. Nah, tempat kerja bergaya coworking ini 
                        disebut dengan coworking space.Coworking space memberikan tempat untuk para profesional, pekerja lepas, dan juga pelajar 
                        untuk dapat bekerja dan bersinergi bersama. Solusi bagi mereka yang ingin bekerja tanpa gangguan ketika mereka bekerja 
                        di rumah atau tempat umum lainnya. Apakah coworking space ada di Kota Solo?
                        Coba kunjungi El Samara Coffee Space di Jl. Mawar No.9, Mangkubumen, Surakarta.
                    </p>

                </div>
            </div>

        </div> <!-- end s-about__section--profile -->
    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section h-dark-bg">

        <div class="row s-services__content">

            <div class="vert-line"></div>

            <div class="column large-6 s-services__leftcol">
                <div class="section-intro" data-num="02" data-aos="fade-up">
                    <h3 class="subhead">El SAMARA</h3>

                    <h1 class="display-1">
                        OUR SERVICES
                    </h1>
                </div>

                <p class="lead" data-aos="fade-up">
                Make your workplace also a place to develop yourself as well as relationships. If interested, please contact us. Maybe we can collaborate.
                </p>
            </div> <!-- end  s-services--leftcol -->

            <div class="column large-6">
                <ul class="services-list" data-aos="fade-up">
                    <li class="services-list__item is-active">
                        <div class="services-list__item-header">
                            <h5>Workspace</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Flexsible plans from hot desks all the way to your own private room or office.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5>Conference Rooms</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Real-time availability for all our meeting rooms. Request and manage bookings online.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5>Online Member Network</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Easily connect with other members of the community. Use the directories to find the right skills and promote your services.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5>Childcare</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Professional childcare services available from the age of two.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5>Benefits and Discounts</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                All members enjoy discounted rates, credits and benefits as part of their membership.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                    <li class="services-list__item">
                        <div class="services-list__item-header">
                            <h5>Weekly Events</h5>
                        </div>
                        <div class="services-list__item-body">
                            <p>
                                Connenct and learn in our curated events and meet-ups.
                            </p>
                        </div>
                    </li> <!-- services-list__item -->
                </ul> <!-- end services-list -->
            </div>

        </div> <!-- s-services__content -->

    </section> <!-- end s-services -->


    <!-- portfolio
    ================================================== -->
    <section id="portfolio" class="s-portfolio target-section">

        <div class="row s-portfolio__header">
            <div class="column large-6 medium-8 tab-full">
                <div class="section-intro" data-num="03" data-aos="fade-up">
                    <!-- <h3 class="subhead">Portfolio</h3> -->
                    <h1 class="display-1">
                        THIS IS US
                    </h1>
                </div>
            </div>
        </div> <!-- s-porfolio__header -->

        <div class="row s-porfolio__list block-large-1-2 block-tab-full collapse">

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict1.jpg')}}" title="Windows in The City" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict1.jpg')}}" srcset="{{asset('ethos/images/pict1.jpg 1x, images/pict1@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict6.jpg')}}" title="Building Blocks" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict6.jpg')}}" srcset="{{asset('ethos/images/pict6.jpg 1x, images/pict6@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict6.jpg')}}" Title="Shout and Jump" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict6.jpg')}}" srcset="{{asset('ethos/images/pict6.jpg 1x, images/pict6@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict4.jpg')}}" title="Sand Dunes" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict4.jpg')}}" srcset="{{asset('ethos/images/pict4.jpg 1x, images/pict4@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict5.jpg')}}" title="Sand Dunes" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict5.jpg')}}" srcset="{{asset('ethos/images/pict5.jpg 1x, images/pict5@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="{{asset('ethos/images/pict6.jpg')}}" title="The Lamp" data-size="1050x700">
                            <img src="{{asset('ethos/images/pict6.jpg')}}" srcset="{{asset('ethos/images/pict6.jpg 1x, images/pict6@2x.jpg 2x')}}" alt="">
                        </a>
                    </div>
                    
                </div>
            </div> <!-- end column -->

        </div> <!-- folio-list -->

    </section> <!-- end portfolio -->


    <!-- testimonials
    ================================================== -->
    <section id="testimonials" class="s-testimonials">

        <!-- CTA
        ================================================== -->
        <div class="s-cta">

            <div class="row">
                <div class="column large-full">
                    <h2 class="section-desc" data-aos="fade-up">
                        Register for updates
                    </h2>
                </div>
            </div>

            <div class="row cta-content" data-aos="fade-up">
                <div class="column large-full">
                    <p>
                        Register to get the latest information about news, offers and events
                    </p>

                    <a href="/register" class="btn btn--primary h-full-width">Register</a>
                </div>
            </div> <!-- end cta-content -->

        </div> <!-- end s-cta -->


    </section> <!-- end s-testimonials -->



    <!-- footer
    ================================================== -->
    <footer class="s-footer h-dark-bg">

        <div class="right-vert-line"></div>

        <div class="row s-footer__main">
            <div class="column large-6">
                <div class="section-intro" data-aos="fade-up">
                    <h3 class="subhead">Get In Touch</h3>

                    <h1 class="display-1">
                        have a question or want to know us more closely 
                    </h1>
                </div>

                <div class="footer-email-us">
                    <a href="mailto:#0" class="btn btn--primary h-full-width">Let's Talk</a>
                </div>
            </div>

            <div class="column large-5">
                <div class="footer-contacts">
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Email
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="mailto:#0">elsamaraspace@gmail.com</a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Phone
                        </h5>
                        <p class="footer-contact-block__content">
                            <a href="tel:082328309998">082328309998</a>
                        </p>
                    </div> <!-- end footer-contact-block -->
                    <br>
                    <div class="footer-contact-block" data-aos="fade-up">
                        <h5 class="footer-contact-block__header">
                            Social
                        </h5>
                        <ul class="footer-contact-block__list">
                            <li><a href="linktr.ee/el_samara">Info & Book</a></li>
                            <li><a href="https://www.instagram.com/elsamara.id/">Instagram</a></li>
                            <!-- <li><a href="#0">Behance</a></li> -->
                            <!-- <li><a href="#0">Dribbble</a></li> -->
                        </ul>
                    </div> <!-- end footer-contact-block -->
                </div>
            </div>
        </div> <!-- end s-footer__main -->

        <div class="row s-footer__bottom">
            <div class="column large-full ss-copyright">
                <span>© Copyright El Samara 2020</span>
                <span>Design by <a href="">Love</a></span>
            </div> <!-- end ss-copyright -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 0l8 9h-6v15h-4v-15h-6z" /></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->
@endsection