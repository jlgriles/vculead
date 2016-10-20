<div class="forms index">
	<h2><?php echo __('Forms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('datesubmitted'); ?></th>
			<th><?php echo $this->Paginator->sort('semester'); ?></th>
			<th><?php echo $this->Paginator->sort('organizationname'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisorname'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisortitle'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisoremail'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisorphone'); ?></th>
			<th><?php echo $this->Paginator->sort('verified'); ?></th>
			<th><?php echo $this->Paginator->sort('verifieddate'); ?></th>
			<th><?php echo $this->Paginator->sort('emailsentdate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($forms as $form): ?>
	<tr>
		<td><?php echo h($form['Form']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($form['User']['id'], array('controller' => 'users', 'action' => 'view', $form['User']['id'])); ?>
		</td>
		<td><?php echo h($form['Form']['type']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['datesubmitted']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['semester']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['organizationname']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['supervisorname']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['supervisortitle']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['supervisoremail']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['supervisorphone']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['verified']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['verifieddate']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['emailsentdate']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['created']); ?>&nbsp;</td>
		<td><?php echo h($form['Form']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $form['Form']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $form['Form']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $form['Form']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $form['Form']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
	</ul>
</div>
