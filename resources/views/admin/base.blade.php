@extends('admin.layouts.app')

@section('content')
<div class="wrapper">
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <p class="designation">Web Developer</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="{{ route('site.admin.index') }}">
                        <i class="fa fa-dashboard">
                        </i>
                        <span>Панель инструментов</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="bootstrap-components.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                        <li><a href="ui-font-awesome.html"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                        <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                        <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
                    </ul>
                </li>

                <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
                <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                        <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                        <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                        <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                        <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                        <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                        <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                        <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                        <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                        <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                        <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        {{--<div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Панель инструментов</h1>
                <p>Панель администратора</p>
            </div>
            <div>
                <ul class="breadcrumb">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </div>
        </div>--}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-title">Getting Started</h3>
                    <p>Vali is a free and responsive dashboard theme built with Bootstrap, Pug.js (templating) and SASS. It's fully customizable and modular. You don't need to add the code, you will not use.</p>
                    <p>The issue with the most admin themes out there is that if you will see their source code there are a hell lot of external CSS and javascript files in there. And if you try to remove a CSS or Javascript file some things stops working.</p>
                    <p>That's why I made Vali. Which is a light weight yet expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme.</p>
                    <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info icon-btn mr-10" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success icon-btn" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-title">Compatibility with frameworks</h3>
                    <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
                    <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
                    <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection