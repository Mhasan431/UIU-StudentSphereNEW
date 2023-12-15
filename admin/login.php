<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include './db_connect.php';
ob_start();
if (!isset($_SESSION['system'])) {
    $system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    foreach ($system as $k => $v) {
        $_SESSION['system'][$k] = $v;
    }
}
ob_end_flush();
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $_SESSION['system']['name'] ?></title>


    <?php include './header.php';?>
    <?php
if (isset($_SESSION['login_id'])) {
    header("location:index.php?page=home");
}

?>

</head>
<style>
.heading {
    text-align: center;
    margin-top: 20px;
}

.container {
    height: auto;
    width: 50%;
    box-shadow: 0px 4px 20px 0px gray;
}
</style>

<body>
    <h1 class="heading">Welcome to Admin Login</h1>
    <div class="container">
        <form id="login-form">
            <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
        </form>
    </div>







    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
$('#login-form').submit(function(e) {
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if ($(this).find('.alert-danger').length > 0)
        $(this).find('.alert-danger').remove();
    $.ajax({
        url: 'ajax.php?action=login',
        method: 'POST',
        data: $(this).serialize(),
        error: err => {
            console.log(err)
            $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

        },
        success: function(resp) {
            if (resp == 1) {
                location.href = 'index.php?page=home';
            } else if (resp == 4) {
                $('#login-form').prepend(
                    '<div class="alert alert-danger">You attempts 5 unsuccessful login. Your login attempts are exceeded. You are blocked for 5 mins.</div>'
                )
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
            } else {
                $('#login-form').prepend(
                    '<div class="alert alert-danger">Username or password is incorrect.</div>')
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
            }
        }
    })
})
</script>

</html>