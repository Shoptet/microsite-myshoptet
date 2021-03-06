<?php /* Template Name: Tutorial List */ ?>

<?php if( !isset($singleView) || $singleView ) { get_header();  ?>

<section class="section">
    <div class="section-inner container">
        <?php get_template_part( 'template-parts/utils/content', 'breadcrumb' ); ?>
        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
                <div class="d-flex flex-row justify-content-center tutorial-list">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/page/content', 'widget' ); ?>
    </div>
</section>

<?php get_footer(); } else { ?>

<section class="section">
    <div class="section-inner container">
        <h2 class="text-center"><?php echo apply_filters( 'get_the_title', $page->post_title ); ?></h2>

        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
                <div class="d-flex flex-row justify-content-center tutorial-list">
                    <?php echo apply_filters( 'get_the_content', $page->post_content ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>


