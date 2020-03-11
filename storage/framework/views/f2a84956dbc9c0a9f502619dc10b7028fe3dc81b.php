<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register-css.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>Registrate</title>
</head>

<body>
    <div class="container-fluid">

        <main>

            <br>
            <section id="register-form">
                <div class="main-title">
                    <h1>Registrarse</h1>
                </div>
                <div class="logo-company">
                    <a href="/"><img src="/img/acba-logo.png" alt=""></a>
                </div>




                <form method="post" action="" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input id="first_name" type="text" class="form-control <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" autocomplete="first_name" autofocus>

                        <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?>
                        
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input id="last_name" type="text" class="form-control <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" autocomplete="last_name" autofocus>

                        <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus>

                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" autocomplete="password" autofocus>

                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input id="password_confirmation" type="password" class="form-control <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password_confirmation" autocomplete="password_confirmation" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="image">Foto de perfil</label> <br>
                        <input name="image" type="file" id="image">
                        <?php if ($errors->has('image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image'); ?>
                        <span class="invalid-feedback" style="display:block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
 
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input id="dni" type="text" class="form-control <?php if ($errors->has('dni')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dni'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="dni" value="<?php echo e(old('dni')); ?>" autocomplete="dni" autofocus>

                        <?php if ($errors->has('dni')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dni'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
 
                    <div class="form-group">
                        <label for="birthdate">Fecha de nacimiento</label>
                        <input value="<?php echo e(old('birthdate')); ?>" name="birthdate" type="date" class="form-control <?php if ($errors->has('birthdate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birthdate'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="birthdate">
                        <?php if ($errors->has('birthdate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birthdate'); ?>
                        <span class="invalid-feedback" style="display:block" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input id="phone" type="text" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" value="<?php echo e(old('phone')); ?>" autocomplete="phone" autofocus>

                        <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input id="address" type="text" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e(old('address')); ?>" autocomplete="address" autofocus>

                        <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>


                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-6 column">
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </div>
                    </div>

                </form>

                <div class="btn-social-network">
                    <hr>
                    <span>O</span>
                    <hr><br>
                </div>
                <div class="btn-social-network">
                    <a href="https://gmail.com"><img src="img/gmail.svg" alt="Gmail"></a>
                    <a href="https://facebook.com"><img src="img/facebook.svg" alt="Facebook"></a>
                    <a href="https://twitter.com"><img src="img/twitter.svg" alt="Twitter"></a>
                </div>

                <p>¿Ya tiene una cuenta? <a href="login">Ingrese</a></p>

            </section>
            <br>
        </main>



        <aside>
            
        </aside>

        <footer>
            
        </footer>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/auth/register.blade.php ENDPATH**/ ?>