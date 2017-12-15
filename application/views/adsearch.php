<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Advanced Search</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/template.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap-timepicker.css">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />


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
    <div class="container">
        <div class="siderbar col-md-4 col-sm-4 col-xs-4">
           <div class="search-advanced clearfix">
               <h3>Find a Space which feels like yours</h3>
            <div class="form-group col-md-12 col-sm-12 col-xs-12">

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
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
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
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
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

 

            <div class="form-group col-md-12 col-sm-12 col-xs-12">
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
            
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
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
            <input id="timepicker2" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
                        </div>
                    </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <label class="control-label"><strong>Duration</strong> </label>
                <select class="form-control" name="pick_location" id="pick_location" autocomplete="off">
                                <option value="">- SELECT DURATION -</option>
                            <option value="1">2 Hours</option>
                            <option value="2">3 Hours</option>
                            <option value="2">4 Hours</option>
                        </select>
            </div>
</div>
                          <div class="search-filter-heading clearfix">
                          <div class="pull-left col-md-6 col-sm-6 col-xs-6">
                              <i class="fa fa-sliders" aria-hidden="true"></i> Advance Filter
                          </div>
                          
                                        <div class="pull-right col-md-6 col-sm-6 col-xs-6">
                              <i class="fa fa-refresh" aria-hidden="true"></i> Reset
                          </div>
           
            </div>
            <div class="advanced-search-filters clearfix">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label"><strong>Price</strong> </label>
                    <div class="price-filter col-md-12">
                        <input id="ex1" type="text" class="span2" value="" data-slider-min="1000" data-slider-max="50000" data-slider-step="5" data-slider-value="[250,450]" /><b class="pull-left">1000 Rs</b> <b class="pull-right">50,000 Rs</b>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label"><strong>Capacity</strong> </label>
                    <div class="capacity-filter col-md-12">


                        <input id="ex2" type="text" class="span2" value="" data-slider-min="100" data-slider-max="1500" data-slider-step="5" data-slider-value="[250,450]" /><b class="pull-left">100</b> <b class="pull-right">1500</b>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label"><strong>Rating</strong> </label>
                    <div class="rating-filter col-md-12">

                        <input id="ex3" type="text" class="span2" value="" data-slider-min="1" data-slider-max="5" data-slider-step="5" data-slider-value="[250,450]" /><b class="pull-left">1</b> <b class="pull-right">5</b>


                    </div>
                </div>
            </div>
        </div>
        <div class="results col-md-8 col-sm-8 col-xs-8">
            <div class="sort clearfix">
                <div class="pull-left col-md-5 col-sm-5 col-xs-5 title">
                    <h2>2 Halls Available</h2>
                </div>
                 <div class="pull-right col-md-7 col-sm-7 col-xs-7 sort-details">
                    <ul class="clearfix pull-right">
                        <li>Sort By</li>
                        <li><a href="">Price <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a></li>                       
                        <li><a href="">Capacity <i class="fa fa-sort-amount-desc" aria-hidden="true"></i> </a></li>
                        <li><a href="">Rating <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>   </a></li>                      
                    </ul> 
                </div>
            </div>
        
        <div class="search-result-container">
           <div class="options clearfix">
            <div class="image col-md-5 col-sm-5 col-xs-5">
                <img src="<?php echo base_url();?>assests/images/bmich1.JPG">
              
            </div>
            <div class="discription col-md-7 col-sm-7 col-xs-7">
                <h2>BMICH</h2>
                <p>Bandaranaike Memorial International Conference Hall</p>
                <div class="facilities">
                   <div class="col-md-5 col-sm-5 col-xs-5 pull-left">
                    <ul class="clearfix">
                        <li><i class="fa fa-podcast" aria-hidden="true"></i> Air Conditioned</li>
                        <li><i class="fa fa-bandcamp" aria-hidden="true"></i> Pool</li>
                        <li><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i> Free Parking</li>
                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Free Wi-Fi</li>

                    </ul>
                                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>

                    </div>
                    <div class="pull-right col-md-7 col-sm-7 col-xs-7">
                        <ul class="clearfix">
                            <li>LKR <span>15,000</span></li>
                            <li class="yellow-box">Full Day</li>
                        </ul>
                        
                        <form action="<?php echo site_url()?>/search_controller/index"><input class="btn btn-danger pull-right btn-red" value="BOOK NOW" type="submit"></form>
                    </div> 
                  

                </div>
            </div>
            </div>
            
                       <div class="options clearfix">
            <div class="image col-md-5 col-sm-5 col-xs-5">
                <img src="<?php echo base_url();?>assests/images/pibt.jpg">
              
            </div>
            <div class="discription col-md-7 col-sm-7 col-xs-7">
                <h2>PIBT</h2>
                <p>Pioneer Institute of Business &amp; Technology</p>
                <div class="facilities">
                   <div class="col-md-5 col-sm-5 col-xs-5 pull-left">
                    <ul class="clearfix">
                        <li><i class="fa fa-podcast" aria-hidden="true"></i> Air Conditioned</li>
                        <li><i class="fa fa-bandcamp" aria-hidden="true"></i> Pool</li>
                        <li><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i> Free Parking</li>
                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Free Wi-Fi</li>

                    </ul>
                                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>

                    </div>
                    <div class="pull-right col-md-7 col-sm-7 col-xs-7">
                        <ul class="clearfix">
                            <li>LKR <span>12,500</span></li>
                            <li class="yellow-box">Full Day</li>
                        </ul>
                        
                        <form action="<?php echo site_url()?>/search_controller/index"> <input class="btn btn-danger pull-right btn-red" value="BOOK NOW" type="submit"></form>
                    </div> 
                  

                </div>
            </div>
            </div>
            
                 <div class="options clearfix">
            <div class="image col-md-5 col-sm-5 col-xs-5">
                <img src="<?php echo base_url();?>assests/images/royal-union.jpg">
              
            </div>
            <div class="discription col-md-7 col-sm-7 col-xs-7">
                <h2>Royal College Union</h2>
                <p>Skill Center</p>
                <div class="facilities">
                   <div class="col-md-5 col-sm-5 col-xs-5 pull-left">
                    <ul class="clearfix">
                        <li><i class="fa fa-podcast" aria-hidden="true"></i> Air Conditioned</li>
                        <li><i class="fa fa-bandcamp" aria-hidden="true"></i> Pool</li>
                        <li><i class="fa fa-coffee" aria-hidden="true"></i> Breakfast</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i> Free Parking</li>
                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Free Wi-Fi</li>

                    </ul>
                                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>

                    </div>
                    <div class="pull-right col-md-7 col-sm-7 col-xs-7">
                        <ul class="clearfix">
                            <li>LKR <span>13,500</span></li>
                            <li class="yellow-box">Full Day</li>
                        </ul>
                        
                        <form action="<?php echo site_url()?>/search_controller/index"> <input class="btn btn-danger pull-right btn-red" value="BOOK NOW" type="submit"></form>
                    </div> 
                  

                </div>
            </div>
            </div>
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
  
    <script src="<?php echo base_url();?>/assests/js/incrementing.js"></script>
    <script src="<?php echo base_url();?>/assests/js/bootstrap-slider.js"></script>
    <script src="<?php echo base_url();?>/assests/js/jssor.slider-26.5.2.min.js" type="text/javascript"></script>
    
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/bootstrap-timepicker.js"></script>
         <script type="text/javascript">
            $('#timepicker2').timepicker();
        </script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });


        // Without JQuery
        var slider = new Slider('#ex2', {});



        // Without JQuery
        var slider = new Slider('#ex1', {});

        // Without JQuery
        var slider = new Slider('#ex3', {});
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