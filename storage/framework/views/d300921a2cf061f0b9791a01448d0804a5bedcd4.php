


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/assets-admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets-admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets-admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets-admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets-admin/plugins/iCheck/square/blue.css">

    <!-- App favicon -->
        <link rel="shortcut icon" href="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <a href="/assets-admin/index2.html"><b>E-</b>Booking</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="font-weight: bold; color:black; font-size:15px;">Register Now</p>

        <form action="<?php echo e(route('register')); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="form-group has-feedback">

            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Nama Lengkap">

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback">

            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email">

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <div class="input-group">
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                <div class="input-group-addon"><i class="glyphicon glyphicon-eye-open" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                
            </div>
        </div>

        <div class="form-group has-feedback">
            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                
                <div class="input-group-addon"><i class="glyphicon glyphicon-eye-open" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                
            </div>
        </div>


        <br>
        <div class="mt-4">
            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> <?php echo e(__('Register')); ?></button>
        </div>
        

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <br>
    <br>
    <div class="mt-5 text-center">
                            
            <div>
                <p>Don't have an account ? <a href="<?php echo e(route('login')); ?>" class="font-weight-medium text-primary"> Login </a> </p>
                
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear())</script> <a href="https://laravel.com/">Laravel</a> By <a href="https://diazdjul19.github.io/">Diaz Djuliansyah</a>
                </p>
            </div>
        </div>

    <!-- jQuery 3 -->
    <script src="/assets-admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/assets-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/assets-admin/plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
        });
    });
    </script>


    
    <script>
        var state= false;
        function toggle1() {
            if (state) {
                document.getElementById(
                    "password").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye1").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye1").style.color='#5887ef';
                state = true;
            }
        }

        function toggle2() {
            if (state) {
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye2").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye2").style.color='#5887ef';
                state = true;
            }
        }
    </script>

    
</html>

<?php /**PATH C:\laragon\www\E-Booking\resources\views/auth/register.blade.php ENDPATH**/ ?>