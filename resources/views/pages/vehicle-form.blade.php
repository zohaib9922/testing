@extends('layouts.noheader')
@section('title') Home @endsection
@section('content')
<!DOCTYPE html>
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
      <div class="header-inner ">
      <div class="start-a-quote-parent">
         <div class="container">
                <div class="row header-top">
                    <div class="col-4 pl-0">
                        <div class="logo">
                            <a href="/"></a><img src="/images/logo.png"></a>
                        </div>
                        <div class="mobile-logo">
                            <a href="/"></a><img src="/images/mobile-logo.png"></a>
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
      <div class="container driver-container text-center">
      <div class="row d-flex wd-70-0 flex-center">
         <div class="col-md-12 after col-lg-6 col-sm-12 d-flex flex-center flex-colum">
            <h4 class="lts-4 color-red">Welcome to Canada's best</h4>
            <h1 class="p-3 pl-0 lts-4 color-light-black font-600">Insurance Hunting Marketplace.</h1>
         </div>
      </div>
      <div class="container drivers-form  start-date-parent">
         <div class="row">
            <div class=" col-lg-3 col-m-12  col-sm-11 mobile-card left-section-from">
               <img src="/images/counter.png">
               <div class="card card-left w-100">
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
                  <div class="card-bt">
                     <h4 class="color-white">CONTACT</h4>
                  </div>
               </div>
            </div>
            <div class="col-m-12 col-lg-9 col-sm-12">
               <div class="card appoint-card driver-form text-left w-100 card-right" >
                  <h4 class="color-black"><b>Vehicle's General</b></h4>
                  <span class="line">border</span>
                  <div class="driver-form-body vehicler-form-body">
                     <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12">
                           <label>VIN Number</label>
                           <input type="text" placeholder="Enter your first name">
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-12">
                           <label>Vehicle Location</label>
                           <input type="text" placeholder="Enter your last name">      
                        </div>
                     </div>
                     <div class="row vehicle-top-lable position">
                        <div class="col-1 pd-0">
                           <input type="checkbox" id="certificate" name="certificate" value="certificate">
                        </div>
                        <div class="col-11 pd-0">
                           <label for="certificate">I have no VIN Number available.</br><span class="label-sub-title">(Why is entering a VIN Number Better?)</span></label>
                        </div>
                     </div>
                  </div>
                  <div class="driverform-bottom vechile-form-first-section position">
                     <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 pd-0">
                           <label for="birthday">Is this Vehicle Leased?</label>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 pre-checkboxes d-flex">
                           <input type="checkbox" name="yes" value="Bike">
                           <label for="yes">Yes</label>
                           <input type="checkbox" name="no" value="Bike">
                           <label for="no">No</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 pd-0">
                           <label for="birthday">Was this vehicle new when purchased or Leased?</label>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 pd-0 pre-checkboxes d-flex">
                           <input type="checkbox" name="yes" value="Bike">
                           <label for="yes">Yes</label>
                           <input type="checkbox" name="no" value="Bike">
                           <label for="no">No</label>
                        </div>
                     </div>
                     <div class="row desktop-fields">
                        <div class="col-6">
                           <label for="birthday">Vehicle purchased date?</label>
                        </div>
                        <div class="col-2">
                           <select id="month" name="month">
                              <option>month</option>
                              <option value="01">January</option>
                              <option value="02">February</option>
                              <option value="03">March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                           </select>
                        </div>
                        <div class="col-2">
                           <select id="month" name="month">
                              <option>month</option>
                              <option value="01">January</option>
                              <option value="02">February</option>
                              <option value="03">March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                           </select>
                        </div>
                        <div class="col-2">
                           <select id="year" name="year">
                              <option>year</option>
                              <option value="1940">1940</option>
                              <option value="1941">1941</option>
                              <option value="1942">1942</option>
                              <option value="1943">1943</option>
                              <option value="1944">1944</option>
                              <option value="1945">1945</option>
                              <option value="1946">1946</option>
                              <option value="1947">1947</option>
                              <option value="1948">1948</option>
                              <option value="1949">1949</option>
                              <option value="1950">1950</option>
                              <option value="1951">1951</option>
                              <option value="1952">1952</option>
                              <option value="1953">1953</option>
                              <option value="1954">1954</option>
                              <option value="1955">1955</option>
                              <option value="1956">1956</option>
                              <option value="1957">1957</option>
                              <option value="1958">1958</option>
                              <option value="1959">1959</option>
                              <option value="1960">1960</option>
                              <option value="1961">1961</option>
                              <option value="1962">1962</option>
                              <option value="1963">1963</option>
                              <option value="1964">1964</option>
                              <option value="1965">1965</option>
                              <option value="1966">1966</option>
                              <option value="1967">1967</option>
                              <option value="1968">1968</option>
                              <option value="1969">1969</option>
                              <option value="1970">1970</option>
                              <option value="1971">1971</option>
                              <option value="1972">1972</option>
                              <option value="1973">1973</option>
                              <option value="1974">1974</option>
                              <option value="1975">1975</option>
                              <option value="1976">1976</option>
                              <option value="1977">1977</option>
                              <option value="1978">1978</option>
                              <option value="1979">1979</option>
                              <option value="1980">1980</option>
                              <option value="1981">1981</option>
                              <option value="1982">1982</option>
                              <option value="1983">1983</option>
                              <option value="1984">1984</option>
                              <option value="1985">1985</option>
                              <option value="1986">1986</option>
                              <option value="1987">1987</option>
                              <option value="1988">1988</option>
                              <option value="1989">1989</option>
                              <option value="1990">1990</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              <option value="1994">1994</option>
                              <option value="1995">1995</option>
                              <option value="1996">1996</option>
                              <option value="1997">1997</option>
                              <option value="1998">1998</option>
                              <option value="1999">1999</option>
                              <option value="2000">2000</option>
                              <option value="2001">2001</option>
                              <option value="2002">2002</option>
                              <option value="2003">2003</option>
                              <option value="2004">2004</option>
                              <option value="2005">2005</option>
                              <option value="2006">2006</option>
                              <option value="2007">2007</option>
                              <option value="2008">2008</option>
                              <option value="2009">2009</option>
                              <option value="2010">2010</option>
                              <option value="2011">2011</option>
                              <option value="2012">2012</option>
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                              <option value="2016">2016</option>
                              <option value="2017">2017</option>
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                              <option value="2020">2020</option>
                              <option value="2021">2021</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-m-12 mobile-fields pd-0 col-lg-9 col-sm-12">
                        <div class="text-left w-100 card-right" >
                           <div class="driver-form">
                              <div class="row">
                                 <div class="col-m-6 col-lg-6 col-sm-12">
                                    <label>Vehicle purchased date?</label>
                                    <input type="date" placeholder="Enter your date">
                                 </div>
                                 <div class="col-m-6 col-lg-6 col-sm-12">
                                    <label>Your G2 Licensed Date?</label>
                                    <input type="date" placeholder="Enter your date">
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                        <div class="col-m-12 mobile-fields pd-0 col-lg-9 col-sm-12">
                           <div class="text-left w-100 card-right" >
                              <div class="driver-form">
                                 <div class="row">
                                    <div class="col-m-6 col-lg-6 col-sm-12">
                                       <label>Most common use for this vehicle?</label>
                                       <input type="date" placeholder="Enter your date">
                                    </div>
                                    <div class="col-m-6 col-lg-6 col-sm-12">
                                       <label>Your G2 Licensed Date?</label>
                                       <input type="date" placeholder="Enter your date">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-m-6 col-lg-6 col-sm-12">
                                       <label>Distance driven annually?</label>
                                       <input type="date" placeholder="Enter your date">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div class="driver-form-end-section vechile-second-section position">
                           <div class="row">
                              <div class="col-md-12 col-lg-5 col-sm-5 pd-0">
                                 <label for="birthday">Most common use for this vehicle?</label>
                              </div>
                              <div class="col-md-12 col-lg-5 col-sm-5 pd-0 pre-checkboxes d-flex">
                                 <select id="month" name="month">
                                    <option>month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row file-field">
                              <div class="row">
                                 <div class="col-md-12 col-lg-5 col-sm-5 pd-0 pd-0">
                                    <label for="birthday">Distance driven annually?</label>
                                 </div>
                                 <div class="col-md-12 col-lg-5 col-sm-5 pd-0pd-0 pre-checkboxes d-flex">
                                    <select id="month" name="month">
                                       <option>month</option>
                                       <option value="01">January</option>
                                       <option value="02">February</option>
                                       <option value="03">March</option>
                                       <option value="04">April</option>
                                       <option value="05">May</option>
                                       <option value="06">June</option>
                                       <option value="07">July</option>
                                       <option value="08">August</option>
                                       <option value="09">September</option>
                                       <option value="10">October</option>
                                       <option value="11">November</option>
                                       <option value="12">December</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="driver-form-end-section vehicle-fouth-section position">
                           <span class="line">border</span>                        
                           <div class="row">
                              <div class="col-md-12 col-lg-5 col-sm-5 pd-0 pd-0">
                                 <label for="birthday">This vehicle has an anti-theft device</label>
                              </div>
                              <div class="col-md-12 col-lg-7 col-sm-5 pd-0 pd-0 pre-checkboxes d-flex">
                                 <input type="checkbox" name="yes" value="Bike">
                                 <label for="yes">Yes</label>
                                 <input type="checkbox" name="no" value="Bike">
                                 <label for="no">No</label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 col-lg-5 col-sm-5 pd-0 pd-0">
                                 <label for="birthday">Do you use winter Tires?</label>
                              </div>
                              <div class="col-md-12 col-lg-7 col-sm-5 pd-0 pd-0 pre-checkboxes d-flex">
                                 <input type="checkbox" name="yes" value="Bike">
                                 <label for="yes">Yes</label>
                                 <input type="checkbox" name="no" value="Bike">
                                 <label for="no">No</label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-5">
                                 <label for="birthday">Parking at night?</label>
                              </div>
                              <div class="col-5">
                                 <select id="month" name="month">
                                    <option>month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="driverform-bottom vechile-form-first-section position">
                           <div class="vechile-form-third-section position">
                              <h4 class="color-black"><b>Vehicle's Usage</b></h4>
                              <div class="row">
                                 <div class="col-md-12 col-lg-5 col-sm-5 pd-0 pd-0">
                                    <label for="birthday">Driven for compensation?</label>
                                 </div>
                                 <div class="col-md-12 col-lg-7 col-sm-5 pd-0 pd-0 pre-checkboxes d-flex">
                                    <input type="checkbox" name="yes" value="Bike">
                                    <label for="yes">Yes</label>
                                    <input type="checkbox" name="no" value="Bike">
                                    <label for="no">No</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="date-btns driver-forom-btns">
                           <div class="container">
                              <div class="row ">
                                 <div class="col-md-12 col-lg-6 col-sm-12  btn-left">
                                    <a href="#">Cancel</a>
                                 </div>
                                 <div class="col-md-12 col-lg-6 col-sm-6  btn-right">
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
   </header>
</html>