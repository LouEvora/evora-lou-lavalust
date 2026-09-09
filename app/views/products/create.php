<?php $this->layout('layouts/main'); ?>

<div class="page-header">
    <h2><i class="fas fa-plus-hexagon me-3"></i>NEW PRODUCT</h2>
    <p class="subtitle">// Input the specs for the new asset</p>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <form action="/products/store" method="POST">
            <div class="mb-4">
                <label class="form-label-cyber"><i class="fas fa-tag"></i> Designation</label>
                <input type="text" name="product_name" class="form-control form-control-cyber" placeholder="e.g., CyberDeck X1" required>
            </div>
            <div class="mb-4">
                <label class="form-label-cyber"><i class="fas fa-align-left"></i> Specs / Description</label>
                <textarea name="description" class="form-control form-control-cyber" rows="4" placeholder="Describe the hardware..."></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label-cyber"><i class="fas fa-coins"></i> Price (Credits)</label>
                    <input type="number" step="0.01" name="price" class="form-control form-control-cyber" placeholder="0.00" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label-cyber"><i class="fas fa-cubes"></i> Quantity (Units)</label>
                    <input type="number" name="quantity" class="form-control form-control-cyber" placeholder="0" required>
                </div>
            </div>
            
            <div class="d-flex gap-3 mt-3">
                <button type="submit" class="btn btn-cyber-primary">
                    <i class="fas fa-save me-2"></i> DEPLOY
                </button>
                <a href="/products" class="btn btn-cyber-ghost">
                    <i class="fas fa-times me-2"></i> ABORT
                </a>
            </div>
        </form>
    </div>
</div>