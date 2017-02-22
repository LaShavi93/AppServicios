<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Progress'), ['controller' => 'Progress', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Progres'), ['controller' => 'Progress', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ratings'), ['controller' => 'Ratings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Ratings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applications index large-9 medium-8 columns content">
    <h3><?= __('Applications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('orderid') ?></th>
                <th><?= $this->Paginator->sort('costumer_id') ?></th>
                <th><?= $this->Paginator->sort('technical_id') ?></th>
                <th><?= $this->Paginator->sort('service_id') ?></th>
                <th><?= $this->Paginator->sort('start_time') ?></th>
                <th><?= $this->Paginator->sort('end_time') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('progress_id') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
            <tr>
                <td><?= $this->Number->format($application->id) ?></td>
                <td><?= $this->Number->format($application->orderid) ?></td>
                <td><?= $this->Number->format($application->costumer_id) ?></td>
                <td><?= $application->has('user') ? $this->Html->link($application->user->name, ['controller' => 'Users', 'action' => 'view', $application->user->id]) : '' ?></td>
                <td><?= $application->has('service') ? $this->Html->link($application->service->name, ['controller' => 'Services', 'action' => 'view', $application->service->id]) : '' ?></td>
                <td><?= h($application->start_time) ?></td>
                <td><?= h($application->end_time) ?></td>
                <td><?= h($application->address) ?></td>
                <td><?= $application->has('progres') ? $this->Html->link($application->progres->name, ['controller' => 'Progress', 'action' => 'view', $application->progres->id]) : '' ?></td>
                <td><?= $this->Number->format($application->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
