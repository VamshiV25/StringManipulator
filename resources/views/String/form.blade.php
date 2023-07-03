<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StringManipulator Form Page</title>
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
        <h1 align="center">String Manipulator &nbsp;<a href="/string/logs">Logs</a></h1></section><br>
    <section class="container bg-danger-subtle p-3 ">
            <form action="/string/result" method="get">
                <div class="row mb-3">
                <label for="formGroupExampleInput" class="pure-input-rounded"><h5>Enter an String : </h5></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="str" id="autoSizingInput" placeholder="Enter an String">
                    </div>
                </div>   

                <div class="col-sm-10">
                    <label for="inputState" class="pure-input-rounded"><h5>Operation :</h5></label>
                    <select class="form-select" name="opr" id="autoSizingSelect">
                        <option selected>Choose</option>
                        <option value="CountLetter">Number Of Letters</option>
                        <option value="CountWord">Number Of Words</option>
                        <option value="StringReverse">String Reverse</option>
                    </select>
                </div><br>
                <div class="mb-3 mb-auto">
                    <button type="submit" class="btn btn-success" >Go To Manipulate</button>
                </div>
            </form>
    </section>
    </div>
</body>
</html>