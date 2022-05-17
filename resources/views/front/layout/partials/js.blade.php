@if($agent->isMobile())
    <link href="{{mix('front/js/mobile/app-mobile.js')}}" rel="stylesheet">
@endif

@if($agent->isDesktop())
    <link href="{{mix('front/js/desktop/app.js')}}" rel="stylesheet">
@endif

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto Condensed', 'Roboto']
        }
    });        
</script>