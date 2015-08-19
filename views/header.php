<!DOCTYPE html>  
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?php echo site_url('assets/images/favicon.ico');?>">
      <title>Sedar Home Decor in Dubai and the GCC - Giving You Total Commitment</title>
      <link href="<?php echo site_url('assets/dist/css/bootstrap.min.css');?>" rel="stylesheet">
      <link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet">
      <?php if($this->uri->segment(1, 0)=='ar')
         { ?>
      <link href="<?php echo site_url('assets/css/style_rtl.css');?>" rel="stylesheet">      
      <?php } else {?>
      <link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet">
      <?php } ?>
      <link rel="stylesheet" href="<?php echo site_url('assets/tab-content/css/tab.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/similar.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/tab-change.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/menu.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/Client.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/contact.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/Stores.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/projects.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/fujikawa.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/Drapes.css');?>" />
      <!--<link rel="stylesheet" href="<?//php echo base_url();?>assets/stores/css/stylee.css" />-->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/product-search.css');?>" />
      <link rel="stylesheet" href="<?php echo site_url('assets/css/video.css');?>" />
      <?php if($this->uri->segment(1, 0)=='ar')
         { ?>
      <link rel="stylesheet" href="<?php echo site_url('assets/css/footer_rtl.css');?>" />
      <?php } else {?>
      <link rel="stylesheet" href="<?php echo site_url('assets/css/footer.css');?>" />
      <?php } ?>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/sites/all/themes/sedar/js/jquery.minc011.js"></script>      
      <script type="text/javascript" src="<?php echo base_url();?>assets/sites/all/themes/sedar/js/jquery.once.js"></script>      
      <script type="text/javascript" src="<?php echo base_url();?>assets/sites/all/themes/sedar/js/drupal.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/sites/all/themes/sedar/js/ajax.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/sites/all/themes/sedar/js/jquery.main4576.js"></script>
      
      
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.slider.js"></script>

          
<script src="<?php echo base_url();?>assets/tab-content/js/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/tab-content/js/tabs.js"></script>
      <script>
         jQuery(document).ready(function($) {
            var _CaptionTransitions = [
            //CLIP|LR
            {$Duration: 900, $Clip: 3, $Easing: $JssorEasing$.$EaseInOutCubic },
            //CLIP|TB
            {$Duration: 900, $Clip: 12, $Easing: $JssorEasing$.$EaseInOutCubic },

            //DDGDANCE|LB
            {$Duration: 1800, x: 0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },
            //DDGDANCE|RB
            {$Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },

            //TORTUOUS|HL
            {$Duration: 1500, x: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Left: [0, 0.7] }, $Round: { $Left: 1.3} },
            //TORTUOUS|VB
            {$Duration: 1500, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} },

            //ZMF|10
            {$Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

            //ZML|R
            {$Duration: 600, x: -0.6, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },
            //ZML|B
            {$Duration: 600, y: -0.6, $Zoom: 11, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

            //ZMS|B
            {$Duration: 700, y: -0.6, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

            //ZM*JDN|LB
            {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //ZM*JUP|LB
            {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //ZM*JUP|RB
            {$Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },

            //ZM*WVR|LT
            {$Duration: 1200, x: 0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|RT
            {$Duration: 1200, x: -0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|TL
            {$Duration: 1200, x: 0.3, y: 0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|BL
            {$Duration: 1200, x: 0.3, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTT|10
            {$Duration: 700, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTTL|R
            {$Duration: 700, x: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //RTTL|B
            {$Duration: 700, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTTS|R
            {$Duration: 700, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },
            //RTTS|B
            {$Duration: 700, y: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },

            //RTT*JDN|RT
            {$Duration: 1000, x: -0.8, y: 0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //RTT*JDN|LB
            {$Duration: 1000, x: 0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //RTT*JUP|RB
            {$Duration: 1000, x: -0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            {$Duration: 1000, x: -0.5, y: 0.8, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5] }, $Round: { $Rotate: 0.5 } },
            //RTT*JUP|BR
            {$Duration: 1000, x: -0.5, y: -0.8, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} },

            //R|IB
            {$Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 },
            //B|IB
            {$Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 },

            ];            
             var options = {
                 $AutoPlay: false,
         
                 $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false
         
                 $ArrowKeyNavigation: true, //Allows arrow key to navigate or not
                 $SlideWidth: 890, //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                 //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                 $SlideSpacing: 0, //Space between each slide in pixels
                 $DisplayPieces: 2, //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                 $ParkingPosition: 55, //The offset position to park slide (this options applys only when slideshow disabled).
                
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 5,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 6,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },         
                 $ArrowNavigatorOptions: { //[Optional] Options to specify and enable arrow navigator or not
                     $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                     $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                     $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                     $Steps: 1 //[Optional] Steps to go for each navigation request, default value is 1
                 }
                 
             };
         
             var jssor_slider1 = new $JssorSlider$("slider1_container", options);
         
             //responsive code begin
             //you can remove responsive code if you don't want the slider scales while window resizes
             function ScaleSlider() {
                 var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                 if (parentWidth)
                     jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1400));
                 else
                     window.setTimeout(ScaleSlider, 30);
             }
             ScaleSlider();
         
             $(window).bind("load", ScaleSlider);
             $(window).bind("resize", ScaleSlider);
             $(window).bind("orientationchange", ScaleSlider);
             //responsive code end
         });
      </script>
   </head>
   <style>
      #social-sidebar {
      right: 0;
      margin-top: -110px;
      position: fixed;
      top: 50%;
      z-index: 9999;
      }
      #social-sidebar li:first-child a {
      border-radius: 0 5px 0 0;
      }
      #social-sidebar li:last-child a {
      border-radius: 0 0 5px 0;
      }
      #social-sidebar a {
      color: #fff;
      display: flex;
      }
      #social-sidebar a:hover span {
      left: 130%;
      opacity: 1;
      }
      #social-sidebar ul {
      padding: 0;
      }
      #social-sidebar li {
      list-style-type: none;
      padding-bottom: 5px;
      margin-right: 3px;
      }
   </style>
   <nav id="social-sidebar">
      <ul>
         <li>
            <a class="icon facebook" href="https://www.facebook.com/Sedar.Global" data-social="facebook" target="_blank">
            <img class="img-responsive" src="<?php echo base_url();?>assets/images/fb.png" /></a>
            <!--<a href="https://twitter.com/m412c0b" class="entypo-twitter" target="_blank">-->
            <!--	<span>Twitter</span>-->
            <!--</a>-->
         </li>
         <li style="list-style-type: none;">
            <a class="icon twitter" href="https://twitter.com/SedarGlobal" data-social="twitter" target="_blank"><img class="img-responsive" src="<?php echo base_url();?>assets/images/twitter.png" /></a>
         </li>
         <li style="list-style-type: none;">
            <a class="icon Pinterest" href="http://www.pinterest.com/sedarglobal/" data-social="pinterest" target="_blank"><img class="img-responsive" src="<?php echo base_url();?>assets/images/pinterest.png" /></i>
            </a>
         </li>
         <li style="list-style-type: none;">
            <a class="icon instagram" href="http://instagram.com/sedarglobal" data-social="instagram" target="_blank"><img class="img-responsive" src="<?php echo base_url();?>assets/images/cam.png" /></i>
            </a>
         </li>
      </ul>
   </nav>