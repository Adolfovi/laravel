<div class="main-title">
    <h2>@yield('page-title')</h2>
</div>
<div class="faqs-container">
    <div class="faqs">
        @if(isset($faqs))
        @foreach($faqs as $faq)
        <div class="faq-element">
            <div class="faq-main">
                <div class="faq-title">
                    <h3>{!!$faq->question!!}</h3>
                </div>
                <div class="faq-arrow">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#C34400"
                            d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M7,10L12,15L17,10H7Z" />
                    </svg>
                </div>
            </div>
            <div class="faq-submain">
                {!!$faq->answer!!}
            </div>
        </div>
        @endforeach
        @endif
        
    </div>
</div>