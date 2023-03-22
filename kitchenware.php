<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kitchenware</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/myStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/styleHP.css">
    <link rel="stylesheet" type="text/css" href="../css/styleK.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</head>

<body>
  <header  dir="rtl" class="site-header" role="banner">
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
              <a class="nav-link" href="../includes/About.html">אודות</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                קטלוג מוצרים
              </a>
              <ul class="dropdown-menu mx-auto text-center" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../includes/kategories.html">כל הקטגוריות</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../includes/kitchenware.php">כלי מטבח</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">מראות</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">רהיטים</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">בבושקות</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">משחקי ילדים</a></li>
                <li><a class="dropdown-item" title="לא מומש" href="#">כלי הגשה</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../includes/shopCart.php">עגלת קניות</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <h2 class="title my-2"> כלי מטבח</h2>
  <div class = 'container'>
    <div class = 'row'>
        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/K1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">קנקן</h3>
                        <div class="explanation" style="display: none;">
                        <p>קנקן או אגרטל וינטג משנות ה80</p>
                        </div>
                        <h4 class="card-text">₪120</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="קנקן">
                        <input type="hidden" name="Price" value="120">
                        <input type="hidden" name="Image" value="../cookware_img/K1.jpg">
                    </div>
                </div>
            </form>    
        </div>
        
        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/K2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">סיר</h3>
                        <div class="explanation" style="display: none;">
                        <p>סיר של פעם,בישולים של פעם</p>
                        </div>
                        <h4 class="card-text">₪200</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="סיר">
                        <input type="hidden" name="Price" value="200">
                        <input type="hidden" name="Image" value="../cookware_img/K2.jpg">
                    </div>
                </div>
            </form>    
        </div>

        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/K3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">כלי מדידה עתיק</h3>
                        <div class="explanation" style="display: none;">
                        <p>כלי מדידה עתיק, יכול לשמש ככלי מדידה או כקישוט</p>
                        </div>
                        <h4 class="card-text">₪100</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="כלי מדידה עתיק">
                        <input type="hidden" name="Price" value="100">
                        <input type="hidden" name="Image" value="../cookware_img/K3.jpg">
                    </div>
                </div>
            </form>    
        </div>

        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/K4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">מועך תפוחי אדמה</h3>
                        <div class="explanation" style="display: none;">
                        <p>מועך תפוחי אדמה אוטנטי ושמור היטב</p>
                        </div>
                        <h4 class="card-text">₪80</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="מועך תפוחי אדמה">
                        <input type="hidden" name="Price" value="80">
                        <input type="hidden" name="Image" value="../cookware_img/K4.jpg">
                    </div>
                </div>
            </form>    
        </div>

        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/cup.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">ספל לשתייה חמה</h3>
                        <div class="explanation" style="display: none;">
                        <p>ספל מקורי שהגיע מרומניה בשנות ה50</p>
                        </div>
                        <h4 class="card-text">₪25</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="ספל לשתייה חמה">
                        <input type="hidden" name="Price" value="25">
                        <input type="hidden" name="Image" value="../cookware_img/cup.jpg">
                    </div>
                </div>
            </form>    
        </div>

        <div class = 'col-md-4 col-lg-4 selectable'>
            <form action="manage_cart.php" method="POST">
                <div class="card card-item" style="width: 18rem;">
                    <img src="../cookware_img/mesanenet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">מסננת</h3>
                        <div class="explanation" style="display: none;">
                        <p>מסננת עתיקה משנות ה60 תוצרת הארץ</p>
                        </div>
                        <h4 class="card-text">₪60</h4>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info" >הוספה לסל</button>
                        <input type="hidden" name="Item_Name" value="מסננת">
                        <input type="hidden" name="Price" value="60">
                        <input type="hidden" name="Image" value="../cookware_img/mesanenet.jpg">
                    </div>
                </div>
            </form>    
        </div>

    </div>
</div>


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
    
    <script>
        $(document).ready(
            function()
            {
              $('.card-item').hover(function()
              {
                $(this).animate({marginTop: "-=2%",},200);  
              },
              function(){
                  $(this).animate({marginTop: "0%"},200); 
              }
            );
        });
        $(document).ready(function(){
        $('.card').hover(function() {
            $(this).find('.explanation').show();
        }, function() {
            $(this).find('.explanation').hide();
        });
    });
        
    </script>
    
    <script type="text/javascript" src="../js/javascript_file.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
          crossorigin="anonymous"></script>
 <script src="../js/cartJS.js"></script>
 <script src = '../js/script.js'></script> 
</body>
</html>