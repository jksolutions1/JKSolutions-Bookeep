<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index()
    {
        $appointments = $this->fetchTable('Appointments')->find('all') ->all();
    }

}


