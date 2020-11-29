<table class="table" style="width: 100%; font-size:12px;" id="index_table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('# CDO') ?></th>
            <th><?= $this->Paginator->sort('Cliente') ?></th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <td><?= h($salesCredit->credit_unique_number) ?></td>
                <td><?= h($salesCredit->bps_business_partner_uuid) ?></td>
            </tr>
        </tbody>
    </table>