<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use DB;

class PagesController extends Controller
{
    //chinh-sach.html
    public function getRuleIndex()
    {
        SEO::setTitle('Chính sách và Điều khoản');

        return view('frontend.pages.rule');
    }

    //lien-he.html
    public function getContactIndex()
    {
        SEO::setTitle('Liên hệ');

        $province_list= DB::table('province')->get();

        return view('frontend.pages.contact', compact(['province_list']));
    }

    //lien-he.html:post
    public function postContact(Request $request)
    {
        $subject= $request->input('subject');
        $name= $request->input('name');
        $email= $request->input('email');
        $phone= $request->input('phone');
        $address= $request->input('diachi');
        $region= $request->input('region');
        $content= $request->input('content');

        $data= array(
            'type'=> $subject,
            'name'=> $name,
            'email'=> $email,
            'provinceid'=> $region,
            'phone'=> $phone,
            'address'=> $address,
            'content'=> $content,
            'created_at'=> date('Y/m/d H:i:s')
        );

        DB::table('contact')->insert($data);

    }

    //lien-he-thanh-cong.html
    public function getContactSuccessIndex()
    {
        SEO::setTitle('Thông báo gửi liên hệ thành công');

        return view('frontend.pages.contact-success');
    }

    //tuyen-dung.html
    public function getHireIndex()
    {
        SEO::setTitle('Tuyển dụng');

        return view('frontend.pages.hire');
    }

    //tin-tuc/hoat-dong-tesc
    public function getTescIndex()
    {
        $tesc_list= DB::table('posts')->where('parent', 'hoat-dong-tesc')->paginate(15);
        return view('frontend.pages.tesc', compact(['tesc_list']));
    }

    //tin-tuc/thi-truong-oto
    public function getOtoIndex()
    {
        $oto_list= DB::table('posts')->where('parent', 'thi-truong-oto')->paginate(15);
        return view('frontend.pages.oto', compact(['oto_list']));
    }

    //tin-tuc.html
    public function getNewsIndex()
    {
        SEO::setTitle('Tin tức');

        $tesc_list= DB::table('posts')->where('parent', 'hoat-dong-tesc')->paginate(15);
        $oto_list= DB::table('posts')->where('parent', 'thi-truong-oto')->paginate(15);

        return view('frontend.pages.news', compact(['tesc_list', 'oto_list']));
    }

    //dich-vu.html
    public function getServicesIndex()
    {
        SEO::setTitle('Dịch vụ');

        $service_list= DB::table('posts')->where('parent', 'dich-vu')->paginate(15);

        return view('frontend.pages.services', compact(['service_list']));
    }

    //gioi-thieu.html
    public function getAboutIndex()
    {
        SEO::setTitle('Giới thiệu');

        $general_list= DB::table('posts')->where('parent', 'gioi-thieu-chung')->paginate(15);
        $sales_list= DB::table('posts')->where('parent', 'bo-phan-ban-hang')->paginate(15);
        $service_list= DB::table('posts')->where('parent', 'bo-phan-dich-vu')->paginate(15);

        return view('frontend.pages.about', compact(['general_list', 'sales_list', 'service_list']));
    }

    //{category}/{slug}-{id}.html
    public function getCatDetailsIndex($category, $slug, $id)
    {
        $post= DB::table('posts')->where('slug', $slug)->first();

        $parent= DB::table('categories')->where('slug', $post->parent)->first();
        return view('frontend.pages.catdetails', compact(['post', 'parent', 'category']));
    }

    //dat-lich-bao-duong.html
    public function getScheduleMaintenanceIndex()
    {
        SEO::setTitle('Đặt lịch bảo dưỡng');

        return view('frontend.pages.schedule-maintenance');
    }

    //dat-lich-bao-duong.html:post
    public function postScheduleMaintenanceIndex()
    {

        return view('frontend.pages.schedule-maintenance_post');
    }

    //dat-lich-bao-duong-save.html:save
    public function saveScheduleMaintenanceIndex(Request $request)
    {

        $website= $request->input('website');
        $vehicles_datlich= $request->input('vehicles_datlich');
        $id_tinhdatlich= $request->input('id_tinhdatlich');
        $name_datlich= $request->input('name_datlich');
        $idhuyen_datlich= $request->input('idhuyen_datlich');
        $email_datlich= $request->input('email_datlich');
        $phone_datlich= $request->input('phone_datlich');
        $bienso_datlich= $request->input('bienso_datlich');
        $cn_datlich= $request->input('cn_datlich');
        $require_baoduong= $request->input('require_baoduong');
        $xekhac= $request->input('xekhac');
        $km_datlich= $request->input('km_datlich');
        $months_datlich= $request->input('months_datlich');
        $frmbaoduong= $request->input('frmbaoduong');
        $ngaydatlich= $request->input('ngaydatlich');
        $description= $request->input('description');

        $data= array([
            'website'=> $website,
            'vehicles_datlich'=> $vehicles_datlich,
            'id_tinhdatlich'=> $id_tinhdatlich,
            'name_datlich'=> $name_datlich,
            'idhuyen_datlich'=> $idhuyen_datlich,
            'email_datlich'=> $email_datlich,
            'phone_datlich'=> $phone_datlich,
            'bienso_datlich'=> $bienso_datlich,
            'cn_datlich'=> $cn_datlich,
            'require_baoduong'=> $require_baoduong,
            'xekhac'=> $xekhac,
            'km_datlich'=> $km_datlich,
            'months_datlich'=> $months_datlich,
            'frmbaoduong'=> $frmbaoduong,
            'ngaydatlich'=> $ngaydatlich,
            'description'=> $description,
            'created_at'=> date('Y/m/d H:i:s')
        ]);

        try {
            DB::table('schedule')->insert($data);
        } catch (\Illuminate\Database\QueryException $e) {
        } catch (\Exception $e) {
        }
        

        return view('frontend.pages.schedule_ok');
    }


    //lai-thu.html
    public function getDrivingIndex()
    {

        SEO::setTitle('Đăng ký lái thử');

        return view('frontend.pages.driving');
    }

    //lai-thu.html:post
    public function postDrivingIndex()
    {

        return view('frontend.pages.driving_post');
    }

    //lai-thu-save.html:save
    public function saveDrivingIndex(Request $request)
    {

        $website= $request->input('website');
        $vehicles_datlich= $request->input('vehicles_datlich');
        $id_tinhdatlich= $request->input('id_tinhdatlich');
        $name_datlich= $request->input('name_datlich');
        $idhuyen_datlich= $request->input('idhuyen_datlich');
        $email_datlich= $request->input('email_datlich');
        $phone_datlich= $request->input('phone_datlich');
        $bienso_datlich= $request->input('bienso_datlich');
        $cn_datlich= $request->input('cn_datlich');
        $require_baoduong= $request->input('require_baoduong');
        $xekhac= $request->input('xekhac');
        $km_datlich= $request->input('km_datlich');
        $months_datlich= $request->input('months_datlich');
        $frmbaoduong= $request->input('frmbaoduong');
        $ngaydatlich= $request->input('ngaydatlich');
        $description= $request->input('description');

        $data= array([
            'website'=> $website,
            'vehicles_datlich'=> $vehicles_datlich,
            'id_tinhdatlich'=> $id_tinhdatlich,
            'name_datlich'=> $name_datlich,
            'idhuyen_datlich'=> $idhuyen_datlich,
            'email_datlich'=> $email_datlich,
            'phone_datlich'=> $phone_datlich,
            'months_datlich'=> $months_datlich,
            'frmbaoduong'=> $frmbaoduong,
            'ngaydatlich'=> $ngaydatlich,
            'description'=> $description,
            'created_at'=> date('Y/m/d H:i:s')
        ]);
        
        try {
            DB::table('driving')->insert($data);
        } catch (\Illuminate\Database\QueryException $e) {
        } catch (\Exception $e) {
        }
        

        return view('frontend.pages.driving_ok');
    }

    //admin/ajax/process_tinhquan.php:post
    public function postProvince(Request $request)
    {
        $cmd= $request->input('cmd');
        $id_tinh= $request->input('id_tinh');

        if($request->ajax()){
            if($cmd== 'load_huyen') {
                $districts= DB::table('district')->where('provinceid', $id_tinh)->get();
                return view('frontend.pages.district_post', compact(['districts']));
            }
            if($cmd== 'load_tinh') {
                $provinces= DB::table('province')->get();
                return view('frontend.pages.province_post', compact(['provinces']));
            }
        }
    }

    //san-pham/{slug}-{id}.html
    public function getProductDetailsIndex($slug, $id)
    {
        $product= DB::table('products')->where('slug', $slug)->first();
        

        if(isset($product)) {
            $parent= DB::table('vehicles')->where('slug', $product->parent)->first();
            $colors= DB::table('product_color')->where('product', $product->slug)->get();
            $outbuilding= DB::table('product_outbuilding')->where('product', $product->slug)->get();
            $furniture= DB::table('product_furniture')->where('product', $product->slug)->get();
            $safe= DB::table('product_safe')->where('product', $product->slug)->get();
            $operate= DB::table('product_operate')->where('product', $product->slug)->get();
            $accessories= DB::table('product_accessories')->where('product', $product->slug)->get();
            $specifications= DB::table('product_specifications')->where('product', $product->slug)->get();

            return view('frontend.pages.product_details', compact([
                'product',
                'parent',
                'slug',
                'id',
                'colors',
                'outbuilding',
                'furniture',
                'safe',
                'operate',
                'accessories',
                'specifications'
                ]));
        }  
    }

    //san-pham.html
    public function getProductsIndex()
    {
        SEO::setTitle('Sản phẩm');

        $products= DB::table('products')->paginate(10);

        return view('frontend.pages.products', compact(['products']));
    }

    //du-toan-chi-phi.html
    public function getPriceIndex()
    {
        SEO::setTitle('Dự toán chi phí');

        return view('frontend.pages.price');
    }

    //ajax/product_slider.php
    public function postProductSlider(Request $request)
    {
        $id= $request->input('id');
        if(isset($id)) {
            $color= DB::table('product_color')->where('id', $id)->first();

            return view('frontend.pages.product_slider', compact(['color']));
        }
        
    }


    //facebook.php
    public function facebookIndex()
    {
        //$arr= array("100007556448257","100009162578251","100003220786817","100004190417466","100009218758533","100012672135254","100007663178470","100009477742034","100007842853541","100023909149547","100015892025420","100005892215869","100023092544119","100010967806510","100016971191726","100003341663984","710199434","100004206703201","100017605925799","100018717752007","100015140057298","100004876786472","100011381655060","100018291870662","100022187951102","100019208251721","100012492132320","100024124891645","100023034660452","100009162578251","100016305962324","100005730157925","100013829434304","100012018611628","100013419281564","100018306243033","100008599328358","100024108609820","100023898554066","100017029247687","100024112394235","100024117942831","100013463611070","100006437039641","100009484930529","100015093161687","100012460053408","100022134336061","100007047782634","100013115079068","100013229734094","100005781103673","100015957184416","100013349164601","100006159674316","100013294117287","100006082801664","100013946971437","100013976739743","100006043846871","100014040240570","100014116514921","100006009514240","100014135527963","100012947740155","100000683017532","100013109838538","100012762406631","100014226526461","100004944493327","100000123692801","100005005563731","100015844810095","100016152108386","100005013632184","100014877154076","100015579333018","100015470944264","100012248233223","100012319002452","100015438103598","100000176894584","100003008924542","100012352218285","100005453054279","100012479680482","100014892250789","100004931311640","100006194294192","1431184137","100012549841180","100000201852708","100000714520130","100012751548765","100005012163574","100022151959669","100005962810463","100000093041635","100017134661482","100000713581784","100017413781199","1846870610","100005696438323","100018265837304","100005675657984","1818535368","100022802530108","1761169420","100018980973824","100005546921748","1750119807","100019229793599","100020086810521","100020403210477","100020464364086","100005763733585","759698749","100022243430743","100022983226595","100022377083696","100000705607859","100022504004958","100022546903249","100005861440712","100022552402434","100022700463215","100005830627160","100022760121837","100005827203081","100005764024621","100005121482774","1287115594","1247964394","100004791706686","100023129048216","100023208619891","100005772010329","100023561063293","100023641146636","100005400009216","1230316525","100002470201724","100014866503809","100001844445838","100002611603571","100001881723045","100002655720649","100002658112422","100001878172327","100002675522878","100002703585543","100002710400843","100002726141720","100002728758145","100001892358730","100002102652444","100003000412254","100002774179391","100002803641210","100001735815109","100002597267315","100002918110221","100001758998275","100001336070499","100001389635586","100001398181928","100001407022841","100001152481248","100001656242881","100001132718000","100001441798835","100001467711107","100001479982829","100002091026397","100001505149065","100001558794504","100002055347702","100001566914014","100001596293270","100001599766695","100001651190346","100001893610919","100002882784167","100001729847701","100014811043756","100005342460368","100005442099970","100002518118532","100005397224894","100002546845109","100005379251215","100002559725174","100002567717870","100002345598389","100020650365304","100014359685882","100005298911872","100014458579349","100014502964371","100014559528470","100014593249077","100005157010068","100005452120289","100002947686052","100002229014826","100001727064486","100002988078138","100001092668270","100001712655593","100001703364039","100002222780244","100002250955003","100002432472108","100002256811689","100002322580862","100002326958016","100002334831044","100002583918795","100005062720769","100002410018105","100003792040021","100020780796979","100010800546135","100007467859029","100006931176767","100010726123337","100010730190781","100004592316821","100010879001572","100007384335671","100004563453061","100000250688567","100010979580903","100004544678130","100011074032251","100004485309055","100011316604121","100007453935203","100004634924117","100004465383857","100007478709328","100003201096764","100006682067620","100006689825013","100006706891768","100006782881847","100003145563184","100006932200969","100007291210192","100003117689155","100007000780169","100007134198722","100007164074739","100004195470890","100007249294028","100011348241597","100010014856097","100009596880798","100004232802943","100009922811185","100009955294124","100004224125166","100000286787313","100009310677991","100000724949244","100010471536397","100010389783653","100004193466018","100010579812511","100010046824007","100010114847994","100000253428596","100004246718543","100000236558918","100011745452977","100011461577686","100011557962033","100011696347923","100004367767054","100012108046270","100009270103281","100012184022535","100004269431589","100011343502210","100004256293361","100009239360981","100006630438603","100011042941781","100001087835864","100008218448217","100008081550108","100008160244872","100009197378924","100008186285259","100008509931116","100000415678815","100003822730434","100008527879035","100008709253624","100004191305673","100000202339145","100008778578842","100003872061648","100007813597723","100000407961016","100004166823043","100004704092614","100021833411198","100021981554727","100022025478986","100019109134774","100007520014105","100003906630965","100004138840333","100000678384176","100003967399730","100007785990508","100003724134250","100000594611485","100001220632900","100009122247425","100003391334552","100006474107519","100006434942083","100006331183495","100003473131878","100008174670906","100003532152262","100006470953967","100002716330798","100001786006480","100001060796878","100004190417466","100003220786817","100009218758533","100007663178470","100012672135254","100009477742034","100007842853541","710199434","100005892215869","100023909149547","100023092544119","100017605925799","100003341663984","100016971191726","100019208251721","100018291870662","100022187951102","100015892025420","100004206703201","100010967806510","100015140057298","100018717752007","100004876786472","100011381655060","100006004368271","100012492132320","100024124891645","100016305962324","100005730157925","100023034660452","100012018611628","100013829434304","100012460053408","100013419281564","100008599328358","100024108609820","100023898554066","100018306243033","100017029247687","100013463611070","100024117942831","100024112394235","100006437039641","100009484930529","100001132718000","100001881723045","100000724949244","100006009514240","100005488177416","100001735815109","100001729847701","100003391334552","100006082801664","100004193466018","100005522791886","100001727064486","100004224125166","100001040955777","100004704092614","100002055347702","100001220632900","100001741768910","100001758998275","100001087835864","100002091026397","100003201096764","100003000412254","100001928114906","100001893610919","100001806664137","100001200332870","100001844445838","100001870685408","100001878172327","100001892358730","100001152481248","100003724134250","100001712655593","100005162733124","100004791706686","100003844201831","100003792040021","100005157010068","100004544678130","100000705607859","100004904284721","100005772010329","100004563453061","100004485309055","100003532152262","100003860193299","100003117689155","100004465383857","100005298911872","100005121482774");
        //$arr= array( "100006397172976", "100006445293493", "100006521643055", "100005452120289", "100011012262225", "100007539940836", "100010546533865", "100014541255229", "100023565743523", "100005655851258", "100023435296980", "100013106460120", "100024324521578", "100007412146747", "100003074561471", "100022583768599", "100022012321175", "100023799062089", "100023905280318", "1838922459758260", "100022456568155", "100015006494803", "100015810571128", "100023597149473", "100021848291050", "100023194275724", "100000008023912", "100000543852108", "100001886293896", "100002799595652", "100003082557289", "100003967399730", "100006417241941", "100003203843560", "100003786201134", "100003804884119", "100003815353871", "100004188073991", "100004236361135", "100004249502583", "100004312244577", "100004256295017", "100004323722295", "100004358651703", "100004428907011", "100004438064828", "100004588831911", "100004617333801", "100004910867701", "100004951398697", "100004974244375", "100004971512612", "100004974858924", "100005031517216", "100005173935448", "100005338264055", "100005345323456", "100005481493605", "100005497362080", "100005481247411", "100005555432571", "100005568735055", "100005597143653", "100005652166225", "100005721632960", "100005740638498", "100005761500296", "100005762620779", "100005908080479", "100006044445568", "100006090558800", "100006078304115", "100006178146376", "100006268896991", "100006180136131", "100006347349252", "100006371117928", "100006707739642", "100006751505435", "100006789167287" );
        
        $arr= array(
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "100009239360981",
            "100002567717870",
            "100017413781199",
            "0",
            "0",
            "100001443731664",
            "100007298208432",
            "100007422783775",
            "0",
            "100007432262709",
            "100007638376154",
            "100007651952728",
            "100007678902456",
            "100007733777048",
            "100007827515181",
            "100007960924729",
            "100008298171083",
            "100008376227124",
            "100008462290436",
            "100008481039389",
            "100008487618468",
            "100008714407608",
            "100009092354165",
            "100009338636543",
            "100009332853746",
            "100009339169308",
            "100009369346448",
            "100009420527027",
            "100009444193002",
            "100009459357465",
            "100009611340169",
            "100009822961279",
            "100009851287012",
            "100009984613996",
            "100010037925363",
            "100010758699329",
            "100010999351942",
            "100011003326069",
            "100012532572406",
            "0",
            
            "100013041064241",
            "100013232535963",
            "100013563279996",
            "100014000921462",
            "100014438013524",
            "100019067025243",
            "100022323564266",
            "100022439271585",
            "0",
            "0",
            "0",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "0",
            "0",
            "0",
            "0",
            "0",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "100022439271585",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "0",
            "100022439271585",
            "100022439271585",
            "0",
            "0",
            "0",
            "0",
            "100022439271585",
        
        );

        return view('frontend.pages.facebook', compact(['arr']));
    }


    //email.php
    public function EmailIndex()
    {
        return view('frontend.pages.email');
    }
}