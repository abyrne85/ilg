<?php get_header(); ?>
<?php  tfuse_shortcode_content('before'); ?>
<?php 
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); 
    $title = tfuse_options('category_title','',$term->term_id);
?>
<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 content-area">
                <div class="inner">
                    <article class="post-gallery">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php echo (!empty($title)) ? $title : single_term_title(); ?>
                                <span class="entry-title-min-description"><?php echo term_description( $term->term_id, 'galleries' )?></span>
                            </h1>
                            <?php if(tfuse_options('join_enable','',$term->term_id)):?>
                                <a href="<?php echo tfuse_options('join_link');?>" class="btn btn-transparent btn-join-us"><span><?php _e('Join Us','tfuse');?></span></a>
                            <?php endif;?>
                        </header>
                        <div class="entry-content">
                        <ul class="gallery-list" id="content_load">
                            <?php if (have_posts()) 
                             { $count = 0;
                                 while (have_posts()) : the_post(); $count++;
                                     get_template_part('listing', 'gallery');
                                 endwhile;
                             } 
                             else 
                             { ?>
                                 <h5><?php _e('Sorry, no posts matched your criteria.', 'tfuse'); ?></h5>
                       <?php } ?>
                            </ul>
                            <?php if(tfuse_options('pagination_type') == 'type2'):?>
                                <div class="row text-center blog">
                                    <a href="#" class="btn btn-transparent btn-load-more" id="ajax_load_posts"><span><?php _e('Load more','tfuse');?></span></a>
                                </div>
                            <?php endif;?>
                            <?php if(tfuse_options('pagination_type') == 'type1'):?>
                                <?php  tfuse_pagination();?>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>
<?php  tfuse_shortcode_content('after'); ?>
<?php  $id = tfuse_get_cat_id();?>
<input type="hidden" value="<?php echo $id; ?>" name="current_cat"  />
<input type="hidden" value="<?php echo $term->taxonomy;?>" name="is_this_tax"  />
<?php get_footer();