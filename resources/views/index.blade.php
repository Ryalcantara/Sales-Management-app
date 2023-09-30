@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 sm:ml-60">
  @include('partials.topbar')
<div style="margin-top: -30px">




<br>
<br>
<br>
<div style="height: 100vh; width: 100%">

  <canvas id="line-chart" width="900" height="200"></canvas>
</div>
</div>

<script type="text/javascript">
  new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: {!! json_encode($data->pluck('date_id')) !!},
      datasets: [{ 
          data: {!! json_encode($data->pluck('product_total')) !!},
          label: "Product Total",
          borderColor: "#3e95cd",
          fill: true
        },
        {
          data: {!! json_encode($data->pluck('service_amount')) !!},
          label: "Service Amount",
          borderColor: "#ff6384",
          fill: true
        },
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Total Amounts'
      },
      elements: {
        line: {
          tension: 0.4,
        }
      }
    }
  });
  </script>
  
  
  
@include('partials.footer')
