<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Applications Controller
 *
 * @property \App\Model\Table\ApplicationsTable $Applications
 */
class ApplicationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Services', 'Progress']
        ];
        $applications = $this->paginate($this->Applications);

        $this->set(compact('applications'));
        $this->set('_serialize', ['applications']);
        //debug($application);
    }

    /**
     * View method
     *
     * @param string|null $id Application id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => ['Users', 'Services', 'Progress', 'Payments', 'Ratings']
        ]);
        
        $this->set('application', $application);
        $this->set('_serialize', ['application']);
        //debug($application);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $application = $this->Applications->newEntity();
        if ($this->request->is('post')) {
            $application = $this->Applications->patchEntity($application, $this->request->data);
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The application could not be saved. Please, try again.'));
            }
        }
        //$users = $this->Applications->Users->find('list', ['limit' => 200]);
        //$query = $articles->find('all', ['conditions' => ['Articles.created >' => new DateTime('-10 days')], 'limit' => 10]);
        $CostumerUsers = $this->Applications->Users->find('list', ['conditions' => ['Users.role_id' => '2'], 'limit' => 200]);
        $TechnicalUsers = $this->Applications->Users->find('list', ['conditions' => ['Users.role_id' => '3'], 'limit' => 200]);
        $services = $this->Applications->Services->find('list', ['limit' => 200]);
        $progress = $this->Applications->Progress->find('list', ['limit' => 200]);
        $payments = $this->Applications->Payments->find('list', ['limit' => 200]);
        $this->set(compact('application', 'CostumerUsers', 'TechnicalUsers', 'services', 'progress', 'payments'));
        //$this->set(compact('application', 'users', 'services', 'progress', 'payments'));
        $this->set('_serialize', ['application']);
        //debug($users);
    }

    /**
     * Edit method
     *
     * @param string|null $id Application id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => ['Payments']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $application = $this->Applications->patchEntity($application, $this->request->data);
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The application could not be saved. Please, try again.'));
            }
        }
        //$users = $this->Applications->Users->find('list', ['limit' => 200]);
        $CostumerUsers = $this->Applications->Users->find('list', ['conditions' => ['Users.role_id' => '2'], 'limit' => 200]);
        $TechnicalUsers = $this->Applications->Users->find('list', ['conditions' => ['Users.role_id' => '3'], 'limit' => 200]);
        $services = $this->Applications->Services->find('list', ['limit' => 200]);
        $progress = $this->Applications->Progress->find('list', ['limit' => 200]);
        $payments = $this->Applications->Payments->find('list', ['limit' => 200]);
        $this->set(compact('application', 'CostumerUsers', 'TechnicalUsers', 'services', 'progress', 'payments'));
        //$this->set(compact('application', 'users', 'services', 'progress', 'payments'));
        $this->set('_serialize', ['application']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Application id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $application = $this->Applications->get($id);
        if ($this->Applications->delete($application)) {
            $this->Flash->success(__('The application has been deleted.'));
        } else {
            $this->Flash->error(__('The application could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
