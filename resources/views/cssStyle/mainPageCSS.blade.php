<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page CSS</title>

    <style>
        .navbar a {
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 10px 30px;
            text-decoration: none;
            border-radius: 8px;
            margin-left: 2.5px;
            margin-right: 2.5px;
        }
        .navbar a:hover {
            background-color: #ff9544;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            margin-left: 2.5px;
            margin-right: 2.5px;
        }
        .navbar a.active {
            background-color: #666;
            color: rgb(255, 255, 255);
        }

        @media screen and (max-width: 600px) {
            .topnav a:active{
                background-color: #666;
                color: #ffffff;
            }
        }

        .carousel {
            border: 7px solid white;
            border-radius: 5px;
        }

        /* Social Media Icon */
        .fa {
            padding-top: 12px;
            font-size: 18px;
            width: 40px;
            height: 40px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.75;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-at {
            background: #ffffff;
            color: rgb(0, 0, 0);
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-whatsapp {
            background: #25D366;
            color: white;
        }
    </style>
</head>
<body>
    <script>
    </script>
</body>
</html>