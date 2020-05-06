@include('WaiterPartial.header')
@include('flash-message')
<head><title>Receipt</title>

<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12 col-xxxl-6">
                <div class="element-wrapper"><h6 class="element-header">Orders Processed</h6>
                    <button class="btn btn-secondary" id="printButton">Print</button>
                    <div class="container">
                        <div class="row">
                            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" id="receipt">
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="receipt-left">
                                                <h1>Receipt</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reps as $rep)
                                        <tr>
                                            <td class="col-md-9">Payment for <b>{{$rep->name}}</b></td>
                                            <td class="col-md-3"><i class="fa fa-inr"></i>Ksh: {{$rep->price}}/-</td>
                                        </tr>
                                        @endforeach
                                        <tr>

                                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>Ksh: {{$total}}/-</strong></h2></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <i>Served By: <b>{{$name->user->name}}</b></i>
                                    <br>
                                    <br>
                                    <form action="{{url('waiterCompleteOrder')}}" method="post">
                                        @csrf
                                        <button class="btn btn-secondary btn-block">Back to Inventory</button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="d-none d-xxxl-block col-xxxl-6">
                <div class="element-wrapper">
                    <div class="element-actions">
                        <form class="form-inline justify-content-sm-end"><select
                                class="form-control form-control-sm rounded">
                                <option value="Pending">Today</option>
                                <option value="Active">Last Week</option>
                                <option value="Cancelled">Last 30 Days</option>
                            </select></form>
                    </div>
                    <h6 class="element-header">Inventory Stats</h6>
                    <div class="element-box">
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Eyeglasses</span></div>
                                <div class="bar-label-right"><span
                                        class="info">25 items / 10 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 70%">
                                    <div class="bar-level-3" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Outwear</span></div>
                                <div class="bar-label-right"><span
                                        class="info">18 items / 7 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 40%">
                                    <div class="bar-level-3" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Shoes</span></div>
                                <div class="bar-label-right"><span
                                        class="info">15 items / 12 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 60%">
                                    <div class="bar-level-3" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="os-progress-bar primary">
                            <div class="bar-labels">
                                <div class="bar-label-left"><span class="bigger">Jeans</span></div>
                                <div class="bar-label-right"><span
                                        class="info">12 items / 4 remaining</span></div>
                            </div>
                            <div class="bar-level-1" style="width: 100%">
                                <div class="bar-level-2" style="width: 30%">
                                    <div class="bar-level-3" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 border-top pt-3">
                            <div class="element-actions d-none d-sm-block">
                                <form class="form-inline justify-content-sm-end"><select
                                        class="form-control form-control-sm form-control-faded">
                                        <option selected="true">Last 30 days</option>
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>Today</option>
                                    </select></form>
                            </div>
                            <h6 class="element-box-header">Inventory History</h6>
                            <div class="el-chart-w">
                                <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="50"
                                        id="liteLineChartV3" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="display-type"></div>
</div>
<script src="asset/bower_components/jquery/dist/jquery.min.js"></script>
<script src="asset/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="asset/bower_components/moment/moment.js"></script>
<script src="asset/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="asset/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="asset/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="asset/bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="asset/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="asset/bower_components/dropzone/dist/dropzone.js"></script>
<script src="asset/bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="asset/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="asset/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="asset/bower_components/tether/dist/js/tether.min.js"></script>
<script src="asset/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/util.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/button.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="{{asset('asset/bower_components/bootstrap/js/dist/modal.js')}}"></script>
<script src="asset/bower_components/bootstrap/js/dist/tab.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="asset/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="asset/js/demo_customizer5739.js?version=4.5.0"></script>
<script src="asset/js/main5739.js?version=4.5.0"></script>
<script>
    $getProdId = $('#getProdId').val();
    $('#getId').append($getProdId);
    $('#printButton').click(function () {
        $('#receipt').show();
        window.print();

    })
</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:55:47 GMT -->
</html>
