<!-- <div class="card col-3 offset-sm-2 mt-5" style="width: 18rem;"> -->
<div class="card {{$row}}" style="width: 18rem;">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $text }}</h5>
        @if($value)
            <b>{{ $value }}</b> <br>
        @endif
        {{ $slot }}
    </div>
</div>