<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>getToken</title>
</head>
<body>
    <form action="/api/generateTokens/" method="POST">
            @method('PATCH')
            @csrf
    
            <button type="submit">get Token</button>
    </form>

   @isset($Token)
       {{$token}}
   @endisset 
       
    
    
    
        
</body>
</html>