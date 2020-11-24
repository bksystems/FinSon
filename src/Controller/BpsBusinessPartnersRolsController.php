<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsBusinessPartnersRols Controller
 *
 * @property \App\Model\Table\BpsBusinessPartnersRolsTable $BpsBusinessPartnersRols
 * @method \App\Model\Entity\BpsBusinessPartnersRol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsBusinessPartnersRolsController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('BpsBusinessPartners');
        $this->loadModel('BpsTypesRols');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsBusinessPartnersRols = $this->BpsBusinessPartnersRols->find('all', [
            'contain' => ['BpsBusinessPartners', 'BpsTypesRols']
        ]);

        $this->set(compact('bpsBusinessPartnersRols'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Business Partners Rol id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsBusinessPartnersRol'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->patchEntity($bpsBusinessPartnersRol, $this->request->getData());
            if ($this->BpsBusinessPartnersRols->save($bpsBusinessPartnersRol)) {
                $this->Flash->success(__('The bps business partners rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners rol could not be saved. Please, try again.'));
        }
        $bpsBusinessPartners = $this->BpsBusinessPartners->find('list')->order(['bps_unique_number' => 'asc']);
        $bpsTypesRols = $this->BpsTypesRols->find('list');
        $this->set(compact('bpsBusinessPartnersRol', 'bpsBusinessPartners', 'bpsTypesRols'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Business Partners Rol id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->patchEntity($bpsBusinessPartnersRol, $this->request->getData());
            if ($this->BpsBusinessPartnersRols->save($bpsBusinessPartnersRol)) {
                $this->Flash->success(__('The bps business partners rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partners rol could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsBusinessPartnersRol'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Business Partners Rol id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsBusinessPartnersRol = $this->BpsBusinessPartnersRols->get($id);
        if ($this->BpsBusinessPartnersRols->delete($bpsBusinessPartnersRol)) {
            $this->Flash->success(__('The bps business partners rol has been deleted.'));
        } else {
            $this->Flash->error(__('The bps business partners rol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
