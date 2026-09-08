<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();

        if (getenv('DB_ENABLED') === 'true') {
            $this->call->model('UserModel');
        }
    }

    public function index()
    {
        $users = getenv('DB_ENABLED') === 'true'
            ? $this->UserModel->all()
            : [];

        $this->call->view('users', ['users' => $users]);
    }
}