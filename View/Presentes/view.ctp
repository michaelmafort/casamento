<div class="presentes view">
<h2><?php  echo __('Presente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Url'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['image_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumb Url'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['thumb_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="presentes view">
<h2><?php  echo __('Presenteado por'); ?></h2>
	<dl>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentário'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($presente['Presente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presente'), array('action' => 'edit', $presente['Presente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presente'), array('action' => 'delete', $presente['Presente']['id']), null, __('Are you sure you want to delete # %s?', $presente['Presente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
