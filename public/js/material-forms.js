function initializeCharCount() {
    const inputs = document.querySelectorAll('.dynamic-char-count');

    inputs.forEach(input => {
        // Prevent adding duplicate char-count elements
        if (input.nextElementSibling && input.nextElementSibling.classList.contains('char-count')) {
            return;
        }

        const charCount = document.createElement('div');
        charCount.classList.add('char-count');
        charCount.textContent = `0 / ${input.maxLength}`;

        // Insert character count element into the DOM
        input.parentNode.appendChild(charCount);

        // Event listener to update character count
        input.addEventListener('input', function() {
            charCount.textContent = `${this.value.length} / ${this.maxLength}`;
        });
    });
}

// Ensure the function is accessible globally
window.initializeCharCount = initializeCharCount;

document.addEventListener('DOMContentLoaded', initializeCharCount);
