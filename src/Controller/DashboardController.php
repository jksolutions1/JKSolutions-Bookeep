<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index()
    {   
        $this->paginate = [
            'contain' => ['Clients', 'Companies'],
        ];
        
        $appointments = $this->fetchTable('Appointments')->find('all') ->all();
        $clients = $this->fetchTable('Clients')->find('all') ->all();
        $companies = $this->fetchTable('Companies')->find('all') ->all();
    }

}


