<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vnumber'); ?></dt>
		<dd>
			<?php echo h($user['User']['vnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isadmin'); ?></dt>
		<dd>
			<?php echo h($user['User']['isadmin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Forms'); ?></h3>
	<?php if (!empty($user['Form'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Datesubmitted'); ?></th>
		<th><?php echo __('Semester'); ?></th>
		<th><?php echo __('Organizationname'); ?></th>
		<th><?php echo __('Supervisorname'); ?></th>
		<th><?php echo __('Supervisortitle'); ?></th>
		<th><?php echo __('Supervisoremail'); ?></th>
		<th><?php echo __('Supervisorphone'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('Verifieddate'); ?></th>
		<th><?php echo __('Emailsentdate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Form'] as $form): ?>
		<tr>
			<td><?php echo $form['id']; ?></td>
			<td><?php echo $form['user_id']; ?></td>
			<td><?php echo $form['type']; ?></td>
			<td><?php echo $form['datesubmitted']; ?></td>
			<td><?php echo $form['semester']; ?></td>
			<td><?php echo $form['organizationname']; ?></td>
			<td><?php echo $form['supervisorname']; ?></td>
			<td><?php echo $form['supervisortitle']; ?></td>
			<td><?php echo $form['supervisoremail']; ?></td>
			<td><?php echo $form['supervisorphone']; ?></td>
			<td><?php echo $form['verified']; ?></td>
			<td><?php echo $form['verifieddate']; ?></td>
			<td><?php echo $form['emailsentdate']; ?></td>
			<td><?php echo $form['created']; ?></td>
			<td><?php echo $form['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forms', 'action' => 'view', $form['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forms', 'action' => 'edit', $form['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forms', 'action' => 'delete', $form['id']), array('confirm' => __('Are you sure you want to delete # %s?', $form['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
