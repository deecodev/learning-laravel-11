<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-8">
        @foreach ($posts as $post)
            <article class="border border-slate-200/20 p-2 rounded-md shadow-sm">
                <h2 class="tracking-tight text-2xl font-medium capitalize">{{ $post['title'] }}</h2>
                <div class="text-sm text-gray-500 mb-4">
                    <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
                </div>
                <p>{{ Str::limit($post['content'], 100) }}</p>
                <a href="/post/{{ $post['slug'] }}" class="text-blue-500 text-sm">Read More &raquo;</a>
            </article>
        @endforeach
    </div>
</x-layout>
