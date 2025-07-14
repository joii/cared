<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" title="Dashboard">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="mdi mdi-cog-outline"></i>
                        <span data-key="t-apps">Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-meta-tags">Site Struction</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('backend.navigation.index') }}" data-key="t-html-tags" title="SEO Meta" >Navigation</a></li>
                                <li><a href="{{ route('backend.footer.index') }}" data-key="t-footer" title="Footer Info.">Footer</a></li>
                                <li><a href="{{ route('backend.social_link.index') }}" data-key="t-social" title="Social Links">Social Links</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-meta-tags">Meta Tags</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('backend.seo_meta.index') }}" data-key="t-html-tags" title="HTML Meta" >SEO Meta</a></li>
                                <li><a href="{{ route('backend.gtm.index') }}" data-key="t-gtm" title="GTM">Google Tag Manager</a></li>
                                <li><a href="{{ route('backend.ga.index') }}" data-key="t-ga" title="GA">Google Analytics</a></li>
                                <li><a href="#" data-key="t-facebook-meta" title="Facebook Pixel">Facebook Pixel</a></li>
                                <li><a href="#" data-key="t-og-meta" title="Open Graph Meta Tags">Open Graph Meta Tags</a></li>
                            </ul>
                        </li>



                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-file-code"></i>
                        <span data-key="t-pages">Web Content</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-meta-tags">Static Content</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('backend.home_content.index') }}" data-key="t-homepage" title="Homepage" >Homepage</a></li>
                                <li><a href="#" data-key="t-about-us" title="About Us">About Us</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('backend.branch.index') }}" data-key="t-branches-page" >Branches</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-meta-tags">News&Articles</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('backend.article_category.index') }}" data-key="t-article-category" title="Article Category" >Categories</a></li>
                                <li><a href="{{ route('backend.article.index') }}" data-key="t-article" title="News&Article">Article</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('backend.promotion_package.index') }}" data-key="t-promotion-page" >Promotion Package</a></li>
                        <li><a href="{{ route('backend.faqs.index') }}" data-key="t-faqs" >FAQs</a></li>
                        <li><a href="{{ route('backend.awards.index') }}" data-key="t-faqs" >Awards</a></li>
                        <li><a href="{{ route('backend.testimonials.index') }}" data-key="t-faqs" >Testimonails</a></li>
                        <li><a href="{{ route('backend.banner.index') }}" data-key="t-faqs" >Banners</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" >
                        <i class="fas fa-file"></i>
                        <span data-key="t-pages">User Manual</span>
                    </a>
                </li>
            </ul>


        </div>
        <!-- End Sidebar Menu -->


        <!-- Sidebar -->

    </div>
</div>
