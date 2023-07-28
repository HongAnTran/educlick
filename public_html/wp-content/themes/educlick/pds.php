<?php
/*
Template Name: PDS Page
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    // var para todos los custom fields 
    $banner_title = get_field('banner_title');
    $banner_subtitle = get_field('banner_subtitle');
    $banner_description = get_field('banner_description');
    $banner_description = get_field('banner_description');


    $text = get_field('text');
    $video = get_field('video');
    $quote = get_field('quote');

    ?>

  <?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid splash__custom">
  <div class="Banner row">
    <div class="col-12 text-center">
      <h1 class="blue"><?php echo $banner_title; ?></h1>
      <h3 class="blue"><?php echo $banner_subtitle; ?></h3>
      <p><?php echo $banner_description; ?></p>
    </div>
  </div>
  <div style="padding:30px 0px ;">


    <div class=" container ">
      <div class="row gx-5">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="p-4 bg-white " >
            <div class="wrs-text"  data-aos="fade-down" data-aos-once="true" data-aos-duration="2200">

              <p>
                <?php echo $text ?>

              </p>
           



            </div>
            <div class="wrs-quote"  data-aos="fade-down" data-aos-once="true" data-aos-duration="2200">
              <span>
                <?php echo $quote ?>

              </span>

            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="p-4 bg-white" style="height: 100%;"  data-aos="fade-left" data-aos-once="true" data-aos-duration="2200">

            <video loop muted controls playsinline src=" <?php echo $video['url'] ?>" width="100%" height="100%">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>