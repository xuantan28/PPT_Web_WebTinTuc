<!-- Tag -->
<div class="p-b-55">
    <div class="how2 how2-cl4 flex-s-c m-b-30">
        <h3 class="f1-m-2 cl3 tab01-title">
            Tags
        </h3>
    </div>

    <div class="flex-wr-s-s m-rl--5">
        @foreach($tags as $tag)
            @if($tag->posts->count() > 0)
                <a href="tag/{{ $tag->slug_tag}}"
                    class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    {{ $tag->name_tag }}
                </a>
            @endif
         @endforeach
    </div>
</div>