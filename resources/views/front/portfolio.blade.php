<?php

$lang = \Illuminate\Support\Facades\App::getLocale();

?>

<x-layouts.main>

    <!-- Main -->
    <div id="main">

        <!-- Main Content -->
        <div id="main-content">


            <!-- Showcase Slider Holder -->
            <div id="itemsWrapperLinks">
                <div id="itemsWrapper" class="webgl-fitthumbs fx-six">

                    <!-- ClaPat Slider -->
                    <div class="clapat-slider-wrapper showcase-gallery preview-mode-enabled">
                        <div class="clapat-slider">

                            <!-- ClaPat Main Slider -->
                            <div class="clapat-slider-viewport">

                                @foreach($portfolio1 as $port)
                                    <div class="clapat-slide s25 ">
                                        <div class="slide-events">
                                            <div class="slide-inner photo-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="{{ asset('storage/' . $port->image) }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="{{ asset('storage/' . $port->image) }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($portfolio2 as $port)
                                    <div class="clapat-slide s75">
                                        <div class="slide-events speed-50 has-scale-medium">
                                            <div class="slide-inner design-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="{{ asset('storage/' . $port->image) }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="{{ asset('storage/' . $port->image) }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($portfolio3 as $port)
                                    <div class="clapat-slide s0">
                                        <div class="slide-events has-scale-small">
                                            <div class="slide-inner photo-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="storage/{{ $port->image }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($portfolio4 as $port)
                                    <div class="clapat-slide s50">
                                        <div class="slide-events speed-50">
                                            <div class="slide-inner video-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item change-header" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="storage/{{ $port->image }}" class="item-image grid__item-img" alt="">
                                                                <div class="hero-video-wrapper">
                                                                    <video loop muted playsinline class="bgvid">
                                                                        <source src="storage/{{ $port->image }}" type="video/mp4">
                                                                    </video>
                                                                </div>
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($portfolio5 as $port)
                                    <div class="clapat-slide s50">
                                        <div class="slide-events speed-50">
                                            <div class="slide-inner photo-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="storage/{{ $port->image }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($portfolio6 as $port)
                                    <div class="clapat-slide s0">
                                        <div class="slide-events has-scale-small">
                                            <div class="slide-inner design-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item change-header" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="storage/{{ $port->image }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($portfolio7 as $port)
                                    <div class="clapat-slide s100">
                                        <div class="slide-events speed-50 has-scale-medium">
                                            <div class="slide-inner photo-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="{{ asset('storage/' . $port->image) }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($portfolio8 as $port)
                                    <div class="clapat-slide s100">
                                        <div class="slide-events has-scale-medium">
                                            <div class="slide-inner design-filter" data-centerLine="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerLine="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('singlePortfolio', $port->id) }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="storage/{{ $port->image }}" class="item-image grid__item-img" alt="">
                                                            </div>
                                                            <img src="storage/{{ $port->image }}" class="grid__item-img grid__item-img--large" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $port['title_' . $lang] }}</span></div>
                                                        @foreach($port->services as $service)
                                                            <div class="slide-cat"><span>{{ $service['title_' . $lang] }}</span></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!--/ClaPat Main Slider -->


                            <div class="slider-fixed-content">
                                <div id="slide-inner-temporary" class="fadeout-element">
                                    <div id="slide-inner-caption" class="content-full-width text-align-center height-title">
                                        <div class="inner">
                                            <h1 class="slide-hero-title caption-timeline primary-font-title"><span>The Archive</span></h1>
                                            <div class="slide-hero-subtitle caption-timeline"><span>THESE PROJECTS ARE TOO VALUABLE TO BE LOST. <br class="destroy"> REPRESENTS OUR DEDICATION, CREATIVITY, AND ESSENCE OF EFFORT.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="gallery-zoom-wrapper"></div>
                        <div class="gallery-thumbs-wrapper"></div>
                        <div class="gallery-close-thumbs"></div>

                    </div>
                    <!--/ClaPat Slider -->



                </div>
            </div>
            <!-- Showcase Slider Holder -->





        </div>
        <!--/Main Content -->

    </div>
    <!--/Main -->

</x-layouts.main>