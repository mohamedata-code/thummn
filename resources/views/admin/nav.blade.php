<!-- Main sidebar -->
<div class="sidebar sidebar-main ">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left">
                        <img src="" class="img-circle img-sm" alt="">
                    </a>

                    <div class="media-body">
                        <span class="media-heading text-semibold">{{Auth::user()->name}}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> مدير الموقع
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">


                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>الاعدادات الرئيسية</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active">
                        <a href="{{asset('dashboard')}}"><i
                                    class="icon-home4"></i> <span>الصفحة الرئيسية</span></a>
                    </li>

                    <li class="navigation-header"><span>العضويات</span> <i class="icon-menu" title="Main pages"></i></li>

                    <li>
                        <a href="#" class="kar-tab"><i class="icon-users2"></i> <span>العملاء</span></a>
                        <ul class="hidden-ul">

                            <li class="{{(Request::is('dashboard/users') ? 'active' : '')}}"><a
                                        href="{{route('admin.users.index')}}"><i class="icon-list"></i> كل العملاء</a>
                            </li>

                            <li class="{{ (Request::is('dashboard/users/create') ? 'active' : '')}}"><a
                                        href="{{route('admin.users.create')}}"><i class="icon-user-plus"></i> اضافة
                                    عميل
                                    جديد</a>
                            </li>

                        </ul>
                    </li>



                    <li class="{{(Request::is('dashboard/contacts') ? 'active' : '')}}">
                        <a
                                href="{{asset('dashboard/contacts')}}"><i
                                    class="icon-envelop"></i> <span>الرسائل  </span></a>
                    </li>

                    <li class="navigation-header"><span>الاقسام</span> <i class="icon-menu" title="Main pages"></i></li>



                    <li class="navigation-header"><span>الاعدادات </span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="{{(Request::is('dashboard/settings/general') ? 'active' : '')}}">
                        <a href="#"><i class="fas fa-cogs"></i> <span>الاعدادات</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
