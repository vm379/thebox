<x-base :title="$title">

    <div class="page">
        <div class="container">
            <div class="title">Projects</div>

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

                            <li class="item {{request()->is('projects/residential')?'active':''}}">
                                <a href="/projects/residential" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Residential</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/commercial')?'active':''}}">
                                <a href="/projects/commercial" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Commercial</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/industrial')?'active':''}}">
                                <a href="/projects/industrial" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Industrial</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/infrastructure')?'active':''}}">
                                <a href="/projects/infrastructure" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Infrastructure</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/agricultural')?'active':''}}">
                                <a href="/projects/agricultural" class="link">
                                    <div class="page-menu-item">
                                        <div class="i"></div>
                                        <div class="t">Agricultural</div>
                                    </div>
                                </a>
                            </li>

                            <li class="item {{request()->is('projects/institutional')?'active':''}}">
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

                <div class="content">
                    <div class="projects-cards">

                        @foreach ($projects as $project)
                        <a href="/projects/{{ $project->projectCategorySlug}}/{{ $project->projectSlug}}" class="link">
                            <div class="project-card">
                                <div class="">
                                    <img src="{{asset('img/projects')}}/{{ $project->image }}" alt="icon" class="icon">
                                </div>

                                <div class="container">
                                    <div class="titles">
                                        <h4>{{ $project->projectTitle }}</h4>
                                        <p class="address">{{ $project->projectAddress }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>

                    <div class="projects-cards--navs">
                        <div class="l">
                            <a href="./prev" class="link">
                                <div class="projects-cards--navs-btn">
                                    <div class="container">
                                        <div class="projects-cards--nav-title">
                                            <img src="../img/projects/i/back.png" alt="i" class="i">
                                            <span class="t back">Back</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="center">
                            <ul class="projects-cards--navs-dots">
                                <li class="item active"></li>
                                <li class="item"></li>
                                <li class="item"></li>
                                <li class="item"></li>
                                <li class="item"></li>
                            </ul>
                        </div>

                        <div class="r">
                            <a href="./next" class="link">
                                <div class="projects-cards--navs-btn">
                                    <div class="container">
                                        <div class="projects-cards--nav-title">
                                            <span class="t next">Next</span>
                                            <img src="../img/projects/i/next.png" alt="i" class="i">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="projects-cards--nav--mobile">
                        <span class="t">More Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-base>