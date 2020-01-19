<?php if (!defined('FW')) {
    die('forbidden');
}

$custom_class = $atts['custom_class'];

?>

<!-- case_study_area  -->
<div class="case_study_area case_page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio-menu text-center">
                    <button class="active" data-filter="*">All</button>
                    <?php $terms = get_terms(array('taxonomy' => 'casestudy-cates'));
         foreach($terms as $term){
             echo "<button data-filter='.{$term->slug}'>{$term->name}</button>";
         }
        ?>
                </div>
            </div>
        </div>

        <div class="row grid">

            <?php foreach($terms as $term) : ?>
            <?php filter_casestude_terms($term->slug);?>
            <?php endforeach;?>

        </div>

    </div>
</div>
<!-- /case_study_area  -->