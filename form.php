<?php

    $name=$email=$phone="";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone_number'];
        $comment=$_POST['comments'];
        
        if(empty($name))
        {
            $nameErr="Name is required";
        }
        else
        {
            if(!preg_match("/^[a-zA-Z ]*$/",$name))
            {
                $nameErr="Name can only contain letters and white spaces";
            }
        }
        if(empty($email))
        {
            $emailErr="Email is required";
        }
        else
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $emailErr = "Invalid email format"; 
            }
        }
        if(empty($phone))
        {
            $phoneErr="Phone number is required";
        }
        else
        {
            if(!preg_match('/^[0-9]{10}+$/',$phone))
            {
                $phoneErr="Enter valid number";
            }
        }

    }

?>

<html>
    <head>
        <title>PHP Forms</title>
        <style>
            .text-center
            {
                text-align: center;
            }
            .float-right
            {
                float:right;
            }
            .float-left
            {
                float:left;
            }
            .w-60
            {
                width:60%;
            }
            .w-75
            {
                width:75%;
            }
            .w-100
            {
                width:100%;
            }
            .w-25
            {
                width:25%;
            }
            .d-flex
            {
                display:flex;
            }
            .d-inline
            {
                display:inline;
            }
            .mb-10
            {
                margin-bottom:10px;
            }
            .justify-content-center{
                justify-content:center;
            }
            .error
            {
                color:red;
            }
        </style>
    </head>
    <body>
        <form class="text-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="w-60" >
                <div class="w-100 d-flex mb-10 justify-content-center">
                    <div class="w-25 float-left d-inline" >
                        <label>Name </label>
                    </div>
                    <div class="w-75 float-right d-inline" >
                        <input type="text" class="w-60" name="name" value="<?php echo $name; ?>">
                        <span class="error">* <?php echo $nameErr;?></span>
                    </div>
                </div>
                <div class="w-100 d-flex mb-10 justify-content-center">
                    <div class="w-25 float-left d-inline">
                        <label>Email </label>
                    </div>
                    <div class="w-75 float-right d-inline justify-content-center" >
                        <input type="text" class="w-60" name="email" value="<?php echo $email; ?>">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </div>
                </div>
                <div class="w-100 d-flex mb-10 justify-content-center">
                    <div class="w-25 float-left d-inline" >
                        <label>Phone No. </label>
                    </div>
                    <div class="w-75 float-right d-inline justify-content-center" >
                        <input type="text" class="w-60" name="phone_number" value="<?php echo $phone; ?>">
                        <span class="error">* <?php echo $phoneErr; ?></span>
                    </div>
                </div>
                <div class="w-100 d-flex mb-10 justify-content-center">
                    <div class="w-25 float-left d-inline" >
                        <label>Comments </label>
                    </div>
                    <div class="w-75 float-right d-inline " >
                        <textarea name="comments" class="w-60" rows="3" columns="15"><?php echo $comment; ?></textarea><br>
                    </div>
                </div>
                <div class="w-100 d-flex mb-10 text-center justify-content-center">
                    <input type="submit" name="submit" value="Submit Data">
                </div>                    
            </div>
        </form>
    </body>
</html>


