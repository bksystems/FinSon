<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresMunicipality $structuresMunicipality
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Structures Municipality'), ['action' => 'edit', $structuresMunicipality->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Structures Municipality'), ['action' => 'delete', $structuresMunicipality->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresMunicipality->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Structures Municipalities'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Structures Municipality'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($structuresMunicipality->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($structuresMunicipality->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Country Uuid') ?></th>
                    <td><?= h($structuresMunicipality->structures_country_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures State Uuid') ?></th>
                    <td><?= h($structuresMunicipality->structures_state_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipality') ?></th>
                    <td><?= h($structuresMunicipality->municipality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipality Key') ?></th>
                    <td><?= h($structuresMunicipality->municipality_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($structuresMunicipality->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($structuresMunicipality->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $structuresMunicipality->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($structuresMunicipality->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
