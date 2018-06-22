<?php /* Template Name: Images Flex Justify Between template */ ?>

<section class="section section-tertiary offset-images">
    <div class="section-inner container offset-images-content">
        <div class="d-flex flex-row justify-content-between">
            <?php echo apply_filters( 'the_content', $page->post_content ); ?>
        </div>
    </div>
</section>
