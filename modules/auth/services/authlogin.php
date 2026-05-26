<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        
        <div class="login-form-section">
            <div class="form-wrapper">
                <h1 class="brand-title">Inventario Testing</h1>
                
                <form>
                    <div class="input-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
        
        <div class="login-testimonial-section">
            <div class="testimonial-wrapper">
                <p class="testimonial-text">
                    "Using <span class="highlight">Inventario</span> changes the way we work. We are now effortless and effective."
                </p>
                
                <div class="author-info">
                    <img src="../components/img/IMG_E3789.JPG" alt="Tom Hutchinson" class="avatar">
                    <p class="">&#169 <span id="currentYear"></span> mancst-dev. <span>Todos los derechos Reservados.</span></p>
                </div>
            </div>
            
            <svg class="decor-line" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,50 Q50,30 100,45" stroke="rgba(255,255,255,0.15)" stroke-width="1" fill="none" />
            </svg>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <footer class="site-footer">
        <p>mancst.dev - Derechos Reservados &#169</p>
    </footer> -->
    <script src="../components/js/auth.js"></script>
</body>

</html>