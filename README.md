# jQuery Checkbox Replacement

 Tested with:

*	IE 6, IE 7, IE 8
*	Firefox 3.6
*	Chrome 5.0
*	Safari 4.2
*	jQuery 1.3.2, 1.4.2

![Before](https://github.com/danielkemper/jquery-checkboxreplacement/blob/master/images/before.png)
![After](https://github.com/danielkemper/jquery-checkboxreplacement/blob/master/images/after.png)




## HTML-Markup
	<label for="apple">Apple</label>
	<input id="apple" checked="checked" name="apple" type="checkbox" />
	<label for="strawberry">Strawberry</label>
	<input id="strawberry" name="strawberry" type="checkbox" />
	<label for="pear">Pear</label>
	<input id="pear" name="pear" type="checkbox" />
	<label for="cranberry">Cranberry</label>
	<input id="cranberry" name="cranberry" type="checkbox" />
	<label for="carrot">Carrot</label>
	<input id="carrot" checked="checked" name="carrot" type="checkbox" />
	<label for="peach">Peach</label>
	<input id="peach" checked="checked" name="peach" type="checkbox" />

## CSS-Code
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

# Javascript-Code
	$(document).ready(function() {
	$('input[type=checkbox]').each(function() {
		$($("label[for="+$(this).attr('id')+"]")).click(function(e) {
			e.preventDefault();
			c = $("#"+$(this).attr('for'));
			$(c).attr('checked',!$(c).is(':checked')).is(':checked') ? $(this).removeClass('checkbox_unchecked').addClass('checkbox_checked') : $(this).removeClass('checkbox_checked').addClass('checkbox_unchecked');
		}).addClass($(this).is(':checked') ? 'checkbox_checked' : 'checkbox_unchecked');
		}).hide();
	});
 

