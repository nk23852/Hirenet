document.getElementById('recruiterBtn').addEventListener('click', function() {
    window.location.href = 'recruiter.php';
});

document.getElementById('seekerBtn').addEventListener('click', function() {
    window.location.href = 'seeker.php';
});

document.getElementById('recruiterBtn').addEventListener('click', function() {
    window.location.href = 'recruiter.php';
});

document.getElementById('seekerBtn').addEventListener('click', function() {
    window.location.href = 'seeker.php';
});


document.addEventListener("DOMContentLoaded", () => {
    const profileMenu = document.querySelector('.profile-menu');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Show dropdown on mouse enter
    profileMenu.addEventListener('mouseenter', () => {
        dropdownMenu.style.display = 'block';
    });

    // Hide dropdown on mouse leave
    profileMenu.addEventListener('mouseleave', () => {
        dropdownMenu.style.display = 'none';
    });

    // Optional: Keep dropdown open if mouse enters it
    dropdownMenu.addEventListener('mouseenter', () => {
        dropdownMenu.style.display = 'block';
    });

    dropdownMenu.addEventListener('mouseleave', () => {
        dropdownMenu.style.display = 'none';
    });
});
