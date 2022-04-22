<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website BeatUp</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="slider.css">
    <script src="slider.js"></script>
    <link rel="stylesheet" href="gallery.css">

</head>
<body>
    
<!-- heading section starts  -->
<header>
    <a href="#" class="logo"><i class="fas fa-headphones"></i>BeatUp</a>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
        <li><a class="active" href="home.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="features.php">features</a></li>
            <li><a href="product.php">product</a></li>
            <li><a href="news.php">news</a></li>
                 
        </ul>
    </nav>
</header>
<!-- heading section ends -->


     <!--slideri-->
     <section class="contact" id="contact">
     <div class="information">
        <div class="overlay"></div>
        <img src="slider_img/mobile.png" class="mobile">
        <div id="circle">
            <div class="feature one">
                <img src="slider_img/camera.png">
                <div>
                    <h1>Camera</h1>  
                    <p>Cannon,Sony,Nikon</p>
                </div>
                </div>
                <div class="feature two">
                    <img src="slider_img/processor.png">
                    <div>
                        <h1>Proccessor</h1>
                        <p>Intel,AMD,Nvidia</p>
                    </div>
                    </div>
                    <div class="feature three">
                        <img src="slider_img/display.png">
                        <div>
                            <h1>Display</h1>
                            <p>Phone Accessories </p>
                        </div>
                    </div>
                    <div class="feature four">
                        <img src="slider_img/battery.png">
                        <div>
                            <h1>Battery Life</h1>
                            <p>Battery Accessories  </p>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="controls">
                <img src="slider_img/arrow.png" id="upBtn">
                <h3>Features</h3>
                <img src="slider_img/arrow.png" id="downBtn">                   
            </div>
            </div>
            
        </section>
        <!---slideri fundi-->

<!----galeria fillimi-->
        <section>
            <div><h6>Razer Products Coming soon</h6></div>
            <div class="full-img" id="fullimgbox">
                <img src="images/1.PNG" id="fullimg">
        <span onclick="closefullimg()">X</span>
           </div>
            <div class="div img-gallery">
                <img src="images/1.PNG" onclick="openfullimg(this.src)">
                <img src="images/2.PNG" onclick="openfullimg(this.src)">
                <img src="images/3.PNG" onclick="openfullimg(this.src)">
                <img src="images/4.PNG" onclick="openfullimg(this.src)">
                <img src="images/5.PNG" onclick="openfullimg(this.src)">
                <img src="images/6.PNG" onclick="openfullimg(this.src)">
                <img src="images/7.PNG" onclick="openfullimg(this.src)">
                <img src="images/8.PNG" onclick="openfullimg(this.src)">
                <img src="images/9.PNG" onclick="openfullimg(this.src)">
                <img src="images/10.PNG" onclick="openfullimg(this.src)">
            </div>
        </section>
        <script>
            var fullimgbox = document.getElementById("fullimgbox");
            var fullimg = document.getElementById("fullimg");
            function openfullimg(pic){
                fullimgbox.style.display = "flex";
                fullimg.src = pic;
            }
            function closefullimg(){
                fullimgbox.style.display = "none";
            }
            
            </script>
            <!----galeria fundi-->








           <!--scripta e sliderit fillimi-->
        <script>
            var circle = document.getElementById("circle");
            var upBtn = document.getElementById("upBtn");
            var downBtn = document.getElementById("downBtn");
    
            var rotateValue = circle.style.transform;
            var rotateSum;
            upBtn.onclick = function()
    {
        rotateSum = rotateValue + "rotate(-90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;  
    }
    
    downBtn.onclick = function()
    {
        rotateSum = rotateValue + "rotate(90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;  
    }
    </script>
                 <!--scripta e sliderit fundi-->

         
                  



<!-- footer section starts  -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>why choose us?</h3>
            <p>Nese jeni te interesuar qe te bleni paisje elektronike me qmimet me te volitshme ne treg jeni ne vendin e duhur.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">features</a>
            <a href="#">products</a>
            <a href="#">contact</a>             
        </div>
        <div class="box">
            <h3>Vendndodhja</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Prishtina, Kosovo 10000. </p>
            <p> <i class="fas fa-globe"></i> www.Beatup.com  </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890. </p>
        </div>
    </div>
    </section>
    <!-- footer section ends -->
    
    
    
    <!-- jquery cdn link  -->
    
    
    <!-- custom js file link  -->
    <script src="script.js"></script>
    
    
    </body>
    </html>