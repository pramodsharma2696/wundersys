
@extends('master')
@section('contents')
       <!-- page-title -->
       <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-section -->
        <section class="contact-section pt_90 pb_100">
            <div class="auto-container">
                <div class="info-inner pb_25">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info">
                                <div class="icon-box"><i class="icon-45"></i></div>
                                <h4>Registered address:</h4>
                                <p>Ground Floor, The Sotheby Building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info">
                                <div class="icon-box"><i class="icon-45"></i></div>
                                <h4>Physical address:</h4>
                                <p>B32, B-Block, Green Park Avenue, Fairlands, Salem-636016, Tamil Nadu, India</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info">
                                <div class="icon-box"><i class="icon-46"></i></div>
                                <h4>Email Address</h4>
                                <p><a href="mailto:support@wundersyscapital.com">support@wundersyscapital.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                            <div class="single-info">
                                <div class="icon-box"><i class="icon-47"></i></div>
                                <h4>Phone Number</h4>
                                <p><a href="tel:+91 427 355 6256">+91 427 355 6256</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-inner pb_70">
                    <form method="post" action="https://azim.hostlin.com/Fortradex/sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Your Name <span>*</span></label>
                                <input type="text" name="username" placeholder="" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Phone <span>*</span></label>
                                <input type="text" name="phone" placeholder="" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Email Address <span>*</span></label>
                                <input type="email" name="email" placeholder="" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Subject <span>*</span></label>
                                <input type="text" name="subject" placeholder="" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Write Message <span>*</span></label>
                                <textarea name="message" placeholder=""></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn pt_18">
                                <button type="submit" class="theme-btn btn-one" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.112655883825!2d-60.955649599999994!3d14.0705243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c406820f255a007%3A0x35b3ab7fdfe0620d!2sYorker%20Markets!5e0!3m2!1sen!2sin!4v1736230731198!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                </div>
            </div>
        </section>
        <!-- contact-section end -->


       

@endsection