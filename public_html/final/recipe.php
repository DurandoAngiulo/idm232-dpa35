 <?php include_once 'components/header.php'; ?>
 <?php include_once 'components/navbar.php'?>
 <div class="container-fluid px-5">
    <div class="container-fluid px-4 d-flex justify-content-center">
       <img src="https://via.placeholder.com/500x200" class="img-fluid w-75">
    </div>   
       <div class="row mt-3">
            <div class="col">
                <h1 class="red text-center" >Recipe Title</h1>
            </div>
       </div>    
    <div class="row mt-1">
        <div class="col">
            <h4 class="text-center fw-light fst-italic grey" >Recipe excerpt/description</h4>
        </div>
    </div>
    <div class="button-flex">
        <div class="custom-button"><p class="fw-semibold">Prep Time: <span class= "fw-light">XX Min</span></p></div>
        <div class="custom-button"><p class="fw-semibold">Cook Time: <span class= "fw-light">XX Min</span></p></div>
        <div class="custom-button"><p class="fw-semibold">Yield: <span class= "fw-light">XX Servings</span></p></div>
        <div class="custom-button grayBackground pe-5"><p class="fw-semibold white">Share</p></div>
        <div class="custom-button redBackground pe-5"><p class="fw-semibold white">Print</p></div>
    </div>
    <div class="custom-border redBackground"></div>
    <div class="row justify-content-sm-center mb-5">
        <div class="col-sm-12 col-md-6 ">
            <h3 class ="text-md-start"> Ingrediants</h3>
            <ul class="ps-3">
                <li> ingredient</li>
                <li> ingredient</li>
                <li> ingredient</li>
                <li> ingredient</li>
                <li> ingredient</li>
            </ul>
        </div>
        <div class="col">
            <h3 class="red text-md-start" >Directions</h3>
            <ul class="ps-3">
                <li> Step1: lorem ipsum</li>
                <li> Step2: lorem ipsum</li>
                <li> Step3: lorem ipsum</li>
                <li> Step 4: lorem ipsum</li>
                <li> Step 5: lorem ipsum</li>
            </ul>
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            <h2 class="text-center text-md-start" >More Recipes You'll <span class="red">Love</span></h2>
        </div>
    </div>
    <div class=" mb-5 row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card border-0 h-100 shadow">
      <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="...">
      <div class="card-body grayWhiteBackground">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">recipe categories</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 h-100 shadow">
      <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="...">
      <div class="card-body grayWhiteBackground">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">recipe categories</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 h-100 shadow">
      <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="...">
      <div class="card-body grayWhiteBackground">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">recipe categories</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 h-100 shadow">
      <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="...">
      <div class="card-body grayWhiteBackground">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">recipe categories</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
<p class="text-center">Durando Angiulo 2022</p>
</div>
<?php include_once 'components/footer.php'; ?>