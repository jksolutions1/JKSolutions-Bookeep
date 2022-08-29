<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ClientDocuments Controller
 *
 * @property \App\Model\Table\ClientDocumentsTable $ClientDocuments
 * @method \App\Model\Entity\ClientDocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientDocumentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients'],
        ];
        $clientDocuments = $this->paginate($this->ClientDocuments);

        $this->set(compact('clientDocuments'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Document id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientDocument = $this->ClientDocuments->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('clientDocument'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientDocument = $this->ClientDocuments->newEmptyEntity();
        if ($this->request->is('post')) {
            $clientDocument = $this->ClientDocuments->patchEntity($clientDocument, $this->request->getData());
            if ($this->ClientDocuments->save($clientDocument)) {
                $this->Flash->success(__('The client document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client document could not be saved. Please, try again.'));
        }
        $clients = $this->ClientDocuments->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('clientDocument', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Document id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientDocument = $this->ClientDocuments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDocument = $this->ClientDocuments->patchEntity($clientDocument, $this->request->getData());
            if ($this->ClientDocuments->save($clientDocument)) {
                $this->Flash->success(__('The client document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client document could not be saved. Please, try again.'));
        }
        $clients = $this->ClientDocuments->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('clientDocument', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Document id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDocument = $this->ClientDocuments->get($id);
        if ($this->ClientDocuments->delete($clientDocument)) {
            $this->Flash->success(__('The client document has been deleted.'));
        } else {
            $this->Flash->error(__('The client document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
