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

<div class="advisor-pag work-page insurance-page">
    <header>
        <div class="bg-pink ">
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
        <div class=" insurance-bg">
            <div class=" insurance-top how-work-header bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 flex-column d-flex flex-center col-sm-12">
                            <div class="row">
                                <div class="col-12 d-flex flex-center">
                                    <h4 class="color-red text-center">THIS IS HOW IT WORKS</h4>
                                </div>
                                <div class="col-12 text-center pd-0">
                                    <span class="sperater-grey-small ">Sperater</span>
                                </div>
                                <div class="col-12 d-flex flex-center">
                                    <h1 class="p-3 pl-0 lts-4 text-center color font-600 pt-3">Welcome to</br> The Insurance Hunt!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="work-parent">
    <body>

        <div class="it-wroks-top  pd-100">
            <div class="container pb-90 mb-0  center-text">
                <div class="row inner">
                    
    
                    <div class="col-lg-6 col-md-12  insurance-text align-left">
                        <h4 class="lts-4 bold upper-case m-0 color-pink">Why Insurance?</h4>
                            <div class="row">
                                <div class="col-md-12">
                                   <p class="pd-18 mb-0">"Educational" - insurance is to pay for now, so it can</br> save you later. It's a community fund that helps</br> whoever needs it, that is categorized by how much</br> of a risk you are and depends on multiple factors:</br> your address, car you drive, license experience,</br> tickets/claims. It is meant to cover you for</br> however you need it to.</p>
                                       
                                </div>

                            </div>
                        
    
                    </div>

                    <div class="col-lg-6 col-md-12 hunter-img insurance-img">
                        <img src="/images/how-it-works-banner.png">
                    </div> 
                </div>
                <div class="step-pic">
                    <img src="/images/step-pic.png">
                </div>
            </div>
            <div class="indivusal-image">
                <img src="/images/mid-arrow-png.svg">
            </div>
            
            <div class="hunter-intro-section cong-parent">
                <div class="container text-center">
                    <h4 class="color-red intro">Congratulations!</h4>
                    <p class="op-text">
                        You got a new place to live and or new car and you’re excited. Now</br> the only thing stopping you is big brother telling you to get it insured.</br> 
                    </p>
                    <p>
                        Now you have to go out and try to survive the insurance marketplace.</br> What to do? The last thing you want to do is spend two days</br> shopping for insurance. So you were smart, went online and</br> now you're reading this.<span class="bold">What now..?</span></p>
                    
                </div>
            </div>
        </div>

       

            
        </div>
        <div class="work-hunter">
            <div class="container  center-text">
                <div class="row inner">
                    
                    <div class="col-6 hunter-img insurance-img">
                        <img  src="/images/work-hunter.svg">
                        
                    </div> 
                    <div class="col-6  insurance-text align-left">
                        <h4 class="lts-4 bold upper-case m-0 color-red">Meet your Hunter</h4>
                            <div class="row">
                                <div class="col-12">
                                   <p class="pd-18">First, we need to get to know you a bit!</br> Just like a trap. You will quickly answer</br> some questions so that we can match you</br> with a Licensed Insurance Hunter (thing of them as your dedicated hunter protecting</br> you from the potential dangers of the</br> insurance environment).</p>
                                       
                                </div>

                            </div>    
                        </div>                    
                </div>
            </div>
        </div>
        <div class="it-wroks-top search-hunter">
            <div class="container  center-text">
                <div class="row inner">
                    
    
                    <div class="col-6  insurance-text align-left">
                        <h4 class="lts-4 bold upper-case m-0 color-pink">Start The Hunt</h4>
                            <div class="row">
                                <div class="col-12">
                                   <p class="pd-18">Our survival tactics are unmatched! My</br> Hunter’s technology automatically</br> matches you with the best hunter for your</br> situation. Your hunter will quickly and</br> professionally communicate all the best</br> insurance rates and will personalize it</br> and make sure that the best insurance is</br> found for your needs!</p>
                                       
                                </div>

                            </div>
                    </div>

                    <div class="col-6  search-img insurance-img">
                        <img  class="deskstop-work-hunter" src="/images/search-hunter.svg">
                        <img class="mobile-work-hunter" src="/images/work-hunter-mobile.png">
                    </div> 
                </div>
            </div>
            <div class="step-3">
                <img src="/images/step-03.png">
            </div>
            
        </div>

        <div class="hunter-intro-section hunter-never-stop">
            <div class="container text-center">
                <h4 class="color-black deskstop-work-hunter intro">Our Hunt Never Stops</h4>
                <h4 class="color-black mobile-work-hunter intro">Our Hunt</br> Never Stops</h4>
                <p class="op-text">
                    Your Hunter will be there to answer any questions you might have for</br> as long as you are with us. Once your Hunter has found the best</br> insurance rate for you, it doesn’t stop.
                </p>
                <p>
                    "MyHunter" will keep hunting for a better way for you to save money,</br> you can touch base with them anytime for any advice, and or issues</br> you may come by. They are there for your every insurance need.</br> Finally you can rest assured and proudly say that</p>
                <p ><i class="color-pink bold">"MyHunter is always looking out..! "</i></p>                
            </div>
            <div class="step-4">
                <img src="/images/step-4.png">
            </div>
        </div>

        <div class="work-hunter hunter-complete">
            <div class="step-5">
                <img src="/images/step-05.png">
            </div>
            <div class="container  center-text">
                <div class="row inner">
                    
                    
                    <div class="col-6  insurance-text align-left">
                        <h4 class="lts-4 bold upper-case m-0 color-red">Insurance Hunt Complete</h4>
                            <div class="row">
                                <div class="col-12">
                                   <p class="pd-18">And just like that, you’re done! Go off</br> and enjoy life, and if the environment</br> hands you something dangerous or</br> concerning, you won’t have to worry.</br> You can confidently say</p>
                                   <p><i>"My Hunter will protect me..!"</i></p>    
                                </div>

                            </div>
                        
    
                        </div>

                        <div class="col-6  insurance-img">
                            <img src="/images/hunt-compelete.svg">
                        </div> 

                    
                </div>
            </div>
        </div>

        <div class="hunter-intro-section work-last hunter-never-stop">
            <div class="container text-center">

                <p class="op-text color-pink bold">
                    Never wait to save money on your insurance!</br> Just know that your dedicated hunter will be available when</br> you need them most. On the off chance, your hunter is off</br> hunting more insurance rates. Know that one of our other</br> hunters on the team will be there to cover your phone calls</br> and emails when you need them.
                </p>           
            </div>
            <div class="work-last-img">
                <img src="/images/work-last-bottom.png">
            </div>
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
