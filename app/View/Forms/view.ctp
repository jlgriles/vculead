<div class="forms view">
<h2><?php echo __('Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($form['Form']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($form['User']['id'], array('controller' => 'users', 'action' => 'view', $form['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($form['Form']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datesubmitted'); ?></dt>
		<dd>
			<?php echo h($form['Form']['datesubmitted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo h($form['Form']['semester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organizationname'); ?></dt>
		<dd>
			<?php echo h($form['Form']['organizationname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supervisorname'); ?></dt>
		<dd>
			<?php echo h($form['Form']['supervisorname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supervisortitle'); ?></dt>
		<dd>
			<?php echo h($form['Form']['supervisortitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supervisoremail'); ?></dt>
		<dd>
			<?php echo h($form['Form']['supervisoremail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supervisorphone'); ?></dt>
		<dd>
			<?php echo h($form['Form']['supervisorphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($form['Form']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verifieddate'); ?></dt>
		<dd>
			<?php echo h($form['Form']['verifieddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emailsentdate'); ?></dt>
		<dd>
			<?php echo h($form['Form']['emailsentdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($form['Form']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($form['Form']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form'), array('action' => 'edit', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form'), array('action' => 'delete', $form['Form']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $form['Form']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hours'); ?></h3>
	<?php if (!empty($form['Hour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Form Id'); ?></th>
		<th><?php echo __('Volunteerrole'); ?></th>
		<th><?php echo __('Hoursspent'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($form['Hour'] as $hour): ?>
		<tr>
			<td><?php echo $hour['id']; ?></td>
			<td><?php echo $hour['form_id']; ?></td>
			<td><?php echo $hour['volunteerrole']; ?></td>
			<td><?php echo $hour['hoursspent']; ?></td>
			<td><?php echo $hour['date']; ?></td>
			<td><?php echo $hour['created']; ?></td>
			<td><?php echo $hour['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hours', 'action' => 'view', $hour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hours', 'action' => 'edit', $hour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hours', 'action' => 'delete', $hour['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hour['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
