<?php
$email = get_field('email', 100000);
$enroi_link = get_field('enroi_link', 100000);
?>

<footer class="Footer container-fluid">
  <div class="row d-flex justify-content-between align-items-center">
    <div class="col-lg-2 col-12 links text-center col-md-2">
      <a href="<?php echo $enroi_link; ?>" target="_blank">
        <button class="footer-button-enroi">ENROI</button>
      </a>

    </div>
    <div class="col-lg-2 col-12 col-md-4">
      <div class="nav">

        <div>
          <a href="<?php echo get_home_url(); ?>/our-story-page">Our Story</a>
        </div>
        <div><a href="<?php echo get_home_url(); ?>/contact-us-page">Contact Us</a> </div>
      </div>

    </div>

    <div class="col-lg-8 col-12 col-md-6 links text-end">
    <div>
        <span>RTO: 91530</span>

      </div>
      <div>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>

      </div>
      <div>
        <small style="padding: 0;" >Copyright &copy;<?php echo date("Y");
                                echo " ";
                                bloginfo('name'); ?>. All Rights Reserved</small>

      </div>
    </div>


  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="" ></script>
  <script>
    AOS.init()
  </script>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<!-- Don't forget analytics -->

</body>

</html>