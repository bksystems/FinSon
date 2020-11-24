<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Collection\CollectionInterface $bpsBusinessPartnersRols
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartnersRols</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Bps Business Partners Rol'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
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
                    <th><?= $this->Paginator->sort('bps_business_partner_uuid') ?></th>
                    <th><?= $this->Paginator->sort('bps_types_rol_uuid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bpsBusinessPartnersRols as $bpsBusinessPartnersRol): ?>
                <tr>
                    <td><?= h($bpsBusinessPartnersRol->bps_business_partner->full_name) ?></td>
                    <td><?= h($bpsBusinessPartnersRol->bps_types_rol->type_rol) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $bpsBusinessPartnersRol->uuid], ['class' => 'text-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bpsBusinessPartnersRol->uuid], ['class' => 'text-warning']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $bpsBusinessPartnersRol->uuid], ['class' => 'text-danger', 'confirm' => __('Esta seguro de eliminar el registro # {0}?', $bpsBusinessPartnersRol->uuid)]) ?>
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