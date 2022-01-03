<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
     <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
        

$(document).ready(function(){

        $("#myForm").submit(function(event) {
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
            var msg = $("#msg");

             
                $.ajax({
                    url: 'sendEmail.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        phone: phone.val(),
                        msg: msg.val()
                    }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                        console.log(response);
                    },error:function(a,b,c){
                        console.log(a);
                    }
                });
            event.preventDefault();
            });

        

        // function isNotEmpty(caller) {
        //     if (caller.val() == "") {
        //         caller.css('border', '1px solid red');
        //         return false;
        //     } else
        //         caller.css('border', '');

        //     return true;
        });
    </script>
</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> [photo] <i class="fas fa-camera"></i> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#book">contact</a>
        </nav>

        <a href="#" class="btn"><strong>987654321</strong></a>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="row">

            <div class="content">
                <h3>see The world through lenses of a life Well Captured!</h3>
                <a href="mailto:krishnadubey0504@gmail.com" class="btn">get connect</a>
            </div>

            <div class="image">
                <img src="image/home-img-4.png" class="main-home-image" alt="">
            </div>

        </div>

        <div class="image-slider">
            <img src="image/home-img-5.png" alt="">
            <img src="image/home-imh-6.png" alt="">
            <img src="image/home-img-4.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> about us <span>why choose us</span> </h1>

        <div class="row">

            <div class="image">
                <img src="image/Lr.jpg" alt="">
            </div>

            <div class="content">
                <h3 class="title">what's make our Photo's special!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse et commodi, ad, doloremque obcaecati
                    maxime quam minima dolore mollitia saepe quos, debitis incidunt. Itaque possimus adipisci ipsam
                    harum at autem.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">
        <h1 class="heading"> Image gallery <span>What people Want</span> </h1>
        <div class="imgcon">
            <nav>
                <div class="items" data-aos="zoom-in-up">
                    <span class="item active" data-name="all">All</span>
                    <span class="item" data-name="bag">Pre_Wedding</span>
                    <span class="item" data-name="shoe">Wedding</span>
                    <span class="item" data-name="watch">Baby_Phtography</span>
                    <span class="item" data-name="camera">Product</span>
                    <span class="item" data-name="headphone">Function</span>
                </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery" id="image" data-aos="zoom-in-down">
                <div class="image" data-name="bag"><span><img src="image/pic-1.png" alt=""></span></div>
                <div class="image" data-name="headphone"><span><img src="image/pic-2.png" alt=""></span></div>
                <div class="image" data-name="camera"><span><img src="image/pic-3.png" alt=""></span></div>
                <div class="image" data-name="shoe"><span><img src="image/pic-3.png" alt=""></span></div>
                <div class="image" data-name="headphone"><span><img src="image/pic-4.png" alt=""></span></div>
                <div class="image" data-name="watch"><span><img src="image/pic-1.png" alt=""></span></div>
                <div class="image" data-name="shoe"><span><img src="image/pic-2.png" alt=""></span></div>
                <div class="image" data-name="camera"><span><img src="image/pic-4.png" alt=""></span></div>
            </div>
        </div>
        <!-- fullscreen img preview box -->
        <div class="preview-box">
            <div class="details">
                <span class="title">Image Category: <p></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box"><img src="" alt=""></div>
        </div>
        <div class="shadow"></div>
        </div>
        </div>
        </div>
    </section>

    <!-- menu section ends -->
    <!--Video  Part-->
    <h1 class="heading"> Video gallery <span>what people See</span> </h1>
    <div>
    </div>
    <!-- end of video gallery -->
    <!-- sample video gallery 2 -->
    <div class="video-container" data-aos="zoom-in-down">
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
        <video src="image/sample.mp4" class="video" controls="controls" width="350"></video>
    </div>
    <!--End of Video PART-->
    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> reviews <span>what people says</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-1.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid eveniet qui, similique
                        aut sit.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-2.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid eveniet qui, similique
                        aut sit.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-3.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid eveniet qui, similique
                        aut sit.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="image/pic-4.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid eveniet qui, similique
                        aut sit.</p>
                    <h3>john deo</h3>
                    <span>satisfied client</span>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading"> Feedback <span>Get Feedback Done</span> </h1>

        <h4 class="sent-notification"></h4>
        <form id="myForm" autocomplete="off">

            <input type="text" id="name" name="name" placeholder="your name" class="input">
            <input type="email" id="email" name="email" placeholder="your email" class="input">
            <input type="number" id="phone" name="phone" placeholder="your number" class="input">

            <textarea name="message" id="msg" placeholder="your message" class="input" cols="30" rows="10"></textarea>

            <input type="submit" class="btn">SEND 👋 </input>
        </form>
    </section>
    <!-- <center>
        <h4 class="sent-notification"></h4>

        <form id="myForm">
            <h2>Send an Email</h2>

            <label>Name</label>
            <input id="name" type="text" placeholder="Enter Name">
            <br><br>

            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email">
            <br><br>

            <label>Subject</label>
            <input id="subject" type="text" placeholder=" Enter Subject">
            <br><br>

            <p>Message</p>
            <textarea id="body" rows="5" placeholder="Type Message"></textarea>
            <br><br>

            <button onclick="sendEmail()" value="Send An Email">Submit</button>
        </form>
    </center> -->
    <!-- book section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <!-- <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> india </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> USA </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> france </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> africa </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Japan </a>
            </div> -->

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> menu </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> book </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> Sonnyphotography@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> mumbai, india = 400083 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> creatd by <span>Wecoder's</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <!--Email-->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script> -->
    <!-- <script type="text/javascript">
        (function () {
            emailjs.init("user_Jh8r0uHIbRulufpQSO5A1");
        })();
    </script> -->
    <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
            var msg = $("#msg");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        phone: phone.val(),
                        msg: msg.val()
                    }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.value() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script> -->
   
</body>

</html>