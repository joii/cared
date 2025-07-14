<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\ArticleCategoryManagementController;
use App\Http\Controllers\Backend\ArticlesManagementController;
use App\Http\Controllers\Backend\AwardsManagementController;
use App\Http\Controllers\Backend\BannerManagementController;
use App\Http\Controllers\Backend\BranchGalleryManagementController;
use App\Http\Controllers\Backend\BranchManagementController;
use App\Http\Controllers\Backend\FAQsManagementController;
use App\Http\Controllers\Backend\FooterManagementController;
use App\Http\Controllers\Backend\GAManagementController;
use App\Http\Controllers\Backend\GTMManagementController;
use App\Http\Controllers\Backend\HomeContentManagementController;
use App\Http\Controllers\Backend\NavigationsController;
use App\Http\Controllers\Backend\PromotionPackageManagementController;
use App\Http\Controllers\Backend\RateCardManagementController;
use App\Http\Controllers\Backend\SEOMetaController;
use App\Http\Controllers\Backend\SocialLinkManagementController;
use App\Http\Controllers\Backend\TestimonialManagementController;
use App\Http\Controllers\Frontend\HomepageController;

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// All Frontend routes
Route::redirect('/', '/home');
Route::get('/home', [HomepageController::class, 'Homepage'])->name('homepage');
Route::get('/About_Us', [HomepageController::class, 'AboutPage'])->name('frontend.about_us');
Route::get('/Care•D_Clinic', [HomepageController::class, 'ClinicPage'])->name('frontend.clinic_page');
Route::get('/Nursing_Home', [HomepageController::class, 'NursingHomePage'])->name('frontend.nursing_home_page');
Route::get('/Stroke_Center', [HomepageController::class, 'StrokeCenterPage'])->name('frontend.stroke_center_page');
Route::get('/Home_Care', [HomepageController::class, 'HomeCarePage'])->name('frontend.home_care_page');
Route::get('/Care•D_Shop', [HomepageController::class, 'CaredShopPage'])->name('frontend.cared_shop_page');
Route::get('/branches', [HomepageController::class, 'BranchesPage'])->name('frontend.branch_page');
Route::get('/branch/{id}/{slug}', [HomepageController::class, 'BranchDetailPage'])->name('frontend.branch_detail_page');
Route::get('/package/{id}/{slug}', [HomepageController::class, 'PackageDetailPage'])->name('frontend.package_detail_page');
Route::get('/Care•D_package', [HomepageController::class, 'PackagePage'])->name('frontend.package_page');
Route::get('/News_&_Articles', [HomepageController::class, 'AllArticlesListPage'])->name('frontend.all_articles_list_page');
Route::get('/Articles/{category_id}/{slug}', [HomepageController::class, 'ArticlesListPage'])->name('frontend.articles_list_page');
Route::get('/Article/{id}/{slug}', [HomepageController::class, 'ArticleDetailPage'])->name('frontend.articles_detail_page');
Route::get('/rate_card', [HomepageController::class, 'RateCardPage'])->name('frontend.rate_card_page');
Route::get('/faqs', [HomepageController::class, 'FAQsPage'])->name('frontend.faqs_page');
Route::get('/frenchies', [HomepageController::class, 'FrenchiesPage'])->name('frontend.frenchies_page');
Route::get('/Service_process', [HomepageController::class, 'ServiceProcessPage'])->name('frontend.service_process_page');
Route::get('/Contact_Us', [HomepageController::class, 'ContactUsPage'])->name('frontend.contact_page');



require __DIR__.'/auth.php';

// Admin routes
// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
// });


// All Admin routes
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login_submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login_submit');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/admin/forget_password', [AdminController::class, 'AdminForgetPassword'])->name('admin.forget_password');


// All Backend routes

// Backend : Setting : Site Structure : Navigation routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/navigation', [NavigationsController::class, 'Index'])->name('backend.navigation.index');
    Route::get('/backend/navigation/create', [NavigationsController::class, 'Create'])->name('backend.navigation.create');
    Route::post('/backend/navigation/store', [NavigationsController::class, 'Store'])->name('backend.navigation.store');
    Route::get('/backend/navigation/edit/{id}', [NavigationsController::class, 'Edit'])->name('backend.navigation.edit');
    Route::post('/backend/navigation/update', [NavigationsController::class, 'Update'])->name('backend.navigation.update');
    Route::get('/backend/navigation/destroy/{id}', [NavigationsController::class, 'Destroy'])->name('backend.navigation.destroy');
});

// Backend : Setting : Site Structure : Footer routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/footer', [FooterManagementController::class, 'Index'])->name('backend.footer.index');
    Route::get('/backend/footer/create', [FooterManagementController::class, 'Create'])->name('backend.footer.create');
    Route::post('/backend/footer/store', [FooterManagementController::class, 'Store'])->name('backend.footer.store');
    Route::get('/backend/footer/edit/{id}', [FooterManagementController::class, 'Edit'])->name('backend.footer.edit');
    Route::post('/backend/footer/update', [FooterManagementController::class, 'Update'])->name('backend.footer.update');
    Route::get('/backend/footer/destroy/{id}', [FooterManagementController::class, 'Destroy'])->name('backend.footer.destroy');
});

// Backend : Setting : Site Structure : Social Link routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/social_link', [SocialLinkManagementController::class, 'Index'])->name('backend.social_link.index');
    Route::get('/backend/social_link/create', [SocialLinkManagementController::class, 'Create'])->name('backend.social_link.create');
    Route::post('/backend/social_link/store', [SocialLinkManagementController::class, 'Store'])->name('backend.social_link.store');
    Route::get('/backend/social_link/edit/{id}', [SocialLinkManagementController::class, 'Edit'])->name('backend.social_link.edit');
    Route::post('/backend/social_link/update', [SocialLinkManagementController::class, 'Update'])->name('backend.social_link.update');
    Route::get('/backend/social_link/destroy/{id}', [SocialLinkManagementController::class, 'Destroy'])->name('backend.social_link.destroy');
});

// Backend :SEO routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/seo_meta', [SEOMetaController::class, 'Index'])->name('backend.seo_meta.index');
    Route::get('/backend/seo_meta/create', [SEOMetaController::class, 'Create'])->name('backend.seo_meta.create');
    Route::post('/backend/seo_meta/store', [SEOMetaController::class, 'Store'])->name('backend.seo_meta.store');
    Route::get('/backend/seo_meta/edit', [SEOMetaController::class, 'Edit'])->name('backend.seo_meta.edit');
    Route::post('/backend/seo_meta/update', [SEOMetaController::class, 'Update'])->name('backend.seo_meta.update');
    Route::get('/backend/seo_meta/destroy/{id}', [SEOMetaController::class, 'Destroy'])->name('backend.seo_meta.destroy');
});

// Backend : GTM Route
Route::middleware('admin')->group(function () {
    Route::get('/backend/gtm', [GTMManagementController::class, 'Index'])->name('backend.gtm.index');
    Route::post('/backend/gtm_store', [GTMManagementController::class, 'GTMStore'])->name('backend.gtm.store');

});

// Backend : GA Route
Route::middleware('admin')->group(function () {
    Route::get('/backend/ga', [GAManagementController::class, 'Index'])->name('backend.ga.index');
    Route::post('/backend/ga_store', [GAManagementController::class, 'GAStore'])->name('backend.ga.store');

});

// Backend : Web Content : Article Category Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/article_category', [ArticleCategoryManagementController::class, 'Index'])->name('backend.article_category.index');
    Route::get('/backend/article_category/create', [ArticleCategoryManagementController::class, 'Create'])->name('backend.article_category.create');
    Route::post('/backend/article_category/store', [ArticleCategoryManagementController::class, 'Store'])->name('backend.article_category.store');
    Route::get('/backend/article_category/edit/{id}', [ArticleCategoryManagementController::class, 'Edit'])->name('backend.article_category.edit');
    Route::post('/backend/article_category/update', [ArticleCategoryManagementController::class, 'Update'])->name('backend.article_category.update');
    Route::get('/backend/article_category/destroy/{id}', [ArticleCategoryManagementController::class, 'Destroy'])->name('backend.article_category.destroy');
});

// Backend : Web Content : Article  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/article', [ArticlesManagementController::class, 'Index'])->name('backend.article.index');
    Route::get('/backend/article/create', [ArticlesManagementController::class, 'Create'])->name('backend.article.create');
    Route::post('/backend/article/store', [ArticlesManagementController::class, 'Store'])->name('backend.article.store');
    Route::get('/backend/article/edit/{id}',[ArticlesManagementController::class, 'Edit'])->name('backend.article.edit');
    Route::post('/backend/article/update', [ArticlesManagementController::class, 'Update'])->name('backend.article.update');
    Route::get('/backend/article/destroy/{id}', [ArticlesManagementController::class, 'Destroy'])->name('backend.article.destroy');
});

// Backend : Web Content : Package : Promotion  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/promotion_package', [PromotionPackageManagementController::class, 'Index'])->name('backend.promotion_package.index');
    Route::get('/backend/promotion_package/create', [PromotionPackageManagementController::class, 'Create'])->name('backend.promotion_package.create');
    Route::post('/backend/promotion_package/store', [PromotionPackageManagementController::class, 'Store'])->name('backend.promotion_package.store');
    Route::get('/backend/promotion_package/edit/{id}',[PromotionPackageManagementController::class, 'Edit'])->name('backend.promotion_package.edit');
    Route::post('/backend/promotion_package/update', [PromotionPackageManagementController::class, 'Update'])->name('backend.promotion_package.update');
    Route::get('/backend/promotion_package/destroy/{id}', [PromotionPackageManagementController::class, 'Destroy'])->name('backend.promotion_package.destroy');
});


// Backend : Web Content : FAQs  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/faqs', [FAQsManagementController::class, 'Index'])->name('backend.faqs.index');
    Route::get('/backend/faqs/create', [FAQsManagementController::class, 'Create'])->name('backend.faqs.create');
    Route::post('/backend/faqs/store', [FAQsManagementController::class, 'Store'])->name('backend.faqs.store');
    Route::get('/backend/faqs/edit/{id}',[FAQsManagementController::class, 'Edit'])->name('backend.faqs.edit');
    Route::post('/backend/faqs/update', [FAQsManagementController::class, 'Update'])->name('backend.faqs.update');
    Route::get('/backend/faqs/destroy/{id}', [FAQsManagementController::class, 'Destroy'])->name('backend.faqs.destroy');
});

// Backend : Web Content : Awards  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/awards', [AwardsManagementController::class, 'Index'])->name('backend.awards.index');
    Route::get('/backend/awards/create', [AwardsManagementController::class, 'Create'])->name('backend.awards.create');
    Route::post('/backend/awards/store', [AwardsManagementController::class, 'Store'])->name('backend.awards.store');
    Route::get('/backend/awards/edit/{id}',[AwardsManagementController::class, 'Edit'])->name('backend.awards.edit');
    Route::post('/backend/awards/update', [AwardsManagementController::class, 'Update'])->name('backend.awards.update');
    Route::get('/backend/awards/destroy/{id}', [AwardsManagementController::class, 'Destroy'])->name('backend.awards.destroy');
});

// Backend : Web Content : Testimonails  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/testimonials', [TestimonialManagementController::class, 'Index'])->name('backend.testimonials.index');
    Route::get('/backend/testimonials/create', [TestimonialManagementController::class, 'Create'])->name('backend.testimonials.create');
    Route::post('/backend/testimonials/store', [TestimonialManagementController::class, 'Store'])->name('backend.testimonials.store');
    Route::get('/backend/testimonials/edit/{id}',[TestimonialManagementController::class, 'Edit'])->name('backend.testimonials.edit');
    Route::post('/backend/testimonials/update', [TestimonialManagementController::class, 'Update'])->name('backend.testimonials.update');
    Route::get('/backend/testimonials/destroy/{id}', [TestimonialManagementController::class, 'Destroy'])->name('backend.testimonials.destroy');
});

// Backend : Web Content : Banner  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/banner', [BannerManagementController::class, 'Index'])->name('backend.banner.index');
    Route::get('/backend/banner/create', [BannerManagementController::class, 'Create'])->name('backend.banner.create');
    Route::post('/backend/banner/store', [BannerManagementController::class, 'Store'])->name('backend.banner.store');
    Route::get('/backend/banner/edit/{id}',[BannerManagementController::class, 'Edit'])->name('backend.banner.edit');
    Route::post('/backend/banner/update', [BannerManagementController::class, 'Update'])->name('backend.banner.update');
    Route::get('/backend/banner/destroy/{id}', [BannerManagementController::class, 'Destroy'])->name('backend.banner.destroy');
});

// Backend : Web Content : Home Content  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/home_content', [HomeContentManagementController::class, 'Index'])->name('backend.home_content.index');
    Route::get('/backend/home_content/create', [HomeContentManagementController::class, 'Create'])->name('backend.home_content.create');
    Route::post('/backend/home_content/store', [HomeContentManagementController::class, 'Store'])->name('backend.home_content.store');
    Route::get('/backend/home_content/edit/{id}',[HomeContentManagementController::class, 'Edit'])->name('backend.home_content.edit');
    Route::post('/backend/home_content/update', [HomeContentManagementController::class, 'Update'])->name('backend.home_content.update');
    Route::get('/backend/home_content/destroy/{id}', [HomeContentManagementController::class, 'Destroy'])->name('backend.home_content.destroy');
});

// Backend : Web Content : Branches  Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/branch', [BranchManagementController::class, 'Index'])->name('backend.branch.index');
    Route::get('/backend/branch/create', [BranchManagementController::class, 'Create'])->name('backend.branch.create');
    Route::post('/backend/branch/store', [BranchManagementController::class, 'Store'])->name('backend.branch.store');
    Route::get('/backend/branch/edit/{id}',[BranchManagementController::class, 'Edit'])->name('backend.branch.edit');
    Route::post('/backend/branch/update', [BranchManagementController::class, 'Update'])->name('backend.branch.update');
    Route::get('/backend/branch/destroy/{id}', [BranchManagementController::class, 'Destroy'])->name('backend.branch.destroy');
});

// Backend : Web Content : Branch Galleries Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/branch_gallery/{id}', [BranchGalleryManagementController::class, 'Index'])->name('backend.branch_gallery.index');
    Route::get('/backend/branch_gallery/create/{branch_id}', [BranchGalleryManagementController::class, 'Create'])->name('backend.branch_gallery.create');
    Route::post('/backend/branch_gallery/store', [BranchGalleryManagementController::class, 'Store'])->name('backend.branch_gallery.store');
    Route::get('/backend/branch_gallery/edit/{id}',[BranchGalleryManagementController::class, 'Edit'])->name('backend.branch_gallery.edit');
    Route::post('/backend/branch_gallery/update', [BranchGalleryManagementController::class, 'Update'])->name('backend.branch_gallery.update');
    Route::get('/backend/branch_gallery/destroy/{id}', [BranchGalleryManagementController::class, 'Destroy'])->name('backend.branch_gallery.destroy');
});

// Backend : Web Content : Branch Rate Card Routes
Route::middleware('admin')->group(function () {
    Route::get('/backend/branch_rate_card/{id}', [RateCardManagementController::class, 'Index'])->name('backend.branch_rate_card.index');
    Route::get('/backend/branch_rate_card/create/{branch_id}', [RateCardManagementController::class, 'Create'])->name('backend.branch_rate_card.create');
    Route::post('/backend/branch_rate_card/store', [RateCardManagementController::class, 'Store'])->name('backend.branch_rate_card.store');
    Route::get('/backend/branch_rate_card/edit/{id}',[RateCardManagementController::class, 'Edit'])->name('backend.branch_rate_card.edit');
    Route::post('/backend/branch_rate_card/update', [RateCardManagementController::class, 'Update'])->name('backend.branch_rate_card.update');
    Route::get('/backend/branch_rate_card/destroy/{id}', [RateCardManagementController::class, 'Destroy'])->name('backend.branch_rate_card.destroy');
});



