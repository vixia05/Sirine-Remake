{{-- Start Grafik Verifikasi Pegawai --}}
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-8">
        <h4 class="card-title mb-0"> Data Verifikasi {{Auth::user()->nama}}</h4>
        <div class="small text-muted">Bulan {{ now()->format('F Y') }}</div>
      </div>
    </div>
    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
      <canvas class="chart" id="kinerjaUser" height="300"></canvas>
    </div>
  </div>
  <div class="card-footer">
    <div class="row text-center">
      <div class="col-sm-12 col-md mb-sm-2 mb-0">
        <div class="text-muted mt-1 mb-1">Jumlah Verifikasi {{Auth::user()->nama}}</div>
        <strong>{{ number_format($sumVerif) }} Lembar ({{ number_format($goalVerif,2) }}%)</strong>
        <div class="progress progress-mb-3 mt-2">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $goalVerif }}%" aria-valuenow="{{ $goalVerif }}" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{ 100 - $goalVerif }}%" aria-valuenow="{{ 100 - $goalVerif }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <div class="col-sm-12 col-md mb-sm-2 mb-0">
        <div class="text-muted mt-1 mb-1">Jumlah Rata -  Rata Verifikasi</div>
        <strong>{{ number_format($avgVerif) }} Lembar ({{ 100 }}%)</strong>
        <div class="progress progress-mb-3 mt-2">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: {{ 100 }}%" aria-valuenow="{{ 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Grafik Verifikasi Pegawai --}}
{{-- Start Jumlah Retur Pegawai --}}
<div class="row">
  <div class="col-md-12">
    <div class="card border-success text-center">
      <div class="card-body">
        <DIV class="row">
          <div class="col-md-6">
            <div class="card bg-info text-center">
              <div class="card-header text-white"><h4>Jumlah Retur {{ Auth::user()->nama }} Tahun {{ now()->format('Y') }}</h4></div>
              <div class="card-body bg-white">
                  <h1>{{ number_format($sumDefect) }} LK</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-info text-center">
              <div class="card-header text-white"><h4>Jumlah Retur Unit Tahun {{ now()->format('Y') }}</h4></div>
              <div class="card-body bg-white">
                  <h1>{{ number_format($sumDefectUnit) }} LK</h1>
              </div>
            </div>
          </div>
        </DIV>
      </div>
    </div>
  </div>
</div>
{{-- End Jumlah Kelolosan Pegawai --}}
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <h4 class="card-title mb-0">Statistik Verifikasi (PCHT) {{Auth::user()->nama}}</h4>
            <div class="small text-muted mb-1">Tahun {{ now()->format('Y') }}</div>
          </div>
        </div>
        <div class="chart-wrapper" style="height:300px">
          <canvas class="chart" id="statVerif" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <h4 class="card-title mb-0">Statistik Retur Unit Pita Cukai</h4>
            <div class="small text-muted mb-1">Tahun {{ now()->format('Y') }}</div>
          </div>
        </div>
        <div class="chart-wrapper" style="height:300px">
          <canvas class="chart" id="statRetur" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
