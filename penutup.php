<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        .footer{
            width: 100%;
            bottom: 0;
            background-color: black;
            height: 60px;
            text-align: right;
        }
        .footer button{
           margin-top:10px ;
           margin-bottom: 10px;
           margin-right: 10px;
           padding:8px 15px;
           background-color: grey;
           border: 1px solid white;
           border-radius: 20px;
           cursor:pointer;
           color:white;
           position: right;
        }
        .tombol:hover{
            background-color: black;
        }
    </style>
</head>
<body>
            <div class="footer">
                <a link href="login.php"><button class="tombol">MASUK</button></a>
                <a link href="registrasi.php"><button class="tombol">DAFTAR</button></a>
            </div>
</body>
</html>