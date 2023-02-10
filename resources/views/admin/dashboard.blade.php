@extends('dashboard.base')

@section('content')
<section>
    <div class="container">
        <div class="row">
        <h3 class="pb-1 mb-4">Hello Admin !</h3>
        </div>
    </div>
</section>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Custemor</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $custemor }}</div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-user-group fa-2x text-gray-300"></i>
                    <!-- <i class="fas fa-fw fa-chalkboard-teacher fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Dokter</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dokter }}</div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-user-doctor fa-2x text-gray-300"></i>
                    <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaksi Sukses
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $sukses }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-sack-dollar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Transaksi Pending</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pending }}</div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-sack-dollar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div id="transaksi" class="apexcharts-canvas"></div>
</div>
@endsection

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('transaksi', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Data Transaksi'
    },
    xAxis: {
        categories: <?php echo json_encode($data_lable); ?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Transaksi',
        data: <?php echo json_encode($data_value); ?>

    }]
});
</script>
@endsection