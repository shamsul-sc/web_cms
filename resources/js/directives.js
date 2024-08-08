export const charcount = {
    mounted(el, binding) {
        const input = el

        if (input.nextElementSibling && input.nextElementSibling.classList.contains('char-count')) {
            return;
        }

        const charCount = document.createElement('div');
        charCount.classList.add('char-count');
        charCount.textContent = `0 / ${input.maxLength}`;

        // Insert character count element into the DOM
        input.parentNode.appendChild(charCount);

        // Event listener to update character count
        const updateCount = function() {
            charCount.textContent = `${this.value.length} / ${this.maxLength}`;
        }
        input.addEventListener('input', updateCount);
        input.__updateCount = updateCount
    },
    unmounted(el) {
        input = el
        if(input.__updateCount){
            el.removeEventListener('input', el.__updateCount)
            delete el.__updateCount
        }
    }
}

export default {
    charcount
}
