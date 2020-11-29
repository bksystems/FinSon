<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesCredit[]|\Cake\Collection\CollectionInterface $salesCredits
 */
?>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">salesCredits</li>
        </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
             <ul class="list-group list-group-flush">
    <?= $this->Html->link(__('New Sales Credit'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Listado</div>
            <div class="card-body">
                <table class="table" style="width: 100%; font-size:12px;" id="index_table">
    <thead>
                <tr>
                    <th><?= $this->Paginator->sort('# CDO') ?></th>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th><?= $this->Paginator->sort('Producto') ?></th>
                    <th><?= $this->Paginator->sort('F Inicio') ?></th>
                    <th><?= $this->Paginator->sort('F Fin') ?></th>
                    <th><?= $this->Paginator->sort('Estatus') ?></th>
                    <th><?= $this->Paginator->sort('Solicitado') ?></th>
                    <th><?= $this->Paginator->sort('A Pagar') ?></th>
                    <th><?= $this->Paginator->sort('Pago') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salesCredits as $salesCredit): ?>
                <tr>
                    <td><?= h($salesCredit->credit_unique_number) ?></td>
                    <td><?= h($salesCredit->bps_business_partner->full_name) ?></td>
                    <td><?= h($salesCredit->sales_product->product_name) ?></td>
                    <td><?= h(date_format( $salesCredit->init_date_credit, 'Y-m-d')) ?></td>
                    <td><?= h(date_format($salesCredit->end_date_credit, 'Y-m-d')) ?></td>
                    <td><?= h($salesCredit->sales_products_types_state->type_state) ?></td>
                    <td><?= $this->Number->format($salesCredit->requested_amount) ?></td>
                    <td><?= $this->Number->format($salesCredit->amount_payable) ?></td>
                    <td><?= $this->Number->format($salesCredit->payment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalles'), ['action' => 'view', $salesCredit->uuid], ['class' => 'text-info']) ?>
                        <?= $this->Html->link(__('Contrato'), ['action' => 'print-contract', $salesCredit->uuid], ['class' => 'text-info']) ?>
                        <!--<?= $this->Html->link(__('Editar'), ['action' => 'edit', $salesCredit->uuid], ['class' => 'text-warning']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $salesCredit->uuid], ['class' => 'text-danger', 'confirm' => __('Esta seguro de eliminar el registro # {0}?', $salesCredit->uuid)]) ?>-->
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