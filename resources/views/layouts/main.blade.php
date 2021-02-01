<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Web App</title>
    <!--jquery script-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!-- Tailwind Css Style -->
    <!--<link rel="stylesheet" href="/css/main.css">-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Fomtatwesome -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <script>
    $(function (){
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-gray-700");
            $("#sButton2").addClass("bg-gray-700");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-gray-700");
            $("#sButton1").addClass("bg-gray-700");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-gray-700");
    $("#sButton1").addClass("bg-gray-700");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-gray-700");
    $("#sButton2").addClass("bg-gray-700");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-gray-700");
        

        loopSlider();
     
        
    
    
    
    
    });
});

  

    </script>
</head>

<body class="font-sans bg-gray-700 text-white">
    <nav class="border-b border-gray-400">
        
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-cneter">
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="/" class="hover:text-gray-300 font-black text-xl">KD-harisop</a>
                    </li>
                </ul>  
                <ul class="flex flex-col md:flex-row items-cneter">
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="/login" class="hover:text-gray-300 font-bold">ログイン</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="/Member_registration" class="hover:text-gray-300 font-bold">会員登録</a>
                    </li>
                </ul> 
            </div>
    </nav>

    @yield('content')
</body>

</html>