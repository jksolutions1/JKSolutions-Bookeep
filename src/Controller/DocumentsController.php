<?php

declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController
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
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('document'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $document = $this->Documents->newEmptyEntity();
        if ($this->request->is('post')) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $clients = $this->Documents->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('document', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $clients = $this->Documents->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('document', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
       
    //NEW Uploading Function
    public function upload(){
        if($this->request->is('post')){
            $myname = $this->request->getData()['document']['name'];
            $mytmp = $this->request->getData()['document']['tmp_name'];
            $myext = substr(strrchr($myname, "."), 1);
            $mypath = 'upload/'.Security::hash($myname).".".$myext;
            $document = $this->Documents->newEntity();
            $document->name = $myname;
            $document->path = $mypath;
            $document->created_at = date('Y-m-d H:i:s');
            if(move_upload_document($mytmp, WWW_RROOT.$mypath)){
                $this->Documents->save($document);
                return $this->redirect(['action'=>'index']);
            }
        }
    }
}