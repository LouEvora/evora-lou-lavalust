<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller 
{
    public function index() 
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = true;
        
        $data = [
            'page_title' => 'Student Home',
            'welcome_message' => 'Welcome to Student Home Page',
            'access_message' => 'You have access to view your profile!'
        ];
        $this->call->view('student_home', $data);
    }

    public function verify_secret()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $secret_code = 'Batman';
        $message = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $entered_code = isset($_POST['secret_code']) ? trim($_POST['secret_code']) : '';

            if ($entered_code === $secret_code) {
                $_SESSION['secret_verified'] = true;
                require_once __DIR__ . '/../../scheme/helpers/url_helper.php';
                redirect('/student/profile');
            } else {
                $message = 'Wrong secret code! Try again.';
            }
        }

        $data = ['message' => $message];
        $this->call->view('secret_form', $data);
    }

    public function profile() 
    {
        $data = [
            'student_id' => 'MCC2024-00020',
            'name' => 'Lou Juseve F. Evora',
            'course' => 'BS Information Technology',
            'year_level' => '3rd Year',
            'section' => '3-F1',
            'email' => 'juseve0531@gmail.com'
        ];
        $this->call->view('student_profile', $data);
    }
}