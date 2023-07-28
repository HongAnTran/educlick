<?php
/*
Template Name: Financial Literacy Page
*/
?>

<?php get_header(); ?>

<?php
// var para todos los custom fields 
$title = get_field('title');
$text = get_field('text');
$description = get_field('description');
$picture = get_field('picture');

?>


<main class="container-fluid Main splash__custom">
  <div class="Banner row">
    <div class="col-12 text-center">
      <h1 class="blue"><?php echo $title; ?></h1>
    </div>
  </div>
  <div class="container">

    <div class="our-body">

      <div class="row">
        <div class=" col-lg-6 col-md-6">
          <h2>
            <?php echo $text;  ?>
          </h2>
          <div>
            <span>

              <?php echo $description;  ?>

            </span>
          </div>
        </div>
        <div class=" col-lg-6 col-md-6">
          <div>
            <img src="<?php echo $picture['url'];  ?>">
          </div>
        </div>
      </div>

    </div>

  </div>
</main>

<?php get_footer(); ?>