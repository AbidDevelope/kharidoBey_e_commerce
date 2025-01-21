<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
</head>
<style>
   
    .container {
        height: 100vh; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        background-color: #f8f9fa; 
    }

    .error_message img {
        max-width: 100%;
        height: auto;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="error_message text-center">
                <img src="{{ asset('assets/errors/404_error-h.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
</html>