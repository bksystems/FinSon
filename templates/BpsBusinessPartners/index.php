<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner[]|\Cake\Collection\CollectionInterface $bpsBusinessPartners
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartners</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Bps Business Partner'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Listado</div>
            <div class="card-body">
                <table class="table" style="width: 100%" id="index_table">
    <thead>
                <tr>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('bps_unique_number') ?></th>
                    <th><?= $this->Paginator->sort('bps_last_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_second_last_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_first_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_second_name') ?></th>
                    <th><?= $this->Paginator->sort('bps_birthdate') ?></th>
                    <th><?= $this->Paginator->sort('bps_gender_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_country_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_state_uuid') ?></th>
                    <th><?= $this->Paginator->sort('bps_unique_registry_key') ?></th>
                    <th><?= $this->Paginator->sort('bps_elector_key') ?></th>
                    <th><?= $this->Paginator->sort('bps_federal_taxpayer_registry') ?></th>
                    <th><?= $this->Paginator->sort('bps_identification_number') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bpsBusinessPartners as $bpsBusinessPartner): ?>
                <tr>
                    <td><?= h($bpsBusinessPartner->uuid) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_unique_number) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_first_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_birthdate) ?></td>
                    <td><?= $bpsBusinessPartner->has('structures_state') ? $this->Html->link($bpsBusinessPartner->bps_gender->gender, ['controller' => 'BpsGender', 'action' => 'view', $bpsBusinessPartner->bps_gender->uuid]) : '' ?></td>
                    <td><?= $bpsBusinessPartner->has('structures_country') ? $this->Html->link($bpsBusinessPartner->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $bpsBusinessPartner->structures_country->uuid]) : '' ?></td>
                    <td><?= $bpsBusinessPartner->has('structures_state') ? $this->Html->link($bpsBusinessPartner->structures_state->state, ['controller' => 'StructuresStates', 'action' => 'view', $bpsBusinessPartner->structures_state->uuid]) : '' ?></td>
                    <td><?= h($bpsBusinessPartner->bps_unique_registry_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_federal_taxpayer_registry) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_identification_number) ?></td>
                    <td><?= h($bpsBusinessPartner->created) ?></td>
                    <td><?= h($bpsBusinessPartner->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Esta seguro de eliminar el registro # {0}?', $bpsBusinessPartner->uuid)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#index_table').DataTable({
        "language": {
            "emptyTable":     "No se detecto información",
            "info":           "Mostrando _START_ de _END_ de _TOTAL_ registros",
            "infoEmpty":      "Mostrando 0 de 0 de 0 registros",
            "infoFiltered":   "(filtrado de un total _MAX_ registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontraron resultados",
            "paginate": {
                "first":      "<<",
                "last":       ">>",
                "next":       ">",
                "previous":   "<"
            },
            "aria": {
                "sortAscending":  ": Activado ascendente",
                "sortDescending": ": Activado desendente"
            }
        }
         
    });
} );
</script>