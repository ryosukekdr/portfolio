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
            duration: 2000,
            delay: 1200,
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
            duration: 2000,
            delay: 800,
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
            duration: 1200,
            fill: 'forwards',
            easing: 'ease',
        }
    );
});