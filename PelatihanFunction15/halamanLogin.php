<?php 
include 'proses.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>

    *{
        font-family: sans-serif;
    }
    .card{
        width: 500px;
        border: 1px solid #ccc;
        padding: 40px;
        margin: auto;
        margin-top: 15%;
        box-shadow: 1px 1px 5px  rgba(0, 0, 0, 0.4);
    }

    .card h1{
        text-align: center;
        text-transform: uppercase;
    }

    label{
        display: block;
        font-size: 15px;
        margin-top: 5px;
        margin-bottom: 10px;

    }
    input[type=text], input[type=password]{
        width: 100%;
        padding: 10px 6px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }
    #shpass{
        display: inline;
    }

    form{
        height: 200px;
    }

    button{
        margin-top: 15px;
        padding: 13px 20px;
        background-color: rgba(0, 0, 255, 0.9);
        border: none;
        color: white;
        font-weight: bold;
        text-align: right;
        float: right;
    }

    button:hover{
        background-color: rgba(0, 0, 200, 1) ;
    }

    </style>

</head>

<?php
if (isset($_POST['pass'])) {

    $nama = $_POST['usern'];
    $pass = $_POST['pass'];

    // function
    cekLogin($nama, $pass);
}
?>

<body>
    <div class="card">
        <h1>Halaman Login</h1>

        <form action="" method="post">
            <label for="user">Username</label>
            <input type="text" name="usern" id="user" placeholder="input your account" required>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="input your password" required>

            <input type="checkbox" id="showpass" onclick="showPass()">
            <label for="showpass" id="shpass">Show pass</label>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

<script>

    
    function showPass(){
        var pass = document.getElementById("pass").type;

        if(pass == 'password'){
            document.getElementById("pass").type = 'text';
        }else{
            document.getElementById("pass").type = 'password';
        }
    }
</script>

</html>