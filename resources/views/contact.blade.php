@include('header.header')
<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="{{URL::asset('images/photos/parallax-counter.jpg')}}">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->


    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact">
                        <div class="map-wrapper">
                            <!-- ***** Google Maps Start ***** -->
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1342&amp;height=480&amp;hl=en&amp;q=Shaheen Town&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:480px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:480px;}.gmap_iframe {height:480px!important;}</style></div>
                        </div>
                        <!-- ***** Google Maps End ***** -->
                    </div>
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item">
                                    <i class="fa fa-location-arrow"></i>
                                    <div class="txt">
                                        <span>Shaheen Town Islamabad Lethrar Road<br>Infront Of Al-basit Enclave Office, Shaheen Arcade Third Floor.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item">
                                    <i class="fa fa-phone"></i>
                                    <div class="txt">
                                        <span>+92-315-5159762<br>0313-1540905</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="txt">
                                        <span><a href="mailto:info@yourbrand.com">nafisol22@gmail.com</a></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="txt">
                                        <span><a href="mailto:support@yourbrand.com">nafisol22@gmail.com</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-bottom">
                    <div class="row">
                        <!-- ***** Contact Text Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h5 class="margin-bottom-30"><b>Get in touch<b></h5>
                            <div class="contact-text">
                                <p>Get In Touch With Us For Suggestions,Helps Or Reports.</p>
                                <p>.</p>
                            </div>
                        </div>
                        <!-- ***** Contact Text End ***** -->

                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" placeholder="Name, surname">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" placeholder="E-Mail">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn-primary-line pull-right">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Contact Form End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ***** Page Content End ***** -->

</section>
@include('footer.footer')

