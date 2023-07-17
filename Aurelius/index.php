<?php get_header(); ?>
<div class="grid_8">
        <!-- Blog Post -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">

            <!-- Post Title -->
            <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <!-- Post Data -->
            <?php the_tags('标签：', ', ', ''); ?>
            <?php the_time('Y年n月j日') ?>
            <img class="thumb" alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />

            <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' &bull; ', ''); ?>

            <?php the_excerpt(); ?>
            <?php the_content('阅读全文...'); ?>
            <a href="<?php the_permalink(); ?>" class="button right">阅读全文</a>


        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
        <p>没有找到任何文章！</p>
        <?php endif; ?>

        
        <!-- Blog Navigation -->
        <p class="clearfix"><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p>
    </div>
<?php get_sidebar(); ?>



<?php get_footer(); ?>
<?php 
    // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
    wp_nav_menu( array( 'menu' => 'menu1', 'depth' => 1) );

    wp_list_categories('orderby=name&hide_empty=0&child_of=' . 2);

?>
