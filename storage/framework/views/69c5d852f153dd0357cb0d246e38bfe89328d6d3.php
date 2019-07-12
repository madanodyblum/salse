<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Request</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <h1>Demo Request</h1>
        <h2>You received the demo request from this customer</h2>
        <h3>Request:</h3>
        <p><?php echo e($msg); ?></p>
        <h3>Thank you, Have a good day!</h3>
        <a href="<?php echo e(URL::asset('/')); ?>"><h3>From SalesC2.com</h3></a>
    </body>
</html>
<?php /**PATH E:\Code\Laravel\salesc2(0511-complete)\resources\views/emails/request-message.blade.php ENDPATH**/ ?>