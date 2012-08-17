<?php
/**
 * Datepicker
 */
?>

<script src="<?= MODX_BASE_URL ?>manager/media/script/mootools/mootools.js" type="text/javascript" ></script>
<script src="<?= MODX_BASE_URL ?>manager/media/calendar/datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
	window.addEvent('domready', function(){
		var dpOffset = -10;
		var dpformat = 'dd.mm.YYYY';
		var dpdayNames = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
		var dpmonthNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
		//new DatePicker($('id'), {'yearOffset': dpOffset,'format':dpformat,'dayNames':dpdayNames,'monthNames':dpmonthNames,'dayChars':2,'startDay':1});
	});
</script>
