<li class="nav-item {{ request()->url() == $item['url'] ? 'active' : '' }} ">
    <a class="nav-link" href="{{ $item['url'] }}" title="{{ isset($item['title']) ? $item['title'] : strip_tags($item['text']) }}">
        {!! $item['text'] !!}
    </a>
</li>
