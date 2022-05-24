</div>
<footer id="contacts" class="footer">
    <div class="container">
       <div class="footer__inner">
         <div class="footer__column-left">
           <div class="footer__column-left--modal">
             <div class="footer__column-left--wrapper">
               <div class="footer__column-left--content">
                  <div class="footer__title">Get in Touch</div>
                  <p><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone'); ?></a></p>
                  <p><a href="mailto:<?php the_field('e-mail_for_mail_to'); ?>"><?php the_field('email'); ?></a></p>
                </div>
                <div class="footer__column-left--content">
                  <div class="footer__title">Open Hours</div>
                  <p><?php the_field('open_hours'); ?></p>
                </div>
                <div class="footer__column-left--content">
                  <div class="footer__title">Our Office</div>
                  <p><?php the_field('our_office'); ?></p>
                </div>
             </div>
             <div class="footer__column-left--wrapper">
               <div class="footer__column-left--content">
                  <div class="footer__title">Services</div>
                  <p><?php the_field('services'); ?></p>
               </div>
             </div>
           </div>
           <div class="footer__column-left--social">
             <div class="footer__column-left--social-inner">
                <ul>
                    <li><a href="<?php the_field('link_to_instagram'); ?>"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="<?php the_field('facebook_link'); ?>"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="<?php the_field('link_to_twitter'); ?>"><i class='bx bxl-twitter'></i></a></li>
                </ul>
             </div>
           </div>
         </div>
         <div class="footer__column-right">
           <div class="footer__form">
              <div class="footer__form--title">Write to us</div>
              <?php echo do_shortcode('[contact-form-7 id="82" title="Contact Form"]'); ?>
           </div>
         </div>
       </div>
    </div>
    <div class="footer__copyright">
      <div class="container">
        <div class="footer__copyright--body">
            <p>Copyright © <span id="year"></span> Web Site.</p>
        </div>
      </div>
    </div>
</footer>
</div>
<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><i class='bx bx-x'></i></button>
        <div class="modal-heading">Submit your application</div>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <div class="modal-form">
            <?php echo do_shortcode('[contact-form-7 id="32" title="Submit your application"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>

</html>