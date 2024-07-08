<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
    <div class="card bg-transparent border-0 text-center">
        <div class="card-img">

            @if ($membar->image !='')
                
            
            <img loading="lazy" decoding="async" src="{{ asset('storage/'.$membar->image ) }}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
            @endif

            @if ($membar->fb_url !='' || $membar->tw_url !='' || $membar->in_url !='')
                
            
            <ul class="card-social list-inline">
                @if ($membar->fb_url !='')
                    
               
                
                <li class="list-inline-item"><a class="facebook" target="_blank" href="{{ $membar->fb_url }}"><i class="fab fa-facebook"></i></a>
                </li>

                @endif

                @if ($membar->tw_url !='')
                <li class="list-inline-item"><a class="twitter" target="_blank" href="{{ $membar->tw_url }}"><i class="fab fa-twitter"></i></a>
                </li>
                @endif
                @if ($membar->in_url !='')
                <li class="list-inline-item"><a class="instagram" target="_blank" href="{{ $membar->in_url }}"><i class="fab fa-instagram"></i></a>
                </li>
                @endif
            </ul>
            @endif
        </div>
        <div class="card-body">
            <h3>{{ $membar->name }}</h3>
            <p>{{ $membar->designation }}</p>
        </div>
    </div>
</div>