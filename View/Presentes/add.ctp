<div class="presentes form">
<?php echo $this->Form->create('Presente'); ?>
	<fieldset>
		<legend><?php echo __('Add Presente'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('image_url');
		echo $this->Form->input('thumb_url');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Presentes'), array('action' => 'index')); ?></li>
	</ul>
</div>
