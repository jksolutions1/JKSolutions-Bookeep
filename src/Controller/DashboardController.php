<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;

class DashboardController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Companies'],
        ];

        $currentTime = FrozenTime::now();

        $recentAppointments = $this->fetchTable('Appointments')->find('all', [
            'conditions' => ['Appointments.date >' => $currentTime],
            'contain' => ['Clients', 'Companies']])->all();


        $recentclients = $this->fetchTable('Clients')->find('all', ['limit' => 3, 'order' => 'Clients.id DESC'])->all();

        $this->set('recentclients', $recentclients);
        $this->set('recentAppointments', $recentAppointments);
        $this->set('current', $currentTime);

    }
}
