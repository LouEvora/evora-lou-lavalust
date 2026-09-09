<?php
echo "<h1>🔍 Database Test</h1>";

$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

echo "<h2>Environment Variables:</h2>";
echo "DB_HOST: " . ($host ?: '❌ NOT SET') . "<br>";
echo "DB_PORT: " . ($port ?: '❌ NOT SET') . "<br>";
echo "DB_NAME: " . ($dbname ?: '❌ NOT SET') . "<br>";
echo "DB_USER: " . ($user ?: '❌ NOT SET') . "<br>";
echo "DB_PASS: " . ($pass ? '✅ SET' : '❌ NOT SET') . "<br>";

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname",
        $user,
        $pass,
        [
            PDO::MYSQL_ATTR_SSL_CA => null,
            PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        ]
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2 style='color:green;'>✅ Connected to database!</h2>";
    
    // Check if table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'products'");
    $tableExists = $stmt->fetch();
    
    if ($tableExists) {
        echo "<h3>✅ products table exists</h3>";
        
        $stmt = $pdo->query("SELECT COUNT(*) as total FROM products");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo "<h3>📊 Products found: " . $result['total'] . "</h3>";
        
        if ($result['total'] > 0) {
            $stmt = $pdo->query("SELECT * FROM products LIMIT 5");
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<table border='1' cellpadding='8'>";
            echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Qty</th></tr>";
            foreach ($products as $p) {
                echo "<tr>";
                echo "<td>" . $p['id'] . "</td>";
                echo "<td>" . htmlspecialchars($p['product_name']) . "</td>";
                echo "<td>$" . $p['price'] . "</td>";
                echo "<td>" . $p['quantity'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<h2 style='color:orange;'>⚠️ products table is empty!</h2>";
        }
    } else {
        echo "<h2 style='color:red;'>❌ products table does NOT exist!</h2>";
        echo "Please create the table in MySQL Workbench.";
    }
    
} catch(PDOException $e) {
    echo "<h2 style='color:red;'>❌ Connection failed:</h2>";
    echo "<pre>" . htmlspecialchars($e->getMessage()) . "</pre>";
}
?>