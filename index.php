<?php
// public/index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Colecta de Firmas</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="card">
    <header class="card-header">
      <h1>Colecta de Firmas</h1>
      <p class="subtitle">Firma para apoyar la iniciativa — tus datos se guardan de forma segura.</p>
    </header>

    <form id="formFirma" action="../backend/guardar_firma.php" method="POST" novalidate>
      <div class="field">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" maxlength="255" required>
      </div>

      <div class="field">
        <label for="apellido">Apellido</label>
        <input id="apellido" name="apellido" type="text" maxlength="255" required>
      </div>

      <div class="field">
        <label for="correo">Correo</label>
        <input id="correo" name="correo" type="email" maxlength="255" required>
      </div>

      <button class="btn" type="submit">Enviar Firma</button>
    </form>

    <footer class="card-footer">
      <small>Al enviar aceptas la <a href="#" class="link">política de privacidad</a>.</small>
    </footer>
  </main>

  <script>
  // simple client-side validation UX
  document.getElementById('formFirma').addEventListener('submit', function(e){
    const form = e.target;
    if (!form.checkValidity()) {
      e.preventDefault();
      alert('Por favor completa todos los campos correctamente.');
    }
  });
  </script>
</body>

<footer><a href="/admin/login.php" style="font-size:12px; opacity:0.6;">Administrador</a>
</footer>
</html>

