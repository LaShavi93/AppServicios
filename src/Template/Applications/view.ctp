<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Progress'), ['controller' => 'Progress', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Progres'), ['controller' => 'Progress', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ratings'), ['controller' => 'Ratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Ratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applications view large-9 medium-8 columns content">
    <h3><?= h($application->orderid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($application->id) ?></td>
        </tr>        
        <tr>
            <th><?= __('Costumer') ?></th>
            <td><?= $application->has('user') ? $this->Html->link($application->user->name, ['controller' => 'Users', 'action' => 'view', $application->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Technical') ?></th>
            <td><?= $application->has('user') ? $this->Html->link($application->user->name, ['controller' => 'Users', 'action' => 'view', $application->user->id]) : '' ?></td>
        </tr>        
        <tr>
            <th><?= __('Service') ?></th>
            <td><?= $application->has('service') ? $this->Html->link($application->service->name, ['controller' => 'Services', 'action' => 'view', $application->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($application->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Progres') ?></th>
            <td><?= $application->has('progres') ? $this->Html->link($application->progres->name, ['controller' => 'Progress', 'action' => 'view', $application->progres->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Start Time') ?></th>
            <td><?= h($application->start_time) ?></td>
        </tr>
        <tr>
            <th><?= __('End Time') ?></th>
            <td><?= h($application->end_time) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $this->Number->format($application->state) ?></td>
        </tr>        
    </table>
    <div class="related">
        <h4><?= __('Related Ratings') ?></h4>
        <?php if (!empty($application->ratings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Value') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Costumer Id') ?></th>
                <th><?= __('Technical Id') ?></th>
                <th><?= __('Application Id') ?></th>
                <th><?= __('State') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($application->ratings as $ratings): ?>
            <tr>
                <td><?= h($ratings->id) ?></td>
                <td><?= h($ratings->value) ?></td>
                <td><?= h($ratings->date) ?></td>
                <td><?= h($ratings->costumer_id) ?></td>
                <td><?= h($ratings->technical_id) ?></td>
                <td><?= h($ratings->application_id) ?></td>
                <td><?= h($ratings->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ratings', 'action' => 'view', $ratings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ratings', 'action' => 'edit', $ratings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ratings', 'action' => 'delete', $ratings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($application->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Method Id') ?></th>
                <th><?= __('Promotion Id') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Reference') ?></th>
                <th><?= __('Progress Id') ?></th>
                <th><?= __('State') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($application->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->user_id) ?></td>
                <td><?= h($payments->method_id) ?></td>
                <td><?= h($payments->promotion_id) ?></td>
                <td><?= h($payments->date) ?></td>
                <td><?= h($payments->reference) ?></td>
                <td><?= h($payments->progress_id) ?></td>
                <td><?= h($payments->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
