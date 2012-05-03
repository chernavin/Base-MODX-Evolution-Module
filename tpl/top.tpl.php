<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="media/style/<?= $manager_theme ?>/style.css">

		<script>
			function post_form(action, id) {
				document.module.action.value=action;
				
				if (id != null)
				{
					document.module.item_id.value=id;
				}
		
				document.module.submit();
			}
		</script>
	</head>

	<body><br>

		<div class="sectionHeader"><?= $mod_name ?></div><div class="sectionBody">
		
		<h3 id="title"></h3>

		<form name="module" method="post">
			<input name="action" type="hidden" value="">
			<input name="item_id" type="hidden" value="">