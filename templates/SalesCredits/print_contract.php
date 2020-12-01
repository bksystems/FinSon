<div class="row">
    <div class="col-md-5">
        <div class="row">
            <b>N. Cdo:</b> <?= $salesCredit->credit_unique_number; ?>
        </div>
        <div class="row">
            <b>Cliente:</b> <?= $salesCredit->bps_business_partner->full_name; ?>
        </div>
    </div>
    <div class="col-md-7">
        <table class="table table-sm" style="width: 100%; font-size:12px;" id="index_table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('Balance') ?></th>
                    <th><?= $this->Paginator->sort('Pago') ?></th>
                    <th><?= $this->Paginator->sort('Capital') ?></th>
                    <th><?= $this->Paginator->sort('Interes') ?></th>
                    <th><?= $this->Paginator->sort('Ajuste') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($amortization as $row): ?>
                <tr>
                    <td><?= h($row->number_payment) ?></td>
                    <td>$ <?= h(number_format($row->balance,2,'.', ',')) ?></td>
                    <td>$ <?= h(number_format($row->amount_payment,2,'.', ',')) ?></td>
                    <td>$ <?= h(number_format($row->principal_payment,2,'.', ',')) ?></td>
                    <td>$ <?= h(number_format($row->interest_payment,2,'.', ',')) ?></td>
                    <td>$ <?= h(number_format($row->adjustment,2,'.', ',')) ?></td>
                    <td><?= $salesCredit->day_week_payment . ', ' . h(date_format($row->payment_date, 'd-m-Y')) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">

</div>
<div class="row">
<?= $salesCredit->day_week_payment; ?>
</div>
<div class="row">
Valor recibido a mi entera satisfacción. Este pagaré forma parte de mi contrato, el cual estoy sujeto a la condición de que, al no pagarse cualquier cantidad de ellos a su vencimiento, seran exigidos todos los pagos restantes y sus intereses moratorios generados, 35% por pago no realizado.
</div>
