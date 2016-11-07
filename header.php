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
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" />
				</div>
				<div class="col-md-8 col-md-offset-1">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="#topo">Início</a></li
						><li><a href="#sobre-home">Sobre a Data Pontual</a></li
						><li><a href="#solucoes-home">Logística para e-Commerce</a></li
						><li><a href="#orcamento">Contato</a></li
						><li><a href="#">Entrar</a></li
						><li><a href="#">Criar Conta</a></li>
						</ul>								
					</div>						
					<div class="menu-header clearfix">
						<div class="menu-op"><a class="criar-conta" href="#">Criar Conta</a></div>
						<div class="menu-op menu-sec"><a href="#">Entrar</a></div>
						<div class="menu-op"><a href="#orcamento">Contato</a></div>							
						<div class="menu-op"><a href="#solucoes-home">Logística para e-Commerce</a></div>
						<div class="menu-op"><a href="#sobre-home">Sobre a Data Pontual</a></div>
						<div class="menu-op"><a href="#topo">Início</a></div>
					</div>
				</div>					
			</div>
		</div>
	</nav>
