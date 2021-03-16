<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework1</title>
    <style>
        form {
            border: solid 1px;
            margin: auto;
            width: 450px;
            padding: 10px;
        }

        form input  {
            margin: 10px;
        }

        table {
            border: solid 1px;
            border-collapse: collapse;
        }

        table td, th{
            border: solid 1px;
            padding: 10px;
        }
    </style>
</head>
<body>
<form action="worker.php" method="get">
        <h1>სახელფასო უწყისის ფორმა</h1>
        <input type="text" name="სახელი"> - სახელი
        <br>
        <input type="text" name="გვარი"> - გვარი
        <br>
        <input type="text" name="თანამდებობა"> - თანამდებობა
        <br>
        <input type="number" name="ხელფასი"> - ხელფასის რაოდენობა
        <br>
        <input type="number" name="დაკავებული საშემოსავლო "> - დაკავებული საშემოსავლო 
        <br>
        <input type="number" name="დარიცხული ხელფასი"> - დარიცხული ხელფასი
        <br>

        <button>SEND GET</button>
    </form>
    
</body>
</html>