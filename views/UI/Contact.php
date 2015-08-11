<body>
    <div class="container-fluid">
         <div class="row">
            <div class="header">
               <nav class="navbar navbar-inverse navbar-fixed-top ">
                  <div class="container">
                     <div class="navbar-header">
                        <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url();?>SedarCtr/index"><img class="img-responsive" src="<?php echo base_url();?>assets/images/Sedarlogo.png"></a>
                     </div>
                     <div id="navbar" class="navbar-collapse collapse">
                        <!--<div class="text-color">-->
                           <ul class="nav navbar-nav navbar-right">
                              <li class="">
                                 <a href="<?php echo base_url();?>SedarCtr/index">HOME</a>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                                    ABOUT
                                </a>
                                <ul id="" class="dropdown-menu abt-dropdown">                                    
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-hide">
                                    <li>
                                        <p>ABOUT</p>                                        
                                    </li>
                                    </div>
                                    </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="About-hide">
                                            <h1>Our brands have been crafted with every<br> taste in mind</h1>
                                            </div>
                                            <div class="download">
                                                <a href="">Download Company Profile&nbsp&nbsp<span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="about-hover">
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Projects">PROJECTS&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                                                
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">CLIENTS&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                                            </li>
                                            </div>
                                        </div>
                                        </div>
                                </ul>
                              </li>

                              <li class="dropdown">
                                <a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                                    PRODUCTS
                                </a>
                                <ul class="dropdown-menu">                                    
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-hide">
                                    <li>
                                        <p>PRODUCTS</p>                                        
                                    </li>
                                    </div>
                                    </div>
                                        </div>
                                    <div class="row">
                                        <div class="product-link">
                                        <div class="col-md-6">
                                            <div class="brand-hide">
                                            <h1>Our brands have been<br>crafted with every<br> taste in mind</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <li class="dropdown-header">EXPLORE<br> BY BRAND</li>
                                            <?php foreach($BrandsName as $NameList){?>
                                            <li>
                                                <a href="<?php echo base_url('SedarCtr/Brands/'.$NameList['id']);?>"><?php echo $NameList['name']?></a>
                                            </li>
                                            <?php } ?>
                                            <!--<li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Antartica">Antartica</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Denhagg">DenHaag</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Ecosafari">Eco Safari</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Fujikawa">Fujikawa</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Marcopolo">Marco Polo</a></li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/marina">Marina</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Somfy">Somfy</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Swarovski">Swarovski</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Brands/Yorkweave">YorkWeave</a>
                                            </li>-->
                                        </div>
                                        <div class="col-md-2">
                                            <li class="dropdown-header">EXPLORE <br> BY PRODUCTS</li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Drapes">Drapes</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Blinds</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Wallcoverings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Awnings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Pillows</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Folding doors</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Clients">Accessories</a>
                                            </li>
                                        </div>
                                        <div class="col-md-2">
                                            <li class="dropdown-header">PRODUCT SEARCH</li>
                                            <li id="pro-hide" class="dropdown-header">Find a product through our comprehensive product search tool.</li>
                                            <li>
                                                <a href="#">Try it now&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                                            </li>
                                        </div>
                                    </div>
                                        </div>
                                </ul>
                              </li>
                            
                            <li>
                                 <a href="<?php echo base_url();?>SedarCtr/Stores">STORES</a>
                              </li>
                              <li class="active">
                                 <a href="<?php echo base_url();?>SedarCtr/ContactUs">CONTACT</a>
                              </li>                              
                              <li>
                                 <a href="<?php echo base_url();?>SedarCtr/Franchising_Opportunities">FRANCHISING OPPORTUNITIES</a>
                              </li>

                              <li class="dropdown">
                                <a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                                    <span class="glyphicon glyphicon-search"></span>

                                </a>
                                <ul class="dropdown-menu" id="change">                                    
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-hide">
                                    <li>
                                        <p>SEARCH</p>                                        
                                    </li>
                                    </div>
                                    </div>
                                        </div>
                                    <div class="row">
                                        <div class="product-link">
                                        <div class="col-md-6">
                                            <div class="brand-search">
                                            <h1>Type in a query below and press enter.</h1>
                                            </div>
                                           </div>                                       
                                    </div>
                                        </div>                                    
                                    <div class="row">
                                        <div class="col-md-11">
                                            <form class="custom-search-form" action="" method="post">
                                                <div class="input-group" id="input-text">
                                                    <span class="input-group-btn">
                                                      <button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                                    </span>
                                                  <input type="text" class="form-control input-placeholder" id="place" placeholder="eg.Marco Polo Curtains" aria-describedby="sizing-addon1">
                                                </div>
                                            </form>                                            
                                                <p id="notes">Looking for a specfic product? Try our comprehensive product search tool.<a class="link" href="http://www.sedarglobal.com/product-search"> Try it now <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></p>
                                            </div>
                                    </div>
                                </ul>
                              </li>
                              
                              <li class="">
                                 <a href="<?php echo base_url();?>SedarCtr/index">English</a>
                              </li>                              
                              
                              
                        </div>
                        </ul>
                  </div>
            </div>
            </nav>
         </div>
      </div>
    
    
    
   <div class="breadcrumbs">
      <div class="container">
         <ul>
            <li>
               <a href="<?php echo base_url();?>SedarCtr/index">Home</a>
            </li>
            <li>Contact</li>
         </ul>
      </div>
   </div>
   
   
   <div class="background-color">
   <div class="header-cont">
      <div class="container">
         <div class="col-md-offset-1 col-md-6">
            <h1>Contact</h1>
         </div>
      </div>
   </div>
   
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <div class="col-md-6">
                <div class="row">
            <div class="pro-contact">
                <h2>Get in touch with us. </h2>
                <p>For General Enquiry P.O. Box : 6879 <br>Telephone : +9716 533 22 55 Fax: <br>+9716 533 83 23 Email: <br>
                info@sedar.ae Projects: United Arab <br>Emirates Tel: +9716 533 22 55 Fax: <br>+9716 533 83 23 Email: <br>projects@sedar.ae Saudi Arabia Tel: <br>+966-11-4535444 Fax: <br>+966-11-4539911 Email: <br>ksaprojects@sedarksa.com </p>                
            </div>
            </div>
            </div>
            <div class="col-md-6">                
                <div class="row">
                    <div class="contact-map">
                    <div id='location-canvas' style='width:100%;height:250px;'></div>
                </div>
                </div> 
            </div>
                     
         </div>
      </div>   
   </div>

   
<div class="background-product">
   <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="feedback">
        <h3><a href="<?php echo base_url();?>SedarCtr/Feedback">FEEDBACK</a></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                    <div class="pro-contact">
                        <h2>We'd love to hear your comments</h2>
                        <p>Kindly use the form below to send us your feedback or
                        report any problems you have experienced on our website.
                        We read all feedback carefully, and we try to respond to all customers promptly.</p>
                    </div>
            </div>
        
        
         <form role="form">
               <div class="col-md-4">           
                  <div class="form-group">
                     <label id="feed-detail">Name</label>
                     <input type="text" class="form-control input-large" placeholder="Enter Your Name" id="myId1">
                  </div>
                  <div class="form-group">
                     <label id="feed-detail">Email</label>
                     <input type="text" class="form-control input-large" placeholder="Enter Email Address " id="myId3">
                  </div>
                  <div class="form-group">
                     <label id="feed-detail">Phone</label>
                     <input type="text" class="form-control input-large" placeholder="Enter Your Phone Number" id="myId2">
                  </div>                  
               </div>
               <div class=" col-md-4">
                <label id="feed-detail">Reason For Feedback</label>
                <select id="edit-submitted-reason" name="submitted[reason]" class="form-select select3" style="width: 90%;">
                    <option value="" selected="selected">- None -</option>
                    <option value="reason1">Product Measurements</option>
                    <option value="reason2">Product Inquiry</option>
                    <option value="reason3">Shipping &amp; Deliveries</option>
                    <option value="reason4">Returns &amp; Refunds</option>
                    <option value="reason5">Others</option>
                </select>             
                  <div class="form-group">
                     <label id="feed-detail">Feedback</label>
                     <textarea class="form-control TextContent" placeholder="Type your comments here. We'd d love to hear from you!"  rows="5" id="myId4"></textarea>
                  </div>
                  <div class="form-group">
                     <input id="edit-submit" class="form-submit" type="submit" value="Submit" name="op">
                  </div>
               </div>
         </form>
         </div>
         </div>
      </div>
   </div>   
   

   
    
      <script src="http://maps.googleapis.com/maps/api/js"></script>
      <script>
         function initialize() {
            var mapOptions = {
                zoom: 9,
                center: new google.maps.LatLng(25.2048,55.2708),
                mapTypeId: google.maps.MapTypeId.TERRAIN
             };
         
             var map = new google.maps.Map(document.getElementById('location-canvas'),
         mapOptions);
         
            var marker = new google.maps.Marker({
                map: map,
                draggable: false,
                position: new google.maps.LatLng(25.2048,55.2708)
            });
         }
         
         google.maps.event.addDomListener(window, 'resize', initialize);
         google.maps.event.addDomListener(window, 'load', initialize)
         
      </script>
      
      
   <script>
      $(function(){
      
      $('#myId2').data('holder',$('#myId2').attr('placeholder'));
      $('#myId2').focusin(function(){
          $(this).attr('placeholder','');
      });
      $('#myId2').focusout(function(){
          $(this).attr('placeholder',$(this).data('holder'));
      });
      
      $('#myId3').data('holder',$('#myId3').attr('placeholder'));
      $('#myId3').focusin(function(){
          $(this).attr('placeholder','');
      });
      $('#myId3').focusout(function(){
          $(this).attr('placeholder',$(this).data('holder'));
      });
      
      $('#myId4').data('holder',$('#myId4').attr('placeholder'));
      $('#myId4').focusin(function(){
          $(this).attr('placeholder','');
      });
      $('#myId4').focusout(function(){
          $(this).attr('placeholder',$(this).data('holder'));
      });
      
      
      })
   </script>      
   