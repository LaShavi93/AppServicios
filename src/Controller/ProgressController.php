<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Progress Controller
 *
 * @property \App\Model\Table\ProgressTable $Progress
 */
class ProgressController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $progress = $this->paginate($this->Progress);

        $this->set(compact('progress'));
        $this->set('_serialize', ['progress']);
    }

    /**
     * View method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $progres = $this->Progress->get($id, [
            'contain' => []
        ]);

        $this->set('progres', $progres);
        $this->set('_serialize', ['progres']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $progres = $this->Progress->newEntity();
        if ($this->request->is('post')) {
            $progres = $this->Progress->patchEntity($progres, $this->request->data);
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The progres could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('progres'));
        $this->set('_serialize', ['progres']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $progres = $this->Progress->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $progres = $this->Progress->patchEntity($progres, $this->request->data);
            if ($this->Progress->save($progres)) {
                $this->Flash->success(__('The progres has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The progres could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('progres'));
        $this->set('_serialize', ['progres']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Progres id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $progres = $this->Progress->get($id);
        if ($this->Progress->delete($progres)) {
            $this->Flash->success(__('The progres has been deleted.'));
        } else {
            $this->Flash->error(__('The progres could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
