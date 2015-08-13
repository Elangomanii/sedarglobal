<?php
$path="http://localhost/Global_Admin/uploads/";
?>
<?php

$data=explode("/",$_SERVER["REQUEST_URI"]);

foreach($BrandsName as $NameList){
if($NameList['id']==$data[4])
{
    $brandNameOriginal=$NameList['name'];
}
}
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
            <?php foreach($getProduct as $brandsImg){ ?>
            <li><?php echo $brandsImg['productName'];?></li>
            <?php } ?>
         </ul>
      </div>
   </div>

<div class="background-color">
    <div class="drapes-content">
<div class="container">
<div class="col-md-offset-1 col-md-11">
    <div class="col-md-8">
        <div class="row">
            <?php foreach($getProduct as $brandsImg){
                $image=explode(",",$brandsImg['productMultiImage']);
                ?>
   <div class="product-view">
      <div class="product-image">
         <div class="image-holder">
            <?php for($i=0;$i<count($image);$i++){ ?>
            
          <div class="slide-image">
               <img class="img-responsive" src="<?php echo $path.$image[$i];?>" alt="image description" title="" />
            </div>
             <?php } ?>
         </div>
      </div>
     <div class="photo-gallery">
         <div class="mask">
            <ul class="photos">
                <?php  for($i=0;$i<count($image);$i++){?>
              <li>
                  <a href="#">
                  <img class="img-responsive"  src="<?php echo $path.$image[$i];?>"  alt="image description" title="" /></a>
               </li>
                 <?php } ?>
            </ul>
         </div>
      </div>
      
      
   </div>
  
</div>
        </div>
    <div class="right-content">
        <p><?php echo $brandNameOriginal; ?></p>
        <h3><?php echo $brandsImg['productName'];?></h3>
        <h4><?php echo $brandsImg['productDescription'];?></h4>
    </div>
     <?php } ?>
</div>

</div>
</div>
    </div>

   <div class="background-product">
   <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="product-content">
            <p>MORE PRODUCTS</p>
            <div class="row">
                <?php foreach($getProductDetail as $images){

                    if($brandsImg['id']!=$images['id']){

                ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="<?php echo base_url('SedarCtr/Product/'.$images['brandId'].'/'.$images['id'])?>">
                            <img class="img-responsive" src="<?php echo $path.$images['productImage'];?>">
                            <h2><a href="<?php echo base_url('SedarCtr/Brands/'.$images['brandId'])?>"><?php echo $brandNameOriginal; ?></h2></a>
                            <h3><?php echo $images['productName'];?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }}?>
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
                    <?php
                        
                        //$recentlyViewedData[]=$this->session->userdata('recentlyViewedData');
                        //echo "<pre>";
                        //print_r($recentlyViewedData);
                        //echo "</pre>";
                        //$length = count($recentlyViewedData);
                        //    for ($i = 0; $i < $length; $i++){
                        //  echo $recentlyViewedData[$i];
                        //    }
//for ($i = 0 ; $i < count($recentlyViewedData); $i++) {
//
//                        $brand=$recentlyViewedData[$i];
//                        $proName=$recentlyViewedData[$i];
//                        echo $brand;
//                        echo $proName;
//
//  } 
                        

                        //
                        //$countValue=count($recentlyViewedData);
                        //for($i=$countValue;$countValue>0;$i--){
                        //$brand=$recentlyViewedData[$i]['[brandId'];
                        //$proName=$recentlyViewedData[$i]['imageId'];
                        //$getProductNew=$this->SedarModel->getProductName($brand,$proName);
                        //}
                        //print_r($getProductNew);
                    ?>
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
            </div>
            </div>
        </div>
    </div>
   </div>






