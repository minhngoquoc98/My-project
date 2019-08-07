<?php 
    require_once 'functions.php';
    if(!empty($_POST)){
        $UserName = $_POST['name'];
        $errorName = '';
        $Password = $_POST['passw'];
        $errorPW = '';
        $ConfirmPassword = $_POST['confirmPW'];
        $errorConfirmPW = '';
        $displayN = $_POST['displayName'];
        $errorDisplayName = '';
        $email = $_POST['Email'];
        $errorEmail = '';
        if(checkInput($UserName,'username')==false){
            $UserName = '';
            $errorName = '<p style = "margin:0px; color:red;">* Tên không hợp lệ</p>';
        }
        if(checkInput($Password,'password')==false){
            $Password = '';
            $errorPW = '<p style = "margin:0px; color:red;">* 8-10 ký tự, ít nhất 1 uppercase, 1 digit, 1 special character</p>';
        }
        if(checkInput($ConfirmPassword,'confirmPW')==false){
            $ConfirmPassword = '';
            $errorConfirmPW = '<p style = "margin:0px; color:red;">* 8-10 ký tự, ít nhất 1 uppercase, 1 digit, 1 special character</p>';
        }
        if($ConfirmPassword != $Password){
            $ConfirmPassword = '';
            $errorConfirmPW = '<p style = "margin:0px; color:red;">* Mật khẩu xác nhận sai</p>';
        }
        if(checkInput($displayN,'displayName')==false){
            $displayN = '';
            $errorDisplayName = '<p style = "margin:0px; color:red;">* Tên không hợp lệ, cần ít nhất 4 ký tự</p>';
        }
        if(checkInput($email,'email')==false){
            $email = '';
            $errorEmail = '<p style = "margin:0px; color:red;">* Email không hợp lệ</p>';
        }
    }else{
        $UserName = '';
        $errorName = '<p style = "margin:0px; color:red;">* Tên cần 4-31 ký tự, không chứa whitespace</p>';
        $Password = '';
        $errorPW = '<p style = "margin:0px; color:red;">* 8-10 ký tự, ít nhất 1 uppercase, 1 digit, 1 special character</p>';
        $ConfirmPassword='';
        $errorConfirmPW = '<p style = "margin:0px; color:red;">* 8-10 ký tự, ít nhất 1 uppercase, 1 digit, 1 special character</p>';
        $displayN = '';
        $errorDisplayName = '<p style = "margin:0px; color:red;">* Tên không hợp lệ, cần ít nhất 4 ký tự</p>';
        $email = '';
        $errorEmail = '<p style = "margin:0px; color:red;">* </p>';
    }
?>

<p style="color: white; margin:0px 0px 0px 20px; font-family: Arial, Helvetica, sans-serif">
                <a style="text-decoration: none; color: white; cursor: pointer;" onclick="document.getElementById('RegisterForm').style.display='block'">Register</a>
            </p>
            <div class="loginForm" id="RegisterForm">
                <Form class="loginForm-content animate" method = "post" action="#">
                    <div class="loginForm-contain-title"><p class="loginForm-title">Register here</p></div>
                    <div class="loginForm-container-input">
                        <div class="loginForm-contain-input">
                            <input type="text" placeholder="Username" class="loginForm-input" name = "name"value = "<?php echo $UserName;?>">
                            <?php echo $errorName;?>
                        </div>
                    </div>
                    <div class="loginForm-container-input">
                        <div class="loginForm-contain-input">
                            <input type="password" placeholder="Password" name="passw"class="loginForm-input" value = "<?php echo $Password;?>">
                            <?php echo $errorPW?>
                        </div>
                    </div>
                    <div class="loginForm-container-input">
                        <div class="loginForm-contain-input">
                            <input type="password" placeholder="Confirm Password" name = "confirmPW" class="loginForm-input" value = "<?php echo $ConfirmPassword;?>">
                            <?php echo $errorConfirmPW;?>
                        </div>
                    </div>
                    <div class="loginForm-container-input">
                        <div class="loginForm-contain-input">
                            <input type="text" placeholder="Display Name" name="displayName" class="loginForm-input" value = "<?php echo $displayN; ?>">
                            <?php echo $errorDisplayName;?>
                        </div>
                    </div>
                    <div class="loginForm-container-input">
                        <div class="loginForm-contain-input">
                            <input type="text" placeholder="Email Address" class="loginForm-input" name="Email" value = "<?php echo $email;?>">
                            <?php echo $errorEmail;?>
                        </div>
                    </div>
                    <div style="display: flex; width: 400px; padding: 0px 55px;">
                        <div class="loginForm-container-register" style="padding-right:50px;">
                            <div class="loginForm-contain-register">
                                <button type="submit">REGISTER</button>
                            </div>
                        </div>
                        <div class="loginForm-container-register">
                            <div class="loginForm-contain-register">
                                <button type="submit">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </Form>
            </div>