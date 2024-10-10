function validateForm() {
    const termName = document.forms["termForm"]["termName"].value;  // Correct variable
    const descript = document.forms["termForm"]["descript"].value;  // Correct variable

    if (termName === "" || descript === "") {  // Use the correct variables here
        alert("All fields must be filled out.");
        return false;
    }
    return true;
}


function updateCharacterCount() {
    const descript = document.getElementById("descript").value.length;  // Get the length of the entered description
    const charCount = document.getElementById("charCount");  // Get the element where character count will be shown

    charCount.innerHTML = "Characters: " + descript + "/20";  // Update the character count display

    // Change color if the limit is near or exceeded
    if (descript > 20) {
        charCount.style.color = "red";  // Warn the user if they exceed the character limit
    } else {
        charCount.style.color = "green";  // Normal color within the limit
    }
}


// Function to confirm deletion
function confirmDelete() {
    return confirm("Are you sure you want to delete this term?");
}


