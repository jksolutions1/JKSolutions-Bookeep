<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index()
    {
        $appointments=$this->loadModel ( 'Appointments' );


        $appointments->find('all');

    }

}


