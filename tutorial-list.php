<?php /* Template Name: Tutorial List template */ ?>

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
