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
                        <a class="navbar-brand" href="<?php echo site_url('SedarCtr/index');?>"><img class="img-responsive" src="<?php echo base_url();?>assets/images/Sedarlogo.png"></a>
                     </div>
                     <div id="navbar" class="navbar-collapse collapse">
                        <!--<div class="text-color">-->
                           <ul class="nav navbar-nav navbar-right">
                              <li class="active">
                                 <a href="<?php echo site_url('SedarCtr/index');?>">HOME</a>
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
                                                <a href="<?php echo site_url('SedarCtr/Projects');?>">PROJECTS&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                                                
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">CLIENTS&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
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
                                                <a href="<?php echo site_url('SedarCtr/Brands/'.$NameList['id']);?>"><?php echo $NameList['name']?></a>
                                            </li>
                                            <?php } ?>
                                           
                                        </div>
                                        <div class="col-md-2">
                                            <li class="dropdown-header">EXPLORE <br> BY PRODUCTS</li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Drapes');?>">Drapes</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Blinds</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Wallcoverings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Awnings</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Pillows</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Folding doors</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('SedarCtr/Clients');?>">Accessories</a>
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
                                 <a href="<?php echo site_url('SedarCtr/Stores');?>">STORES</a>
                              </li>
                              <li>
                                 <a href="<?php echo site_url('SedarCtr/ContactUs');?>">CONTACT</a>
                              </li>                              
                              <li>
                                 <a href="<?php echo site_url('SedarCtr/Franchising_Opportunities');?>">FRANCHISING OPPORTUNITIES</a>
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
                                 <a href="<?php echo site_url('SedarCtr/index');?>">English</a>
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
               <a href="<?php echo site_url('SedarCtr/index');?>">Home</a>
            </li>
            <li>Drapes</li>
         </ul>
      </div>
   </div>

<div class="background-color">
    <div class="drapes-content">
<div class="container">
<div class="col-md-offset-1 col-md-11">
    <div class="col-md-8">
        <div class="row">
   <div class="product-view">
      <div class="product-image">
         <div class="image-holder">
            <div class="slide-image">
               <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/thumbnail/11.jpg" alt="image description" title="" />
            </div>
            <div class="slide-image">
               <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/thumbnail/SWR14.jpg" alt="image description" title="" />              
            </div>
            <div class="slide-image">
               <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/thumbnail/SWR17.jpg" alt="image description" title="" />              
            </div>
            <div class="slide-image">
               <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/thumbnail/SWR18.jpg"  alt="image description" title="" />              
            </div>
            
         </div>
      </div>
      <div class="photo-gallery">
         <div class="mask">
            <ul class="photos">
               <li>
                  <a href="#">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/11.jpg"  alt="image description" title="" /></a>
               </li>
               <li>
                  <a href="#">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/SWR14.jpg" alt="image description" title="" /></a>
               </li>
               <li>
                  <a href="#">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/SWR17.jpg"  alt="image description" title="" /></a>
               </li>
               <li>
                  <a href="#">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/Drapes/SWR18.jpg" alt="image description" title="" /></a>
               </li>
            </ul>
         </div>
      </div>
      
      
   </div>
</div>
        </div>
    <div class="right-content">
        <p>SWAROVSKI</p>
        <h3>Drapes</h3>
        <h4>Enveloped in black velvet, Swarovski drapes interior highlights
        additional design capabilities possible, with individually hand applied crystals on
        ten upholstered wall panels. Designs include images of qahwa, Arabic calligraphy,
        silent era entertainer Charlie Chaplin, musical notes, as well as a gramophone, tree, vase,
        candle holder and flowers. Exhibiting its mastery in window treatments, SEDAR also shows off its
        displays of roman blinds and drapes all with a touch of sparkle.</h4>
    </div>
</div>

</div>
</div>
    </div>

   <div class="background-product">
   <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="product-content">
            <p>PRODUCTS</p>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/FAB05.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Drapes</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/roma-Fuji2.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Roman Blinds</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/fujikawa4.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Wooden Venetian Blinds</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/HC2.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Honeycomb Blinds</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/CSB07_0.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Combi Shade Blinds</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/EB01_1.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>EB Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/Fujikawa-Non-woven1.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Non-Woven Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/health4_0.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Health Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/rails_icon.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Drapes Rails</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>      
      </div>
   </div>
   </div>

   <div class="background-color">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="similar-brand">
                <h2>RECENTLY VIEWED PRODUCTS</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/CSB07_0.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Combi Shade Blinds</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/EB01_1.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>EB Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/Fujikawa-Non-woven1.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Non-Woven Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/health4_0.jpg">
                            <h2>FUJIKAWA</h2>
                            <h3>Health Wallcoverings</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
   </div>






