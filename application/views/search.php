<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/incrementing.js"></script>

     <script src="<?php echo base_url();?>/assests/js/jssor.slider-26.5.2.min.js" type="text/javascript"></script>
         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 5,
                $SpacingY: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
        <script src="<?php echo base_url();?>/assests/js/bootstrap-timepicker.js"></script>
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
                    <a href="<?php echo site_url()?>/Welcome/index"> <img alt="logo" class="img-responsive c-logo" src="<?php echo base_url()?>/assests/images/myoffice-logo.jpg"></a>
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
        <div class="clearfix"><button type="button" class="btn btn-info collapse-btn- icon-color-change" data-toggle="collapse" data-target="#edit-search">Edit Search <i class="fa fa-angle-down" aria-hidden="true"></i></button></div>
        <div id="edit-search" class="collapse expand-container">
            <form class="clearfix">
                <div class="form-group col-md-4">
                   
                        <label class="control-label"><strong>Location</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                                     <option value="">- SELECT LOCATION -</option>
                                               <option value="1">Colombo</option>
                            <option value="2">Galle</option>
                            <option value="2">Kandy</option>
                        </select>
                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label"><strong>Category</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                  <option value="">- SELECT CATEGORY -</option>
                            <option value="1">Meeting Room</option>
                            <option value="2">Conference Room</option>
                        </select>
                    </div>

                <div class="form-group col-md-4">
                        <label class="control-label"><strong>Hall</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                           <option value="">- SELECT HALL -</option>
                              <option value="1">BMICH</option>
                            <option value="2">PIBT</option>
                            <option value="2">Royal College Union</option>
                        </select>
                    
                </div>
                               <div class="form-group col-md-4">
                                 <label class="control-label"><strong>Capacity</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                              <option value="">- SELECT CAPACITY -</option>
                            <option value="1">700</option>
                            <option value="2">1000</option>
                            <option value="2">1500</option>
                        </select>
                    </div>
<div class="form-group col-md-4 col-sm-4 col-xs-4">
                        <div class="from-group col-md-6 date-select" style="padding-left:0px; padding-right:0px;">
                    <label for="pwd">Date </label>



    
<div class="date">
            <div class="input-group input-append date" id="dateRangePicker">
                <input type="text" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
      
    

                        </div>
                    
                   <div class="col-md-6 form-group time-select" style="padding-right:0px; padding-left:0px; margin-bottom:0px;">
                              <label for="pwd">Start Time</label>
                               <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker3" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
                        </div>
                    </div>


 
                    <div class="col-md-12">
                        <input class="btn btn-danger pull-right btn-blue glyphicon" value="Reset &#xe031;" type="submit">
                        <input class="btn btn-danger pull-right btn-blue" value="Continue &raquo;" type="submit"> 
                </div>
            </form>
        </div>
        <div class="detail-information col-md-12 col-sm-12 col-xs-12">
            <div class="img-gallery-view col-md-6 col-sm-6 col-xs-6">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;" class="slider-img">
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich1.JPG" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich1.JPG" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich2.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich2.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich3.JPG" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich3.JPG" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich4.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich4.jpg" />
            </div>
                        <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich1.JPG" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich1.JPG" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich2.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich2.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich3.JPG" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich3.JPG" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/assests/images/bmich4.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/assests/images/bmich4.jpg" />
            </div>

        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
                
                
                
                
            </div>
            <div class="discription col-md-6 col-sm-6 col-xs-6">
                <div class="infor">
                    <h3>BMICH</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
                </div>
                <div class="review-section clearfix">   
                    <div class="rate clearfix col-md-8 col-sm-8 col-xs-8">
                        <!--
              <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
-->
<div class="clearfix"><div class="pull-left"></div><div class="pull-right">1200 Reviews</div></div>
                        <div class="clearfix">
                           <div class="rating-div clearfix">
                                      <div class="side name_">
                                <div>Excellent</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>76%</div>
                            </div>   
                           </div>
                   <div class="rating-div clearfix">
                            <div class="side name_">
                                <div>Very Good</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>15%</div>
                            </div>
                            </div>
                             <div class="rating-div clearfix">
                            <div class="side name_">
                                <div>Average</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>4%</div>
                            </div>
                            </div>
                             <div class="rating-div clearfix">
                            <div class="side name_">
                                <div>Poor</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>2%</div>
                            </div>
                            </div>
                             <div class="rating-div clearfix">
                            <div class="side name_">
                                <div>Terrible</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>3%</div>
                            </div>
                            </div>
                        </div>
                    </div>
                
                <div class="facilities col-md-4 col-sm-4 col-xs-4">
                    <ul>
                        <li><i class="fa fa-podcast" aria-hidden="true"></i> Air Conditioned</li>
                        <li><i class="fa fa-bandcamp" aria-hidden="true"></i> Breakfast</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i> Free Parking</li>
                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Free Wi-Fi</li>
                        <li></li>
                    </ul>
                </div>
                </div>

            </div>
                            <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.906152592474!2d79.87062551477275!3d6.901825995012927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597f9d09a467%3A0xee0b9455e960eba5!2sBandaranaike+Memorial+International+Conference+Hall!5e0!3m2!1sen!2slk!4v1511701086938" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
        </div>
        <div class="extra-item-container">
            <div class="clearfix"><button type="button" class="btn btn-info collapse-btn- icon-color-change" data-toggle="collapse" data-target="#extra-items">Extra Items <i class="fa fa-angle-down" aria-hidden="true"></i></button></div>
            <div id="extra-items" class="collapse expand-container-grey clearfix">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="title">
                        <div class="col-md-6 col-sm-6 col-xs-6"> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>Units</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Extra Chairs
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                           <div class="input-group spinner10">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Extra Tables
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                          <div class="input-group spinner11">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Projectors
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                      <div class="input-group spinner12">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="title">
                        <div class="col-md-6 col-sm-6 col-xs-6"> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>Units</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Water Dispensers
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="input-group spinner13">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">White Boards
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="input-group spinner14">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="field-div clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Sound System
                                <br> <a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit." class="tool-tip-text" data-placement="bottom">Description <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="input-group spinner15">
                                    <input type="text" class="form-control" value="0">
                                    <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="extra-items-total clearfix col-md-12">
                <div class="pull-left more-items icon-color-change">
                    More Items <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
                <div class="pull-right price">
                    Total Rs.<span>0000</span>
            </div>
            </div>
            </div>
    
            
        </div>
        <div class="timtableview clearfix">
            <div class="col-md-9 col-sm-9 col-xs-9 schedule">
             <div class="clearfix filters-booking">
              <div class="pull-left">
               <div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">Day</button>
  <button type="button" class="btn btn-default">Month</button>
  <button type="button" class="btn btn-default">List</button>
</div>
                </div>
                <div class="pull-left">        
               <div class="form-group">
                <div class='input-group date' id='datetimepicker23'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
                </div>
                <div class="pull-right">
                     <div class="form-group">

  <select class="form-control" id="sel1">
    <option>Space 1</option>
    <option>Space 2</option>
    <option>Space 3</option>
    <option>Space 4</option>
  </select>
</div> 
                </div>
                </div>
                <div class="table-responsive">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover" id="tableID" onclick="myFun(event)">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Space 1</th>
                                <th>Space 2</th>
                                <th>Space 3</th>
                                <th>Space 4</th>
                                <th>Space 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>15,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>16,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>19,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>20,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>22,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>10.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>11,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>12,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>15,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>16,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>19,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>11.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>23,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>29,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>31,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>22,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>34,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>12.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>13,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>13,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>14,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>16,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>17,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>13.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>18,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>19,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>29,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>30,000</p> <span>Book your session</span></td>
                                    <td class="book-details"onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>39,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>14.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>29,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>29,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>32,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>34,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>40,000</p> <span>Book your session</span></td>
                            </tr>
                            <tr>
                                <td>15.00 AM</td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>12,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>13,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>14,000</p> <span>Book your session</span></td>
                                <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>17,000</p> <span>Book your session</span></td>
                                    <td class="book-details" onclick="this.style.backgroundColor = '#f25158'; this.style.color='white';"><i class="fa fa-calendar-o fa-2x" aria-hidden="true"></i>
                                    <p>19,000</p> <span>Book your session</span></td>
                            </tr>
                        </tbody>
                        <tfoot> </tfoot>
                    </table>
                </div>
                <!--end of .table-responsive-->
            </div>
            <div class="booking-section col-md-3 col-sm-3 col-xs-3">
                <h2>Booking Summary</h2>
                <h5>BMICH</h5>
                <p>Bandaranaike Memorial
International Conference Hall</p>
                <div class="total">
                    <h3>Total</h3>
                    <h1>Rs.60,800</h1> </div>
                <div class="selection-summary clearfix">
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>05 Dec 2017</h4>
                            <p>Evening Session</p>
                        </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>17,900</h4> </div>
                    </div>
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>07 Dec 2017</h4>
                            <p>Morning Session</p>
                        </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>15,900</h4> </div>
                    </div>
                </div>
                <div class="extra-items clearfix">
                    <h3>Extra items</h3>
                    <div class="items">
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>Projector</h4> </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>17,000</h4> </div>
                    </div>
                    <div class="item-box clearfix">
                        <div class="col-md-8 col-sm-8 col-xs-8 item-type">
                            <h4>White Board</h4> </div>
                        <div class="item-price col-md-4 col-sm-4 col-xs-4">
                            <h4>10,000</h4> </div>
                    </div>
                    </div>
                    <div class="item-amount">
                        <h5>Total</h5>
                        <h4>27,000</h4>
                    </div>
                </div>
                <div class="total ground">
                    <h3>Total</h3>
                    <h1>Rs.60,800</h1> </div>
                    
                <form action="<?php echo site_url()?>/foodbev_controller/index"><input class="btn btn-danger pull-right btn-blue col-md-12" value="Continue &raquo;" type="submit"></form>
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
        
        $('.datepicker').datetimepicker({
    format: 'DD-MM-YYYY HH:mm:ss'
});
        
           
            $(function () {
                $('#datetimepicker23').datetimepicker();
            });
        </script>
        
        <script>
            
              (function ($) {
  $('.spinner10 .btn:first-of-type').on('click', function() {
    $('.spinner10 input').val( parseInt($('.spinner10 input').val(), 10) + 1);
  });
  $('.spinner10 .btn:last-of-type').on('click', function() {
    $('.spinner10 input').val( parseInt($('.spinner10 input').val(), 10) - 1);
  });
})(jQuery); 

              (function ($) {
  $('.spinner11 .btn:first-of-type').on('click', function() {
    $('.spinner11 input').val( parseInt($('.spinner11 input').val(), 10) + 1);
  });
  $('.spinner11 .btn:last-of-type').on('click', function() {
    $('.spinner11 input').val( parseInt($('.spinner11 input').val(), 10) - 1);
  });
})(jQuery); 

              (function ($) {
  $('.spinner12 .btn:first-of-type').on('click', function() {
    $('.spinner12 input').val( parseInt($('.spinner12 input').val(), 10) + 1);
  });
  $('.spinner12 .btn:last-of-type').on('click', function() {
    $('.spinner12 input').val( parseInt($('.spinner12 input').val(), 10) - 1);
  });
})(jQuery); 

              (function ($) {
  $('.spinner13 .btn:first-of-type').on('click', function() {
    $('.spinner13 input').val( parseInt($('.spinner13 input').val(), 10) + 1);
  });
  $('.spinner13 .btn:last-of-type').on('click', function() {
    $('.spinner13 input').val( parseInt($('.spinner13 input').val(), 10) - 1);
  });
})(jQuery);

              (function ($) {
  $('.spinner14 .btn:first-of-type').on('click', function() {
    $('.spinner14 input').val( parseInt($('.spinner14 input').val(), 10) + 1);
  });
  $('.spinner14 .btn:last-of-type').on('click', function() {
    $('.spinner14 input').val( parseInt($('.spinner14 input').val(), 10) - 1);
  });
})(jQuery); 
            
                   (function ($) {
  $('.spinner15 .btn:first-of-type').on('click', function() {
    $('.spinner15 input').val( parseInt($('.spinner15 input').val(), 10) + 1);
  });
  $('.spinner15 .btn:last-of-type').on('click', function() {
    $('.spinner15 input').val( parseInt($('.spinner15 input').val(), 10) - 1);
  });
})(jQuery);


                   (function ($) {
  $('.spinner16 .btn:first-of-type').on('click', function() {
    $('.spinner16 input').val( parseInt($('.spinner16 input').val(), 10) + 1);
  });
  $('.spinner16 .btn:last-of-type').on('click', function() {
    $('.spinner16 input').val( parseInt($('.spinner16 input').val(), 10) - 1);
  });
})(jQuery);

                  (function ($) {
  $('.spinner17 .btn:first-of-type').on('click', function() {
    $('.spinner17 input').val( parseInt($('.spinner17 input').val(), 10) + 1);
  });
  $('.spinner17 .btn:last-of-type').on('click', function() {
    $('.spinner17 input').val( parseInt($('.spinner17 input').val(), 10) - 1);
  });
})(jQuery); 

function myFun(e){ 
     $('#tableID td').click(function(){
  
     });
}

        </script>
        
        <script type="text/javascript">
            $('#timepicker3').timepicker();
        </script>
<script>
$(document).ready(function() {
    $('#dateRangePicker')
        .datepicker({
            format: 'mm/dd/yyyy',
            startDate: '01/01/2010',
            endDate: '12/30/2020'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#dateRangeForm').formValidation('revalidateField', 'date');
        });

    $('#dateRangeForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        min: '01/01/2010',
                        max: '12/30/2020',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
</script>

   
</body>

</html>