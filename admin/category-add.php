<?php

include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    
<div class="row mt-4">
     <div class="col-md-12">

        <?php 
        include('message.php');
        ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Category
                    <a href="category-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>

                </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                    

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" required rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Navbar Status</label> <br/>
                                <input type="checkbox" name="navbar_status" width="70px" height="70px" />
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Is Hidden</label> <br/>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <button type="submit" name="category_add" class="btn btn-primary">Save Category</button>
                            </div>

                        </div>
                    </form>

                
                
                
                
                </div>
            </div>
        </div>

    </div>

</div>


<?php
include('includes/footer.php');
include('includes/scripts.php')
?>