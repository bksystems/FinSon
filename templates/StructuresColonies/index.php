<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresColony[]|\Cake\Collection\CollectionInterface $structuresColonies
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">structuresColonies</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Structures Colony'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
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
                    <th><?= $this->Paginator->sort('structures_country_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_state_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_municipality_uuid') ?></th>
                    <th><?= $this->Paginator->sort('colony') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('enable') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structuresColonies as $structuresColony): ?>
                <tr>
                    <td><?= h($structuresColony->uuid) ?></td>
                    <td><?= $structuresColony->has('structures_country') ? $this->Html->link($structuresColony->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $structuresColony->structures_country->uuid]) : '' ?></td>
                    <td><?= $structuresColony->has('structures_state') ? $this->Html->link($structuresColony->structures_state->state, ['controller' => 'StructuresStates', 'action' => 'view', $structuresColony->structures_state->uuid]) : '' ?></td>
                    <td><?= $structuresColony->has('structures_municipality') ? $this->Html->link($structuresColony->structures_municipality->municipality, ['controller' => 'StructuresMunicipalities', 'action' => 'view', $structuresColony->structures_municipality->uuid]) : '' ?></td>
                    <td><?= h($structuresColony->colony) ?></td>
                    <td><?= $this->Number->format($structuresColony->postal_code) ?></td>
                    <td><?= h($structuresColony->enable) ?></td>
                    <td><?= h($structuresColony->created) ?></td>
                    <td><?= h($structuresColony->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $structuresColony->uuid]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $structuresColony->uuid]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $structuresColony->uuid], ['confirm' => __('Esta seguro de eliminar el registro # {0}?', $structuresColony->uuid)]) ?>
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