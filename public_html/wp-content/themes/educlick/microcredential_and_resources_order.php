<?php
/*
Template Name: Microcredential and resources order Page
*/
?>

<?php get_header(); ?>

<?php
// var para todos los custom fields 
$title = get_field('title');
$password = get_field('password');
?>
<div class="booking_page">
    <div class="row justify-content-between">
        <div class="col-12 text-center mb-5">
            <div class="booking_content" data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
                <div class="d-flex justify-content-center mb-5">
                    <h1 class="title dark"><?php echo $title ?></h1>
                </div>
                <?php echo do_shortcode("[booking type=1  options='{calendar width=100% cell_height=40px}']"); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>