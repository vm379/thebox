<x-base :title="$title">

    <div class="page">
        <div class="page">
            <div class="container">
                <div class="title">Services</div>

                <div class="page-content page-columns">
                    <aside class="aside">
                        <nav class="nav">
                            <ul class="page-menu">
                                <li class="item {{request()->is('services/construction*')?'active':''}}">
                                    <a href="/services/construction" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Construction</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="item {{request()->is('services/renovation*')?'active':''}}">
                                    <a href="/services/renovation" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Renovation</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="item {{request()->is('services/consultation*')?'active':''}}">
                                    <a href="/services/consultation" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Consultation</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="item {{request()->is('services/repair-services*')?'active':''}}">
                                    <a href="/services/repair-services" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Repair Services</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="item {{request()->is('services/architecture*')?'active':''}}">
                                    <a href="/services/architecture" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Architecture</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="item {{request()->is('services/electric*')?'active':''}}">
                                    <a href="/services/electric" class="link">
                                        <div class="page-menu-item">
                                            <div class="i"></div>
                                            <div class="t">Electric</div>
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
                                            <a href="./construction" class="link">Construction</a>
                                        </li>

                                        <li class="option">
                                            <a href="./renovation" class="link">Renovation</a>
                                        </li>

                                        <li class="option">
                                            <a href="./consultation" class="link">Consultation</a>
                                        </li>

                                        <li class="option">
                                            <a href="./repair-services" class="link">Repair Services</a>
                                        </li>

                                        <li class="option">
                                            <a href="./architecture" class="link">Architecture</a>
                                        </li>

                                        <li class="option">
                                            <a href="./electric" class="link">Electric</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end select category -->

                    </aside>

                    <div class="content">
                        <article class="article">

                            {{ $content }}

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-base>