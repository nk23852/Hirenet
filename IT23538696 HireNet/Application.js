//IT23538696 RPNS Pathiranage

// Delete operation
function deleteApplicant(id) {
    if (confirm("Are you sure you want to delete this applicant?")) {
        window.location.href = `submitDeleteApplicant.php?id=${id}`;
    }
}

// View operation
function viewApplicant(id) {
    const row = document.getElementById(`row-${id}`);
    const applicantDetails = row.children[1].innerText; 
    const position = row.children[3].innerText;
    const status = row.children[4].innerText;

    // Display the summary in the modal
    document.getElementById('viewSummary').innerText = `Applicant Details: ${applicantDetails}\nPosition: ${position}\nStatus: ${status}`;
    document.getElementById('viewModal').style.display = 'block';
}

// Edit operation
function editApplicant(id) {
    const row = document.getElementById(`row-${id}`);
    const applicantDetails = row.children[1].innerText;
    const position = row.children[3].innerText;
    const status = row.children[4].innerText;

    document.getElementById('editId').value = id;
    document.getElementById('editName').value = applicantDetails;
    document.getElementById('editPosition').value = position;
    document.getElementById('editStatus').value = status;

    document.getElementById('editModal').style.display = 'block';
}

// Modal close function-https://www.w3schools.com/howto/howto_css_modals.asp
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// When Applications button clicked, the applications displaying
document.getElementById('applications-btn').onclick = function() {
    document.getElementById('welcome-message').style.display = 'none';
    document.getElementById('applications-message').style.display = 'block';
};
