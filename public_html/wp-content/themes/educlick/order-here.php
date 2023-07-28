<?php
/*
Template Name: Order-here Page
*/
?>
<?php
// var para todos los custom fields 
$video = get_field('video');

?>
<?php get_header(); ?>
<main class="container-fluid " style=" position: relative;" >

  <div class="order-here-container ">


    <div class="row g-5 h-100" >
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
        <div class="row-two-order">


          <?php if (have_rows('links')) : ?>
            <?php $delay = 0;
            while (have_rows('links')) : the_row();
              $image = get_sub_field('image');
              $link = get_sub_field('link');
              $title = get_sub_field('title');

            ?>
           

                <div class="order-card border bg-light" style="background: #fff url(<?php echo $image['url'] ?>) 
            no-repeat center top / contain; border-radius:10px" data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" data-aos-delay="<?php echo $delay ?>">
                  <a href="<?php echo $link ?>" class=''>
                    <div class="p-3">
                      <div class="order-title">
                        <span>

                          <?php echo $title ?>
                        </span>

                      </div>

                    </div>
                  </a>

                </div>

             
            <?php $delay = $delay + 300;
            endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="order-video">
            <div class="border "  style=" width : 600px ; height: 500px; " >

            </div>
            </div>
      </div>

    </div>
  </div>


  <div class="order-bg-right" ></div>
</main>

<?php get_footer(); ?>