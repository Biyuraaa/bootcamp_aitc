<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<!-- Section: Design Block -->
<section>
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Register</h2>
          <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf
                        <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="name">Name</label>
              <input type="text" name="name" class="form-control" required />
            </div>
                       
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
              <input type="email" name="email" class="form-control" required />
            </div>

                        <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" required />
            </div>

            <!-- Confirm Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required />
            </div>


            <!-- Date of Birth input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="date_of_birth">Date of Birth</label>
              <input type="date" name="date_of_birth" class="form-control" />
            </div>

            <!-- Address input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="address">Address</label>
              <input type="text" name="address" class="form-control" />
            </div>

            <!-- Phone input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="phone">Phone</label>
              <input type="text" name="phone" class="form-control" />
            </div>

            <!-- Image input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="image">Image</label>
                <input type="file" name="image" class="form-control" />
            </div>


            
            <div class="mb-4">
              <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
            </div>
            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
              Register
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>
