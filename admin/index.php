<?php include('components/navbar.php');?>
<!-- Main Content Section Starts -->
<section>
    <main>
        <div class="main">
            <div class="wrapper">
                <h1>Dashboard</h1>
                <br />
                <?php
                    if(isset($_SESSION['login']))
                        {
                            echo $_SESSION['login'];
                            unset ($_SESSION['login']);
                        }
                ?>
                <br />
                <div class="row">
                    <div class="col-4 text-center">
                        <h2>5</h2>
                            </br>
                        Categories
                    </div>
                    <div class="col-4 text-center">
                        <h2>5</h2>
                            </br>
                        Categories
                    </div>
                    <div class="col-4 text-center">
                        <h2>5</h2>
                            </br>
                        Categories
                    </div>
                    <div class="col-4 text-center">
                        <h2>5</h2>
                            </br>
                        Categories
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
<!-- Main Content Section Ends -->
<?php include('components/footer.php');?>