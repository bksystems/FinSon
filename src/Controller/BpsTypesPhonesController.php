<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsTypesPhones Controller
 *
 * @property \App\Model\Table\BpsTypesPhonesTable $BpsTypesPhones
 * @method \App\Model\Entity\BpsTypesPhone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsTypesPhonesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsTypesPhones = $this->paginate($this->BpsTypesPhones);

        $this->set(compact('bpsTypesPhones'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Types Phone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsTypesPhone = $this->BpsTypesPhones->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsTypesPhone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsTypesPhone = $this->BpsTypesPhones->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsTypesPhone = $this->BpsTypesPhones->patchEntity($bpsTypesPhone, $this->request->getData());
            if ($this->BpsTypesPhones->save($bpsTypesPhone)) {
                $this->Flash->success(__('The bps types phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types phone could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesPhone'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Types Phone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsTypesPhone = $this->BpsTypesPhones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsTypesPhone = $this->BpsTypesPhones->patchEntity($bpsTypesPhone, $this->request->getData());
            if ($this->BpsTypesPhones->save($bpsTypesPhone)) {
                $this->Flash->success(__('The bps types phone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types phone could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesPhone'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Types Phone id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsTypesPhone = $this->BpsTypesPhones->get($id);
        if ($this->BpsTypesPhones->delete($bpsTypesPhone)) {
            $this->Flash->success(__('The bps types phone has been deleted.'));
        } else {
            $this->Flash->error(__('The bps types phone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
