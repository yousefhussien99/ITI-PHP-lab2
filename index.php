<!DOCTYpE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Registration Form</title>
    <style >
        *{
            margin: 0;
            padding: 0;
            background-image : linear-gradient(to right, #ff9966, #ff5e62);
            line-height: 1.5;
            font-family: sans-serif, Arial;
            font-size: 16px;
            font-weight: bold;


        }
        form{
            width: 500px;
            margin: 10px auto;

            padding: 20px;
            background-color: #fff;
            border-radius: 10px;

            box-shadow: 0 0 10px #000;
        }
        input[type="text"],input[type="password"],textarea{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 2px solid #ccc;
            box-sizing: border-box;
        }
        label {
            font-weight: bold;
        }
        input[type="submit"],input[type="reset"]{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 2px solid #ccc;
            box-sizing: border-box;
            cursor: pointer;
        }
        img {
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;

        }
        textarea{
            height: 100px;
            max-width: 100%;
        }



    </style>
</head>
<body>
    <form action="Done.php" method="post" onsubmit="return myFunction()">
    <label for="Fname"> First Name:</label>
    <input type="text" name="Fname" id="Fname">
    <br>
    <label for="Lname"> Last Name:</label>
    <input type="text" name="Lname" id="Lname">
    <br>
    <label for ="address">  Address:</label>
    <br>
    <textarea name="address" id="address"></textarea>
    <br>   
    <label for ="country"> Country</label>
    <select name="country" id="country">
        <option value="Eg">Egypt</option>
        <option value="KSA">Kingdom of Saudi Arabia</option>
        <option value="UAE">United Arab Emirates</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Qatar">Qatar</option>
        <option value="Not Selected" selected="selected">Not Selected</option>
    </select>
    <br>
    <label for="Gender" > Gender</label>
    <input type="radio" id="Gender" value="Male" name ="Gender"> Male
    <input type="radio" id="Gender" value="Female" name ="Gender"> Female
    <br>
    <label for="skills"> Skills</label>
    <input type="checkbox" id="skills" value="HTML" name="skills[]"> HTML
    <input type="checkbox" id="skills" value="CSS" name="skills[]"> CSS
    <input type="checkbox" id="skills" value="PHP" name="skills[]"> PHP
    <input type="checkbox" id="skills" value="JS" name="skills[]"> JS
    <br>
    <label for="UserName"> UserName</label>   
    <input type="text" name="UserName" id="UserName">
    <br>
    <label for="Password"> Password</label>
    <input type="password" name="Password" id="Password">
    <br>
    <label for="Department"> Department</label>
    <input type="text" name="Department" id="Department">
    <br>
    <img src="IMG/avoid-captcha.jpg" id="demo" value = "qGphJD">
    <label for="Code"> please insert the code the below box </label>
    <br>
    <input type="text" name="Code" id="Code">
    <br>
    <input type="submit" value="Submit" onsubmit="FunctionS()">
    <input type="reset" value="Reset">
    </form>
    <script>
        function myFunction() {
            //validation for first name
            var x = document.getElementById("Fname").value;
            if (x == "") {
                alert("First Name must be filled out");
                return false;
            }
            //validation for last name
            var x = document.getElementById("Lname").value;
            if (x == "") {
                alert("Last Name must be filled out");
                return false;
            }
            //validation for address
            var x = document.getElementById("address").value;
            if (x == "") {
                alert("Address must be filled out");
                return false;
            }
            //validation for country
            var x = document.getElementById("country").value;
            if (x == "Not Selected") {
                alert("Country must be filled out");
                return false;
            }
            // validate skills
            var x = document.getElementById("skills").value;
            if (x == "") {
                alert("Skills must be filled out");
                return false;
            }
            //validation for username
            var x = document.getElementById("UserName").value;
            if (x == "") {
                alert("UserName must be filled out");
                return false;
            }
            //validation for password
            var x = document.getElementById("Password").value;
            if (x == "") {
                alert("Password must be filled out");
                return false;
            }
            //validation for department
            var x = document.getElementById("Department").value;
            if (x == "") {
                alert("Department must be filled out");
                return false;
            }
            
            //validation for code
            var x = document.getElementById("Code").value;
            if (x == "") {
                alert("Code must be filled out");
                return false;
            }
            
            if (x != "qGphJD") {
                alert("Code is not correct");
                return false;
            }
            window.location.href = "Done.php";
        
        }
    </script>
</body>
</html>
