<li style="margin-bottom: 1rem;">
    <a href="{{ route('posts.read', $post->id) }}">{{ $post->title }}</a>
    <p style="margin: 0.5rem 0;">{{ $post->created_at }}</p>
    <button type="button" wire:click="upvote">upvote ({{ $post->upvotes }})</button>
    <button type="button" wire:click="downvote">downvote ({{ $post->downvotes }})</button>
</li>
