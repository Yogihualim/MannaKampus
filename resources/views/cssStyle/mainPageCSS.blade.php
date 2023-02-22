{{-- Style --}}
    <style>
        .parallax {
            /* The image used */
            background-image:url(https://www.mirotakampus.com/resources/views/admin/images/5dd1acbf63083);
            
            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax1 {
            /* The image used */
            background-image:url(https://lh5.googleusercontent.com/p/AF1QipNvq4_xfJzxOl3Z1DwioNViJL5FTb0SSxOdaYCF=w525-h240-k-no);
            
            /* Set a specific height */
            min-height: 350px;
            font-weight: bold;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbar a {
            display: block;
            color: rgb(0, 0, 0);
            text-align: start;
            padding: 10px 30px;
            text-decoration: none;
            border-radius: 8px;
            margin-left: 1px;
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
            padding-top: 9px;
            font-size: 15px;
            width: 37px;
            height: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 15%;
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

        .fa-youtube {
            background: #FF0000;
            color: white;
        }

        .fa-whatsapp {
            background: #25D366;
            color: white;
        }

        .fa-instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); 
            background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .nav a {
            display: block;
            color: rgb(0, 0, 0);
            text-align: start;
            padding: 10px 30px;
            text-decoration: none;
            border-radius: 8px;
            margin-left: 2.5px;
            margin-right: 2.5px;
        }
        .nav a:hover {
            background-color: #ff9544;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            margin-left: 2.5px;
            margin-right: 2.5px;
        }
        .nav a.active {
            background-color: #666;
            color: rgb(255, 255, 255);
        }       
    </style>