
<?php
/**
 * Template Name: Login
 * Description: Display projects.
 *
 * @package Edupro
 */

get_header();
?>

<div class="login__form container">
	<?php if ( ! is_user_logged_in() ) { // Display WordPress login form: ?>
		<form method="post" action="<?php echo wp_login_url(); ?>">
			<h3><?php esc_html_e( 'LOGIN', 'edupro' ); ?></h3>
			
			<p class="login__form__login-username">
				<input type="text" name="log" id="user_login" placeholder="Username / Email">
			</p>
			<p class="login__form__login-password">
				<input type="password" name="pwd" id="user_pass" placeholder="Password">
			</p>
			<a class="login__form__forgot-password" href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgot your password?', 'edupro' ); ?></a>
			<?php wp_lostpassword_url(); ?>
			<p class="login__form__login-submit">
				<input type="submit" value="<?php esc_html_e( 'Log In Your Account', 'edupro' ); ?>">
			</p>
			<div class="login__form__remember">
				<label><input type="checkbox" id="rememberme" value=""><?php esc_html_e( 'Keep me signed in until I sign out', 'edupro' ); ?></label>
			</div>
			<div class="login__form__line"><div></div></div>
			

		</form>
	<?php } else {
		// If logged in:
		echo '<p class="message">' . esc_html__( 'You already logged in.', 'edupro' ) . '</p>';
		wp_loginout( home_url() ); // Display "Log Out" link.
		echo ' | ';
		printf( '<a href="%s"> %s</a>',
			esc_url( edupro_profile_link( 'user', get_current_user_id() ) ),
			esc_html__( 'View profile', 'edupro' )
		);
}
	?>
</div>

<?php
get_footer();
