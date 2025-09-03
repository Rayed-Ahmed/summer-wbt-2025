<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <div class="whole">
            <div class="first">
                <small>
                    <span class="asteric">* </span>
                    - Denotes Required Information
                </small><br>
                <p>> <strong>1 Donation</strong> > 2 Confirmation > Thank You!</p>
            </div>

            <h1>Donor Information</h1>
            <div>
                <div class="container">
                    <div class="label">
                        <label for="first-name">
                            First Name <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="first-name" id="first-name">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="last-name">
                            Last Name <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="last-name" id="last-name">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="company">
                            Company
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="company" id="company" >
                    </div>
                </div>


                <div class="container">
                    <div class="label">
                        <label for="address-1">
                            Address 1 <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="address-1" id="address-1">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="address-2">
                            Address 2 <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="address-2" id="address-2">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="city">
                            City <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="city" id="city">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="state">
                            State <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <select name="state" id="start">
                            <option value="select">Select a state</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="zip-code">
                            Zip Code <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="zip-code" id="zip-code">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="country">
                            Country <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <select name="country" id="country">
                            <option value="select">Select a country</option>
                            <option value="select">Bangladesh</option>
                            <option value="select">USA</option>
                        </select>
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="phone">
                            Phone
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="phone" id="phone">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="fax">
                            Fax
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" name="fax" id="fax">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="email">
                            Email <span class="important">*</span>
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="email" name="email" id="email">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="donation">
                            Donation Amount <span class="important">*</span>
                        </label>
                    </div>
                    <div class="parent-wrapper">
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="none" id="none">
                            </div>
                            <div class="radio-label">
                                <label for="none">None</label>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="50" id="$50">
                            </div>
                            <div class="radio-label">
                                <label for="$50">$50</label>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="75" id="$75">
                            </div>
                            <div class="radio-label">
                                <label for="$75">$75</label>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="100" id="$100">
                            </div>
                            <div class="radio-label">
                                <label for="$100">$100</label>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="250" id="$250">
                            </div>
                            <div class="radio-label">
                                <label for="$250">$250</label>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" name="donation-amount" value="other" id="other">
                            </div>
                            <div class="radio-label">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="custom-donation">
                    <div class="small-text">
                        <small>(Check a button or type in your amount)</small>
                    </div>
                    <div class="container custom-container">
                        <div class="label">
                            <label for="first-name">
                                Other Amount $
                            </label>
                        </div>
                        <div class="text-box">
                            <input type="text" name="other-amound" id="first-name">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="recurring-donation">
                            Recurring Donation
                        </label>
                        <small>(Check if yes)</small><br>
                    </div>
                    <div>
                        <input type="checkbox" name="recurring-donation" value="yes" id="re-donation">
                        <label for="re-donation">
                            I am interested in giving on a regular basis.
                        </label>
                    </div>
                </div>


                <div class="credit-card">
                    <small>Monthly Credit Cart $</small>
                    <input type="text" name="credit-card">
                    <small>For</small>
                    <input type="text" name="month">
                    <small>Month</small>
                </div>
            </div>
            <!-- ----------------------------Second section------------------------------------------- -->
            <h1>Honorarium and Memorial Donation Information</h1>
            <div>
                <div class="container">
                    <div class="label">
                        <label for="like-donation">
                            I would like to make this donation
                        </label>
                    </div>
                    <div class="donation-wrap">
                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" id="none">
                            </div>
                            <div class="radio-label">
                                <label for="none">None</label>
                            </div>
                        </div>

                        <div class="wrapper">
                            <div class="radio">
                                <input type="radio" id="$50">
                            </div>
                            <div class="radio-label">
                                <label for="$50">$50</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="label">
                        <label for="first-name">
                            Name
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" id="first-name">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="acknowledge-donation">
                            Acknowledge Donatio to
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" id="acknowledge-donation">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="address">
                            Address
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" id="address">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="city">
                            City
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" id="city">
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="state">
                            State
                        </label>
                    </div>
                    <div class="text-box">
                        <select name="state" id="start">
                            <option value="select">Select a state</option>
                            <option value="select">Bangladesh</option>
                            <option value="select">USA</option>
                        </select>
                    </div>
                </div>

                <div class="container">
                    <div class="label">
                        <label for="zip-code">
                            Zip Code
                        </label>
                    </div>
                    <div class="text-box">
                        <input type="text" id="zip-code">
                    </div>
                </div>

            </div>
            <!-- --------------------------------------Third section----------------------------------------------- -->
            <h1>Additional Information</h1>
            <p>Please enter your name, company or organization as you would like it to appear in our publications:</p>

            <div class="container">
                <div class="label">
                    <label for="name">
                        Name
                    </label>
                </div>
                <div class="text-box">
                    <input type="text" id="name">
                </div>
            </div>

            <div class="selection-box">
                <div>
                    <input type="checkbox">
                    <label for="">
                        I would like my gift to remain anonymous.
                    </label>
                </div>
                <div>
                    <input type="checkbox">
                    <label for="">
                        My employer offers a matching gift program. I will mail the matching gift form.
                    </label>
                </div>
                <div>
                    <input type="checkbox">
                    <label for="">
                        Please save the cost of acknowledging this gift by not mailing a thank you
                        letter.
                    </label>
                </div>
            </div>

            <div class="container area">
                <div class="comments">
                    <div class="line comment-label"><strong>Comments</strong></div>
                    <div class="line comment-help"> (Please type any question and feedback</div>
                    <div class="line comment-here">here)</div>
                </div>
                <div class="rx">
                    <textarea id="text-area" rows="5" cols="38"></textarea>
                </div>
            </div>

            <div class="container">
                <div class="label">
                    <label for="contact">
                        How may we contact you?
                    </label>
                </div>
                <div class="">
                    <div>
                        <input type="checkbox" id="contact-email" name="contact_method" value="email">
                        <label for="contact-email"><small>E-mail</small></label>
                    </div>

                    <div>
                        <input type="checkbox" id="contact-postal" name="contact_method" value="postal">
                        <label for="contact-postal"><small>Postal Mail</small></label>
                    </div>

                    <div>
                        <input type="checkbox" id="contact-phone" name="contact_method" value="telephone">
                        <label for="contact-phone"><small>Telephone</small></label>
                    </div>

                    <div>
                        <input type="checkbox" id="contact-fax" name="contact_method" value="fax">
                        <label for="contact-fax"><small>Fax</small></label>
                    </div>
                </div>
            </div>

            <p>I would like to receive newsletters and information about special events by:</p>
            <div class="additional">
                <input type="checkbox" name="" id="">
                <label for=""><small>Email</small></label><br>
                <input type="checkbox" name="" id="">
                <label for=""><small>Postal Code</small></label>
            </div>

            <div class="selection-box">
                <input type="checkbox" name="" id="">
                I would like information about volunteering with the
            </div>

            <div class="btn">
                <div>
                    <input type="submit" value="submit">
                </div>
                <div>
                    <input type="reset" value="Reset">
                </div>
            </div>

            <!-- ------ -->
            <p>
                <small>
                    🔒 Donate online with confidence. You are on a secure server. <br>

                    If you have any problems or questions, please contact support.
                </small>
            </p>

        </div>
    </form>
</body>

</html>


<?php

function valid_firstName() {
    if(isset($_POST["first-name"])) {
        if(!empty($_POST["first-name"])) {
            if(ctype_alpha(str_replace(" ", "", $_POST["first-name"]))) {
                echo "First Name: {$_POST["first-name"]}.<br>";
            }else {
                echo "First name is invalid.<br>";
            }
        }else {
            echo "First name can not be empty.<br>";
        }
    }else{
        echo "First name is required.<br>";
    }
}

function valid_lastName() {
    if(isset($_POST["last-name"])) {
        if(!empty($_POST["last-name"])) {
            if(ctype_alpha(str_replace(" ", "", $_POST["last-name"]))) {
                echo "Last Name: {$_POST["last-name"]}.<br>";
            }else {
                echo "Last name is invalid.<br>";
            }
        }else {
            echo "Last name can not be empty.<br>";
        }
    }else{
        echo "Last name is required.<br>";
    }
}

function validate_company() {
    if(empty($_POST["company"])) {
        return;
    }else {
        if(ctype_alpha(str_replace(" ", "", $_POST["company"]))) {
            echo "Company: {$_POST["company"]}.<br>";
        }else {
            echo "Company Name is invalid.<br>";
        }
    }
}

function validate_address1() {
    if(isset($_POST["address-1"])) {
        if(!empty($_POST["address-1"])) {
            if(ctype_digit($_POST["address-1"])) {
                echo "Invalid address.<br>";
            }else {
                echo "Address1: {$_POST["address-1"]}.<br>";
            }
        }else {
            echo "Address1 can not be empty.<br>";
        }
    }else {
        echo "Address1 is required.<br>";
    }
}

function validate_address2() {
    if(isset($_POST["address-2"])) {
        if(!empty($_POST["address-2"])) {
            if(ctype_digit($_POST["address-2"])) {
                echo "Invalid address.<br>";
            }else {
                echo "Address2: {$_POST["address-2"]}.<br>";
            }
        }else {
            echo "Address2 can not be empty.<br>";
        }
    }else {
        echo "Address2 is required.<br>";
    }
}

function validate_city() {
    if(isset($_POST["city"])) {
        if(!empty($_POST["city"])) {
            if(ctype_alpha(str_replace(" ", "", $_POST["city"]))) {
                echo "City: {$_POST["city"]}. <br>";
            }else {
                echo "Invalid city.<br>";
            }
        }else {
            echo "City can not be empty.<br>";
        }
    }else {
        echo "City is required.<br>";
    }
}

function validate_state() {
    if(isset($_POST["state"])) {
        if(!empty($_POST["state"])) {
            if($_POST["state"] === "select") {
              echo "Selct a state.<br>";  
            }else {
                echo "State: {$_POST["state"]}.<br>";
            }
        }else {
            echo "Selct a state.<br>";
        }
    }else {
        echo "Selct a state.<br>";
    }
}

function validate_zip() {
    if(isset($_POST["zip-code"])) {
        if(!empty($_POST["zip-code"])) {
            if(ctype_digit($_POST["zip-code"]) && strlen($_POST["zip-code"]) === 5) {

            }
        }else {

        }

    }else {
        echo "Zip can not be empty.<br>";
    }
}



if($_SERVER["REQUEST_METHOD"] === "POST") {
    valid_firstName();
    valid_lastName();
    validate_company();
    validate_address1();
    validate_address2();
    validate_city();
    validate_state();
    validate_zip();
}

?>