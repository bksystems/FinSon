<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesProductsTypesState $salesProductsTypesState
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Sales Products Types State'), ['action' => 'edit', $salesProductsTypesState->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Sales Products Types State'), ['action' => 'delete', $salesProductsTypesState->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $salesProductsTypesState->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Sales Products Types States'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Sales Products Types State'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($salesProductsTypesState->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($salesProductsTypesState->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type State') ?></th>
                    <td><?= h($salesProductsTypesState->type_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salesProductsTypesState->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salesProductsTypesState->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $salesProductsTypesState->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesProductsTypesState->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
