<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{       
            $this->data['courses'] = $this->course_dropdown();
            $this->data['days'] = $this->days_dropdown();
            $this->data['timeslots'] = $this->timeslots_dropdown();
		$this->load->view('welcome_message');
                $this->render();
	}
        
        
        public function course_dropdown(){
            
            $course = array();
            foreach ($this->master->courses() as $courses);
            
            
        }
        
        public function days_dropdown(){
            $day = array();
            
            foreach ($this->schedule->days() as $days) {
                $day[] = array(
                    'select' => $days->select,
                    'day' => $days->name
                );
            }
            
            
        }
        
        public function timeslots_dropdown();
        
       
}
