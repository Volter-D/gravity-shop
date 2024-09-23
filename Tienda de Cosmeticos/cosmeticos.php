<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSMÉTICOS</title>
    <link href='logo.png' rel='icon' type='image/x-icon'/>
    
     <link href="styles.css" rel="stylesheet"> <!-- Enlace al archivo CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" class="logo" width="30" height="30">
                GRAVITY SHOP
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="inicio.php">INICIO <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                        </svg></a>
                    </li>
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="cosmeticos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="ropa" >
          <strong> MAQUILLAJE</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cosmeticos.php">Bases</a></li>
            <li><a class="dropdown-item" href="delineadores.php">Delineadores </a></li>
            <!-- <li><a class="dropdown-item" href="ropa.php">CAMISAS </a></li>
            <li><a class="dropdown-item" href="ropa.php">ZAPATOS </a></li>-->
          </ul>
        </li>
                </ul>
                <!-- Carrito en el Navbar -->
                <div class="d-flex">
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <i class="bi bi-cart"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
</svg> <span id="cart-count" class="badge bg-danger">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

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

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <h1 class="textob"> <style>.textob{color: white;} </style><strong>BASES</strong></h1>
        <br>
        <div class="row">
            <!-- Producto 1 -->
    
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr2" src="imgmaquillaje/maquillaje1.jpeg  " class="card-img-top" alt="Producto 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Spray Fijador de Maquillaje</h5>
                        <p class="card-text">Precio: $15,10</p>
                        <button class="btn btn-dark add-to-cart" data-id="2" data-name="Spray " data-price="15.10">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr2" src="imgmaquillaje/maquillaje2.jpeg  " class="card-img-top" alt="Producto 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Iluminador Líquido</h5>
                        <p class="card-text">Precio: $14,50</p>
                        <button class="btn btn-dark add-to-cart" data-id="2" data-name="Iluminador" data-price="14.50">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr3" src="imgmaquillaje/maquillaje3.jpeg" class="card-img-top" alt="Producto 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Suero Instaglow Color</h5>
                        <p class="card-text">Precio: $25</p>
                        <button class="btn btn-dark add-to-cart" data-id="3" data-name="Suero" data-price="25">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr4" src="imgmaquillaje/maquillaje4.jpeg" class="card-img-top" alt="Producto 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Base Antiedad 
                        Efecto Lifting</h5>
                        <p class="card-text">Precio: $26.90</p>
                        <button class="btn btn-dark add-to-cart" data-id="4" data-name="Base Antiedad" data-price="26.90">Agregar al Carrito</button>
                    </div>
                </div>
            </div>  
             
<br><br><br>
            <!-- Contenido Principal2 -->
    <div class="container mt-5">
        
        
        <div class="row">
            <!-- Producto 1 -->
    
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr2" src="imgmaquillaje/maquillaje5.jpeg  " class="card-img-top" alt="Producto 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Base Hidratante 
                        de cobertura media a alta</h5>
                        <p class="card-text">Precio: $18.90</p>
                        <button class="btn btn-dark add-to-cart" data-id="2" data-name="Base Hidratante" data-price="18.90">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr2" src="imgmaquillaje/maquillaje6.jpeg  " class="card-img-top" alt="Producto 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Base Matificante de cobertura 
                        media a alta a prueba de agua</h5>
                        <p class="card-text">Precio: $18.90 </p>
                        <button class="btn btn-dark add-to-cart" data-id="2" data-name="Base Matificante" data-price="18.90 ">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr3" src="imgmaquillaje/maquillaje7.jpeg" class="card-img-top" alt="Producto 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Full Powder Proof Mate
                        Cubre y Matifica
                        </h5>
                        <p class="card-text">Precio: $23.10</p>
                        <button class="btn btn-dark add-to-cart" data-id="3" data-name="Full Powder" data-price="23.10">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="imgr4" src="imgmaquillaje/maquillaje8.jpeg" class="card-img-top" alt="Producto 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Polvo Compacto </h5>
                        <h5 class="card-title">Sella y retoca </h5>
                        <p class="card-text">Precio: $17.70</p>
                        <button class="btn btn-dark add-to-cart" data-id="4" data-name="Polvo Compacto" data-price="17.70">Agregar al Carrito</button>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
</div>

</body>
</html>
