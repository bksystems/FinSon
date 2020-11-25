<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner $bpsBusinessPartner
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Business Partner'), ['action' => 'edit', $bpsBusinessPartner->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Business Partner'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Business Partner'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        
        <div class="card">
            <div class="card-header">
            <?= h($bpsBusinessPartner->full_name) ?> (Identificador: <?= h($bpsBusinessPartner->uuid) ?>)
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingPrincipal">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePrincipal" aria-expanded="true" aria-controls="collapsePrincipal">
                            Datos basicos del cliente
                            </button>
                        </h5>
                        </div>

                        <div id="collapsePrincipal" class="collapse show" aria-labelledby="headingPrincipal" data-parent="#accordion">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th><?= __('Bps Unique Number') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_unique_number) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Last Name') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_last_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Second Last Name') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_second_last_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps First Name') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_first_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Second Name') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_second_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Structures Country') ?></th>
                                    <td><?= $bpsBusinessPartner->has('structures_country') ? $this->Html->link($bpsBusinessPartner->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $bpsBusinessPartner->structures_country->uuid]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Structures State') ?></th>
                                    <td><?= $bpsBusinessPartner->has('structures_state') ? $this->Html->link($bpsBusinessPartner->structures_state->state, ['controller' => 'StructuresStates', 'action' => 'view', $bpsBusinessPartner->structures_state->uuid]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Unique Registry Key') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_unique_registry_key) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Elector Key') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Federal Taxpayer Registry') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_federal_taxpayer_registry) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Identification Number') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_identification_number) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Bps Birthdate') ?></th>
                                    <td><?= h($bpsBusinessPartner->bps_birthdate) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($bpsBusinessPartner->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($bpsBusinessPartner->modified) ?></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingComplementarios">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseComplementarios" aria-expanded="false" aria-controls="collapseComplementarios">
                            Datos complementarios
                            </button>
                        </h5>
                        </div>
                        <div id="collapseComplementarios" class="collapse" aria-labelledby="headingComplementarios" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <table class="table" style="width: 100%">
                                        <caption>Roles asignados</caption>
                                        <thead>
                                            <th>Tipo</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($bpsBusinessPartner->bps_business_partners_rols as $bpsrols): ?>
                                            <tr>
                                                <td><?= h($bpsrols->bps_types_rol->type_rol) ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="table" style="width: 100%">
                                        <caption>Telefonos asignados</caption>
                                        <thead>
                                            <th>Tipo</th>
                                            <th>Número</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($bpsBusinessPartner->bps_business_partners_phones as $bpsphones): ?>
                                            <tr>
                                                <td><?= h($bpsphones->bps_types_phone->type_phone) ?></td>
                                                <td><?= h($bpsphones->number) ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-7">
                                    <table class="table" style="width: 100%">
                                        <caption>Direcciones asignadas</caption>
                                        <thead>
                                            <th>Tipo</th>
                                            <th>Edo.</th>
                                            <th>C.P.</th>
                                            <th>Colonia</th>
                                            <th>Calle</th>
                                            <th>N. Ext.</th>
                                            <th>N. Int.</th>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
