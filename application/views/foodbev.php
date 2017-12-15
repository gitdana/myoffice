<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food & Beverages</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/b">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/incrementing.js"></script>
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
                                            <li><a href="http://myoffice.lankapanel.net/"><b>Login </b><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
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



        <div class="timtableview clearfix">
            <div class="menu-food col-md-9 col-sm-9 col-xs-9">
                <h2>Extra Services</h2>
            <div class="menu-option clearfix">
             
                                     
<!--                    <li>    
                        <label class="checkbox-inline">
                            <input type="checkbox" value=""><img src="images/snack.png"> snack
                        </label>
                    </li>
                                        <li>    
                        <label class="checkbox-inline">
                            <input type="checkbox" value=""><img src="images/breakfast.png"> Breakfast
                        </label>
                    </li>
                                                            <li>    
                        <label class="checkbox-inline">
                            <input type="checkbox" value=""><img src="images/lunch.png">Lunch
                        </label>
                    </li>
                                                                                <li>    
                        <label class="checkbox-inline">
                            <input type="checkbox" value=""><img src="images/all.png">All
                        </label>
                    </li>-->

                  <div class="form-group col-sm-4">
                        <label class="control-label"><strong>Select Service</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                            <option value="">- SELECT SERVICE -</option>
                            <option value="1">Food and Beverages</option>
                            <option value="2">Multimedia</option>
                            <option value="3">Internet</option>
                        </select>
                    </div>
                   <div class="form-group col-sm-4">
                        <label class="control-label"><strong>Select Item Type</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                            <option value="">- SELECT ITEM -</option>
                            <option value="1">Perera &amp; Sons</option>
                            <option value="2">FAB</option>
                            <option value="3">Burger King</option>
                        </select>
                    </div>
     <div class="form-group col-sm-4">
    <input class="btn btn-danger pull-left btn-blue search-services" value="Search" type="submit">
     </div>

                    
              
            </div>
                <h3>Food &amp; Beverages</h3>
                <div class="food-item clearfix blue-container">
                    <div class="menu-list col-md-9 col-sm-9 col-xs-9">
                        <h3>Perera &amp; Sons</h3>
                        <ul>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Apple pie</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Cinnamon Roll</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner1">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Croissant</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner2">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                                                        <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Curry puff</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner3">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                                                        <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Puff pastry</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner4">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                        
                        </ul>
                    </div>                                        
                    <div class="company-logo col-md-3 col-sm-3 col-xs-3">
                        
                    
                        <img src="<?php echo base_url();?>/assests/images/p&s.png">
                        
                        <input class="btn btn-danger pull-right btn-red order-now" value="ORDER NOW" type="submit">
                    </div>

  
                
            </div>
                
                                <h3>Internet</h3>
                <div class="food-item clearfix green-container">
                    <div class="menu-list col-md-9 col-sm-9 col-xs-9">
                        <h3>Lanka Communication Services</h3>
                        <ul>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">USB Wi-Fi Adapters</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner5">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Wi-Fi Extenders</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner6">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                            <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Wireless Routers</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner7">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                                                        <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Modems</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner8">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                                                        <li class="clearfix"><div class="pull-left"><label class="checkbox-inline"><input type="checkbox" value="">Whole Home Wi-Fi Systems</label></div>
                               <div class="pull-right">
                                  <div class="input-group spinner9">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                               </div>
                            </li>
                        
                        </ul>
                    </div>                                        
                    <div class="company-logo col-md-3 col-sm-3 col-xs-3">
                        
                    
                        <img src="<?php echo base_url();?>/assests/images/New-Logo.png">
                        
                        <input class="btn btn-danger pull-right btn-red order-now" value="ORDER NOW" type="submit">
                    </div>

  
                
            </div>
            </div>
            <div class="booking-section col-md-3 col-sm-3 col-xs-3">
                <h2>Booking Summary</h2>
                <h5>BMICH</h5>
                <p>Bandaranaike Memorial International Conference Hall</p>
                <div class="total">
                    <h3>Total</h3>
                    <h1>Rs.75,800</h1>
                </div>
                <div class="selection-summary clearfix">
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>05 Dec 2017</h4>
                            <p>Evening Session</p>
                        </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>17,900</h4>
                        </div>
                    </div>
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>07 Dec 2017</h4>
                            <p>Morning Session</p>
                        </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>15,900</h4>
                        </div>
                    </div>
                </div>
                <div class="extra-items clearfix">
                    <h3>Extra items</h3>
                    <div class="items">
                        <div class="item-box clearfix">
                            <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                                <h4>Projector</h4>
                            </div>
                            <div class="item-price col-md-4 col-sm-4 col-xs-4">
                                <h4>17,000</h4>
                            </div>
                        </div>
                        <div class="item-box clearfix">
                            <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                                <h4>White Board</h4>
                            </div>
                            <div class="item-price col-md-4 col-sm-4 col-xs-4">
                                <h4>10,000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item-amount">
                        <h5>Total</h5>
                        <h4>27,000</h4>
                    </div>
                </div>
                                <div class="extra-services clearfix">
                    <h3>Extra Services</h3>
                    <div class="items">
                        <div class="item-box clearfix">
                            <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                                <h4>Apple pie <span>x</span> 50
</h4>
                            </div>
                            <div class="item-price col-md-4 col-sm-4 col-xs-4">
                                <h4>3000</h4>
                            </div>
                        </div>
                        <div class="item-box clearfix">
                            <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                                <h4>Wireless Routers
</h4>
                            </div>
                            <div class="item-price col-md-4 col-sm-4 col-xs-4">
                                <h4>12,000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item-amount">
                        <h5>Total</h5>
                        <h4>15,000</h4>
                    </div>
                </div>
                <div class="total ground">
                    <h3>Total</h3>
                    <h1>Rs.75,800</h1>
                </div>

               <form action="<?php echo site_url()?>/checkout_controller/index"> <input class="btn btn-danger pull-right btn-blue col-md-12" value="Continue &raquo;" type="submit"></form>
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
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
        });


        $(function() {
            $('#datetimepicker23').datetimepicker();
        });
        

    </script>
    <script>
   (function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);


   (function ($) {
  $('.spinner1 .btn:first-of-type').on('click', function() {
    $('.spinner1 input').val( parseInt($('.spinner1 input').val(), 10) + 1);
  });
  $('.spinner1 .btn:last-of-type').on('click', function() {
    $('.spinner1 input').val( parseInt($('.spinner1 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner2 .btn:first-of-type').on('click', function() {
    $('.spinner2 input').val( parseInt($('.spinner2 input').val(), 10) + 1);
  });
  $('.spinner2 .btn:last-of-type').on('click', function() {
    $('.spinner2 input').val( parseInt($('.spinner2 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner3 .btn:first-of-type').on('click', function() {
    $('.spinner3 input').val( parseInt($('.spinner3 input').val(), 10) + 1);
  });
  $('.spinner3 .btn:last-of-type').on('click', function() {
    $('.spinner3 input').val( parseInt($('.spinner3 input').val(), 10) - 1);
  });
})(jQuery);


   (function ($) {
  $('.spinner4 .btn:first-of-type').on('click', function() {
    $('.spinner4 input').val( parseInt($('.spinner4 input').val(), 10) + 1);
  });
  $('.spinner4 .btn:last-of-type').on('click', function() {
    $('.spinner4 input').val( parseInt($('.spinner4 input').val(), 10) - 1);
  });
})(jQuery);


   (function ($) {
  $('.spinner5 .btn:first-of-type').on('click', function() {
    $('.spinner5 input').val( parseInt($('.spinner5 input').val(), 10) + 1);
  });
  $('.spinner5 .btn:last-of-type').on('click', function() {
    $('.spinner5 input').val( parseInt($('.spinner5 input').val(), 10) - 1);
  });
})(jQuery);


   (function ($) {
  $('.spinner5 .btn:first-of-type').on('click', function() {
    $('.spinner5 input').val( parseInt($('.spinner5 input').val(), 10) + 1);
  });
  $('.spinner5 .btn:last-of-type').on('click', function() {
    $('.spinner5 input').val( parseInt($('.spinner5 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner6 .btn:first-of-type').on('click', function() {
    $('.spinner6 input').val( parseInt($('.spinner6 input').val(), 10) + 1);
  });
  $('.spinner6 .btn:last-of-type').on('click', function() {
    $('.spinner6 input').val( parseInt($('.spinner6 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner7 .btn:first-of-type').on('click', function() {
    $('.spinner7 input').val( parseInt($('.spinner7 input').val(), 10) + 1);
  });
  $('.spinner7 .btn:last-of-type').on('click', function() {
    $('.spinner7 input').val( parseInt($('.spinner7 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner8 .btn:first-of-type').on('click', function() {
    $('.spinner8 input').val( parseInt($('.spinner8 input').val(), 10) + 1);
  });
  $('.spinner8 .btn:last-of-type').on('click', function() {
    $('.spinner8 input').val( parseInt($('.spinner8 input').val(), 10) - 1);
  });
})(jQuery);

   (function ($) {
  $('.spinner9 .btn:first-of-type').on('click', function() {
    $('.spinner9 input').val( parseInt($('.spinner9 input').val(), 10) + 1);
  });
  $('.spinner9 .btn:last-of-type').on('click', function() {
    $('.spinner9 input').val( parseInt($('.spinner9 input').val(), 10) - 1);
  });
})(jQuery);
        
    </script>
</body>

</html>