<?php
get_header('sem-banner'); ?>

<section id="contato-pag">
	<div class="container">
		<div class="row">
			<div class="col-md-6 info-left text-left">
				<h1 class="small">Contato</h1>
				<h4>Envie sua mensagem para nós e retornaremos o mais breve possível.</h4>
				<div class="form7">
				<?php echo do_shortcode( '[contact-form-7 id="311" title="Sem título"]' ); ?>
				</div>
			</div>
			<div class="col-md-6 text-left">
				<div class="videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0926522963587!2d-46.59455858446169!3d-23.601009868944054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c7817ead0b3%3A0x1e7d9c392b6fabe7!2sR.+Nova+Hamburgo%2C+99+-+Ipiranga%2C+S%C3%A3o+Paulo+-+SP%2C+04217-040!5e0!3m2!1spt-BR!2sbr!4v1454703459415" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="info-right">
					<strong>Endereço</strong>
					<br>Rua Nova Hamburgo, 99
					<br>Ipiranga - São Paulo - SP
					<br>CEP 04217-040
					<br><br><strong>Telefone</strong>
					<br>11 2061-3138
					<br><br><strong>Email</strong>
					<br>contato@datapontual.com.br
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
