<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22packages%22%3A%5B%22search%22%5D%7D%5D%7D"></script>

<!-- Todo lo que diga ACCION:algo hay que reemplazarlo por la acciòn correspondiente -->

<script>

function changeTab(link){
	//$('main').attr('class', 'home ' + tab);
	$('.search-options li').removeClass('active');
	$(link).parent().addClass('active');
	$('form[name="search-box"] input[name="search"]').focus();
	$('.search-btn-option').show();
}

function submitMe(){
	$('search-box').submit();
}

</script>

	<div id="wrapper">
		<div class="taringa-search">
			<div class="taringa-bar">
				<ul class="search-options"  style="height:27px;	margin:0 auto;	padding:0;	width:610px;">
					<li class="active"><a href="/frontend_dev.php/" onclick="changeTab( this);">Home</a></li>
					<li><a href="" onclick="changeTab(this); return false">Listados</a></li>
					<li><a href="" onclick="changeTab(this); return false">Sets</a></li>
					<li id="logo"></li>
				</ul>
			</div>

			<div class="search clearfix">
				<div class="search-box">
					<form class="clearfix" id="search-box" style="padding:0;margin:0" action="<?php echo url_for('/card/index') ?>" method="get" onsubmit="window.search.onsubmit()">
						<div class="input-left"></div>			
						<input type="text" class="sinput" id="searchBox" >
						<div class="input-right"></div>
						<div class="btn-search floatL">
							<a href="algo"></a>
						</div>
					</form>
					
					<div id="div1" class="search-btn-option">
						M10
					</div>
					<div id="separador">&nbsp;</div>
					<div id="div2" class="search-btn-option">
						M11
					</div>
				</div>

			</div>
		
		</div>
	</div>
</div>
<script type="text/javascript">
	$('searchBox').focus();
</script>
