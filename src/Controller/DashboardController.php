<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;

/**
 * Dashboard Controller
 *
 */
class DashboardController extends AppController
{
    /**
     * index method
     *
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Companies'],
        ];

        $currentTime = FrozenTime::now();

        // Get all upcoming appointments in the future
        $recentAppointments = $this->fetchTable('Appointments')->find('all', [
            'conditions' => ['Appointments.date >' => $currentTime],
            'contain' => ['Clients', 'Companies']])->all();

        // Get all recently added clients
        $recentclients = $this->fetchTable('Clients')->find('all', ['limit' => 3, 'order' => 'Clients.id DESC'])->all();

        // Save variables to be accessed by front end
        $this->set('recentclients', $recentclients);
        $this->set('recentAppointments', $recentAppointments);
        $this->set('current', $currentTime);

    }
}
