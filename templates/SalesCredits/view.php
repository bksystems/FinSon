<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesCredit $salesCredit
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Sales Credit'), ['action' => 'edit', $salesCredit->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Sales Credit'), ['action' => 'delete', $salesCredit->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $salesCredit->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Sales Credits'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Sales Credit'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($salesCredit->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($salesCredit->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Business Partner Uuid') ?></th>
                    <td><?= h($salesCredit->bps_business_partner_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sales Product Uuid') ?></th>
                    <td><?= h($salesCredit->sales_product_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sales Products Types State Uuid') ?></th>
                    <td><?= h($salesCredit->sales_products_types_state_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Requested Amount') ?></th>
                    <td><?= $this->Number->format($salesCredit->requested_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount Payable') ?></th>
                    <td><?= $this->Number->format($salesCredit->amount_payable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $this->Number->format($salesCredit->payment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Init Date Credit') ?></th>
                    <td><?= h($salesCredit->init_date_credit) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date Credit') ?></th>
                    <td><?= h($salesCredit->end_date_credit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salesCredit->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salesCredit->modified) ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
