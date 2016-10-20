<div class="hours view">
<h2><?php echo __('Hour'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hour['Form']['id'], array('controller' => 'forms', 'action' => 'view', $hour['Form']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteerrole'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['volunteerrole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hoursspent'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['hoursspent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hour'), array('action' => 'edit', $hour['Hour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hour'), array('action' => 'delete', $hour['Hour']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hour['Hour']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
