<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StructuresMunicipalities Controller
 *
 * @property \App\Model\Table\StructuresMunicipalitiesTable $StructuresMunicipalities
 * @method \App\Model\Entity\StructuresMunicipality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StructuresMunicipalitiesController extends AppController
{
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
        $this->loadModel('StructuresStates');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $structuresMunicipalities = $this->paginate($this->StructuresMunicipalities, [
            'contain' => ['StructuresCountries', 'StructuresStates']
        ]);

        $this->set(compact('structuresMunicipalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Structures Municipality id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $structuresMunicipality = $this->StructuresMunicipalities->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('structuresMunicipality'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $structuresMunicipality = $this->StructuresMunicipalities->newEmptyEntity();
        if ($this->request->is('post')) {
            $structuresMunicipality = $this->StructuresMunicipalities->patchEntity($structuresMunicipality, $this->request->getData());
            if ($this->StructuresMunicipalities->save($structuresMunicipality)) {
                $this->Flash->success(__('The structures municipality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures municipality could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $structuresStates = $this->StructuresStates->find('list');
        $this->set(compact('structuresMunicipality', 'structuresCountries', 'structuresStates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Structures Municipality id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $structuresMunicipality = $this->StructuresMunicipalities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $structuresMunicipality = $this->StructuresMunicipalities->patchEntity($structuresMunicipality, $this->request->getData());
            if ($this->StructuresMunicipalities->save($structuresMunicipality)) {
                $this->Flash->success(__('The structures municipality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The structures municipality could not be saved. Please, try again.'));
        }
        $this->set(compact('structuresMunicipality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Structures Municipality id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $structuresMunicipality = $this->StructuresMunicipalities->get($id);
        if ($this->StructuresMunicipalities->delete($structuresMunicipality)) {
            $this->Flash->success(__('The structures municipality has been deleted.'));
        } else {
            $this->Flash->error(__('The structures municipality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
