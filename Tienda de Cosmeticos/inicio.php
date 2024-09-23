<?php
 session_start();
 if (!isset($_SESSION['nombre'])) {
     header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRAVITY SHOP</title>
    <link href='logo.png' rel='icon' type='image/x-icon'/>
    <link rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="//code.tidio.co/9ip85kqxf1c6h3xodes5yoc3jltvbhom.js" async></script>
    <style>
        /* Ajustar el tamaño del carrusel */
        .custom-carousel {
            width: 80%; /* Ajusta el ancho del carrusel */
            height: 500px; /* Ajusta la altura del carrusel */
            margin: 0 auto; /* Centrar el carrusel horizontalmente */
        }

        /* Asegurarse de que las imágenes cubran completamente el carrusel */
        .custom-carousel img {
            object-fit: cover;
            width: 1005px;
            height: 500px;
            margin-left: 11%;
        }
        
            .div1{
                width: 1366px;
                height: 768px;
                background-color: rgb(242,242,242);
                margin-right: auto;
                margin-left: auto;
            }  
            /*.logo{
                margin-left: 545px;
            }*/
            .conte1{
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;

            }
        .logo{
            margin-left: 1%;
        }
    </style>
</head>
<body class="bg-dark">
   
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php" id="ini"><strong> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg> INICIO</strong>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="cosmeticos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="ropa">
                        <strong> MAQUILLAJE</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cosmeticos.php">Bases</a></li>
                        <li><a class="dropdown-item" href="delineadores.php">Delineadores</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="accesorios.php"><strong>ACCESORIOS</strong></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>REDES SOCIALES</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100077883252901">Facebook <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/gravityshop07/?next=%2F">Instagram <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://chat.whatsapp.com/Euqn45kdNLL4B5X3cqR1ZB"><strong>ASESORAMIENTO <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg></strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ubicacion.php"><strong>UBICACIÓN <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg></strong></a>
                </li>
            </ul>

              <!-- Carrito y cerrar sesión en el Navbar -->
              <div class="d-flex">
                <!-- Carrito -->
                <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                    <i class="bi bi-cart"></i> Carrito 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
                    </svg> <span id="cart-count" class="badge bg-danger">0</span>
                </button>

               <!-- Nombre del usuario -->
               <?php if (isset($_SESSION['nombre'])): ?>
                <span class="navbar-text me-3">
                    <i class="bi bi-person-fill"></i> <?php echo $_SESSION['nombre']; ?>
                </span>

                <!-- Botón de Cerrar sesión -->
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='logout.php'">
                    <i class="bi bi-door-open-fill"></i> Cerrar sesión
                </button>
                <?php else: ?>
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='login.php'">
                    <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<div class="div1 " class="conte1">
        <img src="logo_2.png" alt="" class="logo" class="img-fluid">
        <!--<span class="logo__descripcion"><strong>EL GUSTO DE COMPRAR</strong></span>-->
    </div>
    <br>  
    <br>
    <br>
    <div class="mercado">
        <p class="text"><strong>ACERCA DE NOSOTROS </strong></p>
    </div>
    <br><br>
    <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgmaquillaje/bienvenida.png"  class="d-block w-10" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="imgmaquillaje/carusel1.png" class="d-block w-10" alt="Imagen 2">
        </div>
        <div class="carousel-item">
            <img src="imgmaquillaje/WhatsApp.png"  class="d-block w-10" alt="Imagen 3">
        </div>
        <div class="carousel-item">
            <img src="imgmaquillaje/envios.png" class="d-block w-10" alt="Imagen 4">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

   <!-- <div class="container">  
        <div class="row">
            <div  class="col-md-3 " >
                <a href="combos.php"  >
                    <img src="img/img1.jpg" class="img-fluid" alt="">
                </a>
                <p class="texto">COMBOS</p>
            </div>
            <div  class="col-md-3 " >
                <a href="redes.php"  >
                    <img class="img-fluid" src="img/redes_sociales_1.png" alt="">
                </a>
                <p class="texto">REDES SOCIALES</p>
            </div>
            <div  class="col-md-3 " >
                <a href="destacado.php" >
                    <img class="img-fluid" src="img/img4jpg.jpg" alt="">
                </a>
                <p class="texto">DESTACADOS</p>
            </div>
            <div  class="col-md-3 " >
                <a href="ropa.php"  >
                    <img class="img-fluid" src="img/img8.png" alt="">
                </a>
                <p class="texto">ROPA</p>
            </div>
        </div>           
    </div> -->
    <br>
    <br>
    <div class="mercado">
        <p class="text"><strong>LO MAS RECIENTE DEL MERCADO</strong></p>
    </div>
    <br><br>
   <!-- <div class="container">  
        <div class="row">
            <div  class="col-md-4 " >
                <a href="tecnologia.php"  >
                    <div class="zoom"> <img class="img" class="img-fluid" src="img/img4jpg.jpg" alt=""></div> 
                    
                </a>
                <p class="texto1"><strong>TECNOLÓGIA</strong></p>
                <p class="t">CARGA RAPIDA Cable V8 2.50$...</p>
            </div>
            <div  class="col-md-4 " >
                <a href="cosmeticos.php"  >
                    <div class="zoom"> <img class="img" class="img-fluid" src="img/img7.jpg" alt=""></div> 
                </a>
                <p class="texto1"><strong>COSMÉTICOS</strong> </p>
                <p class="t">Gel hidratante facial 3.00$...</p>
            </div>     
            <div  class="col-md-4 " >
                <a href="accesorios.php"  >
                  <div class="zoom"> <img class="img" class="img-fluid" src="img/img6.jpg" alt=""></div> 
                </a>
                <p class="texto1"><strong>ACCESORIOS</strong></p>
                <p class="t">Collar de Pareja 50$</p>
            </div>
        </div>           
    </div>-->
    <br><br>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Offcanvas para el Carrito -->
<div   class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasCartLabel">Carrito de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group" id="cart-items">
            <!-- Elementos del carrito aparecerán aquí -->
        </ul>
        <h4 class="mt-3">Total: $<span id="cart-total">0</span></h4>
        <button class="btn btn-danger mt-3" id="clear-cart">Vaciar Carrito</button>
        <button class="btn btn-success mt-3" id="checkout" data-bs-toggle="modal" data-bs-target="#paymentModal">Pagar</button>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartCount = document.getElementById('cart-count');
    const clearCartButton = document.getElementById('clear-cart');
    const confirmPaymentButton = document.getElementById('confirmPayment');
    let cart = [];

    // Función para cargar el carrito desde localStorage
    function loadCart() {
        const savedCart = localStorage.getItem('cart');
        if (savedCart) {
            cart = JSON.parse(savedCart);
            renderCart();
        }
    }

    // Función para guardar el carrito en localStorage
    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Función para renderizar el carrito visualmente
    function renderCart() {
        cartItems.innerHTML = '';
        cart.forEach(item => {
            const li = document.createElement('li');
            li.classList.add('list-group-item');
            li.innerHTML = `${item.name} - $${item.price.toFixed(2)} 
            <button class="btn btn-danger btn-sm float-end remove-from-cart" data-id="${item.id}">Eliminar</button>`;
            cartItems.appendChild(li);
        });
        const total = cart.reduce((acc, item) => acc + item.price, 0);
        cartTotal.textContent = total.toFixed(2); // Mostrar el total con dos decimales
        cartCount.textContent = cart.length;
    }

    // Función para agregar un producto al carrito
    function addToCart(id, name, price) {
        const product = { id, name, price: parseFloat(price) }; // Convertir el precio a número decimal
        cart.push(product);
        saveCart();
        renderCart();
    }

    // Función para eliminar un producto del carrito
    function removeFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        saveCart();
        renderCart();
    }

    // Función para vaciar el carrito
    function clearCart() {
        cart = [];
        saveCart();
        renderCart();
    }

    // Cargar el carrito desde localStorage al cargar la página
    loadCart();

    // Eventos para agregar al carrito
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.dataset.id);
            const name = e.target.dataset.name;
            const price = e.target.dataset.price; // Mantener el precio como cadena
            addToCart(id, name, price);
        });
    });

    // Eventos para eliminar del carrito
    cartItems.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-from-cart')) {
            const id = parseInt(e.target.dataset.id);
            removeFromCart(id);
        }
    });

    // Evento para vaciar el carrito
    clearCartButton.addEventListener('click', clearCart);

    // Simulación del proceso de pago
    confirmPaymentButton.addEventListener('click', (e) => {
        e.preventDefault();

        // Obtener los valores del formulario de pago
        const customerName = document.getElementById('customerName').value;
        const customerID = document.getElementById('customerID').value;
        const creditCardNumber = document.getElementById('creditCardNumber').value;
        const expirationDate = document.getElementById('expirationDate').value;
        const cvv = document.getElementById('cvv').value;

        // Validar el formulario (básico)
        if (customerName && customerID && creditCardNumber && expirationDate && cvv) {
            alert(`Pago exitoso. Gracias por su compra, ${customerName}!`);
            clearCart(); // Vaciar el carrito después del pago
            document.getElementById('paymentForm').reset(); // Limpiar el formulario
            const modal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            modal.hide(); // Cerrar el modal
        } else {
            alert('Por favor, complete todos los campos del formulario.');
        }
    });
});


    </script>
    <!-- Modal de Pago -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Realizar Pago</h5>
                <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paymentForm">
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="customerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerID" class="form-label">Número de Cédula</label>
                        <input type="text" class="form-control" maxlength="10" id="customerID" required>
                    </div>
                    <div class="mb-3">
                        <label for="creditCardNumber" class="form-label">Número de Tarjeta de Crédito</label>
                        <input type="text" class="form-control" id="creditCardNumber" maxlength="16" required>
                    </div>
                    <div class="mb-3">
                        <label for="expirationDate" class="form-label">Fecha de Caducidad</label>
                        <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY" maxlength="5" required>
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">Clave de 3 Dígitos (CVV)</label>
                        <input type="text" class="form-control" id="cvv" maxlength="3" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" id="confirmPayment">Confirmar Pago</button>
            </div>
        </div>
    </div>

</body>
</html>