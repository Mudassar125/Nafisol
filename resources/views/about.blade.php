@include('header.header')
<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="{{URL::asset('images/photos/parallax-counter.jpg')}}">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About Us</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">About Us</li>
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
                    <div class="about">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <h2>We're makers and creative</h2>
                                <p>We Are A Team Of Interns And Developers With 5+ Years Of Experience Here To Proived Our Services.</p>
                            </div>
                            <div class="col-lg-10 offset-lg-1 position-relative">
                                <div class="about-image">
                                    <div class="img-1">
                                        <img src="{{URL::asset('images/photos/about/1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img src="{{URl::asset('images/photos/about/2.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="offset-lg-2 col-lg-8">
                                <p> </p>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ***** Parallax Start ***** -->
        <div class="parallax margin-bottom-100" id="parallax-text">
            <div class="parallax-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info">
                                <p>We design and develop <span>web apps</span> that delight your users and grow your business.</p>
                                <a class="btn-white-line" href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Parallax End ***** -->

        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Our Team</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row padding-bottom-10">
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo. Sed at lorem.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <div class="user-image">
                                <img src="{{URL::asset('images/photos/team/1.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Fletch Skinner</h3>
                                <span>Product Strategist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->

                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <p>Aliquam eget convallis nunc, et porta libero. Etiam velit, lobortis ut tristique.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <div class="user-image">
                                <img src="{{URL::asset('images/photos/team/2.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Lancer Bogroli</h3>
                                <span>Visual Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->

                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <p>Curabitur tristique nec orci quis porta. Aliquam leo justo, auctor eget sapien.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <div class="user-image">
                                <img src="{{URL::asset('images/photos/team/3.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Valentine Morose</h3>
                                <span>Mobile Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->

                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <p>Nunc posuere lectus ut aliquet facilisis. Nam varius id magna et convallis.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <div class="user-image">
                                <img src="{{URL::asset('images/photos/team/4.jpg')}}" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Gilese Posture</h3>
                                <span>iOS Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
            </div>
        </div>

    </div>
    <!-- ***** Page Content End ***** -->

</section>



@include('footer.footer')
