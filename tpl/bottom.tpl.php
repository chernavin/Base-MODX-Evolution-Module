</form>
</div>

<script type="text/javascript">
	var title = '<?= $title ?>',
		titleElem = document.getElementById('title');

	if (title != '') {
		titleElem.innerHTML = title;
	} else {
		titleElem.parentNode.removeChild(titleElem);
	}
</script>

</body>
</html>
