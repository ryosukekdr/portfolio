$('.like-toggle').on('click', function () {
    let $this = $(this); //イベントが発火した要素＝iタグを代入
    $.ajax({
        headers: {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')},  //name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/like', //ルーティング経由でLikeコントローラに飛ばす
        type: 'POST',
        data: {'blog_id': $this.data('blog_id')},  ////HTMLからdata-blog_idの値を取得してコントローラに送る
    })
    .done(function (data) {
        $this.toggleClass('fas liked'); //likedクラスのON/OFF切り替え
        $this.next('.like-counter').html(data.blog_likes_count); //コントローラからblog_likes_countという名前の「新規いいね後の総いいね数」が返ってくる
    })
    .fail(function () {
        console.log('fail');
    });
});