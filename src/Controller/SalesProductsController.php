<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SalesProducts Controller
 *
 * @property \App\Model\Table\SalesProductsTable $SalesProducts
 * @method \App\Model\Entity\SalesProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesProductsController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('SalesTypesPayments');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salesProducts = $this->SalesProducts->find('all', ['contain' => ['SalesTypesPayments']]);

        $this->set(compact('salesProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Sales Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesProduct = $this->SalesProducts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('salesProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesProduct = $this->SalesProducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesProduct = $this->SalesProducts->patchEntity($salesProduct, $this->request->getData());
            if ($this->SalesProducts->save($salesProduct)) {
                $this->Flash->success(__('The sales product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales product could not be saved. Please, try again.'));
        }
        $salesTypesPayments = $this->SalesTypesPayments->find('list');
        $this->set(compact('salesProduct', 'salesTypesPayments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesProduct = $this->SalesProducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesProduct = $this->SalesProducts->patchEntity($salesProduct, $this->request->getData());
            if ($this->SalesProducts->save($salesProduct)) {
                $this->Flash->success(__('The sales product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sales product could not be saved. Please, try again.'));
        }
        $salesTypesPayments = $this->SalesTypesPayments->find('list');
        $this->set(compact('salesProduct', 'salesTypesPayments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesProduct = $this->SalesProducts->get($id);
        if ($this->SalesProducts->delete($salesProduct)) {
            $this->Flash->success(__('The sales product has been deleted.'));
        } else {
            $this->Flash->error(__('The sales product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
