<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conversationtypes Controller
 *
 * @property \App\Model\Table\ConversationtypesTable $Conversationtypes
 * @method \App\Model\Entity\Conversationtype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConversationtypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Conversations'],
        ];
        $conversationtypes = $this->paginate($this->Conversationtypes);

        $this->set(compact('conversationtypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Conversationtype id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conversationtype = $this->Conversationtypes->get($id, [
            'contain' => ['Conversations'],
        ]);

        $this->set(compact('conversationtype'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conversationtype = $this->Conversationtypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $conversationtype = $this->Conversationtypes->patchEntity($conversationtype, $this->request->getData());
            if ($this->Conversationtypes->save($conversationtype)) {
                $this->Flash->success(__('The conversationtype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conversationtype could not be saved. Please, try again.'));
        }
        $conversations = $this->Conversationtypes->Conversations->find('list', ['limit' => 200])->all();
        $this->set(compact('conversationtype', 'conversations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conversationtype id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conversationtype = $this->Conversationtypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conversationtype = $this->Conversationtypes->patchEntity($conversationtype, $this->request->getData());
            if ($this->Conversationtypes->save($conversationtype)) {
                $this->Flash->success(__('The conversationtype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conversationtype could not be saved. Please, try again.'));
        }
        $conversations = $this->Conversationtypes->Conversations->find('list', ['limit' => 200])->all();
        $this->set(compact('conversationtype', 'conversations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conversationtype id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conversationtype = $this->Conversationtypes->get($id);
        if ($this->Conversationtypes->delete($conversationtype)) {
            $this->Flash->success(__('The conversationtype has been deleted.'));
        } else {
            $this->Flash->error(__('The conversationtype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
