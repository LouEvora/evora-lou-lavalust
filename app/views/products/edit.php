<?php $this->layout('layouts/main'); ?>

<div class="page-header">
    <h2><i class="fas fa-pen-to-square me-3"></i>EDIT PRODUCT</h2>
    <p class="subtitle">// Updating ID: <span style="color: var(--neon-cyan); font-family: 'Orbitron', sans-serif;">#<?= $product->id ?></span></p>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <form action="/products/update/<?= $product->id ?>" method="POST">
            <div class="mb-4">
                <label class="form-label-cyber"><i class="fas fa-tag"></i> Designation</label>
                <input type="text" name="product_name" class="form-control form-control-cyber" value="<?= htmlspecialchars($product->product_name) ?>" required>
            </div>
            <div class="mb-4">
                <label class="form-label-cyber"><i class="fas fa-align-left"></i> Specs / Description</label>
                <textarea name="description" class="form-control form-control-cyber" rows="4"><?= htmlspecialchars($product->description) ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label-cyber"><i class="fas fa-coins"></i> Price (Credits)</label>
                    <input type="number" step="0.01" name="price" class="form-control form-control-cyber" value="<?= $product->price ?>" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label-cyber"><i class="fas fa-cubes"></i> Quantity (Units)</label>
                    <input type="number" name="quantity" class="form-control form-control-cyber" value="<?= $product->quantity ?>" required>
                </div>
            </div>
            
            <div class="d-flex gap-3 mt-3">
                <button type="submit" class="btn btn-cyber-primary">
                    <i class="fas fa-rotate-right me-2"></i> UPDATE
                </button>
                <a href="/products" class="btn btn-cyber-ghost">
                    <i class="fas fa-times me-2"></i> ABORT
                </a>
            </div>
        </form>
    </div>
</div>