document.addEventListener("DOMContentLoaded", function() {


    const errorMessage = document.getElementById("error-message");


   form.addEventListener("submit", function(event) {

        event.preventDefault();


        const name = document.getElementById("termName").value;

        const email = document.getElementById("descript").value;


       /* if (password !== confirmPassword) {

            errorMessage.innerHTML = "Passwords do not match";

            return;

        }*/
        // Send a request to the PHP file to process the sign up

        const xhr = new XMLHttpRequest();

        xhr.open("POST", "insert_terms.php", true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.send("username=" + username + "&email=" + email + "&password=" + password);


        xhr.onload = function() {

            if (xhr.status === 200) {

                // Sign up successful, redirect to a success page
                document.write("sign up successful")
                window.location.href = "insert_terms.php";

            } else {

                errorMessage.innerHTML = "Error signing up";

            }

        };

    });

});