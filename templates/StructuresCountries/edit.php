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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $structuresCountry->uuid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $structuresCountry->uuid), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Structures Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="structuresCountries form content">
            <?= $this->Form->create($structuresCountry) ?>
            <fieldset>
                <legend><?= __('Edit Structures Country') ?></legend>
                <?php
                    echo $this->Form->control('country');
                    echo $this->Form->control('country_key');
                    echo $this->Form->control('enable');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
