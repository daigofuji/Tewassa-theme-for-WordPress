<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="ninecol clearfix" role="main">
					
						<h1 class="archive_title"><span>「</span> <?php echo esc_attr(get_search_query()); ?><span>」の検索結果</span></h1>
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								
							</header> <!-- end article header -->
						
							<section class="post-content">
								<?php the_excerpt('<span class="read-more">続きを読む "'.the_title('', '', false).'" &raquo;</span>'); ?>
						
							</section> <!-- end article section -->
							
							<footer>
								<p class="meta">投稿： <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('Y年 F j日'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> カテゴリー <?php the_category(', '); ?>.</p>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>	
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>
							
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="next-link"><?php next_posts_link(__('&laquo; 前のポスト', "bonestheme")) ?></li>
									<li class="prev-link"><?php previous_posts_link(__('次のポスト &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
						<?php } ?>			
						
						<?php else : ?>
						
						<!-- this area shows up if there are no results -->
						
						<article id="post-not-found">
						    <header>
						    	<h2>0件</h2>
						    </header>
						    <section class="post-content">
						    	<p>お探しのファイル・ポストは見つからないようです。もう一度検索の内容を変えて試してみてください。</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					<?php get_search_form(); ?>
					
					</div> <!-- end #main -->
    				
    				<div id="sidebar1" class="sidebar twocol last">
    					
    					
    				
    				</div>
    				
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>