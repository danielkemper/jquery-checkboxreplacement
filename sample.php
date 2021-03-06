<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>JQuery Checkbox Replacement</title>
	<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<style type="text/css">
	label.checkbox_checked {
		background: #fff url(chk_on.png) no-repeat;	
		display: block;
		margin: 10px 0;
		padding-left: 25px;
		cursor: pointer;
	}
	label.checkbox_unchecked  {
		background: #fff url(chk_off.png) no-repeat;	
		display: block;
		margin: 10px 0;
		padding-left: 25px;
		cursor: pointer;
	}
	</style>
</head>
<body>
	
	<h1>JQuery Checkbox Replacement Demo</h1>
	
	<p>
	<?php
		unset($_POST['Send']);
		echo "You checked <b>".implode(", ",array_keys($_POST))."</b>";
	?>
	</p>
	<a href="source.html">Show the source</a>
	<form  method="post" accept-charset="utf-8">
		<label for="apple">Apple</label><input type="checkbox" name="apple" value="" id="apple" checked="true" />
		<label for="strawberry">Strawberry</label><input type="checkbox" name="strawberry" value="" id="strawberry" />
		<label for="pear">Pear</label><input type="checkbox" name="pear" value="" id="pear" />
		<label for="cranberry">Cranberry</label><input type="checkbox" name="cranberry" id="cranberry" value="" />
		<label for="carrot">Carrot</label><input type="checkbox" name="carrot" value="" id="carrot" checked="true" />
		<label for="peach">Peach</label><input type="checkbox" name="peach" value="" id="peach" checked="true" />

		<input type="submit" name="Send">
	</form>

	<p><b>Tested with:</b></p>

	<ul>
		<li>IE 6, IE 7, IE 8</li>
		<li>Firefox 3.6</li>
		<li>Chrome 5.0</li>
		<li>Safari 4.2</li>
		<li>jQuery 1.3.2, 1.4.2</li>
	</ul>

	<script type="text/javascript">
	$(document).ready(function() {
		$('input[type=checkbox]').each(function() {
			$($("label[for="+$(this).attr('id')+"]")).click(function(e) {
				e.preventDefault();
				c = $("#"+$(this).attr('for'));
				$(c).attr('checked',!$(c).is(':checked')).is(':checked') ? $(this).removeClass('checkbox_unchecked').addClass('checkbox_checked') : $(this).removeClass('checkbox_checked').addClass('checkbox_unchecked');
			}).addClass($(this).is(':checked') ? 'checkbox_checked' : 'checkbox_unchecked');
		}).hide();
	});
	</script>
</body>
</html>
