<?php wp_footer(); ?>
  <footer>
  <div class="footer-triangle">
    <img class="img-responsive logo" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'> 
  </div>
    <div class="container">
     
      <div class="col-sm-8 footer-rsection">
         <div class="row">
            <div class="col-xs-6 col-sm-3">
               
                <?php
wp_nav_menu( array( 
    'menu' => 'footer-menu-1', 
    'menu_class' => 'footer-links',
    ));
?>

              
            </div>
            <div class="col-xs-6 col-sm-3">
                            <?php
wp_nav_menu( array( 
    'menu' => 'footer-menu-2', 
    'menu_class' => 'footer-links',
    ));
?>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="input-group search-cont">
                <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
              </div>
              <?php dynamic_sidebar('footer_social'); ?> 
              <div class="privacyncookies">
                <a href="#">Personvern og cookies</a>
              </div>
              
            </div>
         </div>
      </div> 
      
      <div class="col-sm-4 footer-lsection">
        <?php dynamic_sidebar('footer_address'); ?> 
      </div>   
        
    </div>

  </footer>
<!--<script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/lightslider.min.js" type="text/javascript"></script>
  
  <script src="js/scripts.js" type="text/javascript"></script>  -->
  
  <script type="text/javascript"> 
jQuery(document).ready(function() {         
    jQuery('.menu-btn').click(function(){
        jQuery('#main-menu').slideDown(600);
    });
    
    jQuery('#burger-cross-btn').click(function(){
        jQuery('#main-menu').slideUp(600);
    });

});
    
    jQuery('#textslider').lightSlider({
    	gallery:false,
    	item:1,
    	loop:true,
    	slideMargin:0,
    	enableDrag: true,
    	enableTouch:true,

    }); 

    
    
     
  </script>
 
</body>
</html>
