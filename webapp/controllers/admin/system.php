<?php
defined('BASEPATH') OR exit('Not direct access allowed!');

/**
 * 用户管理
 * user class description
 * @author Chen 
 */
class System extends Admin_Controller{
    public function __construct()
    {
            parent::__construct();
            
    }

    public function index()
    {
        // $request = $this->input->get_post(TRUE);
        $data = $this->initialize;
        if(!$this->input->is_ajax_request())
        {
            $this->load->view('system/index',$data);
        }
        else
        {
            $data['html'] = $this->load->view('system/index',TRUE);
            echo json_encode($data);
        }
    }

    public function custom(){
        $data = $this->initialize;
        // echo base64_decode('e2RlZGU6bGlzdGNvbmZpZ30NCntkZWRlOm5vdGVpbmZvIG5vdGVuYW1lPSIiIGNoYW5uZWxpZD0iMSIgbWFjdGh0eXBlPSJzdHJpbmciDQpyZWZ1cmw9Imh0dHA6Ly93d3cuYmxvZy5jb20vYWRtaW4vaW5kZXguc2h0bWwiIHNvdXJjZWxhbmc9InV0Zi04IiBjb3NvcnQ9ImFzYyIgaXNyZWY9InllcyIgZXhwdGltZT0iMTAiIHVzZW1vcmU9IjAiIC99DQoNCntkZWRlOmxpc3RydWxlIHNvdXJjZXR5cGU9ImJhdGNoIiByc3N1cmw9Imh0dHA6Ly8iIHJlZ3h1cmw9Imh0dHA6Ly93d3cuYmxvZy5jb20vYWRtaW4vaW5kZXguc2h0bWwiDQpzdGFydGlkPSIxIiBlbmRpZD0iIiBhZGR2PSIxIiB1cmxydWxlPSJhcmVhIg0KIG11c3RoYXM9IiIgbm90aGFzPSIiIGxpc3RwaWM9IjEiIHVzZW1vcmU9IjAifQ0KICAgIHtkZWRlOmFkZHVybHN9ey9kZWRlOmFkZHVybHN9DQogICAge2RlZGU6YmF0Y2hydWxlfXsvZGVkZTpiYXRjaHJ1bGV9DQogICAge2RlZGU6cmVneHJ1bGV9ey9kZWRlOnJlZ3hydWxlfQ0KICAgIHtkZWRlOmFyZWFzdGFydH17L2RlZGU6YXJlYXN0YXJ0fQ0KICAgIHtkZWRlOmFyZWFlbmR9ey9kZWRlOmFyZWFlbmR9DQp7L2RlZGU6bGlzdHJ1bGV9DQoNCnsvZGVkZTpsaXN0Y29uZmlnfQ0KDQp7ZGVkZTppdGVtY29uZmlnfQ0Ke2RlZGU6c3BwYWdlIHNwdHlwZT0nZnVsbCcgc3B0eXBlPSdmdWxsJyBzcnVsPScxJyBlcnVsPSc1J317L2RlZGU6c3BwYWdlfQ0Ke2RlZGU6cHJldmlld3VybH1odHRwOi8vd3d3LmJsb2cuY29tL2FkbWluL2phdmFzY3JpcHQ6dm9pZCgwKTt7L2RlZGU6cHJldmlld3VybH0NCntkZWRlOmtleXdvcmR0cmltfXsvZGVkZTprZXl3b3JkdHJpbX0NCntkZWRlOmRlc2NyaXB0aW9udHJpbX17L2RlZGU6ZGVzY3JpcHRpb250cmltfQ0Ke2RlZGU6aXRlbSBmaWVsZD0ndGl0bGUnIHZhbHVlPScnIGlzdW5pdD0nJyBpc2Rvd249Jyd9DQogICB7ZGVkZTptYXRjaH08dGl0bGU+W+WGheWuuV08L3RpdGxlPnsvZGVkZTptYXRjaH0NCiAgIA0KICAge2RlZGU6ZnVuY3Rpb259ey9kZWRlOmZ1bmN0aW9ufQ0Key9kZWRlOml0ZW19DQp7ZGVkZTppdGVtIGZpZWxkPSd3cml0ZXInIHZhbHVlPScnIGlzdW5pdD0nJyBpc2Rvd249Jyd9DQogICB7ZGVkZTptYXRjaH17L2RlZGU6bWF0Y2h9DQogICANCiAgIHtkZWRlOmZ1bmN0aW9ufXsvZGVkZTpmdW5jdGlvbn0NCnsvZGVkZTppdGVtfQ0Ke2RlZGU6aXRlbSBmaWVsZD0nc291cmNlJyB2YWx1ZT0nJyBpc3VuaXQ9JycgaXNkb3duPScnfQ0KICAge2RlZGU6bWF0Y2h9ey9kZWRlOm1hdGNofQ0KICAgDQogICB7ZGVkZTpmdW5jdGlvbn17L2RlZGU6ZnVuY3Rpb259DQp7L2RlZGU6aXRlbX0NCntkZWRlOml0ZW0gZmllbGQ9J3B1YmRhdGUnIHZhbHVlPScnIGlzdW5pdD0nJyBpc2Rvd249Jyd9DQogICB7ZGVkZTptYXRjaH17L2RlZGU6bWF0Y2h9DQogICANCiAgIHtkZWRlOmZ1bmN0aW9ufUBtZT1HZXRNa1RpbWUoQG1lKTt7L2RlZGU6ZnVuY3Rpb259DQp7L2RlZGU6aXRlbX0NCntkZWRlOml0ZW0gZmllbGQ9J2JvZHknIHZhbHVlPScnIGlzdW5pdD0nMScgaXNkb3duPScxJ30NCiAgIHtkZWRlOm1hdGNofXsvZGVkZTptYXRjaH0NCiAgIA0KICAge2RlZGU6ZnVuY3Rpb259ey9kZWRlOmZ1bmN0aW9ufQ0Key9kZWRlOml0ZW19DQoNCnsvZGVkZTppdGVtY29uZmlnfQ==');
        if(!$this->input->is_ajax_request())
        {
            $this->load->view('system/custom',$data);
        }
    }

    public function database(){
        $data = $this->initialize;
        $data['db'] = $this->db_configs;
        if(!$this->input->is_ajax_request())
        {
            $this->load->view('system/database',$data);
        }
    }

}

