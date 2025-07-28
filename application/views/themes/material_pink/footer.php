<?php $cookie_consent	=	$this->customlib->cookie_consent();
   if(!empty($cookie_consent)){ ?>
<div id="cookieConsent" class="cookieConsent"> 
   <?php echo $cookie_consent; ?> <a href="<?php echo base_url() . "page/cookie-policy" ?>" target="_blank" ></a> <a onclick="setsitecookies()" class="cookieConsentOK"><?php echo $this->lang->line('accept') ?></a>
</div>
<?php } ?>

<style>
    
    .footer-text {
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      color: #666;
    }

    .mobile-footer {
      display: none;
    }

    /* ===== Mobile View ===== */
    @media (max-width: 768px) {
      .footer-text {
        display: none;
      }

      .mobile-footer {
        display: flex;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        justify-content: space-around;
        background-color: white;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        z-index: 1000;
      }

      .mobile-footer .item {
        text-align: center;
        color: #a0a0a0;
        font-size: 12px;
      }

      .mobile-footer .item svg {
        width: 24px;
        height: 24px;
        margin-bottom: 4px;
      }

      .mobile-footer .center-btn {
        background-color:  #3629B7;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-top: -40px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(74, 58, 255, 0.3);
        border: 5px solid white;
      }

      .mobile-footer .center-btn svg {
        fill: white;
      }
      footer:after {
    display:none;
}
    
    

    }
  </style>
<footer>
   <?php if ($this->module_lib->hasModule('online_course') && $this->module_lib->hasActive('online_course')) { ?>        
   <script src="<?php echo base_url(); ?>backend/js/online_course.js"></script>           
   <?php } ?>
   <div class="container spacet40 spaceb40" style="display:none;">
      <div class="row">
         <div class="col-md-4 col-sm-6">
            <h3 class="fo-title"><?php echo $this->lang->line('links'); ?></h3>
            <ul class="f1-list">
               <?php
                  foreach ($footer_menus as $footer_menu_key => $footer_menu_value) {
                  
                      $cls_menu_dropdown = "";
                      if (!empty($footer_menu_value['submenus'])) {
                  
                          $cls_menu_dropdown = "dropdown";
                      }
                      ?>
               <li class="<?php echo $cls_menu_dropdown; ?>">
                  <?php
                     $top_new_tab = '';
                     $url = '#';
                     if ($footer_menu_value['open_new_tab']) {
                         $top_new_tab = "target='_blank'";
                     }
                     if ($footer_menu_value['ext_url']) {
                         $url = $footer_menu_value['ext_url_link'];
                     } else {
                         $url = site_url($footer_menu_value['page_url']);
                     }
                     ?>
                  <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $footer_menu_value['menu']; ?></a>
                  <?php
                     ?>
               </li>
               <?php
                  }
                  ?>
            </ul>
         </div>
         <!--./col-md-3-->
         <div class="col-md-4 col-sm-6">
            <h3 class="fo-title"><?php echo $this->lang->line('follow_us'); ?></h3>
            <ul class="company-social">
               <?php $this->view('/themes/default/social_media'); ?>        
            </ul>
         </div>
         <!--./col-md-3-->
         <div class="col-md-4 col-sm-6">
            <h3 class="fo-title"><?php echo $this->lang->line('feedback'); ?></h3>
            <div class="complain"><a href="<?php echo site_url('page/complain') ?>"><i class="fa fa-pencil-square-o i-plain"></i><?php echo $this->lang->line('complain'); ?></a>
            </div>
            <!-- <li><i class="fa fa-pencil-square-o i-plain"></i>
               <div class="he-text"><?php echo $this->lang->line('feedback'); ?><span><a href="<?php echo site_url('page/complain') ?>"><?php echo $this->lang->line('complain'); ?></a></span>
               </div>
               </li> -->
         </div>
      </div>
      <!--./row-->
      <div class="row">
         <div class="col-md-12">
            <div class="infoborderb"></div>
            <div class="col-md-4">
               <div class="contacts-item">
                  <div class="cleft"><i class="fa fa-phone"></i></div>
                  <div class="cright">
                     <a href="#" class="content-title"><?php echo $this->lang->line('contact'); ?></a>
                     <p href="#" class="content-title"><?php echo $school_setting->phone; ?></p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="contacts-item">
                  <div class="cleft"><i class="fa fa-envelope"></i></div>
                  <div class="cright">
                     <a href="#" class="content-title"><?php echo $this->lang->line('email_us'); ?></a>
                     <p><a href="mailto:<?php echo $school_setting->email; ?>" class="content-title"><?php echo $school_setting->email; ?></a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="contacts-item">
                  <div class="cleft"><i class="fa fa-map-marker"></i></div>
                  <div class="cright">
                     <a href="#" class="content-title"><?php echo $this->lang->line('address'); ?></a>
                     <p class="sub-title"><?php echo $school_setting->address; ?></p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <a class="twitter-timeline" data-tweet-limit="1" href="#"></a>
            </div>
            <!--./col-md-3-->   
         </div>
      </div>
   </div>
   </div>
   <!--./container-->
    <!-- Desktop Footer Text -->
  <div class="copy-right">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <p class="footer-text">
            <?php echo $front_setting->footer_text; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Bottom Navigation -->
  <div class="mobile-footer">
    <div class="item">
      <div>
        <img src="<?= base_url('uploads/footer/CRB/IC_Profile.png') ?>" alt="shop">
      </div>
      <span>Home</span>
    </div>
    <div class="item">
      <div>
        <img src="<?= base_url('uploads/footer/CRB/course.png') ?>" alt="shop">
        
      </div>
      <span>Course</span>
    </div>

    <div class="item center-btn">
        <img src="<?= base_url('uploads/footer/CRB/shop.png') ?>" alt="shop">
    </div>

    <div class="item">
      <div>
        <img src="<?= base_url('uploads/footer/CRB/Calander.png') ?>" alt="shop">
        
      </div>
      <span>Time Table</span>
    </div>
    <div class="item">
      <div>
        <img src="<?= base_url('uploads/footer/CRB/support.png') ?>" alt="shop">
      </div>
      <span>Support</span>
    </div>
  </div>
   <!--./copy-right-->
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<script>
   function setsitecookies() {
       $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>welcome/setsitecookies",
           data: {},
           success: function (data) {
               $('.cookieConsent').hide();
   
           }
       });
   }
   
   function check_cookie_name(name)
   {
       var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
       if (match) {
           console.log(match[2]);
           $('.cookieConsent').hide();
       }
       else{
          $('.cookieConsent').show();
       }
   }
   check_cookie_name('sitecookies');
</script>