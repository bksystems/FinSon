<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StructuresColonies Controller
 *
 * @property \App\Model\Table\StructuresColoniesTable $StructuresColonies
 * @method \App\Model\Entity\StructuresColony[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StructuresColoniesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
        $this->loadModel('StructuresStates');
        $this->loadModel('StructuresMunicipalities');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $structuresColonies = $this->paginate($this->StructuresColonies, [
            'contain' => ['StructuresCountries','StructuresStates','StructuresMunicipalities']
        ]);

        $this->set(compact('structuresColonies'));
    }

    /**
     * View method
     *
     * @param string|null $id Structures Colony id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $structuresColony = $this->StructuresColonies->get($id, [
            'contain' => ['StructuresCountries','StructuresStates','StructuresMunicipalities'],
        ]);

        $this->set(compact('structuresColony'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $structuresColony = $this->StructuresColonies->newEmptyEntity();
        if ($this->request->is('post')) {
            $structuresColony = $this->StructuresColonies->patchEntity($structuresColony, $this->request->getData());
            if ($this->StructuresColonies->save($structuresColony)) {
                $this->Flash->success(__('The structures colony has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures colony could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $structuresStates = $this->StructuresStates->find('list');
        $structuresMunicipalities = $this->StructuresMunicipalities->find('list');
        $this->set(compact('structuresColony', 'structuresCountries', 'structuresStates', 'structuresMunicipalities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Structures Colony id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $structuresColony = $this->StructuresColonies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $structuresColony = $this->StructuresColonies->patchEntity($structuresColony, $this->request->getData());
            if ($this->StructuresColonies->save($structuresColony)) {
                $this->Flash->success(__('The structures colony has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures colony could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $structuresStates = $this->StructuresStates->find('list');
        $structuresMunicipalities = $this->StructuresMunicipalities->find('list');
        $this->set(compact('structuresColony', 'structuresCountries', 'structuresStates', 'structuresMunicipalities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Structures Colony id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $structuresColony = $this->StructuresColonies->get($id);
        if ($this->StructuresColonies->delete($structuresColony)) {
            $this->Flash->success(__('The structures colony has been deleted.'));
        } else {
            $this->Flash->error(__('The structures colony could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
