<php

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
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Bizning Studio</span></h1>
                        <div class="hero-subtitle caption-timeline">
                            <span>BIZ YARATILISH STUDIOSI, STRATEGIYA, BRENDING <br class="destroy"> DIZAYN VA RIVOJLANTIRISH BO'YICHA MAXSUSLAŠTIRILGANMIZ. BIZNING ISHLARIMIZ HAR DOIM <br class="destroy"> DIZAYN VA TEXNOLOGIYANING CHORRAHASIDA BO'LIB TURIADI.</span>
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
                            <div class="button-text sticky right"><span data-hover="Kashf etishga o'tish">Kashf etishga o'tish</span></div>
                        </div>
                    </div>
                    <div class="hero-footer-right">
                        <div id="info-text">Bizning Qisqa Hikoyamiz</div>
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
                                <img src="/front/images/about.jpg" alt="Rasm Sarlavhasi">
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
                            <h2 class="primary-font-title big-title has-mask-fill">E'tiroflar</h2>
                            <p>BEZMATLI DIZAYN SOVRINLARIMIZ</p>
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
                            <h2 class="big-title primary-font-title no-margins"><span class="has-mask-fill">Bizning</span><br><span class="has-mask-fill">Xizmatlarimiz</span></h2>
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
                                    <span class="link"><div>Mobil Ilova Rivojlantirish</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Jamoamiz innovatsion va imkoniyatlarga boy mobil ilovalarni yaratadi, zamonaviy foydalanuvchilarning ehtiyojlariga mos keladi.</dd>

                                <dt>
                                    <span class="link"><div>E-Tijorat Yechimlari</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Biz bizneslarga global darajada mijozlarga yetib borish imkoniyatini beruvchi muammosiz onlayn xarid qilish tajribalarini yaratamiz.</dd>

                                <dt>
                                    <span class="link"><div>Raqamli Marketing</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Bizning strategik raqamli marketing kampaniyalarimiz bizneslarga onlayn mavjudligini oshirish va o'sish maqsadlariga erishishga yordam beradi.</dd>

                                <dt>
                                    <span class="link"><div>UI/UX Dizayni</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Biz intuitiv va vizual jihatdan jozibali foydalanuvchi interfeyslari dizaynini yaratamiz, foydalanuvchi tajribasini yaxshilaydi va o'zaro ta'sirlarni soddalashtiradi.</dd>

                                <dt>
                                    <span class="link"><div>Brend Strategiyasi</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Bizning brend strateglarimiz kuchli va ta'sirli brend identifikatsiyalarini rivojlantiradi, ular maqsadli auditoriya bilan rezonansga erishadi.</dd>

                                <dt>
                                    <span class="link"><div>SEO Optimallashtirish</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Biz veb-saytlarni qidiruv tizimlarida ko'rinishini yaxshilash uchun optimallashtiramiz, organik trafikni oshiradi va onlayn ko'rinishni oshiradi.</dd>

                                <dt>
                                    <span class="link"><div>Ijro Etish Vositasi</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Bizning ijtimoiy media mutaxassislarimiz qiziqarli kontentni boshqaradi va tuzadi, auditoriya bilan ma'noli aloqalarni rivojlantiradi.</dd>

                                <dt>
                                    <span class="link"><div>Kontent Yaratish</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Bizning ijodiy jamoamiz sizning brendingiz hikoyasini aytib beradigan va auditoriyangizni jalb qiladigan ta'sirli va ta'sirli kontent yaratadi.</dd>

                                <dt>
                                    <span class="link"><div>Ma'lumotlar Tahlili</div></span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">Biz ma'lumotlarni tahlil qilib, qimmatli tushunchalarni ochib beradi va biznesning o'sishi va muvaffaqiyati uchun ma'lumotlarga asoslangan qarorlar qabul qilishga yo'naltiradi.</dd>
                            </dl>
                        </div>
                    </div>

                    <hr class="destroy">

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_top row_padding_left row_padding_right text-align-center dark-section" data-bgcolor="#0c0c0c">

                    <h2 class="big-title primary-font-title"><span class="has-mask-fill">Hamkorlar</span></h2>
                    <p>Biz mijozlarimiz uchun ajoyib va esda qolarli <br class="destroy"> loyihalarni ishlab chiqamiz.</p>
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
                                <div class="team-member has-animation"><span>2010 yildan beri</span><div class="primary-font-title">{{ $team->name }}</div><span>{!! $team['description_' . $lang] !!}</span></div>
                            </li>
                        @endforeach
                        <li class="link has-hover-image" data-img="images/team1.jpg">
                            <div class="team-member has-animation"><span>2010 yildan beri</span><div class="primary-font-title">Tom Harrison</div><span>Web Dizayner</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team2.jpg">
                            <div class="team-member has-animation"><span>2012 yildan beri</span><div class="primary-font-title">Ricky Romano</div><span>UX Dizayner</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team3.jpg">
                            <div class="team-member has-animation"><span>2014 yildan beri</span><div class="primary-font-title">Jane Reeves</div><span>San'at Direktori</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team4.jpg">
                            <div class="team-member has-animation"><span>2016 yildan beri</span><div class="primary-font-title">Billy Craft</div><span>Dasturchi</span></div>
                        </li>
                        <li class="link has-hover-image" data-img="images/team5.jpg">
                            <div class="team-member has-animation"><span>2018 yildan beri</span><div class="primary-font-title">Cheryl Mezines</div><span>Qo'llab-quvvatlash</span></div>
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
                            <div class="next-hero-subtitle caption-timeline"><span>Biz bilan bog'laning va tasavvuringizni hayotga o'tkazing</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="Bog'lanish" href="/contacts">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Kontakt</span></div>
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
