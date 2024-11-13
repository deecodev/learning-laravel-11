<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="space-y-4">
    @foreach ($posts as $post)
      <article>
        <a href="/post/{{ $post['slug'] }}">
          <h2 class="tracking-tight text-2xl font-medium">{{ $post['title'] }}</h2>
        </a>
        <div class="text-sm text-gray-500 mb-4">
          <a href="#">{{ $post['author'] }}</a> | 1 January 2024
        </div>
        <p class="mb-4">
          {{ Str::limit($post['content'], 100) }}
        </p>
        <a
          href="/post/{{ $post['slug'] }}"
          class="text-blue-500 text-sm"
        >Read More &raquo;</a>
      </article>
    @endforeach
  </div>
</x-layout>
