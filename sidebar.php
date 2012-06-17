				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
				
					<?php if (is_front_page() ) : ?>
					    <div class="latestblog">
						<?php
						//get latest blog entry and display
						global $post;
						$args = array( 'numberposts' => 1, 'category' => 1 );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
							<h3><a href="http://www.tewassa.org/jp/posts/blog">ブログ</a>より：<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_post_thumbnail('thumbnail');   the_excerpt(); ?>				
						<?php endforeach; ?>
						</div>
					<?php endif; ?>
				

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>