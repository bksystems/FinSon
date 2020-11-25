<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesProduct $salesProduct
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Sales Product'), ['action' => 'edit', $salesProduct->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Sales Product'), ['action' => 'delete', $salesProduct->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $salesProduct->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Sales Products'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Sales Product'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($salesProduct->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($salesProduct->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($salesProduct->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sales Types Payment Uuid') ?></th>
                    <td><?= h($salesProduct->sales_types_payment_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anual Rate') ?></th>
                    <td><?= $this->Number->format($salesProduct->anual_rate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salesProduct->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salesProduct->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $salesProduct->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesProduct->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
