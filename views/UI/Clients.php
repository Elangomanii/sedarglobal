<?php
$path="http://localhost/Global_Admin/uploads/";
?>
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
                              <li class="active">
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
                              <li>
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
            <li>Clients</li>
         </ul>
      </div>
   </div>
   <div class="background-color">
   <div class="header-cont">
      <div class="container">
        <?php foreach($clientDetails as $Details){?>
         <div class="col-md-offset-1 col-md-6">
            <h1><?php echo $Details['title']?></h1>
         </div>
         <?php } ?> 
      </div>
      <div class="container">
         <div class="col-md-offset-1 col-md-6">
            <h3><?php echo $Details['subtitle']?></h3>
         </div>
      </div>
      <div class="container">
         <div class="col-md-offset-1 col-md-5">
            <p><?php echo $Details['description']?></p>
            <hr>
         </div>
         </div>
        
      
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="img-content">
                 <div class="row">
                    <?php foreach($Clients as $row){?>
                    <div class="col-md-3">
                        <img class="img-responsive" src="<?php echo $path.$row['aboutClientImg']?>">
                        <hr>
                            <h3><?php echo $row['aboutClientTitle'] ?></h3>
                    </div>
                    <?php }?>
                 </div>
            </div>
         </div>
      </div>
</div>
   
   
  <!-- <img class="lazy" data-original="<?php echo base_url();?>upload/1_a361ae06d1.jpg" src="<?php echo base_url();?>upload/1_a361ae06d1.jpg" alt="product1" />-->
<!--   <div class="container">
      <div class="col-md-offset-1 col-md-10">
         <form role="form">
            <div class="row">
               <div class="col-md-offset-2 col-md-5">
                  <label> Register For Franchising Opportunities</label>                  
                  <div class="form-group">
                     <label for="">Name<span class="star-color"> *</span></label>
                     <input type="text" class="form-control input-large" placeholder="Enter Name" id="myId1">
                  </div>
                  <div class="form-group">
                     <label>Mobile<span class="star-color"> *</span></label>
                     <input type="text" class="form-control input-large" placeholder="Enter Mobile Number" id="myId2">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control input-large" placeholder="Enter Your Email" id="myId3">
                  </div>
               </div>
               <div class=" col-md-4">
                  <label>&nbsp</label>                 
                  <div class="form-group">
                     <label for="">About</label>
                     <textarea class="form-control TextContent" placeholder="Please send us more details about your enquiery"  rows="9" id="myId4"></textarea>
                  </div>
                  <div class="form-group">
                     <input id="edit-submit" class="form-submit" type="submit" value="Submit" name="op">
                  </div>
               </div>
               </div>
         </form>
         
      </div>
   </div>-->

