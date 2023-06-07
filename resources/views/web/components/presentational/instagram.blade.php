<div class=" row no-gutters popup-gallery">
    @isset($data[instagram_feed])
    @foreach($data[instagram_feed] as $feed)
    <div class="col-xl-1 col-lg-2 col-sm-3 col-4">
        <a href="{{$item['permalink']}}" target="_blank" class="portfolio-box">
            <img src="{{$item['url']}}" class="img-fluid" style="width:100%;height:100%;" alt="">
        </a>
    </div>
    @endforeach
    @endisset
</div>