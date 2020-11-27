<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SalesCreditsPaymentsStates Controller
 *
 * @property \App\Model\Table\SalesCreditsPaymentsStatesTable $SalesCreditsPaymentsStates
 * @method \App\Model\Entity\SalesCreditsPaymentsState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesCreditsPaymentsStatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salesCreditsPaymentsStates = $this->paginate($this->SalesCreditsPaymentsStates);

        $this->set(compact('salesCreditsPaymentsStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales Credits Payments State id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('salesCreditsPaymentsState'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->patchEntity($salesCreditsPaymentsState, $this->request->getData());
            if ($this->SalesCreditsPaymentsStates->save($salesCreditsPaymentsState)) {
                $this->Flash->success(__('The sales credits payments state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales credits payments state could not be saved. Please, try again.'));
        }
        $this->set(compact('salesCreditsPaymentsState'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Credits Payments State id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->patchEntity($salesCreditsPaymentsState, $this->request->getData());
            if ($this->SalesCreditsPaymentsStates->save($salesCreditsPaymentsState)) {
                $this->Flash->success(__('The sales credits payments state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales credits payments state could not be saved. Please, try again.'));
        }
        $this->set(compact('salesCreditsPaymentsState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Credits Payments State id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesCreditsPaymentsState = $this->SalesCreditsPaymentsStates->get($id);
        if ($this->SalesCreditsPaymentsStates->delete($salesCreditsPaymentsState)) {
            $this->Flash->success(__('The sales credits payments state has been deleted.'));
        } else {
            $this->Flash->error(__('The sales credits payments state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
