<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type = "text/css">
        .brand{
            background: green !important;
            align: right;
        }
        .brand-text{
            color: black !important;
            /* align: center; */
            /* background: grey; */
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        table {
    width: 1000px;
    /* height: 20px;  */
    margin: 0 auto; 
    /* border-collapse: collapse;  */
  }
  td {
    border: 1px solid black; 
    padding: 5px; 
    text-align: left; 
    background-color: white;
  }
  th {
    border: 3px solid black; 
    padding: 10px; 
    text-align: center; 
    background-color: #D3D3D8;
  }
  .row{
    border: "2px solid black";
  }
  input[type="text"]::placeholder {
  color: black;  /* Replace with your color choice */
  opacity: 1;  /* Ensure full opacity (optional) */
}
    </style>
</head>
<body class = "grey lighten-4">
    <nav class = "white z-depth-0">
        <div class="container">
            <a href="index.php" class = "brand-logo brand-text " >Student Management System</a>
            <ul id="nav-mobile" class = "right hide-on-small-and-down">
            <li><a href="add.php" class = "btn brand z-depth-0 right-align">Add a Student</a></li>
            <li><a href="index.php" class = "btn brand z-depth-0 ">Back to Homepage</a></li>
        </ul>
        </div>
    </nav>
    
