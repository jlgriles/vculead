<div class="hours form">
<?php echo $this->Form->create('Hour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('form_id');
		echo $this->Form->input('volunteerrole');
		echo $this->Form->input('hoursspent');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hour.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hour.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
