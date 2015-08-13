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
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <li class="dropdown-header">EXPLORE <br> BY PRODUCTS</li>
                                            <?php foreach($productsName as $name){?>
                                            <li>
                                                <a href="<?php echo base_url('SedarCtr/ProductSearch/'.$name['id']);?>"><?php echo $name['name']?></a>
                                            </li>
                                            <?php } ?>
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
            <li>Projects</li>
         </ul>
      </div>
   </div>
   
   
   <div class="background-color">
   <div class="header-cont">
      <div class="container">
      <?php foreach($ProjectDetails as $proDetails){?>
         <div class="col-md-offset-1 col-md-6">
            <h1><?php echo $proDetails['aboutTitle']?></h1>
         </div>
      </div>
      <?php } ?> 
   </div>
   
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <div class="col-md-6">
                <div class="row">
            <div class="pro-contact">
                <h2><?php echo $proDetails['aboutSubTitle']?></h2>
                <p><?php echo $proDetails['aboutDescription']?></p>
            </div>
            </div>
            </div>
                     
         </div>
      </div>
     
   </div>
   
   
   <div class="background-color">
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <hr>               
         </div>
      </div>
      <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="project-bottom">
            
            <div class="row">
                <?php foreach($Projects as $row){?>
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" data-toggle="modal" data-target="#myModal" src="<?php echo $path.$row['projectImage']?>">                  
                  <h3><?php echo $row['projectImgTitle'] ?></h3>
                  </div>
                  </div>
               </div>
               <?php }?>
            </div>
            
         
            </div>
      </div>
   </div>
  </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="row">
                <div class="col-md-8">
            <div class="modal-body">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="" src="<?php echo base_url();?>assets/images/projects/Qatar-pro2.jpg">
                        </div>
                        <div class="item">
                            <img class="" src="<?php echo base_url();?>assets/images/projects/Qatar-pro3.jpg">
                        </div>
                        <div class="item">
                            <img class="" src="<?php echo base_url();?>assets/images/projects/newew.jpg">
                        </div>
                    </div>
                </div>
            </div>
            </div>
                <div class="col-md-3">
                    <p>Doha Sports City</p>
                </div>
            </div>
        </div>
    </div>
  </div>   
   