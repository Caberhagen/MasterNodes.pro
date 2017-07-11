@include('layout.header')
<body>
@include('layout.sidebar')
<div class="container-fluid">
    @include('layout.logo')
    <div class="row middle">
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
        </div>
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="text-align: center;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                <a href="https://www.vultr.com/?ref=6877914"><img src="https://www.vultr.com/media/banner_1.png" width="728" height="90"></a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                <div class="alert alert-info">Want your Coin Listed here? Email us: <a href="mailto:addme@masternodes.pro">addme@masternodes.pro</a></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                <table width="100%">
                    <thead>
                    <tr>
                        <td></td>
                        <td>Coin</td>
                        <td>Total Master Nodes</td>
                        <td>Current USD Price</td>
                        <td>Required Coin's</td>
                        <td>What's a Node Worth</td>
                        <td>Daily Income</td>
                        <td>Weekly Income</td>
                        <td>Monthly Income</td>
                        <td>Yearly Income</td>
                        <td>Last Updated</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($coinList as $key => $one)
                        <tr><td><a href="https://{!! strtoupper($key) !!}.masternodes.pro" target="_blank"><img src="{!! $one['logo'] !!}" width="50vw"></a></td>
                            <td><a href="https://{!! strtoupper($key) !!}.masternodes.pro" target="_blank">{!! strtoupper($key) !!}</a></td>
                            <td>{!! $one['totalMasterNodes'] !!}</td>
                            <td>${!! number_format($one['currentUSDPrice'],2,'.','') !!}</td>
                            <td>{!! $one['masterNodeCoinsRequired'] !!} {!! strtoupper($key) !!}</td>
                            <td>${!! $one['masterNodeWorth'] !!}</td>
                            <td>${!! $one['income']['daily'] !!}</td>
                            <td>${!! $one['income']['weekly'] !!}</td>
                            <td>${!! $one['income']['monthly'] !!}</td>
                            <td>${!! $one['income']['yearly'] !!}</td>
                            <td>{!! $one['lastUpdated'] !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                <script data-cfasync=false src="//s.ato.mx/p.js#id=2194065&size=728x90"></script>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    </div>
    @include('layout.footer')
    <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    </div>
</div>
@include('layout.analytics')
</body>
</html>
