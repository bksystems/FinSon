<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsTypesAddresses Controller
 *
 * @property \App\Model\Table\BpsTypesAddressesTable $BpsTypesAddresses
 * @method \App\Model\Entity\BpsTypesAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsTypesAddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsTypesAddresses = $this->paginate($this->BpsTypesAddresses);

        $this->set(compact('bpsTypesAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Types Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsTypesAddress = $this->BpsTypesAddresses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsTypesAddress'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsTypesAddress = $this->BpsTypesAddresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsTypesAddress = $this->BpsTypesAddresses->patchEntity($bpsTypesAddress, $this->request->getData());
            if ($this->BpsTypesAddresses->save($bpsTypesAddress)) {
                $this->Flash->success(__('The bps types address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types address could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesAddress'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Types Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsTypesAddress = $this->BpsTypesAddresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsTypesAddress = $this->BpsTypesAddresses->patchEntity($bpsTypesAddress, $this->request->getData());
            if ($this->BpsTypesAddresses->save($bpsTypesAddress)) {
                $this->Flash->success(__('The bps types address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types address could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesAddress'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Types Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsTypesAddress = $this->BpsTypesAddresses->get($id);
        if ($this->BpsTypesAddresses->delete($bpsTypesAddress)) {
            $this->Flash->success(__('The bps types address has been deleted.'));
        } else {
            $this->Flash->error(__('The bps types address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
