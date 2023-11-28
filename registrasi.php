<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
    <style>
        * {
        text-decoration: none;
        margin: 0px;
    }

    header {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 20px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #40E0D0;
        z-index: 1;
        border: 1px solid black;    
    }


        h3 {
            margin: 50px;
            margin-bottom: 40px;
            font-size: 30px;
            font-weight: 1600;
            font-family: calibri;
            color: black;
        }


        body {
        font-family: Arial, Helvetica, sans-serif;
        background:url('images/kota.jpg');
        background-size:1280px 710px; 
        background-position:center;
        background-repeat: no-repeat;
        
    
    }
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0;
            font-size: 80%;
            color: #dc3545;
    }

        .wrap {
            width: 48%;
            margin: auto;
            color: black;
            font-family: comic sans ms;
            background-color: #DCDCDC;
        }

        .container {
            padding: 5px;
            margin: 95px 0px;
        }

        .form {
            padding: 15px;
        }

        .username {
            margin-top: 20px;
            margin-bottom: 40px;
            margin-left: 70px;
            font-family: sans-serif;
        }

        .username input {
            width: 300px;
            height: 40px;
        }

        .text {
            margin: -30px 0px;
        }

        .password {
            margin-left: 70px;
            margin-bottom: 20px;
            font-family: sans-serif;
        }

        .password input {
            width: 300px;
            height: 40px;
        }

        .tombol input {
            width: 100px;
            height: 25px;
            margin-left: 140px;
            background-color: black;
            border-radius: 10px;
            font-family: calibri;
            font-weight: bold;
            font-size: 14px;
            outline: none;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .tombol input:hover {
            background-color: #6c757d;
            text-decoration: none;
        }

        .masuk-button {
            text-decoration: none;
            color: white;
        }

        .masuk-button:hover {
            text-decoration: none;
            color: black;
        }


        </style>
</head>
<body>
<div class="wrap">
    <div class="container">
    <header>
    <h3>Halaman Registrasi</h3>
    </header>
    <div class="form">
        <form class="needs-validation" action="act-register.php" method="POST" novalidate>
        <fieldset>
        <div class="form-row">
            <div class="col-sm-4 col-form-label offset-sm-2 username">
                Username :
                <div class="col-sm-2 offset-sm-6">
                    <div class="text">
                <input type="username" name="username" class="form-control" placeholder="Masukan Username" required>
            <div class="valid-feedback">Oke!</div>
            </div>
            </div>
    </div>
    </div>
            <div class="form-row">
            <div class="col-sm-4 col-form-label offset-sm-2 password">
                Password : 
                <div class="col-sm-4 offset-sm-6">
                    <div class="text">
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" required="">
            </div>
    </div>
    </div>
    </div>
            <div class="tombol">
            <a href="index.php">
                <input type="submit" class="masuk-button" name="masuk" value="MASUK">
        </a>
            </div>
</fieldset>
</form>
</div>
    </div>
    </div>
    <script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>