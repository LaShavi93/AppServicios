<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Methods'), ['controller' => 'Methods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Method'), ['controller' => 'Methods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Promotions'), ['controller' => 'Promotions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Promotion'), ['controller' => 'Promotions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Progress'), ['controller' => 'Progress', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Progres'), ['controller' => 'Progress', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $payment->has('user') ? $this->Html->link($payment->user->name, ['controller' => 'Users', 'action' => 'view', $payment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Method') ?></th>
            <td><?= $payment->has('method') ? $this->Html->link($payment->method->name, ['controller' => 'Methods', 'action' => 'view', $payment->method->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Promotion') ?></th>
            <td><?= $payment->has('promotion') ? $this->Html->link($payment->promotion->name, ['controller' => 'Promotions', 'action' => 'view', $payment->promotion->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Reference') ?></th>
            <td><?= h($payment->reference) ?></td>
        </tr>
        <tr>
            <th><?= __('Progres') ?></th>
            <td><?= $payment->has('progres') ? $this->Html->link($payment->progres->name, ['controller' => 'Progress', 'action' => 'view', $payment->progres->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $this->Number->format($payment->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($payment->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($payment->applications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Orderid') ?></th>
                <th><?= __('Costumer Id') ?></th>
                <th><?= __('Technical Id') ?></th>
                <th><?= __('Service Id') ?></th>
                <th><?= __('Start Time') ?></th>
                <th><?= __('End Time') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Progress Id') ?></th>
                <th><?= __('State') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($payment->applications as $applications): ?>
            <tr>
                <td><?= h($applications->id) ?></td>
                <td><?= h($applications->orderid) ?></td>
                <td><?= h($applications->costumer_id) ?></td>
                <td><?= h($applications->technical_id) ?></td>
                <td><?= h($applications->service_id) ?></td>
                <td><?= h($applications->start_time) ?></td>
                <td><?= h($applications->end_time) ?></td>
                <td><?= h($applications->address) ?></td>
                <td><?= h($applications->progress_id) ?></td>
                <td><?= h($applications->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
