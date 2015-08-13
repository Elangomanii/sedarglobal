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
                                                <a href="<?php echo base_url();?>SedarCtr/Drapes">Blinds</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/Drapes">Wallcoverings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/ProductSearch">Awnings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/ProductSearch">Pillows</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/ProductSearch">Folding doors</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>SedarCtr/ProductSearch">Accessories</a>
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
    
      <!--slider start-->
      <div class="container-fluid">
         <div class="row">
            <div id="slider1_container" style="position: relative;  top:  0px; left: 0px; width: 1000px; height: 379px; overflow: hidden;">
               <!-- Slides Container -->
               <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 379px; overflow: hidden; ">
                <!--  <div><img u="image" src="<?php echo base_url();?>assets/images/social.jpg" /></div>-->
                  <?php
                  $count=count($getSlider);
                  $first=0;
                  foreach($getSlider as $slider)
                  {
                    $first++;
                    ?>
                    <div>
                    
                     <img u="image" src="<?php echo $path.$slider['SliderImage'] ?>" >
                     <?php if($first!=1) {?>
                     <div class="slide-caption">
                        <h1>
                            <?php 
                            $pieces = explode(" ", $slider['SliderTitle']);
                            for($i=0;$i<sizeof($pieces);$i++)
                            {
                            ?>
                                <span><?php echo $pieces[$i]; ?></span>
                            <?php
                            }
                            ?>
                        </h1>
                        <p><?php echo $slider['SliderDescription']; ?></p>
                        <span class="more">
                        <a href="http://sedarglobal.com/product-search/?field_type_tid[]=16">see more</a>
                        </span>
                     </div>
                     <?php }?>
                  </div>
                  <?php } ?>
                  
               </div>
                <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 10px;
                height: 10px;
                overflow: hidden;
                cursor: pointer;
                /*border: #000 1px solid;*/
                border-radius: 50%;
            }
            .jssorb01 div { background-color: #717171; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #000000; }
            .jssorb01 .av { background-color: #000000; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #000000; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 58px; left: 153px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>               
               <style>
                  .jssora13l,
                  .jssora13r {
                  display: block;
                  position: absolute;
                  /* size of arrow element */
                  width: 40px;
                  height: 40px;
                  cursor: pointer;
                  border-radius: 50%;
                  background: url(<?php echo base_url();?>assets/img/photography/sprite.png) no-repeat;
                  overflow: hidden;
                  }
                  .jssora13r {
                  background-position: -8px -43px
                  }
                  .jssora13l {
                  background-position: -6px -111px
                  }
                  .jssora13r:hover {
                  background-position: -75px -43px
                  }
                  .jssora13l:hover {
                  /*background-position: -74px -111px*/
                  background-position: -74px -111px
                  }
                  .jssora13r.jssora13rdn {
                  background-position: -75px -43px
                  }
                  .jssora13l.jssora13ldn {
                  background-position: -74px -111px
                  }
                  
               </style>
               <!-- Arrow Right -->
               <span u="arrowright" class="jssora13r" style="top: 150px ; right: 159px;">
               </span>
               <!-- Arrow Left -->
               <span u="arrowleft" class="jssora13l" style="top: 100px; right: 159px;">
               </span>
               
               <!--#endregion Arrow Navigator Skin End -->
               <a style="display: none" href="#"></a>
            </div>
            <!--slider End-->
         </div>
      </div>
      
      
      <div class="background-color">
         <div class="container">
            <div class="col-md-offset-1 col-md-10">                
               <div class="content-height">
                  <div class="row">
                     <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="content-center">
                            <div class="row">
                           <img class="" src="<?php echo base_url();?>assets/images/ico-01.png" alt="Generic placeholder image">&nbsp&nbsp
                              <label>Since 1892</label>                           
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="content-center">
                            <div class="row">
                           <img class="" src="<?php echo base_url();?>assets/images/ico-02.png" alt="Generic placeholder image">&nbsp&nbsp
                              <label>18+stores</label>                           
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="content-center">
                            <div class="row">
                           <img class="" src="<?php echo base_url();?>assets/images/ico-03.png" alt="Generic placeholder image">&nbsp&nbsp
                              <label>2500+employees</label>                           
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="content-center">
                            <div class="row">
                           <img class="" src="<?php echo base_url();?>assets/images/ico-04.png" alt="Generic placeholder image">&nbsp&nbsp
                              <label>2m happy homes</label>                           
                            </div>
                        </div>
                     </div>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      

        <section class="tabs">
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        <div class="row">
            <div class="panel">
                <div class="tabset">
                    <a href="#tab1" class="active">Explore by <b>Brand</b></a>
                    <a href="#tab2" >Explore by <b>product</b></a>
                </div>
            </div>
            <!-- tab content -->
            <div class="tab-content">
                <div id="tab1">
                    <div class="region region-brands-tab">
                        <!-- sort list -->
                        <ul class="sort-list">
                            <div class="row">                                                                
                            <div class="col-md-4">
                                <li>   
                                <h2>Our brands have been crafted with every <br />taste in mind</h2>
                                </li>
                            </div>
                            <?php
                                  foreach($tabrands as $brands)
                                    {
                                ?>
                            <div class="col-md-4">
                                <li>
                                <a href="<?php echo base_url('SedarCtr/Brands/'.$brands['id']);?>">
                                    <img class="img-responsive" src="<?php echo $path.$brands['brandImage'] ?>" width="292" height="118" alt="" />
                                    <div class="text">
                                        <img class="img-responsive" src="<?php echo $path.$brands['nameImage'] ?>" width="100" height="26" alt="" />
                                    </div>
                                </a>
                                </li>
                            </div>
                           <?php }?>
                            </div>
                            
                            
                            
                                                      
                            
                            
                        </ul>
                    </div>
                </div>
                <div id="tab2">
                    <div class="region region-product-type-tab">
                        <!-- sort list -->
                        <ul class="sort-list">
                            <div class="row">                                
                            <div class="col-md-4">
                                <div class="tab-bottom">
                                    <li>
                                    <h2>Our brands have been crafted with every  taste in mind</h2>
                                    </li>
                                    </div>
                            </div>
                           <?php
                                 foreach($tabproducts as $products)
                                {
                            ?>
                          <div class="col-md-4">
                                <div class="tab-bottom">
                                    <li>
                                <a href="<?php echo base_url('SedarCtr/ProductSearch/'.$products['id']);?>">
                                    <img class="img-responsive" src="<?php echo $path.$products['image'] ?>" width="292" height="118" alt="" />
                                    <div class="text">
                                        <h3><?php echo$products['name'] ?></h3>
                                    </div></a>
                                    </li>
                                </div>
                            </div>
                          <?php }?>
                            </li>
                            </div>
                          
                            
                                                      
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>            </div>
        </section>        



      
      <div class="background-color">
      <div class="container" id="news">
         <div class="row">
            <div class="col-md-offset-1 col-md-10">
               <div class="news">
                  <h2>NEWS</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container" id="news-head">
          <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <?php foreach($getnews as $news){ ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="center">
                        <a href="<?php echo base_url('SedarCtr/News/'.$news['id']); ?>">
                            <img class="img-responsive" src="<?php echo $path.$news['newsImage'] ?>">
                        </a>
                         <h2><?php echo $news['newsType'] ?></h2>
                         <p><?php echo $news['newsDescription'] ?></p>
                            <span class="see-more">
                            <a href="<?php echo base_url('SedarCtr/News/'.$news['id']); ?>">SEE MORE</a>
                            </span>
                      </div>
                </div>
                <?php } ?>
            </div>
        </div>
      </div>


