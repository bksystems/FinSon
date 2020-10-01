<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresState[]|\Cake\Collection\CollectionInterface $structuresStates
 */
?>
<div class="structuresStates index content">
    <?= $this->Html->link(__('New Structures State'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Structures States') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('structures_country_uuid') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th> 
                    <th><?= $this->Paginator->sort('state_key') ?></th>
                    <th><?= $this->Paginator->sort('state_renapo') ?></th>
                    <th><?= $this->Paginator->sort('enable') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structuresStates as $structuresState): ?>
                <tr>
                    <td><?= h($structuresState->structures_country->country_key) ?></td>
                    <td><?= h($structuresState->state) ?></td>
                    <td><?= h($structuresState->state_key) ?></td>
                    <td><?= h($structuresState->state_renapo) ?></td>
                    <td><?= h($structuresState->enable) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $structuresState->uuid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $structuresState->uuid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $structuresState->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresState->uuid)]) ?>
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
