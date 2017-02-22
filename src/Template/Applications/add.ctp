<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?></li>
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
<div class="applications form large-9 medium-8 columns content">
    <?= $this->Form->create($application) ?>
    <fieldset>
        <legend><?= __('Add Application') ?></legend>
        <?php
            echo $this->Form->input('orderid');
            echo $this->Form->input('costumer_id', ['options' => $CostumerUsers]);
            echo $this->Form->input('technical_id', ['options' => $TechnicalUsers]);
            echo $this->Form->input('service_id', ['options' => $services]);
            //echo $this->Form->input('start_time');
            //echo $this->Form->input('end_time');
            echo $this->Form->input('start_time', [
                'type' => 'datetime',
                'label' => 'Hora de Inicio',
                'minYear' => 1900,
                'maxYear' => date('Y'),
            ]);
            echo $this->Form->input('end_time', [
                'type' => 'datetime',
                'label' => 'Hora de Cierre',
                'minYear' => 1900,
                'maxYear' => date('Y'),
            ]);
            echo $this->Form->input('address');
            echo $this->Form->input('progress_id', ['options' => $progress]);
            echo $this->Form->input('state');
            echo $this->Form->input('payments._ids', ['options' => $payments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
