<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="main-body">
                    <div class="fruit-items">
                        <!--by default aligned in two rows-->
                        <div class="row1">
                            <div class="banana">
                                <div class="name">Banana</div>
                                <span class="banana-icon"></span><!-- add an icon-->
                            </div>
                            <!--name and icon-->
                            <div class="apple">
                                <div class="name">Apple</div>
                                <span class="apple-icon"></span>
                            </div>
                            <div class="litchi">
                                <div class="name">Litchi</div>
                                <span class="litchi-icon"></span>
                            </div>
                            <div class="grapes">
                                <div class="name">Grapes</div>
                                <span class="grapes-icon"></span>
                            </div>
                            <div class="papaya">
                                <div class="name">Papaya</div>
                                <span class="papaya-icon"></span>
                            </div>
                        </div> <!-- in default screen size 5 times displayed in row1-->
                        <div class="row2">
                            <div class="tomato">
                                <div class="name">Tomato</div>
                                <span class="tomato-icon"></span>
                            </div>
                            <div class="mango">
                                <div class="name">Mango</div>
                                <span class="mango-icon"></span>
                            </div>
                            <div class="jackfruit">
                                <div class="name">Jackfruit</div>
                                <span class="jackfruit-icon"></span>
                            </div>
                            <div class="plum">
                                <div class="name">Plum</div>
                                <span class="plum-icon"></span>
                            </div>
                            <div class="lemon">
                                <div class="name">Sweet-Lemon</div>
                                <span class="lemon-icon"></span>
                            </div>
                        </div>
                        <!--5 items in row2-->
                        <!-- css rules to be applied-->
                    </div>
                    <div class="graph">
                        <!-- random dataset currently used-->

                        <!-- This is just a sample graph to test chart.js-->
                        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

                        <!-- <script>
                            var xyValues = [{
                                    x: 50,
                                    y: 7
                                },
                                {
                                    x: 60,
                                    y: 8
                                },
                                {
                                    x: 70,
                                    y: 8
                                },
                                {
                                    x: 80,
                                    y: 9
                                },
                                {
                                    x: 90,
                                    y: 9
                                },
                                {
                                    x: 100,
                                    y: 9
                                },
                                {
                                    x: 110,
                                    y: 10
                                },
                                {
                                    x: 120,
                                    y: 11
                                },
                                {
                                    x: 130,
                                    y: 14
                                },
                                {
                                    x: 140,
                                    y: 14
                                },
                                {
                                    x: 150,
                                    y: 15
                                }
                            ];

                            new Chart("myChart", {
                                type: "scatter",
                                data: {
                                    datasets: [{
                                        pointRadius: 4,
                                        pointBackgroundColor: "rgb(0,0,255)",
                                        data: xyValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        xAxes: [{
                                            ticks: {
                                                min: 40,
                                                max: 160
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                min: 6,
                                                max: 16
                                            }
                                        }],
                                    }
                                }
                            });
                        </script> -->

                    </div><!-- display graphical data-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>