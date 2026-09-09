<?php

class ProductModel extends Model
{
    protected $table = 'products';

    public function __construct()
    {
        parent::__construct();
        $this->ensure_table();
    }

    private function ensure_table()
    {
        $this->db->raw("CREATE TABLE IF NOT EXISTS {$this->table} (
            id INT AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR(255) NOT NULL,
            description TEXT,
            price DECIMAL(10,2) NOT NULL DEFAULT 0,
            quantity INT NOT NULL DEFAULT 0,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");
    }

    public function getAll()
    {
        return $this->db->table($this->table)->order_by('id', 'DESC')->get_all(PDO::FETCH_OBJ) ?: [];
    }

    public function getById($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get(PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        return $this->db->table($this->table)->insert([
            'product_name' => $data['product_name'],
            'description' => $data['description'] ?? '',
            'price' => $data['price'],
            'quantity' => $data['quantity'],
        ]);
    }

    public function update($id, $data)
    {
        return $this->db->table($this->table)->where('id', $id)->update([
            'product_name' => $data['product_name'],
            'description' => $data['description'] ?? '',
            'price' => $data['price'],
            'quantity' => $data['quantity'],
        ]);
    }

    public function delete($id)
    {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }
}