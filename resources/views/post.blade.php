<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="space-y-4">
    <article>
      <a href="/posts">
        <h2 class="tracking-tight text-2xl font-medium">{{ $post['title'] }}</h2>
      </a>
      <div class="text-sm text-gray-500 mb-4">
        <a href="#">{{ $post['author'] }}</a> | 1 January 2024
      </div>
      <p class="mb-4">
        {{ $post['content'] }}
      </p>
      <a
        href="/posts"
        class="text-blue-500 text-sm"
      >&laquo; Back</a>
    </article>
  </div>
</x-layout>
