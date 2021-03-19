<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Selection</title>

    <style>
        *{
            border: 2px solid #dedede;
            padding: 15px;
            margin: 15px;
        }
        html{
            margin: 0;
            padding: 0;
        }
        body{
            max-width: 600px;
            margin: 30px auto;
            font-family: sans-serif;
            color: #333;
        }
    </style>
</head>
<body>
    <h1 id="judul">Hello World</h1>
    
    <div class="container">
        <section id="a">
            <p class="p1">Paragraf 1</p>
            <a href="http://blkbekasi.kemnaker.go/id">BBPLK Bekasi</a>
            <p class="p2">paragraf 2</p>
            <p class="p3">paragraf 3</p>
        </section>
        <section id="b">
            <p>Paragraf 4</p>
            <ul>
                <li>item 1</li>
                <li>item 2</li>
                <li>item 3</li>
            </ul>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>