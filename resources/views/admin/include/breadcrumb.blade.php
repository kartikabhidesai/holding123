<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="d-inline-block">
                <h5>{{ $header['title'] }}</h5>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    @php 
                    $count = count($header['breadcrumb']); 
                    $temp = 1;
                    @endphp 
                    @foreach($header['breadcrumb'] as $key => $value)

                    @php $value = (empty($value)) ? 'javascript:;' : $value; @endphp
                    @if($temp!=$count)
                    <li class="breadcrumb-item"><a href="{{ $value }}">{{ $key }}</a>
                    </li>
                    @else
                    <li class="breadcrumb-item">{{ $key }}
                    </li>
                    @endif

                    @php $temp = $temp+1; @endphp
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>