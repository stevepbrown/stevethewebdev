

<ul id="ul-trade-links">
@isset($links)    
@foreach ($links as $link)
    <li><a href="/templates?trade={{$link->slug}}">{{$link->name}}</a></li>
@endforeach

@else

    <span>No links were returned</span>


@endisset
</ul>


