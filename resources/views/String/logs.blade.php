<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs Page</title>
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
<body class="card text-bg-info mb-3 mx-auto">
    <div class="A">
    <section class="container bg-danger-subtle p-2 my-3 text-Red">
        <h1 align="center">String Manipulator Logs</h1></section><br>
    <section class="container bg-danger-subtle p-3 ">
           
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">str</th>
                <th scope="col">opr</th>
                <th scope="col">result</th>
                <th scope="col">created</th>
                <th scope="col">updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                <th scope="row">{{$d->id}}</th>
                <td>{{$d->str}}</td>
                <td>{{$d->opr}}</td>
                <td>{{$d->result}}</td>
                <td>{{$d->created_at}}</td>
                <td>{{$d->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-success" href="/string/form">Go Back To Form</button>
    </section>
    </div>
</body>
</html>