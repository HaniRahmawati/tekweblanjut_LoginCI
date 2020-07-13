<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit User </title>
</head>
<body>
    <form action="<?= base_url('user/update'); ?>" method="post">
        <h3> Edit User </h3>
        <p>
        <input type="text" name="user_id" value ="<?= $user->user_id;?>" disabled> <br>
        <input type="text" name="user_nama" value ="<?= $user->user_nama;?>"><br>
        <input type="text" name="user_email" value ="<?= $user->user_email;?>"><br>
        </p>
        <button type="submit">Update</button>
    </form>
</body>
</html>


