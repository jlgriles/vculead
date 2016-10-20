<div class="forms form">
<?php echo $this->Form->create('Form'); ?>
	<fieldset>
		<legend><?php echo __('Edit Form'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('type');
		echo $this->Form->input('datesubmitted');
		echo $this->Form->input('semester');
		echo $this->Form->input('organizationname');
		echo $this->Form->input('supervisorname');
		echo $this->Form->input('supervisortitle');
		echo $this->Form->input('supervisoremail');
		echo $this->Form->input('supervisorphone');
		echo $this->Form->input('verified');
		echo $this->Form->input('verifieddate');
		echo $this->Form->input('emailsentdate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Form.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Form.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
	</ul>
</div>
