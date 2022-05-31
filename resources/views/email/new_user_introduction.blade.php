@component('mail::message')

# 新しいユーザーが追加されました！

{{ $toUser->name }}さん、こんにちは！

@component('mail::panel')
新しく{{ $newUser->name }}さんが参加されましたよ！
@endcomponent

@component('mail::button', ['url' => route('tweet.index')])
つぶやきを見にいく
@endcomponent

@endcomponent