<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users • Cyberpunk • Animated</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            background: #0f0b14; background-image: radial-gradient(circle at 30% 20%, #1a0e2a 0%, #0f0b14 70%);
            font-family: 'Courier New', monospace; padding: 2rem 1.5rem;
        }
        .container {
            width: 100%; max-width: 1100px; background: rgba(18, 12, 28, 0.92);
            backdrop-filter: blur(6px); border-radius: 2rem; padding: 2.5rem 2rem;
            border: 1px solid #ff00aa55; box-shadow: 0 0 80px #ff00aa22, 0 0 150px #00ffcc22;
            position: relative; overflow: hidden;
        }
        .container::after {
            content: ''; position: absolute; inset: 0;
            background: repeating-linear-gradient(0deg, transparent, transparent 3px, rgba(255,0,170,0.02) 3px, rgba(255,0,170,0.02) 4px);
            pointer-events: none; border-radius: 2rem;
        }
        h1 {
            font-size: 2.2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 4px;
            color: #ff00aa; text-shadow: 0 0 30px #ff00aa88, 0 0 80px #ff00aa44, 4px 4px 0 #00ffcc66;
            margin-bottom: 2rem; text-align: center; font-family: 'Courier New', monospace;
            animation: glitch 1.5s infinite;
        }
        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-3px, 2px); }
            40% { transform: translate(3px, -2px); }
            60% { transform: translate(-2px, -1px); }
            80% { transform: translate(2px, 1px); }
            100% { transform: translate(0); }
        }
        h1 span { color: #00ffcc; text-shadow: 0 0 30px #00ffcc88, 0 0 80px #00ffcc44; }
        table {
            width: 100%; border-collapse: collapse; border: 1px solid #ff00aa33;
            border-radius: 1rem; overflow: hidden;
        }
        thead { background: #ff00aa15; border-bottom: 2px solid #ff00aa; }
        thead th {
            padding: 1rem 1.2rem; font-size: 0.75rem; text-transform: uppercase;
            letter-spacing: 2px; font-weight: 700; color: #ff66dd;
            text-shadow: 0 0 16px #ff00aa66; text-align: left;
        }
        tbody tr {
            border-bottom: 1px solid #ff00aa15; transition: 0.2s ease;
            opacity: 0; transform: translateX(40px);
            animation: slideRight 0.5s forwards;
        }
        tbody tr:nth-child(1) { animation-delay: 0.05s; }
        tbody tr:nth-child(2) { animation-delay: 0.10s; }
        tbody tr:nth-child(3) { animation-delay: 0.15s; }
        tbody tr:nth-child(4) { animation-delay: 0.20s; }
        tbody tr:nth-child(5) { animation-delay: 0.25s; }
        tbody tr:nth-child(6) { animation-delay: 0.30s; }
        tbody tr:nth-child(7) { animation-delay: 0.35s; }
        tbody tr:nth-child(8) { animation-delay: 0.40s; }
        tbody tr:nth-child(9) { animation-delay: 0.45s; }
        tbody tr:nth-child(10) { animation-delay: 0.50s; }
        tbody tr:nth-child(11) { animation-delay: 0.55s; }
        tbody tr:nth-child(12) { animation-delay: 0.60s; }
        @keyframes slideRight {
            to { opacity: 1; transform: translateX(0); }
        }
        tbody tr:hover { background: #ff00aa08; }
        tbody td { padding: 0.9rem 1.2rem; color: #cdc0e0; font-size: 0.9rem; }
        tbody td:first-child { color: #00ffcc; font-weight: 700; text-shadow: 0 0 20px #00ffcc66; }
        @media (max-width: 700px) {
            .container { padding: 1.5rem 1rem; }
            h1 { font-size: 1.4rem; letter-spacing: 2px; }
            table { font-size: 0.7rem; }
            thead th, tbody td { padding: 0.6rem 0.5rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>▸ <span>CYBER</span> USERS</h1>
        <table>
            <thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th></tr></thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['username'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>