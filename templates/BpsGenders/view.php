<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsGender $bpsGender
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Gender'), ['action' => 'edit', $bpsGender->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Gender'), ['action' => 'delete', $bpsGender->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsGender->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Genders'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Gender'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsGender->gender) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsGender->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($bpsGender->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sex') ?></th>
                    <td><?= h($bpsGender->sex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender Full') ?></th>
                    <td><?= h($bpsGender->gender_full) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsGender->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsGender->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $bpsGender->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
