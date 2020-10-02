<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresState[]|\Cake\Collection\CollectionInterface $structuresStates
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">structuresStates</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Structures State'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
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
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('state_key') ?></th>
                    <th><?= $this->Paginator->sort('state_renapo') ?></th>
                    <th><?= $this->Paginator->sort('enable') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structuresStates as $structuresState): ?>
                <tr>
                    <td><?= h($structuresState->uuid) ?></td>
                    <td><?= $structuresState->has('structures_country') ? $this->Html->link($structuresState->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $structuresState->structures_country->uuid]) : '' ?></td>
                    <td><?= h($structuresState->state) ?></td>
                    <td><?= h($structuresState->state_key) ?></td>
                    <td><?= h($structuresState->state_renapo) ?></td>
                    <td><?= h($structuresState->enable) ?></td>
                    <td><?= h($structuresState->created) ?></td>
                    <td><?= h($structuresState->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $structuresState->uuid]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $structuresState->uuid]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $structuresState->uuid], ['confirm' => __('Esta seguro de eliminar el registro # {0}?', $structuresState->uuid)]) ?>
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