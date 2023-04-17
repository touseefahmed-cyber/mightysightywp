<?php
            $footer_copyright_text = get_field('footer_copyright_text', 'option');
            $footer_email_address = get_field('footer_email_address', 'option');
            $footer_phone_number = get_field('footer_phone_number', 'option');
?>

<!--FOOTER SECTION -->
<section class="float-left w-100 footer-con bg-1d2b5f">
    <div class="wrapper">
      <div class="footer-content d-flex align-items-center text-white"> 
        <ul class="footer-left-con mb-0">
          <li>
            <a href="#" class="text-white d-inline-block font-medium font-xs">Support</a>
          </li>
          <li>
            <a href="#" class="text-white d-inline-block font-medium font-xs">Privacy</a>
          </li>
          <li>
            <a href="#" class="text-white d-inline-block font-medium font-xs">Terms </a>
          </li>
          <li class="text-white text-decoration-none font-xs">
            <?php echo $footer_copyright_text?> <?php echo date('Y'); ?>
          </li>
        </ul>

      
        <ul class="footer-right-con mb-0">
          <li class="mail-con d-inline-block">
            <a href="mailto:<?php echo $footer_email_address; ?>" class="text-white font-medium"><?php echo $footer_email_address; ?></a>
          </li>
          <li class="tel-con d-inline-block">
            <a href="tel:<?php echo $footer_phone_number; ?>" class="text-white font-medium"><?php echo $footer_phone_number; ?></a>
          </li>
          <li class="secondary-btn d-inline-block">
            <a href="javascript:void(0)" class="footer-btn font-medium font-xs">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--FOOTER SECTION -->


<?php wp_footer(); ?>
<script>
   AOS.init();
  $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$(document).ready(function() {
  $('.btnNext').click(function() {
    $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
  });

  $('.btnPrevious').click(function() {
    $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
  });
});

</script>
</body>
</html>