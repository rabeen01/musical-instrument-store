<?php
session_start();
include('include/header.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    if(isset($_SESSION['message']))
                    {
                        ?>
                        <div class="alert alert-warning alert-dismissable fade show" role="alert">
                            <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                            <strong type="button" class="button-close" data-bs-dismiss="alert" aria-label="close"></strong>
                        </div>
                        <?php
                        unsent($_SESSION['message']);
                    }
                ?>
                <h1>Hello, world!</h1>
                <button class="btn btn-primary">Testing</button>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>