<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOSESI</title>
    <link rel="stylesheet" href="style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <section>
      <div class="background">
        <div class="row w-100 h-100">
          <div
            class="col-6 d-flex justify-content-center align-items-center img"
          >
            <img src="img/logo-kosesi.png" class="logo" />
          </div>
          <div class="col-6">
            <div class="form">
              <h1>
                Hello !<br />
                Welcome to <span>KOSESI</span>
              </h1>
              <div class="login-box">
                <form action="login-proses.php" method="POST">
                  <h1><span>Login</span> Your Account</h1>
                  <div class="input-box">
                    <input
                      type="text"
                      name="username"
                      placeholder="Username"
                      required
                    />
                  </div>
                  <div class="input-box">
                    <input
                      type="password"
                      name="pass"
                      placeholder="Password"
                      required
                    />
                  </div>
                  <div class="remember">
                    <label><input type="checkbox" /> Remember me</label>
                  </div>

                  <button class="btn btn-success">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
