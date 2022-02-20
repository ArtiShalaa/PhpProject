<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/search.php');
?>
<link rel="stylesheet" href="/assets/css/custom.css">
<div class="py-5">
    <div class="container">
        <div class="row">
                <?php 
                    if(isset($_GET['id']))
                    {
                        $id = mysqli_real_escape_string($con ,$_GET['id']);

                        $category = "SELECT id FROM categories WHERE id='$id' AND status='0' LIMIT 1";
                        $category_run = mysqli_query($con ,$category);

                        if(mysqli_num_rows($category_run ) > 0)
                        {
                            $categoryItem = mysqli_fetch_array($category_run);
                            $category_id = $categoryItem['id']; 

                            $posts = "SELECT * FROM posts WHERE category_id='$category_id' AND status='0' ";
                            $posts_run = mysqli_query($con, $posts);

                            if(mysqli_num_rows($posts_run ) > 0)
                            {
                                foreach($posts_run as $postItems)
                                {
                                    $image = "./uploads/posts/".$postItems['image'];
                                    ?>          
                                         <div class="card col-12 col-md-4">
                                             <img class="card-img-top" src="<?=$image?>" alt="Card image cap">
                                             <div class="card-body">
                                                 <h5 class="card-title"><?=$postItems['name']; ?></h5>
                                                 <p class="card-text"><?=$postItems['description']; ?></p>
                                                 <a href="#" class="btn btn-primary">More info</a>
                                             </div>
                                         </div>
                                      <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <h4>No Post Available</h4>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <h4>No Such Category Found</h4>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <h4>No Such URL Found</h4>
                        <?php
                    }
                ?>
        </div> 
    </div>
</div>    

<?php
include('includes/footer.php')
?>