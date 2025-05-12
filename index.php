<?php
require_once "php/head.php";
require_once "php/header.php";
?>

<link rel="stylesheet" href="<?php echo $link_base_root ?>/estilos/estilo-main.css">

<main class="inicio-lucijo">
    <!-- HERO -->
    <section class="hero">
        <div class="hero-texto">
            <h1>💻 Bienvenido a <span class="color-lucijo">LuCiJo Teams Solutions</span></h1>
            <p>Donde la tecnología brilla y tu equipo rinde al 100% ⚙️✨</p>
            <a href="producto/carrito_productos.php" class="btn-comprar">Explorar productos</a>
        </div>
        <div class="hero-imagen">
        <img src="https://scontent.fupn2-1.fna.fbcdn.net/v/t39.30808-6/494281601_122114623910827889_864818899979753514_n.jpg?stp=dst-jpg_p526x296_tt6&_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_ohc=0uJ9S_ct9cwQ7kNvwF2oYtl&_nc_oc=AdkJz5lWtoEdpoN0lCl-QK71uWh5UE98jR2hfDz7R1xumchWSNfC1dJDWTTreLQ7qvdOW1rgD3Dz9eWjnjNBeY__&_nc_zt=23&_nc_ht=scontent.fupn2-1.fna&_nc_gid=quWy6rnGOOq502mUAmwL_w&oh=00_AfHISRM7hhoW9J6GEIhxmJ4JlH82_2Nba2vxBbrYyY8NoA&oe=681E68B6" alt="BANAMEX" width="220">

    </div>
    </section>

    <!-- SERVICIOS -->
    <section class="servicios">
        <h2>🔧 Servicios especializados</h2>
        <div class="grid-servicios">
            <div class="card-servicio">
                <img src="imagenes_banner/limpieza.png" alt="Limpieza">
                <h3>🧼 Limpieza profesional</h3>
                <p>Eliminamos polvo y mejoramos el rendimiento interno de tu equipo.</p>
            </div>
            <div class="card-servicio">
                <img src="imagenes_banner/hardware.jpg" alt="Hardware">
                <h3>🛒 Venta de componentes</h3>
                <p>Memorias, SSD, mouse, cargadores y más... ¡Todo garantizado!</p>
            </div>
            <div class="card-servicio">
                <img src="imagenes_banner/soporte.jpeg" alt="Soporte">
                <h3>🧑‍💻 Soporte técnico</h3>
                <p>Formateo, instalación de Office, antivirus y asesoría personalizada.</p>
            </div>
        </div>
    </section>

    <!-- LLAMADO A LA ACCIÓN -->
    <section class="cta">
        <h2>¿Tienes dudas o necesitas ayuda técnica?</h2>
        <p>Contáctanos por WhatsApp y con gusto te ayudamos 🤝</p>
        <a href="usuario/usuario_cuenta.php" class="btn-contactar">Iniciar sesión o registrarme</a>
    </section>
</main>

<?php require_once "php/footer.php"; ?>
