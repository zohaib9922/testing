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
<header>
    <div class="header-inner date-mobile-header">
        <div class="start-a-quote-parent">
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

        <div class="container start-date-home text-center">
            <div class="row d-flex flex-center">
                <div class="col-md-12 after col-lg-6 col-sm-12 d-flex flex-center flex-colum">
                    <h4 class="lts-4 color-red">Welcome to Canada's best</h4>
                    <h1 class="p-3 pl-0 lts-4 color-light-black font-600">Insurance Hunting Marketplace.</h1>
                </div>
            </div>
            
            <div class="container  start-date-parent">
                <div class="row">
                    <div class="col-md-9 m-auto col-lg-3 col-sm-9 flex-reverse">
                        <img src="/images/counter.png">
                        <div class="card card-left w-100" >
                            <div class="card-name">
                                <h4 class="color-red">Your advisor</h4>
                            </div>
                            <div class="row inner-box">
                                <div class="col-5">
                                    <img src="/images/testimonail-pic-1.png">
                                </div>
                                <div class="box-right-date box-right col-7 pd-0">
                                    <h5 class="color-light-black">Lisa Staffen</h5>
                                    <ul>
                                        <li><a href="tel:4166166409">(855) 289-6609</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="card-bt">
                              <h4 class="color-white">CONTACT</h4>
                          </div>
                       
                    </div>
                

                    <div class="col-md-12 col-lg-9 col-sm-12">

                        <div class="card appoint-card text-left w-100 card-right" >
                            <h4 class="color-black"><b>Start Date</b></h4>
                            <span class="line">border</span>
                        
                            <div class="row">
                                <div class="col-md-12 col-lg-5 col-sm-12 date-text text-left">
                                    <p class="deskstop-policy-text">
                                        Please select the start date of your policy
                                    </p>
                                    <p class="small-p deskstop-policy-text">
                                        (All times are local at the applicants postal address started herein)
                                    </p>
                                    <p class="mobile-policy-text">
                                        Please select the start date of your policy <span class="small-p">
                                              (All times are local at the applicants postal address started herein)
                                        </span>
                                    </p>

                                </div>
                                <div class="col-lg-7 col-sm-12 col-md-12 appointment-field">

                                    <select name="cars" id="cars">
                                        <option value="1">Please Select</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                    </select> 
                                    
                                </div>
                            </div>
                            <div class="date-btns">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-lg-5 col-md-12 btn-left">
                                            <a href="#">Cancel</a>
                                        </div>
                                        <div class="col-lg-5 col-md-12 btn-right">
                                            <a href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    
</header>
</html>
