<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p id="demo_text">Text Awal</p>
    <button id="demo_btn" onclick="ubahText()">ubah Text</button>

    <button  onclick="textWrite()">Ubah Satu Layar</button>

    <button onclick="testAlert()">Test Alert</button>

    <button id="consoleLog" onclick="testConsoleLog()">Console log</button>

    <script> 
        function ubahText(){
            var text = document.getElementById('demo_text').innerHTML;
            if (text == 'Text Awal') {
                document.getElementById('demo_text').innerHTML = 'Text Setelah Proses Javascript';
                document.getElementById('demo_btn').innerHTML = 'Kembali'
               
            }else{
                document.getElementById('demo_text').innerHTML = 'Text Awal';
                document.getElementById('demo_btn').innerHTML = 'ubah Text';
               
            }

            alert(text)
        }


        function textWrite()
        {
            document.write('Documentnnya Berubah');
        }

        function testAlert()
        {
            alert('Alert Berfungsi');
        }

        function testConsoleLog()
        {
            document.getElementById('consoleLog').innerHTML = "Hasilnya Lihat di inspect element, caranya clik kanan mouse -> inspect -> menu console"
           var x = 50;
           var z = 1859;
           console.log(z + x);
        }
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script> -->
</body>

</html>