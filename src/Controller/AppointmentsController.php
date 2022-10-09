<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use Cake\I18n\FrozenTime;

/**
 * Appointments Controller
 *
 * @property \App\Model\Table\AppointmentsTable $Appointments
 * @method \App\Model\Entity\Appointment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppointmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Companies'],
        ];
        $appointments = $this->paginate($this->Appointments);

        $userId = $this->Auth->user('id');

        $usersAppointments = $this->fetchTable('Appointments')->find('all', [
            'contain' => ['Clients','Companies']
        ]);

        $usersAppointments = $usersAppointments->matching('Clients', function ($q) {
            return $q->where(['Clients.user_id' => $this->Auth->user('id')]);
        })->all();

        $this->set(compact('appointments'));
        // currentDate
        // appointmentDate
        // diffDays = Appointmentdate - currentdate e.g. diffdays =
        // if diff <= 3 then
        // send email


        $currentTime = date('Y-m-d h:i:sa', time());
        $maxTime = date("Y-m-d h:i:sa",strtotime("+3 day"));
        $relativeAppointments = $this->fetchTable('Appointments')->find('all', [
            'conditions' => ['Appointments.date <=' => $maxTime],
            'contain' => ['Clients', 'Companies']
        ])->all();


        $this->set('relativeAppointments', $relativeAppointments);
        $this->set('currentTime', $currentTime);
        $this->set('usersAppointments', $usersAppointments);

        // $this->set('relativeAppointments',$relativeAppointments );
        // debug($relativeAppointments);
        // exit;
    }

    /**
     * View method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appointment = $this->Appointments->get($id, [
            'contain' => ['Clients', 'Companies'],
        ]);

        $this->set(compact('appointment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appointment = $this->Appointments->newEmptyEntity();
        if ($this->request->is('post')) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->getData());
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
        }
        $clients = $this->Appointments->Clients->find('list', ['limit' => 200])->all();
        $companies = $this->Appointments->Companies->find('list', ['limit' => 200])->all();
        $this->set(compact('appointment', 'clients', 'companies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appointment = $this->Appointments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->getData());
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
        }
        $clients = $this->Appointments->Clients->find('list', ['limit' => 200])->all();
        $companies = $this->Appointments->Companies->find('list', ['limit' => 200])->all();
        $this->set(compact('appointment', 'clients', 'companies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appointment = $this->Appointments->get($id);
        if ($this->Appointments->delete($appointment)) {
            $this->Flash->success(__('The appointment has been deleted.'));
        } else {
            $this->Flash->error(__('The appointment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sendingemail()
    {
        $currentTime = FrozenTime::now();
        $maxTime = $currentTime->addDays(3);
        $relativeAppointments = $this->fetchTable('Appointments')->find('all', [
            'conditions' => ['Appointments.date <=' => $maxTime],
            'contain' => ['Clients', 'Companies']
        ])->all();

        $this->set('relativeAppointments', $relativeAppointments);
        $this->set('currentTime', $currentTime);
        return $this->redirect(['action' => 'index']);
    }
}

