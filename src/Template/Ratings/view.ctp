<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rating'), ['action' => 'edit', $rating->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rating'), ['action' => 'delete', $rating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rating->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ratings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rating'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ratings view large-9 medium-8 columns content">
    <h3><?= h($rating->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $rating->has('user') ? $this->Html->link($rating->user->name, ['controller' => 'Users', 'action' => 'view', $rating->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Application') ?></th>
            <td><?= $rating->has('application') ? $this->Html->link($rating->application->id, ['controller' => 'Applications', 'action' => 'view', $rating->application->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($rating->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= $this->Number->format($rating->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Costumer Id') ?></th>
            <td><?= $this->Number->format($rating->costumer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $this->Number->format($rating->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($rating->date) ?></td>
        </tr>
    </table>
</div>
