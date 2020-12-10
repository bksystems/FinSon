<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Collection\CollectionInterface $bpsBusinessPartnersAddresses
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartnersAddresses</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Bps Business Partners Address'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
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
                    <th><?= $this->Paginator->sort('bps_types_address') ?></th>
                    <th><?= $this->Paginator->sort('bps_business_partner_uuid') ?></th>
                    <th><?= $this->Paginator->sort('structures_colony_uuid') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('external_number') ?></th>
                    <th><?= $this->Paginator->sort('internal_number') ?></th>
                    <th><?= $this->Paginator->sort('address_between') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bpsBusinessPartnersAddresses as $bpsBusinessPartnersAddress): ?>
                <tr>
                    <td><?= h($bpsBusinessPartnersAddress->uuid) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->bps_types_address) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->bps_business_partner_uuid) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->structures_colony_uuid) ?></td>
                    <td><?= $this->Number->format($bpsBusinessPartnersAddress->postal_code) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->address) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->external_number) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->internal_number) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->address_between) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->created) ?></td>
                    <td><?= h($bpsBusinessPartnersAddress->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $bpsBusinessPartnersAddress->uuid], ['class' => 'text-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bpsBusinessPartnersAddress->uuid], ['class' => 'text-warning']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $bpsBusinessPartnersAddress->uuid], ['class' => 'text-danger', 'confirm' => __('Esta seguro de eliminar el registro # {0}?', $bpsBusinessPartnersAddress->uuid)]) ?>
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