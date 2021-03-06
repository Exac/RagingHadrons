<style type="text/css" scoped="scoped">

.game_img{
	position: relative;
}
.gamename{
	font-size:70px;
	color:#fff;
	display:inline-block;
	margin:0px auto 0px auto;
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjVDODQzQUM3OUI3MTFFMzhGNzQ4OUQ1NTQ1REJDMDAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjVDODQzQUQ3OUI3MTFFMzhGNzQ4OUQ1NTQ1REJDMDAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2NUM4NDNBQTc5QjcxMUUzOEY3NDg5RDU1NDVEQkMwMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2NUM4NDNBQjc5QjcxMUUzOEY3NDg5RDU1NDVEQkMwMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp3fibUAAAAPSURBVHjaYmBgYEgDCDAAAGsAZw2+cz4AAAAASUVORK5CYII=);
	position: absolute;
	bottom:0px;
}
.wildstar .panel{
	/* #53b3f0 */
	/* #acfcff */
}
.bui{
	padding: 0px;
}

</style>
<div id="maingrid">
	<!-- <section id="jumbotron">
		<img src="/upload/game/wildstar/sheep.jpg" alt="TFW no Wildstar account to make addons on T_T" />
		<h1>WILDSTAR</h1> 
	</section> -->

	<div class="row">
		<section class="full ll">

			<div class="notice">
			<?php echo validation_errors(); ?>

			<?php echo form_open('form/wildstar_signup'.$location); ?>

			<?php if(isset($errors))echo $errors; ?>
			</div>

			<h5>Character Name</h5>
			<input type="text" name="character_name" value="<?php echo set_value('character_name'); ?>" size="50" />

			<h5>Character Class</h5>
			<input type="text" name="character_name" value="<?php echo set_value('character_class'); ?>" size="50" />
			<select name="character_class" form="carform">
				<option value="esper">Esper</option>
				<option value="spellslinger">Spellslinger</option>
				<option value="engineer">Engineer</option>
				<option value="medic">Medic</option>
				<option value="stalker">Stalker</option>
			</select>

			<div><input type="submit" class="button" value="Apply" /></div>

			</form>

		</section>
	</div>
</div>
</section>