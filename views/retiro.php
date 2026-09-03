<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4">
    <h2>Retiro</h2>
    <form action="index.php" method="GET" class="card p-3 bg-light mb-4">
        <input type="hidden" name="accion" value="retiro">
        
        <div class="mb-3">
            <label for="monto" class="form-label">Monto a retirar:</label>
            <input type="number" step="0.01" id="monto" name="monto" class="form-control" placeholder="Ej. 100.00" required>
        </div>
        
        <button type="submit" class="btn btn-warning">Realizar Retiro</button>
    </form>

    <?php if ($mensaje): ?>
        <div class="alert <?= strpos($mensaje, 'ERROR') !== false ? 'alert-danger' : 'alert-success' ?>">
            <?= $mensaje ?>
        </div>
    <?php endif; ?>
    <p>Saldo actual: $<?= number_format($saldoActual, 2) ?></p>
    <p>Nuevo saldo: $<?= number_format($nuevoSaldo, 2) ?></p>
</div>

<?php include 'views/partials/footer.php'; ?>
    <?php if ($mensaje): ?>
        <div class="alert <?= strpos($mensaje, 'ERROR') !== false ? 'alert-danger' : 'alert-success' ?>">
            <?= $mensaje ?>
        </div>
    <?php endif; ?>
    <p>Saldo actual: $<?= number_format($saldoActual, 2) ?></p>
    <p>Nuevo saldo: $<?= number_format($nuevoSaldo, 2) ?></p>
</div>

<?php include 'views/partials/footer.php'; ?>