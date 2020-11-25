<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SalesProductsTypesStates Controller
 *
 * @property \App\Model\Table\SalesProductsTypesStatesTable $SalesProductsTypesStates
 * @method \App\Model\Entity\SalesProductsTypesState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesProductsTypesStatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salesProductsTypesStates = $this->paginate($this->SalesProductsTypesStates);

        $this->set(compact('salesProductsTypesStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales Products Types State id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesProductsTypesState = $this->SalesProductsTypesStates->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('salesProductsTypesState'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesProductsTypesState = $this->SalesProductsTypesStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesProductsTypesState = $this->SalesProductsTypesStates->patchEntity($salesProductsTypesState, $this->request->getData());
            if ($this->SalesProductsTypesStates->save($salesProductsTypesState)) {
                $this->Flash->success(__('The sales products types state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales products types state could not be saved. Please, try again.'));
        }
        $this->set(compact('salesProductsTypesState'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Products Types State id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesProductsTypesState = $this->SalesProductsTypesStates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesProductsTypesState = $this->SalesProductsTypesStates->patchEntity($salesProductsTypesState, $this->request->getData());
            if ($this->SalesProductsTypesStates->save($salesProductsTypesState)) {
                $this->Flash->success(__('The sales products types state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales products types state could not be saved. Please, try again.'));
        }
        $this->set(compact('salesProductsTypesState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Products Types State id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesProductsTypesState = $this->SalesProductsTypesStates->get($id);
        if ($this->SalesProductsTypesStates->delete($salesProductsTypesState)) {
            $this->Flash->success(__('The sales products types state has been deleted.'));
        } else {
            $this->Flash->error(__('The sales products types state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
