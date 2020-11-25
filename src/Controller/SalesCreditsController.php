<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SalesCredits Controller
 *
 * @property \App\Model\Table\SalesCreditsTable $SalesCredits
 * @method \App\Model\Entity\SalesCredit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesCreditsController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('BpsBusinessPartners');
        $this->loadModel('SalesProducts');
        $this->loadModel('BpsBusinessPartnersRols');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salesCredits = $this->paginate($this->SalesCredits);

        $this->set(compact('salesCredits'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales Credit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesCredit = $this->SalesCredits->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('salesCredit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesCredit = $this->SalesCredits->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesCredit = $this->SalesCredits->patchEntity($salesCredit, $this->request->getData());
            if ($this->SalesCredits->save($salesCredit)) {
                $this->Flash->success(__('The sales credit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales credit could not be saved. Please, try again.'));
        }
        $bpsBusinessPartners =  $this->BpsBusinessPartners->find('list')->order(['bps_unique_number' => 'asc']);
        $salesProducts = $this->SalesProducts->find('list');
        $this->set(compact('salesCredit', 'bpsBusinessPartners', 'salesProducts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Credit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesCredit = $this->SalesCredits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesCredit = $this->SalesCredits->patchEntity($salesCredit, $this->request->getData());
            if ($this->SalesCredits->save($salesCredit)) {
                $this->Flash->success(__('The sales credit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales credit could not be saved. Please, try again.'));
        }
        $this->set(compact('salesCredit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Credit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesCredit = $this->SalesCredits->get($id);
        if ($this->SalesCredits->delete($salesCredit)) {
            $this->Flash->success(__('The sales credit has been deleted.'));
        } else {
            $this->Flash->error(__('The sales credit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getBpsData($uuid){
        $bp = $this->BpsBusinessPartners->get($uuid);
        $bpsRols = $this->BpsBusinessPartnersRols->find('all', ['contain' => ['BpsTypesRols']])
                                                 ->where(['bps_business_partner_uuid' => $uuid]);
        
        $bp->rol_customer = false;                                       
        $bp->rol_blocked = false;
        foreach($bpsRols as $rol){
            if($rol->bps_types_rol->type_rol == 'CLIENTE'){
                $bp->rol_customer = true;
            }
            if($rol->bps_types_rol->type_rol == 'BLOQUEADO'){
                $bp->rol_blocked = true;
            }
        }
        $as =  '';
        $this->set([
            'bp' => $bp,
            'data_rfc' => $as,
            '_serialize' => ['bp', 'as']
        ]);

    }

    public function getSalesProductData($uuid){
        $product = $this->SalesProducts->get($uuid, ['contain' => ['SalesTypesPayments']]);
        //$bpsRols = $this->BpsBusinessPartnersRols->find('all', ['contain' => ['BpsTypesRols']])
         //                                        ->where(['bps_business_partner_uuid' => $uuid]);

        $an_rate = $product->anual_rate / 100.00;
        $mt_rate = ($an_rate / 12) * 100;
        $dy_rate = ($an_rate / 364) *  100;
        $it_payment = ($dy_rate * $product->sales_types_payment->paydays);
        $product->month_rate = $mt_rate;
        $product->day_rate = $dy_rate;
        $product->payment_rate = $it_payment;

        $this->set([
            'product' => $product,
            '_serialize' => ['product']
        ]);

    }

    public function calculateCredit($uuid_bp, $uuid_product, $amount){
        $product = $this->SalesProducts->get($uuid_product, ['contain' => ['SalesTypesPayments']]);
        $bp = $this->BpsBusinessPartners->get($uuid_bp);

        $an_rate = $product->anual_rate / 100.00;
        $mt_rate = $an_rate / 12;
        $dy_rate = $an_rate / 364;
        $it_payment = $dy_rate * $product->sales_types_payment->paydays;
        $payment = number_format( (round( (($amount * $it_payment) / (1 - pow((1 + $it_payment), $product->number_payments * -1))), 0)), 2);
        $amount_payable = number_format(($payment * $product->number_payments), 2);


        $calculate['anual_rate'] = $an_rate;
        $calculate['month_rate'] = $mt_rate;
        $calculate['day_rate'] = $dy_rate;
        $calculate['interes_payment'] =  $it_payment; 
        $calculate['payment'] = $payment;
        $calculate['amount_payable'] = $amount_payable;

        $this->set([
            'product' => $product,
            'bp' => $bp,
            'calculate' => $calculate,
            '_serialize' => ['calculate']
        ]);
    }

    public function calculateCreditEndDate( $uuid_product, $credit_init_date){
        $product = $this->SalesProducts->get($uuid_product, ['contain' => ['SalesTypesPayments']]);
        $range['init_date'] = $credit_init_date;
        $add_days = $product->number_payments * $product->sales_types_payment->paydays;
        $end_date = date('Y-m-d', strtotime($credit_init_date . ' + ' . $add_days . ' days'));
        $range['end_date'] = $end_date;
        $range['date_payment_eu'] = date('D', strtotime($credit_init_date . ' + 0 days'));
        $range['date_payment_mx'] = $this->DayOfWeek(date('D', strtotime($credit_init_date . ' + 0 days')));
        $this->set([
            'range' => $range,
            '_serialize' => ['range']
        ]);
    }

    public function DayOfWeek($day){
        $day_spanish = '';
        switch ($day) {
            case 'Mon':
                $day_spanish = 'Lunes';
                break;
            case 'Tue':
                $day_spanish = 'Martes';
                break;
            case 'Wed':
                $day_spanish = 'Miercoles';
                break;
            case 'Thu':
                $day_spanish = 'Jueves';
                break;
            case 'Fri':
                $day_spanish = 'Viernes';
                break;
            case 'Sat':
                $day_spanish = 'Sabado';
                break;
            case 'Sun':
                $day_spanish = 'Domingo';
                break;
        }
        return $day_spanish;
    }

}
