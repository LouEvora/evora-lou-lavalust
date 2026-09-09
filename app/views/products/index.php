<?php $this->layout('layouts/main'); ?>

<style>
    /* Fix: Remove row fade-in animation */
    .table-cyber tbody tr {
        opacity: 1 !important;
        animation: none !important;
    }
    
    /* Fix: Dark cyberpunk table background */
    .table-cyber {
        background: rgba(10, 10, 15, 0.8) !important;
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
        background: rgba(0, 243, 255, 0.08) !important;
        border-bottom: 2px solid var(--neon-cyan);
        padding: 18px 15px;
        text-shadow: 0 0 10px rgba(0, 243, 255, 0.2);
    }
    
    .table-cyber tbody td {
        padding: 16px 15px;
        border-bottom: 1px solid rgba(0, 243, 255, 0.05);
        vertical-align: middle;
        font-weight: 400;
        background: transparent !important;
        color: #c0c0d0;
    }
    
    .table-cyber tbody tr {
        background: rgba(10, 10, 15, 0.4) !important;
        transition: all 0.3s ease;
    }
    
    .table-cyber tbody tr:hover {
        background: rgba(0, 243, 255, 0.08) !important;
        box-shadow: inset 0 0 40px rgba(0, 243, 255, 0.05);
        transform: scale(1.01);
        border-left: 2px solid var(--neon-cyan);
    }
    
    .table-cyber tbody tr:nth-child(even) {
        background: rgba(0, 243, 255, 0.02) !important;
    }
    
    .table-cyber tbody tr:nth-child(even):hover {
        background: rgba(0, 243, 255, 0.08) !important;
    }
    
    /* Fix: Product names - NEON CYAN & BOLD */
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
    
    /* Fix: Description text */
    .specs-text {
        color: #8888aa !important;
    }
    .specs-text i {
        color: #444466 !important;
    }
    
    /* Fix: Price color */
    .price-credits {
        color: #00ffaa !important;
        font-weight: 700 !important;
        text-shadow: 0 0 20px rgba(0, 255, 170, 0.2);
    }
    
    /* Fix: ID color */
    .product-id {
        color: var(--neon-cyan) !important;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
    }
</style>

<div class="page-header d-flex justify-content-between align-items-center flex-wrap">
    <div>
        <h2><i class="fas fa-database me-3"></i>INVENTORY</h2>
        <p class="subtitle">// Product database status: <span style="color: var(--neon-cyan); animation: textGlow 2s ease-in-out infinite;">ONLINE</span></p>
    </div>
    <a href="/products/create" class="btn btn-cyber-success mt-2 mt-sm-0">
        <i class="fas fa-plus-circle me-2"></i> NEW ENTRY
    </a>
</div>

<div class="table-responsive">
    <table class="table table-cyber">
        <thead>
            <tr>
                <th>ID</th>
                <th>Designation</th>
                <th>Specs</th>
                <th>Credits</th>
                <th>Units</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($products)): ?>
                <tr>
                    <td colspan="6" class="text-center py-5" style="color: #444466; font-weight: 500; letter-spacing: 1px;">
                        <i class="fas fa-exclamation-triangle fa-2x d-block mb-3" style="color: var(--neon-pink); animation: iconGlow 2s ease-in-out infinite;"></i>
                        // NO DATA FOUND // <br>
                        <span style="font-size:0.8rem;">Initialize a new product to populate the grid.</span>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach($products as $p): ?>
                <tr>
                    <td><span class="product-id">#<?= $p->id ?></span></td>
                    <td><strong class="product-name-cyber"><?= htmlspecialchars($p->product_name) ?></strong></td>
                    <td><span class="specs-text"><?= htmlspecialchars($p->description) ?: '<i>// null</i>' ?></span></td>
                    <td><span class="price-credits">$<?= number_format($p->price, 2) ?></span></td>
                    <td>
                        <?php if($p->quantity > 10): ?>
                            <span class="badge-cyber-stock" style="border-color: #00ffaa; color: #00ffaa;">STABLE</span>
                        <?php elseif($p->quantity > 0): ?>
                            <span class="badge-cyber-stock" style="border-color: #ffcc00; color: #ffcc00;">LOW</span>
                        <?php else: ?>
                            <span class="badge-cyber-stock" style="border-color: var(--neon-pink); color: var(--neon-pink);">DEPLETED</span>
                        <?php endif; ?>
                        <span style="font-family: 'Orbitron', sans-serif; font-size:0.7rem; margin-left:5px; color: #8888aa;">x<?= $p->quantity ?></span>
                    </td>
                    <td class="text-center">
                        <a href="/products/edit/<?= $p->id ?>" class="btn btn-cyber-ghost btn-sm me-1">
                            <i class="fas fa-pen"></i> EDIT
                        </a>
                        <a href="/products/delete/<?= $p->id ?>" class="btn btn-cyber-danger btn-sm" onclick="return confirm('// CONFIRM DELETE? [Y/N]')">
                            <i class="fas fa-trash"></i> KILL
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>