<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/myStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/styleHP.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/form_valid_style.css">

    </head>
<body>
    <header dir="rtl" class="site-header" role="banner">
      <div class="col-4 mx-auto text-center my-3">
        <img src="../home_img/logo2.jpeg"  alt="logo" class="img-fluid">
      </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item ">
              <a class="nav-link" href="../index.html">דף הבית</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">אודות</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                קטלוג מוצרים
              </a>
              <ul class="dropdown-menu mx-auto text-center" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="kategories.html">כל הקטגוריות</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="kitchenware.php">כלי מטבח</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">מראות</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">רהיטים</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">בבושקות</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">משחקי ילדים</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">כלי הגשה</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="shopCart.php">עגלת קניות</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    <main class="main-content" role="main">
        <div class="pb-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 p-5 text-center border rounded bg-light shadow-sm my-5">
                    <h1 id="cart_h">My Cart</h1>
                </div>
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                  <!-- Shopping cart table -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Product</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Price</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Quantity</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Remove</div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $total=$total+$value['Price'];
                                    echo"
                                    <tr>
                                        <th scope='row' class='border-0'>
                                            <div class='p-2'>
                                                <img src='$value[Image]' width='70' class='img-fluid rounded shadow-sm'>
                                                <div class='ml-3 d-inline-block align-middle'>
                                                <h5 class='mb-0'> <a href='#' class='text-dark d-inline-block align-middle'>$value[Item_Name]</a></h5><span class='text-muted font-weight-normal font-italic d-block'>Category: כלי מטבח</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class='border-0 align-middle'><strong>₪$value[Price]</strong></td>
                                        <td class='border-0 align-middle'><input value='1' type='number'></td>
                                        <td class='border-0 align-middle'>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-outline-danger'><i class='bi bi-trash'></i></button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                        </td>
                                  </tr>
                                    ";
                                }
                            }
                        ?>
                      </tbody>
                    </table>
                  </div> 
                  <!-- End -->
                </div>
              </div>
         <!-- form -->
              <div class="row py-5 p-4 bg-white rounded shadow-sm">
                <div class="col-lg-6">
                  <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Billing address</div>
                  <div class="p-4">
                    <form class="needs-validation" id="form" method="POST" action="send_details.php">
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="firstName">First name</label>
                              <input type="text" class="form-control" id="firstName" name="firstName" required pattern="[a-zA-Z]{2,}" title="At least 2 characters and only letters are allowed">
                              <div class="invalid-feedback"> Valid first name is required. </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="lastName">Last name</label>
                              <input type="text" class="form-control" id="lastName" name="lastName" required pattern="[a-zA-Z]{2,}" title="At least 2 characters and only letters are allowed">
                              <div class="invalid-feedback"> Valid last name is required. </div>
                          </div>
                      </div>
                      <div class="mb-3 px-2">
                        <div class="input-control px-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="mb-3 px-2">
                        <div class="input-control px-2">
                          <label for="mobile">Mobile</label>
                          <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="052-1234-567" required title="Standard phone number - 10 numeric digits">
                          <div class="error"></div>
                        </div>
                  </div>
                    <div class="mb-3 px-2">
                        <div class="input-control px-2">
                          <label for="city">City</label>
                          <input type="text" class="form-control"  id="city" name="city" required title="At least 2 characters and only letters are allowed">
                          <div class="error"></div>
                        </div>
                    </div>
                    <div class="mb-3 px-2">
                        <div class="input-control px-2">
                          <label for="street">Street name</label>
                           <input type="text" class="form-control" id="street" name="street" placeholder="" required title="At least 2 characters and only letters are allowed">
                          <div class="error"></div>
                        </div>
                    </div>
                    <div class="mb-3 px-2">
                        <div class="input-control px-2">
                          <label for="streetNum">number</label>
                          <input type="number" class="form-control" id="streetNum" name="streetNum" placeholder="" required title="Standard street number - maximum 3 numeric digits">
                          <div class="error"></div>
                        </div>
                    </div>                     
                    <hr class="mb-4">
                  <button class="btn btn-dark rounded-pill py-2 btn-block" type="submit">Continue to Payment</button>
                    </form>
                  </div>
                  
                </div>
                <div class="col-lg-6">
                  <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                  <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                    <ul class="list-unstyled mb-4">
                      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>₪<?php echo $total?></strong></li>
                      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>₪35.00</strong></li>
                      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>₪0.00</strong></li>
                      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                        <h5 class="font-weight-bold">₪<?php echo $total+35 ?></h5>
                      </li>
                    </ul><a href="#cart_h" class="btn btn-dark rounded-pill py-2 btn-block">Back to product list</a>
                  </div>
                </div>
              </div>
        
            </div>
          </div>
    </main>
    
    <footer class="ft text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-left mb-6">איפה עוד אנחנו נמצאים</h5>
            <div class="mt-4">
              <!-- Facebook -->
              <a href="https://www.facebook.com/profile.php?id=100057725077112" type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i><img src="../About_img/facebook.png"></a>
              <!-- Dribbble -->
              <a type="button" title="לא מומש" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i><img src="../About_img/instagram.png"></a>
              <!-- Twitter -->
            </div>
        </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-center mb-4 pb-1">צרו קשר</h5>
            <ul class="fa-ul" style="text-align: center; margin-left: 1.65em;">
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">רגבים, ישראל</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">irit'sPlace@gmail.com</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+972 - 547689143</span>
              </li>
            </ul>
        </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-center mb-6">שעות פעילות</h5>
  
            <table class="table text-center">
              <tbody class="fw-normal">
                <tr>
                  <td>9:00 - 20:00</td>
                  <td>ראשון - חמישי</td>
                </tr>
                <tr>
                  <td>9:00 - 12:00</td>
                  <td>יום  שישי</td>
                </tr>
                <tr>
                  <td>סגור</td>
                  <td>יום שבת</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container --> 
    </footer>
    
<!--  <script type="text/javascript" src="javascript_file.js"> </script> --> 
  <script type="text/javascript" src="../js/form_valid_js.js"> </script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
          crossorigin="anonymous"></script>
  </body>
</html>