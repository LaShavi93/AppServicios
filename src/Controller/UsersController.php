<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Cities', 'Roles', 'Services', 'Specialties', 'Payments']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
        //$UserId = debug($user['id']);
        
        //----------------------------------------------------------------------//
        /*$this->loadModel('Applications'); //Cargamos Modelo Applicaciones.
        //debug($this->loadModel('Applications'));
        $CostumerApplication = $this->Applications->find('all', [
            'conditions' => ['Applications.costumer_id' => $UserId]
        ]);
        
        $this->set('costumerapplication', $CostumerApplication);
        $this->set('_serialize', ['costumerapplication']);
        debug($CostumerApplication);
        
        //----------------------//
        
        $TechnicalApplication = $this->Applications->find('all', [
            'conditions' => ['Applications.technical_id' => $UserId]
        ]);
        
        $this->set('technicalapplication', $TechnicalApplication);
        $this->set('_serialize', ['technicalapplication']); 
        debug($TechnicalApplication);
        //----------------------------------------------------------------------//
        $this->loadModel('Promotions');
        $Promotions = $this->Promotions->find('all');
        
        //$this->set('promotions', $Promotions);
        //$this->set('_serialize', ['promotions']); 
        debug($Promotions);
        
        $query = $articles->find('all', [
            'conditions' => ['Articles.created >' => new DateTime('-10 days')],
            'contain' => ['Authors', 'Comments'],
            'limit' => 10
        ]); */ 
        $this->loadModel('Promotions');
        $recentArticles = $this->Promotions->find('all', [
            'limit' => 5,
            //'order' => 'Articles.created DESC'
        ]);
        //debug($recentArticles);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            $this->request->data['User']['date']=date("Y/m/d");
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Users->Cities->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $services = $this->Users->Services->find('list', ['limit' => 200]);
        $specialties = $this->Users->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('user', 'cities', 'roles', 'services', 'specialties'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Services', 'Specialties']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            $this->request->data['User']['date']=date("Y/m/d");
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Users->Cities->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $services = $this->Users->Services->find('list', ['limit' => 200]);
        $specialties = $this->Users->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('user', 'cities', 'roles', 'services', 'specialties'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
