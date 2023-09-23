import './bootstrap';

//FacebookのAPI
/*$(window).load(function () {
//facebook-jsonを取得して表示
    var count = 0;
    var limit = 5; //表示件数
    var text = '';
    var data;
    var graph_api = 'https://graph.facebook.com/';
    var userName = 'kodera.ryosuke'; // facebookページのユーザーネーム
    var accessToken = 'EAAOfDY3MvykBO6kTd1hZAOLrBgtdzLouiYcuK9hD9PrUsHeWBtObiJb0L4M4KOSiouZBCNBYE33ul6v2ccCZAbtfQTsZAZC5oBSEo14apCXouwQ1idZCIQjy60Exr4HkSXvuZC0yRg6h9zV94djl4A3OeRujTD81eY1H8MjXBZBDDovhvD2JWIF97ZAga'; // アクセストークン
    $.ajax({
        url: graph_api + appId + '/feed?access_token=' + accessToken
    })
    .done(function(res) {
        data = res.data;
        before = '<ul>';
        $.each(data, function(index, val) {
            datetime = val.created_time;
            since = datetime.substr(0, 10).replace("-", "").replace("-", "");
            if (val.message && count < limit) {
                datetime = datetime.substr(0, 10).replace("-", "/").replace("-", "/");
                id = val.id;
                url = id.split('_');
                url = "https://www.facebook.com/"+url[0]+"/posts/"+url[1];
                message = val.message.replace(/\r?\n/g, '');
                if (message.length > 50){
                    message = message.substr(0, 50)+'...';
                }
                text1 = '<li><span class="datetime">'+datetime+'</span>';
                text2 = '<span class="message"><a href="'+url+'" target="_blank">'+message+'</a></span></li>';
                count++;
                text = text + text1 + text2;
            }
        });
        after = '</ul>';
        text = before + text + after;
        $('#facebook-list').html(text);
    })
    .fail(function(jqXHR, status) {
        $('#facebook-list').html('<p>読み込みに失敗しました。</p>');
    })
});*/


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



//↓ブログ画像にアニメーションをつける
const showImage = (entries, obs) => {
    //entries.forEach((entry) => {
        //if (entry.isIntersecting) {
            entries[0].target.animate(
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
            obs.unobserve(entries[0].target);
        //}
    //});
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