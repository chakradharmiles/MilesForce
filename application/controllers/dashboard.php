<?php
class Dashboard extends Basecontroller{

     /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function dashboarddata($parameter1 = false){
                   require 'application/models/ewb_model.php';
                   $ewbmodel = new Ewb_model();

                   $this->view->render('common/dashboard');
     }

}

?>