<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							
						
						
						</header> <!-- end article header -->
					
						<section class="post-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
							<p class="meta">投稿： <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('Y年 F j日'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> カテゴリー <?php the_category(', '); ?>. <?php edit_post_link(); ?></p>
							
							<?php the_tags('<p class="tags"><span class="tags-title">タグ:</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
						
						<?php comments_template(); ?>
					
					</article> <!-- end article -->
						
						<?php endwhile; ?>			
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>見つかりませんでした。</h1>
						    </header>
						    <section class="post-content">
						    	<p>お探しのファイルが見つかりませんでした。</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					</div> <!-- end #main -->
    				
					<?php get_sidebar(); // sidebar 1 ?>
    			
    			</div> <!-- #inner-content -->
    			
			</div> <!-- end #content -->

<?php get_footer(); ?>