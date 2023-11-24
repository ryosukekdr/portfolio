const showImage = (entries, obs) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.animate(
                {
                    opacity: [0, 1],
                    //translate: ['200px 0', 0],
                    filter: ['blur(.4rem)', 'blur(0)'],
                    translate: ['0 4rem', 0],
                },
                {
                    duration: 1000,
                    easing: 'ease',
                    fill: 'forwards',
                }
            );
            //animateが１度発動したら監視をやめる。obsはimageObserverの別名。
            obs.unobserve(entry.target);
        }
    });
};

const options = {
    threshold: 1
};

//監視設定
const imageObserver = new IntersectionObserver(showImage, options);

//.motion-imageを監視するよう指示
const target_images = document.querySelectorAll('.motion-image');

target_images.forEach((target_image) => {
    imageObserver.observe(target_image);
});