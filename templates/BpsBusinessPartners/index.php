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
                    <th><?= $this->Paginator->sort('Numero') ?></th>
                    <th><?= $this->Paginator->sort('Apellido P') ?></th>
                    <th><?= $this->Paginator->sort('Apellido M') ?></th>
                    <th><?= $this->Paginator->sort('P. Nombre') ?></th>
                    <th><?= $this->Paginator->sort('S. Nombre') ?></th>
                    <th><?= $this->Paginator->sort('F. Nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('Pais') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th><?= $this->Paginator->sort('CURP') ?></th>
                    <th><?= $this->Paginator->sort('C Electoral') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
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
                    <td><?= h($bpsBusinessPartner->bps_birthdate) ?></td>
                    <td><?= h($bpsBusinessPartner->structures_country->country_key) ?></td>
                    <td><?= h($bpsBusinessPartner->structures_state->state_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_unique_registry_key) ?></td>
                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bpsBusinessPartner->uuid]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid)]) ?>
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