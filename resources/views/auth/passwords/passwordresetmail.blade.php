@component('mail::message')
    あなたのアカウントでパスワード再設定のリクエストがありました。<br><br>
    新しいパスワードを設定するには、下記のリンクをクリックしてください。
    このリンクの有効期限は{{ $count }}分で、1回のみ有効です。

@component('mail::button', ['url' => $reset_url])
    パスワードリセット
@endcomponent

    
    もしこのメールに心当たりがない場合は破棄してください。

@endcomponent