<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('City') ?></th>
            <td><?= $user->has('city') ? $this->Html->link($user->city->name, ['controller' => 'Cities', 'action' => 'view', $user->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo') ?></th>
            <td><?= h($user->photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo Dir') ?></th>
            <td><?= h($user->photo_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Curriculum') ?></th>
            <td><?= h($user->curriculum) ?></td>
        </tr>
        <tr>
            <th><?= __('Curriculum Dir') ?></th>
            <td><?= h($user->curriculum_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($user->cedula) ?></td>
        </tr>
        <tr>
            <th><?= __('Cellphone') ?></th>
            <td><?= $this->Number->format($user->cellphone) ?></td>
        </tr>
        <tr>
            <th><?= __('Account') ?></th>
            <td><?= $this->Number->format($user->account) ?></td>
        </tr>
        <tr>
            <th><?= __('Point') ?></th>
            <td><?= $this->Number->format($user->point) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= $this->Number->format($user->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($user->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($user->payments)): ?>
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
            <?php foreach ($user->payments as $payments): ?>
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
    
    
    <!-- Para Mostrar Pedidos relacionados -->    
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($user->applications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Order_Id') ?></th>
                <th><?= __('Costumer Id') ?></th>
                <th><?= __('Technical Id') ?></th>
                <th><?= __('Service Id') ?></th>
                <th><?= __('Start Time') ?></th>
                <th><?= __('End Time') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Progress Id') ?></th>
                <th><?= __('state') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->applications as $applications): ?>
            <tr>
                <td><?= h($applications->id) ?></td>
                <td><?= h($applications->orderid) ?></td>
                <td><?= h($applications->user_id) ?></td>
                <td><?= h($applications->user_id) ?></td>
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
    <!-- Para Mostrar Pedidos relacionados -->
    
    
    <!-- Para Mostrar Calificaciones relacionadas -->
    <!-- Para Mostrar Calificaciones relacionadas -->
    
    
    <div class="related">
        <h4><?= __('Related Services') ?></h4>
        <?php if (!empty($user->services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Price Points') ?></th>
                <th><?= __('Money') ?></th>
                <th><?= __('Photo') ?></th>
                <th><?= __('Photo Dir') ?></th>
                <th><?= __('Term Condition') ?></th>
                <th><?= __('Warranty') ?></th>
                <th><?= __('Specification') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('State') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->services as $services): ?>
            <tr>
                <td><?= h($services->id) ?></td>
                <td><?= h($services->name) ?></td>
                <td><?= h($services->description) ?></td>
                <td><?= h($services->price) ?></td>
                <td><?= h($services->price_points) ?></td>
                <td><?= h($services->money) ?></td>
                <td><?= h($services->photo) ?></td>
                <td><?= h($services->photo_dir) ?></td>
                <td><?= h($services->term_condition) ?></td>
                <td><?= h($services->warranty) ?></td>
                <td><?= h($services->specification) ?></td>
                <td><?= h($services->category_id) ?></td>
                <td><?= h($services->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Services', 'action' => 'view', $services->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Services', 'action' => 'edit', $services->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Are you sure you want to delete # {0}?', $services->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Specialties') ?></h4>
        <?php if (!empty($user->specialties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('State') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->specialties as $specialties): ?>
            <tr>
                <td><?= h($specialties->id) ?></td>
                <td><?= h($specialties->name) ?></td>
                <td><?= h($specialties->description) ?></td>
                <td><?= h($specialties->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Specialties', 'action' => 'view', $specialties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Specialties', 'action' => 'edit', $specialties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Specialties', 'action' => 'delete', $specialties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
