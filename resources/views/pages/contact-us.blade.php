@extends('layouts.admin')

@php($title = 'Contact-us')
@push('title', yieldTitle($title))

@section('content')
        <div id="entry-separator" class="energy-contact">
            <div class="container">
                <div class="entry-head">
                    <div class="entry-header">	
                        <header class="entry-header">
                            <h1 class="entry-title">Contact Us</h1>
                            <div class="clear"></div>
                            <strong>Energy Techno Cast Pvt. Ltd.</strong><br>
                            Shapar Industrial Area, Rajkot - Gondal Highway, Dist. : Rajkot - 360 002.<br>
                            Gujarat / India. <br><br>
                            
                            <strong>Phone :</strong> +91-2827-252160, 252161<br>
                            <strong>Fax :</strong> +91-2827-252562<br>
                            <strong>E-Mail :</strong> info@rajantechcast.com																				
                        </header>
                    </div>
                    <div class="entry-breadcrumb">
                        <p class="breadcrumb"><i class="fa fa-home "></i><a href="index.html">Home </a>&nbsp;/&nbsp;&nbsp; About Company</p>
                    </div>	
                </div>	
            </div>	
        </div>
        <div role="main" id="content">
            <div class="row-fluid">
              <div class="container">
                <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12 col-xs-12">
                     <div class="sidebar clearfix-sidebar ">
                        <div class="contactus" id="nav_menu-2">
                            <h2>Contact Us Now</h2>
                <div class="border"></div>
                <br>
                <p>For any product-related enquiry, feel free to get in touch with us. Leave a message, and our representative will get in touch with you shortly.</p>
                <br>
                <div class="contact_details">
                    <div class="row">
                    <div class="col-md-2">
                        <p class="icons icons__mobile"><i class="fa fa-mobile"></i></p>
                    </div>
                    <div class="col-md-10">
                        <h5>Call Us :</h5>
                        <p>+91 9256844444</p>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="icons icons__envelope"><i class="fa fa-envelope"></i></p>
                    </div>
                    <div class="col-md-10">
                        <h5>Email Us :</h5>
                        <p><a href="mailto: info@sajjanprecision.com"> info@sajjanprecision.com</a></p>
                    </div>
                </div>
                    <div class="clearfix"></div>
                   
                </div>
                        </div>

                       
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-sm-12 col-xs-12 contact_info">
                        <div class="contact_info active">
                            <form action="#" method="post" enctype="multipart/form-data" onchange="return setdata();">
                                <h3>Drop a Message</h3>
                                <br>
                                    <div class="form-group col-md-12">
                                        <select id="country" class="dropdown form-control form-control1" >
                                            <option selected="" disabled="">--- Select Country ---</option>
                                            <option data-ccode="+91"  value="all" data-consernname="Mr. Harsh Bhut">India</option>
                                            <option data-ccode="+49" value="all" data-consernname="Mr. JJ">USA</option>
                                            <option data-ccode="+39" value="all" data-consernname="Mr. KZ">Canada</option>
                                        </select>
                                    </div>
                           
                          <div id="all" class="hide">
                            <div class="form_click_inner1">
                                <div class="form-group col-md-12">
                                    <div class="col-md-3 nopadding">
                                        <h5 class="form-control number form-control1">Contact Person</h5>
                                    </div>
                                    <div class="col-md-9 nopadding">
                                        <span id="show_explorename" class="form-control form-control1"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="fnamecontact" placeholder="Full Name*" class="form-control form-control1" required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="emailidcontact" placeholder="Email Id*" class="form-control form-control1" required="">
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-2 nopadding">
                                        <span name="contactnumner" id="show_exploreccode" class="form-control form-control1"></span>
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <input type="text" name="cnumbercontact" id="cnumbercontact" placeholder="Mobile Number*" class="form-control number form-control1" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <input type="file" name="dfile" id="dfile" class="form_control resume" placeholder="pdf &amp; jpg">
                                <h6>Upload pdf / jpg / png</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="locationcontact" id="locationcontact" placeholder="locationcontact*" class="form-control form-control1" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group  col-md-12 ">
                                    <textarea name="message" rows="5" placeholder="Message.." class="form-control" required=""></textarea>
                                    <br>
                                </div>
                                <br><br>
                                <input type="hidden" id="hiddeninput" name="hiddeninput">
                                <input type="hidden" id="hiddenname" name="hiddenname">
                                <div class="form-group col-md-12">
                                    <input type="submit" name="bookcontact" id="bookcontact" value="Submit" class="btnRead">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    
                          
                    </div>
                </form>
            </div>
                </div>
            </div>

      


                    </div>
                    


                </div>
              </div>
            

@endsection