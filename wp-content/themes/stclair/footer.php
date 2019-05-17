        <footer class="footer" role="contentinfo">
				<div class="footer__watercolor-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-paint.png" alt="" class="footer__watercolor">
				</div>
				<div class="footer__top">
					<div class="footer__top--container">
						<a href="#top" title="Top">
							<img class="footer__top-arrow" src="<?php echo get_template_directory_uri(); ?>/img/icons/top-arrow.svg" alt="">
						</a>
						<div class="footer__logo">
							<a href="<?php echo home_url(); ?>">
								<?php $brand_footer_logo = get_field( 'brand_footer_logo', 'option' ); ?>
								<?php if ( $brand_footer_logo ) { ?>
									<img class="footer__logo--img" src="<?php echo $brand_footer_logo['url']; ?>" alt="<?php echo $brand_footer_logo['alt']; ?>" />
								<?php } ?>
							</a>
						</div>
						<hr class="footer__line">
					</div>
				</div>
				<div class="footer__middle">
					<div class="footer__middle--container">
						<div class="footer__contact">
							<p><?php the_field( 'contact_info_address_line_1', 'option' ); ?></p>
							<p><?php the_field( 'contact_info_address_line_2', 'option' ); ?></p>
							<br>
							<p><span>T: </span><span class="footer__tel"><?php the_field( 'contact_info_phone_number', 'option' ); ?></span></p>
							<p><span>E: </span><a class="email" href="mailto:<?php the_field( 'contact_info_email', 'option' ); ?>" target="_blank"><?php the_field( 'contact_info_email', 'option' ); ?></a></p>
						</div>
						<hr class="footer__line--mobile">
						<nav class="footer__nav" role="navigation">
							<?php footer_nav(); ?>
						</nav>
						<hr class="footer__line--mobile">
						<div class="footer__newsletter">
							<label class="footer__heading">Join our mailing list.</label>
							<div class="footer__signup-wrapper">
								<input class="footer__signup" type="text" name="newsletter" placeholder="Enter your email here">
								<button class="submit-button" type="submit" value="">
              					<?php echo $linkText; ?> <img class="submit-button--icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt=""></button>
							</div>
						</div>
						<hr class="footer__line--mobile">
						<div class="footer__social">
							<!-- Facebook -->
							<a target="_blank" class="footer__social--link" title="Facebook" href="<?php the_field( 'facebook_url', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-icon.svg" alt="Facebook" class="footer__social--icon"></a>
							<!-- Twitter -->
							<a target="_blank" class="footer__social--link" title="Twitter" href="<?php the_field( 'twitter_url', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-icon.svg" alt="Twitter" class="footer__social--icon"></a>
							<!-- Instagram -->
							<a target="_blank" class="footer__social--link" title="Instagram" href="<?php the_field( 'instagram_url', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-icon.svg" alt="Instagram" class="footer__social--icon"></a>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<div class="footer__bottom--container">
						<p class="footer__copyright">
						&copy; <?php bloginfo('name'); ?>, <?php echo date('Y'); ?></p>
						<p class="footer__accredit">Design by <a class="footer__accredit--link" href="https://anotherblankpage.com/">Another Blank Page</a></p>
					</div>
				</div>
			</footer>
		</div>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
