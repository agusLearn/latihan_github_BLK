<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" onkeyup="inputan()" id="input">

    <!-- Hasil Input akan keluar di tag P -->
    <p id="hasilInputan"></p>


    <script>
        function inputan(){
            var dataInput = document.getElementById('input').value;

            if (dataInput.length > 8) {
                alert('Inputannya Ke panjangan');
            }else{
                document.getElementById('hasilInputan').innerHTML = dataInput;
            }
        }

    </script>
</body>
</html>