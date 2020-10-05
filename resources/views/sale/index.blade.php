<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>//ライブラリ読み込み

<div class="chart-container" style="position: relative; width: 100%; height: 300px;">//スマホ対応用のDIV
    <canvas id="myChart"></canvas>//ここにグラフが挿入されます。
</div>

<script>//以下がグラフデータ
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',//グラフの種類
        data: {
            labels: ['１月', '２月', '３月', '４月', '５月', '６月', '７月'],
            datasets: [{
                label: 'マイグラフ',
                data: [25, 10, 5, 2, 20, 30, 45],
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)'
            }]
        },
        options: {
            maintainAspectRatio: false
        }
    });
</script>
