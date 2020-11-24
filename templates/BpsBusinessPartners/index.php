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
                    <th><?= $this->Paginator->sort('N. Cliente') ?></th>
                    <th><?= $this->Paginator->sort('A Paterno') ?></th>
                    <th><?= $this->Paginator->sort('A Materno') ?></th>
                    <th><?= $this->Paginator->sort('P Nombre') ?></th>
                    <th><?= $this->Paginator->sort('S Nombre') ?></th>
                    <th><?= $this->Paginator->sort('F Nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('Genero') ?></th>
                    <th><?= $this->Paginator->sort('bps_elector_key') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bpsBusinessPartners as $bpsBusinessPartner): ?>
                <tr>
                    <td><?= h($bpsBusinessPartner->bps_unique_number) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_last_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_first_name) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_second_name) ?></td>
                    <td><?= h(date_format($bpsBusinessPartner->bps_birthdate, 'Y-m-d')); ?></td>
                    <td><?= $bpsBusinessPartner->has('structures_state') ? $this->Html->link($bpsBusinessPartner->bps_gender->gender, ['controller' => 'BpsGender', 'action' => 'view', $bpsBusinessPartner->bps_gender->uuid]) : '' ?></td>
                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $bpsBusinessPartner->uuid], ['class' => 'text-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bpsBusinessPartner->uuid],  ['class' => 'text-warning']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['class' => 'text-danger', 'confirm' => __('Esta seguro de eliminar el registro # {0}?', $bpsBusinessPartner->uuid)]) ?>
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
        },
         "order":[[0,"asc"]]
    });
} );
</script>