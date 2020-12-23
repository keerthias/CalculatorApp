<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Calculator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">ADDITION</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Subtraction.php">SUBTRACTION</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Multiplication.php">MULTIPLICATION</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link " href="Division.php">DIVISION</a>
                </li>
             </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
          <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <table class="table">
              <tr>
                <td>NUMBER1</td>
                <td><input id="num1" type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>NUMBER2</td>
                <td><input id="num2" type="text" class="form-control"></td>
              </tr>
              <tr>
                <td></td>
                <td><button onclick="mycalculator()" class="btn btn-success">ADD</button></td>
              </tr>
              <tr>
                <td>RESULT</td>
                <td><P id="res"></P></td>
              </tr>
            </table>
          </div>
          <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        </div>
      </div>
      <script>
        function mycalculator(){
          var num1=parseInt(document.getElementById("num1").value)
          var num2=parseInt(document.getElementById("num2").value)
          var res=num1+num2
          document.getElementById("res").innerHTML=res
        }
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
</body>
</html>
