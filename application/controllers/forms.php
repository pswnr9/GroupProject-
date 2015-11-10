<?php
class Forms extends CI_Controller {

        //Basic functions
        public function view($page = 'home')
        {
          if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
          {
            // Whoops, we don't have a page for that!
            show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter

          $this->load->helper('url');
          $this->load->view('templates/header', $data);
          $this->load->view('pages/'.$page, $data);
          $this->load->view('templates/footer', $data);
        }
        
        public function form($page = 'secondform')
        {
          if ( ! file_exists(APPPATH.'/views/users/'.$page.'.php'))
          {
            // Whoops, we don't have a page for that!
            show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter
$this->load->helper('form');          
$this->load->helper('url');
          $this->load->view('templates/header', $data);
          $this->load->view('users/'.$page, $data);
          $this->load->view('templates/footer', $data);
        }
}
?>
