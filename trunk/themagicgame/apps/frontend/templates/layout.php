<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>The Time of Game - Magic Cards</title>
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<?php include_javascripts() ?>
		<?php include_stylesheets() ?>
	</head>

<body>
	<div id="newContainer">
		<div id="bn">
				<?php include_once "buscador/buscador.php"; ?>
		</div>
		
		<div id="cn">
			<div id="m1"><!--reportes-->
				<div class="tl" id="con">Cartas</div>
		<div id="bx">
			<div class="menu">
				<a href="<?php echo url_for('card/index?expansion=M11') ?>" class="menu">M11</a>
				<a href="<?php echo url_for('card/index?expansion=ROE') ?>" class="menu">Rise of Eldrazi</a>
				<a href="<?php echo url_for('card/index?expansion=WWK') ?>" class="menu">Worldwake</a>
				<a href="<?php echo url_for('card/index?expansion=ZEN') ?>" class="menu">Zendikar</a>
				<a href="<?php echo url_for('card/index?expansion=M10') ?>" class="menu">M10</a>
				<a href="" class="menu">Bajo encargo</a>
				<a href="" class="menu">Combos</a>
				<a href="" class="menu">Packs de cartas</a>
				<a href="" class="menu">Boosters</a>
				<a href="" class="menu">Boosters Box</a>
			</div>
			<div class="clear"></div>
		</div>
		
		<div style="padding-bottom: 10px;"><img src="imagenes/bt-bx.png"></div>
		
		<div class="tl" id="con">Accesorios</div>
		<div id="bx">
			<div class="menu">
					<a href="" class="menu">PortFolios</a> 
					<a href="" class="menu">Protectores</a>
					<a href="" class="menu">Card Decks</a>
			</div>
			<div class="clear"></div>
		</div>
		<div style="padding-bottom: 10px;"></div>
		
		<div class="tl" id="con">Envios</div>
		
		<div id="bx">
			<div class="menu">
				<a href="" class="menu">Capital Federal</a>
				<a href="" class="menu">Interior del Pais</a>
			</div>
			<div class="clear"></div>
		</div>
		
		<div style="padding-bottom: 10px;"></div>
		
		<div class="clear"></div>
		</div>
		<!--carrito-->
		<div id="m2">
		<div id="content">
	        <?php if ($sf_user->hasFlash('notice')): ?>
	          <div class="flash_notice">
	            <?php echo $sf_user->getFlash('notice') ?>
	          </div>
	        <?php endif ?>
	 
	        <?php if ($sf_user->hasFlash('error')): ?>
	          <div class="flash_error">
	            <?php echo $sf_user->getFlash('error') ?>
	          </div>
	        <?php endif ?>
	 
	        <div class="content">
	          <?php echo $sf_content ?>
	        </div>
	      </div>
		</div>
		<!--/carrito-->
		
		
		
		
		
		
		
		
		
		
		<div class="clear"></div>
		</div>
		<!--/estandar-->
		
		
		<div class="clear"></div>
		
		
		
		<!--footer-->
		<div class="footer">
			<div class="footer_resize">
				<ul>
					<li><a href="">INICIO</a></li>
					<li><a href="list.php">Listado de Cartas</a></li>
					<li><a href="index-2.php">Envíos</a></li>
					<li><a href="contactenos.php">Contáctanos</a></li>
				</ul>
				<p>TheMagicGame</p>
				<div class="clear"></div>
			</div>
		</div>
		<!--//footer-->
	</div>
</body>


</html>
