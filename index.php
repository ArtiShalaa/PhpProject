<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/search.php');

if(isset($_POST['submit'])){
    $_GET['country'];
    header('Location: category.php');
}
?>
<head>
<style>
<?php include 'assets/css/custom.css'; ?>
</style>
</head>

<!-- <div class="pt-2 pb-2">
    <div class="container">    
        <h4>Search by Continent</h4>   
        <form class="row" action="category.php" method="GET">
            <div class="col-4">
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
            <div class="form-group col-2">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>  -->
<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-dark">Latest Posts</h3>
                <div class="underline"></div>
            </div>
                <?php  
                     $homePosts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 12";
                     $homePosts_run = mysqli_query($con , $homePosts);
         
                     if(mysqli_num_rows($homePosts_run ) > 0)
                     {
                         foreach($homePosts_run as $homePostItem)
                         {
                            $image = "./uploads/posts/".$homePostItem['image'];
                           ?>          
                                <div class="card col-12 col-md-4">
                                    <img class="card-img-top" src="<?=$image?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$homePostItem['name']; ?></h5>
                                        <p class="card-text"><?=$homePostItem['description']; ?></p>
                                        <a href="#" class="btn btn-primary">More info</a>
                                    </div>
                                </div>
                            <?php
                         }
                     }
                     
                 ?>    
        </div> 
    </div>
</div>  

  <!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 9</div>
  <img src="./images-tour/g-1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src="./images-tour/g-2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="./images-tour/g-3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="./images-tour/g-4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 9</div>
  <img src="./images-tour/g-5.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src="./images-tour/g-6.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 9</div>
  <img src="./images-tour/g-7.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src="./images-tour/g-8.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src="./images-tour/g-9.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>



<script src="Slider.js"></script>

<?php
include('includes/footer.php')
?>