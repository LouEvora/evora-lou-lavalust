<?php

class ProductController extends Controller
{
    private $productModel;

    // 🔒 This runs BEFORE every method. Protects ALL pages in this controller.
    public function __construct()
    {
        parent::__construct();
        
        // Start session if not started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if user is logged in. If not, redirect to login.
        if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
            header('Location: /login');
            exit;
        }

        $this->productModel = $this->call->model('ProductModel');
    }

    // READ: List all products
    public function index()
    {
        $products = $this->productModel->getAll();
        $this->view('products/index', ['products' => $products]);
    }

    // CREATE: Show form
    public function create()
    {
        $this->view('products/create');
    }

    // CREATE: Store data
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productModel->insert($_POST);
            header('Location: /products');
            exit;
        }
    }

    // UPDATE: Show edit form
    public function edit($id)
    {
        $product = $this->productModel->getById($id);
        if (!$product) {
            header('Location: /products');
            exit;
        }
        $this->view('products/edit', ['product' => $product]);
    }

    // UPDATE: Update data
    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productModel->update($id, $_POST);
            header('Location: /products');
            exit;
        }
    }

    // DELETE: Remove product
    public function delete($id)
    {
        $this->productModel->delete($id);
        header('Location: /products');
        exit;
    }
}