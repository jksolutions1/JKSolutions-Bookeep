<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index()
    {   
        $this->paginate = [
            'contain' => ['Clients', 'Companies'],
        ];
        

        $recentAppointments = $this->fetchTable('Appointments')->find('all') ->all();


        $recentclients = $this->fetchTable('Clients')->find('all', ['limit' => 3, 'order' => 'Clients.id DESC']) ->all();

        $this->set('recentclients', $recentclients);
        $this->set('recentAppointments', $recentAppointments);


    }

}


