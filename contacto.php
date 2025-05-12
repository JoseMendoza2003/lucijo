<?php
require_once "php/head.php";
require_once "php/header.php";
require_once "base_de_datos/conexion.php"; // asegúrate de tener este archivo con tu conexión
?>

<link rel="stylesheet" href="<?php echo $link_base_root ?>/estilos/estilo-contacto.css">

<main class="contacto-main">
    <section class="contacto-banner">
        <h1>📬 ¡Contáctanos!</h1>
        <p>¿Tienes dudas, sugerencias o necesitas ayuda? Escríbenos y te responderemos lo antes posible.</p>
    </section>

    <section class="contacto-formulario">
        <form action="contacto.php" method="POST">
            <label for="nombre">👤 Tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre completo">

            <label for="correo">📧 Tu correo:</label>
            <input type="email" id="correo" name="correo" required placeholder="ejemplo@correo.com">

            <label for="mensaje">💬 Tu mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="6" required placeholder="Escribe aquí tu mensaje..."></textarea>

            <button type="submit">✉️ Enviar mensaje</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $mensaje = $_POST["mensaje"];

            $stmt = $conn->prepare("INSERT INTO tbl_contacto (vNombre, vCorreo, vMensaje) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $correo, $mensaje);
            
            if ($stmt->execute()) {
                echo "<div class='mensaje-confirmacion'>✅ ¡Gracias por contactarnos! Tu mensaje fue guardado correctamente.</div>";
            } else {
                echo "<div class='mensaje-confirmacion' style='background:#f8d7da; color:#721c24;'>❌ Error al guardar el mensaje.</div>";
            }

            $stmt->close();
        }
        ?>
    </section>
</main>

<?php require_once "php/footer.php"; ?>
