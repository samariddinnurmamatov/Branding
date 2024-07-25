<x-layouts.main>
    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/2.0.0/toastify.min.css">

    <!-- Toastify JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/2.0.0/toastify.min.js"></script>

    <!-- Main -->
    <div id="main">

        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Aloqa</span></h1>
                        <div class="hero-subtitle caption-timeline">
                            <span>Biz ijodiy studiya bo'lib, strategiya, brending, dizayn <br class="destroy"> va dasturlash sohalarida ixtisoslashganmiz. Bizning ishimiz <br class="destroy"> doimo dizayn va texnologiya kesishgan joyda.</span>
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
                            <div class="button-text sticky right"><span data-hover="Tadqiq etish uchun pastga aylantiring">Tadqiq etish uchun pastga aylantiring</span></div>
                        </div>
                    </div>
                    <div class="hero-footer-right">
                        <div id="info-text">Tavsiya etilgan loyihalar</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

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
                    <h2 class="big-title has-mask-fill primary-font-title">BOG'LANISH</h2>
                    <hr>
                    <hr>
                    <!-- Contact Formular -->
                    <div id="contact-formular">
                        <div id="message"></div>
                        <form method="post" action="{{ route('customer.contact') }}" name="contactform">
                            @csrf
                            <div class="name-box">
                                <input name="full_name" type="text" id="name" size="30" value="" placeholder="Ismingiz nima?"><label class="input_label"></label>
                            </div>
                            <div class="email-box">
                                <input name="phone_number" id="phone_number" class="form-control" type="text" placeholder="Telefon raqamingizni kiriting" required>
                            </div>
                            <div class="message-box">
                                <textarea name="description" cols="40" rows="4" id="comments" placeholder="Loyihangiz haqida bizga xabar bering"></textarea><label class="input_label slow"></label>
                            </div>
                            <div class="button-box">
                                <div class="clapat-button-wrap parallax-wrap link">
                                    <div class="clapat-button parallax-element">
                                        <div class="button-border rounded outline "><input type="submit" class="send_message" id="submit" value="Xabarni yuborish" /></div>
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
                    <div class="one_third has-animation" data-delay="100">
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
                    <div class="one_third has-animation" data-delay="200">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins">{{ $con->address }}</h6>
                                <p>Manzil</p>
                            </div>
                        </div>
                    </div>
                    <div class=" one_third last has-animation" data-delay="300">
                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins"><a href="tel:{{ $con->phone }}" class="no-margins">{{ $con->phone }}</a></h6>
                                <p>Telefon</p>
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
                            <div class="next-hero-subtitle caption-timeline"><span>Bizning ishlarimizdan ko'proq bilmoqchimisiz?</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="O'TISH" href="/portfolio">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Portfellar</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Page Navigation -->

        </div>
        <!--/Main Content -->

    </div>
    <script>
		document.addEventListener('DOMContentLoaded', (event) => {
			const phoneInput = document.getElementById('phone_number');
			const pattern = /^\+998[- ]?(90|91|93|94|95|98|99|33|97|71)[- ]?(\d{3})[- ]?(\d{2})[- ]?(\d{2})$/;

			// Set initial value to +998
			phoneInput.value = '+998 ';

			phoneInput.addEventListener('input', (e) => {
				let value = e.target.value;

				// Ensure the value always starts with +998
				if (!value.startsWith('+998 ')) {
					value = '+998 ' + value.replace(/^\+998\s*/, '');
				}

				// Remove invalid characters
				value = value.replace(/[^\d+]/g, '');

				// Format value according to the pattern
				let match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
				if (match) {
					let formattedValue = '+998 ';
					if (match[1]) formattedValue += match[1] + ' ';
					if (match[2]) formattedValue += match[2] + (match[2].length === 3 ? ' ' : '');
					if (match[3]) formattedValue += match[3] + (match[3].length === 2 ? ' ' : '');
					if (match[4]) formattedValue += match[4];
					value = formattedValue;
				}

				e.target.value = value.trim();
			});

			phoneInput.addEventListener('keydown', (e) => {
				const value = e.target.value;
				// Allow user to clear the input completely
				if (e.key === 'Backspace' && value.length <= 5) {
					phoneInput.value = ''; // Clear the input field
				}
			});

			document.getElementById('phone-form').addEventListener('submit', (e) => {
				if (!pattern.test(phoneInput.value)) {
					e.preventDefault();
					alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
				}
			});
		});
	</script>
    <!--/Main -->
</x-layouts.main>