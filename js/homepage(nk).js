<script>
    // JavaScript for enhancing job post interactions
    document.addEventListener("DOMContentLoaded", () => {
        const jobItems = document.querySelectorAll('.job-item');

        jobItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'scale(1.05)';
                item.style.transition = 'transform 0.3s ease';
            });

            item.addEventListener('mouseleave', () => {
                item.style.transform = 'scale(1)';
            });
        });
    });
</script>
