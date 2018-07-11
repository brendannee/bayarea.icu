<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bayarea
 */

?>

	</div><!-- #content -->

	<footer class="site-footer container text-center">
		Created by <a href="https://bn.ee">Brendan Nee</a> and <a href="https://o-malley.com">Amanda O'Malley</a>
	</footer>
</div><!-- #page -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-306190-22"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-306190-22');
</script>
<?php wp_footer(); ?>

</body>
</html>
