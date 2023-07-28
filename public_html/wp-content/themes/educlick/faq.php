<?php
/*
Template Name: Faq Page
*/
?>
<?php
// var para todos los custom fields 
$title = get_field('title');
$sub_title = get_field('sub_title');
$image = get_field('image');



?>
<?php get_header(); ?>

<main class="container-xxl  p-0">
    <div class="Banner ">
        <div class="ctext-center">
            <h1 class=""><?php echo $title; ?></h1>
            <h3><?php echo $sub_title; ?></h3>
        </div>
    </div>
    <div class="">
           


                <div class="accordion" id="questions">
                    <div class="row gy-3 gx-0">
                    <div class="col-lg-7">
                         <?php if (have_rows('questions')) : ?>
                    <?php $delay = 0;
                       $index = 0;
                    while (have_rows('questions')) : the_row();
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                     
                    ?>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-<?php echo $index; ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $index; ?>">
                                  <span class="faq-questions">
                                  <?php echo $question; ?>
                                  </span>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo $index; ?>" class="accordion-collapse collapse " aria-labelledby="heading-<?php echo $index; ?>" data-bs-parent="#questions">
                                    <div class="p-3">
                                    <?php echo $answer; ?>
                                    </div>
                                </div>
                            </div>
                     
                        
                        <?php $delay = $delay + 300;$index +=1 ; endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-5">
                        <img  src="<?php echo $image ; ?>">
                    </div>
                    </div>

                   
                </div>
                    </div>
            </div>

   
</main>

<?php get_footer(); ?>