<?php
/*
Template Name: Microcredentials Page
*/
?>
<?php
// var para todos los custom fields 
$title = get_field('title');



?>
<?php get_header(); ?>

<main class="container-fluid  splash__custom p-0">
    <div class="Banner ">
        <div class=" text-center">
            <h1 class="blue"><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="our-body">


            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="micro-col">
                        <a href="<?php echo get_home_url(); ?>/finalcial-literacy" class='home-card-link'>
                            <div class="border bg-light micro-card" style="height: 300px;">
                                <h1>finalcial literacy</h1>
                            </div>
                        </a>
                        <a href="<?php echo get_home_url(); ?>/white-card-induction" class='home-card-link'>

                            <div class="border bg-light micro-card" style="height: 300px;">
                                <h1>white card induction</h1>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="micro-mid-col">


                        <div class="border bg-light micro-card" style="height: 300px;">
                            <h1>video</h1>

                        </div>

                        <h1>"What are Microcredentials"</h1>
                        <div class="border bg-light micro-card" style="height: 100px;">
                            <h1>"What we do fact sheet"</h1>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="micro-col">
                        <a href="<?php echo get_home_url(); ?>/our-story-page" class='home-card-link'>

                            <div class="border bg-light micro-card" style="height: 300px;">
                                <h1>rsa and food</h1>
                            </div>
                        </a>
                        <a href="<?php echo get_home_url(); ?>/our-story-page" class='home-card-link'>

                            <div class="border bg-light micro-card" style="height: 300px;">
                                <h1>firs aid</h1>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</main>

<?php get_footer(); ?>