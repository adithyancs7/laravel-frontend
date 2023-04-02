<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class=" bg-black/5" >

                

    <div class="hidden md:block w-56 h-full shadow-md md:bg-white px-1 absolute md:display-none  ">
        <center>
    <!-- side nav -->
        
        <!-- dashboard -->
        <div class="pt-2 font-poppins text-md font-bold">
            Dashboard
        </div>
        <!-- endof dashboard -->
        
        <!-- username -->
        <div class="pt-5">
            <span class="text-black text-sm font-poppins pl-2 "> Welcome Back , </span>
            <span class=" pr-4 pl-1 text-black font-poppins font-bold break-after-all"> {{$user}} </span>
        </div>
        <!-- endof username -->

        <!-- menu items -->
        <ul class="relative">
            <li class="relative">
                <a href="#" class="flex items-center text-md py-4 px-6 h-12 overflow-hidden text-gray-700 font-noto font-medium rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">
                 menu 0
                </a>
            </li>
            <li class="relative">
                <a href="#" class="flex items-center text-md py-4 px-6 h-12 overflow-hidden text-gray-700 font-noto font-medium rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">
                 menu 1
                </a>
            </li>
            <li class="relative">
                <a href="#" class="flex items-center text-md py-4 px-6 h-12 overflow-hidden text-gray-700 font-noto font-medium rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">
                 menu 2
                </a>
            </li>
        </ul>
        <!-- end menu  -->

    <!-- end of sidenav -->
    </center>
    </div>

                
</body>
</html>