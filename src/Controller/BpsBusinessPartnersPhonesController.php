<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsBusinessPartnersPhones Controller
 *
 * @property \App\Model\Table\BpsBusinessPartnersPhonesTable $BpsBusinessPartnersPhones
 * @method \App\Model\Entity\BpsBusinessPartnersPhone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsBusinessPartnersPhonesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('BpsBusinessPartners');
        $this->loadModel('BpsTypesPhones');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsBusinessPartnersPhones = $this->BpsBusinessPartnersPhones->find('all', [
            'contain' => ['BpsBusinessPartners', 'BpsTypesPhones']
        ])
            ->order(['bps_unique_number' => 'asc', 'type_phone' => 'asc']);

        $this->set(compact('bpsBusinessPartnersPhones'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Business Partners Phone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsBusinessPartnersPhone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->patchEntity($bpsBusinessPartnersPhone, $this->request->getData());
            if ($this->BpsBusinessPartnersPhones->save($bpsBusinessPartnersPhone)) {
                $this->Flash->success(__('The bps business partners phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners phone could not be saved. Please, try again.'));
        }
        $bpsBusinessPartners = $this->BpsBusinessPartners->find('list')
                                                         ->order(['bps_unique_number' => 'asc']);
        $bpsTypesPhones = $this->BpsTypesPhones->find('list');
        $this->set(compact('bpsBusinessPartnersPhone', 'bpsBusinessPartners', 'bpsTypesPhones'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Business Partners Phone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->patchEntity($bpsBusinessPartnersPhone, $this->request->getData());
            if ($this->BpsBusinessPartnersPhones->save($bpsBusinessPartnersPhone)) {
                $this->Flash->success(__('The bps business partners phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners phone could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsBusinessPartnersPhone'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Business Partners Phone id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsBusinessPartnersPhone = $this->BpsBusinessPartnersPhones->get($id);
        if ($this->BpsBusinessPartnersPhones->delete($bpsBusinessPartnersPhone)) {
            $this->Flash->success(__('The bps business partners phone has been deleted.'));
        } else {
            $this->Flash->error(__('The bps business partners phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
