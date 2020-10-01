<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsBusinessPartners Controller
 *
 * @property \App\Model\Table\BpsBusinessPartnersTable $BpsBusinessPartners
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsBusinessPartnersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
        $this->loadModel('StructuresStates');
    }


    public function index()
    {
        $bpsBusinessPartners = $this->paginate($this->BpsBusinessPartners);

        $this->set(compact('bpsBusinessPartners'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id, [
            'contain' => ['StructuresCountries', 'StructuresStates'],
        ]);

        $this->set(compact('bpsBusinessPartner'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsBusinessPartner = $this->BpsBusinessPartners->patchEntity($bpsBusinessPartner, $this->request->getData());
            $bpsBusinessPartner->bps_unique_number = $this->number_prev_bps();
            if ($this->BpsBusinessPartners->save($bpsBusinessPartner)) {
                $this->Flash->success(__('The bps business partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partner could not be saved. Please, try again.'));
        }
        $options_countries = $this->StructuresCountries->find('list');
        $options_states = $this->StructuresStates->find('list');
        $number_prev_bps = $this->number_prev_bps();
        $this->set(compact('bpsBusinessPartner', 'options_countries', 'options_states', 'number_prev_bps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsBusinessPartner = $this->BpsBusinessPartners->patchEntity($bpsBusinessPartner, $this->request->getData());
            if ($this->BpsBusinessPartners->save($bpsBusinessPartner)) {
                $this->Flash->success(__('The bps business partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partner could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsBusinessPartner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id);
        if ($this->BpsBusinessPartners->delete($bpsBusinessPartner)) {
            $this->Flash->success(__('The bps business partner has been deleted.'));
        } else {
            $this->Flash->error(__('The bps business partner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function number_prev_bps()
    {
        $last_number = $this->BpsBusinessPartners->find()
                        ->select(['bps_unique_number', 'created'])
                        ->max('created');
        if(!$last_number){
            $last_number = 'C100000000';
        }else{
            $next_number =  intval(substr($last_number->bps_unique_number, 1, 9)) + 1;
            $last_number = 'C' . $next_number;
        }
        return $last_number;
    }

    public function calculatePersonalData(){
        $data_curp = $this->BpsBusinessPartners->find('all');
        $data_rfc = $this->BpsBusinessPartners->find('all');
        $this->set([
            'data_curp' => $data_curp,
            'data_rfc' => $data_rfc,
            '_serialize' => ['data_curp', 'data_rfc' ]
        ]);
    }
}
