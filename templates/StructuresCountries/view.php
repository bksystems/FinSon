<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresCountry $structuresCountry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Structures Country'), ['action' => 'edit', $structuresCountry->uuid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Structures Country'), ['action' => 'delete', $structuresCountry->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresCountry->uuid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Structures Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Structures Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="structuresCountries view content">
            <h3><?= h($structuresCountry->country) ?></h3>
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($structuresCountry->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($structuresCountry->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country Key') ?></th>
                    <td><?= h($structuresCountry->country_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($structuresCountry->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($structuresCountry->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $structuresCountry->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($structuresCountry->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Structures Countries') ?></h4>
                <?php if (!empty($structuresCountry->structures_countries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('Country Key') ?></th>
                            <th><?= __('Enable') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($structuresCountry->structures_countries as $structuresCountries) : ?>
                        <tr>
                            <td><?= h($structuresCountries->uuid) ?></td>
                            <td><?= h($structuresCountries->country) ?></td>
                            <td><?= h($structuresCountries->country_key) ?></td>
                            <td><?= h($structuresCountries->enable) ?></td>
                            <td><?= h($structuresCountries->description) ?></td>
                            <td><?= h($structuresCountries->created) ?></td>
                            <td><?= h($structuresCountries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StructuresCountries', 'action' => 'view', $structuresCountries->uuid]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StructuresCountries', 'action' => 'edit', $structuresCountries->uuid]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StructuresCountries', 'action' => 'delete', $structuresCountries->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresCountries->uuid)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
