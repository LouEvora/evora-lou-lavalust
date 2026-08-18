<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
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

        /* ── Rain background (from Uiverse.io by SelfMadeSystem) ── */
        .rain-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
            --c: #4a2a6a;
            background-color: #0b0a0c;
            background-image:
                radial-gradient(4px 100px at 0px 235px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 235px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 117.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 252px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 252px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 126px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 150px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 150px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 75px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 253px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 253px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 126.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 204px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 204px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 102px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 134px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 134px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 67px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 179px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 179px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 89.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 299px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 299px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 149.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 215px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 215px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 107.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 281px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 281px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 140.5px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 158px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 158px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 79px, var(--c) 100%, #0000 150%),
                radial-gradient(4px 100px at 0px 210px, var(--c), #0000),
                radial-gradient(4px 100px at 300px 210px, var(--c), #0000),
                radial-gradient(1.5px 1.5px at 150px 105px, var(--c) 100%, #0000 150%);
            background-size:
                300px 235px, 300px 235px, 300px 235px,
                300px 252px, 300px 252px, 300px 252px,
                300px 150px, 300px 150px, 300px 150px,
                300px 253px, 300px 253px, 300px 253px,
                300px 204px, 300px 204px, 300px 204px,
                300px 134px, 300px 134px, 300px 134px,
                300px 179px, 300px 179px, 300px 179px,
                300px 299px, 300px 299px, 300px 299px,
                300px 215px, 300px 215px, 300px 215px,
                300px 281px, 300px 281px, 300px 281px,
                300px 158px, 300px 158px, 300px 158px,
                300px 210px, 300px 210px, 300px 210px;
            animation: rainMove 150s linear infinite;
        }

        /* Rain overlay with hue rotation & scanline effect */
        .rain-bg::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background-image: radial-gradient(
                circle at 50% 50%,
                #0000 0,
                #0000 2px,
                hsl(0 0 4%) 2px
            );
            background-size: 8px 8px;
            --f: blur(1em) brightness(6);
            animation: hueRotate 10s linear infinite;
        }

        @keyframes rainMove {
            0% {
                background-position:
                    0px 220px, 3px 220px, 151.5px 337.5px,
                    25px 24px, 28px 24px, 176.5px 150px,
                    50px 16px, 53px 16px, 201.5px 91px,
                    75px 224px, 78px 224px, 226.5px 350.5px,
                    100px 19px, 103px 19px, 251.5px 121px,
                    125px 120px, 128px 120px, 276.5px 187px,
                    150px 31px, 153px 31px, 301.5px 120.5px,
                    175px 235px, 178px 235px, 326.5px 384.5px,
                    200px 121px, 203px 121px, 351.5px 228.5px,
                    225px 224px, 228px 224px, 376.5px 364.5px,
                    250px 26px, 253px 26px, 401.5px 105px,
                    275px 75px, 278px 75px, 426.5px 180px;
            }
            to {
                background-position:
                    0px 6800px, 3px 6800px, 151.5px 6917.5px,
                    25px 13632px, 28px 13632px, 176.5px 13758px,
                    50px 5416px, 53px 5416px, 201.5px 5491px,
                    75px 17175px, 78px 17175px, 226.5px 17301.5px,
                    100px 5119px, 103px 5119px, 251.5px 5221px,
                    125px 8428px, 128px 8428px, 276.5px 8495px,
                    150px 9876px, 153px 9876px, 301.5px 9965.5px,
                    175px 13391px, 178px 13391px, 326.5px 13540.5px,
                    200px 14741px, 203px 14741px, 351.5px 14848.5px,
                    225px 18770px, 228px 18770px, 376.5px 18910.5px,
                    250px 5082px, 253px 5082px, 401.5px 5161px,
                    275px 6375px, 278px 6375px, 426.5px 6480px;
            }
        }

        @keyframes hueRotate {
            0% {
                backdrop-filter: blur(1em) brightness(6) hue-rotate(0deg);
            }
            to {
                backdrop-filter: blur(1em) brightness(6) hue-rotate(360deg);
            }
        }

        /* ── Content card ── */
        .profile-card {
            position: relative;
            z-index: 1;
            padding: 2.5rem 3rem 2.8rem;
            max-width: 880px;
            width: 100%;
            max-height: 92vh;
            overflow-y: auto;
            background: rgba(10, 8, 12, 0.7);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
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
            scrollbar-width: thin;
            scrollbar-color: rgba(180, 140, 200, 0.2) transparent;
        }

        .profile-card::-webkit-scrollbar {
            width: 5px;
        }

        .profile-card::-webkit-scrollbar-track {
            background: transparent;
        }

        .profile-card::-webkit-scrollbar-thumb {
            background: rgba(180, 140, 200, 0.25);
            border-radius: 8px;
        }

        .profile-card:hover {
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
        .profile-card::before,
        .profile-card::after {
            content: '✦';
            position: absolute;
            font-size: 1.2rem;
            color: rgba(180, 140, 200, 0.15);
            pointer-events: none;
        }

        .profile-card::before {
            top: 18px;
            left: 24px;
        }

        .profile-card::after {
            bottom: 18px;
            right: 24px;
        }

        /* ── Header ── */
        .profile-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .profile-header h1 {
            font-family: 'UnifrakturMaguntia', 'Cinzel', serif;
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            background: linear-gradient(135deg, #f0e6d3 0%, #c9b0d6 50%, #a884b0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 60px rgba(160, 120, 200, 0.15);
            margin-bottom: 0.3rem;
        }

        .profile-header .subtitle {
            font-family: 'Cinzel', serif;
            font-size: 0.85rem;
            color: #a894b0;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.5);
        }

        .profile-header::after {
            content: '';
            display: block;
            width: 60px;
            height: 2px;
            margin: 0.8rem auto 0;
            background: linear-gradient(90deg, transparent, rgba(180, 140, 200, 0.4), transparent);
        }

        /* ── Info grid (landscape layout) ── */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem 2rem;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            padding: 0.6rem 0.8rem 0.6rem 1.2rem;
            border-left: 2px solid rgba(180, 140, 200, 0.2);
            transition: border-color 0.3s, background 0.3s;
            border-radius: 4px;
        }

        .info-item:hover {
            border-left-color: rgba(180, 140, 200, 0.6);
            background: rgba(180, 140, 200, 0.04);
        }

        .info-item .label {
            font-family: 'Cinzel', serif;
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #8a7a9a;
            margin-bottom: 0.2rem;
        }

        .info-item .value {
            font-family: 'Cinzel', serif;
            font-size: 1rem;
            font-weight: 500;
            color: #f0e6d3;
            letter-spacing: 0.02em;
            text-shadow: 0 1px 8px rgba(0, 0, 0, 0.3);
            word-break: break-word;
        }

        .info-item .value.na {
            color: #6a5a7a;
            font-style: italic;
            font-weight: 300;
        }

        /* ── Full-width items ── */
        .info-item.full-width {
            grid-column: 1 / -1;
            border-left-color: rgba(180, 140, 200, 0.15);
        }

        .info-item.full-width:hover {
            border-left-color: rgba(180, 140, 200, 0.5);
        }

        /* ── Social Links Vertical ── */
        .social-links {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
            margin-top: 0.5rem;
        }

        .social-link {
            display: inline-block;
            color: #a884b0;
            text-decoration: none;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(168, 132, 176, 0.2);
            transition: all 0.3s ease;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }

        .social-link:hover {
            color: #c9b0d6;
            border-bottom-color: rgba(168, 132, 176, 0.5);
            padding-left: 0.5rem;
        }

        /* ── Profile Image Section ── */
        .name-with-image {
            display: block;
        }

        .name-section {
            display: flex;
            flex-direction: column;
        }

        .name-image-row {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            justify-content: space-between;
        }

        .profile-image-inline {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 12px;
            object-fit: cover;
            border: 2px solid rgba(168, 132, 176, 0.3);
            box-shadow: 0 8px 24px rgba(60, 20, 80, 0.3);
            transition: all 0.3s ease;
            display: none;
        }

        .profile-image:hover {
            border-color: rgba(168, 132, 176, 0.6);
            box-shadow: 0 12px 32px rgba(60, 20, 80, 0.5);
            transform: scale(1.05);
        }

        .profile-image.visible {
            display: block;
        }

        .image-placeholder {
            font-size: 2.5rem;
            color: #a884b0;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(168, 132, 176, 0.05);
            border-radius: 12px;
            border: 2px dashed rgba(168, 132, 176, 0.2);
            transition: all 0.3s ease;
        }

        .image-placeholder:hover {
            background: rgba(168, 132, 176, 0.1);
            border-color: rgba(168, 132, 176, 0.4);
        }

        .image-placeholder.hidden {
            display: none;
        }

        /* ── Footer / action ── */
        .profile-footer {
            display: flex;
            justify-content: center;
            margin-top: 0.5rem;
        }

        /* ── Gradient button (same as homepage) ── */
        .btn-home {
            display: inline-block;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.85rem 2.8rem;
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

        .btn-home::before {
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

        .btn-home:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow:
                0 14px 44px rgba(60, 20, 80, 0.60),
                inset 0 1px 0 rgba(255, 255, 255, 0.15),
                0 0 60px rgba(100, 50, 140, 0.20);
            background: linear-gradient(135deg, #3d1f4f, #5e2a72, #7d3b8f);
            background-size: 300% 300%;
            animation: gradientShift 3s ease-in-out infinite;
        }

        .btn-home:hover::before {
            transform: scale(1.2);
            opacity: 1;
        }

        .btn-home:active {
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

        .btn-home::after {
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

        .btn-home:hover::after {
            opacity: 1;
        }

        /* ── Responsive ── */
        @media (max-width: 700px) {
            .profile-card {
                padding: 1.8rem 1.2rem 2rem;
                border-radius: 24px;
                margin: 1rem;
                max-height: 95vh;
            }

            .profile-header h1 {
                font-size: 2.2rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 0.4rem;
            }

            .info-item.full-width {
                grid-column: 1;
            }

            .info-item .value {
                font-size: 0.95rem;
            }

            .profile-card::before,
            .profile-card::after {
                display: none;
            }

            .btn-home {
                font-size: 0.8rem;
                padding: 0.7rem 2rem;
            }
        }

        @media (max-width: 400px) {
            .profile-card {
                padding: 1.2rem 0.8rem 1.5rem;
            }

            .profile-header h1 {
                font-size: 1.7rem;
            }

            .info-item {
                padding: 0.4rem 0.4rem 0.4rem 0.8rem;
            }

            .info-item .value {
                font-size: 0.85rem;
            }

            .btn-home {
                font-size: 0.7rem;
                padding: 0.6rem 1.4rem;
            }
        }
    </style>
</head>
<body>

    <!-- 🌧 Rain background (from Uiverse.io by SelfMadeSystem) -->
    <div class="rain-bg"></div>

    <!-- 📄 Profile content -->
    <div class="profile-card">
        <div class="profile-header">
            <h1>Student Information</h1>
            <span class="subtitle">Profile Details</span>
        </div>

        <div class="info-grid">
            <!-- Student ID -->
            <div class="info-item">
                <span class="label">Student ID</span>
                <span class="value"><?= isset($student_id) ? $student_id : 'S-2024-001'; ?></span>
            </div>

            <!-- Name with Profile Image -->
            <div class="info-item full-width name-with-image">
                <div class="name-section">
                    <span class="label">Name</span>
                    <div class="name-image-row">
                        <span class="value"><?= isset($name) ? $name : 'Lou Juseve F. Evora'; ?></span>
                        <div class="profile-image-inline">
                            <img id="profileImage" src="" alt="Profile Picture" class="profile-image">
                            <span class="image-placeholder">📷</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="info-item">
                <span class="label">Course</span>
                <span class="value"><?= isset($course) ? $course : 'Bachelor of Information and Technology'; ?></span>
            </div>

            <!-- Year Level -->
            <div class="info-item">
                <span class="label">Year Level</span>
                <span class="value"><?= isset($year_level) ? $year_level : '3rd Year'; ?></span>
            </div>

            <!-- Section -->
            <div class="info-item">
                <span class="label">Section</span>
                <span class="value"><?= isset($section) ? $section : '1-F1'; ?></span>
            </div>

            <!-- Contact Number -->
            <div class="info-item">
                <span class="label">Contact Number</span>
                <span class="value"><?= isset($contact) ? $contact : '+63 961 938 3552'; ?></span>
            </div>

            <!-- Address -->
            <div class="info-item">
                <span class="label">Address</span>
                <span class="value"><?= isset($address) ? $address : 'Maharlika Street, Camilmil Calapan City, Oriental Mindoro'; ?></span>
            </div>

            <!-- Skills -->
            <div class="info-item">
                <span class="label">Skills</span>
                <span class="value"><?= isset($skills) ? $skills : 'Guitar, Music Theory, Composition'; ?></span>
            </div>

            <!-- Hobbies (Full Width) -->
            <div class="info-item full-width">
                <span class="label">Hobbies</span>
                <span class="value"><?= isset($hobbies) ? $hobbies : 'Playing guitar, Listening to music, Composing, Anime, Movies'; ?></span>
            </div>

            <!-- Social Media (Full Width) -->
            <div class="info-item full-width">
                <span class="label">Social Media Links</span>
                <div class="social-links">
                    <a href="https://www.facebook.com/share/1BezCU1ggu/" target="_blank" class="social-link">📘 Facebook</a>
                    <a href="https://www.instagram.com/loujsv?igsh=MXc4Ymp5cGR6Y2Ny&igsi=MXc4Ymp5cGR6Y2Ny" target="_blank" class="social-link">📷 Instagram</a>
                    <a href="https://github.com/LouEvora" target="_blank" class="social-link">🐙 Github</a>
                </div>
            </div>

            <!-- Profile Description (Full Width) -->
            <div class="info-item full-width">
                <span class="label">Profile Description</span>
                <span class="value"><?= isset($bio) ? $bio : 'A passionate musician who loves playing the guitar, composing original music, and exploring the worlds of anime and cinema.'; ?></span>
            </div>
        </div>

        <div class="profile-footer">
            <a href="<?= site_url('student'); ?>" class="btn-home">← Go to Home</a>
        </div>
    </div>

    <script>
        // Profile image upload handler
        const profileImageInline = document.querySelector('.profile-image-inline');
        const profileImage = document.getElementById('profileImage');
        const imagePlaceholder = document.querySelector('.image-placeholder');
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*';
        fileInput.style.display = 'none';

        // Make the profile image area clickable to upload
        profileImageInline.addEventListener('click', () => fileInput.click());

        // Handle file selection
        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    profileImage.src = event.target.result;
                    profileImage.classList.add('visible');
                    imagePlaceholder.classList.add('hidden');
                    // Save to localStorage so image persists
                    localStorage.setItem('profileImage', event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        // Load saved image from localStorage on page load
        window.addEventListener('load', () => {
            const savedImage = localStorage.getItem('profileImage');
            if (savedImage) {
                profileImage.src = savedImage;
                profileImage.classList.add('visible');
                imagePlaceholder.classList.add('hidden');
            }
        });
    </script>

</body>
</html>