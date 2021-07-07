@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Hunter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    
</head>
<div class="advisor-page insurance-page">
    <header>
        <div class="bg-pink ">
            <div class="container">
                <div class="row header-top">
                    <div class="col-4 pl-0">
                        <div class="logo">
                            <img src="/images/logo.png">
                        </div>
                        <div class="mobile-logo">
                            <img src="/images/mobile-logo.png">
                        </div>
                    </div>
                    
                    <div class="col-8 pd-0 d-flex flex-center flex-end">
                        <div class="top-menu">
                            <ul class="d-flex">
                                <li><a href="/pages/{{ 'our-insurance' }}">Insurance</a></li>
                                <li><a href="/pages/{{ 'how-it-works' }}">How it works</a></li>
                                <li><a href="#">Resources</a></li>
                                <li class="hunt-li" ><button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="/forum">Start Your Hunt</a></button></li>
                            </ul>
                            <div class="mobile-menu">
                                <img src="/images/menu-icon.png">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom insurance-bg">
            <div class=" insurance-top  bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-12 flex-column d-flex flex-center col-sm-12">
                            <div class="row">
                                <div class="col-12 d-flex flex-center">
                                    <h1 class="p-3 pl-0 lts-4 color-red font-600 pt-3">Our Insurance</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex hunter-top-text flex-center">
                                    <p class="text-center col-12">At "MyHUNTER" we specialize in all kinds of insurance coverage.</br> We offer Auto Home, xx, xx, xx, xx, and life insurance</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex hunter-top-text flex-center">
                                    <p class="text-center col-12">Offering multiple lines of insurance is great for you because</br>when you bundle your policies togather</br><b><i>You Save!</i></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="dedicated-section dedicated-insurance bg-blue p-5 pt-5">
            <div class="container center-text">
                <div class="row d-flex flex-center">
                    <div class="col-12 d-flex mobile-h4 pt-5 flex-center">
                        <h4 class="color-red font-600 upper-case mobile-h4 lts-4">dedicated insurance marketplace</h4>                    
                    </div>
                    
                    <div class="col-12 d-flex pt-2 flex-center">
                        <h4 class="p-3 pl-0 lts-4 color-red color-red font-600">Hunting Insurance For Your Needs</h4>
                    </div>
                    <div class="col-7 center-text d-flex pt-2 flex-center">
                        <p class="work-dedicated insurance-text-desktop color-grey">We are the Best Online Insurance Hunters in Canada. We have over<i><b>"10 of Canada's Top Insurance Providers"</b></i> working with us to help you hunt down the best coverage at the best rate. Providing the best hunting within the insurance game.</span></p>
                        <p class="work-dedicated insurance-text-mobile color-grey">We are the Best Online<br> Insurance Hunters in Canada.<br> We have over "10 of Canada's<br> Top Insurance Providers"</br> working with us to help you<br> hunt down the best coverage<br> at the best rate. Providing the<br> best hunting within the<br> insurance game.</p>
                    </div>
                </div>
                
            </div>
            <div class="container pt-69 cards-parent center-text">
                <div class="row card-section-bottom d-flex flex-center">
                    <div class="card ">
                        <img class="card-img-top" src="/images/card-image-1.svg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Auto ins.</h5>
                          <p class="card-text">We will give you multiple price options from carriers to make sure you get a fair price..</p>
                        </div>
                        <div class="card-bottom active">
                            <a href="">Get a Qoute Now!</a>
                        </div>
                    </div>
                    <div class="card ">
                        <img class="card-img-top" src="/images/card-image-2.svg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Home Ins.</h5>
                          <p class="card-text">Your Hunter Advisor will help you every step of the way, so don't worry you're in good hands.</p>
                        </div>
                        <div class="card-bottom">
                            <a href="">Get a Qoute Now!</a>
                        </div>
                    </div>
                    <div class="card ">
                        <img class="card-img-top last-img" src="/images/card-image-3.svg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Business Ins.</h5>
                          <p class="card-text">Business insurance is important, you need to be protected and we are here to help you.</p>
                        </div>
                        <div class="card-bottom ">
                            <a href="">Get a Qoute Now!</a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        <div class="bg-pink hunter-insurance pd-100">
            <div class="container  cards-parent center-text">
                <div class="row inner">
                    
    
                    <div class="col-md-12 col-lg-6 col-sm-12  insurance-text align-left">
                        <h4 class="lts-4 bold upper-case m-0 color-pink">At "MyHunter" we are in the Insurance hunt together! Give us a call..</h4>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="meet-hunter-li insurance-li">
                                        <li class="drop-down">Get better, faster and friendlier insurance.</li>
                                        <li>Protect what matters most.</li>
                                        <li class="drop-down">Insurance that grows with you.</li>
                                        <li>Get insured in just few minutes.</li>
                                    </ul>
                                       
                                </div>

                            </div>
                        
    
                        <div class="header-block-btn d-flex">
                            <button type="button" class="btn btn-warning bg-yellow p-2 wd-40"><a class="text-dark  font-600" href="#">Start To Get Your Quote</a></button>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 col-sm-12  insurance-img">
                        <img class="desktop-image" src="/images/we-are-in-the-insurance-hunt-together-illustration.svg">
                        <img class="mobile-image" src="/images/we-insurance.png">
                        
                    </div> 
                </div>
            </div>
        </div>

        <div class="pt-5 bg-grey">
            <div class="container  center-text">
                <div class="row d-flex flex-center">
                    <div class="col-12 d-flex  flex-center">
                        <h4 class=" font-600 upper-case m-0 color-light-black lts-4">What 'MyHunter' Clients Say</h4>                    
                    </div>
                    
                </div>
                
            </div>
    
            <div class="container  pt-60 testimonail-parent cards-parent center-text">
                <div class="row page-size card-section-bottom testimonials-section d-flex flex-center">
                    <ul class="owl-carousel owl-carousel-two">
                        <li class="testimonials-card card ">
                            <div class="card-body">
                                <h5 class="card-title">Angelina Mac.</h5>
                                <p class="card-text">"Had a great experience in getting insurance through you. Would gladly recommend you to friends and family! You were very fast an efficient."</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">                        
                            <div class="card-body">
                                <h5 class="card-title">Fernandes Mark</h5>
                                <p class="card-text">"Thank you for helping me at a particularly difficult time in my life. I would not be able to manage all the details of getting my car back on the road without your input"</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Mary J.</h5>
                                <p class="card-text">"I had a positive experience and very good customer service. Quick and easy. I will highly recommend to those who does not experience them yet"</p>
                            </div>
                        </li>
                        <li class="testimonials-card card "> 
                            <div class="card-body">
                                <h5 class="card-title">Angelina Mac.</h5>
                                <p class="card-text">"Had a great experience in getting insurance through you. Would gladly recommend you to friends and family! You were very fast an efficient."</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Fernandes Mark</h5>
                                <p class="card-text">"Thank you for helping me at a particularly difficult time in my life. I would not be able to manage all the details of getting my car back on the road without your input"</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Mary J.</h5>
                                <p class="card-text">"I had a positive experience and very good customer service. Quick and easy. I will highly recommend to those who does not experience them yet"</p>
                            </div>
                        </li>
                        <li class="testimonials-card card ">
                            <div class="card-body">
                                <h5 class="card-title">Angelina Mac.</h5>
                                <p class="card-text">"Had a great experience in getting insurance through you. Would gladly recommend you to friends and family! You were very fast an efficient."</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Fernandes Mark</h5>
                                <p class="card-text">"Thank you for helping me at a particularly difficult time in my life. I would not be able to manage all the details of getting my car back on the road without your input"</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Mary J.</h5>
                                <p class="card-text">"I had a positive experience and very good customer service. Quick and easy. I will highly recommend to those who does not experience them yet"</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12  pb-37 dots">
                    <img src="/images/dots.png">
                </div>
            </div>
        </div>


        <div class="bg-blue hunter-map pd-100">
            <div class="container  center-text">
                <div class="row inner map-inner">

                    <div class="col-md-12 col-lg-6 col-sm-12  insurance-img">
                        <img src="/images/map.png">
                    </div> 
                    
                    <div class="col-md-12 col-lg-6 col-sm-12  map-text insurance-text align-left">
                        <h4 class="lts-4 bold  m-0 color-pink">We have you Covered!</h4>
                            <div class="row">
                                <div class="col-12 hunter-map-text">
                                   <p>
                                    What keeps you awake at night,</br> indigestion boiling up your esophagus,</br> eyes open, staring at the ceiling?
                                    </p> 
                                    <p>
                                        Sometimes you just want to talk to</br> someone over the phone. That’s why we</br> have expert hunters on the line for you</br> (in all over Ontario) who can answer</br> your questions.
                                    </p>
                                </div>
                            </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <div class="pt-5 bg-grey hunter-clients">
            <div class="container  center-text">
                
                
            
            
                <!-- <div class="row">
                    <div class="col-6">

                        <div class="card w-100 h-490" >
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>

                    </div>
                    <div class="col-6">
                        <div class="col-12 pd-0">

                            <div class="card pd-0 w-100">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
    

                        </div>
                        <div class="row">
                            <div class="col-6">

                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-6">

                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div> -->
                
                <section class="featured-articles-section">	
		<div class="wrapper">
			<div class="row d-flex flex-center">
                    <div class="col-12 d-flex  flex-center">
                        <h4 class=" font-600 upper-case m-0 color-light-black lts-4">What 'MyHunter' Clients Say</h4>                    
                    </div>
                    
                </div>
				<div class="cards-container">
					<div class="article-card card-large" style="background-image: url('/images/blog-post-1.png');">
						<div class="article-card-content">
							<!--<span class="category">Category</span>-->
							<!--<h4>Article Title</h4>-->
							<p>When should I update my Car</br> Insurance Policy </p>
						</div>
					</div>
					<div class="article-card card-small custom" style="background-image: url('/images/blog-post-2.png');">
						<div class="article-card-content">
							
							<p>Mistakes to avoid when buying Home Insurance</p>
						</div>
					</div>
					<div class="article-card article-card-alt card-small" style="background-image: url('/images/blog-post-3.png');">
						<div class="article-card-content">
							<p>Insurance terms</br> explained</p>
						</div>
					</div>
						<div class="article-card article-card-alt card-small" style="background-image: url('/images/blog-post-4.png');">
						<div class="article-card-content">
							<p>Advantages of</br> using a dashcam</p>
						</div>
					</div>
					
					
					<!--
					****Example using .article-group class to place small cards on left***
					
					<div class="article-group">
						<div class="article-card card-small">...</div>
						<div class="article-card card-small">...</div>
					</div>
					<div class="article-card card-large">...</div>
					
					-->
					
					<br class="clear">
				</div>
		</div>
	</section>

            </div>

                
           
        </div>
        
        
        
        
        
    <footer class="bg-blue">
    <div class="container">
        <div class="inner-container">
            <div class="row">
                <div class="col-4 mobile-column">
                    <div class="footer-logo">
                        <img src="/images/logo.png">
                    </div>
                    <div class="footer-about">
                        <p>We specialize in all kinds of Insurance coverage. Offering multiple insurance is great for you because when you bundle your policies together, you save!</p>
                    </div>
                    <div class="footer-social text-center">
                        {{-- <ul>
                            <li><a href="#">linkedin</a></li>
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                        </ul> --}}
                        <img src="/images/footer-social.png">    
                    </div> 
                    {{-- <img src="storage/images/footer-nav.png"> --}}
                </div>
                <div class="col-3  flex">
                    <div class="process-nav">
                        <h5 class="color-white">Our Process</h5>
                        <ul>
                            <li><a href="/pages/how-it-works">How it works</a></li>
                            <li><a href="/pages/our-advisor">Our Advisors</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="/pages/our-insurance">Our Insurance</a></li>
                            <li><a href="#">Glossary</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-3  flex">
                    <div class="insurance-nav">
                        <h5 class="color-white">Our Insurance</h5>
                        <ul>
                            <li><a href="/">Home Ins.</a></li>
                            <li><a href="#">Auto Ins.</a></li>
                            <li><a href="#">Business Ins.</a></li>
                            <li><a href="#">Condo Ins.</a></li>
                            <li><a href="#">Tenant Ins.</a></li>
                            <li><a href="#">Life Ins.</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-2 flex ">
                    <div class="company-nav">
                        <h5 class="color-white">Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">In the news</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-blue">
        <div class="col-12">
            <div class="copy-right">
                <p>Copyright 2021 - All right Reserved</p>
            </div>
        </div>
    </div>
</footer>

    </html>
</div>