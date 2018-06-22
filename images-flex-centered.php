<?php /* Template Name: Images Flex Justify Centered template */ ?>

<section class="section">
    <div class="section-inner container">
        <div class="d-flex flex-row justify-content-center children-mx-20">
            <?php echo apply_filters( 'the_content', $page->post_content ); ?>
        </div>
    </div>
</section>
