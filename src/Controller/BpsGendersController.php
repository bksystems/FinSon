<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsGenders Controller
 *
 * @property \App\Model\Table\BpsGendersTable $BpsGenders
 * @method \App\Model\Entity\BpsGender[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsGendersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bpsGenders = $this->paginate($this->BpsGenders);

        $this->set(compact('bpsGenders'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Gender id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsGender = $this->BpsGenders->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bpsGender'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsGender = $this->BpsGenders->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsGender = $this->BpsGenders->patchEntity($bpsGender, $this->request->getData());
            if ($this->BpsGenders->save($bpsGender)) {
                $this->Flash->success(__('The bps gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps gender could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsGender'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Gender id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsGender = $this->BpsGenders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsGender = $this->BpsGenders->patchEntity($bpsGender, $this->request->getData());
            if ($this->BpsGenders->save($bpsGender)) {
                $this->Flash->success(__('The bps gender has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps gender could not be saved. Please, try again.'));
        }
        $this->set(compact('bpsGender'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Gender id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsGender = $this->BpsGenders->get($id);
        if ($this->BpsGenders->delete($bpsGender)) {
            $this->Flash->success(__('The bps gender has been deleted.'));
        } else {
            $this->Flash->error(__('The bps gender could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
