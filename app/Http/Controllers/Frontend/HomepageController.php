<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Awards;
use App\Models\Testimonial;
use App\Models\Footer;
use App\Models\Navigations;
use App\Models\HomeContent;
use App\Models\Branch;
use App\Models\BranchGallery;
use App\Models\BranchRateCard;
use App\Models\PromotionPackage;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Faqs;
use PHPUnit\TextUI\Output\NullPrinter;

class HomepageController extends Controller
{


    function getMainMenu()
    {
        // 1. ดึง Main Menus (parent_id = 0)
        //    และโหลด children (submenus) ทั้งหมดในทีเดียว (Eager Loading)
        //    เพื่อลดจำนวน Query ไปยังฐานข้อมูล (N+1 problem)
        $mainMenus = Navigations::where('parent_id', 0)
                            ->where('status', 'active')
                            ->orderBy('order_id')
                            ->with('children') // โหลด submenus
                            ->get();

        $navigation = [];

        // 2. วนลูปสร้างโครงสร้าง Array
        foreach ($mainMenus as $mainMenu) {
            $menuItem = [
                'id' => $mainMenu->id,
                'section_name' => $mainMenu->section_name,
                'name_en' => $mainMenu->name_en,
                'name_th' => $mainMenu->name_th,
                'slug_en' => $mainMenu->slug_en,
                'slug_th' => $mainMenu->slug_th,
                'url' => url($mainMenu->slug_th), // สร้าง Full URL
                'children' => []
            ];

            // ตรวจสอบและเพิ่ม Submenus ถ้ามี
            if ($mainMenu->children->isNotEmpty()) {
                foreach ($mainMenu->children as $child) {
                    $menuItem['children'][] = [
                        'id' => $child->id,
                        'section_name' => $child->section_name,
                        'name_en' => $child->name_en,
                        'name_th' => $child->name_th,
                        'slug_en' => $child->slug_en,
                        'slug_th' => $child->slug_th,
                        'url' => url($child->slug_th),
                    ];
                }
            }
            $navigation[] = $menuItem;
        }

        // ตัวอย่างการส่งข้อมูลไปยัง View
        return $navigation;
    }

     public function Homepage()
    {
        $section_name = 'home';
        $current_nav = Navigations::where('section_name', $section_name)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $awards = Awards::all();
        $testimonials = Testimonial::all();
        $footer = Footer::get();
        $home_contents = HomeContent::all();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.index', compact('navigation','banners', 'awards', 'testimonials', 'footer','home_contents'));
    }


     public function AboutPage()
    {
        $section_name = 'about';
        $current_nav = Navigations::where('section_name', $section_name)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $awards = Awards::all();
        $testimonials = Testimonial::all();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.about', compact('navigation','banners', 'awards', 'testimonials', 'footer'));
    }
     public function ClinicPage()
    {
        $section_name = 'clinic';
        $current_nav = Navigations::where('section_name', $section_name)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $testimonials = Testimonial::all();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.clinic', compact('navigation','banners','testimonials', 'footer'));
    }

    public function NursingHomePage()
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.nursing_home', compact('navigation','banners', 'footer'));
    }

    public function BranchesPage()
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $branches = Branch::where('status','active')->get();

        return view('frontend.branches', compact('navigation','banners', 'branches','footer'));
    }

     public function BranchDetailPage(int $id,string $slug)
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $branch = Branch::find($id);
        $vibe_galleries = BranchGallery::where('branch_id',$id)->where('category_id',2)->where('status','active')->get();
        $galleries = BranchGallery::where('branch_id',$id)->where('category_id',1)->where('status','active')->get();
        $rate_card_standard = BranchRateCard::where('branch_id',$id)->where('program_id',1)->where('status','active')->get();
        $rate_card_rehab = BranchRateCard::where('branch_id',$id)->where('program_id',2)->where('status','active')->get();
        $rate_card_happylike = BranchRateCard::where('branch_id',$id)->where('program_id',3)->where('status','active')->get();
        $rate_card_rehab2 = BranchRateCard::where('branch_id',$id)->where('program_id',4)->where('status','active')->get();
        $detached_house = BranchRateCard::where('branch_id',$id)->where('detached_house_price','<>','')->where('status','active')->get();
        $count_rehab_period1 = BranchRateCard::where('branch_id',$id)->where('program_id',2)->where('period_id','1')->where('status','active')->get();
        $count_rehab_period2 = BranchRateCard::where('branch_id',$id)->where('program_id',2)->where('period_id','2')->where('status','active')->get();
        $count_rehab_period3 = BranchRateCard::where('branch_id',$id)->where('program_id',2)->where('period_id','3')->where('status','active')->get();
        $count_rehab_period4 = BranchRateCard::where('branch_id',$id)->where('program_id',2)->where('period_id','4')->where('status','active')->get();
        $rehab_period = array($count_rehab_period1->count(),$count_rehab_period2->count(),$count_rehab_period3->count(),$count_rehab_period4->count());
        $head_table_rehab = 1;
        if($rehab_period[0]== 0){
            if($rehab_period[1]>0){
               $head_table_rehab = 2;
            }else{
                if($rehab_period[2]>0){
                    $head_table_rehab = 3;
                } else{
                    if($rehab_period[3]>0){
                        $head_table_rehab = 4;
                    }
                }
            }

        }

        $count_happylike_period1 = BranchRateCard::where('branch_id',$id)->where('program_id',3)->where('period_id','1')->where('status','active')->get();
        $count_happylike_period2 = BranchRateCard::where('branch_id',$id)->where('program_id',3)->where('period_id','2')->where('status','active')->get();
        $count_happylike_period3 = BranchRateCard::where('branch_id',$id)->where('program_id',3)->where('period_id','3')->where('status','active')->get();
        $count_happylike_period4 = BranchRateCard::where('branch_id',$id)->where('program_id',3)->where('period_id','4')->where('status','active')->get();
        $happylike_period = array($count_happylike_period1->count(),$count_happylike_period2->count(),$count_happylike_period3->count(),$count_happylike_period4->count());
        $head_table_happylike = 1;
        if($happylike_period[0]== 0){
            if($happylike_period[1]>0){
                $head_table_happylike = 2;
            } else{
                if($happylike_period[2]>0){
                    $head_table_happylike = 3;
                } else{
                    if($happylike_period[3]>0){
                        $head_table_happylike = 4;
                    }
                }
            }
        }

        $count_rehab2_period1 = BranchRateCard::where('branch_id',$id)->where('program_id',4)->where('period_id','1')->where('status','active')->get();
        $count_rehab2_period2 = BranchRateCard::where('branch_id',$id)->where('program_id',4)->where('period_id','2')->where('status','active')->get();
        $count_rehab2_period3 = BranchRateCard::where('branch_id',$id)->where('program_id',4)->where('period_id','3')->where('status','active')->get();
        $count_rehab2_period4 = BranchRateCard::where('branch_id',$id)->where('program_id',4)->where('period_id','4')->where('status','active')->get();
        $rehab2_period = array($count_rehab2_period1->count(),$count_rehab2_period2->count(),$count_rehab2_period3->count(),$count_rehab2_period4->count());
        $head_table_rehab2 = 1;
        if($rehab2_period[0]== 0){
            if($rehab2_period[1]>0){
                $head_table_rehab2 = 2;
            } else{
                if($rehab2_period[2]>0){
                    $head_table_rehab2 = 3;
                } else{
                    if($rehab2_period[3]>0){
                        $head_table_rehab2 = 4;
                    }
                }
            }
        }


        $has_detached_house = false;
        if(count($detached_house) > 0){
            $has_detached_house = true;
        }
        return view('frontend.branch_detail', compact('navigation','banners', 'branch','galleries','vibe_galleries','footer','rate_card_standard','rate_card_rehab','rate_card_happylike','rate_card_rehab2','has_detached_house','rehab_period','head_table_rehab','happylike_period','head_table_happylike','rehab2_period','head_table_rehab2'));
    }

    public function StrokeCenterPage()
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.stroke_center', compact('navigation','banners', 'footer'));
    }

    public function HomeCarePage()
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.home_care', compact('navigation','banners', 'footer'));
    }

    public function PackagePage()
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $packages = PromotionPackage::where('status','active')->get();

        return view('frontend.cared_package', compact('navigation','banners', 'footer','packages'));
    }

    public function PackageDetailPage($id,string $slug)
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $package = PromotionPackage::find($id);

        return view('frontend.package_detail', compact('navigation','banners', 'footer','package'));
    }

    public function CaredShopPage()
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();


        return view('frontend.cared_shop', compact('navigation','banners', 'footer'));
    }

     public function AllArticlesListPage()
    {
        $section_name = 'articles';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $category_id = 1; // ID 1 = Latest News
        $articles = Article::where('category_id',$category_id)->where('status','active')->get();
        $article_categories = ArticleCategory::where('status','active')->get();
        return view('frontend.articles', compact('navigation','banners', 'footer','articles','article_categories','category_id'));
    }

    public function ArticlesListPage(int $category_id,string $slug)
    {
        $section_name = 'articles';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $articles = Article::where('category_id',$category_id)->where('status','active')->get();
        $article_categories = ArticleCategory::where('status','active')->get();
        return view('frontend.articles', compact('navigation','banners', 'footer','articles','article_categories','category_id','slug'));
    }

      public function ArticleDetailPage(int $id,string $slug)
    {
        $section_name = 'articles';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $article = Article::where('id',$id)->where('status','active')->first();
        $article_categories = ArticleCategory::where('status','active')->get();
        $category_id = $article->category_id;
        return view('frontend.article_detail', compact('navigation','banners', 'footer','article','article_categories','id','slug','category_id'));
    }

    public function RateCardPage()
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu();
        $packages = PromotionPackage::where('status','active')
        ->where('package_category_id',3)
        ->where('start_date','<=',now())
        ->where('end_date','>=',now())
        ->get();

        return view('frontend.rate_card', compact('navigation','banners', 'footer','packages'));
    }

    public function FAQsPage()
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();
        $faqs = Faqs::where('status','active')->get();

        return view('frontend.faqs', compact('navigation','banners', 'footer','faqs'));
    }

    public function FrenchiesPage()
    {
        $section_name = 'package';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();


        return view('frontend.frenchies', compact('navigation','banners', 'footer'));
    }


    public function ServiceProcessPage()
    {
        $section_name = 'service';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.service_process', compact('navigation','banners', 'footer'));
    }

    public function ContactUsPage()
    {
        $section_name = 'contact';
        $current_nav = Navigations::where('section_name', $section_name)->where('parent_id',0)->first();
        $section_id = $current_nav->id;
        $banners = Banner::where('status','active')->where('section_id',$section_id)->orderBy('id', 'asc')->get();
        $footer = Footer::get();
        $navigation = $this->getMainMenu(); //Navigations::where('status','active')->get();

        return view('frontend.contact_us', compact('navigation','banners', 'footer'));
    }




}
