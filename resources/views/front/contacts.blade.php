<x-layouts.main>
    <!-- Main -->
    <div id="main">

        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Contact</span></h1>
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
            <div id="main-page-content" class="content-max-width">


                <!-- Row -->
                <div class="content-row full row_padding_left row_padding_right dark-section" data-bgcolor="#0c0c0c">

                    <div id="map_canvas"></div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom dark-section text-align-center" data-bgcolor="#0c0c0c">

                    <h2 class="big-title has-mask-fill primary-font-title">Let's Talk</h2>

                    <hr><hr>

                    <!-- Contact Formular -->
                    <div id="contact-formular">

                        <div id="message"></div>

                        <form method="post" action="{{ route('callcus.store') }}" name="contactform" id="contactform">
                            @csrf
                            <div class="name-box">
                                <input name="full_name" type="text" id="name" size="30" value="" placeholder="What's Your Name"><label class="input_label"></label>
                            </div>
                            <div class="email-box">
                                <input name="phone_number" type="text" id="phone_number" size="30" value="" placeholder="phone_number"><label class="input_label"></label>
                            </div>
                            <div class="message-box">
                                <textarea name="description" cols="40" rows="4" id="comments" placeholder="Tell Us About Your Project"></textarea><label class="input_label slow"></label>
                            </div>

                            <div class="button-box">
                                <div class="clapat-button-wrap parallax-wrap link">
                                    <div class="clapat-button parallax-element">
                                        <button class="button-border rounded outline" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <!--/Contact Formular -->
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
                            <div class="next-hero-subtitle caption-timeline"><span>INTERESTED TO DISCOVER MORE FROM OUR WORKS?</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="GO TO" href="/portfolio">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Portfolios</span></div>
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
