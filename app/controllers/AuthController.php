<?php

class AuthController extends Controller
{
    public function loginForm()
    {
        // If already logged in, go to products
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
            header('Location: /products');
            exit;
        }
        $this->view('auth/login');
    }

    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // ⚠️ SIMPLE AUTH FOR LAB. In production, use database with hashed passwords.
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Hardcoded credentials (you can change these)
        if ($username === 'admin' && $password === 'password123') {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $username;
            header('Location: /products');
        } else {
            header('Location: /login?error=Invalid credentials');
        }
        exit;
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: /login');
        exit;
    }
}