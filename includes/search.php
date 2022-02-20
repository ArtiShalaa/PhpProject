<div class="pt-4 pb-2">
    <div class="container">    
        <h4>Search by Continent</h4>   
        <form class="row" action="category.php" method="GET">
            <div class="col-md-4 col-10">
                <select name="id" id="country" class="form-select" aria-label="Select a country">
                    <option value="" disabled>--- Choose a country ---</option>
                    <?php 
                    $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' ";
                    $navbarCategory_run = mysqli_query($con , $navbarCategory);

                    if(mysqli_num_rows($navbarCategory_run ) > 0)
                    {
                        foreach($navbarCategory_run as $navItems)
                        {
                        ?>
                                <option value=<?=$navItems['id']; ?>><?=$navItems['name']; ?></option>
                            <?php
                        }
                    }
                    
                ?>
                    
                </select>
            </div>
            <div class="form-group col-md-2 col-2">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div> 