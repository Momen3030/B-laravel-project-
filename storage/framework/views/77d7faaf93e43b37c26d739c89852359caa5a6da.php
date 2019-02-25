<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

        You received a message from : <?php echo e($name); ?>

        <p>
                Subject: <?php echo e($subject); ?>

       </p>
        <p>
        Name: <?php echo e($name); ?>

        </p>
        
        <p>
        Email: <?php echo e($email); ?>

        </p>
       
        <p>
        Message: <?php echo e($user_message); ?>

        </p>
</body>
</html>