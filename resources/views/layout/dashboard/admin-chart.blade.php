{{-- Start Grafik Verifikasi Unit --}}
<div class="row">
  <div class="col-md-12">
    <div class="card border-success text-center">
      <div class="card-header"><h2>Order PCHT {{ now()->format('F Y') }}</h2></div>
      <div class="card-header text-white bg-success"><h1 style="font-size: 90px">{{ number_format($totalOrderPcht) }} LK</h1></div>
      <div class="card-body">
        <DIV class="row">
          <div class="col-md-6">
            <div class="card bg-info text-center">
              <div class="card-header text-white"><h4>Inschiet %</h4></div>
              <div class="card-body bg-white">
                  <h1>{{ number_format($totalRusakPcht) }} ({{ number_format($inschietPcht,2) }} %)</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-info text-center">
              <div class="card-header text-white"><h4>Jumlah Retur PCHT Tahun {{ now()->format('Y') }}</h4></div>
              <div class="card-body bg-white">
                  <h1>{{ number_format($totalReturPcht,0) }} LK</h1>
              </div>
            </div>
          </div>
        </DIV>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-12 col-md-12 mb-sm-2 mb-0">
            <span class="text-muted">Progress Order PCHT {{ now()->format('F Y') }}</span><br>
            <strong style="margin-top:15px">{{ number_format($progressPcht,2) }} % = ( {{ number_format($sisaOrderPcht) }} )</strong>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $progressPcht }}%" aria-valuenow="{{ $progressPcht }}" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{ 100 - $progressPcht }}%" aria-valuenow="{{ 100 - $progressPcht }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
{{-- End Grafik Verifikasi Unit --}}

<div class="row">
  <div class="col-md-6">
    <div class="card border-success text-center">
      <div class="card-header bg-success text-white">
        <h4 class="card-title mb-0">Statistik Verifikasi Unit Pita Cukai</h4>
        <div class="medium text-muted">Tahun {{ now()->format('Y') }}</div>
      </div>
      <div class="card-body">
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statVerif" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card border-warning text-center">
      <div class="card-header bg-warning">
        <h4 class="card-title mb-0">Statistik Retur Unit Pita Cukai</h4>
        <div class="medium text-muted">Tahun {{ now()->format('Y') }}</div>
      </div>
      <div class="card-body">
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statRetur" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
