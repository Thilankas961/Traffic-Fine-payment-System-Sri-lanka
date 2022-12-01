<?php
class Police_station extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/dashboard', $data);
    }
    public function police_officer()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/police_officer', $data);
    }
    public function driver_payment()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/driver_payment', $data);
    }
    public function overdue_fine()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/overdue_fine', $data);
    }
    public function request_to_rmv()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/request_to_rmv', $data);
    }
    public function report_problem()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/report_problem', $data);
    }
    public function profile()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/police_station/profile', $data);
    }
}
