<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SalesTypesPayments Controller
 *
 * @property \App\Model\Table\SalesTypesPaymentsTable $SalesTypesPayments
 * @method \App\Model\Entity\SalesTypesPayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesTypesPaymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salesTypesPayments = $this->paginate($this->SalesTypesPayments);

        $this->set(compact('salesTypesPayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales Types Payment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesTypesPayment = $this->SalesTypesPayments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('salesTypesPayment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesTypesPayment = $this->SalesTypesPayments->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesTypesPayment = $this->SalesTypesPayments->patchEntity($salesTypesPayment, $this->request->getData());
            if ($this->SalesTypesPayments->save($salesTypesPayment)) {
                $this->Flash->success(__('The sales types payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales types payment could not be saved. Please, try again.'));
        }
        $this->set(compact('salesTypesPayment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Types Payment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesTypesPayment = $this->SalesTypesPayments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesTypesPayment = $this->SalesTypesPayments->patchEntity($salesTypesPayment, $this->request->getData());
            if ($this->SalesTypesPayments->save($salesTypesPayment)) {
                $this->Flash->success(__('The sales types payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales types payment could not be saved. Please, try again.'));
        }
        $this->set(compact('salesTypesPayment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Types Payment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesTypesPayment = $this->SalesTypesPayments->get($id);
        if ($this->SalesTypesPayments->delete($salesTypesPayment)) {
            $this->Flash->success(__('The sales types payment has been deleted.'));
        } else {
            $this->Flash->error(__('The sales types payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
