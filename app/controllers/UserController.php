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
            : [
                [
                    'id' => 1,
                    'firstname' => 'Juan',
                    'lastname' => 'Dela Cruz',
                    'email' => 'juan@gmail.com',
                    'username' => 'juandelacruz',
                ],
                [
                    'id' => 2,
                    'firstname' => 'Maria',
                    'lastname' => 'Santos',
                    'email' => 'maria@gmail.com',
                    'username' => 'mariasantos',
                ],
                [
                    'id' => 3,
                    'firstname' => 'Pedro',
                    'lastname' => 'Garcia',
                    'email' => 'pedro@gmail.com',
                    'username' => 'pedrogarcia',
                ],
                [
                    'id' => 4,
                    'firstname' => 'John',
                    'lastname' => 'Doe',
                    'email' => 'djohn@gmail.com',
                    'username' => 'johndoe',
                ],
                [
                    'id' => 5,
                    'firstname' => 'Mike',
                    'lastname' => 'Wazowski',
                    'email' => 'mikewaza@gmail.com',
                    'username' => 'mikewazowski',
                ],
                [
                    'id' => 6,
                    'firstname' => 'Mary',
                    'lastname' => 'Jane',
                    'email' => 'maryjane@gmail.com',
                    'username' => 'maryjane',
                ],
            ];

        $this->call->view('users', ['users' => $users]);
    }
}