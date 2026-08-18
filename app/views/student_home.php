<!DOCTYPE html>
<html>
<head>
    <title>Student Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <style>
        /* ── Reset & base ── */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Cinzel', 'UnifrakturMaguntia', serif;
            background: #0b0a0c;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #f0e6d3;
            position: relative;
        }

        /* ── Stars background (from Uiverse.io by jaykdoe) ── */
        .container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        #stars,
        #stars2,
        #stars3 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
        }

        #stars {
            background-image:
                radial-gradient(2px 2px at 20px 30px, #eee, transparent),
                radial-gradient(2px 2px at 40px 70px, rgba(255, 255, 255, 0.8), transparent),
                radial-gradient(2px 2px at 50px 160px, #ddd, transparent),
                radial-gradient(2px 2px at 90px 40px, rgba(255, 255, 255, 0.7), transparent),
                radial-gradient(2px 2px at 130px 80px, #fff, transparent),
                radial-gradient(2px 2px at 160px 30px, rgba(255, 255, 255, 0.9), transparent),
                radial-gradient(1px 1px at 300px 200px, #fff, transparent),
                radial-gradient(1px 1px at 400px 120px, #ddd, transparent),
                radial-gradient(1px 1px at 500px 300px, #eee, transparent),
                radial-gradient(1px 1px at 600px 80px, #fff, transparent),
                radial-gradient(1px 1px at 700px 250px, rgba(255, 255, 255, 0.6), transparent),
                radial-gradient(1px 1px at 800px 150px, #ddd, transparent),
                radial-gradient(1px 1px at 900px 350px, #eee, transparent),
                radial-gradient(1px 1px at 1000px 100px, #fff, transparent),
                radial-gradient(1px 1px at 1100px 280px, rgba(255, 255, 255, 0.8), transparent),
                radial-gradient(1px 1px at 1200px 180px, #ddd, transparent);
            background-size: 200px 200px;
            animation: animStar 50s linear infinite;
        }

        #stars2 {
            background-image:
                radial-gradient(2px 2px at 30px 60px, #fff, transparent),
                radial-gradient(2px 2px at 70px 120px, rgba(255, 255, 255, 0.7), transparent),
                radial-gradient(2px 2px at 110px 20px, #eee, transparent),
                radial-gradient(2px 2px at 150px 90px, rgba(255, 255, 255, 0.9), transparent),
                radial-gradient(1px 1px at 250px 180px, #fff, transparent),
                radial-gradient(1px 1px at 350px 60px, #ddd, transparent),
                radial-gradient(1px 1px at 450px 220px, #eee, transparent),
                radial-gradient(1px 1px at 550px 140px, #fff, transparent),
                radial-gradient(1px 1px at 650px 300px, rgba(255, 255, 255, 0.6), transparent),
                radial-gradient(1px 1px at 750px 90px, #ddd, transparent),
                radial-gradient(1px 1px at 850px 260px, #eee, transparent),
                radial-gradient(1px 1px at 950px 170px, #fff, transparent),
                radial-gradient(1px 1px at 1050px 320px, rgba(255, 255, 255, 0.7), transparent),
                radial-gradient(1px 1px at 1150px 130px, #ddd, transparent);
            background-size: 250px 250px;
            animation: animStar 100s linear infinite;
        }

        #stars3 {
            background-image:
                radial-gradient(2px 2px at 50px 100px, #fff, transparent),
                radial-gradient(2px 2px at 100px 40px, rgba(255, 255, 255, 0.8), transparent),
                radial-gradient(2px 2px at 150px 180px, #eee, transparent),
                radial-gradient(1px 1px at 200px 70px, #fff, transparent),
                radial-gradient(1px 1px at 300px 250px, rgba(255, 255, 255, 0.7), transparent),
                radial-gradient(1px 1px at 400px 150px, #ddd, transparent),
                radial-gradient(1px 1px at 500px 280px, #eee, transparent),
                radial-gradient(1px 1px at 600px 100px, #fff, transparent),
                radial-gradient(1px 1px at 700px 320px, rgba(255, 255, 255, 0.6), transparent),
                radial-gradient(1px 1px at 800px 200px, #ddd, transparent),
                radial-gradient(1px 1px at 900px 380px, #eee, transparent),
                radial-gradient(1px 1px at 1000px 60px, #fff, transparent),
                radial-gradient(1px 1px at 1100px 290px, rgba(255, 255, 255, 0.8), transparent);
            background-size: 300px 300px;
            animation: animStar 150s linear infinite;
        }

        @keyframes animStar {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-2000px);
            }
        }

        /* ── Content card ── */
        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 3rem 4rem;
            max-width: 780px;
            background: rgba(10, 8, 12, 0.65);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(180, 140, 200, 0.15);
            border-radius: 32px;
            box-shadow:
                0 30px 60px rgba(0, 0, 0, 0.8),
                inset 0 1px 0 rgba(255, 255, 255, 0.04),
                0 0 80px rgba(80, 40, 120, 0.15);
            transition: box-shadow 0.5s ease, transform 0.5s ease;
            animation: fadeIn 1.8s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .content:hover {
            box-shadow:
                0 40px 80px rgba(0, 0, 0, 0.9),
                inset 0 1px 0 rgba(255, 255, 255, 0.06),
                0 0 120px rgba(80, 40, 120, 0.25);
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ── Gothic heading ── */
        .content h1 {
            font-family: 'UnifrakturMaguntia', 'Cinzel', serif;
            font-size: 3.6rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            background: linear-gradient(135deg, #f0e6d3 0%, #c9b0d6 50%, #a884b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 60px rgba(160, 120, 200, 0.15);
            margin-bottom: 0.5rem;
            position: relative;
        }

        .content h1::after {
            content: '';
            display: block;
            width: 80px;
            height: 2px;
            margin: 0.6rem auto 0;
            background: linear-gradient(90deg, transparent, rgba(180, 140, 200, 0.5), transparent);
        }

        /* ── Paragraph ── */
        .content p {
            font-family: 'Cinzel', serif;
            font-size: 1.05rem;
            font-weight: 400;
            color: #c9bdd0;
            letter-spacing: 0.04em;
            line-height: 1.7;
            margin: 1rem 0 2.2rem 0;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.5);
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ── Access message badge ── */
        .access-badge {
            display: inline-block;
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            color: #b8e6b8;
            background: rgba(40, 80, 60, 0.3);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            padding: 0.5rem 1.8rem;
            border-radius: 40px;
            border: 1px solid rgba(100, 220, 150, 0.2);
            box-shadow: 0 0 30px rgba(60, 200, 120, 0.05);
            margin-bottom: 1.8rem;
            transition: all 0.4s ease;
            text-shadow: 0 1px 8px rgba(0, 0, 0, 0.3);
        }

        .access-badge::before {
            content: '✓ ';
            font-weight: 900;
            color: #7ddf9a;
        }

        .access-badge:hover {
            background: rgba(40, 80, 60, 0.5);
            border-color: rgba(100, 220, 150, 0.4);
            box-shadow: 0 0 50px rgba(60, 200, 120, 0.15);
            transform: scale(1.02);
        }

        /* ── Gradient button ── */
        .btn-profile {
            display: inline-block;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 1rem 3.2rem;
            border: none;
            border-radius: 60px;
            color: #f5edf0;
            background: linear-gradient(135deg, #2c1a3a, #4a1e5a, #6b2f7a);
            background-size: 300% 300%;
            box-shadow:
                0 6px 28px rgba(60, 20, 80, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.10);
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            animation: gradientShift 5s ease-in-out infinite;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-profile::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(255, 255, 255, 0.06) 0%, transparent 70%);
            pointer-events: none;
            transition: transform 0.6s ease;
            transform: scale(0.8);
            opacity: 0;
        }

        .btn-profile:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow:
                0 14px 44px rgba(60, 20, 80, 0.60),
                inset 0 1px 0 rgba(255, 255, 255, 0.15),
                0 0 60px rgba(100, 50, 140, 0.20);
            background: linear-gradient(135deg, #3d1f4f, #5e2a72, #7d3b8f);
            background-size: 300% 300%;
            animation: gradientShift 3s ease-in-out infinite;
        }

        .btn-profile:hover::before {
            transform: scale(1.2);
            opacity: 1;
        }

        .btn-profile:active {
            transform: scale(0.96) translateY(0px);
            box-shadow: 0 4px 16px rgba(60, 20, 80, 0.40);
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* ── subtle ring glow on the button ── */
        .btn-profile::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 60px;
            padding: 3px;
            background: linear-gradient(135deg, rgba(160, 100, 200, 0.2), transparent 40%, transparent 60%, rgba(160, 100, 200, 0.2));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .btn-profile:hover::after {
            opacity: 1;
        }

        /* ── Decorative corner ornaments ── */
        .content::before,
        .content::after {
            content: '✦';
            position: absolute;
            font-size: 1.2rem;
            color: rgba(180, 140, 200, 0.15);
            pointer-events: none;
        }

        .content::before {
            top: 18px;
            left: 24px;
        }

        .content::after {
            bottom: 18px;
            right: 24px;
        }

        /* ── Responsive ── */
        @media (max-width: 600px) {
            .content {
                padding: 2rem 1.5rem;
                margin: 1.2rem;
                border-radius: 24px;
            }

            .content h1 {
                font-size: 2.2rem;
            }

            .content p {
                font-size: 0.9rem;
                max-width: 100%;
            }

            .access-badge {
                font-size: 0.7rem;
                padding: 0.4rem 1.2rem;
            }

            .btn-profile {
                font-size: 0.9rem;
                padding: 0.8rem 2rem;
            }

            .content::before,
            .content::after {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .content h1 {
                font-size: 1.7rem;
            }

            .btn-profile {
                font-size: 0.75rem;
                padding: 0.7rem 1.4rem;
            }
        }
    </style>
</head>
<body>

    <!-- ⭐ Star background (Uiverse.io by jaykdoe) -->
    <div class="container">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div></div>
    </div>

    <!-- 📄 Content – updated text & access badge -->
    <div class="content">
        <h1>Welcome to Student Home Page</h1>

        <!-- Middleware access message – now a stylish badge -->
        <?php if (isset($access_message)): ?>
            <div class="access-badge"><?= $access_message; ?></div>
        <?php endif; ?>

        <!-- Updated paragraph text -->
        <p>Student Information Home page</p>

        <a href="<?= site_url('student/verify-secret'); ?>" class="btn-profile">Go to Profile</a>
    </div>

</body>
</html>