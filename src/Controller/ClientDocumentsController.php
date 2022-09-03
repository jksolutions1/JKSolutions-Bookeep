<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clientdocuments Controller
 *
 * @property \App\Model\Table\ClientdocumentsTable $Clientdocuments
 * @method \App\Model\Entity\Clientdocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientdocumentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Documents'],
        ];
        $clientdocuments = $this->paginate($this->Clientdocuments);

        $this->set(compact('clientdocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id Clientdocument id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientdocument = $this->Clientdocuments->get($id, [
            'contain' => ['Clients', 'Documents'],
        ]);

        $this->set(compact('clientdocument'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientdocument = $this->Clientdocuments->newEmptyEntity();
        if ($this->request->is('post')) {
            $clientdocument = $this->Clientdocuments->patchEntity($clientdocument, $this->request->getData());
            if ($this->Clientdocuments->save($clientdocument)) {
                $this->Flash->success(__('The clientdocument has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientdocument could not be saved. Please, try again.'));
        }
        $clients = $this->Clientdocuments->Clients->find('list', ['limit' => 200])->all();
        $documents = $this->Clientdocuments->Documents->find('list', ['limit' => 200])->all();
        $this->set(compact('clientdocument', 'clients', 'documents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientdocument id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientdocument = $this->Clientdocuments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientdocument = $this->Clientdocuments->patchEntity($clientdocument, $this->request->getData());
            if ($this->Clientdocuments->save($clientdocument)) {
                $this->Flash->success(__('The clientdocument has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientdocument could not be saved. Please, try again.'));
        }
        $clients = $this->Clientdocuments->Clients->find('list', ['limit' => 200])->all();
        $documents = $this->Clientdocuments->Documents->find('list', ['limit' => 200])->all();
        $this->set(compact('clientdocument', 'clients', 'documents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientdocument id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientdocument = $this->Clientdocuments->get($id);
        if ($this->Clientdocuments->delete($clientdocument)) {
            $this->Flash->success(__('The clientdocument has been deleted.'));
        } else {
            $this->Flash->error(__('The clientdocument could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
