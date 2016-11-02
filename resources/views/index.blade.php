<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cyrus Studio</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('animate/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('animate/set.css') }}"/>

    <!-- gallery -->
    <link rel="stylesheet" href="{{ URL::asset('gallery/blueimp-gallery.min.css') }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/x-icon">


    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home" style="font-size: 30px">國軍人才招募中心
                    </a>
                    <!-- #Logo Ends -->

                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active">
                            <a href="#home">Home</a>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->


<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{ URL::asset('images/slide/2.jpg') }}" alt="banner">
                <div class="carousel-caption">
                    <div class="caption-wrapper">
                        <div class="caption-info">
                            <h1 class="animated bounceInLeft" style="font-size: 100px;">國軍人才招募中心</h1>
                            <p class="animated bounceInRight" style="font-size: 40px;">開啟人生，無限可能</p>
                            <div class="scroll animated fadeInUp">
                                <a href="#works" class="btn btn-default">
                                    <i class="fa fa-flask"></i>
                                    GETTING START
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #Item 1 -->

            <!-- Item 1 -->
            <div class="item">
                <img src="{{ URL::asset('images/slide/1.jpg') }}" alt="banner">
                <div class="carousel-caption">
                    <div class="caption-wrapper">
                        <div class="caption-info">
                            <h1 class="animated bounceInLeft" style="font-size: 100px;">國軍人才招募中心</h1>
                            <p class="animated bounceInRight" style="font-size: 40px;">加入我們，是您最好的選擇</p>
                            <div class="scroll animated fadeInUp">
                                <a href="#works" class="btn btn-default">
                                    <i class="fa fa-flask"></i>GETTING START
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #Item 1 -->
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i style="display: block;margin-top: 350px; font-size: 100px;" class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i style="display: block;margin-top: 350px; font-size: 100px;" class="fa fa-angle-right"></i>
        </a>
    </div>
    <!-- #Slider Ends -->
</div>


<div id="choice" class="container spacer ">
    <div class="row">
        <div class="col-lg-12 wowload fadeInLeft">
            <div class="process">
                <h3 class="text-center wowload fadeInUp">快速選擇</h3>
                <ul class="row text-center list-inline  wowload bounceInUp">
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span style="font-size: 25px">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i><b>升學</b>
                        </span>
                    </li>
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span style="font-size: 25px">
                            <i class="fa fa-user" aria-hidden="true"></i><b>就業</b>
                        </span>
                    </li>
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span style="font-size: 25px">
                            <i class="fa fa-hospital-o" aria-hidden="true"></i><b>體檢</b>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{URL::asset('images/index/soldier.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="caption-wrapper">
                        <div class="caption-info">

                            <div style="width: 499px;
                            height: 500px;
                            background-color: rgba(255,255,255,0.6);
                            display: inline-block;
                            float: left;
                            margin-left: 200px;">
                            <h1 class="animated bounceInLeft" style="font-size: 50px; color: #999999;">志願役士兵</h1>
                                <hr style="border: 1px solid #999999; width: 80%;" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>


<!-- Cirlce Starts -->
<div id="about" class="container spacer about">
    <h2 class="text-center wowload fadeInUp">Creative digital agency based on London</h2>
    <div class="row">
        <div class="col-sm-6 wowload fadeInLeft">
            <h4>
                <i class="fa fa-paint-brush">
                </i> Design
            </h4>
            <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs,
                lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for
                sleek and sophisticated solutions for mobile, websites and software designs.</p>


        </div>
        <div class="col-sm-6 wowload fadeInRight">
            <h4><i class="fa fa-code"></i>
                Frontend & Backend Development
            </h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="works" class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/1.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Adidas</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/1.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/2.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Jeans</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/2.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/3.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Metal</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/3.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/4.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/4.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/5.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Typers</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/5.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/6.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Marco</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/6.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/7.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Chinese</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/7.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/8.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Dicrap</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/8.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>


</div>
<!-- works -->


<div id="partners" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
    <div class="clearfix">
        <div class="col-sm-6 partners  wowload fadeInLeft">
            <img src="{{ URL::asset('images/partners/1.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/2.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/3.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/4.jpg') }}" alt="partners">
        </div>
        <div class="col-sm-6">


            <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight"
                 data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. </p>
                            <span>Angel Smith - <b>eshop Canada</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful.</p>
                            <span>John Partic - <b>Crazy Pixel</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg"
                                                                         width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue.</p>
                            <span>Harris David - <b>Jet London</b></span>
                        </div>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
            </div>


        </div>
    </div>


    <!-- team -->
    <h3 class="text-center  wowload fadeInUp">Our team</h3>
    <p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
    <div class="row grid team  wowload fadeInUpBig">
        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/8.jpg" alt="img01" class="img-responsive"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/10.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/12.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/17.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>


    </div>
    <!-- team -->

</div>


<!-- About Starts -->
<div class="highlight-info">
    <div class="overlay spacer">
        <div class="container">
            <div class="row text-center  wowload fadeInDownBig">
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-smile-o  fa-5x"></i><h4>上線人數 <br> 24</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-rocket  fa-5x"></i><h4>瀏覽人數<br> 743</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-cloud-download  fa-5x"></i><h4>報名人數 <br> 414</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-map-marker fa-5x"></i><h4>體檢人數 <br> 1144</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Ends -->


<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Get in touch to start your project</h2>
        <div class="row wowload fadeInLeftBig">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Company">
                <textarea rows="5" placeholder="Message"></textarea>
                <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
            </div>
        </div>


    </div>
</div>
<!--Contact Ends-->


<!-- Footer Starts -->
<div class="footer text-center spacer">
    <p class="wowload flipInX"><a href="#">
            <i class="fa fa-facebook fa-2x"></i></a> <a href="#">
            <i class="fa fa-dribbble fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i>
        </a>
        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a></p>
    Copyright 2014 Cyrus Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>


<!-- jquery -->
<script src="{{ URL::asset('jquery.js') }}"></script>

<!-- wow script -->
<script src="{{ URL::asset('wow/wow.min.js') }}"></script>

<!-- boostrap -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="{{ URL::asset('mobile/touchSwipe.min.js') }}"></script>
<script src="{{ URL::asset('respond/respond.js') }}"></script>

<!-- gallery -->
<script src="{{ URL::asset('gallery/jquery.blueimp-gallery.min.js') }}"></script>

<!-- custom script -->
<script src="{{ URL::asset('script.js') }}"></script>

</body>
</html>