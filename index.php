<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"features1", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "icon",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "features1",
		"ALT_MODE" => "Y"
	),
	false
);?>

    <!-- :: About Us -->
    <section class="about">
        <div class="container">       
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title">
                            <h2>About Us</h2>
                            <h3>Mission of our company to give best service to customer.</h3>
                            <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                        </div>
                        <ul>
                            <li><i class="fas fa-arrow-right"></i> Support -customer support</li>
                            <li><i class="fas fa-arrow-right"></i> Engage - marketing automation</li>
                            <li><i class="fas fa-arrow-right"></i> Acquire live chat enables sales</li>
                            <li><i class="fas fa-arrow-right"></i> Learn from customer feedback</li>
                            <li><i class="fas fa-arrow-right"></i> Support -customer support</li>
                        </ul>
                        <a href="01_about.html" class="btn-1 btn-3">See More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row img-box">
                        <div class="col">
                            <div class="one">
                                <img class="img-fluid" src="assets/images/about/01_about.jpg" alt="01 About">
                            </div>
                        </div>
                        <div class="col">
                            <div class="two">
                                <img class="img-fluid" src="assets/images/about/02_about.jpg" alt="02 About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Services -->
    <section class="services py-100-70">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Our Services</h2>
                        <h3>We creating solutions for your organization.</h3>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-presentation"></i>
                        <h4>Estate Planning</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-cheque"></i>
                        <h4>Insurance &amp; Retirement</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-safebox"></i>
                        <h4>Finance &amp; Restructuring</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-graphics"></i>
                        <h4>Strategy &amp; Planning</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-tax"></i>
                        <h4>Taxes &amp; Efficience</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <i class="flaticon-search"></i>
                        <h4>Audit &amp; Evaluation</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_services.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Provide -->
    <section class="provide">
        <div class="bg-section">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Who We Are</h2>
                        <h3>We provide experts to create a great value for your business.</h3>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="provide-item">
                        <i class="flaticon-strategy"></i>
                        <div class="content">
                            <h4>Marketing Strategy</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="provide-item">
                        <i class="flaticon-business-report"></i>
                        <div class="content">
                            <h4>Decision &amp; Risk Analytic</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="provide-item">
                        <i class="flaticon-bag"></i>
                        <div class="content">
                            <h4>Organization &amp; Decision</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="provide-item">
                        <i class="flaticon-bank"></i>
                        <div class="content">
                            <h4>Banking &amp; Capital Market</h4>
                            <p>Lorem Ipsum simply dummy text of the printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- :: Video Presentation -->
                    <div class="video-presentation">
                        <div class="overlay"></div>
                        <div class="presentation-box">
                            <a href="https://youtu.be/TKnufs85hXk" class="pulse" data-lity>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Statistic -->
    <div class="statistic">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="statistic-item">
                        <i class="flaticon-finance"></i>
                        <div class="content">
                            <div class="counter">7.165</div>
                            <div class="counter-name">Projects Completed</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="statistic-item">
                        <i class="flaticon-line-graphic"></i>
                        <div class="content">
                            <div class="counter">2.575</div>
                            <div class="counter-name">Successful Investment</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="statistic-item">
                        <i class="flaticon-jar"></i>
                        <div class="content">
                            <div class="counter">1.706</div>
                            <div class="counter-name">Business Growth</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="statistic-item">
                        <i class="flaticon-summit"></i>
                        <div class="content">
                            <div class="counter">40</div>
                            <div class="counter-name">Year Of Experiance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- :: Case Study -->
    <section class="case-study py-100">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Case Study</h2>
                        <h3>Let's Have a Look All Our Latest Projects.</h3>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                    </div>
                </div>
            </div>
            <div class="owl-case-study owl-carousel owl-theme">
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/01_case-study.jpg" alt="01 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Business Tips</a></li>
                            <li>,</li>
                            <li><a href="#">Consulting</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Banking Consulting</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/02_case-study.jpg" alt="02 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Finance</a></li>
                            <li>,</li>
                            <li><a href="#">Leasing</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Business Development</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/03_case-study.jpg" alt="03 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Business Tips</a></li>
                            <li>,</li>
                            <li><a href="#">Investing</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Merger &amp; Acquistion</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/04_case-study.jpg" alt="04 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Business Tips</a></li>
                            <li>,</li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Brand Strategy</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/05_case-study.jpg" alt="05 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Business Tips</a></li>
                            <li>,</li>
                            <li><a href="#">Investing</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Investment Planning</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
                <div class="case-item">
                    <img class="img-fluid gallery-item-img" src="assets/images/case-study/06_case-study.jpg" alt="06 Case Study">
                    <div class="text-box d-flex align-content-between flex-wrap">
                        <ul class="tags">
                            <li><a href="#">Marketing</a></li>
                            <li>,</li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                        <div class="content-text">
                            <h4><a href="01_single-case-studies.html">Financial Planning</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                            <a href="01_single-case-studies.html" class="more"><span class="fas fa-arrow-right"></span> read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Team -->
    <section class="team py-100-70">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Our Team Member</h2>
                        <h3>Discover Our Team And Experts.</h3>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="team-item">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/team/01_team.jpg" alt="01 Team">
                        </div>
                        <div class="text-box text-center">
                            <h5>James Wane</h5>
                            <span>Marketing</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-item">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/team/02_team.jpg" alt="02 Team">
                        </div>
                        <div class="text-box text-center">
                            <h5>Marko Smith</h5>
                            <span>Consultant</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-item">
                        <div class="img-box">
                            <img class="img-fluid" src="assets/images/team/03_team.jpg" alt="03 Team">
                        </div>
                        <div class="text-box text-center">
                            <h5>John Tommy</h5>
                            <span>Cheif Officer</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- :: FAQs And Quote -->
    <section class="faq-quote">
        <div class="bg-section">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq" id="faqSite">
                        <div class="sec-title">
                            <h2>FAQs</h2>
                            <h3>We help you to grow your business Exponentially.</h3>
                            <p>Consulto Specially Designed For Consulting And Finance Industry, Financial Advisors, Accountants, Consultants Or Other Finance And Consulting Related Businesses.</p>
                        </div>
                        <div class="faq-box">
                            <h5 class="question-header" id="faq_01">
                                <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                                    How can i find a job ?
                                    <i class="fas fa-angle-right"></i>
                                </button>
                            </h5>
                            <div id="faqOne" class="answer collapse show" aria-labelledby="faq_01" data-parent="#faqSite">
                                <p class="about-text"><b>Consulto Specially Designed For Consulting And Finance Industry, Financial Advisors, Accountants, Consultants Or Other Finance And Consulting Related Businesses.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="faq-box">
                            <h5 class="question-header" id="faq_02">
                                <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                    Where can i find out about problem ?
                                    <i class="fas fa-angle-right"></i>
                                </button>
                            </h5>
                            <div id="faqTwo" class="answer collapse" aria-labelledby="faq_02" data-parent="#faqSite">
                                <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="faq-box">
                            <h5 class="question-header" id="faq_03">
                                <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    How can use the product ?
                                    <i class="fas fa-angle-right"></i>
                                </button>
                            </h5>
                            <div id="faqThree" class="answer collapse" aria-labelledby="faq_03" data-parent="#faqSite">
                                <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote">
                        <div class="sec-title">
                            <h3>Get Every Updates</h3>
                        </div>
                        <div class="quote-item">
                            <label>Your Full Name</label>
                            <input type="text" name="name" placeholder="Enter Your Full Name">
                            <i class="fas fa-user-alt"></i>
                        </div>
                        <div class="quote-item">
                            <label>Your Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email Address">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="quote-item">
                            <label>Your Subject</label>
                            <input type="text" name="subject" placeholder="Enter Your Subject">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="quote-item">
                            <label>Your Message</label>
                            <textarea placeholder="Enter Your Message"></textarea>
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="quote-item">
                            <a href="#" class="btn-1">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- :: Pricing -->
            <div class="pricing">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="item-top">
                                <h4>Starter Plan</h4>
                                <div class="price-number">
                                    <h5>140</h5>
                                    <span>/ per job</span>
                                </div>
                                <p>3&#37; Credit Card Fees Or 1.5&#37; Bank Transfer Fees.</p>
                            </div>
                            <div class="item-last">
                                <ul>
                                    <li><i class="fas fa-arrow-right"></i> Five Brand Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Five Keyword Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Basic Quota , PDF Reports</li>
                                    <li><i class="fas fa-arrow-right"></i> Full Social Profiles</li>
                                    <li><i class="fas fa-arrow-right"></i> 500 Search Results</li>
                                </ul>
                                <a href="#" class="btn-1">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item active">
                            <div class="item-top">
                                <h4>Basic Plan</h4>
                                <div class="price-number">
                                    <h5>180</h5>
                                    <span>/ per job</span>
                                </div>
                                <p>3&#37; Credit Card Fees Or 1.5&#37; Bank Transfer Fees.</p>
                            </div>
                            <div class="item-last">
                                <ul>
                                    <li><i class="fas fa-arrow-right"></i> Five Brand Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Five Keyword Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Basic Quota , PDF Reports</li>
                                    <li><i class="fas fa-arrow-right"></i> Full Social Profiles</li>
                                    <li><i class="fas fa-arrow-right"></i> 500 Search Results</li>
                                </ul>
                                <a href="#" class="btn-1">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="item-top">
                                <h4>Advanced Plan</h4>
                                <div class="price-number">
                                    <h5>220</h5>
                                    <span>/ per job</span>
                                </div>
                                <p>3&#37; Credit Card Fees Or 1.5&#37; Bank Transfer Fees.</p>
                            </div>
                            <div class="item-last">
                                <ul>
                                    <li><i class="fas fa-arrow-right"></i> Five Brand Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Five Keyword Monitors</li>
                                    <li><i class="fas fa-arrow-right"></i> Basic Quota , PDF Reports</li>
                                    <li><i class="fas fa-arrow-right"></i> Full Social Profiles</li>
                                    <li><i class="fas fa-arrow-right"></i> 500 Search Results</li>
                                </ul>
                                <a href="#" class="btn-1">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Testimonial -->
    <section class="testimonial py-100-70">
        <div class="container">
            <div class="icon-quote">
                <i class="flaticon-quote"></i>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="owl-testimonial owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <div class="text-box">Highly recommended &amp; a great experience. The process was simple and easy to understand. Trading was straight forward, the entire process was super smooth!</div>
                            <div class="item-name">
                                <img class="img-fluid" src="assets/images/testimonial/01_testimonial.jpg" alt="01 Testimonial">
                                <h5>Anwar Ramadan</h5>
                                <span>AR-Coder Agency</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="text-box">Highly recommended &amp; a great experience. The process was simple and easy to understand. Trading was straight forward, the entire process was super smooth!</div>
                            <div class="item-name">
                                <img class="img-fluid" src="assets/images/testimonial/02_testimonial.jpg" alt="02 Testimonial">
                                <h5>Osama Bakri</h5>
                                <span>NiftyTheme Agency</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="text-box">Highly recommended &amp; a great experience. The process was simple and easy to understand. Trading was straight forward, the entire process was super smooth!</div>
                            <div class="item-name">
                                <img class="img-fluid" src="assets/images/testimonial/03_testimonial.jpg" alt="03 Testimonial">
                                <h5>Mohamed Said</h5>
                                <span>AR-Coder Agency</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- :: Map -->
    <div class="map">
        <div class="map-box">
            <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
        </div>
    </div>

    <!-- :: Blog -->
    <section class="blog py-100-70">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Our Blog</h2>
                        <h3>Get Every Single Updates From Here.</h3>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="img-box">
                            <a href="02_blog.html" class="open-post">
                                <img class="img-fluid" src="assets/images/blog/01_blog.jpg" alt="01 Blog">
                            </a>
                            <ul>
                                <li><a href="#">Business Tips</a></li>
                                <li><a href="#">,</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <div class="text-box">
                            <span class="blog-date">Jan 20, 2019</span>
                            <a href="02_blog.html" class="title-blog">
                                <h5>Role of Finance in a Business From Bronto</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                            <a href="02_blog.html" class="link"><span class="fas fa-arrow-right"></span> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="img-box">
                            <a href="02_blog.html" class="open-post">
                                <img class="img-fluid" src="assets/images/blog/02_blog.jpg" alt="02 Blog">
                            </a>
                            <ul>
                                <li><a href="#">Financial</a></li>
                                <li><a href="#">,</a></li>
                                <li><a href="#">Business Tips</a></li>
                            </ul>
                        </div>
                        <div class="text-box">
                            <span class="blog-date">Jan 25, 2019</span>
                            <a href="02_blog.html" class="title-blog">
                                <h5>How does your household spend compare to the UK?</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                            <a href="02_blog.html" class="link"><span class="fas fa-arrow-right"></span> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="img-box">
                            <a href="02_blog.html" class="open-post">
                                <img class="img-fluid" src="assets/images/blog/03_blog.jpg" alt="03 Blog">
                            </a>
                            <ul>
                                <li><a href="#">Investment tips</a></li>
                                <li><a href="#">,</a></li>
                                <li><a href="#">Consulting</a></li>
                            </ul>
                        </div>
                        <div class="text-box">
                            <span class="blog-date">Jan 30, 2019</span>
                            <a href="02_blog.html" class="title-blog">
                                <h5>Four ways to cheer yourself up on Blue Monday!</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                            <a href="02_blog.html" class="link"><span class="fas fa-arrow-right"></span> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>