<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-left">
					<a href="<?php echo home_url( '/' ); ?>"><img alt="logo" class="e-claro logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /></a>
				</div>
				<div class="col-md-9">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="<?php echo home_url( '/' )."sobre"; ?>">Sobre a Data Pontual</a></li
						><li><a href="<?php echo home_url( '/' )."logistica-para-ecommerce"; ?>">Logística para e-Commerce</a></li
						><li><a href="<?php echo home_url( '/' )."envie-email"; ?>">Envie um e-mail</a></li
						><li><a href="<?php echo home_url( '/' )."ligue-agora"; ?>">Ligue Agora</a></li
						><li><a href="http://54.207.92.38">Entrar</a></li
						><li><a href="#" data-toggle="modal" data-target="#myModala">Criar Conta</a></li>
						</ul>								
					</div>						
					<div class="menu-header clearfix">
						<div class="menu-op"><a href="#" data-toggle="modal" data-target="#myModala">Criar Conta</a></div>
						<div class="menu-op menu-sec"><a href="http://54.207.92.38">Entrar</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."ligue-agora"; ?>"><img alt="logo" class="e-claro menu-img tel" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.png"; ?>" /><label>Ligue Agora</label></a></div>	
						<div class="menu-op"><a href="<?php echo home_url( '/' )."envie-email"; ?>"><img alt="logo" class="e-claro menu-img email" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/e-mail.png"; ?>" /><label>Envie um e-mail</label></a></div>								
						<div class="menu-op"><a href="<?php echo home_url( '/' )."logistica-para-ecommerce"; ?>">Logística para e-Commerce</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">Sobre a Data Pontual</a></div>
					</div>
				</div>					
			</div>
		</div>
	</nav>
