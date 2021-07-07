@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<header>
	<meta name="facebook-domain-verification" content="98i4tw1g1r3u58hf2x7z7743f13bhg" />
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '784772282179989');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=784772282179989&ev=Lead&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <div class="header-inner">
        <div class="start-a-quote-parent">
            <div class="container">
                <div class="row header-top">
                    <div class="col-4 pl-0">
                        <div class="logo">
                    <a href="/">
                        <img src="/images/logo.png">
                    </a>
                </div>
                <div class="mobile-logo">
                    <a href="/">
                        <img src="/images/mobile-logo.png">
                    </a>
                </div>
                    </div>
                    <div class="col-8 pd-0 d-flex flex-center flex-end">
                        <div class="top-menu">
                            <ul class="d-flex">
                               <!--
                                <li class="hunt-li" ><button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="#">My Hunter</a></button></li>
                            -->
                            </ul>
                            <div class="mobile-menu">
                                <img src="/images/menu-icon.png">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row d-flex flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <h1 class="p-3 pl-0 lts-4 color-light-black  font-30 pr-0 
                    font-600">"Thank you for showing interest. We will be calling you shortly"</h1>
                </div>
            </div>
            <div class="row d-flex mt-15 flex-center">
                <div class="col-6 d-flex rpd-0 flex-center flex-colum">
                    <div class="card form-card">
                        <div class="hunter-select-box">
                            <div class="hunter-info col-12 d-flex pd-0 flex-center">
                               
                                <div class="hunter-info-box  d-flex pd-0 col-12">
                                    <div class="hunter-name col-12">
                                        <h4 class="color-red">Thank you for getting in touch</h4>
                                    </div>
                                    <div class="col-12 pd-0 hunter-box-inside">
                                        <div class="box-left col-5 pd-0">
                                            <img src="/images/mobile-logo.png">
                                        </div>
                                        <div class="box-right col-7 pd-0">
                                            <h5 class="color-light-black">My Hunter</h5>
                                            <ul>
                                                <li><a href="tel:4166166409">416-616-6409</a></li>
                                                {{-- <li>Ext. 0091</li>
                                                <li>lisastaffen@hunterplace.com</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                {{-- <ul>
                                    <li id="il-1">Enter Vehicles and Drivers Info</li>
                                    <li id="il-2">Compare Offers</li>
                                    <li id="il-3">Purchase your best value Insurance</li>
                                </ul> --}}
                                <p class="color-dark-grey ">Can't wait? Feel free to call us. We have your information and are ready to advise</p>
                            </div>
                            <div class="col-12 d-flex hunter-btn pd-0">
                                <a href="tel:4166166409" class="hunter-continue">Tap/Click to call</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>

@endsection
