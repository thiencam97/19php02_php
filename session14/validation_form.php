    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Mảng lưu lỗi, mặc định là rỗng
        $error = array();
        //Kiểm tra username
        if(empty($_POST['name'])){
            $error['name'] = 'Please input your user name';
        }else{
            $userName = $_POST['name'];
        }
        //Kiểm tra password
        if(empty($_POST['passwd'])){
            $error['passwd'] = 'Please input your password';
        }else{
            $passWd = $_POST['passwd'];
        }
        //Kiểm tra email
        if(empty($_POST['email'])){
            $error['email'] = 'Please input your email';
        }else{
            $email = $_POST['email'];
        }
        //Kiểm tra giới tính
        if(empty($_POST['gender'])){
            $error['gender'] = 'Please choose your gender';
        }else{
            $gender = $_POST['gender'];
        }
        //Kiểm tra thành phố
        if(empty($_POST['city'])){
            $error['city'] = 'Please choose your city';
        }else{
            $city = $_POST['city'];
        }
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation Form | PHP</title>
    <style>
        .error{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Register Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>User name:</label><br>
        <input type="text" name="name" value="<?php if(isset($userName)) echo $userName;?>"><br>
        <span class="error"><?php if(isset($error['name'])) echo $error['name'];?></span><br>
        <label>Password:</label><br>
        <input type="password" name="passwd" value="<?php if(isset($passWd)) echo $passWd;?>"><br>
        <span class="error"><?php if(isset($error['passwd'])) echo $error['passwd'];?></span><br>
        <label>Email:</label><br>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email;?>"><br>
        <span class="error"><?php if(isset($error['email'])) echo $error['email'];?></span><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == 'male') echo 'checked';?> value="male">Male<br>
        <input type="radio" name="gender" <?php if(isset($gender)&& $gender == 'female') echo 'checked';?> value="female">Female<br>
        <span class="error"><?php if(isset($error['gender'])) echo $error['gender'];?></span><br>
        <label>City:</label><br>
        <select name="city">
            <option value="">--- Choose City ---</option>
            <option value="1" <?php if(isset($city) && $city == "1") echo "selected";?>>Ha Noi</option>
            <option value="2" <?php if(isset($city) && $city == "2") echo "selected";?>>Ho Chi Minh</option>
            <option value="3" <?php if(isset($city) && $city == "3") echo "selected";?>>Da Nang</option>
            <option value="4" <?php if(isset($city) && $city == "4") echo "selected";?>>Other</option>
        </select><br>
        <span class="error"><?php if(isset($error['city'])) echo $error['city'];?></span><br>
        <label>Avatar:</label><br>
        <input type="file" name="fileUploads" accept="image/png, image/jpeg"><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>