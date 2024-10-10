function confirmDeletion(jobId) {
    const confirmation = confirm("Are you sure you want to delete this job posting?");
    if (confirmation) {
        window.location.href = `delete_job.php?id=${jobId}`;
    }
}

