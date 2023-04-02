<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body class=" flex justify-center items-center bg-gray-100">

        <div class="max-w-sm  rounded-md overflow-hidden shadow-2xl bg-white">
            <div class="pl-32 w-screen h-1/3 bg-teal-800 flex flex-wrap items-center">
             <span class="font-medium p-4 text-3xl text-white"> Register.</span>
            </div>
            <div class="flex justify-center pt-10 ">
                <form method="POST" action="/create" class="bg-white pt-10 flex flex-wrap justify-center space-y-3">
                {{ csrf_field() }}
                    <input type="text"  name="name" id="name"class="appearance-none border
                                                                            w-2/3 py-2 px-4 text-gray-700 
                                                                            leading-tight outline-none hover:bg-white 
                                                                            "placeholder="Name">   
                    <br>
                    <input type="email"  name="email" id="email"class="appearance-none border
                                                                            w-2/3 py-2 px-4 text-gray-700 
                                                                            leading-tight outline-none hover:bg-white 
                                                                            "placeholder="Email">   
                    <br>
                    <input type="password" name="password" id="password" class="appearance-none border 
                                                                                w-2/3 py-2 px-4
                                                                                text-gray-700
                                                                                leading-tight
                                                                                outline-none"
                                                                                placeholder="Password">
                    <br>
                    <input type="password" name="confirm" id="confirm" class="appearance-none border 
                                                                                w-2/3 py-2 px-4
                                                                                text-gray-700
                                                                                leading-tight
                                                                                outline-none"
                                                                                placeholder="Confirm Password">
                    <br>
                    

                    <button type="submit" class="shadoe-md -sm bg-teal-900 text-white font-medium w-2/3 py-2 px-3  ">
                        Submit
                    </button>
                </form>
            </div>
            <br><br>
            <center>
            <span class="text-xs font-noto">
            ex ea consequat? <a href="login" class="text-blue-800">Back to login</a>
            </span>
            </center>
            <br>
        </div>        
    </body>

</html>