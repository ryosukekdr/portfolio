import './bootstrap';

/*$(function () {
    $('#hamburger').on('click', function() {
        $('#menu').removeClass('list-style-none');  
    });
  });*/
  
/*const target = document.getElementById('menu');
const mediaQueryList = window.matchMedia('(max-width:760px)');

mediaQueryList.addEventListener('change', e => {
  if (e.matches) {
    target.classList.remove('list-style-none');
  }
  else {
    target.classList.add('list-style-none');
  }
});*/


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

const target_text = document.querySelector('#title');
const count = document.querySelector('#count');
//target.innerText = document.text01.value;


target_text.addEventListener('keyup', () => {
    count.textContent = target_text.value.length;
    
    if (target_text.value.length > 255) {
        count.classList.add('textlength_alert');
    } else {
        count.classList.remove('textlength_alert');
    }
});