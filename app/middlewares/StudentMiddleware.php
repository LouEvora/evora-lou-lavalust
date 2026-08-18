<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Session access check
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            require_once __DIR__ . '/../../scheme/helpers/url_helper.php';
            redirect('/student');
        }
        
        // UNIQUE MIDDLEWARE: Secret code verification required
        if (!isset($_SESSION['secret_verified']) || $_SESSION['secret_verified'] !== true) {
            require_once __DIR__ . '/../../scheme/helpers/url_helper.php';
            redirect('/student/verify-secret');
        }
        
        return $next();
    }
}