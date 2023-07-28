<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<main class="container-fluid splash ">
  <div class='container' style="height: 100%;">
    <div class="home-container">


      <div class="row g-5">

        <?php if (have_rows('links')) : ?>
          <?php $delay = 0;
          while (have_rows('links')) : the_row();
            $image = get_sub_field('image');
            $link = get_sub_field('link');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
          ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">

              <div class="Main__Home__card  border bg-light" style="background: #fff url(<?php echo $image['url'] ?>) 
            no-repeat center top / contain; border-radius:10px"
            data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" data-aos-delay="<?php echo $delay ?>"
            >
                <a href="<?php echo $link ?>" class='home-card-link'>
                  <div class="card-home p-3" >
                    <div class="card-title">
                      <span>

                        <?php echo $title ?>
                      </span>

                    </div>
                    <div class="card-description">
                      <span>

                        <?php echo $description ?>
                      </span>

                    </div>
                  </div>
                </a>

              </div>

            </div>
          <?php $delay = $delay + 300;
          endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
</main>

<?php get_footer(); ?>