document.addEventListener("DOMContentLoaded", function() {

    const form = document.getElementById("sign-up-form");

    const errorMessage = document.getElementById("error-message");


   form.addEventListener("submit", function(event) {

        event.preventDefault();


        const name = document.getElementById("username").value;

        const email = document.getElementById("email").value;

        const password = document.getElementById("password").value;

        const confirmPassword = document.getElementById("confirm-password").value;


        if (password !== confirmPassword) {

            errorMessage.innerHTML = "Passwords do not match";

            return;

        }
        // Send a request to the PHP file to process the sign up

        const xhr = new XMLHttpRequest();

        xhr.open("POST", "insert.inc.php", true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.send("username=" + username + "&email=" + email + "&password=" + password);


        xhr.onload = function() {

            if (xhr.status === 200) {

                // Sign up successful, redirect to a success page
                document.write("sign up successful")
                window.location.href = "insert.inc.php";

            } else {

                errorMessage.innerHTML = "Error signing up";

            }

        };

    });

});