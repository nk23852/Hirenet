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

let currentSlide = 0;

const jobPosts = document.getElementById('jobPosts');
const totalSlides = document.querySelectorAll('.job-post').length;
const slideWidth = document.querySelector('.slider-container').offsetWidth;

document.getElementById('nextBtn').addEventListener('click', function() {
    if (currentSlide < totalSlides - 1) {
        currentSlide++;
    } else {
        currentSlide = 0; // Loop back to the first slide
    }
    jobPosts.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
});

document.getElementById('prevBtn').addEventListener('click', function() {
    if (currentSlide > 0) {
        currentSlide--;
    } else {
        currentSlide = totalSlides - 1; // Loop to the last slide
    }
    jobPosts.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
});
