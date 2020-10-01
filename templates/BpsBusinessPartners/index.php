<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner[]|\Cake\Collection\CollectionInterface $bpsBusinessPartners
 */
?>
<div class="bpsBusinessPartners index content">
    <?= $this->Html->link(__('New Bps Business Partner'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bps Business Partners') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('bps_unique_number') ?></th>
                    <th><?= $this->Paginator->sort('bps_last_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_second_last_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_first_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_second_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_birthdate') ?></th>
                    <th><?= $this->Paginator->sort('structures_country_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_state_uuid') ?></th>
                    <th><?= $this->Paginator->sort('bps_unique_registry_key') ?></th>
                    <th><?= $this->Paginator->sort('bps_elector_key') ?></th>
                    <th><?= $this->Paginator->sort('bps_federal_taxpayer_registry') ?></th>
                    <th><?= $this->Paginator->sort('bps_identification_number') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bpsBusinessPartners as $bpsBusinessPartner): ?>
                <tr>
                    <td><?= h($bpsBusinessPartner->uuid) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_unique_number) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_first_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_birthdate) ?></td>
                    <td><?= h($bpsBusinessPartner->structures_country_uuid) ?></td>
                    <td><?= h($bpsBusinessPartner->structures_state_uuid) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_unique_registry_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_federal_taxpayer_registry) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_identification_number) ?></td>
                    <td><?= h($bpsBusinessPartner->created) ?></td>
                    <td><?= h($bpsBusinessPartner->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
