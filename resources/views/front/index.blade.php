<?php

$lang = \Illuminate\Support\Facades\App::getLocale();

?>


<x-layouts.main>
    <!-- Main -->
    <div id="main">

        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>BRENDING</span></h1>
                        <div class="hero-subtitle caption-timeline">
                            <span>WE ARE A CREATIVE STUDIO, SPECIALIZED IN STRATEGY, BRANDING <br class="destroy"> DESIGN, AND DEVELOPMENT. OUR WORK IS ALWAYS AT THE INTERSECTION <br class="destroy"> OF DESIGN AND TECHNOLOGY.</span>
                        </div>
                    </div>
                </div>
                <div id="hero-footer">
                    <div class="hero-footer-left">
                        <div class="button-wrap right scroll-down">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="button-text sticky right"><span data-hover="Scroll to Explore">Scroll to Explore</span></div>
                        </div>
                    </div>
                    <div class="hero-footer-right">
                        <div id="info-text">Featured Projects</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content" class="content-full-width">

                <!-- Row -->
                <div class="content-row full text-align-center row_padding_left row_padding_right dark-section" data-bgcolor="#0c0c0c">

                    <div id="itemsWrapperLinks">
                        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">

                            <div class="overlapping-gallery">

                                @foreach($portfolios as $port)
                                    <div class="overlapping-image">
                                        <div class="overlapping-image-inner trigger-item" data-centerLine="OPEN">
                                            <div class="img-mask">
                                                <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}"></a>
                                                <div class="section-image trigger-item-link">
                                                    <img src="{{ asset('storage/' . $port->image) }}" class="item-image grid__item-img" alt="">
                                                </div>
                                                <img src="{{ asset('storage/' . $port->image) }}" class="grid__item-img grid__item-img--large" alt="">
                                            </div>
                                            <div class="slide-caption trigger-item-link-secondary">
                                                <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                @foreach ($port->services as $service)
                                                    <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="overlapping-image">
                                    <div class="overlapping-image-inner trigger-item" data-centerLine="OPEN">
                                        <div class="img-mask">
                                            <a class="slide-link" data-type="page-transition" href="project02.html"></a>
                                            <div class="section-image trigger-item-link">
                                                <img src="/front/images/02hero.jpg" class="item-image grid__item-img" alt="">
                                            </div>
                                            <img src="/front/images/02hero.jpg" class="grid__item-img grid__item-img--large" alt="">
                                        </div>
                                        <div class="slide-caption trigger-item-link-secondary">
                                            <div class="slide-title primary-font-title"><span>Green Audio</span></div>
                                            <div class="slide-date"><span>2024</span></div>
                                            <div class="slide-cat"><span>Photography</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="overlapping-image">
                                    <div class="overlapping-image-inner trigger-item" data-centerLine="OPEN">
                                        <div class="img-mask">
                                            <a class="slide-link" data-type="page-transition" href="project03.html"></a>
                                            <div class="section-image trigger-item-link">
                                                <img src="/front/images/03hero.jpg" class="item-image grid__item-img" alt="">
                                            </div>
                                            <img src="/front/images/03hero.jpg" class="grid__item-img grid__item-img--large" alt="">
                                        </div>
                                        <div class="slide-caption trigger-item-link-secondary">
                                            <div class="slide-title primary-font-title"><span>Nanotech</span></div>
                                            <div class="slide-date"><span>2024</span></div>
                                            <div class="slide-cat"><span>Branding</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="overlapping-image">
                                    <div class="overlapping-image-inner trigger-item change-header" data-centerLine="OPEN">
                                        <div class="img-mask">
                                            <a class="slide-link" data-type="page-transition" href="project04.html"></a>
                                            <div class="section-image trigger-item-link">
                                                <img src="/front/images/04hero.jpg" class="item-image grid__item-img" alt="">
                                                <div class="hero-video-wrapper">
                                                    <video loop muted class="bgvid">
                                                        <source src="/front/images/04hero.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                            <img src="/front/images/04hero.jpg" class="grid__item-img grid__item-img--large" alt="">
                                        </div>
                                        <div class="slide-caption trigger-item-link-secondary">
                                            <div class="slide-title primary-font-title"><span>Cool Dude</span></div>
                                            <div class="slide-date"><span>2024</span></div>
                                            <div class="slide-cat"><span>Video Production</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="overlapping-image">
                                    <div class="overlapping-image-inner trigger-item" data-centerLine="OPEN">
                                        <div class="img-mask">
                                            <a class="slide-link" data-type="page-transition" href="project05.html"></a>
                                            <div class="section-image trigger-item-link">
                                                <img src="/front/images/05hero.jpg" class="item-image grid__item-img" alt="">
                                            </div>
                                            <img src="/front/images/05hero.jpg" class="grid__item-img grid__item-img--large" alt="">
                                        </div>
                                        <div class="slide-caption trigger-item-link-secondary">
                                            <div class="slide-title primary-font-title"><span>Sphere Digital</span></div>
                                            <div class="slide-date"><span>2024</span></div>
                                            <div class="slide-cat"><span>Graphic Design</span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="has-opacity">CRAFTING WEBSITES WHERE THE ELEGANCE</span>
                        <br class="destroy">
                        <span class="has-opacity">OF DESIGN INTERSECTS WITH THE SCIENCE OF SELLING PRODUCTS.</span>
                    </p>

                    <div class="button-box text-align-center has-animation fadeout-element">
                        <div class="clapat-button-wrap parallax-wrap hide-ball">
                            <div class="clapat-button parallax-element">
                                <div class="button-border outline rounded parallax-element-second">
                                    <a class="ajax-link" href="/portfolio" data-type="page-transition">
                                        <span data-hover="See All Works">See All Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_left row_padding_right dark-section fadeout-element" data-bgcolor="#0c0c0c">

                    <div class="list-rotator-wrapper">
                        <div class="list-rotator-title">OUR SKILLS SERVICE</div>
                        <div class="list-rotator-pin">
                            <ul class="list-rotator primary-font-title">
                                @foreach($services as $service)
                                    <li class="">{{ $service['title_' . $lang] }}</li>
                                @endforeach
                                <li>Mobile App Development</li>
                                <li>UI/UX Design</li>
                                <li>SEO Optimization</li>
                                <li>Social Media Management</li>
                                <li>Data Analytics</li>
                                <li>Content Creation</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row dark-section text-align-center" data-bgcolor="#0c0c0c">
                    @foreach($contact as $con)
                        <div class="one_third has-animation"  data-delay="100">

                            <div class="box-icon-wrapper block-boxes">
                                <div class="box-icon">
                                    <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                                </div>
                                <div class="box-icon-content">
                                    <h6 class="no-margins"><a href="{{ $con->email }}" class="link"><span>{{ $con->email }}</span></a></h6>
                                    <p>Email</p>
                                </div>
                            </div>

                        </div>

                        <div class="one_third has-animation"  data-delay="200">

                            <div class="box-icon-wrapper block-boxes">
                                <div class="box-icon">
                                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                </div>
                                <div class="box-icon-content">
                                    <h6 class="no-margins">{{ $con->address }}</h6>
                                    <p>Address</p>
                                </div>
                            </div>

                        </div>

                        <div class=" one_third last has-animation"  data-delay="300">

                            <div class="box-icon-wrapper block-boxes">
                                <div class="box-icon">
                                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                </div>
                                <div class="box-icon-content">
                                    <h6 class="no-margins"><a href="tel:{{ $con->phone }}" class="no-margins">{{ $con->phone }}</a></h6>
                                    <p>Phone</p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
                <!--/Row -->




            </div>
            <!--/Main Page Content -->


            <!-- Page Navigation -->
            <div id="page-nav">
                <div class="page-nav-wrap">
                    <div class="page-nav-caption content-full-width text-align-center height-title">
                        <div class="inner">
                            <div class="next-hero-subtitle caption-timeline"><span>EXPLORING OUR WORLD OF VISUAL AND INTERACTIVE DESIGN</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="ABOUT US" href="/about">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Our Studio</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Page Navigation -->


        </div>
        <!--/Main Content -->

    </div>
    <!--/Main -->
</x-layouts.main>