<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol clearfix" role="main">
					
						<?php if (is_category()) { ?>
							<h1 class="archive_title h2">
								<span>「</span><?php single_cat_title(); ?><span>」カテゴリーの投稿</span> 
							</h1>
						<?php } elseif (is_tag()) { ?> 
							<h1 class="archive_title h2">
								<span>「</span> <?php single_tag_title(); ?><span>」のタグのついた投稿</span>
							</h1>
						<?php } elseif (is_author()) { ?>
							<h1 class="archive_title h2">
								<span>
								「</span> <?php get_the_author_meta('display_name'); ?><span>」さんによる投稿</span>
							</h1>
						<?php } elseif (is_day()) { ?>
							<h1 class="archive_title h2">
								 <?php the_time('Y年 F j日 l'); ?><span>のアーカイブ</span>
							</h1>
						<?php } elseif (is_month()) { ?>
						    <h1 class="archive_title h2">
						    	<span></span> <?php the_time('Y年 F '); ?><span>のアーカイブ</span>
						    </h1>
						<?php } elseif (is_year()) { ?>
						    <h1 class="archive_title h2">
						    	<span></span> <?php the_time('Y年'); ?><span>のアーカイブ</span>
						    </h1>
						<?php } ?>
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								
								<p class="meta">投稿： <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('Y年 F j日'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> カテゴリー：<?php the_category(', '); ?>.</p>
							
							</header> <!-- end article header -->
						
							<section class="post-content">
							
								<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
							
								<?php the_excerpt(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>	
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>
					
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="next-link"><?php next_posts_link(__('&laquo; 古めの投稿', "bonestheme")) ?></li>
									<li class="prev-link"><?php previous_posts_link(__('新しめの投稿 &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
						<?php } ?>
									
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>投稿がまだ無いようです。</h1>
						    </header>
						    <section class="post-content">
						    	<p>投稿が見つかりませんでした。</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					</div> <!-- end #main -->
    				
					<?php get_sidebar(); // sidebar 1 ?>
					
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>