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
            <li>Fujikawa</li>
        </ul>
    </div>
   </div>
   <div class="background-product">
    <div class="fujikawa-cont">
        <div class="container">
            <div class="col-md-offset-1 col-md-11">
                <h1>PRODUCT SEARCH</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-offset-1 col-md-12">
                <div class="col-md-12">
                    <div class="row">
                        <div class="filters">
                            <form class="custom-filters" action="#">
                                <div class="holder">
                                   <div class="cell">
                                      <label>BRAND</label>
                                      <div class="select-box">
                                        <select data-rel="edit-field-brand-tid" name="brandName[]" class="select3" title="Select a brand" onchange="productSearch()">
                                            <option value="">Option</option>
                                            <?php foreach($BrandsName as $row) { ?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
                                        </select>
                                         <div class="add-box">
                                            <a href="#" class="add">add</a>
                                            <div class="tooltip">Add another brand</div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="cell">
                                      <label>PRODUCT</label>
                                      <div class="select-box">
                                         <select data-rel="edit-field-type-tid" name="productName[]" class="select3" title="Select a product" onchange="productSearch()">
                                            <option value="">option</option>
                                            <?php foreach($ProductAccessories as $acc) { ?>
                                            <option value="<?php echo $acc['id'];?>"> <?php echo $acc['AccessoriesName'];?> </option>
                                            <?php } ?>
                                         </select>
                                         <div class="add-box">
                                            <a href="#" class="add">add</a>
                                            <div class="tooltip">Add another product</div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="cell">
                                      <label>MATERIAL</label>
                                      <div class="select-box">
                                         <select data-rel="edit-field-material-tid-i18n" name="materialName[]" class="select3" title="Select material" onchange="productSearch()">
                                            <option value="">option</option>
                                            <?php foreach($ProductMaterial as $option) {?>
                                                <option value="<?php echo $option['id'];?>"><?php echo $option['materialName'];?></option>
                                            <?php }?>
                                         </select>
                                         <div class="add-box">
                                            <a href="#" class="add">add</a>
                                            <div class="tooltip">Add another material</div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="cell">
                                      <label>ACCESSORIES</label>
                                      <div class="select-box">
                                         <select data-rel="edit-field-accessories-tid-i18n" name="accessoriesName[]" class="select3" title="Select accessories" onchange="productSearch()">
                                            <option value="">option</option>
                                            <?php foreach($ProductAccessories as $option) {?>
                                                <option value="<?php echo $option['id'];?>"><?php echo $option['AccessoriesName'];?></option>
                                            <?php }?>
                                         </select>
                                         <div class="add-box">
                                            <a href="#" class="add">add</a>
                                            <div class="tooltip">Add another accessories</div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="cell motorization-cell">
                                      <label>MOTORIZATION</label>
                                      <div class="select-box">
                                         <select data-rel="edit-field-motorization-value-i18n" name="motorization" class="select3" title="Select"  onchange="productSearch()">
                                            <option value="">Option</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                         </select>
                                      </div>
                                   </div>
                                </div>                                
                            </form>
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
            <div class="row">
            <div class="tool-bar">
            <form class="ctools-auto-submit-full-form" action="" method="get" id="views-exposed-form-stores-list" accept-charset="UTF-8">
               <div class="col-md-2">
               <p>FILTER BY</p>
               </div>
               <div class="col-md-2 col-xs-12">
               <div class="form-item form-type-select form-item-field-address-info-country-selective">
                  <select class="select2 form-select" id="edit-field-address-info-country-selective" name="field_address_info_country_selective">
                     <option value="All" selected="selected">Select a feature</option>
                     <option value="AE">United Arab Emirates</option>
                     <option value="BH">Bahrain</option>
                     <option value="OM">Oman</option>
                     <option value="QA">Qatar</option>
                     <option value="SA">Saudi Arabia</option>
                  </select>
               </div>
               </div>
                <div class="col-md-2 col-xs-12">
               <div class="form-item form-type-select form-item-field-address-info-locality-selective">
                  <select class="select2 form-select" id="edit-field-address-info-locality-selective" name="field_address_info_locality_selective">
                     <option value="All" selected="selected">Select a Style</option>
                                          <option value="AE">United Arab Emirates</option>
                     <option value="BH">Bahrain</option>
                     <option value="OM">Oman</option>
                     <option value="QA">Qatar</option>
                     <option value="SA">Saudi Arabia</option>
                     
                  </select>
               </div>
                </div>
                
                <div class="col-md-2 col-xs-12">
               <div class="filters-bar">
                    <select id="color-select"  data-rel="edit-field-color-rgb" class="select2" title="Select a color">
                        <option>#AC725E</option>
                        <option>#D06B64</option>
                        <option>#F83A22</option>
                        <option>#FA573C</option>
                        <option>#FF7537</option>
                        <option>#FFAD46</option>
                        <option>#42D692</option>
                        <option>#16A765</option>
                        <option>#7BD148</option>
                        <option>#B3DC6C</option>
                        <option>#FBE983</option>
                        <option>#92E1C0</option>
                        <option>#9FE1E7</option>
                        <option>#9FC6E7</option>
                        <option>#4986E7</option>
                        <option>#9A9CFF</option>
                        <option>#B99AFF</option>
                        <option>#C2C2C2</option>
                        <option>#CABDBF</option>
                        <option>#CCA6AC</option>
                        <option>#F691B2</option>
                        <option>#CD74E6</option>
                        <option>#A47AE2</option>
                    </select>
               </div>
                </div>
                <div class="col-md-2 col-xs-12">
               <div class="form-item form-type-select form-item-field-address-info-locality-selective">
                  <select class="select2 form-select" id="edit-field-address-info-locality-selective" name="field_address_info_locality_selective" style="width: 100%;">
                     <option value="All" selected="selected">Sort by price</option>
                  </select>
               </div>
                </div>                             
                
            </form>            
            </div>
            
         </div>
            <hr>
                 </div>
             </div>
      
<!--      <div class="container">
         <div class="col-md-offset-1 col-md-10">
            <div class="row">
               <div class="col-md-2">
                  <p>17 items</p>
               </div>
               <div class="col-md-9 pull-right">
         <div class="view view-product-search view-id-product_search view-display-id-page view-dom-id-1600fb4c7d485d95aee9d1a818d98b81">
             <div class="container search-container">
                 <div class="list list2 ajax-list">
                     <div class="toolbar">
                         <span>68 items</span>
                         <div class="pager">
                             <span>Page</span>
                             <div class="item-list">
                                 <ul class="pager">
                                     <li class="pager-current first">1</li>
                                     <li class="pager-item">
                                         <a title="Go to page 2" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=1">2</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 3" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=2">3</a>
                                     </li>
                                     <li class="pager-item"><a title="Go to page 4" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=3">4</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 5" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=4">5</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 6" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=5">6</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 7" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=6">7</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 8" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=7">8</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 9" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=8">9</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 10" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=9">10</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 11" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=10">11</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 12" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=11">12</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 13" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=12">13</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 14" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=13">14</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 15" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=14">15</a>
                                     </li>
                                     <li class="pager-item">
                                         <a title="Go to page 16" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=15">16</a>
                                     </li>
                                     <li class="pager-item last">
                                         <a title="Go to page 17" href="/product-search?&amp;&amp;&amp;&amp;field_motorization_value_i18n=All&amp;&amp;&amp;field_color_rgb=&amp;sort_by=field_price_value&amp;sort_order=DESC&amp;page=16">17</a></li>
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
      </div>
-->
      
      
   <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <div class="product-content">
            <p>PRODUCTS</p>
            <div class="row" id="productSearchResult">
                <?php foreach($allProducts as $rowData) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="fujikawa-hover">
                            <a href="#">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fujikawa/FAB05.jpg">
                            <?php $result = $this->SedarModel->fetchBranName($rowData['id']);?>
                            <h2><?php echo $result[0]['name'];?></h2>
                            <h3><?php echo $rowData['productName'];?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--<div class="col-md-3 col-sm-6 col-xs-12">
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
                </div>-->
            </div>
        </div>
        <div class="butn" style="text-align: center; padding-bottom: 20px">
            <button type="button" class="btn btn-warning">Load More</button>
        </div>
        </div>      
      </div>   
   </div>
</div>
<script>
function productSearch() {
    var brand = new Array;
    var product = new Array;
    var material = new Array;
    var accessories = new Array;
    var motorization = new Array;
    $('select[name="brandName[]"]').each(function(){
        brand.push($(this).val());
    });
    $('select[name="productName[]"]').each(function(){
        product.push($(this).val());
        
    });
    $('select[name="materialName[]"]').each(function(){
        material.push($(this).val());
        
    });
    $('select[name="accessoriesName[]"]').each(function(){
        accessories.push($(this).val());
        
    });
    motorization =  $('select[name="motorization"]').val();
    if (brand == '') {
        brand = '';
    }else{
        brand = brand.join(',');
    }
    if (product == '') {
        product = '';
    }else{
        product = product.join(',');
    }
    if (material == ''){
        material= '';
    }else{
        material = material.join(',');
    }
    if (accessories == '') {
        accessories = '';
    }else{
        accessories = accessories.join(',');
    }
    $.ajax({
        type: "POST",
        url:"<?php echo site_url('SedarCtr/ajaxProductSearch')?>",
        data:{brand:brand,product:product,material:material,accessories:accessories,motorization:motorization},
        success: function (response) {
            $('#productSearchResult').html(response)
	}
    });   
}
function removeProduct() {
    productSearch();
}

</script>
