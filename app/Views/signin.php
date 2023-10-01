<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LogIn</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Log In</h2>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= getFlashdata('msg') ?>
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>/UserController/LoginAuth" method="post">
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Sign In</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>