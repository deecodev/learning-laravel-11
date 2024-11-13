<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-4">
        <article>
            <a href="/posts">
                <h2 class="tracking-tight text-2xl font-medium capitalize">{{ $post['title'] }}</h2>
            </a>
            <div class="text-sm text-gray-500 mb-4">
                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <pre class="mb-4 font-sans whitespace-pre-wrap">{{ $post['content'] }}</pre>
            <a href="/posts" class="text-blue-500 text-sm">&laquo; Back</a>
        </article>
    </div>
</x-layout>
