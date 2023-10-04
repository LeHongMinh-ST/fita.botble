<div class="serch-content">
    <h3>{{ $config['name'] }}</h3>
    <div class="form-group">
        <form action="{{ route('public.search') }}" id="frmSearch" method="get">
            <input type="text" class="form-control" name="q" value="{{ Request::input('q') }}" placeholder="{{ $config['placeholder'] }}">
            <button type="submit" class="src-btn">
                <i class="flaticon-search"></i>
            </button>
        </form>

    </div>
</div>
