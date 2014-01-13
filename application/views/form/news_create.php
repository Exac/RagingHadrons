<style type="text/css" scoped="scoped">

</style>

<div class="notice">
<?php echo validation_errors(); ?>

<?php echo form_open('form/get/'.$location); ?>

<?php if(isset($errors))echo $errors; ?>
</div>

<h5>Title</h5>
<input type="text" name="title" value="<?php echo set_value('title'); ?>" size="50" />

<h5>Article</h5>
<textarea name="content"><?php echo set_value('content'); ?></textarea>

<div><input type="submit" class="button" value="Submit News" /></div>

</form>
