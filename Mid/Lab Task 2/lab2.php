<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function validateRegistration() {
            var name = document.getElementById("fullName").value.trim();
            var email = document.getElementById("email").value.trim();
            var phone = document.getElementById("phone").value.trim();
            var pass = document.getElementById("password").value;
            var confirmPass = document.getElementById("confirmPassword").value;

            if (name === "" || email === "" || phone === "" || pass === "" || confirmPass === "") {
                alert("All fields are required!");
                return false;
            }
         
            if (!emailPattern.test(email)) {
                alert("Enter a valid email!");
                return false;
            }

            if (phone.length < 10) {
                alert("Phone number must be at least 10 digits!");
                return false;
            }

            if (pass !== confirmPass) {
                alert("Passwords do not match!");
                return false;
            }

            alert("Registration Successful!");
            return true;
        }

        function validateActivity() {
            var activity = document.getElementById("activityName").value.trim();

            if (activity === "") {
                alert("Activity name cannot be empty!");
                return false;
            }

            alert("Activity added successfully!");
            return true;
        }
    </script>
</head>

<body>
<center>

    <h2>Participant Registration</h2>
    <table>
        <td>
            Full Name: <br>
            <input type="text" id="fullName"> <br>

            Email: <br>
            <input type="text" id="email"> <br>

            Phone Number: <br>
            <input type="number" id="phone"> <br>

            Password: <br>
            <input type="password" id="password"> <br>

            Confirm Password: <br>
            <input type="password" id="confirmPassword"> <br>

            <button type="submit" style="background-color: blue;"
                onclick="return validateRegistration()">Register</button>
        </td>
    </table>

    <h2>Activity Selection</h2>
    <table>
        <td>
            Activity Name: <br>
            <input type="text" id="activityName"> <br>

            <button type="submit" style="background-color: blue;"
                onclick="return validateActivity()">Add Activity</button>
        </td>
    </table>

</center>
</body>
</html>
