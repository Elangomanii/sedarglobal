<style>
   .polaroid {
border: 15px solid black;
 
}
.borderalign {
    padding-left:15px;
    left:20px;
    bottom:15px
}
.alignright{
    left:20px;
}
    
</style>
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
                            
                            <li class="active">
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
            <li>Stores</li>
         </ul>
      </div>
   </div>
   <div class="background-color">
   <div class="header-cont">
      <div class="container">
         <div class="col-md-offset-1 col-md-6">
            <h1>Stores</h1>
         </div>
      </div>
   </div>
   </div>
   
<!--   <div class="map-background">
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <p>FIND US ON THE MAP</p>
            <div id='location-canvas' style='width:100%;height:520px;'></div>
         </div>
      </div>
   </div>-->
   
   <div class="background-color">
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <div class="tool-bar">
            <form class="ctools-auto-submit-full-form" action="" method="get" id="views-exposed-form-stores-list" accept-charset="UTF-8">
               <div class="col-md-2">
                  <div class="row">
               <p>FILTER BY</p>
               </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
               <div class="form-item form-type-select form-item-field-address-info-country-selective">
                  <select class="select2 form-select country" id="edit-field-address-info-country-selective" name="field_address_info_country_selective">
                        <option>Select</option>
                        <?php foreach($country as $row){ ?>
                     <option value="<?php echo $row['CountryCode']?>"><?php echo $row['CountryName']?></option>
                    
                     <?php }?>
                  </select>
               </div>
               </div>
               </div>
                <div class="col-md-3">
                  <div class="row">
               <div class="form-item form-type-select form-item-field-address-info-locality-selective">
                  <select class="select2 form-select state" id="edit-field-address-info-locality-selective" name="field_address_info_locality_selective" style="width: 100%;">
                      <option>Kottakuppam</option>
                      <option>Barkathnager</option>
                        <option>Mumbai</option>
                  </select>
               </div>
               </div>
                </div>
            </form>            
            </div>           
         </div>
      </div>
      
      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <hr>               
         </div>
      </div>
      
   <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="project-bottom">
            
            <?php
           $path ='http://localhost/Global_Admin/uploads/';
            $resultcont=0;
            $count=0;
             if(isset($getStory))
            {
            foreach ($getStory as $row)
            {
                
            $getimage  = $row['textImage'];
            if(!empty($getimage))
            {
             $resultcont = $count + count($getimage);
            }
               $count++;
            }
            }
            else{
              
               foreach ($getfooter as $row)
            {
                
            $getimage  = $row['textImage'];
            if(!empty($getimage))
            {
             $resultcont = $count + count($getimage);
            }
               $count++;
            }  
                
                
            }
            ?>
            <p class="getimagecounter"><?php if(isset($getStory)){ echo $resultcont; } else { echo $resultcont; }?> stores </p>
            <div class="row storeimage">
            <?php
            if(isset($getStory))
            {
            foreach ($getStory as $row)
            
                 {
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="project" id="viewAdd" onclick="getAddress(<?php echo $row['id'];?>);" >
                                <img class="img-responsive" id="storeImg" onClick="getvalueModel($(this));" data-toggle="modal" data-target="#myModal" src="<?php echo $row['textImage'];?>">
                                <h3><?php echo $row['addresstitle']?></h3>
                            </div>
                        </div>
                    </div>
            <?php } } else { foreach ($getfooter as $row) {?>
              
                <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="project">
                                <img class="img-responsive" onClick="getvalueModel($(this));" data-toggle="modal" data-target="#myModal" src="<?php echo $row['textImage'];?>">
                                <h3><?php echo $row['addresstitle']?></h3>
                            </div>
                        </div>
                    </div>
              <?php } }?>
               <!--<div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/MD2.jpg">
                  <h3>Madinah - KSA</h3>
                  </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/JD.jpg">
                  <h3>Jeddah - KSA</h3>
                  </div>
                  </div>
               </div>
            </div>-->
         
<!--            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/KK_0.jpg">
                  <h3>King Abdullah Road - KSA</h3>
                  </div>
                  </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/Al-thal-Riyadh.png">
                  <h3>Al Tahliah - KSA</h3>
                  </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/AK.jpg">
                  <h3>Al Khobar - KSA</h3>
                  </div>
                  </div>
               </div>
            </div>-->
         
<!--            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/CA_0.jpg">
                  <h3>Abu Dhabi Corniche Street - UAE</h3>
                  </div>
                  </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/KA.jpg">
                  <h3>Khalidiya - UAE</h3>
                  </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/CA_0.jpg">
                  <h3>Sheikh Zayed Road - UAE</h3>
                  </div>
                   </div>
               </div>
            </div>-->
         
<!--            <div class="row">
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/wqwq.png">
                  <h3>Al Dhiyafa Road - UAE</h3>
                  </div>
                   </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/MR_0.jpg">
                  <h3>Muraqqabat Road - UAE</h3>
                  </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/SHQ_0.jpg">
                  <h3>Sedar Head Office - UAE</h3>
                  </div>
                   </div>
               </div>
            </div>-->
         
       <!--     <div class="row">
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/BCSS_0.jpg">
                  <h3>Buhairah Corniche - UAE</h3>
                  </div>
                   </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/MR_0.jpg">
                  <h3>Tourist Club Road - UAE</h3>
                  </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/SHQ_0.jpg">
                  <h3>Al Ain - UAE</h3>
                  </div>
                   </div>
               </div>
            </div>-->

         
<!--            <div class="row">
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/BCSS_0.jpg">
                  <h3>Buhairah Corniche - UAE</h3>
                  </div>
                   </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/TCR.jpg">
                  <h3>Tourist Club Road - UAE</h3>
                  </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/ALA.jpg">
                  <h3>Al Ain - UAE</h3>
                  </div>
                   </div>
               </div>
            </div>
         
            <div class="row">
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/MSCT_0.jpg">
                  <h3>OMAN</h3>
                  </div>
                   </div>
               </div>               
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/DHA_0.jpg">
                  <h3>QATAR</h3>
                  </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="row">
                  <div class="project">
                  <img class="img-responsive" src="<?php echo base_url();?>assets/images/stores/bahrain_0.jpg">
                  <h3>BAHRAIN</h3>
                  </div>
                  </div>
               </div>-->
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
                    </ol>
                    <p class="address">Doha Sports City</p>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="" id="img1" src="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
                <div class="col-md-6 borderalign polaroid">
                   <div class="row ">
                     <iframe class="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="389" height="300" src="https://maps.google.com/maps?hl=en&q=sedar , Abu Dhabi Comiche&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed"></iframe>
                   </div>
                </div>
                <div class="col-md-6 alignright">
                   <div class="">
                    
                    <h4 id="addressFirst">Abu Dhabi Comiche Street - UAE</h4>
                    <p>Abu Dhabi Comiche</p>
                    <p>Opp.Shertan </p>
                    <p>Abu Dhabi,United Arab Emitrates</p>
                    <p>Tel: +97126768899</p>
                    <p>Fax: +97126768822</p>
                   
                   </div>
                   <a class="navbar-brand" target="_blank" href="https://www.google.co.in/maps/place/@24.4993619,54.3661573,17z/data=!3m1!4b1!4m2!3m1!1s0x3e5e668aaa46a9e3:0xf1ae4044f59dc34a"><img class="img-responsive"  src="<?php echo base_url();?>assets/images/glogo.png" width="50px" height="50px" ><p style="color:#000;">Google Map</p></a>
                </div>
            </div>
        </div>
    </div>
  </div>  
   
   
<!--      <script src="http://maps.googleapis.com/maps/api/js"></script>
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
         
      </script>-->
           
    <script>
     
        function getAddress(id){
            
            $.ajax({
            type:'post',
            url: "<?=site_url('SedarCtr/getAddress');?>",
            data:{id:id},
            dataType:'json',
            success: function (json){
                $("#addressFirst").text(json[0].address1);
            }
        });
        }
        function getvalueModel(catched)
        {
        var sendmodel = $(catched).attr('src');
        sendmodel=sendmodel.split('/');
        var need = sendmodel.length-1;
        var store =  sendmodel[need];
        var imgPath1= [];
        $.ajax({
            type:'post',
            url: "<?=site_url('SedarCtr/getFancybox');?>",
            data:{store:store},
            dataType:'json',
            success: function (json){
            var countJson=json.length;
            var imageValue="";
            for(var j=0;j<countJson;j++){
                imageValueNew=json[j].image;    
                imageValue=imageValueNew+','+imageValue; 
            }
            
             //alert(imageValue);
            
            var newImageValue=imageValue.split(",");
            $('.carousel-indicators').empty();
            $('.carousel-inner').empty();
            var lengthValue=newImageValue.length;
            var imagePath=new Array();
            for(var i=0;i<lengthValue;i++){
            image=newImageValue[i];
            if (image!="") {
                imagePath.push('http://localhost/Global_Admin/uploads/'+image);
            }
            }

            var lengthValueNew=imagePath.length;
            for(var i=0;i<lengthValueNew;i++){
            image=imagePath[i];
            if (i==0) {
                $('.carousel-indicators').append('<li data-target="#myCarousel" data-slide-to="'+i+'" class="active"></li>');
                $('.carousel-inner').append('<div class="item active"><img class="" id="img'+i+'" src="'+image+'"></div>');
            }else{
                $('.carousel-indicators').append('<li data-target="#myCarousel" data-slide-to="'+i+'" class=""></li>');
                $('.carousel-inner').append('<div class="item"><img class="" id="img'+i+'" src="'+image+'"></div>');
            }
            }
            
           var address=json[0].addresstitle;
            var  address1=json[0].address1;    
            var  address2=json[0].address2;    
           var fax=json[0].fax;    
           var phone=json[0].phone;
           alert(address);
           $('.address').text(address);
           $('.address1').text(address1);
           $('.address2').text(address2);
           $('.phone').text(fax);
           $('.fax').text(phone);

           
        }
        });  
    }

        
        
    $('.country').change(function() { 
    var codecountry=$(this).find("option:selected").val();
    //alert(codecountry);
    $.ajax({
	
	type:'post',
	url: "<?=site_url('SedarCtr/findState');?>",
	data:{codecountry:codecountry},
	success: function (response){
	
	$('.state').html(response);
	}
	
    });
   }); 
        
    $('.country').change(function() { 
    var codestore=$(this).find("option:selected").val();
    alert(codestore);
    $.ajax({
	
	type:'post',
	url: "<?=site_url('SedarCtr/findStore');?>",
	data:{codestore:codestore},
	success: function (response){
	
	$('.storeimage').html(response);
	}
	
    });
   });    
       
       
    $('.country').change(function() { 
    var getimagecount=$(this).find("option:selected").val();
    alert(getimagecount);
    $.ajax({
	
	type:'post',
	url: "<?=site_url('SedarCtr/findStorecount');?>",
	data:{getimagecount:getimagecount},
	success: function (response){
	
	$('.getimagecounter').html(response);
	}
	
    });
   });    
        
        
    </script>  
      <script>
        $(document).ready(function(){
  $('#storeImg').on('shown.bs.modal', function(){
    google.maps.event.trigger(map, 'resize');
    map.setCenter(new google.maps.LatLng(-33.8688, 151.2195));
  });
});
      </script>
      
      
    <script>
      $(function(){
      
      $('#myId1').data('holder',$('#myId1').attr('placeholder'));
      $('#myId1').focusin(function(){
          $(this).attr('placeholder','');
      });
      $('#myId1').focusout(function(){
          $(this).attr('placeholder',$(this).data('holder'));
      });
      
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