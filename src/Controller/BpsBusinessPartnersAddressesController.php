<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsBusinessPartnersAddresses Controller
 *
 * @property \App\Model\Table\BpsBusinessPartnersAddressesTable $BpsBusinessPartnersAddresses
 * @method \App\Model\Entity\BpsBusinessPartnersAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsBusinessPartnersAddressesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
        $this->loadModel('StructuresStates');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsBusinessPartnersAddresses = $this->paginate($this->BpsBusinessPartnersAddresses);

        $this->set(compact('bpsBusinessPartnersAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Business Partners Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsBusinessPartnersAddress'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->patchEntity($bpsBusinessPartnersAddress, $this->request->getData());
            if ($this->BpsBusinessPartnersAddresses->save($bpsBusinessPartnersAddress)) {
                $this->Flash->success(__('The bps business partners address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners address could not be saved. Please, try again.'));
        }
        $countries = $this->StructuresCountries->find('list');
        $states = '';
        $this->set(compact('bpsBusinessPartnersAddress', 'countries', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Business Partners Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->patchEntity($bpsBusinessPartnersAddress, $this->request->getData());
            if ($this->BpsBusinessPartnersAddresses->save($bpsBusinessPartnersAddress)) {
                $this->Flash->success(__('The bps business partners address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners address could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsBusinessPartnersAddress'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Business Partners Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsBusinessPartnersAddress = $this->BpsBusinessPartnersAddresses->get($id);
        if ($this->BpsBusinessPartnersAddresses->delete($bpsBusinessPartnersAddress)) {
            $this->Flash->success(__('The bps business partners address has been deleted.'));
        } else {
            $this->Flash->error(__('The bps business partners address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getStates()
    {
        $this->RequestHandler->renderAs($this, 'json');
        $states = $this->StructuresStates->find('list');
        $this->response = $this->response->withType('json');
        $this->response->getBody()->write(json_encode($states));
        return $this->response;
    }
}
