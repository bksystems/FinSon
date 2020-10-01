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
            <?= $this->Html->link(__('List Structures Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="structuresCountries form content">
            <?= $this->Form->create($structuresCountry) ?>
            <fieldset>
                <legend><?= __('Add Structures Country') ?></legend>
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
