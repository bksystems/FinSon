<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StructuresCountries Controller
 *
 * @property \App\Model\Table\StructuresCountriesTable $StructuresCountries
 * @method \App\Model\Entity\StructuresCountry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StructuresCountriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $structuresCountries = $this->paginate($this->StructuresCountries);

        $this->set(compact('structuresCountries'));
    }

    /**
     * View method
     *
     * @param string|null $id Structures Country id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $structuresCountry = $this->StructuresCountries->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('structuresCountry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $structuresCountry = $this->StructuresCountries->newEmptyEntity();
        if ($this->request->is('post')) {
            $structuresCountry = $this->StructuresCountries->patchEntity($structuresCountry, $this->request->getData());
            if ($this->StructuresCountries->save($structuresCountry)) {
                $this->Flash->success(__('The structures country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures country could not be saved. Please, try again.'));
        }
        $this->set(compact('structuresCountry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Structures Country id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $structuresCountry = $this->StructuresCountries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $structuresCountry = $this->StructuresCountries->patchEntity($structuresCountry, $this->request->getData());
            if ($this->StructuresCountries->save($structuresCountry)) {
                $this->Flash->success(__('The structures country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures country could not be saved. Please, try again.'));
        }
        $this->set(compact('structuresCountry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Structures Country id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $structuresCountry = $this->StructuresCountries->get($id);
        if ($this->StructuresCountries->delete($structuresCountry)) {
            $this->Flash->success(__('The structures country has been deleted.'));
        } else {
            $this->Flash->error(__('The structures country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
