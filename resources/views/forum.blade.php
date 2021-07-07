@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<!-- MAIN -->
<!DOCTYPE html>
<title>My Hunter - Get A Quote</title>
<link rel="shortcut icon" href="https://myhunter.ca/images/favicon.png" type="image/x-icon">
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
  src="https://www.facebook.com/tr?id=784772282179989&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<html lang="en">
   
<header>
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
                        <!--
                        <div class="top-menu">
                            <ul class="d-flex">
                                <li><a href="#">Insurance</a></li>
                                <li><a href="#">How it works</a></li>
                                <li><a href="#">Resources</a></li>
                                <li class="hunt-li" ><button type="button" class="btn bg-yellow btn-warning p-2 "><a class="text-dark  font-600" href="#">Start Your Hunt</a></button></li>
                            </ul>
                            <div class="mobile-menu">
                                <img src="/images/menu-icon.png">
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row d-flex flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <h4 class="lts-4 color-red">A Hunt Away From Savings</h4>
                    <h1 class="p-3 pl-0 lts-4 color-light-black font-600">Complete your online quote now and get your price in less than 1 minute</h1>
                </div>
            </div>
            <div class="row d-flex mt-15 flex-center">
                <div class="col-6 d-flex flex-center flex-colum">
                    <div class="card form-card">
                        <form class="quote-form" id="quote-form" method="POST" action="{{ route('add.forum') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label>Name</label>
                                <input type="text" name="postalcode" required value="" placeholder="Used to provide an accurate quote" autofocus >
                            </div>
                            <div class="field">
                                <label>Phone No.</label>
                                <input type="text" name="number" value="" required placeholder="So we can contact you." autofocus >
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <input type="email" name="email" value="" required placeholder="This will be your login info." autofocus >
                            </div>
                            <div class="field">
                                <label>Insurance Type</label>
                                <select name="insurancetype" value="" type="text" required placeholder="This will be your login info." autofocus >
                                    <option value="auto">Auto</option>
                                    <option value="home">Home</option>
                                    <option value="bussiness">Business</option>
                                    <option value="life">Life</option>
                                </select>
                            </div>
                            <input type="submit" name="Continue" value="Continue" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@if ($errors->any())
<div id="myModal" class="modal alert-danger fade">
    <div class="modal-dialog">
        <div class="modal-content alert-danger">
            <div class="alert  m-0 alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
            </div>   
            
        </div>
    </div>
</div>
@endif



@if(session()->has('message'))
    <div id="myModal" class="modal alert-success fade">
        <div class="modal-dialog">
            <div class="modal-content alert-success">
                <div class="alert  m-0 alert-success">
                    {{ session()->get('message') }}
                    <div class="col-12 pop-up-btn alert-success">
                    <a class="btn alert-btn-continue" href="/hunter-page">Continue</a>
                </div>
                </div>   
                
            </div>
        </div>
    </div>
@endif  

</html>


