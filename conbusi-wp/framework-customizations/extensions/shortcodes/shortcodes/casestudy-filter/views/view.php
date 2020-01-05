<?php if (!defined('FW')) {
    die('forbidden');
}

$custom_class = $atts['custom_class'];

?>



<!-- case_study_area  -->
<div class="case_study_area case_page">
    <div class="container">
        <div class="row grid">
            <?php
        $args = array('post_type' => 'casestudy', 'order' => 'ASC');
        query_posts($args);
        while (have_posts()) : the_post();
            global $post;
            ?>
            <div class="col-xl-4 grid-item">
                <div class="single_case">
                    <div class="case_thumb">
                        <?php the_post_thumbnail()?>
                    </div>
                    <div class="case_heading">

                        <?php
                        global $post;
                        $taxonomy = 'casestudy-cates';
                        $terms = wp_get_post_terms($post->ID, $taxonomy);
                        if ($terms && !is_wp_error($terms)) :?>
                        <?php foreach ($terms as $serv_terms) : ?>
                        <span><?php echo $serv_terms->name; ?></span>
                        <?php endforeach ?>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>

    </div>
</div>
<!-- /case_study_area  -->