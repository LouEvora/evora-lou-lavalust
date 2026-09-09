<?php $this->layout('layouts/main'); ?>

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
                    <td><span style="color: var(--neon-cyan); font-family: 'Orbitron', sans-serif; font-size:0.8rem;">#<?= $p->id ?></span></td>
                    <td><strong style="color: #ffffff;"><?= htmlspecialchars($p->product_name) ?></strong></td>
                    <td style="max-width: 200px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; color: #8888aa;">
                        <?= htmlspecialchars($p->description) ?: '<i style="color:#444466;">// null</i>' ?>
                    </td>
                    <td><span style="color: #00ffaa; font-weight:700; text-shadow: 0 0 20px rgba(0,255,170,0.2);">$<?= number_format($p->price, 2) ?></span></td>
                    <td>
                        <?php if($p->quantity > 10): ?>
                            <span class="badge-cyber-stock" style="border-color: #00ffaa; color: #00ffaa;">STABLE</span>
                        <?php elseif($p->quantity > 0): ?>
                            <span class="badge-cyber-stock" style="border-color: #ffcc00; color: #ffcc00;">LOW</span>
                        <?php else: ?>
                            <span class="badge-cyber-stock" style="border-color: var(--neon-pink); color: var(--neon-pink);">DEPLETED</span>
                        <?php endif; ?>
                        <span style="font-family: 'Orbitron', sans-serif; font-size:0.7rem; margin-left:5px;">x<?= $p->quantity ?></span>
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