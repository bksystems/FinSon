<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresColony $structuresColony
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Structures Colony'), ['action' => 'edit', $structuresColony->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Structures Colony'), ['action' => 'delete', $structuresColony->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresColony->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Structures Colonies'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Structures Colony'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($structuresColony->Colony) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($structuresColony->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Country') ?></th>
                    <td><?= $structuresColony->has('structures_country') ? $this->Html->link($structuresColony->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $structuresColony->structures_country->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures State') ?></th>
                    <td><?= $structuresColony->has('structures_state') ? $this->Html->link($structuresColony->structures_state->state, ['controller' => 'StructuresStates', 'action' => 'view', $structuresColony->structures_state->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Municipality') ?></th>
                    <td><?= $structuresColony->has('structures_municipality') ? $this->Html->link($structuresColony->structures_municipality->municipality, ['controller' => 'StructuresMunicipalities', 'action' => 'view', $structuresColony->structures_municipality->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colony') ?></th>
                    <td><?= h($structuresColony->colony) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= $this->Number->format($structuresColony->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($structuresColony->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($structuresColony->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $structuresColony->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($structuresColony->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
