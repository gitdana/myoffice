<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.css">
<!--    <link rel="stylesheet" href="css/b">-->
      <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-timepicker.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />



<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>-->
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
    <div class="menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <a href="<?php echo site_url()?>/Welcome/index"> <img alt="logo" class="img-responsive c-logo" src="<?php echo base_url();?>/assests/images/myoffice-logo.jpg"></a>
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
                                            <li><a href="http://myoffice.lankapanel.net/"><b>Login</b> <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
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
    <div class="slider-warpper">
         <div class="container">
        <div class="search-wrap">
            <div>
                <form id="get_search_form1" action="<?php echo site_url()?>/Welcome/getRecords" method="POST" novalidate="novalidate">
                    <h2> Find a place which feels like yours </h2>
                    <div class="form-group col-sm-12">
                        <label class="control-label"><strong>Location</strong> </label>
                        <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                            <option value="">- SELECT LOCATION -</option>
                          <?php if(count($getLocation)) : ?>
                          <?php foreach($getLocation as $location) : ?>
                          <option value=<?php echo $location->location_id?>><?php echo $location->location?></option>
                          <?php endforeach ; ?>
                          <?php else : ?>
                          <?php endif ; ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="control-label"><strong>Category</strong> </label>
                        <select class="form-control" name="pick_category" id="pick_category" autocomplete="off">
                            <option value="">- SELECT CATEGORY -</option>
                            <?php if(count($getCategory)) : ?>
                            <?php foreach($getCategory as $cat) : ?>
                            <option value=<?php echo $cat->cat_id ?>><?php echo $cat->cat_type?></option>
                            <?php endforeach ; ?>
                            <?php else : ?>
                            <?php endif ; ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="control-label"><strong>Hall</strong> </label>
                        <select class="form-control" name="pick_hall" id="pick_hall" autocomplete="off">
                            <option value="">- SELECT HALL -</option>
                            <?php if(count($getHall)) : ?>
                            <?php foreach($getHall as $hall) : ?>
                            <option value=<?php echo $hall->hall_id ?>><?php echo $hall->name ?></option>
                            <?php endforeach ; ?>
                            <?php else : ?>
                            <?php endif ; ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="control-label"><strong>Capacity</strong> </label>
                        <select class="form-control" name="pick_capacity" id="pick_capacity" autocomplete="off">
                            <option value="">- SELECT CAPACITY -</option>
                            <?php if(count($getHall)) : ?>
                            <?php foreach($getHall as $hall) : ?>
                            <option value=<?php echo $hall->hall_id ?>><?php echo $hall->maxcapacity ?></option>
                            <?php endforeach ; ?>
                            <?php else : ?>
                            <?php endif ; ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="from-group col-md-6 date-select" style="padding-left:0px; padding-right:0px;">
                    <label for="pwd">Date </label>



<div class="date">
            <div class="input-group input-append date" id="dateRangePicker">
                <input type="text" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    

                        </div>
                    
                   <div class="col-md-6 form-group time-select" style="padding-right:0px; padding-left:0px;">
                              <label for="pwd">Start Time</label>
                               <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="col-md-6 adsearch"> <a href="adsearch.html">Advanced Search <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a> </div>
                        <div class="col-md-6">
                            <input class="form-control promo-code" id="promocode" placeholder="Promo Code" type="text"> </div>
                    </div>
                    <input class="form-control" name="service" id="service" value="SD" type="hidden">
                    <!--                        <input type="hidden" class="form-control" name="drive_type" id="drive_type" value="self_driver">
                        <input type="hidden" class="form-control" name="tab" id="tab" value="sd">-->
                    <div class="form-group col-sm-12">
                        <div id="send_enquiry_search"></div>
                        <input class="btn btn-danger pull-right search-btn" value="Search" type="submit"></div>
                </form>
            </div>
            <!--/business class-->
        </div>
         </div>
        <!--/ search area ////////////////////////////////////////////-->
        <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="img-conatiner"><img class="img-responsive" src="<?php echo base_url();?>/assests/images/testimonial-bg.jpg"></div>
                        <div class="details banner-text">
                            <h2>PIBT</h2>
                            <h4>Pioneer Institute of Business &amp; Technology</h4>
                            <h1>LKR 12,500</h1> 
                            <form action="search.html"><div style="float: left;"><input class="btn btn-danger pull-right book-now-btn-landing" value="Book Now" type="submit"> </div></form>
                        </div>
                        
                    </div>
                    <div class="item">
                        <div class="img-conatiner"><img class="img-responsive" src="<?php echo base_url();?>/assests/images/bmich-main.jpg"></div>
                        <div class="details banner-text">
                            <h2>BMICH</h2>
                            <h4>Bandaranaike Memorial International Conference Hall</h4>
                            <h1>LKR 15,000</h1> 
                            <form action="search.html"><div style="float: left;"><input class="btn btn-danger pull-right book-now-btn-landing" value="Book Now" type="submit"> </div></form>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-conatiner"><img class="img-responsive" src="<?php echo base_url();?>/assests/images/royal.jpg"></div>
                        <div class="details banner-text">
                            <h2>Royal College Union</h2>
                            <h4>Skill Center</h4>
                            <h1>LKR 13,500</h1> 
                            <form action="search.html"><div style="float: left;"><input class="btn btn-danger pull-right book-now-btn-landing" value="Book Now" type="submit"> </div></form>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!--end slider ////////////////////////////////////////////////////-->
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
    

 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/incrementing.js"></script>
    <script src="<?php echo base_url();?>/assests/js/jssor.slider-26.5.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>/assests/js/bootstrap-timepicker.js"></script>



<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript">
            $('#timepicker1').timepicker();
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