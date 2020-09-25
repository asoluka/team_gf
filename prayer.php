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
          <div class="col-12 col-sm-1"></div>
          <div class="col-12 col-sm-10 welcome-text pt-5 pb-5">
            <h5>The Glorious Fountain Ministries</h5>
            <h1 class="lead">Prayer Requests</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestias quibusdam, sint unde explicabo ut, maiores, perferendis provident.</p>
          </div>
          <div class="col-12 col-sm-1"></div>
        </div>
      </div>
    </section>

    <!-- Form -->
    <section class="overlap-top p-3 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-1"></div>
          <div class="col-12 col-sm-10 shadow upcoming-events-section br-2">
            <div class="row bg-color-ash p-3 event-highlight">
              <div class="col-12">
                <p class="mt-4 pb-3 color-light-blue">All fields are compulsory</p>
                <form>
                  <div class="row">
                    <div class="col">
                      <label for="prayer_title">Prayer Title</label>
                      <input type="text" class="form-control no-br mb-4 no-b" name="prayer_title" placeholder="Prayer Title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <label for="firstname">First Name</label>
                      <input type="text" class="form-control no-br mb-4 no-b" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-12 col-sm-6">
                      <label for="lastname">Last Name</label>
                      <input type="text" class="form-control no-br mb-4 no-b" name="lastname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="email">Email Address</label>
                      <input type="text" class="form-control no-br mb-4 no-b" name="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="category">Prayer Category</label>
                      <select class="form-control no-br mb-4 no-b" name="category" id="category">
                        <option selected value="deliverance">Deliverance</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="request">Prayer Request</label>
                      <textarea class="form-control no-br mb-4 no-b" rows="3" placeholder="Prayer Request"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <button type="submit" class="form-control no-br btn-gf color-white mb-4">SUBMIT REQUEST</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-1"></div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="footer">
      <?php include './partials/footer.php' ?>
    </section>
  </main>
</body>

</html>