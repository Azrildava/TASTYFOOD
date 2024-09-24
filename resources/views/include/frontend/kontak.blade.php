<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        font-family: 'Poppins', sans-serif;
    }

    .background-image {
        background-image: url('{{ asset('assets/frontend/Group 70@2x.png') }}');
        background-size: cover;
        background-position: center;
        height: 80%;
        width: 100%;
        position: relative;
        color: white;
    }

    .navbar {
        background: transparent;
        padding: 20px;
    }

    .container h1 {
        font-size: 3em;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: white;
        font-weight: bold;
        margin-right: 20px;
    }

    .navbar-nav .nav-link:hover {
        color: #ddd;
    }

    .content {
        position: absolute;
        top: 60%;
        left: 10%;
        transform: translateY(-50%);
    }

    .content h1 {
        font-size: 3em;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
    }

    .contact-form-section {
        padding: 50px;
        background-color: #fff;
    }

    .contact-form-section input,
    .contact-form-section textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 10px;
        border: 1px solid #000000;
    }

    .contact-form-section textarea {
        height: 180px;
    }

    .submit-btn {
        display: block;
        width: 100%;
        background-color: #000;
        color: #fff;
        border: none;
        padding: 17px;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
        border-radius: 11px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }

    .submit-btn:hover {
        background-color: #333;
    }

    .info-section {
        display: flex;
        justify-content: space-between;
        padding: 50px;
        background-color: #000;
        color: white;
    }

    .info-section div {
        text-align: center;
    }

    .info-section p {
        font-size: 16px;
        margin: 0;
    }
    .footer {
            padding: 40px 0;
            background-color: #000;

        }
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .footer p {
            color: #ffffff;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-right: 10px;
            text-align: center;
            color: #ffffff;
            border-radius: 50%;
            background-color: #3b5998;
        }
        .social-icons a.twitter {
            background-color: #1da1f2;
        }
        .social-icons a i {
            font-size: 20px;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333333;
            margin-top: 20px;
        }
        .footer ul {
            padding-left: 0;
            color: #ffffff;
        }
        .footer ul li {
            margin-bottom: 10px;
            color: #ffffff;
        }
        .footer ul li i {
            margin-right: 10px;
            color: #ffffff;
        }
</style>

<body>
    <div class="background-image">
       @include('layouts.user.nav')
        <div class="content">
            <h1>KONTAK KAMI</h1>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="contact-form-section">
        <div class="container">
            <p><b>KONTAK KAMI</b></p>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" placeholder="Subject" />
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                </div>
                <div class="col-lg-6">
                    <textarea placeholder="Message"></textarea>

                </div>
            </div>
            <button class="submit-btn">KIRIM</button>
        </div>
    </div>
    <!-- Footer Info Section -->
    @include('layouts.user.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
