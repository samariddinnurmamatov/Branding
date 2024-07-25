<?=

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
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Our Studio</span></h1>
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
                        <div id="info-text">Our Short Story</div>
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
                <div class="content-row dark-section" data-bgcolor="#0c0c0c">

                    <div class="clipped-image-wrapper">

                        <div class="clipped-image-pin">
                            <div class="clipped-image">
                                <img src="/front/images/about.jpg" alt="Image Title">
                                <div class="content-video-wrapper">
                                    <video loop muted playsinline class="bgvid">
                                        <source src="/front/images/about.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="clipped-image-gradient"></div>
                            </div>
                        </div>

                        <div class="clipped-image-content text-align-center content-full-width">


                        </div>

                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row text-align-center dark-section" data-bgcolor="#0c0c0c">


                    <div class="move-thumbs-wrapper">

                        <div class="start-thumbs-caption">
                            <h2 class="primary-font-title big-title has-mask-fill">Recognitions</h2>
                            <p>OUR PRESTIGIOUS DESIGN AWARDS</p>
                        </div>



                        <div class="start-thumbs-wrapper">

                            <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw01.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 90%" data-stop="1100%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw02.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 90%" data-stop="400%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw03.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw04.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 100%" data-stop="750%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw05.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 40%" data-stop="300%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="/front/images/aw06.jpg" class="item-image" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="end-thumbs-wrapper">
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                        </div>

                    </div>


                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom light-section change-header-color has-clip-path" data-bgcolor="#fff">

                    <hr class="destroy"><hr class="destroy">


                    <div class="pinned-section">
                        <div class="pinned-element left">
                            <h2 class="big-title primary-font-title no-margins"><span class="has-mask-fill">Our</span><br><span class="has-mask-fill">Services</span></h2>
                        </div>

                        <div class="scrolling-element right">
                            <dl class="accordion has-animation">
                                @foreach($services as $service)
                                    <dt>
                                        <span class="link"><div>{{ $service['title_' . $lang] }}</div></span>
                                        <div class="acc-icon-wrap parallax-wrap">
                                            <div class="acc-button-icon parallax-element">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </dt>
                                    <dd class="accordion-content">{{ $service['description_' . $lang] }}</dd>

                                @endforeach
                                <dt>
                                    <span class="link"><div>Mobile App Development</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Our team crafts innovative and feature-rich mobile applications that cater to the needs of modern users.</dd>

                                <dt>
                                    <span class="link"><div>E-Commerce Solutions</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">We build seamless online shopping experiences that empower businesses to reach customers globally.</dd>

                                <dt>
                                    <span class="link"><div>Digital Marketing</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Our strategic digital marketing campaigns help businesses amplify their online presence and achieve their growth goals.</dd>

                                <dt>
                                    <span class="link"><div>UI/UX Design</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">We design intuitive and visually appealing user interfaces that enhance user experiences and streamline interactions.</dd>

                                <dt>
                                    <span class="link"><div>Brand Strategy</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content"> Our brand strategists develop strong and compelling brand identities that resonate with target audiences.</dd>

                                <dt>
                                    <span class="link"><div>SEO Optimization</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">We optimize websites to improve search engine visibility, driving organic traffic and increasing online visibility.</dd>

                                <dt>
                                    <span class="link"><div>Social Media Management</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Our social media experts manage and curate engaging content, fostering meaningful connections with audiences.</dd>

                                <dt>
                                    <span class="link"><div>Content Creation</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Our creative team produces compelling and impactful content that tells your brand's story and captivates your audience.</dd>

                                <dt>
                                    <span class="link"><div>Data Analytics</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">We analyze data to uncover valuable insights and guide data-driven decision-making for business growth and success.</dd>
                            </dl>
                        </div>
                    </div>

                    <hr class="destroy">

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_top row_padding_left row_padding_right text-align-center dark-section" data-bgcolor="#0c0c0c">

                    <h2 class="big-title primary-font-title"><span class="has-mask-fill">Collaborators</span></h2>
                    <p>WE DEVELOP GORGEOUS AND MEMORABLE <br class="destroy"> PROJECTS FOR OUR CLIENTS.</p>
                    <hr><hr>



                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_bottom dark-section" data-bgcolor="#0c0c0c">

                    <div class="moving-gallery bw-gallery">
                        <ul class="wrapper-gallery">
                            @foreach($partners as $part)
                                <li class="link">
                                    <a target="_blank" href="javascript: void(0)"><img src="{{ asset('storage/' . $part->image) }}" alt="client"></a>
                                    <div class="moving-gallery-caption">{{ $part['title_' . $lang] }}</div>
                                </li>
                            @endforeach
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-01.png" alt="client"></a>
                                <div class="moving-gallery-caption">Andre</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-02.png" alt="client"></a>
                                <div class="moving-gallery-caption">Mattey Webber</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-03.png" alt="client"></a>
                                <div class="moving-gallery-caption">ClaPat Themes</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-04.png" alt="client"></a>
                                <div class="moving-gallery-caption">California</div>
                            </li>
                        </ul>
                    </div>

                    <div class="moving-gallery fw-gallery">
                        <ul class="wrapper-gallery">
                            @foreach($partners1 as $part)
                                <li class="link">
                                    <a target="_blank" href="https://www.clapat.com/"><img src="{{ asset('storage/' . $part->image) }}" alt="client"></a>
                                    <div class="moving-gallery-caption">{{ $part['title_' . $lang] }}</div>
                                </li>
                            @endforeach
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-05.png" alt="client"></a>
                                <div class="moving-gallery-caption">Karioca Studio</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-06.png" alt="client"></a>
                                <div class="moving-gallery-caption">Tetris</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-07.png" alt="client"></a>
                                <div class="moving-gallery-caption">Harington</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://www.clapat.com/"><img src="/front/images/client-08.png" alt="client"></a>
                                <div class="moving-gallery-caption">Rare View</div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_top row_padding_bottom dark-section" data-bgcolor="#0c0c0c">

                    <ul class="team-members-list" data-fx="1">
                        @foreach($teams as $team)
                            <li class="link has-hover-image" data-img="images/team1.jpg">
                                <div class="team-member has-animation"><span>Since 2010</span><div class="primary-font-title">{{ $team->name }}</div><span>{!! $team['description_' . $lang] !!}</span></div>
                            </li>
                        @endforeach
                        <li class="link has-hover-image" data-img="images/team1.jpg">
                            <div class="team-member has-animation"><span>Since 2010</span><div class="primary-font-title">Tom Harrison</div><span>Web Designer</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team2.jpg">
                            <div class="team-member has-animation"><span>Since 2012</span><div class="primary-font-title">Ricky Romano</div><span>UX Designer</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team3.jpg">
                            <div class="team-member has-animation"><span>Since 2014</span><div class="primary-font-title">Jane Reeves</div><span>Art Director</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team4.jpg">
                            <div class="team-member has-animation"><span>Since 2016</span><div class="primary-font-title">Billy Craft</div><span>Developer</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team5.jpg">
                            <div class="team-member has-animation"><span>Since 2018</span><div class="primary-font-title">Cheryl Mezines</div><span>Support Guy</span></div>
                        </li>
                    </ul>

                </div>
                <!--/Row -->





            </div>
            <!--/Main Page Content -->

            <!-- Page Navigation -->
            <div id="page-nav">
                <div class="page-nav-wrap">
                    <div class="page-nav-caption content-full-width text-align-center height-title">
                        <div class="inner">
                            <div class="next-hero-subtitle caption-timeline"><span>CONTACT US AND LET'S BRING YOUR VISION TO LIFE</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="Say Hey" href="/contacts">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Contact</span></div>
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