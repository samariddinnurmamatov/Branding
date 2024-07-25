<x-layouts.main>
    <div id="main">

        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Brief</span></h1>
                        <div class="hero-subtitle caption-timeline">
                            <span>FILL OUT THE FORM BELOW TO PROVIDE US WITH THE DETAILS OF YOUR PROJECT.</span>
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
                <div class="content-row row_padding_top row_padding_bottom dark-section text-align-center" data-bgcolor="#0c0c0c">
                    <!-- Brief Formular -->
                    <div id="brief-formular">

                        <div id="message"></div>

                        <form method="post" action="" name="briefform" id="briefform">
                            @csrf
                            <div class="form-group">
                                <textarea name="project_name" id="project_name" cols="40" rows="2" placeholder="Project Name" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="company_name" id="company_name" cols="40" rows="2" placeholder="Company Name" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="email" id="email" cols="40" rows="2" placeholder="Your Email" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="phone" id="phone" cols="40" rows="2" placeholder="Your Phone" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="budget" id="budget" cols="40" rows="2" placeholder="Estimated Budget" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="deadline" id="deadline" cols="40" rows="2" placeholder="Project Deadline" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="industry" id="industry" cols="40" rows="2" placeholder="Industry" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="description" cols="40" rows="4" placeholder="Project Description" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="objectives" id="objectives" cols="40" rows="4" placeholder="Project Objectives" required></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="form-group">
                                <textarea name="competitors" id="competitors" cols="40" rows="4" placeholder="Competitors" required></textarea><label class="input_label slow"></label>
                            </div>

                            <div class="button-box">
                                <div class="clapat-button-wrap parallax-wrap link">
                                    <div class="clapat-button parallax-element">
                                        <div class="button-border rounded outline"><input type="submit" class="send_message" id="submit" value="Send Brief" /></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--/Brief Formular -->
                </div>
                <!--/Row -->

            </div>
            <!--/Main Page Content -->

        </div>
        <!--/Main Content -->

    </div>
</x-layouts.main>
