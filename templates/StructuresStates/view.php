<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresState $structuresState
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Structures State'), ['action' => 'edit', $structuresState->uuid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Structures State'), ['action' => 'delete', $structuresState->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresState->uuid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Structures States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Structures State'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="structuresStates view content">
            <h3><?= h($structuresState->uuid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($structuresState->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Country Uuid') ?></th>
                    <td><?= h($structuresState->structures_country_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($structuresState->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Key') ?></th>
                    <td><?= h($structuresState->state_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Renapo') ?></th>
                    <td><?= h($structuresState->state_renapo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($structuresState->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($structuresState->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $structuresState->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($structuresState->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
