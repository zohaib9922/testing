
@extends('layouts.noheader')
<!DOCTYPE html>


<div class="advisor-page">
    <header>
        <div class="bg-pink">
            <div class="container">
                <div class="row header-top">
                    <div class="col-4 pl-0">
                        <div class="logo">
                            <a href="/"><img src="/images/logo.png"></a>
                        </div>
                        <div class="mobile-logo">
                            <a href="/"><img src="/images/mobile-logo.png"></a>
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
        
    </header>
    <body>
       
        <div class="indivual-header-slide">
            <div class="row d-flex w-100">
                <div class="col-12 slide-inside">
                    <div class="container">
                        <ul>
                            <li class="loaction-li"><img src="/images/location-icon.svg"></li>
                            <li class="advisor-li"><h2 class="color-red">Lisa Staffen</h2></li>
                            <li class="advisor-li">
                                <p>"If you believe it will work out, you'll see</br> opportunities. If you believe it won't, you will</br> see obstacles."</p>
                            </li>
                            <li id="adl-1" class="advisor-li"><a href="tel:(855) 289-6609">(855) 289-6609</a></li>
                            <li id="adl-2" class="advisor-li"><a href="tel:lisastaffen@hunterplace.com">lisastaffen@hunterplace.com</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="indivusal-image">
                <img src="/images/mid-arrow-png.svg">
            </div>
            
        </div>

        <div class="indivual-header-mobile">
            <div class="row d-flex">
                <div class="col-md-12">
                    <img class="w-100" src="/images/lisa-mobile.png">
                </div>
                <div class="col-md-12 slide-inside">
                    <div class="container">
                        <ul>
                            <li class="loaction-li"><img src="/images/location-icon.svg"></li>
                            <li class="advisor-li"><h2 class="color-red">Lisa Staffen</h2></li>
                            <li class="advisor-li">
                                <p>"If you believe it will work</br> out, you'll see</br> opportunities. If you</br> believe it won't, you will</br> see obstacles."</p>
                            </li>
                            <li id="adl-1" class="advisor-li"><a href="tel:(855) 289-6609">(855) 289-6609</a></li>
                            <li id="adl-2" class="advisor-li"><a href="tel:lisastaffen@hunterplace.com">lisastaffen@hunterplace.com</a></li>
                        </ul>
                    </div>
                </div>

                
            </div>
            <div class="indivusal-image">
                <img src="/images/mid-arrow-png.svg">
            </div>
        </div>
        

        <div class="hunter-intro-section">
            <div class="container text-center">
                <h4 class="color-red intro">Hi I'm Lisa!</h4>
                <p class="op-text">
                    I love living in this small town right on the Mississippi river</br> which is home to several festivals and events. Something unique</br> about me is I have two different coloured eyes and my</br> favourite late night food is Chinese.
                </p>
                <p><b><i>
                    I can conduct business in the following</br> language(s): <span class="color-red">English and French.</span>
                </i></b></p>
            </div>
        </div>

        <div class="pt-5 bg-grey">
            <div class="container  center-text">
                <div class="row d-flex flex-center">
                    <div class="col-12 d-flex  flex-center">
                        <h4 class=" font-600 upper-case m-0 color-light-black lts-4">Here's what people have</br> to say about Lisa:</h4>                    
                    </div>
                    <!-- <div class="col-12 pd-0">
                        <span class="sperater-grey-small ">Sperater</span>
                    </div> -->
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
                            <p class="card-text">My Hunter is presented by exceptional group of professional people. Lisa is very helpful and transparent in the way she deals with people and goes beyond what you can expect from an agent.</p>
                            </div>
                        </li>
                        <li class="card testimonials-card  ">
                            <div class="card-body">
                                <h5 class="card-title">Mary J.</h5>
                            <p class="card-text">"Thank you for helping me at a particularly difficult time in my life. I would not be able to manage all the details of getting my car back on the road without your input"</p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-12  pb-37 dots">
                    <img src="/images/dots.png">
                </div>
            </div>
        </div>
        
        <div class="advisor-bottom-section d-flex flex-wrap  col-12">
                <div class="plus-image">
                    <img src="/images/plus-icon-last-section.svg">
                </div>
            <div class="col-12">
                <div class="image">
                    <img class="faqs-desktop-img" src="/images/compare-section-illustration.svg">
                    <img class="faqs-mobile-img" src="/images/faqs-mobile-img.png">
                </div>
                <div class="button">
                    <button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="#">Start To Get Your Quote</a></button>
                </div>
            </div>
            <div class="bottom-left col-6">
                <h5>Stop being Frustrated! Get Insured<br> and Be Safe..</h5>
            </div>
            <div class="bottom-right col-6">
                <h5>Compare Real Quotes, Talk to Real<br> People..</h5>
            </div>

        </div>

        
        
    </html>
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

@section('content')