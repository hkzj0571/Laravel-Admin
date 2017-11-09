@extends('admin.index')

@section('wrapper')
    <!--state overview start-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h1>22</h1>
                    <p>New Users</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="value">
                    <h1>140</h1>
                    <p>Sales</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol yellow">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="value">
                    <h1>345</h1>
                    <p>New Order</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <div class="value">
                    <h1>34,500</h1>
                    <p>Total Profit</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end-->

    <div class="row">
        <div class="col-lg-8">
            <!--custom chart start-->
            <div class="border-head">
                <h3>Earning Graph</h3>
            </div>
            <div class="custom-bar-chart">
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top" style="height: 80%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top" style="height: 50%;"></div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top" style="height: 40%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top" style="height: 55%;"></div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top" style="height: 20%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top" style="height: 39%;"></div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top" style="height: 75%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">AUG</div>
                    <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top" style="height: 45%;"></div>
                </div>
                <div class="bar ">
                    <div class="title">SEP</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top" style="height: 50%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">OCT</div>
                    <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top" style="height: 42%;"></div>
                </div>
                <div class="bar ">
                    <div class="title">NOV</div>
                    <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top" style="height: 60%;"></div>
                </div>
                <div class="bar doted">
                    <div class="title">DEC</div>
                    <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top" style="height: 90%;"></div>
                </div>
            </div>
            <!--custom chart end-->
        </div>
        <div class="col-lg-4">
            <!--new earning start-->
            <div class="panel terques-chart">
                <div class="panel-body chart-texture">
                    <div class="chart">
                        <div class="heading">
                            <span>Friday</span>
                            <strong>$ 57,00 | 15%</strong>
                        </div>
                        <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"><canvas width="324" height="75" style="display: inline-block; width: 324px; height: 75px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                <div class="chart-tittle">
                    <span class="title">New Earning</span>
                    <span class="value">
                                  <a href="#" class="active">Market</a>
                                  |
                                  <a href="#">Referal</a>
                                  |
                                  <a href="#">Online</a>
                              </span>
                </div>
            </div>
            <!--new earning end-->

            <!--total earning start-->
            <div class="panel green-chart">
                <div class="panel-body">
                    <div class="chart">
                        <div class="heading">
                            <span>June</span>
                            <strong>23 Days | 65%</strong>
                        </div>
                        <div id="barchart"><canvas width="294" height="90" style="display: inline-block; width: 294px; height: 90px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                <div class="chart-tittle">
                    <span class="title">Total Earning</span>
                    <span class="value">$, 76,54,678</span>
                </div>
            </div>
            <!--total earning end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!--user info table start-->
            <section class="panel">
                <div class="panel-body">
                    <a href="#" class="task-thumb">
                        <img style="width: 90px;height: 83px;" src="data:image/jpeg;base64,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" alt="">
                    </a>
                    <div class="task-thumb-details">
                        <h1><a href="#">Anjelina Joli</a></h1>
                        <p>Senior Architect</p>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>
                            <i class="fa fa-tasks"></i>
                        </td>
                        <td>New Task Issued</td>
                        <td> 02</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td>Task Pending</td>
                        <td> 14</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td>Inbox</td>
                        <td> 45</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-bell"></i>
                        </td>
                        <td>New Notification</td>
                        <td> 09</td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--user info table end-->
        </div>
        <div class="col-lg-8">
            <!--work progress start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="task-progress">
                        <h1>Work Progress</h1>
                        <p>Anjelina Joli</p>
                    </div>
                    <div class="task-option">
                        <select class="styled hasCustomSelect" style="-webkit-appearance: menulist-button; width: 98px; position: absolute; opacity: 0; height: 39px; font-size: 12px;">
                            <option>Anjelina Joli</option>
                            <option>Tom Crouse</option>
                            <option>Jhon Due</option>
                        </select><span class="customSelect styled" style="display: inline-block;"><span class="customSelectInner" style="width: 76px; display: inline-block;">Anjelina Joli</span></span>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            Target Sell
                        </td>
                        <td>
                            <span class="badge bg-important">75%</span>
                        </td>
                        <td>
                            <div id="work-progress1"><canvas width="47" height="20" style="display: inline-block; width: 47px; height: 20px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Product Delivery
                        </td>
                        <td>
                            <span class="badge bg-success">43%</span>
                        </td>
                        <td>
                            <div id="work-progress2"><canvas width="47" height="22" style="display: inline-block; width: 47px; height: 22px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Payment Collection
                        </td>
                        <td>
                            <span class="badge bg-info">67%</span>
                        </td>
                        <td>
                            <div id="work-progress3"><canvas width="47" height="22" style="display: inline-block; width: 47px; height: 22px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Work Progress
                        </td>
                        <td>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>
                            <div id="work-progress4"><canvas width="47" height="22" style="display: inline-block; width: 47px; height: 22px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Delivery Pending
                        </td>
                        <td>
                            <span class="badge bg-primary">15%</span>
                        </td>
                        <td>
                            <div id="work-progress5"><canvas width="47" height="22" style="display: inline-block; width: 47px; height: 22px; vertical-align: top;"></canvas></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--work progress end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!--timeline start-->
            <section class="panel">
                <div class="panel-body">
                    <div class="text-center mbot30">
                        <h3 class="timeline-title">Timeline</h3>
                        <p class="t-info">This is a project timeline</p>
                    </div>

                    <div class="timeline">
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon red"></span>
                                        <span class="timeline-date">08:25 am</span>
                                        <h1 class="red">12 July | Sunday</h1>
                                        <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon green"></span>
                                        <span class="timeline-date">10:00 am</span>
                                        <h1 class="green">10 July | Wednesday</h1>
                                        <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon blue"></span>
                                        <span class="timeline-date">11:35 am</span>
                                        <h1 class="blue">05 July | Monday</h1>
                                        <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                        <div class="album">
                                            <a href="#">
                                                <img alt="" src="img/sm-img-1.jpg">
                                            </a>
                                            <a href="#">
                                                <img alt="" src="img/sm-img-2.jpg">
                                            </a>
                                            <a href="#">
                                                <img alt="" src="img/sm-img-3.jpg">
                                            </a>
                                            <a href="#">
                                                <img alt="" src="img/sm-img-1.jpg">
                                            </a>
                                            <a href="#">
                                                <img alt="" src="img/sm-img-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon purple"></span>
                                        <span class="timeline-date">3:20 pm</span>
                                        <h1 class="purple">29 June | Saturday</h1>
                                        <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                        <div class="notification">
                                            <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon light-green"></span>
                                        <span class="timeline-date">07:49 pm</span>
                                        <h1 class="light-green">10 June | Friday</h1>
                                        <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                </div>
            </section>
            <!--timeline end-->
        </div>
        <div class="col-lg-4">
            <!--revenue start-->
            <section class="panel">
                <div class="revenue-head">
                              <span>
                                  <i class="icon-bar-chart"></i>
                              </span>
                    <h3>Revenue</h3>
                    <span class="rev-combo pull-right">
                                 June 2013
                              </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 text-center">
                            <div class="easy-pie-chart">
                                <div class="percentage easyPieChart" data-percent="35" style="width: 135px; height: 135px; line-height: 135px;"><span>35</span>%<canvas width="270" height="270" style="width: 135px; height: 135px;"></canvas></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="chart-info chart-position">
                                <span class="increase"></span>
                                <span>Revenue Increase</span>
                            </div>
                            <div class="chart-info">
                                <span class="decrease"></span>
                                <span>Revenue Decrease</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer revenue-foot">
                    <ul>
                        <li class="first active">
                            <a href="javascript:;">
                                <i class="icon-bullseye"></i>
                                Graphical
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" icon-th-large"></i>
                                Tabular
                            </a>
                        </li>
                        <li class="last">
                            <a href="javascript:;">
                                <i class=" icon-align-justify"></i>
                                Listing
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!--revenue end-->
            <!--features carousel start-->
            <section class="panel">
                <div class="flat-carousal">
                    <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2220px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px);"><div class="owl-item active" style="width: 370px;"><div class="item">
                                        <h1>Flatlab is new model of admin dashboard for happy use</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 370px;"><div class="item">
                                        <h1>Fully responsive and build with Bootstrap 3.0</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 370px;"><div class="item">
                                        <h1>Responsive Frontend is free if you get this.</h1>
                                        <div class="text-center">
                                            <a href="javascript:;" class="view-all">View All</a>
                                        </div>
                                    </div></div></div></div>


                        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
                </div>
                <div class="panel-body">
                    <ul class="ft-link">
                        <li class="active">
                            <a href="javascript:;">
                                <i class="icon-reorder"></i>
                                Sales
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" icon-calendar-empty"></i>
                                promo
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" icon-camera"></i>
                                photo
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" icon-circle"></i>
                                other
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!--features carousel end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!--latest product info start-->
            <section class="panel post-wrap pro-box">
                <aside>
                    <div class="post-info">
                        <span class="arrow-pro right"></span>
                        <div class="panel-body">
                            <h1><strong>popular</strong> <br> Brand of this week</h1>
                            <div class="desk yellow">
                                <h3>Dimond Ring</h3>
                                <p>Lorem ipsum dolor set amet lorem ipsum dolor set amet ipsum dolor set amet</p>
                            </div>
                            <div class="post-btn">
                                <a href="javascript:;">
                                    <i class="icon-chevron-sign-left"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon-chevron-sign-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="post-highlight yellow v-align">
                    <div class="panel-body text-center">
                        <div class="pro-thumb">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAZAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQAAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQICAgICAgICAgICAwMDAwMDAwMDAwEBAQEBAQECAQECAgIBAgIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMD/8AAEQgAcABwAwERAAIRAQMRAf/EAJUAAQACAAcBAAAAAAAAAAAAAAAICQEDBAUGBwoCAQEAAwEBAAAAAAAAAAAAAAAAAQIDBAUQAAEEAQMDAgUCBAYDAQAAAAECAwQFBgARByESCDETQVEiFAlhcfCRwSOBMkIkFRZSYkMlEQACAgEDAQcDAwUAAAAAAAAAARECAyExQRLwUWFxgSIEoeETkcEysfFCcqL/2gAMAwEAAhEDEQA/APfxoBoBoBoBoBoDDcf00ACgfQ7/ALaSN9thuPXfp/Hr8tAY6AaAaAaAaAaAaAaAaAaAj75Mc3TeAOKrnkCpwXIeSbiESmDimNMe/PeaYjSrG1tJA6KFbSVMJ+S+E/3HEthtGylgiaqXD0QKQsP89Pyp+XWQU0Dx74y8dvHjj+ZHtp1plfJtHnHI3KcGtbnsmos5WDTL7j/DaOCqjK3pDa7SdKL6mwhASVBO7+M7VpfFZfgvKlttyk59qq3ExDeluGYvPjqrOys8iS2iI/2biVrpGm7O6q/yk/Jr4/crW0fmvDuEfJrx2hNby8j47obXhzyNqG4brMWTc0PGsfLuUsP5Mp7N+U0qLHiS66agutpdCe7cUyfGy48adnRtxL1onPdMvdPuRGH5nx/kWapKjier/qKz6KCzbxX8jXvJDBbHJLjjvJOJsrpLZuuyHj7L1RxkdC3ZQI11QG7iskuU9tOpJzLkivkBMqE4oocTsUKVm004ZtKexJ/UEjQDQDQDQDQDQDQDQDQHW3LOHuZxgt9RMMtSJb0KQqJHfAUzKd9hxsw3Qr6SiW0tTZ36fV1+Yvisq2938X2/uQ9jyYZbzVzJ4PZrnvCGP399gj0yY9M42j22aUGOW1u1Yrl3tdhtO5yFEvaf7h5Tio6IzyEfeQ4zaYiyULZGmbNkdVXHVPpvXbmsQ1uojb27bwzntgV7zWyo2nrD0crXSd13rjxJT8KVXkTn2SYjzfz7yvyA5PseL14Y1gWLPRsNh41k2UVz11eLtLjGIVe8Mpoq2WymS5ClI2kJQXB3JATf8uTNeMidWv8AF26o9q0s1payalOYhx4l8Xx8WCjqnVy25SanXRpNqPJrlzpCL1/EfgTDvHHhLGeO8Kx9OO1yfeupzDsyfbW9jcWqW3p9zkt9by595kmTWi0h2ZOnSH5Uhw7rWdgBjkiYXCgvRNLWPQkyPj+/wHz+frrMuY6AaAaAaAaAaAaAaAaA2m0uIVUgKkOKW8tK1MxGU+7KeDSSpxaGgpOzLSQVOOKKW20glSgBoDzsfmT5t8NbDiKOvy0p0vYrdZHX0PENBxXV12S+SnktkUZbzb/F/CtauC5cO1SLh2O7IyZHtU1XKabU27KPchXRifS+0fd+XrJS9XCsp6lwtJ9TbcP4o/JH5EeGdXkvGvH3DviBmX29RScN8JZK3Ycm1fGXElW81IfqM1mJsKqRlvJeaRGmmrewZUW4ilOIaS4oEiOpVXS/vPppsFV89/b6nTuE+fP5RvAOZIg+YPhTa8q8UREhNnmPjflt1msOhYjEe5bQOP8ALmnc2pofsnucjRnpUVsdUNjR1Vk2lsE2t9i93wr/ACAeMHn1gkzNfHfkOFkMmicZiZrg9iBVZ5gtk7uBByjGJRTYQErWkobe7Sy6QQFBYKRk6tb7FlZWUomp/Hz1UkaAaAaAaAaAaAb/AMfx8dAcft7ZUZSokEsmb9uqU+/JUUQquGkEmfYLBSUtjtPYjcFwpPokKUAKefyM+edT4z4ximDYThU/njyY8g5M6h8cPHCDOVBvOXJ8BP8A+pyhy3YR1IdwHxowMlMiweV7Lc1KfbB+vtGlKw5211+3d5lG9YW/bc6i/H/+KLI4/JMzzh8+8wR5C+Y+cwWUPZPYQlQsN4xxwfXXcY8D4U6hEHjPi+hYPsNew01ZWoCnH1ttr9tdndVXTVQ1+i8vEsl+pf4xGYistRozLUePHaQywwyhLTLLTae1ttttCQhCEAbAAbADprEk2XJcbrMpqpVVaRI8ll5tYaL7KHvYeUnZLzYWklKkqA326kbj46tWzpaVqu4hqVHJ56vILwbr+K/IWh82fFcM8O+SfHNoY2aLoe6uxTmPElPIRfcd8u08NLUHJsbyOKkpi2bjf/IVctTTwcUlPTsyVo8U112gwpb3dN2nk7y/7jfOa/kjBsYzitjvQWMjqYti5XSilUyqmOICJ1TMKAEql1kxK2FkDZSkbjoRritV1cPc6DnGoA0A0A0A0A0BsGS3sbG6eXaye0+0ENRmie0yJkhaWYzCSOo9x5Q3PwG5+GpSdnC3BCjyZ8l8D4B4g5B5TzL/AJHIcRwCHBftKiiSHMi5h5SyCSxV4HxDiMUJUqZZ5LkciPCaaQFJBWkK2bStWta43W/u3X9O31K3uqrVS+PMiH+OPwqzWwzLNfPjzJTV5X5a8+/av2UZlKpmM8RYBAfVJwrgnjYSitMTjzjVhaW1rQAq8uxIsZBX3MBLJZJdFNF3eHbUVTS13Lsflt+m/wCusVpoWMdANAQ35fqWf+4XiFMhyLYw4f3TCk7ofEmF7D4Wd9gFJHxBI/TXo4V14VZatb+mxyZYrllLg+vEac/WV2dceyHVLTiWRe9XhfqK+zbLrRSN+iVoQk7f+RJ9d9c2ese83x26kTG1zmg0A0A0A0A0BFbnq0n2uQ4zh1cpQajhy6sCklIDikqZjBZ3SNmmStQ6+qgP110/Hq56o0BXdKwpzyb8lOMMJfCneLuD7mxypmP/AJ4lzyjJhOx7LMJKerb7uCYtIVCq1LB9mztlupIcbQpNuqtKNLX95KOqtE8F2EKHGr4kaDCYbixIbDUaLGZSENMR2G0ttNNpHRKG0JAH7a41sXNVqQNANARszVpi2vbhwdrgQ6IvQd24ishpQTuNt+8Ea9DA+nGo0ObNWzt1JaHBuBIi4PM3KkcdGv8ArGIyFAbEF1wyG0EjYEK9pn99U+U00uNTTFHSo7akzNcRqNANANANANARKzBx1/IeQLVBSZcSHMr4Szvu2tuN9uyRuOgCgnf9td+FRReKKqybg698O8Pi1OR8gz2khZx+DRYu28R9bs60DmRZDLUogdzsyQYwUfk0OvTXPmSrogvoT31gWGgG40Bw7O8ri4ZjVjeSCkutNlmvYJ+qVYvJUiLHQk7d26x3K+SEqOrUXVaOAQqp8umB8rmOKWp91x+QtZA3UpSnHXFD0Gyioka79q6cIk7M8WXF5Q9yXyYplaIuTZDEpKZSv/pWYxGVH9xI9NlyJJ6joSk/LXLmv1QvAqiXWsCRoBoBoBoBoCImWd0TKszgvjt9+SJaUEj62ZIbfbUB8R2rA16dHOGsbo523XLPBleKjqUWPNMJR/vNZvVS9jsCYszG4SY6wBvugqjLAP6a48+67zav8SYGsCw0Bop8+HVw5NjYyWYcGGyuRKlPrDbLDLY3Utaz06AbAepJAG+iU6IEeMhr5/JUlNrNakxKSMlQx2peStp4NOjZy4ns/SpE2cAPbbJCmGtv9ZVrrxYnVdbmSjvVOOSNvMNK/gtAwzBIey/ObZnBuOaJAKptxkNuFoelpjgFSa3HK/3Jcl0jsSUoTv3OAave6onvJbqnYnPxdgsTjfAMWwqGoOJoqqPHlSNvqmWK/wDcWMxR3UVKlTXHF7kk9dcVm7OWSc/1AGgGgGgGgGgI7c3YxKT9tmtY0t1MNgwMhYZQXHDXEn2LINoBUv7FSiHNtyGuv+k7dXxsiXsexjlo3qtyOXDGZQsO5meM6SiPSchVkfGpch1xLcWJlVM4/MoHXnFHsQ3aQX5EZKvRThaG+p+TRynyycT9sPdFiIfZKe8OtlGxPeFpKdh6nuB22Hz1yOVuakUOZfN7xq4ReXU5PyZRXGYkqbi4Dhs2JlGYyHwFbNP1VY+8moQVpALs5cZpPqVbaA6Vw3neXzjbRrzI1RaWgjSBLxzBYssTGojiFAxbLJZ6Q21dXDfRSW0pEWKSOwLX/c12YMajqeplltZV0cIlFlPKOD8VcfW3JXId3FoMRx9guSZboU5JsZawRDp6aC33y7e8tZBDUWGwlT8h0hKASemudulVD9728EYY69T8F2ggX4+8nTuZ+WrXyN5HZbiTVRZWNcKcdOPMzInF+EvPj7ixnqjqchTM9yZTaHLGS2XGmdkx2VKbaC1+fa66uhOXyzsLUKSzVYMIeUrcLR3D9vqIOw/T99QDf9x8xv8AvoDHQDQDQDQDff8AwO2gPhaUrStK0haVJKVpWApKkqBCkkK6KSR6g9NtAQL8j+CkRYsnNuPYaZSGkd+U4QzKajuzYjK0uot8VVIUluPd1y0e4mOFJDwH9spUADvXNaIsUdE0RVi8w4LmeIWGI56i2yPHprD1fdSMcXKN00kILKnptLFkw7iDbMej6Ggv3VDf2xvtrdWpdTZOe9FEnjcU2KE+bPGzHuKeWXbHxeyh3L8ZyCwMqwqr2rusOn0LzrvetU2VlldVSnvbV0UEIdKvgDrPpfoXqlwiU+F+UeB+K9bBteZcyZvsgcZ3puPcdkTq1m1sgAWIj9raVzWT3DbiyEFijppzrp2CXEgb6lNYk7Whd3H05Isq2irWoVe+Yv5C8wpcmyqjtuOeKaWQ6vD8dm1cikTFrpJDRTQ4qt19/H/u4w7ZFjZPP3Mxs9n+1ZKmTxZczv8Awl3b1b/YtSuuulFwXJ+PnjpaYLBgMutvKcabQla3woDdKR3FDQ7hsfTbbp++s642tHsXbU6bFkONQJEOM027t9CUj4hR6dvUdQOv8hrYg5akEEb/AMevw1E8AzdSBoBoBoBoDj97YvQ46/t0FTm2w2G57iN/n023GnhyCDXM0HPsvalwmZUuNGUlaQ1HK0Ao3VtuUEDuV029diB6axs23rsSVH8meDHKmZXMizx24vMesHnlEWtVZS66WoKUdjIfZWgSVnf/AFg7fDVF+WtpxtyW9ttLbHHsX/E9zfl7ga5D8nOdV0jhIepqXNZtMyplSvqZXLioRLCCCQe1SSU/HW35fk7Wtv3FXWqftba8Swrx6/FD4w8JTmshqeO6+5zBaQJmZZUuXk+VSl9CsyMiv37KzUlzqSELQknbcHrqOidbtt+LkFmeNcb0FCw3Gg1cOK239KGo7QbQgbAdCgdBseu3rqyql5kHY0eriRglKEJBAA9Bv+ux6HY6sDcUoSgbJAAHp+n+ProD60A0A0A0A0A0Bp3YzT+4cTuD6+nw+Ppv8NNfTtwDa3aCvcIPsp9fq7gDv+2wHx04Bkf9ar99/Yb3BBTuOgI/9e3Y9f5aA1zVVGa/yNNj5/QP6jqNAa1MdtG2yRsOnoB8+vTbf11DcasGeP22/l/TfUgx0A0A0A0A0A0A0A0A0A0A0A0A0A0A0A0A0A0A0B//2Q==" alt="">
                        </div>
                    </div>
                </aside>
            </section>
            <!--latest product info end-->
            <!--twitter feedback start-->
            <section class="panel post-wrap pro-box">
                <aside class="post-highlight terques v-align">
                    <div class="panel-body">
                        <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago  by jonathan smith</h2>
                    </div>
                </aside>
                <aside>
                    <div class="post-info">
                        <span class="arrow-pro left"></span>
                        <div class="panel-body">
                            <div class="text-center twite">
                                <h1>Twitter Feed</h1>
                            </div>

                            <footer class="social-footer">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </div>
                </aside>
            </section>
            <!--twitter feedback end-->
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-xs-6">
                    <!--pie chart start-->
                    <section class="panel">
                        <div class="panel-body">
                            <div class="chart">
                                <div id="pie-chart"><canvas width="100" height="100" style="display: inline-block; width: 100px; height: 100px; vertical-align: top;"></canvas></div>
                            </div>
                        </div>
                        <footer class="pie-foot">
                            Free: 260GB
                        </footer>
                    </section>
                    <!--pie chart start-->
                </div>
                <div class="col-xs-6">
                    <!--follower start-->
                    <section class="panel">
                        <div class="follower">
                            <div class="panel-body">
                                <h4>Jonathan Smith</h4>
                                <div class="follow-ava">
                                    <img src="img/follower-avatar.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <footer class="follower-foot">
                            <ul>
                                <li>
                                    <h5>2789</h5>
                                    <p>Follower</p>
                                </li>
                                <li>
                                    <h5>270</h5>
                                    <p>Following</p>
                                </li>
                            </ul>
                        </footer>
                    </section>
                    <!--follower end-->
                </div>
            </div>
            <!--weather statement start-->
            <section class="panel">
                <div class="weather-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="icon-cloud"></i>
                                California
                            </div>
                            <div class="col-xs-6">
                                <div class="degree">
                                    24°
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="weather-category">
                    <ul>
                        <li class="active">
                            <h5>humidity</h5>
                            56%
                        </li>
                        <li>
                            <h5>precip</h5>
                            1.50 in
                        </li>
                        <li>
                            <h5>winds</h5>
                            10 mph
                        </li>
                    </ul>
                </footer>

            </section>
            <!--weather statement end-->
        </div>
    </div>
@stop