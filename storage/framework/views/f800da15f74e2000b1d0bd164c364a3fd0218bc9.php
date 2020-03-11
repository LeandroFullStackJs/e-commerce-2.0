<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="stylesheet" href='<?php echo $__env->yieldContent("css"); ?>'>
    </head>

    <body>
    
        <header>
            <section class='logo-usuario'>
            <article class='logo'>
                <br>
                <a href='/'><img src='/img/acba-logo.png' alt=''></a>
            </article>
            <article class='usuario-acciones'>
                <?php if(Auth::user() == null): ?>
                    <a href='/register' id='registrarme'>Crear cuenta</a> 
                    <a href='/login' id='ingresar'>Ingresar</a>
                <?php else: ?>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
            
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </article>
            </section>
            <hr>
            <nav id='nav' class='navbar navbar-expand-lg navbar-light '>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
                aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                    <a class='nav-link' href='/'>Inicio <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/products'>Productos</a>
                </li>
                <li class='nav-item '>
                    <a class='nav-link' href='/contact'>Contacto</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/faq'>Ayuda</a>
                </li>

                <?php if(Auth::user() != null): ?>
                <li class='nav-item'>
                    <a class='nav-link' href='/profile'>Perfil</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/cart'>Carrito</a>
                </li>
                <?php endif; ?>

                </ul>
                <form class='form-inline my-2 my-lg-0'>
                <input class='form-control mr-sm-2' type='search' placeholder='Busqueda' aria-label='Search'>
                <button class='btn btn-light btn-outline-success my-2 my-sm-0' type='submit'>Buscar</button>
                </form>
            </div>
            </nav>
            <hr>
        </header>

        <div class="container-fluid">

            <main>

                <?php echo $__env->yieldContent('main'); ?>

            </main>

        </div>

        <footer>
            <section class="logo">
            <h1>AↃBA</h1>
            </section>
            <section class="footer-nav">
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="products">Productos</a></li>
                <li><a href="contact">Contacto</a></li>
                <li><a href="faq">Ayuda</a></li>
            </ul>
            </section>
            <br><br>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>
  
</html>
<?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/layouts/template.blade.php ENDPATH**/ ?>