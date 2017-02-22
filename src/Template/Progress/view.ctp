<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Progres'), ['action' => 'edit', $progres->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Progres'), ['action' => 'delete', $progres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $progres->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Progress'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Progres'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="progress view large-9 medium-8 columns content">
    <h3><?= h($progres->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($progres->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($progres->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($progres->id) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $this->Number->format($progres->state) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($progres->description)); ?>
    </div>
</div>
