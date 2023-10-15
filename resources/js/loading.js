//↓ローディングアニメーション
const grey = document.querySelector('#loading');
const green = document.querySelector('#loading-screen');
const spin = document.querySelector('.spin');

window.addEventListener('load', () => {
    //グレースクリーン
    grey.animate(
        {
            opacity: [1, 0],
            visibility: 'hidden',
        },
        {
            duration: 500,
            delay: 600,
            fill: 'forwards',
            easing: 'ease',
        }
    );
    
    //緑スクリーン
    green.animate(
        {
            translate: ['0 100%', '0 0', '0 -100%'],
        },
        {
            duration: 500,
            delay: 400,
            fill: 'forwards',
            easing: 'ease',
        }
    );
    
    //ローディングスピン画像
    spin.animate(
        {
            opacity: [1, 0],
        },
        {
            duration: 800,
            fill: 'forwards',
            easing: 'ease',
        }
    );
});