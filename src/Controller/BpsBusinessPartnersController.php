<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BpsBusinessPartners Controller
 *
 * @property \App\Model\Table\BpsBusinessPartnersTable $BpsBusinessPartners
 * @method \App\Model\Entity\BpsBusinessPartner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BpsBusinessPartnersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize():void
    {
        parent::initialize();
        $this->loadModel('StructuresCountries');
        $this->loadModel('StructuresStates');
        $this->loadModel('BpsGenders');
    }


    public function index()
    {
        $bpsBusinessPartners = $this->BpsBusinessPartners->find('all',[
                'contain' => ['StructuresCountries', 'StructuresStates', 'BpsGenders'],
            ]);
            

        $this->set(compact('bpsBusinessPartners'));
    }

    /**
     * View method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id, [
            'contain' => ['StructuresCountries', 'StructuresStates'],
        ]);

        $this->set(compact('bpsBusinessPartner'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->newEmptyEntity();
        if ($this->request->is('post')) {
            $bpsBusinessPartner = $this->BpsBusinessPartners->patchEntity($bpsBusinessPartner, $this->request->getData());
            $bpsBusinessPartner->bps_unique_number = $this->number_prev_bps();
            if ($this->BpsBusinessPartners->save($bpsBusinessPartner)) {
                $this->Flash->success(__('The bps business partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partner could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $structuresStates = $this->StructuresStates->find('list');
        $bpsGenders = $this->BpsGenders->find('list');
        $number_prev_bps = $this->number_prev_bps();
        $this->set(compact('bpsBusinessPartner', 'structuresCountries', 'structuresStates', 'bpsGenders', 'number_prev_bps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bpsBusinessPartner = $this->BpsBusinessPartners->patchEntity($bpsBusinessPartner, $this->request->getData());
            if ($this->BpsBusinessPartners->save($bpsBusinessPartner)) {
                $this->Flash->success(__('The bps business partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bps business partner could not be saved. Please, try again.'));
        }
        $structuresCountries = $this->StructuresCountries->find('list');
        $structuresStates = $this->StructuresStates->find('list');
        $bpsGenders = $this->BpsGenders->find('list');
        $age = $this->calculateAgePerson(date_format($bpsBusinessPartner->bps_birthdate, 'Y-m-d'));
        $this->set(compact('bpsBusinessPartner', 'structuresCountries', 'structuresStates', 'bpsGenders', 'age'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bps Business Partner id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bpsBusinessPartner = $this->BpsBusinessPartners->get($id);
        if ($this->BpsBusinessPartners->delete($bpsBusinessPartner)) {
            $this->Flash->success(__('The bps business partner has been deleted.'));
        } else {
            $this->Flash->error(__('The bps business partner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function number_prev_bps()
    {
        $last_number = $this->BpsBusinessPartners->find()
                        ->select(['bps_unique_number', 'created'])
                        ->max('created');
        if(!$last_number){
            $last_number = 'C100000000';
        }else{
            $next_number =  intval(substr($last_number->bps_unique_number, 1, 9)) + 1;
            $last_number = 'C' . $next_number;
        }
        return $last_number;
    }

    public function calculatePersonalData($fln, $sln, $fn, $sn,  $birthdate, $gender, $state){
            $fl1 = substr($fln,0,1);
            $ar_fln = str_split(substr($fln, 1));
            foreach($ar_fln as $p){
                if($p == 'A' || $p == 'E' || $p == 'I' || $p == 'O' || $p == 'U'){
                    $fl2 = $p;
                    break;
                }
            }

            $ar_fln2 =  str_split(substr($fln, 1));

            foreach($ar_fln2 as $p){
                if($p != 'A' && $p != 'E' && $p != 'I' && $p != 'O' && $p != 'U'){
                    $fl3 = $p;
                    break;
                }
            }

            $ar_sln1 =  str_split(substr($sln, 1));

            foreach($ar_sln1 as $p){
                if($p != 'A' && $p != 'E' && $p != 'I' && $p != 'O' && $p != 'U'){
                    $sl2 = $p;
                    break;
                }
            }

            $ar_fn1 =  str_split(substr($fn, 1));

            foreach($ar_fn1 as $p){
                if($p != 'A' && $p != 'E' && $p != 'I' && $p != 'O' && $p != 'U'){
                    $fn2 = $p;
                    break;
                }
            }
           
            $sl1 = substr($sln,0,1);
            $fn1 = substr($fn,0,1);
            $by = substr($birthdate, 2,2);
            $bm = substr($birthdate, 5,2);
            $bd = substr($birthdate, 8,2);
            $g = $this->BpsGenders->get($gender)->gender;
            $st = $this->StructuresStates->get($state)->state_renapo;
            $data_rfc = $fl1 .  $fl2 . $sl1 . $fn1 .  $by . $bm . $bd;
            $data_curp =  $fl1 .  $fl2 . $sl1 . $fn1 .  $by . $bm . $bd . $g . $st .  $fl3 . $sl2 . $fn2;
            $age = $this->calculateAgePerson($birthdate);
            $this->set([
                'data_curp' => $data_curp,
                'data_rfc' => $data_rfc,
                'age' => $age,
                '_serialize' => ['data_curp', 'data_rfc', 'age']
            ]);
    
    }

    public function calculateAgePerson($birthdate){
        list($ano,$mes,$dia) = explode("-",$birthdate);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }

}
