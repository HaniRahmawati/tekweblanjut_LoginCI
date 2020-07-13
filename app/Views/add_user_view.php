<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add New User </title>
</head>
<body>
    <form action="<?= base_url('user/save'); ?>" method="post">
        <h3> Add User </h3>
        <p>
        <input type="text" name="user_id" placeholder="ID User"><br>
        <input type="text" name="user_nama" placeholder="Nama"><br>
        <input type="text" name="user_email" placeholder="E-mail"><br>
        </p>
        <button type="submit">Save</button>
    </form>
</body>
</html>


