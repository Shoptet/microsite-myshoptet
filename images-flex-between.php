<?php /* Template Name: Flex - Justify Between */ ?>

<?php if( !isset($singleView) || $singleView ) { get_header();  ?>

<section class="section">
    <div class="section-inner container">
        <?php get_template_part( 'template-parts/utils/content', 'breadcrumb' ); ?>
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="section section-tertiary offset-images">
    <div class="section-inner container offset-images-content">
        <div class="d-flex flex-row justify-content-between">
            <?php the_content(); ?>
        </div>
        <?php get_template_part( 'template-parts/page/content', 'widget' ); ?>
    </div>
</section>

<?php get_footer(); } else { ?>

<section class="section section-tertiary offset-images">
    <div class="section-inner container offset-images-content">
        <div class="d-flex flex-row justify-content-between">
            <?php echo apply_filters( 'the_content', $page->post_content ); ?>
        </div>
    </div>
</section>

<?php } ?>
