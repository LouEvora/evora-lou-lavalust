<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBERPUNK · STORE</title>
    
    <!-- Google Fonts: Orbitron + Rajdhani -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ============================================================
               CYBERPUNK 2077 THEME - NEON GLOW + ANIMATIONS + MATRIX
               ============================================================ */
        :root {
            --neon-cyan: #00f3ff;
            --neon-pink: #ff00e5;
            --neon-purple: #b026ff;
            --neon-green: #00ff88;
            --dark-bg: #0a0a0f;
            --dark-panel: #12121a;
            --cyber-shadow: 0 0 30px rgba(0, 243, 255, 0.1);
            --glow-cyan: 0 0 40px rgba(0, 243, 255, 0.3);
            --glow-pink: 0 0 40px rgba(255, 0, 229, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--dark-bg);
            min-height: 100vh;
            color: #c0c0d0;
            /* CYBER GRID BACKGROUND */
            background-image: 
                linear-gradient(rgba(0, 243, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 243, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            padding-bottom: 2rem;
            animation: gridPulse 4s ease-in-out infinite;
        }

        @keyframes gridPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        /* ---------- NO SCANLINE OVERLAY ---------- */
        /* Removed the scanline TV effect */

        /* ---------- NO VIGNETTE EFFECT ---------- */
        /* Removed the vignette overlay */

        /* ---------- ANIMATED NEON NAVBAR ---------- */
        .navbar-cyber {
            background: rgba(10, 10, 15, 0.95) !important;
            backdrop-filter: blur(20px);
            border-bottom: 2px solid var(--neon-cyan);
            box-shadow: var(--glow-cyan);
            padding: 0.8rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            animation: neonPulse 3s ease-in-out infinite;
        }

        @keyframes neonPulse {
            0%, 100% { 
                border-bottom-color: var(--neon-cyan);
                box-shadow: 0 0 30px rgba(0, 243, 255, 0.2);
            }
            50% { 
                border-bottom-color: var(--neon-pink);
                box-shadow: 0 0 50px rgba(255, 0, 229, 0.3);
            }
        }

        .navbar-cyber .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            font-size: 1.7rem;
            letter-spacing: 3px;
            color: var(--neon-cyan) !important;
            text-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
            transition: all 0.4s ease;
            position: relative;
        }

        .navbar-cyber .navbar-brand:hover {
            text-shadow: 0 0 50px rgba(0, 243, 255, 0.9), 0 0 100px rgba(0, 243, 255, 0.3);
            transform: scale(1.05);
            letter-spacing: 5px;
        }

        .navbar-cyber .navbar-brand i {
            color: var(--neon-pink);
            margin-right: 12px;
            text-shadow: 0 0 20px rgba(255, 0, 229, 0.6);
            animation: iconGlow 2s ease-in-out infinite;
        }

        @keyframes iconGlow {
            0%, 100% { text-shadow: 0 0 20px rgba(255, 0, 229, 0.6); }
            50% { text-shadow: 0 0 50px rgba(255, 0, 229, 1), 0 0 100px rgba(255, 0, 229, 0.5); }
        }

        .user-badge-cyber {
            font-family: 'Orbitron', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 1px;
            color: var(--neon-cyan);
            border: 1px solid rgba(0, 243, 255, 0.3);
            padding: 6px 18px;
            border-radius: 0px;
            background: rgba(0, 243, 255, 0.05);
            margin-right: 15px;
            text-transform: uppercase;
            animation: borderFlicker 2s ease-in-out infinite;
        }

        @keyframes borderFlicker {
            0%, 100% { border-color: rgba(0, 243, 255, 0.3); }
            50% { border-color: rgba(255, 0, 229, 0.5); }
        }

        .user-badge-cyber i {
            color: var(--neon-pink);
            margin-right: 8px;
        }

        .btn-logout-cyber {
            font-family: 'Orbitron', sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            background: transparent !important;
            border: 2px solid var(--neon-pink) !important;
            color: var(--neon-pink) !important;
            border-radius: 0px !important;
            padding: 8px 24px !important;
            transition: all 0.4s ease !important;
            box-shadow: 0 0 15px rgba(255, 0, 229, 0.1);
            position: relative;
            overflow: hidden;
        }

        .btn-logout-cyber::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,0,229,0.2), transparent);
            transition: all 0.6s ease;
        }

        .btn-logout-cyber:hover::before {
            left: 100%;
        }

        .btn-logout-cyber:hover {
            background: var(--neon-pink) !important;
            color: #0a0a0f !important;
            box-shadow: var(--glow-pink);
            transform: scale(1.05) translateY(-2px);
        }

        /* ---------- CYBER GLASS CARD ---------- */
        .cyber-card {
            background: rgba(18, 18, 26, 0.92);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 243, 255, 0.15);
            border-radius: 0px;
            padding: 2.5rem;
            box-shadow: 
                var(--cyber-shadow),
                inset 0 0 60px rgba(0, 243, 255, 0.02);
            position: relative;
            overflow: hidden;
            animation: cardFadeIn 0.8s ease-out;
        }

        @keyframes cardFadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CYBER CORNER DECORATIONS */
        .cyber-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--neon-cyan), var(--neon-pink), transparent);
            animation: scanline 4s linear infinite;
        }

        .cyber-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--neon-pink), var(--neon-cyan), transparent);
            animation: scanline 4s linear infinite reverse;
        }

        @keyframes scanline {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* ---------- PAGE HEADER ---------- */
        .page-header h2 {
            font-family: 'Orbitron', sans-serif;
            font-weight: 800;
            font-size: 2rem;
            letter-spacing: 2px;
            color: var(--neon-cyan);
            text-shadow: 0 0 30px rgba(0, 243, 255, 0.3);
            animation: textGlow 3s ease-in-out infinite;
        }

        @keyframes textGlow {
            0%, 100% { text-shadow: 0 0 30px rgba(0, 243, 255, 0.3); }
            50% { text-shadow: 0 0 60px rgba(0, 243, 255, 0.6), 0 0 120px rgba(0, 243, 255, 0.2); }
        }

        .page-header .subtitle {
            color: #666688;
            font-weight: 400;
            font-size: 1.05rem;
            letter-spacing: 1px;
        }

        /* ---------- NEON BUTTONS ---------- */
        .btn-cyber-primary {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            background: transparent;
            border: 2px solid var(--neon-cyan);
            color: var(--neon-cyan);
            padding: 10px 30px;
            border-radius: 0px;
            transition: all 0.4s ease;
            box-shadow: 0 0 20px rgba(0, 243, 255, 0.05);
            position: relative;
            overflow: hidden;
        }

        .btn-cyber-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,243,255,0.2), transparent);
            transition: all 0.6s ease;
        }

        .btn-cyber-primary:hover::before {
            left: 100%;
        }

        .btn-cyber-primary:hover {
            background: var(--neon-cyan);
            color: #0a0a0f;
            box-shadow: var(--glow-cyan);
            transform: translateY(-3px) scale(1.02);
        }

        .btn-cyber-success {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            background: transparent;
            border: 2px solid var(--neon-green);
            color: var(--neon-green);
            padding: 10px 30px;
            border-radius: 0px;
            transition: all 0.4s ease;
            box-shadow: 0 0 20px rgba(0, 255, 136, 0.05);
            position: relative;
            overflow: hidden;
        }

        .btn-cyber-success::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,255,136,0.2), transparent);
            transition: all 0.6s ease;
        }

        .btn-cyber-success:hover::before {
            left: 100%;
        }

        .btn-cyber-success:hover {
            background: var(--neon-green);
            color: #0a0a0f;
            box-shadow: 0 0 40px rgba(0, 255, 136, 0.4);
            transform: translateY(-3px) scale(1.02);
        }

        .btn-cyber-danger {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            background: transparent;
            border: 2px solid var(--neon-pink);
            color: var(--neon-pink);
            padding: 6px 18px;
            border-radius: 0px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-cyber-danger::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,0,229,0.2), transparent);
            transition: all 0.6s ease;
        }

        .btn-cyber-danger:hover::before {
            left: 100%;
        }

        .btn-cyber-danger:hover {
            background: var(--neon-pink);
            color: #0a0a0f;
            box-shadow: var(--glow-pink);
            transform: scale(1.05);
        }

        .btn-cyber-ghost {
            font-family: 'Orbitron', sans-serif;
            font-weight: 600;
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.1);
            color: #666688;
            padding: 6px 18px;
            border-radius: 0px;
            transition: all 0.4s ease;
        }

        .btn-cyber-ghost:hover {
            border-color: var(--neon-cyan);
            color: var(--neon-cyan);
            box-shadow: 0 0 30px rgba(0, 243, 255, 0.1);
            transform: translateX(3px);
        }

        /* ---------- CYBER TABLE ---------- */
        .table-cyber {
            background: rgba(10, 10, 15, 0.6);
            border-collapse: separate;
            border-spacing: 0;
            color: #c0c0d0;
            font-weight: 500;
        }

        .table-cyber thead th {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.7rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--neon-cyan);
            background: rgba(0, 243, 255, 0.05);
            border-bottom: 2px solid var(--neon-cyan);
            padding: 18px 15px;
            text-shadow: 0 0 10px rgba(0, 243, 255, 0.2);
            animation: headerGlow 3s ease-in-out infinite;
        }

        @keyframes headerGlow {
            0%, 100% { border-bottom-color: var(--neon-cyan); }
            50% { border-bottom-color: var(--neon-pink); }
        }

        .table-cyber tbody td {
            padding: 16px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            vertical-align: middle;
            font-weight: 400;
        }

        .table-cyber tbody tr {
            transition: all 0.4s ease;
            animation: rowFadeIn 0.5s ease-out forwards;
            opacity: 0;
        }

        .table-cyber tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .table-cyber tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .table-cyber tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .table-cyber tbody tr:nth-child(4) { animation-delay: 0.4s; }
        .table-cyber tbody tr:nth-child(5) { animation-delay: 0.5s; }

        @keyframes rowFadeIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .table-cyber tbody tr:hover {
            background: rgba(0, 243, 255, 0.05);
            box-shadow: inset 0 0 40px rgba(0, 243, 255, 0.05);
            transform: scale(1.01);
            border-left: 2px solid var(--neon-cyan);
        }

        .badge-cyber-stock {
            font-family: 'Orbitron', sans-serif;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 4px 14px;
            border-radius: 0px;
            border: 1px solid;
            animation: badgePulse 2s ease-in-out infinite;
        }

        @keyframes badgePulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        /* ---------- CYBER FORM ---------- */
        .form-control-cyber {
            background: rgba(10, 10, 15, 0.8) !important;
            border: 1px solid rgba(0, 243, 255, 0.15) !important;
            border-radius: 0px !important;
            padding: 14px 18px !important;
            color: #c0c0d0 !important;
            font-weight: 500;
            transition: all 0.4s ease !important;
        }

        .form-control-cyber:focus {
            border-color: var(--neon-cyan) !important;
            box-shadow: 0 0 40px rgba(0, 243, 255, 0.1), inset 0 0 40px rgba(0, 243, 255, 0.02) !important;
            background: rgba(0, 243, 255, 0.02) !important;
            color: #ffffff !important;
            transform: scale(1.01);
        }

        .form-control-cyber::placeholder {
            color: #444466;
        }

        .form-label-cyber {
            font-family: 'Orbitron', sans-serif;
            font-weight: 600;
            font-size: 0.7rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #666688;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }

        .form-label-cyber:hover {
            color: var(--neon-cyan);
        }

        .form-label-cyber i {
            color: var(--neon-pink);
            width: 20px;
            animation: labelIconGlow 2s ease-in-out infinite;
        }

        @keyframes labelIconGlow {
            0%, 100% { color: var(--neon-pink); }
            50% { color: var(--neon-cyan); }
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 768px) {
            .cyber-card { padding: 1.5rem; }
            .page-header h2 { font-size: 1.4rem; }
            .navbar-cyber .navbar-brand { font-size: 1.2rem; }
        }

        /* ============================================================
           FIX: PRODUCT NAMES VISIBLE - NEON CYAN & BOLD
           ============================================================ */
        .product-name-cyber {
            color: #00f3ff !important;
            font-weight: 800 !important;
            font-size: 1.1rem !important;
            text-shadow: 0 0 30px rgba(0, 243, 255, 0.4) !important;
        }
        .product-name-cyber:hover {
            color: #ffffff !important;
            text-shadow: 0 0 50px rgba(0, 243, 255, 0.6) !important;
        }
        .table-cyber tbody td {
            color: #c0c0d0 !important;
        }
        .specs-text {
            color: #8888aa !important;
        }
        .specs-text i {
            color: #444466 !important;
        }
    </style>
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-cyber">
        <div class="container">
            <a class="navbar-brand" href="/products">
                <i class="fas fa-microchip"></i> CYBER·STORE
            </a>
            
            <div class="d-flex align-items-center">
                <?php if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                    <span class="user-badge-cyber d-none d-md-inline">
                        <i class="fas fa-user-astronaut"></i> <?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?>
                    </span>
                    <a href="/logout" class="btn btn-logout-cyber">
                        <i class="fas fa-power-off"></i> EXIT
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <div class="container mt-4">
        <div class="cyber-card">
            <?= $content ?? '' ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>