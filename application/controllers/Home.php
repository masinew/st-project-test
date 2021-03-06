<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->model('templatevalue_model');
        $this->load->model('home_model');

        $data['contentView'] = 'home/index';
        $data['headerViewData']['headerValues'] = $this->templatevalue_model->getVisitorValues();
        $data['contentViewData']['degreeInfo'] = $this->home_model->getDegreeInfo();
        $data['contentViewData']['answers'] = $this->home_model->getAnswer();
        $this->load->view('templates/main', $data);
    }

    public function makeQuestion() {
        $this->load->model('home_model');
        $input = $this->input->post();
        $result = $this->home_model->saveQuestion($input);

        header('content-type: application/json');
        echo json_encode($result);
    }

    public function hasCourseDetail() {
        $input = $this->input->post();
        $branchId = $input['branchId'];
        $this->load->model('home_model');

        $result = $this->home_model->hasCourseDetail($branchId);
        header('content-type: application/json');
        echo json_encode($result);
    }

    public function getCourseDetail($branchId) {
        $this->load->model('home_model');
        $this->load->model('templatevalue_model');

        $result = $this->home_model->getCourseDetail($branchId);
        $data['contentView'] = 'home/courseDetail';
        $data['headerViewData']['headerValues'] = $this->templatevalue_model->getVisitorValues();
        $data['contentViewData']['branchNameTH'] = $result['branchNameTH'];
        $data['contentViewData']['courseDetail'] = $result['courseDetail'];
        $this->load->view('templates/main', $data);
   }
}