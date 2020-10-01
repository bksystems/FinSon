<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresCountry[]|\Cake\Collection\CollectionInterface $structuresCountries
 */
?>
<div class="structuresCountries index content">
    <?= $this->Html->link(__('New Structures Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Structures Countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('country_key') ?></th>
                    <th><?= $this->Paginator->sort('enable') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structuresCountries as $structuresCountry): ?>
                <tr>
                    <td><?= h($structuresCountry->uuid) ?></td>
                    <td><?= h($structuresCountry->country) ?></td>
                    <td><?= h($structuresCountry->country_key) ?></td>
                    <td><?= h($structuresCountry->enable) ?></td>
                    <td><?= h($structuresCountry->created) ?></td>
                    <td><?= h($structuresCountry->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $structuresCountry->uuid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $structuresCountry->uuid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $structuresCountry->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresCountry->uuid)]) ?>
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
