<?php

get_header();

// Build query
global $project_query;

// Retrieves the currently queried object
$tag = get_queried_object();
$urlTagName = $tag->slug;
$theTagName = $tag->name;

// Init args

$args = [
    'post_type' => 'resources',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'tax_query' => array(
        array (
            'taxonomy' => 'resource_type',
            'field' => 'slug',
            'terms' => $urlTagName
        )
    ),
];

$terms = get_terms([
    'taxonomy' => 'resource_type',
    'hide_empty' => false
]);

$project_query = new WP_Query($args);
?>
    <!--category.php-->
    <main>

        <div class="container">
            <div class="row justify-content-between align-items-center mb-1">
                <div class="col-lg-6">
                    <h2>Resources</h2>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="row mb-1 mb-lg-2">
                <div class="col-12">
                    <?php
                    foreach ($terms as $tag) {
                        $tag_link = get_tag_link($tag->term_id);
                        ?>
                        <a href="<?php echo $tag_link; ?>" class="tag-link">
                            <?php echo ucwords($tag->name) . ' (' . $tag->count . ')'; ?>
                        </a>
                        <?php
                    } ?>
                </div>
            </div>
        </div>

        <div class="container d-none">
            <div class="row">
                <div class="col-12">
                    <p><a href="<?php echo esc_url(home_url('/resources')); ?>">Resources</a> > Resource Type > <?php echo ucwords($theTagName); ?></p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container mb-2">
            <div class="row">
                <?php
                $resources_query = new WP_Query($args);
                if ($resources_query->have_posts()) {
                    while ($resources_query->have_posts()) {
                        $resources_query->the_post();
                        ?>
                        <div class="col-md-4 col-lg-3 text-center mb-1">
                            <div class="px-150 pl-md-0 pr-md-50">
                                <?php
                                $description = get_field('resource_description');
                                $file = get_field('resource_file');
                                $file_visual = get_field('resource_image');
                                ?>
                                <a href="<?php echo $file;?>" target="_blank" title="Download the <?php the_title(); ?> Resource" class="resource--block">
                                    <img src="<?php echo $file_visual['url'];?>" alt="<?php echo $file_visual['title'];?>" class="img-fluid mx-auto mb-50 resource__thumbnail">
                                    <h5><?php the_title(); ?></h5>
                                    <?php if($description): ?>
                                        <p class="mb-0"><?php echo esc_attr($description)?></p>
                                    <?php endif;?>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // No posts found
                    echo 'No resources found';
                }
                ?>
            </div>
        </div>

        <?php
        wp_reset_postdata();
        ?>

    </main>

<?php get_footer();
