<?php
/**
 * Template Tags
 *
 * Functions that are called directly from template parts or within actions.
 *
 * @package Amelie
 */

if ( ! function_exists( 'aml_navbar_logo' ) ) {
	/**
	 * Navbar Logo
	 */
	function aml_navbar_logo() {
		?>
		<div class="aml-navbar__logo">
			<a href="#">
				amelie
			</a>
		</div>
		<?php
	}
}

if ( ! function_exists( 'aml_navbar_cart' ) ) {
	/**
	 * Navbar Cart
	 */
	function aml_navbar_cart() {
		?>
		<div class="aml-navbar__cart">
			<a href="#">
				<img src="<?php echo esc_url( get_theme_file_uri( '/frontend/app/images/icons/cart.svg' ) ); ?>" alt="">
			</a>
			<span>0</span>
		</div>
		<?php
	}
}

if ( ! function_exists( 'aml_navbar_menu' ) ) {
	/**
	 * Navbar Menu
	 */
	function aml_navbar_menu() {
		?>
		<nav class="aml-navbar__menu">
			<ul class="aml-navbar__list">
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Portfolio</a>
				</li>
				<li>
					<a href="#">Shop</a>
				</li>
				<li>
					<a href="#">Pages</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
			<?php aml_navbar_cart(); ?>
		</nav>
		<?php
	}
}
