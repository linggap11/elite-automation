<?= $this->extend('client/layout/template') ?>
<script src="assets/js/demo_pages/components_popups.js"></script>
<?= $this->section('content') ?>
<style>
    .brands {
        padding-right: 30px;
        font-size: 11px;
    }

    .brands-nopad {
        font-size: 11px;
    }

    .brand-logo {
        margin-bottom: 10px;
    }
</style>
<div class="content">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-bottom">
                <li class="nav-item">
                    <a href="#icon-only-tab1" class="nav-link active" data-toggle="tab">
                        <i class="fa fa-amazon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#icon-only-tab2" class="nav-link" id="myfav" data-toggle="tab" data-popup="tooltip" data-trigger="click">
                        <i class="fa fa-heart"></i>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="icon-only-tab1">
                    <span>
                        <p class="text-justify"><b>Purchasing Brand Approvals is a great idea and a strategic long term play for your Amazon FBA store. Getting "ungated" in a brand gives you a leg up on other sellers who are not approved for those brands. Less competition tends to garner higher sales volume as well as the potential for higher margins. </b></p>
                        <p class="text-justify"><b>Please see below for some of the brands we suggest. Please note that because someone is ungated in a specific brand, does not mean that any subsequent order will be only that brand. All orders will have a mix of unrestricted merchandise as well as restricted merchandise depending on availability. If you are interested in purchasing brand approvals please fill out the link below.</b></p>
                    </span>
                    <div class="text-center">
                        <div class="row" style="align-items: center; justify-content: center;">
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/michael_kors.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/lucky_brand.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/steve_madden.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/tommy_hilfiger.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/calvin_klein.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/dkny.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/guess.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/nike.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/adidas.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/under_armour.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/puma.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/tnf.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/coloumbia.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/champion.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/sperry.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/toms.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/timberland.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/convers.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/kate_spade.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/polo.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/anne_klein.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/kenneth_cole.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/fila.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/reebok.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/sam_edelmam.webp"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/fossil.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/levis.jpg"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/volcom.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/fox.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/vera.png"></div>
                            <div class="col-sm-2 brand-logo"><img src="/assets/images/brands/cole_haan.png"></div>
                        </div>  
            
                        <br>
                        <div class="table-responsive">
                            <table class="table" style="margin-left: auto;margin-right: auto;">
                                <tr>
                                    <th class="brands">MICHAEL KORS</td>
                                    <th class="brands">CHAMPION</td>
                                    <th class="brands-nopad">KENNETH COLE</td>
                                </tr>
                                <tr>
                                    <th class="brands">LUCKY BRAND</td>
                                    <th class="brands">SPERRY</td>
                                    <th class="brands-nopad">LEVI</td>
                                </tr>
                                <tr>
                                    <th class="brands">STEVE MADDEN</td>
                                    <th class="brands">UGG</td>
                                    <th class="brands-nopad">VOLCOM</td>
                                </tr>
                                <tr>
                                    <th class="brands">TOMMY HILFIGER</td>
                                    <th class="brands">TIMBERLAND</td>
                                    <th class="brands-nopad">FOX</td>
                                </tr>
                                <tr>
                                    <th class="brands">CALVIN KLEIN</td>
                                    <th class="brands">CONVERSE</td>
                                    <th class="brands-nopad">VERA BRADLEY</td>
                                </tr>
                                <tr>
                                    <th class="brands">DKNY</td>
                                    <th class="brands">KATE SPADE</td>
                                    <th class="brands-nopad">FOSSIL</td>
                                </tr>
                                <tr>
                                    <th class="brands">GUESS</td>
                                    <th class="brands">RALPH LAUREN POLO</td>
                                    <th class="brands-nopad">TOMS</td>
                                </tr>
                                <tr>
                                    <th class="brands">NIKE</td>
                                    <th class="brands">ANNE KLEIN</td>
                                    <th class="brands-nopad">COLE HAAN</td>
                                </tr>
                                <tr>
                                    <th class="brands">ADIDAS</td>
                                    <th class="brands">KENNETH COLE</td>
                                    <th class="brands-nopad">COLUMBIA</td>
                                </tr>
                                <tr>
                                    <th class="brands">UNDER ARMOUR</td>
                                    <th class="brands">FILA</td>
                                    <th class="brands-nopad">SAM EDELMAN</td>
                                </tr>
                                <tr>
                                    <th class="brands">PUMA</td>
                                    <th class="brands">REEBOK</td>
                                    <th class="brands-nopad">NORTH FACE</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="icon-only-tab2">
                    <div class="form-group">
                        <p class="font-weight-semibold">Your Brand Approval</p>
                        <form id="brand_approval">
                            <div class="border p-3 rounded">
                                <div class="row">
                                    <?php foreach ($brands as $brand) : ?>
                                        <?php if ($brand['checked'] == 1) : ?>
                                            <div class="col-md-2">
                                                <label class="custom-control custom-control-dark custom-checkbox mb-2">                                                    
                                                    <input type="checkbox" class="custom-control-input" checked disabled>                                                    
                                                    <span class="custom-control-label font-weight-bold"><?= $brand['brand_name'] ?></span>
                                                </label>
                                            </div>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>

                            <td class="text-center">
                                <?= $row['qty'] ?>
                            </td>
                            <td class="text-center">$ <?= $row['retail_value'] ?></td>
                            <td class="text-center">$ <?= $row['original_value'] ?></td>
                            <td class="text-center">$ <?= number_format($row['cost'], 2) ?></td>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /blocks with chart -->

                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="main"></div>
                        <?php
                        $vendorNames = array();
                        $vendorQty = array();
                        foreach (array_reverse($getVendorName->getResultArray()) as $vendor) {
                            array_push($vendorNames, $vendor['vendor']);
                            array_push($vendorQty, $vendor['qty']);
                        }

                        $vendorNames = json_encode($vendorNames);
                        $vendorQty = json_encode($vendorQty);
                        ?>
                        <script type="text/javascript">
                            // Main vars
                            var nameData = [],
                                valueData = [],
                                foregroundColor = '#1990FF',
                                backgroundColor = '#f5f5f5',
                                barWidth = 5;

                            var data = <?= $vendorQty ?>;

                            // Initialize the echarts instance based on the prepared dom
                            var myChart = echarts.init(document.getElementById('main'));
                            // Specify the configuration items and data for the chart
                            option = {
                                textStyle: {
                                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                                    fontSize: 14
                                },
                                // Chart grid

                                tooltip: {
                                    trigger: 'axis',
                                    show: true,
                                    trigger: 'item',
                                    padding: [20, 15],
                                    axisPointer: {
                                        // Use axis to trigger tooltip
                                        type: 'shadow' // 'shadow' as default; can also be 'line' or 'shadow'
                                    }
                                },
                                legend: {},
                                grid: {
                                    left: '35%',
                                    right: '8%',
                                    bottom: '3%',
                                    containLabel: false
                                },
                                xAxis: {
                                    show: false
                                },

                                yAxis: [{
                                        type: 'category',
                                        data: <?= $vendorNames ?>,
                                        axisLine: {
                                            show: false
                                        },
                                        splitLine: {
                                            show: false
                                        },
                                        axisTick: {
                                            show: false
                                        },
                                        axisLabel: {
                                            margin: 10,
                                            fontSize: 12,
                                            fontWeight: 500,
                                        }

                                    },
                                    {
                                        type: 'category',
                                        data: <?= $vendorQty ?>,
                                        axisLine: {
                                            show: false
                                        },
                                        splitLine: {
                                            show: false
                                        },
                                        axisTick: {
                                            show: false
                                        },
                                        axisLabel: {
                                            align: 'left',
                                            margin: 20,
                                            fontSize: 14,
                                            fontWeight: 500,

                                        }

                                    },

                                ],

                                series: [{
                                        name: 'Total Qty ( Top 15 )',

                                        type: 'bar',
                                        stack: 'total',
                                        data: <?= $vendorQty ?>,
                                        barWidth: barWidth,
                                        itemStyle: {
                                            color: foregroundColor,
                                            barBorderRadius: 30
                                        },
                                        z: 10,
                                        showBackground: true,
                                        backgroundStyle: {
                                            barBorderRadius: 30,
                                            color: backgroundColor
                                        }
                                    },


                                ]
                            };

                            // Display the chart using the configuration items and data just specified.
                            myChart.setOption(option);
                        </script>
                    </div>
                </div>
            </div>
            <!-- /multi level donut chart -->

        </div>
        <div class="col-xl-4">
            <!-- Multi level donut chart -->
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title">Cost Percentage </h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        
                        <div class="chart has-fixed-height" id="percentage"></div>
                        <?php
                        $fulfilledPercent = 0;
                        $clientCostPercent = 0;
                        
                        if (!is_null($totalFulfilled)) {
                            if (!is_null($totalFulfilled->total_fulfilled) && !is_null($totalInvest->total_client_cost)) {
                                $fulfilledPercent = ($totalFulfilled->total_fulfilled / $totalInvest->total_client_cost) * 100;
                                $clientCostPercent = 100 - $fulfilledPercent;
                            }
                        }

                        ?>
                        <script type="text/javascript">
                            // Initialize the echarts instance based on the prepared dom
                            var myChart = echarts.init(document.getElementById('percentage'));
                            // Specify the configuration items and data for the chart
                            option = {
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    orient: 'vertical',
                                    left: 'left'
                                },
                                series: [{
                                    name: 'Total',
                                    type: 'pie',
                                    radius: '50%',
                                    data: [{
                                            value: <?= number_format($totalFulfilled->total_fulfilled, 2, '.', '') ?>,
                                            name: 'Fulfilled <?= number_format($fulfilledPercent, 1) ?>%'
                                        },
                                        {
                                            value: <?= number_format(($totalInvest->total_client_cost), 2, '.', '') ?>,
                                            name: 'Remaining <?= number_format($clientCostPercent, 1) ?>%'
                                        }

                                    ],
                                    emphasis: {
                                        itemStyle: {
                                            shadowBlur: 10,
                                            shadowOffsetX: 0,
                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                        }
                                    }
                                }]
                            };

                            // Display the chart using the configuration items and data just specified.
                            myChart.setOption(option);
                        </script>
                    </div>
                </div>
            </div>
            <!-- /multi level donut chart -->

        </div>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    $(document).ready(function() {
        $('#myfav').tooltip('show');
    });
</script>

<?= $this->endSection() ?>