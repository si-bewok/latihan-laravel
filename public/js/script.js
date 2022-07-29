const a = document.querySelector('.nav-link');
a.addEventListener('click', function() {
    if (this.classList.contains('active')) {
        this.classList.remove('active');
    } else {
        this.classList.add('active');
    }
})
