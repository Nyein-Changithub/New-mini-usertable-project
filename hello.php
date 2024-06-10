<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
       

    <?php $mode= "dark"; ?>

    <?php if ( $mode == "dark") : ?>
        <div style='width: 800px; margin: auto; padding:20px ; height: 200px ;background: #222; color: white;'>
            <h1>Some Title</h1>
            <P>Lorem ipsum dolor sit amount consectetur adipisicing elit. Labore; maiores.</P>
        </div>

    <?php else : ?>
        <div style='width: 800px ; margin: auto; padding:20px ; height: 200px ;background: #eee; color: black;'>
            <h1>Some Title</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, explicabo.</p>
        </div>
    <?php endif ?>

    <h1>PHP Form</h1>
    <form action="app.php" method= "get">
        <input type="text" name="name" placeholder= "Name"> <br><br>
        <input type="text" name="age" placeholder= "Age"> <br><br>
        <button>Send Date</button>
    </form>
    
</body>
</html>