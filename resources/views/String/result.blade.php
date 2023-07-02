<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        div.A {
        border-style: groove;
        border-color:black;
        padding:20px;
        margin:20px;
        margin-top:50px;
        margin-left:200px;
        margin-right:200px;
        }
    </style>
</head>
<body class="bg-warning">
    <div class="A">
   <section class="container bg-body-tertiary p-5 mx-auto my-5">
        <h1 align="center">String Result</h1>
        <hr><div align="center">
        <div class="mb-2"><h6>The String Entered is <span class="text-danger">{{$str}}</span></h6></div>
        <div class="mb-2"><h6>The <span class="text-danger">{{$opr}}</span> Operation is done</h6></div>
        </div><hr>
        <div align="center" class="mb-2"><h5>The Result is <span class="text-danger">{{$result}}</span></h5></div>
        <br>
        <div align="center">
        <a class="btn btn-primary" href="/string/form">Back To Home</a>
        </div>
   </section>
   </div>
</body>
</html>