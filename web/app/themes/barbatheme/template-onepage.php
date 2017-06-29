<?php
/**
 * Template Name: One page
 */
?>

<!--start ACF-->
	<div class="section musica">
		<?php if(get_field('musica')) ?>
			<?php the_field('musica'); ?>
	</div>
	<div class="section bio">
	<?php if(get_field('bio')){
		the_field('bio');
	}?>
	</div>
	<div class="section prensa">
		<?php if(get_field('prensa')) ?>
			<?php the_field('prensa'); ?>
	</div>
	<div class="section contacto">
		<?php if(get_field('contacto')){
			the_field('contacto');
		}?>
	</div>

<!--end ACF-->

