<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
    <link rel="stylesheet" href="../src/style.css">
    <!-- font-awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <header class="header-warrper">
            <div class="container">
                <div class="inner-sec">
                    <h1>WEBZETO</h1>
                    <!-- primary-menu -->
                        <nav class="navve">
                          <ul class="nabr">
                                <li><a class="colr" href="#">Home</a></li>
                                <li><a class="colr" href="#">About</a></li>
                                <li><a class="colr" href="#">Contact</a></li>
                                <li><a class="colr"  href="#">Dastination</a></li>
                           </ul>
                        </nav>

                    <div class="mobile-bt">
                        <!-- mobile-menu -->
                         <button id="mobile-btn" >
                            <i class="fa-solid fa-bars"></i>
                         </button>
                        <!-- mobile-menu -->
                         <div class="mobile-menu" id="mobile-bar">
                            <nav class="">
                                <ul class="">
                                      <li><a class="colr" href="#">Home</a></li>
                                      <li><a class="colr" href="#">About</a></li>
                                      <li><a class="colr" href="#">Contact</a></li>
                                      <li><a class="colr"  href="#">Dastination</a></li>
                                 </ul>
                              </nav>
                         </div>
                       </div>
                  </div>
              </div>
         </header>

       

           <!-- toggle-btn -->
      <script>
        const btn = document.getElementById('mobile-btn');
        const menu = document.getElementById('mobile-bar');
        btn.addEventListener('click', function () {
          menu.classList.toggle('active')
        })
    </script>

    
    
</body>
</html>





 