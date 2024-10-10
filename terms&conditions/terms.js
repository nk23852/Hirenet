function validateForm() {
    const termName = document.forms["termForm"]["termName"].value;  // Correct variable
    const descript = document.forms["termForm"]["descript"].value;  // Correct variable

    if (termName === "" || descript === "") {  // Use the correct variables here
        alert("All fields must be filled out.");
        return false;
    }
    return true;
}
