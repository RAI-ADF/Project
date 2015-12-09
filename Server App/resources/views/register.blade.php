<!DOCTYPE html>
<html>
<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/kube.min.css') ?>" />

</head>
<body style="width:80%;margin:40px auto">
    <div class="units-container">

        <form method="post" action="" class="forms">
            <h3>Form Registrasi</h3>
            <label>
                Nama <span class="error"><?php //echo $errors->first('usr_nama') ?></span>
                <input type="text" name="usr_nama" value="<?php //echo Form::old('usr_nama') ?>" class="width-20" />
            </label>
            <label>
                Username <span class="error"><?php //echo $errors->first('usr_username') ?></span>
                <input type="text" name="usr_username" value="<?php //echo Form::old('usr_username') ?>" class="width-20" />
            </label>
            <label>
                Email <span class="error"><?php //echo $errors->first('usr_email') ?></span>
                <input type="text" name="usr_email" value="<?php //echo Form::old('email') ?>" class="width-20" />
            </label>
            <label>
                Password <span class="error"><?php //echo $errors->first('usr_password') ?></span>
                <input type="password" name="usr_password" value="<?php //echo Form::old('usr_password') ?>" class="width-20" />
            </label>
            <label>
                No Telepon <span class="error"><?php //echo $errors->first('usr_notelp') ?></span>
                <input type="text" name="usr_notelp" value="<?php //echo Form::old('usr_notelp') ?>" class="width-20" />
            </label>
            <input type="submit" class="btn" value="Submit">

        </form>

    </div>
</body>
</html>