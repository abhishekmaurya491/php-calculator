<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }
    .main{
      width:100vw;
      height:100vh;
      background-image:linear-gradient(45deg,#003333 ,#006666 80%);
      background-attachment: 100%  ;      
      display:grid;
      place-items:center;
    }
    .grid { 
      border-radius:1rem;
      display: grid;
      place-items:center;
      grid-template-columns: 1fr;  
      background-color:#003333;
      box-shadow:0 0 1rem  #000011 ;
    }
    .grid-container{
      display: grid;
      place-items:center;      
      grid-template-columns: 1fr 1fr;
      width:60rem;
      height:20rem;
    }
    .app-text{
      width:100%;
      height:100%;       
      padding: 20px;
      font-size: 30px;
      display:grid;
      /* border:1rem solid #fff; */
      place-items:center;
      text-align: center;
    }
    .app-text h2{
      color:#cc9900;
      border-left: .8rem solid #006600;
      padding-left:1rem;
      animation: text 3s linear infinite alternate;
    }
    @keyframes text {
  
  50%  {   
          font-size:2.4rem;
        }
        
       
   
}
    .app-form{
      width:100%;
      height:100%;
      display:grid;
      place-items:center;
      /* border:1rem solid #fff; */
    }
    .app-form-group{       
      margin:2rem;
    }
    .app-form-container{
      text-align:center;       
    }
    .app-form-control{
      color:#fff;
      font-size: 1.4rem;
      background-color:#003330;
      border:none;
      border-bottom: .2rem solid #fff;
      text-align:center;
    }
    .app-form-control input::after{
      border:none;
    }
    .select-style{
      margin:3rem;
    }
    .select-style select{
      font-size:1.4rem;
    }
    .operation{
      width:20rem;
      height:2rem;
      text-align:center;
    }
    .app-form-button{
      width:6rem;
      height:3rem;
      font-size:1.7rem;
      background-color:green;
      border:none;
      border-radius:.3rem;
      color:#fff;
      cursor: pointer;
    }
    .app-para{
      width:100%;
      height:4rem;
      grid-template-columns: 1fr ;
      /* border:1rem solid #fff; */
    }
    .app-para{
      color:#fff;
      text-align:center;
      font-size:1.3rem;
    }
    span{
      color: #ffcc00;
    }
  </style> 
  <title> PHP Calculator</title>
</head>

<body>
 
  <div class="main">
    <div class="grid ">
      <div class="grid-container">
      <div class="app-text">
        <h2>PHP Calculator</h2>
      </div>
      <div class="app-form">
        <form method="POST" class="app-form-container" action="">
        <div class="app-form-group">
          <input type="text" class="app-form-control" name="num1" placeholder="Enter number">
        </div>
        <div class="app-form-group">
          <input type="text" class="app-form-control" name="num2" placeholder="Enter number">
        </div>
        <div class="select-style"> 
          <select name="operation" class="operation">
              <option>--Select Operation--</option>
              <option value="add">ADD</option>
              <option value="sub">SUB</option>
              <option value="mult">MULT</option>
              <option value="div">DIV</option>
          </select>
        </div>
        
        <div class="select-style"> 
          <input type="submit" name="submit" value="Submit" class="app-form-button"  >           
        </div>
        </form>
      </div>
      </div>
      <div class="app-para"><span>Answer</span>
        <p>
          <?php
              if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                // echo "{$num1} {$num2}";
                $operation =  $_POST['operation'];

                switch($operation){
                  case "add": $sum = $num1 + $num2;
                  echo $sum;
                  break;
                  case "sub": $sub = $num1 - $num2;
                  echo $sub;
                  break;
                  case "mult": $mult = $num1 * $num2;
                  echo $mult;
                  break;
                  case "div": $div = $num1 / $num2;
                  echo $div;
                  break;
                  default: echo "Sorry its not exist.";
                }

              }
          ?>
        </p>
  
      </div>

    </div>
  </div>

</body>

</html>