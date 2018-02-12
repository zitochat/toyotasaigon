<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'tu-van-tai-chinh',
                'name' => 'Tư vấn tài chính',
                'thumb' => 'upload/news/tu-van-tai-chinh31223.jpg',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;">HƯỚNG DẪN THỦ TỤC MUA XE TOYOTA TRẢ GÓP</span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;">CÁ NHÂN MUA XE</span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp; Sao y hộ khẩu tại TPHCM, hoặc KT3. Sao y CMND.<br>
&nbsp;&nbsp;&nbsp; Giấy chứng nhận độc thân hoặc giấy hôn thú<br>
&nbsp;&nbsp;&nbsp; Chứng minh thu nhập bằng: hợp đồng lao động, bảng lương, sổ tiết kiệm, tài khoản cá nhân.<br>
&nbsp;&nbsp;&nbsp; Cá nhân sở hữu tài sản có giá trị: nhà cửa, đất đai, các loại ô tô , máy móc, dây chuyền nhà máy, nhà xưởng,..<br>
&nbsp;&nbsp;&nbsp; Hợp đồng cho thuê xe, thuê nhà, cho thuê xưởng, giấy góp vốn, cổ phần, cổ phiếu, trái phiếu.<br>
&nbsp;&nbsp;&nbsp; Nếu cá nhân có công ty riêng mà thu nhập chủ yếu từ công ty thì thêm: báo cáo thuế, báo cáo tài chính, bảng lương, bảng chia lợi nhuận từ công ty. Giấy phép đăng ký kinh doanh.<br>
&nbsp;&nbsp;&nbsp; Hoá đơn chi phí cá nhân các tháng gần nhất: điện thoại, chi phí giao dịch làm ăn.<br>
&nbsp;&nbsp;&nbsp; Trong trường hợp cá nhân mua không đủ điều kiện, có thể nhờ người thân có khả năng&nbsp; thu nhập tốt làm giấy bảo lãnh cho Ngân hàng thẩm định.<br>
&nbsp;&nbsp;&nbsp; Đơn xin vay vốn Ngân hàng và phương án trả lãi ( theo mẫu của Ngân hàng ).</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;">CÔNG TY HOẶC DOANH NGHIỆP MUA XE</span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp; Giấy phép đăng ký kinh doanh.<br>
&nbsp;&nbsp;&nbsp; Giấy bổ nhiệm Giám đốc, bổ nhiệm kế toán trưởng .<br>
&nbsp;&nbsp;&nbsp; Báo cáo thuế 01 năm gần nhất.<br>
&nbsp;&nbsp;&nbsp; Báo cáo hoá đơn VAT 01 năm gần nhất.<br>
&nbsp;&nbsp;&nbsp; Báo cáo tài chính 01 năm gần nhất.<br>
&nbsp;&nbsp;&nbsp; Điều lệ công ty.<br>
&nbsp;&nbsp;&nbsp; Biên bản họp của hội đồng quản trị.<br>
&nbsp;&nbsp;&nbsp; Hợp đồng kinh tế đầu ra, đầu vào.<br>
&nbsp;&nbsp;&nbsp; Giấy sở hữu cơ sở vật chất: nhà máy, dây chuyền, máy móc, thiết bị, nhà xưởng, ôtô khác<br>
&nbsp;&nbsp;&nbsp; Đơn xin vay vốn ngân hàng và phương án trả lãi ( theo mẫu của Ngân hàng ).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;">NGÂN HÀNG HOẶC CÔNG TY CHO THUÊ TÀI CHÍNH SẼ TÀI TRỢ</span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size: 14px;"><a href="http://vayvon-nganhang.com/" style="color: rgb(216, 73, 73); margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-decoration: none; transition: background 180ms ease-in, color 180ms ease-in, border-color 180ms ease-in;"><span style="color: rgb(0, 0, 0);"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Ngân hàng</span></span></a></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp; Mức tài trợ thông thường 70% trên tài sản thế chấp.<br>
&nbsp;&nbsp;&nbsp; Thời gian tối đa 4 năm.<br>
&nbsp;&nbsp;&nbsp; Lãi suất thông thường của NGTMCP :<br>
&nbsp;&nbsp;&nbsp; Thời gian thẩm định hồ sơ sau khi nhận đầy đủ 07 ngày.<br>
&nbsp;&nbsp;&nbsp; Chi phí : phí thủ tục hành chánh .<br>
&nbsp;&nbsp;&nbsp; Thủ tục hành chánh tại ngân hàng gồm: phí đảm bảo tài sản, phí mở tài khoản, phí công chứng sao y, cà vẹt xe, mua bảo hiểm thân xe 1,5% trị giá xe trong thời gian vay.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;">QUY TRÌNH MUA XE TRẢ GÓP</span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size: 14px;"><span style="color: rgb(0, 0, 0);">&nbsp; Khách hàng chuẩn bị đầy đủ hồ sơ theo hướng dẫn của nhân viên tín dụng.<br>
&nbsp;&nbsp;&nbsp; Nhân viên thẩm định đến tận nhà để thẩm định và lấy hồ sơ.<br>
&nbsp;&nbsp;&nbsp; Sau khi có giấy tài trợ tín dụng và hồ sơ xe.<br>
&nbsp;&nbsp;&nbsp; Khách hàng phải tiến hành đóng tiền xe và chi phí làm thủ tục đăng ký xe.<br>
&nbsp;&nbsp;&nbsp; Khi có biển số xe và có giấy hẹn, khách hàng lên ngân hàng ký hợp đồng tín dụng, đóng phí hành chính và giấy nhận nợ của ngân hàng.<br>
&nbsp;&nbsp;&nbsp; Khi tiền chuyển khoản của ngân hàng vào tài khoản của Công Ty <a href="http://toyotasaigon.com/">Toyota Đông Sài Gòn</a> , thì khách hàng mang theo CMND và giấy giới thiệu lên nhận xe, ký biên bản bàn giao xe với giấy tờ xe hợp lệ theo pháp luật.<br>
&nbsp;&nbsp;&nbsp; Khi có giấy đăng ký xe, Ngân hàng sẽ đi đăng ký và sao y cho khách hàng một bản để sử dụng.<br>
&nbsp;&nbsp;&nbsp; Trường hợp khách mua qua Công ty cho thuê tài chính thì khách hàng đóng tiền xe tại Công ty cho thuê tài chính. Chi phí đăng ký xe khách hàng phải chịu, Biên bản bàn giao xe 03 bên cùng ký để công ty cho thuê tài chính giải ngân cho hãng xe.<br>
&nbsp;&nbsp;&nbsp; Trường hợp khách hàng ở tỉnh mua xe trả góp thì chi phí Dịch vụ đi đăng ký xe do khách hàng chịu, tùy theo tỉnh xa hay gần mà thỏa thuận.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color: rgb(0, 0, 255);"><span style="font-size: 14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Quý khách vui lòng liên hệ đường dây nóng số 1900 6428 - 1900 6438</span></span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-12 00:00:00',
                'updated_at' => '2018-02-21 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'tu-van-bao-hiem',
                'name' => 'Tư vấn bảo hiểm',
                'thumb' => 'upload/news/tu-van-bao-hiem02302.jpg',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">QUY TẮC BẢO HIỂM XE CƠ GIỚI</span></span></span><br>
<span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">Trên cơ sở Người Được Bảo Hiểm bằng Giấy yêu cầu bảo hiểm và bản kê khai là bộ phận cấu thành của hợp đồng bảo hiểm đã yêu cầu CÔNG TY TNHH BẢO HIỂM LIBERTY (sau đây gọi tắt là Công Ty Bảo Hiểm) cho bảo hiểm có nội dung dưới đây, và đã thanh toán hoặc đồng ý thanh toán phí bảo hiểm cho loại hình bảo hiểm này;</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color: rgb(0, 0, 255);"><span style="font-size: 14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">NAY HỢP ĐỒNG BẢO HIỂM NÀY LÀ BẰNG CHỨNG BẢO HIỂM</span></span></span><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">&nbsp;đối với những sự cố xảy ra trong Thời Hạn Bảo Hiểm và tuân theo các điều khoản, các điểm loại trừ và các điều kiện trong Hợp Đồng Bảo Hiểm hay được sửa đổi theo đó (sau đây gọi chung là Điều Khoản của Hợp Đồng Bảo Hiểm này)</span></span><br>
<span style="color: rgb(255, 0, 0);"><span style="font-size: 14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">ĐIỀU KIỆN CHUNG</span></span></span><br>
<span style="color: rgb(0, 0, 255);"><span style="font-size: 14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">1. Sự Diễn Giải:</span></span></span><br>
<span style="color: rgb(0, 0, 0);"><span style="font-size: 14px;">Hợp Đồng Bảo Hiểm và Bản Tóm Tắt Hợp Đồng Bảo Hiểm này được xem xét cùng nhau như là một hợp đồng duy nhất và bất kỳ từ hay ngữ nào mang một ý nghĩa cụ thể trong bất cứ phần nào của</span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-15 00:00:00',
                'updated_at' => '2018-02-15 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'chinh-sach-bao-hanh',
                'name' => 'Chính sách bảo hành',
                'thumb' => 'upload/news/chinh-sach-bao-hanh31310.jpg',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">NHỮNG GÌ ĐƯỢC BẢO HÀNH</span></span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bắt đầu bảo hành</span><br>
Chế độ bảo hành bắt đầu khi xe được giao cho chủ xe đầu tiên.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Thời hạn bảo hành cơ bản</span></span></span>
<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Trong vòng 36 tháng hay 100.000km tùy thuộc điều kiện nào đến trước, Toyota đảm bảo sẽ sửa chữa hoặc thay thế bất kỳ phụ tùng nào của xe Toyota mới bị hỏng hóc, trong điều kiện hoạt động bình thường, do nguyên liệu không tốt hay do lỗi lắp ráp, trừ những điều ghi trong mục "Những gì không được bảo hành". Bảo hành vẫn áp dụng khi xe được chuyển nhượng cho những chủ xe khác.</span></span></p>
</li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Ắc quy</span><br>
Thời hạn bảo hành cho ắc quy là 12 tháng hoặc 20.000km tuỳ điều kiện nào tới trước.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Lốp xe</span><br>
Ðược bảo hành theo một chế độ riêng của nhà sản xuất lốp.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Miễn phí</span><br>
Mọi sửa chữa thuộc chế độ bảo hành (phụ tùng và/hoặc công lao động) là miễn phí.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Phạm vi áp dụng bảo hành</span><br>
Việc bảo hành chỉ áp dụng trong phạm vi Việt Nam.</span></span></li>
</ul>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">NHỮNG GÌ KHÔNG ĐƯỢC BẢO HÀNH</span></span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Những yếu tố ngoài kiểm soát của nhà sản xuất:</span></span></span>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Những sửa chữa hay điều chỉnh do sử dụng sai (đi quá nhanh, chở quá nặng), cẩu thả, sửa, thay đổi, tự ý tháo lắp các bộ phận xe, sửa chữa điều chỉnh không đúng kỹ thuật, tai nạn, lắp thêm phụ tùng/phụ kiện, không thuộc chế độ bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Xước sơn do đá, ăn mòn do mỹ phẩm không được bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Hư hại hay bị ăn mòn do môi trường như mưa axit, hóa chất, nhựa cây, muối, hà, mưa bão sấm chớp, lũ lụt và những tác động tự nhiên khác không được bảo hành.</span></span></li>
</ul>
</li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Không bảo dưỡng xe dùng sai nguyên liệu, dầu bôi trơn.</span><br>
Sửa chữa, điều chỉnh do bảo dưỡng xe không phù hợp, không bảo dưỡng hay dùng nhiên liệu, dầu bôi trơn khác với những loại ghi trong cuốn "Hướng dẫn sử dụng" không thuộc chế độ bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Chi phí bảo dưỡng thuộc trách nhiệm của chủ xe</span><br>
Chủ xe có trách nhiệm bảo dưỡng xe như kiểm tra hoạt động của máy, thay dầu bôi trơn, rửa xe, đánh bóng, thay bầu lọc, nước làm mát, buzi, cầu chì, thay chổi gạt mưa, má phanh, đĩa côn đã mòn. Ðó là việc bảo dưỡng thường xuyên cho mọi loại xe.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Tiếng động bình thường, xe rung, giảm giá trị tự nhiên</span><br>
Tiếng động bình thường, xe rung, sự ăn mòn hay bị giảm giá trị tự nhiên như ngả màu, biến dạng, tỳ vết, không được bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Thay đổi đồng hồ đo</span><br>
Mọi hỏng hóc đối với chiếc xe nào đã bị thay đổi hay điều chỉnh đồng hồ công-tơ-mét dẫn đến không xác định được số đo chính xác đều không được bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Chi phí phụ</span><br>
Thiệt hại phụ hoặc hậu quả kèm theo như gọi điện thoại, mất thời gian, nhỡ việc hay thiệt hại về thương mại không thuộc chế độ bảo hành.</span></span></li>
</ul>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">TRÁCH NHIỆM CỦA CHỦ XE</span></span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Ðưa xe đến bảo hành</span><br>
Bạn có trách nhiệm đưa xe đi đến bất kỳ Ðại lý/Trạm bảo hành và sửa chữa được Toyota uỷ quyền nào tại Việt Nam để làm bảo hành.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#0000FF;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bảo dưỡng xe</span></span></span><br>
<span style="color:#000000;">Bạn có trách nhiệm sử dụng xe, bảo dưỡng xe một cách hợp lý và quan tâm tới xe theo đúng những chỉ dẫn ghi trong cuốn "Hướng dẫn sử dụng". Nếu xe của bạn được sử dụng trong điều kiện khắc nghiệt, bạn càng phải chú ý bảo dưỡng xe như yêu cầu trong cuốn "Hướng dẫn sử dụng".</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#0000FF;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Ghi lại những lần bảo dưỡng</span></span></span><br>
<span style="color:#000000;">Bạn có trách nhiệm ghi lại tất cả những lần bảo dưỡng xe. Ðiều này cần thiết vì trong một số trường hợp nó chứng tỏ bạn đã bảo dưỡng xe theo như yêu cầu.</span></span></li>
</ul>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">NHỮNG THÔNG TIN CẦN THIẾT VỚI CHỦ SỞ HỮU XE TOYOTA</span></span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Những nơi bạn có thể nhận được dịch vụ bảo hành</span><br>
Ðại lý/ Trạm bảo hành ủy quyền Toyota của bạn sẽ thực hiện những sửa chữa cần thiết sử dụng những phụ tùng mới hoặc những phụ tùng tái chế. Dù bất kỳ đại lý/Trạm bảo hành Toyota nào ở Việt Nam cũng thực hiện dịch vụ bảo hành, Toyota khuyên bạn trở lại đại lý/Trạm bảo hành bán xe cho bạn vì những quan tâm lâu dài và đặc biệt của họ đối với bạn.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Ði du lịch/Di chuyển sang nước khác</span><br>
Nếu bạn đi du lịch hoặc di chuyển sang nước khác và hỏng hóc xảy ra, hãy liên hệ với Ðại lý Toyota ở địa phương. Tuy vậy, xin lưu ý rằng, dịch vụ bảo hành có thể không được cung cấp bởi đại lý tại địa phương, vì xe Toyota của bạn có thể không tuân thủ theo qui định và/hoặc những yêu cầu về môi trường của quốc gia đó.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Làm hài lòng khách hàng</span><br>
Hãng Toyota chúng tôi tự hào về những cam kết của mình về chất lượng, mẫu mã, trình độ tay nghề và thỏa mãn nhu cầu của khách hàng. Tất cả đại lý/ Trạm bảo hành Toyota tại Việt Nam được trang bị những thiết bị, đồ nghề và dự những khoá đào tạo để phục vụ và sửa chữa xe Toyota.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Những thông tin cần thiết</span><br>
Trong trường hợp hỏng hóc xảy ra, hãy chuẩn bị những thông tin sau đây:</span></span>
<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Mô tả chính xác về những hỏng hóc bao gồm những điều kiện hoạt động.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Model và năm sản xuất.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Số nhận dạng phương tiện (VIN)</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Số đo công tơ mét hiện thời.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Ngày mua xe.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Ðại lý/Trạm bảo hành bán xe và thực hiện dịch vụ.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Thống kê quá trình dịch vụ xe của bạn.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Ðể đáp ứng một cách nhanh nhất có thể, chúng tôi đề nghị bạn tuân theo những thủ tục được tóm lược dưới đây.</span></span></li>
</ul>
</li>
</ul>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#0000FF;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bước 1: Liên hệ với Ðại lý/Trạm bảo hành Toyota của bạn</span></span><br>
<span style="color:#000000;">Ðây là cách trực tiếp nhất để giải quyết những vấn đề của bạn. Tất cả những đại lý/Trạm bảo hành Toyota ở Việt Nam là người chịu trách nhiệm cuối cùng trong việc cung cấp các dịch vụ và sửa chữa bạn cần. Ðầu tiên, liên hệ với Trưởng phòng dịch vụ của đại lý/ Trạm dịch vụ hoặc với nhân viên phụ trách quan hệ với khách hàng. Giải thích đầy đủ về tình trạng hỏng hóc. Nếu bạn thấy rằng vấn đề không được giải quyết, hãy trình bày với Giám đốc đại lý của bạn là người quan tâm nhất đến sự hài lòng và sự lui tới của bạn. Nếu đại lý Toyota của bạn không thể đưa ra giải pháp...</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#0000FF;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bước 2: Liên hệ với Công ty ôtô Toyota Việt Nam (TMV).</span></span><br>
<span style="color:#000000;">Liên hệ với phòng dịch vụ của TMV được ghi trên Phiếu đăng ký bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: justify; background-color: rgb(251, 251, 251);"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">DUY TRÌ XE TRONG TÌNH TRẠNG TỐT NHẤT BẰNG VIỆC BẢO DƯỠNG PHÙ HỢP</span></span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Kiểm tra trước khi giao xe</span><br>
Ðể làm bạn hoàn toàn hài lòng về diện mạo cũng như hoạt động của xe, Ðại lý/ Trạm bảo hành có trách nhiệm thực hiện việc kiểm tra, lau rửa, thử nghiệm đối với chiếc xe của bạn. Ðiều này được thực hiện để đảm bảo chắc chắn rằng xe được giao cho bạn trong tình trạng tốt nhất sau khi vận chuyển từ nhà máy đến.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bảo dưỡng miễn phí 1.000 Km</span><br>
Xe của bạn sẽ được bảo dưỡng 1.000 km miễn phí khi bạn trình sổ bảo hành này cho Ðại lý/ Trạm bảo hành Toyota của bạn. Việc bảo dưỡng sẽ tuân thủ theo đúng những yêu cầu trong cuốn "Hướng dẫn sử dụng" và miễn phí, trừ những chi phí cho việc thay dầu bôi trơn, bầu lọc nếu có vì đó là nội dung bảo dưỡng thường xuyên.</span></span></li>
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span class="title" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Bảo dưỡng định kỳ</span><br>
Việc bảo dưỡng theo đúng yêu cầu sẽ đảm bảo hoạt động tốt nhất, độ tin cậy và tuổi thọ dài hơn cho xe Toyota của bạn.</span></span>
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Ðể đảm bảo rằng chiếc xe Toyota của bạn ở trong tình trạng tốt nhất, điều tối quan trọng là xe phải được kiểm tra và bảo dưỡng định kỳ theo những yêu cầu trong cuốn "Hướng dẫn sử dụng".</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Trong cuốn "Hướng dẫn sử dụng" có một bảng ghi nội dung bảo dưỡng cần thiết và một mục ghi những việc bạn có thể tự làm lấy. Chu trình bảo dưỡng và sửa chữa là kết quả của kinh nghiệm và thử nghiệm và hệ quả là xe của bạn được bảo dưỡng một cách hiệu quả và kinh tế nhất.</span></span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Nếu xe được sử dụng trong điều kiện khắc nghiệt, bạn càng phải bảo dưỡng xe thường xuyên hơn. Một lần nữa, hãy xem cuốn "Hướng dẫn sử dụng".</span></span></p>
</li>
</ul>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-14 00:00:00',
                'updated_at' => '2018-02-15 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'bao-duong-dinh-ky',
                'name' => 'Bảo dưỡng định kỳ',
                'thumb' => 'upload/news/bao-duong-dinh-ky01131.jpg',
            'content' => '<table border="0" cellpadding="0" cellspacing="0" style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0);background-attachment:initial;background-clip:initial;background-image:initial;background-origin:initial;background-position:initial;background-repeat:initial;background-size:initial;/* border:1px solid rgb(255, 0, 0) !important; */box-sizing:border-box;color:rgb(98, 98, 98);font-family:arial;font-stretch:inherit;line-height:21px;margin:0px;outline:0px;padding:0px;vertical-align:baseline;width:100%;" width="100%">
<tbody style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">
<tr style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 15px !important;">
<td style="margin: 0px; padding: 2px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; font-family: Tahoma; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;  background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<div align="justify" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#FF0000;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Mục Đích Của Bảo Dưỡng Định Kỳ</span></span></span></span>

<hr style="margin-bottom: 38px; height: 1px; border-width: initial; border-style: none; clear: both; margin-left: 10px; margin-right: 10px; background: rgb(228, 228, 228);">
<p style="text-align: center;"><span style="font-size:16px;"><span style="color:#000000;"><img src="http://www.toyotasaigon.com/Uploads/images/bd1.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 340px; max-width: 100%; border: 0px solid; width: 500px;"><br>
Xe ô tô được cấu tạo bởi một số lượng lớn các chi tiết, do đó chúng có thể bị mòn, yếu hay ăn mòn làm giảm tính năng, tùy theo điều kiện hay khoảng thời gian sử dụng.<br>
Từ các chi tiết cấu tạo nên xe, có thể dự đóan được rằng tính năng của chúng sẽ giảm đi, do đó cần phải được bảo dưỡng định kỳ, sau đó điều chỉnh hay thay thế để duy trì tính năng của chúng. Bằng cách tiến hành bảo dưỡng định kỳ, xe của bạn có thể đạt được những kết quả sau:<br>
1. Ngăn chặn được những vấn đề lớn có thể xảy ra sau này.<br>
2. Xe ô tô có thể duy trì được trạng thái hoạt động tốt và thỏa mãn được những tiêu chuẩn của pháp luật.<br>
3. Kéo dài tuổi thọ của xe.<br>
4. Khách hàng có thể tiết kiệm chi phí và lái xe an toàn hơn.</span></span></p>
</div>
</td>
</tr>
<tr style="margin: 0px;padding: 0px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: inherit;line-height: inherit;font-family: inherit;vertical-align: baseline;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204) !important; */height: 15px !important;">
<td style="margin: 0px;padding: 2px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: 11px;line-height: inherit;font-family: Tahoma;vertical-align: middle;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204); */background-image: initial;background-attachment: initial;background-size: initial;background-origin: initial;background-clip: initial;background-position: initial;background-repeat: initial;">
<div align="justify" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#0000FF;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Lịch Bảo Dưỡng</span></span></span></span>
<hr style="margin-bottom: 38px; height: 1px; border-width: initial; border-style: none; clear: both; margin-left: 10px; margin-right: 10px; background: rgb(228, 228, 228);">
<p style="text-align: center;"><span style="font-size:16px;"><span style="color:#000000;"><img src="http://www.toyotasaigon.com/Uploads/images/bd2.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 340px; max-width: 100%; border: 0px solid; width: 500px;"><br>
Những hạng mục công việc của bảo dưỡng định kỳ và chu kỳ sửa chữa của xe được chỉ rõ trong bảng lịch bảo dưỡng định kỳ trong quyển "Hướng dẫn sử dụng", "Bổ sung hướng dẫn sử dụng" hay "Sổ bảo hành".<br>
Lịch bảo dưỡng được quy định bởi những yếu tố sau: kiểu xe, tuổi&nbsp;<span style="font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit;">ử dụng, hay cách sử dụng xe.</span></span></span></p>
</div>
<span style="font-size:16px;"><span style="color:#000000;"><span style="text-align: justify;">T, R, I, A, L là viết tắt của các thao tác bảo dưỡng.</span></span></span>

<div align="justify" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;"><span style="font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit;">T = Siết chặt đến mômen tiêu chuẩn</span>của xe, nước s<br>
R = Thay thế hay thay đổi<br>
I = Kiểm tra và chỉnh sửa hay thay thế nếu cần<br>
A = Kiểm tra và/hay điều chỉnh nếu cần<br>
L = Bôi trơn</span></span></div>
</td>
</tr>
<tr style="margin: 0px;padding: 0px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: inherit;line-height: inherit;font-family: inherit;vertical-align: baseline;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204) !important; */height: 15px !important;">
<td style="margin: 0px;padding: 2px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: 11px;line-height: inherit;font-family: Tahoma;vertical-align: middle;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204); */background-image: initial;background-attachment: initial;background-size: initial;background-origin: initial;background-clip: initial;background-position: initial;background-repeat: initial;"><span style="font-size:16px;"><span style="color:#000000;">&nbsp;</span></span><br>
&nbsp;</td>
</tr>
<tr style="margin: 0px;padding: 0px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: inherit;line-height: inherit;font-family: inherit;vertical-align: baseline;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204) !important; */height: 15px !important;">
<td style="margin: 0px;padding: 2px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: 11px;line-height: inherit;font-family: Tahoma;vertical-align: middle;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204); */background-image: initial;background-attachment: initial;background-size: initial;background-origin: initial;background-clip: initial;background-position: initial;background-repeat: initial;">
<div align="justify" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#0000FF;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Chu kỳ bảo dưỡng</span></span></span></span>
<hr style="margin-bottom: 38px; height: 1px; border-width: initial; border-style: none; clear: both; margin-left: 10px; margin-right: 10px; background: rgb(228, 228, 228);">
<p style="text-align: center;"><span style="font-size:16px;"><span style="color:#000000;"><img src="http://www.toyotasaigon.com/Uploads/images/bd4.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 340px; max-width: 100%; border: 0px solid; width: 500px;"><br>
Chu kỳ bảo dưỡng được xác định tùy theo quãng đường xe đi được và khoảng thời gian sử dụng xe tính từ lần bảo dưỡng trước.<br>
Ví dụ, nếu lịch bảo dưỡng cho một chi tiết nào đó được nêu ra là 40.000 km hay 24 tháng, việc bảo dưỡng sẽ đến hạn tại thời điểm mà một trong hai điều kiện này thỏa mãn. Xe này do đó đến hạn bảo dưỡng như sau: Lái xe 40.000 km/12 tháng sau lần bảo dưỡng trước (<img border="0" height="12" src="http://www.toyotasaigon.com/vn/images/service/1.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: auto; max-width: 100%; border: 0px;" width="12">) hay lái xe 5.000 km/24 tháng sau lần bảo dưỡng trước (<img border="0" height="12" src="http://www.toyotasaigon.com/vn/images/service/2.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: auto; max-width: 100%; border: 0px;" width="12">).</span></span></p>
</div>
</td>
</tr>
<tr style="margin: 0px;padding: 0px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: inherit;line-height: inherit;font-family: inherit;vertical-align: baseline;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204) !important; */height: 15px !important;">
<td style="margin: 0px;padding: 2px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: 11px;line-height: inherit;font-family: Tahoma;vertical-align: middle;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204); */background-image: initial;background-attachment: initial;background-size: initial;background-origin: initial;background-clip: initial;background-position: initial;background-repeat: initial;"><span style="font-size:16px;"><span style="color:#000000;">&nbsp;</span></span><br>
&nbsp;</td>
</tr>
<tr style="margin: 0px;padding: 0px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: inherit;line-height: inherit;font-family: inherit;vertical-align: baseline;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204) !important; */height: 15px !important;">
<td style="margin: 0px;padding: 2px;font-style: inherit;font-variant: inherit;font-weight: inherit;font-stretch: inherit;font-size: 11px;line-height: inherit;font-family: Tahoma;vertical-align: middle;outline: 0px;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);box-sizing: border-box;/* border: 1px solid rgb(204, 204, 204); */background-image: initial;background-attachment: initial;background-size: initial;background-origin: initial;background-clip: initial;background-position: initial;background-repeat: initial;">
<div align="justify" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#0000FF;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span class="style2" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Nếu xe được sử dụng dưới bất kỳ một trong các điều kiện sau đây, sẽ cần phải bảo dưỡng thường xuyên</span>:</span></span></span></span>
<hr style="margin-bottom: 38px; height: 1px; border-width: initial; border-style: none; clear: both; margin-left: 10px; margin-right: 10px; background: rgb(228, 228, 228);">
<p style="text-align: center;"><span style="font-size:16px;"><span style="color:#000000;"><img src="http://www.toyotasaigon.com/Uploads/images/bd5.jpg" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 340px; max-width: 100%; border: 0px solid; width: 500px;"><br>
1. Điều kiện mặt đường:<br>
Đường xấu hay có nhiều bùn, đường có tuyết đang tan, đường có nhiều bụi.<br>
2. Điều khiển lái xe:</span></span></p>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Xe được sử dụng để kéo rơmóc, hay kéo theo xe cắm trại hoặc chở đồ trên nóc.</span></span></li>
</ul>

<ul ..="" images="" style="margin: 0px 0px 0px 20px; padding-right: 0px; padding-left: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; list-style: square url(" ul_dash.png="">
<li style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="font-size:16px;"><span style="color:#000000;">Xe dùng để lặp lại những quãng đường ngắn dưới 8 km liên tục với nhiệt độ dưới không.</span></span></li>
</ul>
</div>
</td>
</tr>
</tbody>
</table>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-21 00:00:00',
                'updated_at' => '2018-02-14 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'dieu-kien-khong-duoc-bao-hanh',
                'name' => 'Điều kiện không được bảo hành',
                'thumb' => 'upload/news/dieu-kien-ko-duoc-bao-hanh12022.jpg',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><br>
<span style="color:#FF0000;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">NHỮNG GÌ KHÔNG ĐƯỢC BẢO HÀNH</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">1. Bất kỳ thiết bị, phụ tùng nào của xe không phải là động cơ hay hộp số</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">2. Những yếu tố ngoài kiểm soát của nhà sản xuất</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">- Những sửa chữa và điều chỉnh do sử dụng sai (đua xe, chở quá tải), cẩu thả, tự ý sửa đổi, biến cải, đấu nối, tháo ngắt, sửa chữa hoặc điều chỉnh không đúng kỹ thuật, tai nạn, tự ý lắp thêm phụ tùng phụ kiện không được hưởng chế độ bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">- Hư hại hay bị ăn mòn do môi trường như mưa axít, bụi phóng xạ (hóa chất) muối, hà, mưa bão, sấm chớp, lũ lụt và những tác động tự nhiên khác không được bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">3. Không bảo dưỡng xe, dùng sai nhiên liệu, dầu hoặc chất bôi trơn</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Sửa chữa, điều chỉnh do bảo dưỡng xe không phù hợp, không bảo dưỡng hay dùng nhiên liệu, dung dịch khác với những loại ghi trong cuốn hướng dẫn sử dụng không được hưởng chế độ bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">4. Tiếng động bình thường, xe rung, giảm giá trị tự nhiên</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Tiếng động bình thường, xe rung, sự ăn mòn hay giảm giá trị tự nhiên không được bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">5. Thay đổi đồng hồ đo</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Mọi hỏng hóc đối với những xe nào đã bị thay đổi hay điều chỉnh đồng hồ công tơ mét dẫn đến không xác định được số đo chính xác đều không được bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">6. Chi phí phụ</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Thiệt hại hoặc hậu quả kèm theo như gọi điện thoại, mất thời gian, nhỡ việc hay thiệt hại về thương mại không được bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><br>
<span style="color:#FF0000;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">TRÁCH NHIỆM CỦA CHỦ XE</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">1. Đưa xe đến bảo hành:</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Bạn có trách nhiệm đưa xe đến Trung tâm xe đã qua sử dụng Toyota Đông Sài Gòn (TESC) để làm bảo hành.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">2. Bảo dưỡng xe:</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Bạn có trách nhiệm sử dụng xe, bảo dưỡng xe một cách hợp lý và quan tâm tới chiếc xe theo đúng những chỉ dẫn ghi trong cuốn Hướng dẫn sử dụng. Nếu xe của bạn được sử dụng trong điều kiện khắc nghiệt, bạn càng phải chú ý bảo dưỡng xe như yêu cầu trong cuốn Hướng dẫn sử dụng.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:14px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">3. Ghi lại những lần bảo dưỡng</span></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:14px;">Bạn có trách nhiệm ghi lại tất cả những lần bảo dưỡng xe, Điều này cần thiết vì trong một số trường hợp nó chứng tỏ bạn đã bảo&nbsp; dưỡng xe theo yêu cầu.</span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'dich-vu-cho-thue-xe-toyota-dong-sai-gon',
                'name' => 'Dịch vụ cho thuê xe Toyota Đông Sài gòn',
                'thumb' => 'upload/news/dich-vu-cho-thue-xe-toyota-dong-sai-gon13001.jpg',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color:#0000FF;"><span style="font-size:16px;">Để gia tăng tiện ích cho khách hàng</span></span></strong><span style="color:#000000;"><span style="font-size:16px;">, từ năm 2010, chúng tôi đã đưa vào khai thác dịch vụ cho thuê xe ô tô hợp đồng ngắn hạn và dài hạn với các tiêu chuẩn, chất lượng tốt nhất và giá cả cạnh tranh.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:16px;">Chúng tôi có đầy đủ các loại xe Toyota mới và xe Toyota đã qua sử dụng dành cho khách hàng là cá nhân hoặc đơn vị có nhu cầu thuê xe. Dịch vụ trọn gói bao gồm các chi phí liên quan trong quá trình sử dụng xe, như: xăng dầu, bảo trì, bảo dưỡng, bảo hiểm, lương tài xế, v...v... Đặc biệt, trên xe có trang bị thiết bị định vị GPS, giúp quý khách hàng dễ dàng xác định vị trí của xe và kiểm tra lộ trình hằng ngày, hằng tháng...</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:16px;">Bằng uy tín và chất lượng dịch vụ hoàn hảo, chúng tôi cam kết minh bạch trong vấn đề xác định số km sử dụng, thời gian sử dụng trong và ngoài giờ; Đội ngũ nhân viên lái xe phục vụ &nbsp;chuyên nghiệp và tuân thủ pháp luật khi tham gia lưu thông trên đường sẽ giúp khách hàng yên tâm khi trở thành đối tác lâu dài với Công ty.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:16px;">Song song với công tác theo dõi và phục vụ khách hàng sử dụng xe trong suốt quá trình cho thuê, Công ty chúng tôi luôn đảm bảo xe được vệ sinh sạch sẽ, bảo dưỡng an toàn bằng chất lượng dịch vụ hiện có của Toyota Đông Sài Gòn.</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><strong><span style="color:#0000FF;"><span style="font-size:16px;"><u>Mọi chi tiết vui lòng liên hệ với chúng tôi theo địa chỉ:</u></span></span></strong></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="color:#000000;"><span style="font-size:16px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Công ty Cổ Phần <a href="http://toyotasaigon.com/">Toyota Đông Sài Gòn</a></span><br>
<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">507 Xa Lộ Hà Nội, Quận 2, TP.HCM</span><br>
<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Điện thoại: 08. 38989242 hoặc Di động: 0913161956 (Mr. Phương)</span><br>
<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">Email: phuong.hkn@toyotasaigon.com</span></span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-15 00:00:00',
                'updated_at' => '2018-02-12 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'hoi-thi-tay-nghe-noi-bo-tesc-2016',
                'name' => 'Hội thi tay nghề nội bộ TESC 2016',
                'thumb' => 'http://toyotasaigon.com/upload/news/hoi-thi-tay-nghe-noi-bo-tesc-201610101.JPG',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">&nbsp;</span><strong><span style="color:#0000FF;">Ngày 05/06/2016, Toyota Đông Sài Gòn</span></strong><span style="color:#000000;"> đã tổ chức hội thi tay nghề nội bộ năm 2016 với 3 nội dung Tư vấn bán hàng, Cố vấn dịch vụ và Kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">- Để đến được vòng thi chung kết các thí sinh phải trải qua phần thi vòng loại để chọn ra được những cá nhân xuất sắc tham dự vòng thi chung kết</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2324.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2329.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2354.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2364.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi tư vấn bán hàng</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2374.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi cố vấn dịch vụ</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2381.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2876.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2917.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2423.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2459.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Phần thi thực hành tư vấn bán hàng</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2477.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2489.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Phần thi kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2530.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2585.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">- Sau khi trải qua phần thi lý thuyết và thực hành cùng với sự làm việc hết sức nghiêm túc của Ban giám khảo hội thi đã chọn ra được những cá nhân xuất sắc đại diện TESC tham gia hội thi tay nghề Toyota Việt Nam</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2607.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đạt giải ba</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2610.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đạt giải nhì</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2633.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đại diện TESC tham gia hội thi tay nghề TMV</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Hy vọng qua hội thi các bạn sẽ cố gắng trau dồi kiến thức và kỹ năng để phục vụ khách hàng tốt hơn và đạt thành tích cao trong kỳ thi sắp tới</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2641.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 401px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'hoat-dong-tesc',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => '2018-02-14 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'nhung-thay-doi-tren-xe-corlla-altis-2016',
                'name' => 'Những thay đổi trên xe Corlla Altis 2016',
                'thumb' => 'http://toyotasaigon.com/upload/news/toyota-viet-nam-gioi-thieu-nhung-diem-thay-doi-tren-xe-corolla-altis-201612120.jpg',
            'content' => '<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;"><span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;"><em style="border: 0px; margin: 0px; padding: 0px;"><span style="color:#0000FF;">Hà Nội, 17/05/2016</span>&nbsp;</em></span><span style="border: 0px; margin: 0px; padding: 0px;">–Công ty ô tô Toyota Việt Nam (TMV) chính thức giới thiệu&nbsp;</span><span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Corolla Altis mới 2016</span><span style="border: 0px; margin: 0px; padding: 0px;">&nbsp;với những tính năng mới nhằm mang thêm nhiều lợi ích hơn cho khách hàng. Corolla Altis mới 2016 sẽ chính thức có mặt tại toàn bộ hệ thống đại lý của TMV trên toàn quốc kể từ ngày hôm nay – 17/5/2016.</span></span></p>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: center;"><span style="font-size:16px;"><img src="file:///C:/Users/VIETTR~1/AppData/Local/Temp/msohtmlclip1/01/clip_image001.jpg" style="border: none; margin: 0px; padding: 0px; font-size: 0px; color: transparent; vertical-align: middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="" src="http://www.toyota.com.vn/static/uploads/ck/images/ghhd.jpg" style="border: none; margin: 0px; padding: 0px; font-size: 0px; color: transparent; vertical-align: middle; height: 388px; width: 690px;"></span></p>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">&nbsp;<br>
Lần đầu tiên xuất hiện vào năm 1966 tại Nhật Bản, trải qua 10 thế hệ cải tiến, và trong suốt 48 năm phát triển, với chất lượng vượt trội, kiểu dáng thu hút, khả năng vận hành mạnh mẽ, và tiết kiệm nhiên liệu, Corolla trở thành&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">“mẫu xe được yêu thích nhất toàn cầu”</span>&nbsp;với tổng doanh số bán ấn tượng lên tới<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">&nbsp;trên 42 triệu xe,&nbsp;</span>cũng như luôn giữ vững vị trí là&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">dòng</span>&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">xe du lịch bán chạy nhất thế giới</span>. Hiện Corolla Altis được sản xuất tại 16 nước/ khu vực và có mặt tại 154 nước trên toàn thế giới.<br>
<br>
Tại Việt Nam, mẫu xe Corolla lần đầu tiên được giới thiệu vào năm 1996. Trong 20 năm phát triển tại thị trường Việt Nam, với 8 lần thay đổi và cải tiến, Corolla Altis đã chinh phục được những khách hàng khó tính và nhanh chóng trở thành một trong những mẫu xe được ưa chuộng trên thị trường với tổng doanh số bán cộng dồn đạt xấp xỉ&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">88.000 xe</span>&nbsp;(tính đến hết tháng 4/2016).<br>
<br>
<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Để đáp ứng tốt hơn nữa nhu cầu của khách hàng, Corolla Altis mới 2016 được cải tiến với những tiện ích như Gương chiếu hậu chỉnh điện, tự động gập, có màu cùng màu thân xe, DVD 7 inch tích hợp thêm kết nối HDMI, Wifi, và có thể điều khiển bằng giọng nói trên phiên bản 2.0V CVT, màn hình hiển thị đa thông tin TFT4.2 inch mầu thay vì đơn sắc như phiên bản trước trên tất cả các phiên bản.</span>&nbsp;&nbsp;<br>
Với thiết kế sắc sảo và đột phá, kết hợp với nội thất sang trọng tinh tế, cùng với khả năng vận hành mạnh mẽ nhưng vẫn đảm bảo tiết kiệm nhiên liệu tối ưu, TMV tin rằng Corolla Altis mới 2016 &nbsp;sẽ chinh phục được thị hiếu và đáp ứng sự mong đợi của người tiêu dùng.<br>
<br>
Tại thị trường Việt Nam, TMV giới thiệu Corolla Altis 2016 với 3 phiên bản: phiên bản 2.0V hộp số tự động vô cấp thông minh CVT-i, phiên bản 1.8G hộp số tự động vô cấp CVT và phiên bản 1.8G số sàn 6 cấp với phiên bản mới 3 màu ngoại thất gồm: Nâu ánh đồng, Đen và Bạc. Về nội thất, phiên bản 2.0V CVT được trang bị nội thất da màu Đen thể hiện sự sang trọng và đẳng cấp; phiên bản 1.8G CVT số tự động có nội thất da với 2 màu: màu Be và màu Đen, trong khi đó phiên bản 1.8G số sàn có nội thất nỉ màu Be.<br>
Corolla Altis 2016 sẽ là sự lựa chọn tốt cho các khách hàng yêu thích lối sống hiện đại và tận hưởng cuộc sống trẻ trung và năng động.<br>
&nbsp;<br>
<span style="color:#0000FF;"><span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Dưới đây là những tính năng nổi bật của Corolla Altis mới 2016:</span></span><br>
Hướng tới mục tiêu tạo ra hình ảnh hoàn toàn mới cho các sản phẩm của Toyota, các mẫu xe được thiết kế mới dựa trên hai định hướng để tạo ra giá trị gia tăng cho sản phẩm (“+α”). Đó là thiết kế sắc sảo &amp; đột phá, khả năng vận hành năng động linh hoạt (kết hợp giữa hai yếu tố nhanh và tiết kiệm nhiên liệu) để mang tới cảm giác WAKUDOKI (phấn khích) cho người sử dụng, cùng giá trị thực chất ấn tượng.</span></p>

<h2 style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Ngoại thất: Đẳng cấp, Thời thượng và Năng động.</span></h2>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Phần đầu xe dạng chữ T là điểm nhấn ấn tượng trong thiết kế tổng thể của Corolla Altis mới với cụm đèn trước và lưới tản nhiệt trau chuốt, truốt mảnh và vuốt dài sang hai bên tạo cảm giác thân xe rộng hơn và làm nổi bật các đường nét sắc sảo. Sự kết hợp liền mạch của&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">lưới tản nhiệt và cụm đèn trước với thiết kế ba chiều&nbsp;</span>thể hiện phong cách&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">thời thượng và sang trọng</span>của Corolla Altis mới. Cụm đèn trước và đèn chiếu sáng ban ngày dạng LED được trang bị trên phiên bản 2.0V CVT-i. Trong khi đó, phiên bản 1.8G được trang bị cụm đèn trước dạng halogen với đèn chiếu xa gần và đèn vị trí, bố trí liền kề với lưới tản nhiệt mang lại hiệu quả chiếu sáng tối đa.<br>
<br>
Thiết kế bên hông xe bắt mắt và cân đối tô điểm bởi những đường gân chạy dọc thân xe tạo cảm giác hiện đại và cá tính. Hông xe được thiết kế hài hòa, nhấn mạnh vào phần bánh xe với cách thiết kế tạo khối cho khu vực xung quanh mâm xe.&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Mâm đúc hợp kim 16 inch</span>&nbsp;(trên phiên bản 1.8G CVT) và&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">17 inch&nbsp;</span>(trên phiên bản 2.0V CVT-i) với các chấu màu xám kim loại được thiết kế góc cạnh, tạo dáng vẻ mạnh mẽ, thể thao. Bên cạnh đó, gương chiếu hậu mới của Corolla Altis 2016 được nâng cấp thành gương chỉnh điện, tự động gập khi khóa xe và cùng màu thân xe.<br>
<br>
Đồng nhất với phần đầu xe, thiết kế đuôi xe dạng chữ T với các đường gân dập nổi mở rộng về hai bên làm tôn thêm dáng vẻ bề thế, sang trọng cho xe.&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Cụm đèn sau và nắp ca pô được thiết kế liền mạch với miếng ốp trang trí tạo nên điểm nhấn nổi bật.</span>&nbsp;Chi tiết này kết hợp hài hòa với đường gân và bề mặt quanh khu vực biển số xe khiến phần đuôi xe mở rộng hơn.</span></p>

<h2 style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Nội thất: Cao cấp và Tinh tế</span></h2>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Corolla Altis 2016 có không gian nội thất rộng rãi, cao cấp &amp; tinh tế với ý tưởng thiết kế nội thất “năng động kiểu mẫu” được thể hiện bằng các đường nét sắc sảo, hài hòa, làm nổi bật các vùng chức năng.<br>
<br>
Thấu hiểu nhu cầu và luôn nỗ lực để mang lại sự hài lòng hơn nữa cho khách hàng, Toyota đã cải thiện các tính năng trên xe nhằm tối ưu hóa sự thoải mái, tiện nghi cho mỗi hành trình.<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">&nbsp;Màn hình hiển thị đa thông tin đã được nâng cấp từ TFT 4.2 inch đơn sắc (đen – trắng) thành TFT 4.2 inch màu được đặt ở chính giữa bảng điều khiển.</span>&nbsp;Các phím chức năng được thiết kế và bố trí phù hợp, đảm bảo cho người lái sử dụng dễ dàng nhất. Nhiều hộc đựng đồ được đặt ở những vị trí thích hợp trong xe đảm bảo tính tiện dụng cho người lái &amp; hành khách. Thêm vào đó, khách hàng sẽ cảm thấy hoàn toàn thoải mái trong khi lái xe với với việc tăng biên độ điều chỉnh ghế và bố trí 1 cách hài hòa vị trí tay lái, điểm ngồi, cần số và bàn đạp.<br>
<br>
Tất cả các phiên bản được trang bị đèn trước với chức năng tự ngắt, khoang hành lý điều khiển điện.&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Gương chiếu hậu với khả năng chống chói tự động, tích hợp hiển thị màn hình camera lùi</span>&nbsp;được trang bị trên phiên bản 2.0V CVT-i. Hệ thống Điều hòa tự động cũng được giới thiệu thêm cho phiên bản 1.8G CVT (số tự động vô cấp). Bên cạnh đó, tay lái 3 chấu bọc da, mạ bạc, tích hợp các nút điều khiển và lẫy chuyển số, ghế người lái chỉnh điện 10 hướng hệ thống âm thanh. Ngoài ra,&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">hệ thống âm thanh Corolla Altis 2.0 V CVT đã được thay đổi từ DVD 6 inch thành DVD 7 inch; tích hợp thêm kết nối HDMI, Wifi; điều khiển bằng giọng nói giúp mang đến cho chủ sở hữu sự thư thái tuyệt đối.</span></span></p>

<h2 style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Khả năng vận hành: Cảm giác lái đầy hứng khởi</span></h2>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Hộp số tự động vô cấp thông minh (CVT) trên phiên bản 1.8G mang lại cho người lái lực truyền động tối ưu, cảm giác chuyển số nhẹ nhàng, và khả năng chuyển số êm ái &amp; nhạy bén hơn.&nbsp;<br>
<br>
Với động cơ cải tiến 2ZR (trên phiên bản 1.8G) và 3ZR mới (trên phiên bản 2.0V) được trang bị hệ thống điều phối van biến thiên thông minh kép Dual VVT-i thể hện khả năng vận&nbsp; hành vượt trội, cho phép tăng tốc êm ái mà mạnh mẽ ở vòng tua-bin thấp, đồng thời giúp tiết kiệm nhiên liệu và giảm thiểu ô nhiễm môi trường, cùng hộp số tự động vô cấp thông minh CVT-i (1.8G CVT &amp; 2.0V CVT-i) cho khả năng biến thiên cấp số vô hạn, giúp Corolla Altis 2016 đạt công suất tối đa 138hp/6400 rpm với mô-men xoắn cực đại 173Nm/4000 rpm (1.8G), và 143hp/6200rpm với mô-men xoắn cực đại 187Nm/3600 rpm (2.0V).<br>
<br>
Với mong muốn mang đến sự dễ dàng trong thao tác đồng thời tăng phấn khích cho người lái, Toyota đã cải tiến cảm giác và độ nhạy của cơ cấu lái cũng như gia cố lại khung gầm của xe. Tiếng ồn, độ rung và xóc cũng được giảm đáng kể bằng việc áp dụng nhiều phương pháp khác nhau như trau chuốt lại các thành phần cơ khí, củng cố thiết bị cách âm, hiệu chỉnh &amp; tối ưu hóa hệ thống treo và bộ giảm xóc...<br>
Hộp số CVT mới hiệu quả cao và thiết kế khí động học giúp xe Corolla mới giúp tiết kiệm nhiên liệu một cách tối ưu. Theo kết quả thử nghiệm trên phiên bản 2.0V CVT-i và 1.8G CVT, hệ số tiêu hao nhiên liệu&nbsp;<span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">giảm khoảng 5%</span>&nbsp;so với các phiên bản Corolla Altis trước.&nbsp;<br>
<br>
Tất cả đã mang đến cho chiếc xe Corolla Altis khả năng vận hành năng động, linh hoạt khiến người lái có thêm niềm vui &amp; hứng khởi hơn khi cầm lái (Wakudoki).</span></p>

<h2 style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Tính năng an toàn: Sự an tâm tuyệt đối</span></h2>

<p style="border: 0px; margin: 0px; padding: 0px; font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="font-size:16px;">Toyota trang bị các tính năng an toàn vượt trội để mang tới cảm giác an tâm tuyệt đối cho khách hàng trên cả 2 mặt chủ động và bị động. Tính năng trợ lực phanh đã được thay đổi để tăng cường lực phanh, bánh trước được trang bị phanh đĩa thông gió. Hệ thống chống bó cứng phanh (ABS), hệ thống phân phối lực phanh điện tử (EBD) và hệ thống hỗ trợ phanh khẩn cấp (BA) được tiêu chuẩn hóa cho tất cả các phiên bản.<br>
Corolla 2.0V được trang bị hệ thống cân bằng điện tử (VSC), hệ thống kiểm soát lực kéo (TRC), Camera lùi, Cảm biến góc và cảm biến lùi. Hệ thống mã hóa khóa động cơ cũng đã được trang bị trên hai phiên bản 1.8G CVT và 1.8 MT.<br>
<br>
Về mặt an toàn bị động, Corolla Altis được gia tăng kết cấu giúp tăng khả năng hấp thụ xung lực trên thân xe và gầm xe. Cấu trúc thân xe có thể hấp thụ lực và khung xe có độ bền cao. Khung xe GOA có vùng co rụm hấp thụ xung lực, dây đai an toàn 3 điểm (vai và 2 bên hông) được trang bị cho tất cả vị trí ghế ngồi trên xe, ghế có cấu trúc giảm chấn thương đốt sống cổ... giúp bảo vệ hành khách an toàn trong mọi tình huống.&nbsp;<br>
Cùng với sự ra mắt của Corolla Altis 2016, TMV hy vọng sẽ mang đến cho người tiêu dùng Việt Nam những sản phẩm ngày càng cạnh tranh cũng như dịch vụ sau bán hàng chất lượng cao và sự hài lòng cao nhất cùng mức giá bán lẻ không thay đổi, cụ thể như sau</span><br>
&nbsp;</p>

<table align="center" border="1" cellpadding="0" cellspacing="0" class="table_border" style="border: none; margin: 0px; padding: 0px; font-size: 12px; border-spacing: 0px; border-collapse: collapse; width: 689px; table-layout: fixed; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 20px;">
<tbody style="border: 0px; margin: 0px; padding: 0px;">
<tr style="border: 0px; margin: 0px; padding: 0px;">
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; height: 20px; text-align: center; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;"><span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Mẫu xe</span></span></p>
</td>
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; height: 20px; text-align: center; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;"><span style="border: 0px; margin: 0px; padding: 0px; font-weight: 700;">Giá bán lẻ (đã bao gồm thuế GTGT)</span></span></p>
</td>
</tr>
<tr style="border: 0px; margin: 0px; padding: 0px;">
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">Corolla Altis 2.0V CVT-i (số tự động vô cấp)</span></p>
</td>
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">992.000.000 VND</span></p>
</td>
</tr>
<tr style="border: 0px; margin: 0px; padding: 0px;">
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">Corolla Altis 1.8G CVT (số tự động vô cấp)</span></p>
</td>
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">848.000.000 VND</span></p>
</td>
</tr>
<tr style="border: 0px; margin: 0px; padding: 0px;">
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">Corolla Altis 1.8G MT (số sàn)</span></p>
</td>
<td style="border: 1px solid rgb(205, 205, 205); margin: 0px; padding: 0px; max-width: 690px; width: 319px;">
<p style="border: 0px; margin: 0px; padding: 0px;"><span style="font-size:16px;">795.000.000 VND</span></p>
</td>
</tr>
</tbody>
</table>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'dich-vu',
                'created_at' => '2018-02-06 00:00:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'hoi-thi-tay-nghe-noi-bo-tesc-2016-2',
                'name' => 'Hội thi tay nghề nội bộ TESC 2016-2',
                'thumb' => 'http://toyotasaigon.com/upload/news/hoi-thi-tay-nghe-noi-bo-tesc-201610101.JPG',
            'content' => '<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">&nbsp;</span><strong><span style="color:#0000FF;">Ngày 05/06/2016, Toyota Đông Sài Gòn</span></strong><span style="color:#000000;"> đã tổ chức hội thi tay nghề nội bộ năm 2016 với 3 nội dung Tư vấn bán hàng, Cố vấn dịch vụ và Kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">- Để đến được vòng thi chung kết các thí sinh phải trải qua phần thi vòng loại để chọn ra được những cá nhân xuất sắc tham dự vòng thi chung kết</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2324.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2329.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2354.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2364.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi tư vấn bán hàng</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2374.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi cố vấn dịch vụ</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2381.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh phần thi kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2876.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2917.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2423.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2459.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Phần thi thực hành tư vấn bán hàng</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2477.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2489.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Phần thi kỹ thuật viên sửa chữa chung</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2530.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;">&nbsp;</p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2585.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">- Sau khi trải qua phần thi lý thuyết và thực hành cùng với sự làm việc hết sức nghiêm túc của Ban giám khảo hội thi đã chọn ra được những cá nhân xuất sắc đại diện TESC tham gia hội thi tay nghề Toyota Việt Nam</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2607.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đạt giải ba</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2610.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đạt giải nhì</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2633.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 400px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Các thí sinh đại diện TESC tham gia hội thi tay nghề TMV</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); background-color: no;"><span style="font-size:16px;"><span style="color:#000000;">Hy vọng qua hội thi các bạn sẽ cố gắng trau dồi kiến thức và kỹ năng để phục vụ khách hàng tốt hơn và đạt thành tích cao trong kỳ thi sắp tới</span></span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: no;"><span style="font-size:16px;"><span style="color:#000000;"><img alt="" src="http://www.toyotasaigon.com/Uploads/images/Hoi%20thi%20tay%20nghe%20noi%20bo%202016/IMG_2641.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 401px; max-width: 100%; border: 0px; width: 600px;"></span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'thi-truong-oto',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => '2018-02-14 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 've-toyota-dong-sai-gon',
                'name' => 'Về Toyota Đông Sài Gòn',
                'thumb' => 'http://toyotasaigon.com/upload/news/gioi-thieu-chung33233.jpg',
                'content' => '<p><span style="font-size:16px;"><span style="color:#0000FF;"><strong>Từ việc kinh doanh ôtô Toyota nhập khẩu, đến năm 1998, sau khi chính thức trở thành đại lý của Công ty Ôtô Toyota Việt Nam</strong></span>, <a href="http://toyotasaigon.com/index.html">Công Ty Cổ Phần Toyota Đông Sài Gòn</a> đã gặt hái được những thành công bước đầu rất đáng khích lệ, như: năm 2001 và 2002 liên tiếp đạt hạng ba và và vươn lên hạng nhì trong hệ thống phân phối của Toyota Việt Nam về đại lý có lượng xe bán ra nhiều nhất trên thị trường cả nước. Đến ngày 20/11/2003, TESC đã trở thành đại lý thứ hai trong hệ thống Toyota tại Việt Nam đạt được số lượng xe bán ra trên 5.000 chiếc và vinh dự nhận Giải Vàng dành cho Đại lý xuất sắc nhất trong hệ thống Toyota trên toàn quốc năm 2007. Không dừng lại với những thành tích của chính mình, TESC đã tự hào là Đại lý đầu tiên của Toyota Việt Nam đạt doanh số bán ra 20.000 xe vào ngày 5/7/2010. Đây là thành quả chung của tập thể CB - NV Công ty trong suốt thời gian qua.</span></p>

<p><span style="font-size:16px;"><a href="http://toyotasaigon.com/index.html"><strong><span style="color:#0000FF;">Công Ty Cổ Phần Toyota Đông Sài Gòn</span></strong></a> hiện đang hoạt động với 3&nbsp;địa điểm kinh doanh xe mới và một Trung tâm xe đã qua sử dụng.</span></p>

<p><span style="font-size: 16px; line-height: 1.6;">* <a href="http://toyotasaigon.com/index.html">Trụ sở chính</a>: 507 Xa Lộ Hà Nội, Quận 2, TP.HCM</span></p>

<p><span style="font-size: 16px; line-height: 1.6;">* <a href="http://toyotasaigon.com/index.html">Chi nhánh Gò Vấp</a>: 18 Phan Văn Trị, Phường 7, Q. Gò Vấp, TP.HCM.</span></p>

<p><span style="font-size: 16px; line-height: 1.6;">* <a href="http://www.toyotadaquasudung.com/">Chi nhánh Nguyễn Văn Lượng</a> - <a href="http://www.toyotadaquasudung.com/">Trung tâm xe đã qua sử dụng</a>: 63A Nguyễn Văn Lượng, Phường 10, Q. Gò Vấp, TP.HCM.<br>
*<a href="http://www.toyotabinhthuan.vn/">Chi nhánh Bình Thuận</a>:&nbsp;</span><span style="font-size:16px;"><span style="color: rgb(98, 98, 98); font-family: Arial; line-height: 21px; background-color: rgb(251, 251, 251);">Khu dân cư Bến Lội - Lại An. thôn Thắng Thuận, xã Hàm Thắng, huyện Hàm Thuận Bắc, tỉnh Bình Thuận</span></span><br style="color: rgb(98, 98, 98); font-family: Arial; line-height: 21px; background-color: rgb(251, 251, 251);">
&nbsp;</p>

<p><span style="font-size: 16px; line-height: 1.6;"><a href="http://toyotasaigon.com/index.html"><strong><span style="color:#0000FF;">Toyota Đông Sài Gòn</span></strong></a> có một lực lượng nhân viên bán hàng hùng hậu gần 30 người, một đội ngũ kỹ thuật viên và cố vấn dịch vụ gần 120 người có trình độ cao theo tiêu chuẩn đánh giá của Công Ty Ôtô Toyota Việt Nam và đặc biệt là một phương cách kinh doanh khoáng đạt, đa dạng mang đậm dấu ấn văn hóa doanh nghiệp.</span></p>

<p><span style="font-size: 16px; line-height: 1.6;">Đội ngũ nhân viên của công ty đã đạt được rất nhiều giải thưởng cao quý của Toyota Việt Nam: Nhân viên tư vấn bán hàng xuất sắc nhất, Cố vấn dịch vụ xuất sắc, Nhân viên tư bán hàng có kỹ năng giao dịch qua điện thoại tốt nhất 2 năm liền...</span></p>

<p><span style="font-size: 16px; line-height: 1.6;"><a href="http://toyotasaigon.com/index.html"><strong><span style="color:#0000FF;">Toyota Đông Sài Gòn</span></strong></a> cũng nhận được bằng khen của Thủ Tướng Chính Phủ vào ngày 22/8/2002 và rất nhiều bằng khen của UBND Thành Phố, giấy khen của các Cơ quan Ban ngành Thành Phố và của Tổng Công Ty Bến Thành về những thành tích xuất sắc trong những năm vừa qua.</span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'gioi-thieu-chung',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'tru-so-xa-lo-ha-noi',
                'name' => 'Trụ sở xa lộ Hà Nội',
                'thumb' => 'http://toyotasaigon.com/upload/news/tru-so-xa-lo-ha-noi23111.jpg',
            'content' => ' <p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px none; box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="font-size:20px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><strong><a href="http://toyotasaigon.com"><span style="color:#FF0000;">Tr</span></a></strong></span></span><a href="http://toyotasaigon.com"><span style="color:#FF0000;"><span style="font-size:20px;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><strong>ụ sở 507</strong></span></span></span></a><br>
<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">507 Xa Lộ Hà Nội, P.An Phú, Q.2, Tp.HCM</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px none; box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp; + Phone<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">:</span>&nbsp;(028)&nbsp;<u>3&nbsp;</u>8989 242&nbsp;&nbsp;- Fax<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">:</span>&nbsp;(028)&nbsp;<u>3&nbsp;</u>8989 243</span></p>

<div style="margin: 0px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px none; box-sizing: border-box; color: rgb(98, 98, 98); background-color: rgb(251, 251, 251);"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: arial, sans-serif; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp; +&nbsp;<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(255, 0, 0);">Hotline</span></span><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(255, 0, 0);">:</span> 1900 6428</span></span></div>

<div style="margin: 0px; padding: 0px; font-stretch: inherit; line-height: 21px; font-family: Arial; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: rgb(98, 98, 98); text-align: center; background-color: rgb(251, 251, 251);">
<table border="1" cellpadding="1" cellspacing="1" height="3517" width="855">
<tbody>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3770(1).JPG" style="width: 200px; height: 230px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px none; box-sizing: border-box;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Hồng Diễm Trang</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+ Phó Giám đốc Kinh doanh</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng cao cấp</span></p>
<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+CLB Pyramid 1500 xe</span></td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3764.JPG" style="width: 200px; height: 234px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Đoàn Phương Dung</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Trưởng phòng kinh doanh</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng cao cấp</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+CLB Pyramid 1000 xe</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;">&nbsp;<span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">+Giải nhất Tư Vấn Bán Hàng hội thi tay nghề Toyota toàn quốc năm 2012</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3774.JPG" style="width: 200px; height: 223px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Thị Ngọc Yến</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Trưởng phòng Kinh doanh</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3741.JPG" style="width: 200px; height: 236px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Thị Nữ</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng chuyên nghiệp</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3767.JPG" style="width: 200px; height: 211px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Lê Thị Phương Hạnh</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng chuyên nghiệp</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="http://www.toyotasaigon.com/Uploads/images/NV%20Kinh%20Doanh/P1060048.JPG" style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; height: 226px; max-width: 100%; border: 0px; width: 200px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Vĩnh Triệu</span></p>

<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng cao cấp</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+CLB Pyramid 1000 xe</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3711.JPG" style="width: 200px; height: 223px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Quý Hiển</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng chuyên nghiệp</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3773.JPG" style="width: 200px; height: 210px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Lương Thị Thanh Hà</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng chuyên nghiệp</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3747.JPG" style="width: 200px; height: 209px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Võ Hoàng Thiên An</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng chuyên nghiệp</span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3743.JPG" style="width: 200px; height: 223px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Hà Phương Nam</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng </span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3744.JPG" style="width: 200px; height: 233px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Thị Hoàng Hôn</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng </span></p>
</td>
</tr>
<tr>
<td style="width: 305px;">
<p><img alt="" src="/upload/images/NVKD/507/IMG_3736.JPG" style="width: 200px; height: 212px;"></p>
</td>
<td style="width: 515px;">
<p style="margin: 0px 0px 21px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">-Nguyễn Ngọc Huy</span></p>

<p style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;">&nbsp;+Nhân viên bán hàng </span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>
</div>

<p>&nbsp;</p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'bo-phan-ban-hang',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'chi-nhanh-go-vap',
                'name' => 'Chi nhánh Gò Vấp',
                'thumb' => 'http://toyotasaigon.com/upload/news/chi-nhanh-go-vap02023.gif',
                'content' => '<p>&nbsp;</p>

<p style="text-align: center;"><strong><span style="font-size:26px;"><span style="color:#0000FF;">Bộ phận dịch vụ</span></span></strong></p>

<table border="0" cellpadding="0" cellspacing="0" height="1299" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px; font-family: arial; font-size: 12px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(98, 98, 98); font-stretch: inherit; line-height: 21px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 957px; border: 1px solid rgb(255, 0, 0) !important; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" width="490">
<tbody style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/L%C3%8A%20KI%E1%BB%82N%20TH%E1%BB%8ANH%20copy.jpg" style="width: 200px; height: 291px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><strong><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lê Kiển Thịnh</span></strong></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ trưởng</span></p>
</td>
</tr>
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/V%C5%A8%20HO%C3%80NG%20ANH%20copy.jpg" style="width: 200px; height: 305px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><strong><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Vũ Hoàng Anh</span></strong></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/NGUY%E1%BB%84N%20HO%C3%80NG%20%C3%82N%20copy.jpg" style="width: 200px; height: 276px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="font-size: 18px;"><b>Nguyễn Hoàng Ân</b></span></p>

<p style="font-size: inherit; font-weight: inherit; box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/KI%E1%BB%80U%20V%C4%82N%20S%C3%81NG%20copy.jpg" style="width: 200px; height: 304px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><strong><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Kiều Văn Sáng</span></strong></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
<tr>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; text-align: center; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p>&nbsp;</p>

<p><img alt="" src="/upload/images/DV/GV/NGUY%E1%BB%84N%20H%E1%BB%AEU%20%C3%81NH%20copy.jpg" style="width: 200px; height: 295px;"></p>

<p>&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="color: rgb(98, 98, 98); font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; box-sizing: border-box; margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="font-size: 18px;"><b>Nguyễn Hữu Ánh</b></span></p>

<p style="font-size: inherit; font-weight: inherit; color: rgb(98, 98, 98); font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; box-sizing: border-box; margin: 0px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
<tr>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; text-align: center; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p>&nbsp;</p>

<p><img alt="" src="/upload/images/DV/GV/NGUY%E1%BB%84N%20%C4%90%E1%BB%96%20KH%C3%81NH%20HO%C3%80NG%20copy.jpg" style="width: 200px; height: 289px;"></p>

<p>&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="color: rgb(98, 98, 98); font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; box-sizing: border-box; margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="font-size: 18px;"><b>Nguyễn Đỗ Khánh Hoàng</b></span></p>

<p style="font-size: inherit; font-weight: inherit; color: rgb(98, 98, 98); font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; box-sizing: border-box; margin: 0px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
<tr>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 351px; text-align: center; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p>&nbsp;</p>

<p><img alt="" src="/upload/images/DV/GV/TR%E1%BA%A6N%20V%C4%82N%20CH%C3%9AC%20copy.jpg" style="width: 200px; height: 300px;"></p>

<p>&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 603px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="color: rgb(98, 98, 98); font-family: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; box-sizing: border-box; margin: 0px 0px 21px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="font-size: 18px;"><b>Nguyễn&nbsp;Văn Chúc</b></span></p>

<p style="color: rgb(98, 98, 98); font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; box-sizing: border-box; margin: 0px; padding: 0px; font-stretch: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Cố vấn dịch vụ</span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: Arial; font-size: 12px; padding: 0px; font-stretch: inherit; line-height: 21px; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(98, 98, 98); text-align: center; background-color: rgb(251, 251, 251);"><span style="color:#0000FF;"><span style="font-size:24px;"><span style="box-sizing: border-box; font-family: \'UTM Avo\' !important;"><strong style="box-sizing: border-box;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Bộ phận tư vấn bảo hiểm</span></strong></span></span></span></p>

<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: Arial; font-size: 12px; padding: 0px; font-stretch: inherit; line-height: 21px; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(98, 98, 98); text-align: center; background-color: rgb(251, 251, 251);"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(255, 0, 0);">- Hotline:&nbsp;&nbsp;</span>0905 336 338</span></p>

<table border="0" cellpadding="0" cellspacing="0" height="436" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px; font-family: arial; font-size: 12px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: rgb(98, 98, 98); font-stretch: inherit; line-height: 21px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 966px; border: 1px solid rgb(255, 0, 0) !important; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" width="490">
<tbody style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 357px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/NGUY%E1%BB%84N%20V%C4%82N%20T%C3%82M%20copy.jpg" style="width: 200px; height: 307px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 608px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><strong><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Nguyễn Văn Tâm</span></strong></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Nhân viên tư vấn bảo hiểm</span></p>
</td>
</tr>
<tr style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204) !important; height: 15px !important;">
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 357px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><img alt="" src="/upload/images/DV/GV/TR%E1%BA%A6N%20THANH%20SANG%20copy.jpg" style="width: 200px; height: 294px;"></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 2px; font-family: Tahoma; margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; vertical-align: middle; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px solid rgb(204, 204, 204); width: 608px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">
<p style="box-sizing: border-box; margin: 0px 0px 21px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><strong><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Trần Thanh Sang</span></strong></p>

<p style="box-sizing: border-box; margin: 0px; font-family: inherit; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-align: center;"><span style="box-sizing: border-box; font-family: inherit; margin: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; vertical-align: baseline; outline: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Nhân viên tư vấn bảo hiểm</span></p>
</td>
</tr>
</tbody>
</table>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'bo-phan-dich-vu',
                'created_at' => '2018-02-06 00:00:00',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'nhung-luu-y-khi-tien-hanh-tra-gop',
                'name' => 'Những lưu ý khi tiến hành trả góp',
                'thumb' => NULL,
                'content' => '<p>&nbsp;</p>

<p><span style="color:#0000FF;"><span style="font-size:16px;"><strong><span style="font-family:utm avo,serif;">MUA XE TRẢ GÓP LÀ GÌ ?</span></strong></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Thực chất của việc mua xe trả góp là: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Trả trước một phần tiền mua xe, phần còn thiếu sẽ vay ngân hàng rồi hàng tháng trả dần cho ngân hàng cả gốc và lãi - theo phuơng thức trừ lùi - trong suốt thời gian trả góp. </span></span></span></p>

<p><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Ví dụ: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Khách hàng A mua trả góp xe ZACE trị giá 28,800 USD theo phương thức: TRẢ TRƯỚC 35% = 9870 USD, phần còn lại là 18,330 USD sẽ vay ngân hàng với lãi suất 1,1%tháng và trả góp trong 3 năm ( Cụ thể: sau khi tính toán, mỗi tháng khách hàng A phải trả 615 USD, theo quy tắc trừ lùi ). </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Việc trả góp có thể kết thúc sớm trước hạn: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Ngay khi khách hàng có điều kiện trả hết phần tiền còn thiếu cho ngân hàng. </span></span></span></p>

<p>&nbsp;</p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Ví dụ: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Trong trường hợp nêu trên: Sau khi trả góp được 3 tháng, khách hàng A có 1 khoản tiền lớn do người thân ở nước ngoài gửi về. Lúc này ( nếu muốn ), khách hàng A có thể trả hết phần tiền còn nợ cho ngân hàng, kết thúc sớm việc mua xe trả góp. </span></span></span></p>

<p>&nbsp;</p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Những đối tượng thích hợp nhất với hình thức mua xe trả góp: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">1 - Doanh nhân, doanh nghiệp: những người có khả năng sử dụng tiền để kinh doanh sinh lời nhiều hơn là tỷ lệ lãi suất tiền cho vay của ngân hàng. </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">2 - Những người rất cần sử dụng xe, sẽ có đủ tiền mua xe trong một tương lai gần nhưng hiện tại chưa tập trung đủ tiền để mua xe trả thẳng. </span></span></span></p>

<p><strong><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">CÁC BƯỚC CHÍNH KHI MUA XE TRẢ GÓP</span></span></span></strong></p>

<p><strong><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Bước 1</span></span></span></strong><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">: Khách hàng ký hợp đồng mua xe và trả trước một phần tiền cho công ty bán xe. </span></span></span></p>

<p>&nbsp;</p>

<p><strong><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Bước 2</span></span></span></strong><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">: Nhân viên bán xe sẽ giới thiệu một số ngân hàng chuyên làm trả góp ( hoặc khách hàng có thể tự tìm ngân hàng cho mình , nếu muốn). Đại diện ngân hàng sẽ gặp khách hàng để thẩm định dự án cho vay vốn và hoàn tất các thủ tục mua xe trả góp. </span></span></span></p>

<p>&nbsp;</p>

<p><strong><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">Bước 3</span></span></span></strong><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">: Ngay khi nhận được giấy bảo lãnh của ngân hàng, công ty bán xe sẽ cùng khách hàng đem xe đi đăng ký... </span></span></span></p>

<p><strong><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">CÁC GIẤY TỜ CẦN CÓ KHI MUA XE TRẢ GÓP</span></span></span></strong></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">I - </span></span></span><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">CÁ NHÂN</span></span></span><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;"> mua trả góp cần chuẩn bị : </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Chứng minh thư nhân dân </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Hộ khẩu </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Ngoài ra tuỳ trường hợp cụ thể, khách hàng có thể cần chuẩn bị thêm một số giấy tờ khác liên quan. </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">II - </span></span></span><span style="color:#0000FF;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">DOANH NGHIỆP</span></span></span><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;"> mua trả góp hoặc thuê mua tài chính cần chuẩn bị: </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Giấy phép thành lập </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Đăng ký kinh doanh </span></span></span></p>

<p><span style="color:#000000;"><span style="font-size:16px;"><span style="font-family:utm avo,serif;">* Ngoài ra tuỳ trường hợp cụ thể, khách hàng có thể cần chuẩn bị thêm một số giấy tờ khác liên quan ( Ví dụ: báo cáo thuế 2 năm gần nhất, quyết định bổ nhiệm giám đốc và kế toàn trưởng ...) </span></span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tra-gop',
                'created_at' => '2018-02-14 00:00:00',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'nhung-van-de-khi-mua-xe-tra-gop',
                'name' => 'Những vấn đề khi mua xe trả góp',
                'thumb' => NULL,
            'content' => '<center style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal;"><span style="font-size:20px;"><span style="color:#0000FF;"><strong>NHỮNG VẤN ĐỀ LƯU Ý KHI MUA XE TRẢ GÓP</strong></span></span></center>

<center style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal;">&nbsp;</center>

<p align="justify" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;"><span style="font-size:16px;">Việc mua xe trả góp gồm 2 phần công việc chính độc lập là:&nbsp;<br>
<br>
<span style="color:#0000FF;"><strong>- Tìm mua chiếc xe mới ưng ý với giá cả hợp lý&nbsp;</strong></span><br>
<br>
<span style="color:#0000FF;"><strong>- Vay vốn ngân hàng để mua xe trả góp.&nbsp;</strong></span><br>
<br>
Trường hợp bạn không công tác trong ngành ngân hàng: Việc vay vốn để mua xe trả góp là một công đoạn rất phức tạp, cần có một người chuyên làm trả góp hướng dẫn, hỗ trợ.&nbsp;<br>
<br>
Thông thường, khi mua xe trả góp, nhân viên bán xe sẽ kiêm luôn việc hướng dẫn khách hàng làm thủ tục vay vốn. Nếu nhân viên bán xe làm trả góp không chuyên hoặc mối quan hệ với các ngân hàng không rộng, khách hàng có thể gặp những vấn đề sau:&nbsp;<br>
<br>
1 - Lãi suất vay cao + phải trả trước cao.&nbsp;<br>
<br>
2 - Thủ tục thẩm định kéo dài - mất thời gian, lâu được nhận xe.&nbsp;<br>
<br>
3 - Không được vay vốn do một số điều kiện của khách hàng không đáp ứng được yêu cầu thẩm định của ngân hàng.&nbsp;<br>
<br>
4 - Lượng tiền mua bảo hiểm thân vỏ xe lớn.&nbsp;<br>
<br>
5 - Phát sinh nhiều vấn đề khác ...&nbsp;</span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tra-gop',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'cac-hinh-thuc-mua-xe-tra-gop',
                'name' => 'Các hình thức mua xe trả góp',
                'thumb' => NULL,
            'content' => '<center style="box-sizing: border-box; color: rgb(68, 66, 66); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: normal;"><span style="font-size:18px;"><span style="color:#0000FF;"><font style="box-sizing: border-box;"><strong style="box-sizing: border-box;">CÁC HÌNH THỨC MUA XE TRẢ GÓP</strong></font></span></span></center>

<p>&nbsp;</p>

<p><span style="font-size:16px;">Có 2 hình thức: Mua trả góp và Thuê mua tài chính.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
<span style="color:#0000FF;"><strong style="box-sizing: border-box;">I - MUA TRẢ GÓP&nbsp;</strong></span><br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
<span style="color:#000000;">* Đối tượng được mua trả góp: Công ty cổ phần, công ty TNHH, doanh nghiệp tư nhân, cá nhân.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Thời hạn trả góp : tối đa 3 năm.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Trả trước tối thiểu: 40% giá trị xe và Mua bảo hiểm toàn bộ xe trong thời gian trả góp.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Tài sản bảo đảm: chính là chiếc xe ôtô mới định mua. Nếu bảo đảm bằng bất động sản hoặc giấy tờ có giá trị thì mức trả trước tối thiểu có thể thấp hơn mức 40%.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Hàng tháng khách hàng trả một mức tiền cố định ( gồm tiền gốc + lãi) theo quy tắc trừ lùi.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Đăng ký xe mang tên khách hàng.&nbsp;<br style="box-sizing: border-box;">
<br style="box-sizing: border-box;">
* Trường hợp tài sản bảo đảm chính là chiếc xe mới định mua thì trong suốt thời gian mua trả góp: khách hàng còn phải mua bảo hiểm thân vỏ xe và ngân hàng sẽ giữ Giấy đăng ký xe. ( Khách hàng được cấp giấy chứng nhận hợp pháp để lưu hành xe bình thường).&nbsp;</span></span></p>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tra-gop',
                'created_at' => '2018-02-13 00:00:00',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'cuoc-thi-ve-tranh-quoc-te-toyota',
                'name' => 'Cuộc thi vẽ tranh Quốc tế Toyota',
                'thumb' => 'thumb/200x115/1/upload/news/cuoc-thi-ve-tranh-quoc-te-toyota20301.jpg',
            'content' => '<p><span style="color: rgb(0, 0, 0); font-family: SFUFuturaBook; font-size: 14px;">Công ty Ô tô Toyota Việt Nam (TMV) phối hợp với Bộ Giáo dục &amp; Đào tạo tổ chức Cuộc thi Vẽ tranh Quốc tế Toyota với chủ đề "Chiếc ô tô mơ ước” dành cho trẻ em dưới 16 tuổi trên phạm vi cả nước. Cuộc thi là một sân chơi ý nghĩa nhằm khơi dậy niềm đam mê sáng tạo, ước mơ bay bổng, trí tưởng tượng phong phú và những ý tưởng mới mẻ, độc đáo về chiếc ô tô mà các em mơ ước, hướng tới tương lai của sự chuyển động, vì một xã hội văn minh, an toàn, tốt đẹp hơn. Đây là một cuộc thi có quy mô rộng khắp toàn cầu của Toyota</span></p>

<p><span style="color: rgb(0, 0, 0); font-family: SFUFuturaBook; font-size: 14px;"><img alt="" src="/upload/images/000313120.jpg" style="width: 700px; height: 259px;"></span></p>

<div class="title_thele" style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 24px; color: rgb(49, 173, 223); font-weight: bold; text-align: center; padding-top: 95px;">THỂ LỆ CUỘC THI VẼ TRANH QUỐC TẾ TOYOTA</div>

<div class="text_thele" style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 14px; color: rgb(235, 10, 30); font-weight: bold; text-align: center;">CHỦ ĐỀ “CHIẾC Ô TÔ MƠ ƯỚC“ LẦN THỨ 7</div>

<div class="text_thele" style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 14px; color: rgb(235, 10, 30); font-weight: bold; text-align: center;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">1. Tên cuộc thi</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span>&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">Cuộc thi vẽ tranh Quốc tế Toyota chủ đề "Chiếc ô tô mơ ước” lần thứ 7</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">2. Mục đích</span></span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Góp phần phát triển năng lực thẩm mĩ và tăng cường giáo dục kĩ năng sống cho trẻ nhỏ.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Khơi dậy cho các em thể hiện niềm đam mê sáng tạo, ước mơ bay bổng, trí tưởng tượng phong phú, độc đáo của các em về một phương tiện giao thông hiện đại với nhiều tính năng đặc biệt, an toàn, thân thiện, hữu ích trong tương lai.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Tạo cho các em sân chơi bổ ích, để các em có cơ hội giao lưu, học hỏi trong phạm vi trường học và trên quy mô Toàn quốc.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">3. Quy mô</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">Toàn quốc</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">4. Thời gian nhận bài dự thi</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">đến hết ngày 15/ 02/ 2018 (căn cứ theo dấu bưu điện)<căn c=""></căn></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">5. Đối tượng dự thi</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span>&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">trẻ em Việt Nam dưới 16 tuổi. Việc đánh giá bài dự thi sẽ được tiến hành đối với 3 nhóm tuổi:</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Nhóm 1: dưới 08 tuổi</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Nhóm 2: từ 8 đến 11 tuổi</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Nhóm 3: từ 12 đến 15 tuổi</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">6. Thể lệ Cuộc thi</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Bài dự thi được vẽ trên khổ giấy 297 mm x 420 mm.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Không giới hạn về màu sắc và chất liệu của giấy vẽ.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Bài dự thi không giới hạn nguyên vật liệu,như: chì màu, sáp màu, dạ màu, màu bột, màu nước, màu acrylic…</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Bài dự thi có thể sử dụng phương pháp cắt dán tranh (lưu ý: cắt dán trên bề mặt phẳng, vật liệu sử dụng không làm ảnh hưởng đến các bài dự thi khác trong quá trình vận chuyển/ công tác chấm tranh hoặc thí sinh phải sử dụng vật liệu riêng để bảo quản)<lưu></lưu></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Bài dự thi phải được chính thí sinh thể hiện, tranh dự thi phải truyền tải được ý tưởng từ ước mơ của chính bản thân thí sinh về chiếc ô tô.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Mặt sau bài dự thi, thí sinh phải dán nhãn có ghi đầy đủ các thông tin sau đây:</p>

<table border="0" cellpadding="0" cellspacing="0" style="box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; font-family: SFUFuturaBook; font-size: 14px; color: rgb(0, 0, 0);">
<tbody style="box-sizing: border-box;">
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">1. Họ và tên:</p>
</td>
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">2. Lớp/ trường:</p>
</td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">3. Ngày/ tháng/ năm sinh:</p>
</td>
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">4. Địa chỉ (nhà riêng và trường)</p>
</td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">5. Tên tranh</p>
</td>
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">6. Số điện thoại liên hệ (phụ huynh)</p>
</td>
</tr>
<tr style="box-sizing: border-box;">
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">&nbsp;</p>
</td>
<td style="box-sizing: border-box; padding: 0px;" valign="top" width="320">
<p style="box-sizing: border-box; margin: 0px 0px 10px;">7. Số điện thoại và tên liên hệ (giáo viên mỹ thuật – nếu có)</p>
</td>
</tr>
</tbody>
</table>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span style="box-sizing: border-box; text-decoration-line: underline;">7. Nơi nhận bài dự thi</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold; text-decoration-line: underline;">:</span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Hệ thống đại lý Toyota toàn quốc (danh sách chi tiết link dưới)<danh s=""></danh></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Văn phòng Ban Tổ chức Cuộc thi vẽ tranh Quốc tế Toyota "Chiếc ô tô mơ ước” - Tầng 8, Sảnh Đông, Tòa nhà Lotte Centre Hà Nội, Số 54 Liễu Giai, Ba Đình, Hà Nội.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Ngoài phong bì ghi rõ: Tranh tham dự cuộc thi vẽ tranh Toyota Chiếc ô tô mơ ước.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><ngoài b="" phong=""></ngoài></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;">8.&nbsp;<span style="box-sizing: border-box; text-decoration-line: underline;">Cơ cấu giải thưởng</span></span><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;"><span lang="VI" style="box-sizing: border-box; text-decoration-line: underline;">:</span></span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">* Cuộc thi trong nước:</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Tổng số giải thưởng: lên đến 170</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Chứng nhận tham gia Cuộc thi (Chứng nhận của BTC)</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">* Cuộc thi Quốc tế: Thí sinh đạt giải và người bảo trợ sẽ được Tham dự Lễ trao giải và 01 chuyến tham quan tại Nhật Bản vào tháng 08/2018.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;"><span style="box-sizing: border-box; font-family: SFUFuturaBold; font-size: 16px; color: rgb(56, 177, 226); font-weight: bold;">9.&nbsp;<span style="box-sizing: border-box; text-decoration-line: underline;">Lưu ý:</span></span></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- BTC sẽ không chịu trách nhiệm với những bài dự thi bị thất lạc.</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- BTC có quyền sử dụng tất cả các bài dự thi và hình ảnh liên quan cho mục đích tuyên truyền, quảng bá rộng rãi về Cuộc thi</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">* Bài dự thi không hợp lệ:</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Sử dụng đồ họa trên máy vi tính hoặc các thiết bị tương tự</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Vẽ bởi 2 người trở lên</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Tranh sao chép hoặc vi phạm bản quyền tác giả</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-size: 14px; color: rgb(0, 0, 0); font-family: SFUFuturaBook;">- Thiếu thông tin thí sinh, không đúng chủ đề, không đúng kích cỡ quy định của BTC</p>
</div>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tin-tuc',
                'created_at' => '2018-02-07 00:00:00',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'chuong-trinh-khuyen-mai-thang-2',
                'name' => 'CHƯƠNG TRÌNH KHUYẾN MÃI THÁNG 2',
                'thumb' => 'thumb/200x115/1/upload/news/chuong-trinh-khuyen-mai-thang-231230.jpg',
                'content' => '<p>&nbsp;</p>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">ƯU ĐÃI HẤP DẪN MỪNG XUÂN 2018 KHI MUA XE TẠI TOYOYA ĐÔNG SÀI GÒN</span></span></div>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">VUI TẾT AN KHANG - NHẬN QUÀ LỘC PHÁT</span></span></div>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Từ 01/02/2018 đến 28/02/2018 Quý khách hàng mua xe tại Toyota Đông Sài Gòn sẽ nhận được ưu đãi vô cùng hấp dẫn</span></span>

<div style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(34, 34, 34); font-size: 12.8px;">+&nbsp;<span style="font-size: 12.8px;">&nbsp;COUPON QUÀ TẶNG TRỊ GIÁ 6.800.000</span></div>

<p><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">HÃY LIÊN HỆ NGAY :&nbsp;</span></span><span style="box-sizing: border-box; color: rgb(255, 0, 0);"><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; font-size: 14px;">1900.6428 - 1900.6438</span></span></span><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">&nbsp;</span><br style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">
<span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Có xe giao ngay</span><br style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">
<span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Sở hữu xe ngay chỉ với 150 triệu đồng</span><br avo="" style="box-sizing: border-box; font-family: " utm="">
<span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-m_5807909081952808235gmail-m_-7499947068200559680gmail-m_-925014403518258993gmail-text_exposed_show" style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; display: inline; color: rgb(29, 33, 41); font-size: 14px;">Vay trả góp lên đến 85% giá trị xe - Thủ tục đơn giản<br avo="" style="box-sizing: border-box; font-family: " utm="">
Chương trình đổi xe cũ lấy xe mới với nhiều quà tặng&nbsp;<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hãy gọi ngay cho TOYOTA ĐÔNG SÀI GÒN để được tư vấn chi tiết nhất<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hotline: 1900.6428 - 1900.6438<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hotline đổi xe cũ lấy xe mới: 0918.33.50.50<br avo="" style="box-sizing: border-box; font-family: " utm="">
Website:&nbsp;<a data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.toyotasaigon.com/&amp;source=gmail&amp;ust=1517447155639000&amp;usg=AFQjCNGEKvQ_T-h6vdXAcR9dRpmxaQk5Hg" href="http://www.toyotasaigon.com/" rel="noopener nofollow" style="color: rgb(54, 88, 153); box-sizing: border-box; background-color: transparent; text-decoration-line: none; font-family: inherit;" target="_blank">www.toyotasaigon.com</a>&nbsp;<wbr>-<br avo="" style="box-sizing: border-box; font-family: " utm="">
<a data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.dongsaigon.toyota.com.vn/&amp;source=gmail&amp;ust=1517447155639000&amp;usg=AFQjCNE6S9hcUQpAsiRYeLf2jAOvAiiT-A" href="http://www.dongsaigon.toyota.com.vn/" rel="noopener nofollow" style="color: rgb(54, 88, 153); box-sizing: border-box; background-color: transparent; text-decoration-line: none; font-family: inherit;" target="_blank">www.dongsaigon.toyota.com.vn</a><br avo="" style="box-sizing: border-box; font-family: " utm="">
TOYOTA ĐÔNG SÀI GÒN - ĐẠI LÝ CÓ DỊCH VỤ XUẤT SẮC NHẤT DO DIỄN ĐÀN OTOSAIGON BÌNH CHỌN</span></span></p>

<p><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-m_5807909081952808235gmail-m_-7499947068200559680gmail-m_-925014403518258993gmail-text_exposed_show" style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; display: inline; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" src="/upload/images/Banner%20FB(1).jpg" style="width: 800px; height: 296px;"></span></span></p>
</div>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tin-tuc',
                'created_at' => '2018-02-06 00:00:00',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'chuong-trinh-khuyen-mai-thang-5',
                'name' => 'CHƯƠNG TRÌNH KHUYẾN MÃI THÁNG 5',
                'thumb' => 'thumb/200x115/1/upload/news/chuong-trinh-khuyen-mai-thang-231230.jpg',
                'content' => '<p>&nbsp;</p>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">ƯU ĐÃI HẤP DẪN MỪNG XUÂN 2018 KHI MUA XE TẠI TOYOYA ĐÔNG SÀI GÒN</span></span></div>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">VUI TẾT AN KHANG - NHẬN QUÀ LỘC PHÁT</span></span></div>

<div avo="" style="box-sizing: border-box; font-family: " utm=""><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Từ 01/02/2018 đến 28/02/2018 Quý khách hàng mua xe tại Toyota Đông Sài Gòn sẽ nhận được ưu đãi vô cùng hấp dẫn</span></span>

<div style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(34, 34, 34); font-size: 12.8px;">+&nbsp;<span style="font-size: 12.8px;">&nbsp;COUPON QUÀ TẶNG TRỊ GIÁ 6.800.000</span></div>

<p><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">HÃY LIÊN HỆ NGAY :&nbsp;</span></span><span style="box-sizing: border-box; color: rgb(255, 0, 0);"><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; font-size: 14px;">1900.6428 - 1900.6438</span></span></span><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">&nbsp;</span><br style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">
<span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Có xe giao ngay</span><br style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">
<span style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;">Sở hữu xe ngay chỉ với 150 triệu đồng</span><br avo="" style="box-sizing: border-box; font-family: " utm="">
<span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-m_5807909081952808235gmail-m_-7499947068200559680gmail-m_-925014403518258993gmail-text_exposed_show" style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; display: inline; color: rgb(29, 33, 41); font-size: 14px;">Vay trả góp lên đến 85% giá trị xe - Thủ tục đơn giản<br avo="" style="box-sizing: border-box; font-family: " utm="">
Chương trình đổi xe cũ lấy xe mới với nhiều quà tặng&nbsp;<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hãy gọi ngay cho TOYOTA ĐÔNG SÀI GÒN để được tư vấn chi tiết nhất<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hotline: 1900.6428 - 1900.6438<br avo="" style="box-sizing: border-box; font-family: " utm="">
Hotline đổi xe cũ lấy xe mới: 0918.33.50.50<br avo="" style="box-sizing: border-box; font-family: " utm="">
Website:&nbsp;<a data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.toyotasaigon.com/&amp;source=gmail&amp;ust=1517447155639000&amp;usg=AFQjCNGEKvQ_T-h6vdXAcR9dRpmxaQk5Hg" href="http://www.toyotasaigon.com/" rel="noopener nofollow" style="color: rgb(54, 88, 153); box-sizing: border-box; background-color: transparent; text-decoration-line: none; font-family: inherit;" target="_blank">www.toyotasaigon.com</a>&nbsp;<wbr>-<br avo="" style="box-sizing: border-box; font-family: " utm="">
<a data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://www.dongsaigon.toyota.com.vn/&amp;source=gmail&amp;ust=1517447155639000&amp;usg=AFQjCNE6S9hcUQpAsiRYeLf2jAOvAiiT-A" href="http://www.dongsaigon.toyota.com.vn/" rel="noopener nofollow" style="color: rgb(54, 88, 153); box-sizing: border-box; background-color: transparent; text-decoration-line: none; font-family: inherit;" target="_blank">www.dongsaigon.toyota.com.vn</a><br avo="" style="box-sizing: border-box; font-family: " utm="">
TOYOTA ĐÔNG SÀI GÒN - ĐẠI LÝ CÓ DỊCH VỤ XUẤT SẮC NHẤT DO DIỄN ĐÀN OTOSAIGON BÌNH CHỌN</span></span></p>

<p><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-im" style="box-sizing: border-box; font-family: arial, sans-serif; color: rgb(80, 0, 80); font-size: 12.8px;"><span class="m_-5109575350175329577gmail-m_9164004072641710102gmail-m_5807909081952808235gmail-m_-7499947068200559680gmail-m_-925014403518258993gmail-text_exposed_show" style="box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; display: inline; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" src="/upload/images/Banner%20FB(1).jpg" style="width: 800px; height: 296px;"></span></span></p>
</div>',
                'status' => 'publish',
                'user_id' => 1,
                'parent' => 'tin-tuc',
                'created_at' => '2018-02-06 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}