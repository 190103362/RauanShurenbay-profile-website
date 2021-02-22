<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rauan Portfolio</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />

    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>

        <nav>

            <a href="#" class="logo">
                <font color="021A81">Portfolio</font>

            </a>
            </div>
            <ul class="menu">
                <li class="active"><a href="#main">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact-form">Contact</a></li>
            </ul>

            <a href="#" class="lang"></a>
        </nav>

    

    <section id="contact-form">
        <form>

            <div class="contact-left">
                <h1 class="c-l-heading">
                    <font style="border-bottom: 3px solid #1ED98B;">Writ</font>e us</h1>

                <div class="f-name">
                    <font>Name</font>
                    <input type="text" placeholder="Full Name" />
                </div>

                <div class="f-email">
                    <font>Email</font>
                    <input type="email" placeholder="Example@gmail.com" />
                </div>
            </div>

            <div class="contact-right">

                <div class="message">
                    <font>Message</font>
                    <textarea name="message" rows="5" cols="20" placeholder="Write Message..."></textarea>
                </div>

                <button>submit</button>
            </div>

        </form>

    </section>

    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggle').click(function() {
                $('.toggle').toggleClass('active')

                $('nav ul').toggleClass('active-menu')


            })
        });
    </script>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a style="color:wheat">Все права защищены &copy; 2020 Rauan Shurenbay</a>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a href="https://www.instagram.com/rauan_shurenbay/"><i class="fa fa-instagram"></i></a></li>
                        <li><a rel="nofollow" href="https://www.facebook.com/profile.php?id=100037401093216"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://vk.com/srauan2002"><i class="fa fa-vk"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>