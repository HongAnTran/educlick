<?php
/*
Template Name: WRS Page
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
    $quote_author = get_field('quote_author');

    ?>

  <?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid p-0 bg-wrs">
  <div class="Banner ">
    <div class="text-center">
      <h1 class="white"><?php echo $banner_title; ?></h1>
    </div>
  </div>
  <div style="padding:20px 0px ;">
    <div class="row gx-5">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="wrs-chap">
          <p><?php echo $banner_subtitle; ?></p>
          <p><?php echo $banner_description; ?></p>
        </div>
        <div class="row">
          <div class="col-lg-2">
   
          </div>
          <div class="col-lg-10">
          <div class="p-4 bg-white ">
              <div class="wrs-text" data-aos="fade-down" data-aos-once="true" data-aos-duration="2200">
                <p>
                  <?php echo $text ?>
                </p>
              </div>

              </div>
          </div>

        </div>
      </div>
 
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-9"> 
          <div class=" bg-white" data-aos="fade-left" data-aos-once="true" data-aos-duration="2200">
          <video loop muted controls playsinline src=" <?php echo $video['url'] ?>" width="100%">
          </video>
        </div>
        <div class="wrs-quote p-sm-4 p-md-4 p-lg-0" data-aos="fade-left" data-aos-once="true" data-aos-duration="2200">
        <div>
        <span>
            <?php echo $quote ?>

          </span>
        </div>
        <div class="text-right">
          <span>
          <?php echo $quote_author ?>
          </span>
        </div>

        </div>
          </div>
          <div class="col-lg-3"> 
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>