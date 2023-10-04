//↓ブログタイトルの文字数カウンター
const target_text = document.querySelector('#title');
const count = document.querySelector('#count');

target_text.addEventListener('keyup', () => {
    count.textContent = target_text.value.length;
    
    if (target_text.value.length > 255) {
        count.classList.add('textlength_alert');
    } else {
        count.classList.remove('textlength_alert');
    }
});