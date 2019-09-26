<script>

   var morrisBar =  Morris.Bar({
        element: 'bar-chart',
        data: [<?php foreach($getDataUsia as $usia){?><?="{y:'".$usia->pendidikan."',a:".$usia->total."}," ?><?php } ?>],
        xkey: 'y',
        ykeys: 'a',
        labels: ['Total '],
        barGap: 6,
        barSizeRatio: 0.35,
        smooth: true,
        gridLineColor: '#e3e3e3',
        numLines: 5,
        gridtextSize: 14,
        fillOpacity: 0.4,
        resize: true,
        yLabelFormat: function(y){return y != Math.round(y)?'':y;},
        
        barColors: ['#00A5A8', '#FF7D4D']
    });
</script>