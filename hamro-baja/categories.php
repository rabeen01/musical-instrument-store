<?php
include('include/header.php');
include('FUNCTIONS/myfunction.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>OUR COLLECTIONS</h1>
                <?php
                    $categories = getAllActive("catagories");

                    if(mysqli_num_rows($categories) > 0)
                    {
                        foreach($categories as $item)
                        {
                            ?>
                            <h4><? = item['name']; ?></h4>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Data Available"
                    }
                ?>
                <button class="btn btn-primary">Testing</button>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php');?>