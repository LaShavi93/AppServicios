<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Progress'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="progress form large-9 medium-8 columns content">
    <?= $this->Form->create($progres) ?>
    <fieldset>
        <legend><?= __('Add Progres') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('type');
            echo $this->Form->input('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
