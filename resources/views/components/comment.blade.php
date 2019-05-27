<form method="POST" action="/posts/{{ $id }}/comments">
    {{ csrf_field() }}
    <input type="text" name="content">
    <input type="submit">
</form>