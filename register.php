<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="container text-center" style="max-width: 600px">
        <h1 class="h3 mt-4 mb-3"> Register</h1>
        
        <form action="./_actions/create.php" method="post" class=" mb-2">

            <input type="text" name="name" placeholder=" name" class="form-control mb-2" required>
            <input type="text" name="email" placeholder=" Email" class="form-control mb-2" required>
            <input type="text" name="phone" placeholder=" Phone" class="form-control mb-2" required>
            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <button class="btn btn-primary w-100"> Register </button>

        </form>
        <a href="index.php">login</a>
    </div>
</body>
</html>