<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _novster
 */

get_header(); ?>

	<div id="hp_full_slider">

		<div class="hp_section first lazyload active" data-bgset="<?php echo get_template_directory_uri() . '/assets/img/hp-1.jpg'; ?> 400w" data-sizes="auto">

			<div class="content_center">	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/logo-novster.svg'; ?>" width="254" height="150" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
				<hgroup>
					<h1><?php bloginfo( 'name' ); ?></h1>
					<h2>Agitateur d'innovation</h2>
				</hgroup>
			</div>
				
		</div>
		<div class="hp_section second red">

			<div class="animation-icon position-1">
				<i class="icon-novster icon_arrow_angle"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-circle"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_angle"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-novster icon_plus"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus red"></i>
			</div>

			<div class="content_center boxed">
				<h2 class="hp_section_title">NOVSTER vous apporte <br>des solutions pour innover</h2>

				<ul class="no-list step_list">
					<li data-menuanchor="preparation">
						<a href='#preparation'><span class="text-rotate">Se préparer</span></a>
					</li>
					<li data-menuanchor="orientation">
						<a href='#orientation'><span class="text-rotate">S'orienter</span></a>
					</li>	
					<li data-menuanchor="experimentation">
						<a href='#experimentation'><span class="text-rotate">Expérimenter</span></a>
					</li>
					<li data-menuanchor="diffusion">
						<a href='#diffusion'><span class="text-rotate">Diffuser</span></a>
					</li>		
				</ul>
			</div>				
		</div>
		<div class="hp_section orange step_section bg_comete">

			<div class="animation-icon position-1">
				<i class="icon-novster icon_chart"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-novster icon_angle red"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-circle"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-novster icon_double_square"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-novster icon_bag"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus"></i>
			</div>

			<div class="content_center boxed">

				<div class="step_content">
					<h2 class="hp_section_title">Se préparer</h2>
					<h3>Comment appréhender la posture de l’innovateur ?</h3>
					<p>Prenez conscience de la posture de l’innovateur via des ateliers ludiques mélant théorie et pratique.</p>

					<div class="col-2 step_listing">
						<span class="title">Nos services</span>
						<ul class="no-list">
							<li>Atelier posture innovateur</li>
							<li>Atelier cuisine effectuale</li>
							<li>Définition commune de l'innovation</li>
						</ul>
					</div>

					<div class="col-2 step_listing">
						<span class="title">Mots clés</span>
						<ul class="no-list">
							<li>Effectuation</li>
							<li>Gérer l’incertitude</li>
							<li>Improvisation</li>
						</ul>
					</div>

				</div>
					 
			</div>
		</div>

		<div class="hp_section orange step_section bg_galaxy">

			<div class="animation-icon position-1">
				<i class="icon-novster arrow_angle"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-novster icon_light red"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-circle"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-novster icon_double_square"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-novster icon_bag"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus"></i>
			</div>

			<div class="content_center boxed">

				<div class="step_content">
					<h2 class="hp_section_title">S'orienter</h2>
					<h3>Comment définir votre stratégie d'innovation ?</h3>
					<p>Prenez en main les méthodologies et les outils pour structurer et piloter votre démarche d'innovation via des ateliers et formations ludiques.</p>

					<div class="col-2 step_listing">
						<span class="title">Nos services</span>
						<ul class="no-list">
							<li>Atelier business models</li>
							<li>Panorama des méthodologies</li>
							<li>Atelier idéation</li>
							<li>Définition des objectifs</li>
						</ul>
					</div>

					<div class="col-2 step_listing">
						<span class="title">Nos outils</span>
						<ul class="no-list">
							<li>ISMA 360</li>
							<li>Design thinking</li>
							<li>Base de données business models</li>
							<li>Agile games</li>
							<li>Lean Startup</li>
							<li>Open Innovation</li>
						</ul>
					</div>

				</div>
					 
			</div>
		</div>

		<div class="hp_section orange step_section bg_rocket">

			<div class="animation-icon position-1">
				<i class="icon-novster icon_arrow_angle"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-novster icon_triple_slides red"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-novster icon_angle red"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-circle"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_loading"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-novster icon_square"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus"></i>
			</div>

			<div class="content_center boxed">

				<div class="step_content">
					<h2 class="hp_section_title">Expérimenter</h2>
					<h3>Comment expérimenter vos idées ?</h3>
					<p>Prototypez rapidement votre concept pour tester sa viabilité.</p>

					<div class="col-2 step_listing">
						<span class="title">Nos services</span>
						<ul class="no-list">
							<li>Protypage de projet</li>
							<li>Sourcer les partenaires</li>
							<li>Découverte des téchnologies</li>
							<li>Design sprint</li>
						</ul>
					</div>

					<div class="col-2 step_listing">
						<span class="title">Nos outils</span>
						<ul class="no-list">
							<li>Framework de développement rapide</li>
							<li>Méthode agile</li>
							<li>Fabrication numérique</li>
						</ul>
					</div>

				</div>
					 
			</div>
		</div>

		<div class="hp_section orange step_section bg_satellite">

			<div class="animation-icon position-1">
				<i class="icon-novster icon_arrow_angle"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-circle-avoid"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-novster icon_circle_double red"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_arrow_angle red"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-novster icon_triple_cross"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-circle"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_loading"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-novster icon_angle red"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus"></i>
			</div>

			<div class="content_center boxed">

				<div class="step_content">
					<h2 class="hp_section_title">Diffuser</h2>
					<h3>Comment diffuser la culture de l’innovation dans votre entreprise ?</h3>
					<p>Sensibilisez vos équipes via des espaces dédiés pour créer une culture de l'innovation.</p>

					<div class="col-2 step_listing">
						<span class="title">Nos services</span>
						<ul class="no-list">
							<li>Mise en place d'espaces de créativité</li>
							<li>Mise en place d'espaces de partage</li>
							<li>Ateliers de sensibilisation</li>
						</ul>
					</div>

					<div class="col-2 step_listing">
						<span class="title">Mots clés</span>
						<ul class="no-list">
							<li>Créativité</li>
							<li>Espaces dédiés</li>
							<li>Partage</li>
						</ul>
					</div>

				</div>
					 
			</div>
		</div>

		<div class="hp_section red step_section final bg_nov">

			<div class="animation-icon position-1">
				<i class="icon-novster icon_arrow_angle"></i>
			</div>
			<div class="animation-icon position-2">
				<i class="icon-novster icon_light"></i>
			</div>
			<div class="animation-icon position-3">
				<i class="icon-novster icon_circle_double orange"></i>
			</div>
			<div class="animation-icon position-4">
				<i class="icon-novster icon_arrow_angle orange"></i>
			</div>
			<div class="animation-icon position-5">
				<i class="icon-novster icon_triple_cross"></i>
			</div>
			<div class="animation-icon position-6">
				<i class="icon-novster icon_bag"></i>
			</div>
			<div class="animation-icon position-7">
				<i class="icon-novster icon_arrow_center"></i>
			</div>
			<div class="animation-icon position-8">
				<i class="icon-novster icon_angle orange"></i>
			</div>
			<div class="animation-icon position-9">
				<i class="icon-novster icon_plus"></i>
			</div>

			<div class="content_center boxed">

				<a href="mailto:<?php echo antispambot('contact@novster.fr'); ?>" title="contact Novster"><?php echo antispambot('contact@novster.fr'); ?></a>
				<a href="tel:0366728491" title="téléphone Novster">03 66 72 84 91</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="site web Novster">www.novster.fr</a>
					 
			</div>
		</div>

		<div class="hp_section footer_section fp-auto-height">
			<nav>
				<ul class="table-list">
					<li>
						<a href='mailto:<?php echo antispambot('contact@novster.fr'); ?>' class="footer_link">Contact</a>
					</li>
					<li>
						<a href='/' class="footer_link" title="Services">Services</a>
					</li>
					<li>
						<a href='#' class="footer_link" title="Mentions légales Novster">Mentions légales</a>
					</li>	
					<li>
						<a href='#' class="footer_icon_link">
							<i class="icon-novster icon_facebook"></i>
							<span class="hide">Facebook</span>
						</a>
						<a href='#' class="footer_icon_link">
							<i class="icon-novster icon_twitter"></i>
							<span class="hide">Twitter</span>
						</a>
						<a href='#' class="footer_icon_link">
							<i class="icon-novster icon_youtube"></i>
							<span class="hide">Youtube</span>
						</a>
						<a href='#' class="footer_icon_link">
							<i class="icon-novster icon_linkedin"></i>
							<span class="hide">Linkedin</span>
						</a>
					</li>															
				</ul>
			</nav>	
		</div>					

	
	</div>

<?php
get_footer();