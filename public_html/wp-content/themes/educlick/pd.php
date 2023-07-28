<?php
/*
Template Name: PD Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$title = get_field( 'title' );
$body = get_field( 'body' );
$teacher_quote = get_field( 'teacher_quote' );
$aside_background = get_field( 'aside_background' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid">



      <div class=" row " style="height: 100%;">
        <div
          class="col-12 col-sm-12 col-md-12 col-lg-6 order-lg-0 order-md-1 order-sm-1"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
        >
        <div  class="pd-page-body p-4">

          <h1 class="title"><?php echo $title ?></h1>
            <p>
                 <?php echo $body ?>
            </p>
            <div style="margin-top:40px">
                
          <h1>  <?php echo $teacher_quote  ?></h1>
            </div>
        </div>
        </div>
    
        <div
          class="col-12 col-lg-2 col-sm-12 col-md-12 order-lg-1 order-md-2 order-sm-2"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
          data-aos-delay="300"
        >
        </div>
        <div class="col-lg-4 col-12 Back col-sm-12 col-md-12 order-lg-2 order-md-0 order-sm-0" style=" min-height: 400px; ; background: url(<?php echo $aside_background['url'] ?>) no-repeat center / cover; "></div>
      </div>
     
    </main>

<?php get_footer(); ?>