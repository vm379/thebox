<x-base :title="$title">

    <div class="page">
        <div class="container">
            <div class="title">Project</div>

            <div class="page-content page-columns">
                <aside class="aside">
                    <nav class="nav">
                        <ul class="page-menu">
                            <li class="item {{request()->is('projects')?'active':''}}">
                                <a href="/projects" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">All</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/residential/*')?'active':''}}">
                                <a href="/projects/residential" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Residential</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/commercial/*')?'active':''}}">
                                <a href="/projects/commercial" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Commercial</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/industrial/*')?'active':''}}">
                                <a href="/projects/industrial" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Industrial</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/infrastructure/*')?'active':''}}">
                                <a href="/projects/infrastructure" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Infrastructure</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/agricultural/*')?'active':''}}">
                                <a href="/projects/agricultural" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Agricultural</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/institutional/*')?'active':''}}">
                                <a href="/projects/institutional" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Institutional</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!-- select category -->
                    <div class="select">
                        <div class="container">
                            <div class="col-1">
                                <div class="select-col-1">
                                    <div class="title">
                                        <div class="t">Category:</div>
                                    </div>

                                    <div class="content">
                                        <div class="t">All</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="i"></div>
                            </div>
                        </div>

                        <!-- classList: d a | open mobile menu-->
                        <!-- d: display: block; -->
                        <!-- a: opacity: 1 -->
                        <div class="options">
                            <div class="select-options">
                                <ul class="options-list">
                                    <li class="option">
                                        <a href="./commercial" class="link">Commercial</a>
                                    </li>

                                    <li class="option">
                                        <a href="./residential" class="link">Residential</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end select category -->

                </aside>

                <div class="content page-content">
                    <article class="article">
                        {{ $title }}
                        <div></div>
                        {{ $address }}
                        <div></div>
                        {{ $content }}
                    </article>
                </div>
            </div>
        </div>
    </div>

</x-base>