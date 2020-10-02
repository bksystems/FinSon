<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresMunicipality[]|\Cake\Collection\CollectionInterface $structuresMunicipalities
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">structuresMunicipalities</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Structures Municipality'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
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
                    <th><?= $this->Paginator->sort('municipality') ?></th>
                    <th><?= $this->Paginator->sort('municipality_key') ?></th>
                    <th><?= $this->Paginator->sort('enable') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structuresMunicipalities as $structuresMunicipality): ?>
                <tr>
                    <td><?= h($structuresMunicipality->uuid) ?></td>
                    <td><?= h($structuresMunicipality->structures_country->country_key) ?></td>
                    <td><?= h($structuresMunicipality->structures_state->state_key) ?></td>
                    <td><?= h($structuresMunicipality->municipality) ?></td>
                    <td><?= h($structuresMunicipality->municipality_key) ?></td>
                    <td><?= h($structuresMunicipality->enable) ?></td>
                    <td><?= h($structuresMunicipality->created) ?></td>
                    <td><?= h($structuresMunicipality->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $structuresMunicipality->uuid]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $structuresMunicipality->uuid]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $structuresMunicipality->uuid], ['confirm' => __('Esta seguro de eliminar el registro # {0}?', $structuresMunicipality->uuid)]) ?>
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