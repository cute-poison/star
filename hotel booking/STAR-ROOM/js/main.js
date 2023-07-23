// ============ Faq toggle================

const faq = document.querySelectorAll('.faq');

faq.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');
        
        // change icon
        const icon = faq.querySelector('.faqs__icon i');
        if (icon.className === 'bi bi-plus')
        {
            icon.className = "bi bi-dash-lg";
        }
        else{
            icon.className = "bi bi-plus";
        }
    })
});