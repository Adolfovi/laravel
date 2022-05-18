@if($agent->isMobile())
    <script type="module" src="{{mix('front/js/mobile/app-mobile.js')}}"></script>
@endif

@if($agent->isDesktop())
    <script type="module" src="{{mix('front/js/desktop/app.js')}}"></script>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto Condensed', 'Roboto']
        }
    });        
</script>