<?php $this->layout('layouts/main'); ?>

<style>
    .login-wrapper {
        max-width: 460px;
        margin: 20px auto 0;
        padding: 0;
    }
    .login-wrapper .cyber-card {
        padding: 3rem 2.5rem !important;
        text-align: center;
        border: 1px solid rgba(255, 0, 229, 0.2);
        box-shadow: 0 0 60px rgba(255, 0, 229, 0.05), var(--cyber-shadow);
        animation: loginPulse 3s ease-in-out infinite;
    }
    @keyframes loginPulse {
        0%, 100% { 
            border-color: rgba(0, 243, 255, 0.3);
            box-shadow: 0 0 40px rgba(0, 243, 255, 0.05);
        }
        50% { 
            border-color: rgba(255, 0, 229, 0.5);
            box-shadow: 0 0 80px rgba(255, 0, 229, 0.1);
        }
    }
    .login-icon {
        font-size: 3.5rem;
        color: var(--neon-cyan);
        text-shadow: 0 0 40px rgba(0, 243, 255, 0.6);
        margin-bottom: 0.5rem;
        animation: loginIconFloat 3s ease-in-out infinite;
    }
    @keyframes loginIconFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .login-title {
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2.2rem;
        letter-spacing: 4px;
        background: linear-gradient(135deg, var(--neon-cyan), var(--neon-pink));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: none;
        margin-bottom: 0.5rem;
        animation: titleGlow 2s ease-in-out infinite;
    }
    @keyframes titleGlow {
        0%, 100% { filter: brightness(1); }
        50% { filter: brightness(1.3); }
    }
    .login-sub {
        color: #444466;
        font-weight: 400;
        letter-spacing: 2px;
        font-size: 0.9rem;
        margin-bottom: 2rem;
        text-transform: uppercase;
        animation: subGlow 3s ease-in-out infinite;
    }
    @keyframes subGlow {
        0%, 100% { color: #444466; }
        50% { color: #666688; }
    }
    .btn-login-cyber {
        width: 100%;
        font-family: 'Orbitron', sans-serif;
        font-weight: 800;
        font-size: 0.9rem !important;
        letter-spacing: 3px;
        text-transform: uppercase;
        background: transparent !important;
        border: 2px solid var(--neon-cyan) !important;
        color: var(--neon-cyan) !important;
        padding: 14px !important;
        border-radius: 0px !important;
        transition: all 0.4s ease !important;
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.05);
        position: relative;
        overflow: hidden;
    }
    .btn-login-cyber::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0,243,255,0.2), transparent);
        transition: all 0.6s ease;
    }
    .btn-login-cyber:hover::before {
        left: 100%;
    }
    .btn-login-cyber:hover {
        background: var(--neon-cyan) !important;
        color: #0a0a0f !important;
        box-shadow: var(--glow-cyan);
        transform: scale(1.02);
    }
    .alert-cyber {
        background: rgba(255, 0, 229, 0.05);
        border: 1px solid var(--neon-pink);
        border-radius: 0px;
        color: var(--neon-pink);
        font-weight: 600;
        animation: alertGlow 2s ease-in-out infinite;
    }
    @keyframes alertGlow {
        0%, 100% { box-shadow: 0 0 20px rgba(255, 0, 229, 0.05); }
        50% { box-shadow: 0 0 40px rgba(255, 0, 229, 0.15); }
    }
    .demo-hint {
        font-family: 'Orbitron', sans-serif;
        font-size: 0.6rem;
        letter-spacing: 1px;
        color: #333355;
        margin-top: 1.5rem;
        border-top: 1px solid rgba(255,255,255,0.03);
        padding-top: 1.5rem;
        animation: hintPulse 3s ease-in-out infinite;
    }
    @keyframes hintPulse {
        0%, 100% { color: #333355; }
        50% { color: #555577; }
    }
    .form-control-cyber {
        text-align: left;
    }
</style>

<div class="login-wrapper">
    <div class="cyber-card">
        <div class="login-icon">
            <i class="fas fa-key"></i>
        </div>
        <h1 class="login-title">ACCESS</h1>
        <p class="login-sub">// Enter credentials to interface</p>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-cyber alert-dismissible fade show" role="alert">
                <i class="fas fa-skull me-2"></i> <?= htmlspecialchars($_GET['error']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" style="filter: invert(1);"></button>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST">
            <div class="mb-4 text-start">
                <label class="form-label-cyber"><i class="fas fa-user"></i> Username</label>
                <input type="text" name="username" class="form-control form-control-cyber" value="admin" required>
            </div>
            <div class="mb-4 text-start">
                <label class="form-label-cyber"><i class="fas fa-lock"></i> Password</label>
                <input type="password" name="password" class="form-control form-control-cyber" value="password123" required>
            </div>
            <button type="submit" class="btn btn-login-cyber">
                <i class="fas fa-arrow-right-to-bracket me-2"></i> INITIALIZE
            </button>
        </form>

        <div class="demo-hint">
            <i class="fas fa-terminal"></i> [ admin : password123 ]
        </div>
    </div>
</div>