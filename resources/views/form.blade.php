<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="flex flex-col px-4" action="/api/request" method="POST">
        <label for="">create your credentials</label>
        <div class="">
            <input class="border-5 mt-4 mb-2" type="text" name="user" id="" placeholder="user">
            
        </div>
        <input class="border-5 h-16 shadow-md" type="text" name="password" placeholder="password">
        <button type="submit" class="w-1/2 p-3 bg-teal-light text-black rounded mt-6">Login</button>
    </form>
</body>
</html>