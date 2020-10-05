<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StructuresStates Controller
 *
 * @property \App\Model\Table\StructuresStatesTable $StructuresStates
 * @method \App\Model\Entity\StructuresState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StructuresStatesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $structuresStates = $this->paginate($this->StructuresStates, ['contain' => ['StructuresCountries']]);

        $this->set(compact('structuresStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Structures State id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $structuresState = $this->StructuresStates->get($id, [
            'contain' => ['StructuresCountries'],
        ]);

        $this->set(compact('structuresState'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $structuresState = $this->StructuresStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $structuresState = $this->StructuresStates->patchEntity($structuresState, $this->request->getData());
            if ($this->StructuresStates->save($structuresState)) {
                $this->Flash->success(__('The structures state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures state could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $this->set(compact('structuresState', 'structuresCountries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Structures State id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $structuresState = $this->StructuresStates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $structuresState = $this->StructuresStates->patchEntity($structuresState, $this->request->getData());
            if ($this->StructuresStates->save($structuresState)) {
                $this->Flash->success(__('The structures state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures state could not be saved. Please, try again.'));
        }
        $this->set(compact('structuresState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Structures State id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $structuresState = $this->StructuresStates->get($id);
        if ($this->StructuresStates->delete($structuresState)) {
            $this->Flash->success(__('The structures state has been deleted.'));
        } else {
            $this->Flash->error(__('The structures state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
