@if(AdminMenuHelper::menusExists($menu_config, 1))


        <!-- Level ONE Menu -->
        <ul class="sidebar-menu sm-bordered sm-active-button-bg">

            @foreach($menu_config['ul']['li'] as $lvl_one_menu)

                @if(AdminMenuHelper::isMenuAccessible($lvl_one_menu))

                    <li {!! AdminMenuHelper::getLiClass($lvl_one_menu) !!} {!! AdminMenuHelper::getLiStyle($lvl_one_menu) !!} >
                        <a {!! AdminMenuHelper::getMenuClass($lvl_one_menu) !!} href="{{ AdminMenuHelper::getEventMenuUrl($lvl_one_menu, $event_id) }}">
                            {!! AdminMenuHelper::getMenuContent($lvl_one_menu) !!}
                        </a>

                        @if (AdminMenuHelper::menusExists($lvl_one_menu, 2))

                            <ul class="sidebar-submenu cstm-submenu">

                                @foreach($lvl_one_menu['sub_menu']['ul']['li'] as $lvl_two_menu)

                                    @if(AdminMenuHelper::isMenuAccessible($lvl_two_menu))

                                        <li {!! AdminMenuHelper::getLiClass($lvl_two_menu) !!} {!! AdminMenuHelper::getLiStyle($lvl_two_menu) !!}>
                                            <a {!! AdminMenuHelper::getMenuClass($lvl_two_menu) !!} href="{{ AdminMenuHelper::getEventMenuUrl($lvl_two_menu, $event_id) }}">
                                                {!! AdminMenuHelper::getMenuContent($lvl_two_menu) !!}
                                            </a>

                                            @if (AdminMenuHelper::menusExists($lvl_two_menu, 3))

                                                <ul class="sidebar-submenu cstm-submenu">

                                                    @foreach($lvl_two_menu['sub_menu']['ul']['li'] as $lvl_three_menu)

                                                        @if(AdminMenuHelper::isMenuAccessible($lvl_three_menu))

                                                            <li {!! AdminMenuHelper::getLiClass($lvl_three_menu) !!}  {!! AdminMenuHelper::getLiStyle($lvl_three_menu) !!}>
                                                                <a {!! AdminMenuHelper::getMenuClass($lvl_three_menu) !!} href="{{ AdminMenuHelper::getEventMenuUrl($lvl_three_menu, $event_id) }}">
                                                                    {!! AdminMenuHelper::getMenuContent($lvl_three_menu) !!}
                                                                </a>
                                                            </li>
                                                        @endif

                                                    @endforeach

                                                </ul>

                                            @endif

                                        </li>
                                    @endif

                                @endforeach

                            </ul>

                        @endif

                    </li>
                @endif

            @endforeach


        </ul>
        <!-- End: Level ONE Menu -->


@endif
