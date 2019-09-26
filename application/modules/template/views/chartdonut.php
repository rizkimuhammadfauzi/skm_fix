<script>
   var morrisDonut = Morris.Donut({
        element: 'donut-chart',
        data: [{
            label: "Pria",
            value: <?= $getDataJenisKelamin->pria ?>
        }, 
        {
            label: "Wanita",
            value: <?= $getDataJenisKelamin->wanita ?>
        }, 
         ],
        resize: true,
        colors: ['#00A5A8', '#FF7D4D']
    });
</script>