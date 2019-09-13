<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    <h1 class="">register here</h1>
    <div class="container border-8 mt-12">
        <form class="flex flex-col px-4" action="/api/registerUsers" method="POST">
            <label for="">create your credentials</label>
            
            <input class=" border border-5 mt-4 mb-2" type="text" name="user" id="" placeholder="user">
                
            
            <input class="border-5 h-16 shadow-md border" type="text" name="password" placeholder="password">
            <input class="border shadow-md" type="email" name="email" id="">
            <button type="submit" class="w-1/2 p-3 bg-teal-light text-black rounded mt-6">Login</button>
        </form>
    </div>
   
    
    
</body>
</html>