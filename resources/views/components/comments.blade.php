<h2>コメント</h2>

@foreach($comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach