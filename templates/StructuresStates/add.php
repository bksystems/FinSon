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
            <?= $this->Html->link(__('List Structures States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="structuresStates form content">
            <?= $this->Form->create($structuresState) ?>
            <fieldset>
                <legend><?= __('Add Structures State') ?></legend>
                <?php
                    echo $this->Form->control('structures_country_uuid', ['options' => $options_countries]);
                    echo $this->Form->control('state');
                    echo $this->Form->control('state_key');
                    echo $this->Form->control('state_renapo');
                    echo $this->Form->control('enable');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
