<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22packages%22%3A%5B%22search%22%5D%7D%5D%7D"></script>

<!-- Todo lo que diga ACCION:algo hay que reemplazarlo por la acciòn correspondiente -->

<script type="text/javascript" src="/js/functions.js"></script>


<script>

function changeTab(link){
	//$('main').attr('class', 'home ' + tab);
	$('.search-options li').removeClass('active');
	$(link).parent().addClass('active');
	$('form[name="search-box"] input[name="search"]').focus();
	$('.search-btn-option').show();
}

function submitSearch(){
	var formId= 'search-box-form';
	var searchText = document.getElementById('searchBox').value;
	var form = document.getElementById(formId);
	form.elements["searchBox"].value = searchText;
	submitById(formId);
}

</script>

	<div id="wrapper">
		<div class="taringa-search">
			<div class="taringa-bar">
				<ul class="search-options"  style="height:27px;	margin:0 auto;	padding:0;	width:610px;">
					<li class="active"><a href="<?php echo url_for('/') ?>" onclick="changeTab( this);">Home</a></li>
					<li><a href="" onclick="changeTab(this); return false">Listados</a></li>
					<li><a href="" onclick="changeTab(this); return false">Sets</a></li>
					<li id="logo"></li>
				</ul>
			</div>

			<div class="search">
				<div class="search-box">
					<form class="clearfix" id="search-box-form" style="padding:0;margin:0" action="<?php echo url_for('/card/index') ?>" method="get">
						<div class="input-left"></div>
						<div id="pepe">
							<input id="searchBox" name="searchBox" type="text" class="search-input" value="vamp"/>
						</div>
						<div class="input-right"></div>
						<div class="btn-search floatL">
							<a id="search-link" onclick="submitSearch();"></a>
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
	//$('searchBox').focus();
</script>
