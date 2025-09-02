<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            background: rgba(241, 191, 200, 1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }


        .flex {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        label {
            width: 150px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        select,
        input[type="file"] {
            flex: 1;
            padding: 8px 10px;
        }

        .gender input[type="button"],
        .department input[type="checkbox"] {
            margin-left: 10px;
            margin-right: 5px;
        }

        .gen {
            margin-left: 10px;
        }

        .gender label,
        .department label {
            margin-right: 15px;
        }

        input[type="submit"] {
            width: 150px;            
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;     
        }
    </style>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
        <div class="roll-no flex">
            <label for="roll-no">Roll no.:</label>
            <input type="number" name="roll-no" id="">
        </div>

        <div class="student-name flex">
            <label for="">Student name:</label>
            <input type="text" name="first-name" id="" placeholder="First Name">
            <span>-</span>
            <input type="text" name="last-name" id="" placeholder="Last Name">
        </div>

        <div class="fathers-name flex">
            <label for="">Father's name:</label>
            <input type="text" name="fathers-name" id="">
        </div>

        <div class="date-of-birth flex">
            <label for="">Date of birth:</label>
            <input type="date" name="dob" id="">
        </div>

        <div class="mobile-number flex">
            <label for="">Mobile no.:</label>
            <input type="tel" name="tel" id="">
        </div>

        <div class="email flex">
            <label for="">Email id:</label>
            <input type="email" name="email" id="">
        </div>

        <div class="password flex">
            <label for="">Password:</label>
            <input type="password" name="password" id="">
        </div>

        <div class="gender flex">
            <label>Gender:</label>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male" class="gen">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female" class="gen">Female</label>
        </div>

        <div class="department flex">
            <label for="">Department</label>
            <input type="checkbox" name="department" value="cse">
            <label for="">CSE</label>
            <input type="checkbox" name="department" value="it">
            <label for="">IT</label>
            <input type="checkbox" name="department" value="ECE">
            <label for="">ECE</label>
            <input type="checkbox" name="department" value="civil">
            <label for="">Civil</label>
            <input type="checkbox" name="department" value="Mech">
            <label for="">Mech</label>
        </div>

        <div class="course flex">
            <label for="">Course:</label>
            <select name="course" id="">
                <option value="IP">IP</option>
                <option value="DS">DS</option>
                <option value="CN">CN</option>
            </select>
        </div>

        <div class="photo flex">
            <label for="">Student photo:</label>
            <input type="file" name="student-photo" id="">
        </div>

        <div class="city flex">
            <label for="">City</label>
            <input type="text" name="city" id="">
        </div>

        <div class="address flex">
            <label for="">Address</label>
            <input type="text" name="address" id="">
        </div>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>

<?php

function valid_roll_no() {
    if(isset($_POST["roll-no"])) {
        if(!empty($_POST["roll-no"])) {
            if(ctype_digit($_POST["roll-no"])) {
                if($_POST["roll-no"] > 0){
                    echo "Roll no: {$_POST["roll-no"]} <br>";
                }else {
                    echo "Roll no. can not be negative<br>";
                }
            }else {
                echo "Roll no. should only contains digit.<br>";
            }
        }else {
            echo "Please Enter Roll no. It can not empty.<br>";
        }
    }else {
        echo "Roll no can not be empty.<br>";
    }
}

function valid_student_name() {
    if(isset($_POST["first-name"]) && isset($_POST["last-name"])) {
        if(!empty($_POST["first-name"]) && !empty($_POST["first-name"])) {
            if(ctype_alpha($_POST["first-name"]) && ctype_alpha($_POST["last-name"])) {
                echo "Student name: {$_POST["first-name"]} {$_POST["last-name"]}<br>";
            }else {
                echo "Name should contain only letter.<br>";
            }
        }else {
            echo "Please enter your name. it can not be empty <br>";
        }
    }else {
        echo "Student name can not be empty<br>";
    }
}

function valid_fathers_name() {
    if(isset($_POST["fathers-name"])) {
        if(!empty($_POST["fathers-name"])) {
            if(ctype_alpha($_POST["fathers-name"])) {
                echo "Fathers's name: {$_POST["fathers-name"]}<br>";
            }else {
                echo "Fathers name should contain only letter.<br>";
            }
        }else {
            echo "Please enter fathers name. it can not be empty <br>";
        }
    }else {
        echo "Father's name can not be empty<br>";
    }
}

function valid_dob() {
    if (isset($_POST["dob"])) {
        if (!empty($_POST["dob"])) {
            $dob = $_POST["dob"];
            $dob_obj = DateTime::createFromFormat("Y-m-d", $dob);

            if ($dob_obj && $dob_obj->format("Y-m-d") === $dob) {
                $today = new DateTime();
                
                if ($dob_obj > $today) {
                    echo "Date of birth cannot be in the future<br>";
                } else {
                    echo "Valid Date of Birth: " . htmlspecialchars($dob) . "<br>";
                }
            } else {
                echo "Invalid date format<br>";
            }
        } else {
            echo "Date of birth can not be empty<br>";
        }
    } else {
        echo "Date of birth can not be empty<br>";
    }
}

function validate_tel() {
    if(isset($_POST["tel"])) {
        if(!empty($_POST["tel"])) {
            if(ctype_digit($_POST["tel"])) {
                if(strlen($_POST["tel"]) == 11) {
                    echo "Mobile no. {$_POST["tel"]}<br>";
                }else {
                    echo "Invalid Phone number. Must contain 11 digti<br>";
                }
            }else {
                echo "Mobile no only cntains digits<br>";
            }
        }else {
           echo "Mobile No. can not be empty<br>"; 
        }
    }else {
        echo "Mobile No. can not be empty<br>";
    }
}

function validate_email() {
    if(isset($_POST["email"])) {
        if(!empty($_POST["email"])){
            if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                echo "Email: {$_POST["email"]}<br>";
            }else {
                echo "Invalid email address.<br>";
            }
        }else {
           echo "Please enter your email. It can not be empty.<br>"; 
        }
    }else {
        echo "Please enter your email<br>";
    }
}

function validate_password() {
    if(isset($_POST["password"])) {
        if(!empty($_POST["password"])) {
            if(strlen($_POST["password"]) > 6){
                echo "Password is valid<br>";
            }else {
                echo "Password is invalid. Mus contain atleast 6 digits<br>";
            }
        }else {
            echo "Enter you password. Password can not be empty.<br>";
        }
    }else {
        echo "Enter you password.<br>";
    }
}

function validate_gender(){
    if(isset($_POST["gender"])){
        echo "Gender: {$_POST["gender"]}";
    }else {
        echo "Select your gender.<br>";
    }
}

function validate_department() {
    if(isset($_POST["department"])) {
        echo "Department: {$_POST["department"]}<br>";
    }else {
        echo "Select your department.<br>";
    }
}

function validate_course() {
    if(isset($_POST["course"])) {
        echo "Course: {$_POST["course"]}<br>";
    }else {
        echo "Select a course<br>";
    }
}

function validate_photo() {
    if (isset($_FILES["student-photo"])) {
        if ($_FILES["student-photo"]["error"] === UPLOAD_ERR_NO_FILE) {
            echo "Enter your photo. It cannot be empty.<br>";
        } else {
            foreach ($_FILES["student-photo"] as $key => $value) {
                echo "{$key} = {$value}<br>";
            }
        }
    } else {
        echo "Enter your photo.<br>";
    }
}


function validate_city() {
    if(isset($_POST["city"])){
        if(!empty($_POST["city"])) {
            if(ctype_alpha(str_replace(" ", "", $_POST["city"]))) {
                echo "City: {$_POST["city"]}.<br>";
            }else {
                echo "Invalid city name.<br>";
            }
        }else {
            echo "Enter your city. City can not be empty.<br>";
        }
    }else {
        echo "Enter your city.<br>";
    }
}

function validate_address() {
    if(isset($_POST["address"])) {
        if(!empty($_POST["address"])) {
            echo "Address: {$_POST["address"]} <br>";
        }else {
            echo "Enter your address. It can not be empty<br>";
        }
    }else {
        echo "Enter your address.<br>";
    }
}


if($_SERVER["REQUEST_METHOD"] === "POST") {
    valid_roll_no();
    valid_student_name();
    valid_fathers_name();
    valid_dob();
    validate_tel();
    validate_email();
    validate_password();
    validate_gender();
    validate_department();
    validate_course();
    validate_photo();
    validate_city();
    validate_address();
}

?>