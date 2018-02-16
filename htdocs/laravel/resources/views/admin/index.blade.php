@extends('master')
@section('content')


    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {
            }
        </script>

        @parent
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>
                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->

                    <div class="page-header">
                        <h1>
                            Dashboard
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                overview &amp; stats
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="row">
                                <div class="space-6"></div>

                                <div class="col-sm-7 infobox-container">
                                    <div class="infobox infobox-green">
                                        <div class="infobox-icon">
                                            <i class="ace-icon fa fa-comments"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">32</span>
                                            <div class="infobox-content">Carpost counts</div>
                                        </div>

                                    </div>

                                    <div class="infobox infobox-blue">
                                        <div class="infobox-icon">
                                            <i class="ace-icon fa fa-twitter"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">{{$sub_counts}}</span>
                                            <div class="infobox-content">Subscribers counts</div>
                                        </div>

                                        <div class="badge badge-success">
                                            +32%
                                            <i class="ace-icon fa fa-arrow-up"></i>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-pink">
                                        <div class="infobox-icon">
                                            <i class="ace-icon fa fa-shopping-cart"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">{{$new_counts}}</span>
                                            <div class="infobox-content">news counts</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-red">
                                        <div class="infobox-icon">
                                            <i class="ace-icon fa fa-flask"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">{{$mem_counts}}</span>
                                            <div class="infobox-content">Members count</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-orange2">
                                        <div class="infobox-chart">
                                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">{{$cnt_counts}}</span>
                                            <div class="infobox-content">Contacts Counts</div>
                                        </div>


                                    </div>

                                    <div class="infobox infobox-blue2">
                                        <div class="infobox-progress">
                                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                                <span class="percent">42</span>%
                                            </div>
                                        </div>


                                    </div>

                                    <div class="space-6"></div>

                                    <div class="infobox infobox-green infobox-large infobox-dark">
                                        <div class="infobox-progress">
                                            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">

                                                <span class="percent">{{$mem_ban_counts}}</span>
                                            </div>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Members</div>
                                            <div class="infobox-content">banned counts</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-blue infobox-large infobox-dark">
                                        <div class="infobox-chart">
                                            <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Carspost Banned counts</div>
                                            <div class="infobox-content">{{$car_ban_counts}}</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-grey infobox-large infobox-dark">
                                        <div class="infobox-icon">
                                            <i class="ace-icon fa fa-download"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">Visit counts</div>
                                            @foreach($v_c as $vc)
                                            <div class="infobox-content">{{$vc->visit_counts}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="vspace-12-sm"></div>

                            </div><!-- /.row -->

                            <div class="hr hr32 hr-dotted"></div>


                            <div class="hr hr32 hr-dotted"></div>


                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Myanusedcars&copy; 2016-2017
						</span>

                    &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
						</span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

@endsection
