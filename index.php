<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Validation with Session</title>
  </head>
  <body>
    <div class="section">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Contact Us</h1>
                </div>
                <div class="card-body">

                <form action="contact.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" value="<?= (isset($_SESSION['name']))?$_SESSION['name']:'' ?>" type="text" class="form-control">
                        <?php if(isset($_SESSION['err']['name'])){ ?>
                            <span class="text-danger">
                                <?php echo $_SESSION['err']['name']; ?>
                            </span>
                        <?php } unset($_SESSION['err']['name']); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="email" value="<?= (isset($_SESSION['email']))?$_SESSION['email']:'' ?>"  type="text" class="form-control" type="text" class="form-control">
                        <?php if(isset($_SESSION['err']['email'])){ ?>
                            <span class="text-danger">
                                <?php echo $_SESSION['err']['email']; ?>
                            </span>
                        <?php } unset($_SESSION['err']['email']); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" value="<?= (isset($_SESSION['password']))?$_SESSION['password']:'' ?>"  type="text" class="form-control" type="password" class="form-control">
                        <?php if(isset($_SESSION['err']['password'])){ ?>
                            <span class="text-danger">
                                <?php echo $_SESSION['err']['password']; ?>
                            </span>
                        <?php } unset($_SESSION['err']['password']); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
