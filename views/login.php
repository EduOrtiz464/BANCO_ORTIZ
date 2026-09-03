<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4">
    <h2>Iniciar Sesión</h2>

    
    <form action="index.php" method="GET" class="mb-4">
        <input type="hidden" name="accion" value="login">
        
        <div class="mb-3">
            <label for="u" class="form-label">Usuario:</label>
            <input type="text" id="u" name="u" class="form-control" placeholder="Ingrese usuario" required>
        </div>
        
        <div class="mb-3">
            <label for="p" class="form-label">Contraseña:</label>
            <input type="password" id="p" name="p" class="form-control" placeholder="Ingrese contraseña" required>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<?php include 'views/partials/footer.php'; ?>