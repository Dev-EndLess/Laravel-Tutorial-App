@php
  $tags = explode(',', $tags)
@endphp

<ul class="flex flex-wrap">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center bg-black text-white rounded-xl mb-1 py-1 px-3 mr-2 text-xs">
      <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach

</ul>