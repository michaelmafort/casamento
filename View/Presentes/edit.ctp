<div class="presentes form">
<?php echo $this->Form->create('Presente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Presente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('image_url');
		echo $this->Form->input('thumb_url');
		echo $this->Form->input('price');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
		echo $this->Form->input('email');
		echo $this->Form->input('checked', array('label' => 'Confirmado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Presente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Presente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Presentes'), array('action' => 'index')); ?></li>
	</ul>
</div>
