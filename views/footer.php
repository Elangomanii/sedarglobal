<div class="content-foot">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="col-md-4">
                <div class="row">
                    <h2>STORES</h2>
                    <h3>Find a Sedar store</h3>
                    <section class="add-section">
                        <div class="holder">
                            <article class="box">                                
                                <form action="<?php echo base_url(); ?>SedarCtr/Stores" metod="post" class="form">
                                    <select id="select" class="countrycode" title="Select A Country">
                                        <?php foreach($country as $list){?>
                                          <option value="<?php echo $list['CountryCode']?>"><?php echo $list['CountryName']?></option>
                                        <?php }?>                                       
                                    </select>
                                    <input type="submit" id="getcountryname" />
                                </form>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="background-color">
    <div class="container" id="footer-link">
        <div class="col-md-offset-1 col-md-10">
            <div class="row">
                <div class="gap">
                    <div class="col-sm-12">
                        <li><label>ABOUT</label></li>
                        <li><a target="_blank" href="<?php echo site_url('SedarCtr/Projects');?>">Projects</a></li>
                        <li><a target="_blank" href="<?php echo site_url('SedarCtr/Clients');?>">Clients</a></li>
                    </div>
                    <div class="col-sm-12">
                        <li><label>BRANDS</label></li>
                        <?php foreach($BrandsName as $name) { ?>
                        <li><a  href="<?php echo site_url('SedarCtr/Brands/'.$name['id']);?>"><?php echo $name['name'];?></a></li>
                        <?php } ?>
                    </div>
                    <div class="col-sm-12">
                        <li><label>PRODUCTS</label></li>
                        <?php foreach($productsName as $product) { ?>
                        <li><a  href="<?php echo base_url('SedarCtr/productSearch/'.$product['id']);?>"><?php echo $product['name'];?></a></li>
                        <?php } ?>
                    </div>
                    <div class="col-sm-12">
                        <li><label>CONNECT</label></li>                        
                        <li><a  href="<?php echo site_url('SedarCtr/Stores');?>">Stores</a></li>                        
                        <li><a  href="<?php echo site_url('SedarCtr/ContactUs');?>">Feedback Form</a></li>
                        <li><a  href="<?php echo site_url('SedarCtr/NewsLetter');?>">Newsletter</a></li>
                        <li><a  href="<?php echo site_url('SedarCtr/ContactUs');?>">Contact</a></li>                        
                    </div>
                    <div class="col-sm-12">
                        <li><label>TERMS</label></li>
                        <?php foreach($TermsName as $names) { ?>
                        <li><a  href="<?php echo site_url('SedarCtr/Terms/'.$names['id']);?>"><?php echo $names['title']?></a></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="footer-logo">
            <div class="container">
                <div class="col-md-offset-1 col-md-10">
                    <p><a href="<?php echo site_url('Franchise_Controller/index');?>"><img src="<?php echo base_url();?>assets/images/logo-footer.png"></a>
                    &nbsp;&nbsp; All rights reserved &copy; 2015</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<script>
    
    
    $('.countrycode').change(function() {
    var codecountry=$(this).find("option:selected").val();
    alert(codecountry);
    url="<?php echo base_url(); ?>SedarCtr/footerStore/"+codecountry;
    $('.form').attr('action',url)

    alert(url);
       
    });
       
       
       
       
</script>

<script>
    
    
    $('.countrycode').change(function() {
    var codecountry=$(this).find("option:selected").val();
    alert(codecountry);
    if (codecountry!="") {

    url="<?php echo base_url(); ?>SedarCtr/footerStore/"+codecountry;
    }
    else{
        
     url="<?php echo base_url(); ?>SedarCtr/Stores";
        
        
    }
    $('.form').attr('action',url)

    alert(url);
       
    });
       
       
       
       
</script>