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
        <div class="header-bottom">
            <div class="bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-12 flex-column d-flex flex-center col-sm-12">
                            <div class="row">
                                <div class="col-12 d-flex flex-center">
                                    <h1 class="p-3 pl-0 lts-4 color-red font-600 pt-3">Our Hunters</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex hunter-top-text flex-center">
                                    <p class="text-center col-12">Get a personal insurance hunter to assist you in all your</br> insurance needs. Our hunters will help you in every step</br> whether you're new to insurance for home, auto, and business</br> or whether you're looking to shop around.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex hunter-top-text flex-center">
                                    <p class="text-center col-12"><i><b>We'll set you up with our dedicated licensed insurance</br> hunter so you'll be in communication with the same</br> person every time..!</b></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="our-partners p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 hunter-bottom-text d-flex flex-column flex-center">
                        <h4 class="color-red font-600 upper-case lts-4">Find Your Dedicated Hunter!</h4>
                        <p class="color-white text-center">We have over 10 of Canada’s Top Insurance Providers working with</br> us to help you hunt down the best coverage at the best rate.</p>
                    </div>
                    <div class="col-12">
                        <div class="news-letter">
                            <select name="cars" id="cars">
                                <option value="Lisa Staffen">Lisa Staffen</option>
                                <option value="Lisa Staffen">Lisa Staffen</option>
                                <option value="Lisa Staffen">Lisa Staffen</option>
                                <option value="Lisa Staffen">Lisa Staffen</option>
                              </select>
                              <input type="submit" value="Go">
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        <div class="our-work advisor-list p-5 pt-5">
            <div class="container pd-0 section center-text">
                <div class="advisor-cards">
                    <ul class="d-flex flex-center">
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/lisa-staffen-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/ben-beazer-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/melanie-roeben-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/jeff-toth-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/karen-jeans-gilles-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/sivakumar-rajagopalan-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/kendra-klassen-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/paul-powell-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/amanda-hudson-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="pd-0 mobile-partner-slider mobile-advisor our-work col-12 d-flex flex-center">
            <ul class="d-flex flex-center owl-carousel owl-carousel-two">
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/lisa-staffen-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/ben-beazer-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/melanie-roeben-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/jeff-toth-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/karen-jeans-gilles-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/sivakumar-rajagopalan-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/kendra-klassen-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/paul-powell-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                        <li>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/amanda-hudson-image.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title color-black">Lisa Staffen</h5>
                                  <p >Licensed Insurance Advisor</br> Dundas</p>
                                </div>
                              </div>
                        </li>
                    </ul>
                </div>
                </div>

        <div class="faqs-section-parent bg-pink ">
            <div class="container">
                <div class="faqs-heading col-12 d-flex flex-center">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 ">
                            <h3 class="color-red text-center desktop-text-faqs">Frequently Asked Questions</h3>
                            <h3 class="color-red  mobile-text-faqs">Frequently</br> Asked Questions</h3>
                        </div>
                        <div class="col-md-12 col-lg-4 col-sm-12">
                            <button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="#">Ask Your Question</a></button>
                        </div>
                    </div>
                </div>
                <div class="faqs-section">
                    <div class="card text-white">
                        <div class="card-img-overlay">
                          <h5 class="card-title desktop-text-faqs color-red">What is an Insurance Marketplace?</h5>
                          <h5 class="color-red card-title mobile-text-faqs">What is an Insurance</br> Marketplace?</h5>
                          <p class="card-text">An insurance marketplace specializes in insurance and risk management. These companies</br> have Advisors or Brokers to act on behalf of their clients. They provide professional advice on</br> what products and coverages they need for their specific situation or family. These advisors</br> can help arrange and place the coverage with the chosen insurance company.</p>
                        </div>
                    </div>
                    <ul>
                        <li><a>Why is working with an advisor helpful?</a></li>
                        <li><a>How do Insurance Advisors make money?</a></li>
                        <li><a>What is an Insurance Marketplace?</a></li>
                    </ul>
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
                <h5>Stop being Frustrated! Get Insured</br> and Be Safe..</h5>
            </div>
            <div class="bottom-right col-6">
                <h5>Compare Real Quotes, Talk to Real</br> People..</h5>
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