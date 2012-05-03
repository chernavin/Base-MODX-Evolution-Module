<?php
/**
 * Datepicker
 */
?>

<script src="/manager/media/script/mootools/mootools.js" type="text/javascript" ></script>
<script src="/manager/media/calendar/datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
	window.addEvent('domready', function(){
		var dpOffset = -10;
		var dpformat = 'dd.mm.YYYY';
		var dpdayNames = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
		//new DatePicker($('id'), {'yearOffset': dpOffset,'format':dpformat,'dayNames':dpdayNames,'dayChars':2,'startDay':1});
	});
</script>