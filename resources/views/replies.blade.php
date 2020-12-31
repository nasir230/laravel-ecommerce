<div class="display-comment">
    <ul class="list-group">
@foreach($comments as $comment)
        <li class="list-group-item"> {{ $comment->user->name }} <p>Said</p> {{ $comment->comment }}</li>
@endforeach
</ul>
</div>

