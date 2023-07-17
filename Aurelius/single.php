<?php get_header(); ?>
<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_tags('标签：', ', ', ''); ?>
<?php the_time('Y年n月j日') ?>
<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
<?php the_content(); ?>
<?php comments_template(); ?>

<p class="clearfix"> <a href="<?php echo get_option('home'); ?>" class="button float" >&lt;&lt; 返回首页</a> <a href="#commentform" class="button float right" >发表评论</a> </p>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<?php else : ?>
    <div class="errorbox">
        没有文章！
    </div>
<?php endif; ?>
<?php get_footer(); ?>  