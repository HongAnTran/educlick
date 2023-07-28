<?php
/*
Template Name: VCEVM Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <?php
    // var para todos los custom fields 
    $aside_background = get_field('aside_background');
    $title = get_field('title');
    $body = get_field('body');
    $table_header = get_field('table_header');
    $table_body = get_field('table_body');
    // $video = get_field( 'video' );
    ?>

  <?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid" style="padding: 0;    display: flex;
    flex-direction: column;
    padding-bottom: 12px;">
  <div class="Main__Vce__Video " style="padding-top:30px">


    <div class="container-lg">


      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-5  order-2 order-lg-0" alt="Video">
          <div style="width: 100%; height: 500px;" class="p-md-4 p-lg-0"
          data-aos="fade-right" data-aos-once="true" data-aos-duration="800" data-aos-delay="300"
          >
          <video loop muted controls playsinline class="Video__player__video" poster="<?php echo $video_poster['url'] ?>" width="100%" height="100%" >
            <source src="
					<?php if ($video) : ?>
					<?php echo $video['url']; ?>
					<?php else : ?>
					<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/educlick.mp4
					<?php endif;  ?>
					" type="video/mp4" />
          </video>
          </div>

        </div>
        <div class="col-12 col-sm-12  col-md-12 col-lg-7 Main__Vce__info  order-1 ">
          <div class="bg-white p-md-4 p-lg-0">

      
          <div data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
            <h1 class="title dark"><?php echo $title ?></h1>
            <?php echo $body ?>
          </div>
          <div class="Main__Vce__Table" data-aos="fade-up" data-aos-once="true" data-aos-duration="800" data-aos-delay="300">
            <div class="Main__Vce__Table__Head">
              <?php echo $table_header ?>
            </div>
            <div class="Main__Vce__Table__Body">
              <?php echo $table_body ?>
            </div>
          </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <div class=" Main__Vce__icons">
    <div class="d-flex flex-wrap" style=" justify-content:space-around; ">
      <?php if (have_rows('icons')) : ?>
        <?php $delay = 0;
        while (have_rows('icons')) : the_row();
          // vars
          $icon = get_sub_field('icon');
          $icon_text = get_sub_field('icon_text');
          $icon_file = get_sub_field('icon_file');
        ?>
          <a href="<?php echo $icon_file['url'] ?>" class="col-sm-1 col-3 Main__Vce__icon icon dark" data-aos="fade-up" data-aos-once="true" data-aos-duration="800" data-aos-delay="<?php echo $delay ?>">
            <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon_text ?>" />
            <h6><?php echo $icon_text ?></h6>
          </a>
        <?php $delay = $delay + 300;
        endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>