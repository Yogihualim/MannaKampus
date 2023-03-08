<style>
    body{
        height:100vh;
        position:relative;
    }
    .wrapper{
        position:fixed;
        bottom:100px;
        right:27px;
        z-index:1000;
    }

    .wrapper a:nth-child(1){
        background-color:green;
    }

    .wrapper a:nth-child(2){
        background-color:blue;
    }

    .wrapper a:nth-child(3){

        animation: 0.7s ease-out 0s 1 FadeIn;
        transition:all 0.3s;
    }


    .wrapper a:hover:nth-child(3){

        background-color:#ff9544;
    }


    @keyframes FadeIn {
        0% {
        transform:rotate(0deg);
        }
        100% {
        transform:rotate(360deg);
        }
    }


    .hide{
        position:absolute;
        bottom:0px !important;
        z-index:-1;
        transition: 2s;
    }

    .social{

    }

    .wrapper a{
        height:50px;
        width:50px;
        background:#000;
        padding:10px;
        display:flex;
        flex-direction:row;
        border-radius:50%;
        justify-content:center;
        align-items:center;
        text-decoration:none;
        color:#fff;
        margin:2px;
    }
</style>

<div class="wrapper">
    <a class="social" href="#"><i class="fa fa-whatsapp"></i></a>
    <a class="social" href="#"> <i class="fa fa-phone"></i></a>
    <a class="close-button" href="#"><i class="fa fa-whatsapp"></i></a>
</div>

<script>
    var close_button = document.querySelector(".close-button");
    var social_buttons = document.querySelectorAll(".social");

    close_button.addEventListener('click',()=>{
        social_buttons.forEach(function(buttons){
            buttons.classList.toggle('hide');
        });
    });
</script>
