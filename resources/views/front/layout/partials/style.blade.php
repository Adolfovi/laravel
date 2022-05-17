@if($agent->isMobile())
    <link href="{{mix('front/css/mobile/app-mobile.css')}}" rel="stylesheet">
@endif

@if($agent->isDesktop())
    <link href="{{mix('front/css/desktop/app.css')}}" rel="stylesheet">
@endif