<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsTypesRols Controller
 *
 * @property \App\Model\Table\BpsTypesRolsTable $BpsTypesRols
 * @method \App\Model\Entity\BpsTypesRol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsTypesRolsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsTypesRols = $this->paginate($this->BpsTypesRols);

        $this->set(compact('bpsTypesRols'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Types Rol id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsTypesRol = $this->BpsTypesRols->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsTypesRol'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsTypesRol = $this->BpsTypesRols->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsTypesRol = $this->BpsTypesRols->patchEntity($bpsTypesRol, $this->request->getData());
            if ($this->BpsTypesRols->save($bpsTypesRol)) {
                $this->Flash->success(__('The bps types rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types rol could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesRol'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Types Rol id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsTypesRol = $this->BpsTypesRols->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsTypesRol = $this->BpsTypesRols->patchEntity($bpsTypesRol, $this->request->getData());
            if ($this->BpsTypesRols->save($bpsTypesRol)) {
                $this->Flash->success(__('The bps types rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps types rol could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsTypesRol'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Types Rol id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsTypesRol = $this->BpsTypesRols->get($id);
        if ($this->BpsTypesRols->delete($bpsTypesRol)) {
            $this->Flash->success(__('The bps types rol has been deleted.'));
        } else {
            $this->Flash->error(__('The bps types rol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
