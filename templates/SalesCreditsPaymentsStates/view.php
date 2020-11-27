<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesCreditsPaymentsState $salesCreditsPaymentsState
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Sales Credits Payments State'), ['action' => 'edit', $salesCreditsPaymentsState->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Sales Credits Payments State'), ['action' => 'delete', $salesCreditsPaymentsState->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $salesCreditsPaymentsState->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Sales Credits Payments States'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Sales Credits Payments State'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($salesCreditsPaymentsState->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($salesCreditsPaymentsState->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pyment State') ?></th>
                    <td><?= h($salesCreditsPaymentsState->pyment_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salesCreditsPaymentsState->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salesCreditsPaymentsState->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $salesCreditsPaymentsState->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesCreditsPaymentsState->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
