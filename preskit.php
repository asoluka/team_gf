<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Glorious Fountain | Home</title>
</head>

<body>
  <main>
    <section class="top bg-color-blue color-white">
      <section class="nav-wrapper uc">
        <!-- Nav section -->
        <?php include './partials/nav.php' ?>
      </section>

      <div class="container pb-5">
        <div class="row welcome pt-2 pb-5">
          <div class="col-1"></div>
          <div class="col-10 welcome-text pt-5 pb-5">
            <h5>The Glorious Fountain Ministries</h5>
            <h1 class="lead">Press and Media Kit</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestias quibusdam, sint unde explicabo ut, maiores, perferendis provident.</p>
          </div>
          <div class="col-1"></div>
        </div>
      </div>
    </section>

    <!-- search -->
    <section class="overlap-top p-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm 1"></div>
          <div class="col-12 col-sm-10 shadow upcoming-events-section br-2 pt-5">
            <div class="row event-highlight">
              <div class="col-12 col-sm-7 info-text mb-3">
                <div class="row">
                  <img class="img-fluid" src="./assets/PNG/blog_art.jpg" alt="Blog Art">
                </div>
              </div>
              <div class="col-12 col-sm-5 info-text mb-3">
                <p><small>Meet</small></p>
                <h2><b>Rev. Igho L.Y</b></h2>
                <p><small> GF Ministries Nigeria </small></p>
                <p class="mt-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquam enim aspernatur est possimus fuga in saepe obcaecati ex deleniti magni! Vitae,
                  tenetur? Facere, esse quisquam ab tempore fugit molestias iste!.
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm 1"></div>
        </div>
      </div>
    </section>

    <!-- Posts from replenish -->
    <section>
      <div class="container">
        <div class="row pt-5 mb-5">
          <div class="col-12">
            <div class="row blog-hightlight">
              <div class="col-12 col-sm-1"></div>
              <div class="col-12 bg-color-ash br-2 col-sm-10 pt-4 pb-4 mt-5 mb-5">
                <h2><b>Profile</b></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur 
                  cumque quidem quaerat, delectus suscipit voluptatum eum veniam unde expedita fugiat 
                  provident excepturi cum iusto ratione nulla, alias libero minus.

                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur 
                  cumque quidem quaerat, delectus suscipit voluptatum eum veniam unde expedita fugiat 
                  provident excepturi cum iusto ratione nulla, alias libero minus.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur 
                  cumque quidem quaerat, delectus suscipit voluptatum eum veniam unde expedita fugiat 
                  provident excepturi cum iusto ratione nulla, alias libero minus.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur 
                  cumque quidem quaerat, delectus suscipit voluptatum eum veniam unde expedita fugiat 
                  provident excepturi cum iusto ratione nulla, alias libero minus.
                </p>
                <button class="form-control col-sm-3 no-br btn-gf color-white mb-4">DOWNLOAD PRESKIT</button>
              </div>
              <div class="col-12 col-sm-1"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Prayer request -->
    <section class="prayer-request pb-5 pt-5">
      <div class="container">
        <div class="row  pb-5 pt-5">
          <div class="col-12 col-sm-2"></div>
          <div class="col-12 col-sm-8 text-center">
            <h4>Prayer and Counseling request</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae dignissimos
              ullam placeat assumenda quas. </p>
            <button class="btn btn-gf bg-color-white">MAKE REQUEST</button>
          </div>
          <div class="col-12 col-sm-2"></div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="footer">
      <?php include'./partials/footer.php' ?>
    </section>
  </main>
</body>

</html>