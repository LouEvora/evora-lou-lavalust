<!DOCTYPE html>
<html>
<head>
    <title>Secret Code Verification</title>
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

        /* ── Stars background (same as homepage) ── */
        .stars-container {
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

        /* ── Glass card (matching homepage) ── */
        .form-container {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 3rem 3.5rem;
            max-width: 480px;
            width: 100%;
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
            margin: 1.5rem;
        }

        .form-container:hover {
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

        /* ── Decorative corner ornaments ── */
        .form-container::before,
        .form-container::after {
            content: '✦';
            position: absolute;
            font-size: 1.2rem;
            color: rgba(180, 140, 200, 0.15);
            pointer-events: none;
        }

        .form-container::before {
            top: 18px;
            left: 24px;
        }

        .form-container::after {
            bottom: 18px;
            right: 24px;
        }

        /* ── Typography ── */
        .form-container h1 {
            font-family: 'UnifrakturMaguntia', 'Cinzel', serif;
            font-size: 2.6rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            background: linear-gradient(135deg, #f0e6d3 0%, #c9b0d6 50%, #a884b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 60px rgba(160, 120, 200, 0.15);
            margin-bottom: 0.25rem;
        }

        .form-container .sub-heading {
            font-family: 'Cinzel', serif;
            font-size: 0.95rem;
            color: #c9bdd0;
            letter-spacing: 0.06em;
            margin-bottom: 2rem;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.5);
        }

        /* ── Error message ── */
        .error-message {
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            color: #f5b0b0;
            background: rgba(200, 60, 60, 0.15);
            border-left: 3px solid #c0392b;
            padding: 0.8rem 1.2rem;
            border-radius: 8px;
            margin-bottom: 1.8rem;
            text-align: left;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        /* ── Form elements ── */
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-family: 'Cinzel', serif;
            font-weight: 600;
            font-size: 0.8rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #c9bdd0;
            margin-bottom: 0.4rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem 1.2rem;
            background: rgba(20, 15, 25, 0.6);
            border: 1px solid rgba(180, 140, 200, 0.25);
            border-radius: 40px;
            font-family: 'Cinzel', serif;
            font-size: 0.95rem;
            color: #f0e6d3;
            transition: border-color 0.3s, box-shadow 0.3s, background 0.3s;
            outline: none;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
        }

        .form-group input:focus {
            border-color: rgba(180, 140, 200, 0.6);
            background: rgba(30, 20, 40, 0.7);
            box-shadow: 0 0 20px rgba(100, 60, 160, 0.15);
        }

        .form-group input::placeholder {
            color: rgba(200, 180, 210, 0.35);
            font-weight: 300;
            letter-spacing: 0.04em;
        }

        /* ── Gradient button (same as homepage) ── */
        .btn {
            display: inline-block;
            width: 100%;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 1rem 0;
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
            margin-top: 0.5rem;
        }

        .btn::before {
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

        .btn:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow:
                0 14px 44px rgba(60, 20, 80, 0.60),
                inset 0 1px 0 rgba(255, 255, 255, 0.15),
                0 0 60px rgba(100, 50, 140, 0.20);
            background: linear-gradient(135deg, #3d1f4f, #5e2a72, #7d3b8f);
            background-size: 300% 300%;
            animation: gradientShift 3s ease-in-out infinite;
        }

        .btn:hover::before {
            transform: scale(1.2);
            opacity: 1;
        }

        .btn:active {
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

        /* subtle ring glow on the button */
        .btn::after {
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

        .btn:hover::after {
            opacity: 1;
        }

        /* ── Back link ── */
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            color: #a894b0;
            text-decoration: none;
            letter-spacing: 0.04em;
            transition: color 0.3s, text-shadow 0.3s;
            border-bottom: 1px solid transparent;
        }

        .back-link:hover {
            color: #c9bdd0;
            text-shadow: 0 0 20px rgba(160, 120, 200, 0.2);
            border-bottom-color: rgba(180, 140, 200, 0.3);
        }

        /* ── Responsive ── */
        @media (max-width: 600px) {
            .form-container {
                padding: 2rem 1.5rem;
                border-radius: 24px;
            }

            .form-container h1 {
                font-size: 2rem;
            }

            .form-container .sub-heading {
                font-size: 0.8rem;
            }

            .form-group input {
                font-size: 0.85rem;
                padding: 0.7rem 1rem;
            }

            .btn {
                font-size: 0.85rem;
                padding: 0.8rem 0;
            }

            .form-container::before,
            .form-container::after {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .form-container h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

    <!-- ⭐ Star background (same as homepage) -->
    <div class="stars-container">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div></div>
    </div>

    <!-- 📄 Verification form – gothic design -->
    <div class="form-container">
        <h1>🔐 Secret Code</h1>
        <p class="sub-heading">Enter the secret code to access your profile</p>

        <?php if (!empty($message)): ?>
            <div class="error-message">
                ⚠ <?= $message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= site_url('student/verify-secret'); ?>">
            <div class="form-group">
                <label for="secret_code">Secret Code</label>
                <input
                    type="password"
                    id="secret_code"
                    name="secret_code"
                    placeholder="Enter the secret code"
                    required
                    autofocus
                >
            </div>

            <button type="submit" class="btn">Verify &amp; Access Profile</button>
        </form>

        <p style="margin-top: 1.8rem;">
            <a href="<?= site_url('student'); ?>" class="back-link">← Back to Home</a>
        </p>
    </div>

</body>
</html>