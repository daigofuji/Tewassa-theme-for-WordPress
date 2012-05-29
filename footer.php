			<footer role="contentinfo" class="footer">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav>
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
			
					<p class="attribution">TEWASSAは東日本大震災被災地を長期的に手作りでサポートしていくボランティアグループです。<br/>TEWASSA is a long-term volunteer project devoted to Japan Earthquake and Tsunami relief through handmade arts+crafts.<br/>
					
					&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "bonestheme"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&</span> <a href="http://www.themble.com/bones" title="Bones" class="footer_bones_link">Bones</a> <span class="amp">&</span> <a href="http://daigofujiwara.com/" title="Daigo Fujiwara, frontend developer">Daigo</a>. <span id="site-login"><?php wp_register('', ''); ?> <?php wp_loginout(); ?></span></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
