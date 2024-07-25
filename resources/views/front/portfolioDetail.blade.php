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
                        <h1 class="hero-title caption-timeline primary-font-title"><span>PortfolioDetail</span></h1>
                    </div>
                </div>
                <div id="hero-footer" class="has-border">
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
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content">

                <!-- Showcase Portfolio Holder -->
                <div id="itemsWrapperLinks">
                    <div id="itemsWrapper" class="webgl-fitthumbs fx-one">

                        <!-- ClaPat Portfolio -->
                        <div class="showcase-portfolio">

                            <div class="clapat-item photo-filter">
                                <div class="slide-inner trigger-item" data-centerLine="OPEN">
                                    <div class="img-mask">
                                        <div class="curtains" data-curtain-color="#7e5041">
                                            <div class="curtain-row"></div>
                                        </div>
                                        <a class="slide-link" data-type="page-transition" href="/portfolio"></a>
                                        <div class="section-image trigger-item-link">
                                            <img src="{{ asset('storage/' . $portfolio->image) }}" class="item-image grid__item-img" alt="">
                                        </div>
                                        <img src="{{ asset('storage/' . $portfolio->image) }}" class="grid__item-img grid__item-img--large" alt="">
                                    </div>
                                    <div class="slide-caption trigger-item-link-secondary">
                                        <div class="slide-title"><span>{{ $portfolio['title_' . $lang] }}</span></div>
                                        @foreach ($portfolio->services as $service)
                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="clapat-item vertical-parallax design-filter">
                                <div class="slide-inner trigger-item" data-centerLine="OPEN">
                                    <div class="img-mask">
                                        <div class="curtains" data-curtain-color="#0c0c0c">
                                            <div class="curtain-row"></div>
                                        </div>
                                        <a class="slide-link" data-type="page-transition" href="/portfolio"></a>
                                        <div class="section-image  trigger-item-link">
                                            <img src="{{ asset('storage/' . $portfolio->image1) }}" class="item-image grid__item-img" alt="">
                                        </div>
                                        <img src="{{ asset('storage/' . $portfolio->image1) }}" class="grid__item-img grid__item-img--large" alt="">
                                    </div>
                                    <div class="slide-caption trigger-item-link-secondary">
                                        <div class="slide-title"><span>{{ $portfolio['title_' . $lang] }}</span></div>
                                        @foreach ($portfolio->services as $service)
                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="clapat-item photo-filter">
                                <div class="slide-inner trigger-item" data-centerLine="OPEN">
                                    <div class="img-mask">
                                        <div class="curtains" data-curtain-color="#fe6720">
                                            <div class="curtain-row"></div>
                                        </div>
                                        <a class="slide-link" data-type="page-transition" href="/portfolio"></a>
                                        <div class="section-image trigger-item-link">
                                            <img src="{{ asset('storage/' . $portfolio->image2) }}" class="item-image grid__item-img" alt="">
                                        </div>
                                        <img src="{{ asset('storage/' . $portfolio->image2) }}" class="grid__item-img grid__item-img--large" alt="">
                                    </div>
                                    <div class="slide-caption trigger-item-link-secondary">
                                        <div class="slide-title"><span>{{ $portfolio['title_' . $lang] }}</span></div>
                                        @foreach ($portfolio->services as $service)
                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ClaPat Portfolio -->

                    </div>
                </div>
                <!-- Showcase Portfolio Holder -->


            </div>
            <!--/Main Page Content -->


            <!-- Page Navigation -->
            <div id="page-nav">
                <div class="page-nav-wrap">
                    <div class="page-nav-caption content-full-width text-align-center height-title">
                        <div class="inner">
                            <div class="next-hero-subtitle caption-timeline"><span>EXPLORING OUR WORLD OF VISUAL AND INTERACTIVE DESIGN</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="ARCHIVE" href="/portfolio">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>The</span> <span>Archive</span></div>
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