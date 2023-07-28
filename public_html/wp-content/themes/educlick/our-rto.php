<?php
/*
Template Name: Our RTO Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <?php
    // var para todos los custom fields 
    $title = get_field('title');
    $body = get_field('body');

    ?>

  <?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid Main splash__custom">
<div class="Banner row">
      <div class="col-12 text-center">
        <h1 class="blue"><?php echo $title; ?></h1>
      </div>
    </div>
  <div class="container">
  
    <div class="our-body">

      <?php echo $body ?>

    </div>

  </div>
</main>

<?php get_footer(); ?>