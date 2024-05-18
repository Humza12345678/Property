<?php
   include 'head.php';
   include 'header-index.php';
   ?><br>

<section class="vh-100 gradient-custom bg-primary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
<form action='dashboard.php'>
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your email and password!</p>

              <div class="form-outline form-white mb-4">
                <input style="width:100%;" type="email" id="typeEmailX" placeholder="enter email" class="form-control form-control-lg" required autocomplete = "on" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input style="width:100%;" type="password" id="typePasswordX" placeholder="enter password"class="form-control form-control-lg" required/>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              

            </div>
</form>
            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
   include 'footer.php';
   ?>