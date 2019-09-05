<script type="text/javascript">
    jQuery(document).ready(function ($)
    {
        $('.pie').sparkline('html', {
            type: 'pie',
            borderWidth: 0,
            sliceColors: ['#3d4554', '#ee4749', '#00b19d']
        });


        $(".chart").sparkline([1, 2, 3, 1], {
            type: 'pie',
            barColor: '#485671',
            height: '110px',
            barWidth: 10,
            barSpacing: 2});

        var map = $("#map");

        map.vectorMap({
            map: 'europe_merc_en',
            zoomMin: '3',
            backgroundColor: '#00a651',
            focusOn: {x: 0.5, y: 0.8, scale: 3}
        });



        // Rickshaw
        var seriesData = [[], []];

        var random = new Rickshaw.Fixtures.RandomData(50);

        for (var i = 0; i < 90; i++)
        {
            random.addData(seriesData);
        }

        var graph = new Rickshaw.Graph({
            element: document.getElementById("rickshaw-chart-demo-2"),
            height: 217,
            renderer: 'area',
            stroke: false,
            preserve: true,
            series: [{
                    color: '#359ade',
                    data: seriesData[0],
                    name: 'Page Views'
                }, {
                    color: '#73c8ff',
                    data: seriesData[1],
                    name: 'Unique Users'
                }, {
                    color: '#e0f2ff',
                    data: seriesData[1],
                    name: 'Bounce Rate'
                }
            ]
        });

        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            xFormatter: function (x) {
                return new Date(x * 1000).toString();
            }
        });

        var legend = new Rickshaw.Graph.Legend({
            graph: graph,
            element: document.getElementById('rickshaw-legend')
        });

        var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
            graph: graph,
            legend: legend
        });

        setInterval(function () {
            random.removeData(seriesData);
            random.addData(seriesData);
            graph.update();

        }, 500);

    });
</script>

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h1>
                <?php echo date(" jS  F Y "); ?>
            </h1>
            
            <h3>Welcome to the site <strong>Admin panel</strong></h3>

        </div>
    </div>

</div>



<?php
     foreach ($previledge as $r ){ ?>
        
		<?php
		
			if($r['user_id']==1)
				{?>

<div class="row">
    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-red">
            <div class="icon"><i class="entypo-users"></i></div>
            <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

            <h3>Total Import Cost</h3>
            <p>so far in our blog, and our website.</p>
        </div>

    </div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-green">
            <div class="icon"><i class="entypo-chart-bar"></i></div>
            <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

            <h3>Total Sales</h3>
            <p>this is the average value.</p>
        </div>

    </div>

    <div class="clear visible-xs"></div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-mail"></i></div>
            <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

            <h3>Total Profit</h3>
            <p>messages per day.</p>
        </div>

    </div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-blue">
            <div class="icon"><i class="entypo-rss"></i></div>
            <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

            <h3>Balance</h3>
            <p>on our site right now.</p>
        </div>

    </div>
</div>
<?php }   
    else
        {?>
<div class="row" style="display: none"></div>
<?php }?>
   <?php  } ?>

<br>


<div class="row2" style="display: none">

    <div class="col-sm-12">

        <div class="row">

            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">New vs Returning Visitors</div>

                        <div class="panel-options">
                            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <center><span class="chart"></span></center>
                    </div>
                </div>

            </div>

            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Accounting Users</div>

                        <div class="panel-options">
                            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>admin@gmail.com</td>
                                <td>CEO</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>User-1</td>
                                <td>user@gmail.com</td>
                                <td>Manager</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>User-2</td>
                                <td>user2@gmail.com</td>
                                <td>Clerk</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        Real Time Stats
                        <br />
                        <small>current server uptime</small>
                    </h4>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div id="rickshaw-chart-demo-2">
                    <div id="rickshaw-legend"></div>
                </div>
            </div>
        </div>

    </div>



</div>


