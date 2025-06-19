@php
    $color = $pack->color ?? 'dark';
@endphp
<div class="card text-center shadow-sm">
    <div class="card-header bg-{{ $color }} text-white position-relative">
        <h4 class="mb-0">{{ $pack->name }}</h4>
        @if($pack->featured)
            <span class="badge bg-primary position-absolute top-0 start-50 translate-middle p-1">
                Más Popular
            </span>
        @endif
    </div>
    <div class="card-body">
        <h5 class="lead text-muted mb-0">{{ json_decode($pack->info, true)[0] }}</h5>
        <div class="m-1"></div>

        <div class="d-flex justify-content-center align-items-baseline">
            <small class="my-3">Precio</small>
            <div class="m-1"></div>
            <h3 class="my-2 text-{{ $color }} h2">U$S {{ $pack->offer_price }}</h3>
            <small class="m-3 text-{{ $color }}"><del>U$S {{ $pack->price }}</del></small>
        </div>

        <table class="table text-start">
            <tbody>
                @foreach(json_decode($pack->items, true) as $item)
                    <tr>
                        <td>{!! str_replace('@', '<span class="text-primary">@</span>', str_replace('tuempresa.com.uy', '<span class="text-primary">tuempresa.com.uy</span>', $item['name'])) !!}</td>
                        <td>
                            @if($item['included'])
                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-times-circle text-danger" aria-hidden="true"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>{{ json_decode($pack->more_info, true)[0] }}</td>
                    <td><i class="fa fa-calendar-check text-secondary" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
        <a href="#contact" class="btn btn-{{ $color }} mt-3">Más información</a>
    </div>
</div>
