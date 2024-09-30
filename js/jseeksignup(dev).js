document.addEventListener("DOMContentLoaded", function() {

    const form = document.getElementById("sign-up-form");

    const errorMessage = document.getElementById("error-message");


   form.addEventListener("submit", function(event) {

        event.preventDefault();


        const name = document.getElementById("name").value;

        const email = document.getElementById("username_or_email").value;

        const password = document.getElementById("password").value;

        const confirmPassword = document.getElementById("confirm-password").value;


        if (password !== confirmPassword) {

            errorMessage.innerHTML = "Passwords do not match";

            return;

        }
        // Send a request to the PHP file to process the sign up

        const xhr = new XMLHttpRequest();

        xhr.open("POST", "homepage(nk).php", true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.send("name=" + name + "&username_or_email=" + username_or_email+ "&password=" + password);


        xhr.onload = function() {

            if (xhr.status === 200) {

                // Sign up successful, redirect to a success page
                document.write("sign up successful")
                window.location.href = "homepage(nk).php";

            } else {

                errorMessage.innerHTML = "Error signing up";

            }

        };

    });

});