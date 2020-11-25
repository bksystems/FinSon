<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesTypesPayment $salesTypesPayment
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Sales Types Payment'), ['action' => 'edit', $salesTypesPayment->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Sales Types Payment'), ['action' => 'delete', $salesTypesPayment->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $salesTypesPayment->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Sales Types Payments'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Sales Types Payment'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($salesTypesPayment->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($salesTypesPayment->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Pyment') ?></th>
                    <td><?= h($salesTypesPayment->type_pyment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paydays') ?></th>
                    <td><?= $this->Number->format($salesTypesPayment->paydays) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salesTypesPayment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salesTypesPayment->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $salesTypesPayment->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesTypesPayment->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>