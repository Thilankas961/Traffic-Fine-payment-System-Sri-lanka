<?php
class User extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }
    public function loginUser()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }
            // Check for user/email
            if ($this->userModel->findUserByEmail($data['email'], $data['password'])) {
                // User found
            } else {
                // User not found
                $data['email_err'] = 'No user found';
            }
            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $ifDriver = $this->userModel->loginDriver($data['email'], $data['password']);
                $ifPoliceOfficer = $this->userModel->loginPoliceOfficer($data['email'], $data['password']);
                $ifPoliceStation = $this->userModel->loginPoliceStation($data['email'], $data['password']);
                $ifSystemAdmin = $this->userModel->loginSystemAdmin($data['email'], $data['password']);
                $ifRmvAdmin = $this->userModel->loginSystemAdmin($data['email'], $data['password']);
                if ($ifDriver['email'] == $data['email'] && $ifDriver['password'] == $data['password']) {
                    // Create Session

                    //redirect to dashboard
                    $this->view('pages/driver/dashboard', $data);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/index', $data);
                }
                if ($ifPoliceOfficer['email'] == $data['email'] && $ifDriver['password'] == $data['password']) {
                    // Create Session

                    //redirect to dashboard
                    $this->view('pages/police_officer/dashboard', $data);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/index', $data);
                }
                if ($ifPoliceStation['email'] == $data['email'] && $ifDriver['password'] == $data['password']) {
                    // Create Session

                    //redirect to dashboard
                    $this->view('pages/police_station/dashboard', $data);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/index', $data);
                }
                if ($ifSystemAdmin['email'] == $data['email'] && $ifDriver['password'] == $data['password']) {
                    // Create Session

                    //redirect to dashboard
                    $this->view('pages/system_admin/dashboard', $data);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/index', $data);
                }
                if ($ifRmvAdmin['email'] == $data['email'] && $ifDriver['password'] == $data['password']) {
                    // Create Session

                    //redirect to dashboard
                    $this->view('pages/rmv_admin/dashboard', $data);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/index', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            // Load view
            $this->view('users/login', $data);
        }
    }
}