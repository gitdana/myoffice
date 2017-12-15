<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/b">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/template.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-slider.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assests/js/incrementing.js"></script>
        <script src="<?php echo base_url();?>/assests/js/bootstrap-slider.js"></script>
        <script src="<?php echo base_url();?>/assests/js/jssor.slider-26.5.2.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="grey-menu">
            <div class="container">
                <div class="row">
                    <div class="submenu pull-right">
                        <ul>
                            <li><a href=""><i class="fa fa-mobile" aria-hidden="true"></i> 0112 - 123 - 123</a></li>
                            <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Need more informations</a></li>
                            <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Visit Us</a></li>
                            <li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i> Create an account</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-wrapper inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <a href="<?php echo site_url();?>/Welcome/index"> <img alt="logo" class="img-responsive c-logo" src="<?php echo base_url();?>/assests/images/myoffice-logo.jpg"></a>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="menu-wrap">
                            <div class="menu-wrap-inner">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="cssmenu">
                                            <div id="menu-line" style="width: 58px; left: 0px;"></div>
                                            <div id="menu-button"></div>
                                            <ul>
											<li> <a href="<?php echo site_url()?>/advancesearch_controller/index"><b>Add Space</b></a></li>
                                            <li> <a href="<?php echo site_url()?>/foodbev_controller/index"><b>Add Service</b></a></li>
                                                <li> <a href="http://myoffice.lankapanel.net/"><b>Contact Us</b></a></li>
                                                <li><a href="http://myoffice.lankapanel.net/"><b>Login</b><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-heading">Booking</div>
            <div class="container-form clearfix booking">
                <div class="col-md-6 col-sm-6 col-xs-6 booking-details">
                    <h3>Book as a guest or register</h3>
                    <p>Register with us for future convenience:</p>
                    <ul class="register">
                        <li>
                        <div class="radio">
  <label><input type="radio" name="optradio">Book as a guest</label>
</div>
                           </li>
                           <li>
                        <div class="radio">
  <label><input type="radio" name="optradio">Register</label>
</div>
                           </li>
                    </ul>
                    <h4>Register and save time</h4>
                    <p>Register with us for future convenience:</p>
                    <ul class="reg-facts">
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Fast and easy check out</li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Easy access to your order history and status</li>
                    </ul>
                    <form action="<?php echo site_url()?>/billing_controller/index"><input class="btn btn-danger pull-left btn-red" value="Continue" type="submit"></form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 booking-details">
                        <h3>login</h3>
                        <h4>Already Registered?</h4>
                        <p>Please log in below:</p>

                    <div class="form-group">
                        <label for="usr">Email Address <span>*</span></label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="usr">Password <span>*</span></label>
                        <input type="text" class="form-control" id="usr">
                    </div>              
<input class="btn btn-danger pull-left btn-red" value="Login" type="submit">
<a href="" class="pull-right black-txt">Forgot your password?</a>
                </div>
             
               
            </div>
        </div>
        <footer class="clearfix">
            <div class="container">
                <div class="pull-left col-md-4 col-sm-4 col-xs-4 social-icons">
                    <ul class="clearfix">
                        <li><a href=""><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="copyrights col-md-8 col-sm-8 col-xs-8">
                    <ul class="clearfix pull-right">
                        <li>© myoffice.com (Pvt) Ltd. All rights reserved.</li>
                        <li><img src="<?php echo base_url();?>/assests/images/apple.png"></li>
                        <li><img src="<?php echo base_url();?>/assests/images/android.png"></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });


            // Without JQuery
            var slider = new Slider('#ex2', {});



            // Without JQuery
            var slider = new Slider('#ex1', {});

            // Without JQuery
            var slider = new Slider('#ex3', {});
        </script>


    </body>

</html>