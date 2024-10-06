<?php                                           //RPNS Pathiranage IT23538696
require 'config.php';

// Fetch the applicants from the database
$query = "SELECT * FROM job_applicants";
$result = $conn->query($query);

$applicants = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $applicants[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Application.css">
    <title>Applicants</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h1 class="dashboard-heading">Dashboard</h1>
            <button id="welcome-btn" class="sidebar-btn">Welcome</button>
            <button id="applications-btn" class="sidebar-btn">Applications</button>
            <div id="profileSection" class="sidebar-profile">
                <h2>Profile</h2>
                <div class="profile-box">
                    <img src="profileI.jpg" alt="Logo" class="profile-icon">
                    <p><strong>Name:</strong> NS Pathiranage</p>
                    <p><strong>Company:</strong> HireNet Online job portal</p>
                    <p><strong>Email:</strong> recruiter@gamil.com</p>
                </div>
            </div>
        </div>

        <!-- Main content area -->
        <div class="content" id="content-area">
            <div id="welcome-message">
                <h1>Welcome to Dashboard</h1>
                <p>Welcome to recruiter user page! Track all applications, with managing and updating. Stay organized throughout the hiring process. Let's find your dream job together!"</p>
            </div>

            <div id="applications-message" style="display: none;">
                <h2>Applicants Table</h2>

            <!-- Add New Applicant Form --><!--Reference : Funda of Web IT-->
			<h3>Add New Applicant</h3>
			<form id="addApplicantForm" action="submitApplicants.php" method="POST">
				<label for="applicant_details">Applicant Details:</label>
				<input type="text" name="applicant_details" required>
    
				<label for="applied_date">Applied Date:</label>
				<input type="date" name="applied_date" required>
    
				<label for="position">Position:</label>
				<input type="text" name="position" required>
    
				<label for="status">Status:</label>
				<input type="text" name="status" required>
    
				<button type="submit">Add Applicant</button>
			</form>

            <table id="applicantsTable">
			<thead>
			<tr>
				<th>No</th>
				<th>Applicant Details</th>
				<th>Applied Date</th>
				<th>Position</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			</thead>
			
			<tbody>
			<?php foreach ($applicants as $index => $applicant): ?>
			<tr id="row-<?php echo $applicant['id']; ?>">
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $applicant['applicant_details']; ?></td>
            <td><?php echo $applicant['applied_date']; ?></td>
            <td><?php echo $applicant['position']; ?></td>
            <td><?php echo $applicant['status']; ?></td>
            <td>
                <button onclick="viewApplicant(<?php echo $applicant['id']; ?>)">View</button>
                <button onclick="editApplicant(<?php echo $applicant['id']; ?>)">Edit</button>
                <button onclick="deleteApplicant(<?php echo $applicant['id']; ?>)">Delete</button>
            </td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
            </div>
        </div>
    </div>

	<!--References https://www.w3schools.com/howto/howto_css_modals.asp-->
    <!-- View Modal -->
    <div id="viewModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('viewModal')">&times;</span>
            <h3>Applicant Summary</h3>
            <p id="viewSummary"></p>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editModal')">&times;</span>
            <form id="editForm" action="submitEditApplicant.php" method="POST">
                <input type="hidden" name="id" id="editId">
                <label for="editName">Applicant Details:</label>
                <input type="text" name="applicant_details" id="editName" required><br>
                <label for="editPosition">Position:</label>
                <input type="text" name="position" id="editPosition" required><br>
                <label for="editStatus">Status:</label>
                <input type="text" name="status" id="editStatus" required><br>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <script src="Application.js"></script>
</body>
</html>
