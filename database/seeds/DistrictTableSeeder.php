<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('district')->delete();
        
        \DB::table('district')->insert(array (
            0 => 
            array (
                'districtid' => '001',
                'name' => 'Ba Đình',
                'type' => 'Quận',
                'location' => '21 02 08N, 105 49 38E',
                'provinceid' => '01',
            ),
            1 => 
            array (
                'districtid' => '002',
                'name' => 'Hoàn Kiếm',
                'type' => 'Quận',
                'location' => '21 01 53N, 105 51 09E',
                'provinceid' => '01',
            ),
            2 => 
            array (
                'districtid' => '003',
                'name' => 'Tây Hồ',
                'type' => 'Quận',
                'location' => '21 04 10N, 105 49 07E',
                'provinceid' => '01',
            ),
            3 => 
            array (
                'districtid' => '004',
                'name' => 'Long Biên',
                'type' => 'Quận',
                'location' => '21 02 21N, 105 53 07E',
                'provinceid' => '01',
            ),
            4 => 
            array (
                'districtid' => '005',
                'name' => 'Cầu Giấy',
                'type' => 'Quận',
                'location' => '21 01 52N, 105 47 20E',
                'provinceid' => '01',
            ),
            5 => 
            array (
                'districtid' => '006',
                'name' => 'Đống Đa',
                'type' => 'Quận',
                'location' => '21 00 56N, 105 49 06E',
                'provinceid' => '01',
            ),
            6 => 
            array (
                'districtid' => '007',
                'name' => 'Hai Bà Trưng',
                'type' => 'Quận',
                'location' => '21 00 27N, 105 51 35E',
                'provinceid' => '01',
            ),
            7 => 
            array (
                'districtid' => '008',
                'name' => 'Hoàng Mai',
                'type' => 'Quận',
                'location' => '20 58 33N, 105 51 22E',
                'provinceid' => '01',
            ),
            8 => 
            array (
                'districtid' => '009',
                'name' => 'Thanh Xuân',
                'type' => 'Quận',
                'location' => '20 59 44N, 105 48 56E',
                'provinceid' => '01',
            ),
            9 => 
            array (
                'districtid' => '016',
                'name' => 'Sóc Sơn',
                'type' => 'Huyện',
                'location' => '21 16 55N, 105 49 46E',
                'provinceid' => '01',
            ),
            10 => 
            array (
                'districtid' => '017',
                'name' => 'Đông Anh',
                'type' => 'Huyện',
                'location' => '21 08 16N, 105 49 38E',
                'provinceid' => '01',
            ),
            11 => 
            array (
                'districtid' => '018',
                'name' => 'Gia Lâm',
                'type' => 'Huyện',
                'location' => '21 01 28N, 105 56 54E',
                'provinceid' => '01',
            ),
            12 => 
            array (
                'districtid' => '019',
                'name' => 'Từ Liêm',
                'type' => 'Huyện',
                'location' => '21 02 39N, 105 45 32E',
                'provinceid' => '01',
            ),
            13 => 
            array (
                'districtid' => '020',
                'name' => 'Thanh Trì',
                'type' => 'Huyện',
                'location' => '20 56 32N, 105 50 55E',
                'provinceid' => '01',
            ),
            14 => 
            array (
                'districtid' => '024',
                'name' => 'Hà Giang',
                'type' => 'Thị Xã',
                'location' => '22 46 23N, 105 02 39E',
                'provinceid' => '02',
            ),
            15 => 
            array (
                'districtid' => '026',
                'name' => 'Đồng Văn',
                'type' => 'Huyện',
                'location' => '23 14 34N, 105 15 48E',
                'provinceid' => '02',
            ),
            16 => 
            array (
                'districtid' => '027',
                'name' => 'Mèo Vạc',
                'type' => 'Huyện',
                'location' => '23 09 10N, 105 26 38E',
                'provinceid' => '02',
            ),
            17 => 
            array (
                'districtid' => '028',
                'name' => 'Yên Minh',
                'type' => 'Huyện',
                'location' => '23 04 20N, 105 10 13E',
                'provinceid' => '02',
            ),
            18 => 
            array (
                'districtid' => '029',
                'name' => 'Quản Bạ',
                'type' => 'Huyện',
                'location' => '23 04 03N, 104 58 05E',
                'provinceid' => '02',
            ),
            19 => 
            array (
                'districtid' => '030',
                'name' => 'Vị Xuyên',
                'type' => 'Huyện',
                'location' => '22 45 50N, 104 56 26E',
                'provinceid' => '02',
            ),
            20 => 
            array (
                'districtid' => '031',
                'name' => 'Bắc Mê',
                'type' => 'Huyện',
                'location' => '22 45 48N, 105 16 26E',
                'provinceid' => '02',
            ),
            21 => 
            array (
                'districtid' => '032',
                'name' => 'Hoàng Su Phì',
                'type' => 'Huyện',
                'location' => '22 41 37N, 104 40 06E',
                'provinceid' => '02',
            ),
            22 => 
            array (
                'districtid' => '033',
                'name' => 'Xín Mần',
                'type' => 'Huyện',
                'location' => '22 38 05N, 104 28 35E',
                'provinceid' => '02',
            ),
            23 => 
            array (
                'districtid' => '034',
                'name' => 'Bắc Quang',
                'type' => 'Huyện',
                'location' => '22 23 42N, 104 55 06E',
                'provinceid' => '02',
            ),
            24 => 
            array (
                'districtid' => '035',
                'name' => 'Quang Bình',
                'type' => 'Huyện',
                'location' => '22 23 07N, 104 37 11E',
                'provinceid' => '02',
            ),
            25 => 
            array (
                'districtid' => '040',
                'name' => 'Cao Bằng',
                'type' => 'Thị Xã',
                'location' => '22 39 20N, 106 15 20E',
                'provinceid' => '04',
            ),
            26 => 
            array (
                'districtid' => '042',
                'name' => 'Bảo Lâm',
                'type' => 'Huyện',
                'location' => '22 52 37N, 105 27 28E',
                'provinceid' => '04',
            ),
            27 => 
            array (
                'districtid' => '043',
                'name' => 'Bảo Lạc',
                'type' => 'Huyện',
                'location' => '22 52 31N, 105 42 41E',
                'provinceid' => '04',
            ),
            28 => 
            array (
                'districtid' => '044',
                'name' => 'Thông Nông',
                'type' => 'Huyện',
                'location' => '22 49 09N, 105 57 05E',
                'provinceid' => '04',
            ),
            29 => 
            array (
                'districtid' => '045',
                'name' => 'Hà Quảng',
                'type' => 'Huyện',
                'location' => '22 53 42N, 106 06 32E',
                'provinceid' => '04',
            ),
            30 => 
            array (
                'districtid' => '046',
                'name' => 'Trà Lĩnh',
                'type' => 'Huyện',
                'location' => '22 48 14N, 106 19 47E',
                'provinceid' => '04',
            ),
            31 => 
            array (
                'districtid' => '047',
                'name' => 'Trùng Khánh',
                'type' => 'Huyện',
                'location' => '22 49 31N, 106 33 58E',
                'provinceid' => '04',
            ),
            32 => 
            array (
                'districtid' => '048',
                'name' => 'Hạ Lang',
                'type' => 'Huyện',
                'location' => '22 42 37N, 106 41 42E',
                'provinceid' => '04',
            ),
            33 => 
            array (
                'districtid' => '049',
                'name' => 'Quảng Uyên',
                'type' => 'Huyện',
                'location' => '22 40 15N, 106 27 42E',
                'provinceid' => '04',
            ),
            34 => 
            array (
                'districtid' => '050',
                'name' => 'Phục Hoà',
                'type' => 'Huyện',
                'location' => '22 33 52N, 106 30 02E',
                'provinceid' => '04',
            ),
            35 => 
            array (
                'districtid' => '051',
                'name' => 'Hoà An',
                'type' => 'Huyện',
                'location' => '22 41 20N, 106 02 05E',
                'provinceid' => '04',
            ),
            36 => 
            array (
                'districtid' => '052',
                'name' => 'Nguyên Bình',
                'type' => 'Huyện',
                'location' => '22 38 52N, 105 57 02E',
                'provinceid' => '04',
            ),
            37 => 
            array (
                'districtid' => '053',
                'name' => 'Thạch An',
                'type' => 'Huyện',
                'location' => '22 28 51N, 106 19 51E',
                'provinceid' => '04',
            ),
            38 => 
            array (
                'districtid' => '058',
                'name' => 'Bắc Kạn',
                'type' => 'Thị Xã',
                'location' => '22 08 00N, 105 51 10E',
                'provinceid' => '06',
            ),
            39 => 
            array (
                'districtid' => '060',
                'name' => 'Pác Nặm',
                'type' => 'Huyện',
                'location' => '22 35 46N, 105 40 25E',
                'provinceid' => '06',
            ),
            40 => 
            array (
                'districtid' => '061',
                'name' => 'Ba Bể',
                'type' => 'Huyện',
                'location' => '22 23 54N, 105 43 30E',
                'provinceid' => '06',
            ),
            41 => 
            array (
                'districtid' => '062',
                'name' => 'Ngân Sơn',
                'type' => 'Huyện',
                'location' => '22 25 50N, 106 01 00E',
                'provinceid' => '06',
            ),
            42 => 
            array (
                'districtid' => '063',
                'name' => 'Bạch Thông',
                'type' => 'Huyện',
                'location' => '22 12 04N, 105 51 01E',
                'provinceid' => '06',
            ),
            43 => 
            array (
                'districtid' => '064',
                'name' => 'Chợ Đồn',
                'type' => 'Huyện',
                'location' => '22 11 18N, 105 34 43E',
                'provinceid' => '06',
            ),
            44 => 
            array (
                'districtid' => '065',
                'name' => 'Chợ Mới',
                'type' => 'Huyện',
                'location' => '21 57 56N, 105 51 29E',
                'provinceid' => '06',
            ),
            45 => 
            array (
                'districtid' => '066',
                'name' => 'Na Rì',
                'type' => 'Huyện',
                'location' => '22 09 48N, 106 05 09E',
                'provinceid' => '06',
            ),
            46 => 
            array (
                'districtid' => '070',
                'name' => 'Tuyên Quang',
                'type' => 'Thị Xã',
                'location' => '21 49 40N, 105 13 12E',
                'provinceid' => '08',
            ),
            47 => 
            array (
                'districtid' => '072',
                'name' => 'Nà Hang',
                'type' => 'Huyện',
                'location' => '22 28 34N, 105 21 03E',
                'provinceid' => '08',
            ),
            48 => 
            array (
                'districtid' => '073',
                'name' => 'Chiêm Hóa',
                'type' => 'Huyện',
                'location' => '22 12 49N, 105 14 32E',
                'provinceid' => '08',
            ),
            49 => 
            array (
                'districtid' => '074',
                'name' => 'Hàm Yên',
                'type' => 'Huyện',
                'location' => '22 05 46N, 105 00 13E',
                'provinceid' => '08',
            ),
            50 => 
            array (
                'districtid' => '075',
                'name' => 'Yên Sơn',
                'type' => 'Huyện',
                'location' => '21 51 53N, 105 18 14E',
                'provinceid' => '08',
            ),
            51 => 
            array (
                'districtid' => '076',
                'name' => 'Sơn Dương',
                'type' => 'Huyện',
                'location' => '21 40 22N, 105 22 57E',
                'provinceid' => '08',
            ),
            52 => 
            array (
                'districtid' => '080',
                'name' => 'Lào Cai',
                'type' => 'Thành Phố',
                'location' => '22 25 07N, 103 58 43E',
                'provinceid' => '10',
            ),
            53 => 
            array (
                'districtid' => '082',
                'name' => 'Bát Xát',
                'type' => 'Huyện',
                'location' => '22 35 50N, 103 44 49E',
                'provinceid' => '10',
            ),
            54 => 
            array (
                'districtid' => '083',
                'name' => 'Mường Khương',
                'type' => 'Huyện',
                'location' => '22 41 05N, 104 08 26E',
                'provinceid' => '10',
            ),
            55 => 
            array (
                'districtid' => '084',
                'name' => 'Si Ma Cai',
                'type' => 'Huyện',
                'location' => '22 39 46N, 104 16 05E',
                'provinceid' => '10',
            ),
            56 => 
            array (
                'districtid' => '085',
                'name' => 'Bắc Hà',
                'type' => 'Huyện',
                'location' => '22 30 08N, 104 18 54E',
                'provinceid' => '10',
            ),
            57 => 
            array (
                'districtid' => '086',
                'name' => 'Bảo Thắng',
                'type' => 'Huyện',
                'location' => '22 22 47N, 104 10 00E',
                'provinceid' => '10',
            ),
            58 => 
            array (
                'districtid' => '087',
                'name' => 'Bảo Yên',
                'type' => 'Huyện',
                'location' => '22 17 38N, 104 25 02E',
                'provinceid' => '10',
            ),
            59 => 
            array (
                'districtid' => '088',
                'name' => 'Sa Pa',
                'type' => 'Huyện',
                'location' => '22 18 54N, 103 54 18E',
                'provinceid' => '10',
            ),
            60 => 
            array (
                'districtid' => '089',
                'name' => 'Văn Bàn',
                'type' => 'Huyện',
                'location' => '22 03 48N, 104 10 59E',
                'provinceid' => '10',
            ),
            61 => 
            array (
                'districtid' => '094',
                'name' => 'Điện Biên Phủ',
                'type' => 'Thành Phố',
                'location' => '21 24 52N, 103 02 31E',
                'provinceid' => '11',
            ),
            62 => 
            array (
                'districtid' => '095',
                'name' => 'Mường Lay',
                'type' => 'Thị Xã',
                'location' => '22 01 47N, 103 07 10E',
                'provinceid' => '11',
            ),
            63 => 
            array (
                'districtid' => '096',
                'name' => 'Mường Nhé',
                'type' => 'Huyện',
                'location' => '22 06 11N, 102 30 54E',
                'provinceid' => '11',
            ),
            64 => 
            array (
                'districtid' => '097',
                'name' => 'Mường Chà',
                'type' => 'Huyện',
                'location' => '21 50 31N, 103 03 15E',
                'provinceid' => '11',
            ),
            65 => 
            array (
                'districtid' => '098',
                'name' => 'Tủa Chùa',
                'type' => 'Huyện',
                'location' => '21 58 19N, 103 23 01E',
                'provinceid' => '11',
            ),
            66 => 
            array (
                'districtid' => '099',
                'name' => 'Tuần Giáo',
                'type' => 'Huyện',
                'location' => '21 38 03N, 103 21 06E',
                'provinceid' => '11',
            ),
            67 => 
            array (
                'districtid' => '100',
                'name' => 'Điện Biên',
                'type' => 'Huyện',
                'location' => '21 15 19N, 103 03 19E',
                'provinceid' => '11',
            ),
            68 => 
            array (
                'districtid' => '101',
                'name' => 'Điện Biên Đông',
                'type' => 'Huyện',
                'location' => '21 14 07N, 103 15 19E',
                'provinceid' => '11',
            ),
            69 => 
            array (
                'districtid' => '102',
                'name' => 'Mường Ảng',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '11',
            ),
            70 => 
            array (
                'districtid' => '104',
                'name' => 'Lai Châu',
                'type' => 'Thị Xã',
                'location' => '22 23 15N, 103 24 22E',
                'provinceid' => '12',
            ),
            71 => 
            array (
                'districtid' => '106',
                'name' => 'Tam Đường',
                'type' => 'Huyện',
                'location' => '22 20 16N, 103 32 53E',
                'provinceid' => '12',
            ),
            72 => 
            array (
                'districtid' => '107',
                'name' => 'Mường Tè',
                'type' => 'Huyện',
                'location' => '22 24 16N, 102 43 11E',
                'provinceid' => '12',
            ),
            73 => 
            array (
                'districtid' => '108',
                'name' => 'Sìn Hồ',
                'type' => 'Huyện',
                'location' => '22 17 21N, 103 18 12E',
                'provinceid' => '12',
            ),
            74 => 
            array (
                'districtid' => '109',
                'name' => 'Phong Thổ',
                'type' => 'Huyện',
                'location' => '22 38 24N, 103 22 38E',
                'provinceid' => '12',
            ),
            75 => 
            array (
                'districtid' => '110',
                'name' => 'Than Uyên',
                'type' => 'Huyện',
                'location' => '21 59 35N, 103 45 30E',
                'provinceid' => '12',
            ),
            76 => 
            array (
                'districtid' => '111',
                'name' => 'Tân Uyên',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '12',
            ),
            77 => 
            array (
                'districtid' => '116',
                'name' => 'Sơn La',
                'type' => 'Thành Phố',
                'location' => '21 20 39N, 103 54 52E',
                'provinceid' => '14',
            ),
            78 => 
            array (
                'districtid' => '118',
                'name' => 'Quỳnh Nhai',
                'type' => 'Huyện',
                'location' => '21 46 34N, 103 39 02E',
                'provinceid' => '14',
            ),
            79 => 
            array (
                'districtid' => '119',
                'name' => 'Thuận Châu',
                'type' => 'Huyện',
                'location' => '21 24 54N, 103 39 46E',
                'provinceid' => '14',
            ),
            80 => 
            array (
                'districtid' => '120',
                'name' => 'Mường La',
                'type' => 'Huyện',
                'location' => '21 31 38N, 104 02 48E',
                'provinceid' => '14',
            ),
            81 => 
            array (
                'districtid' => '121',
                'name' => 'Bắc Yên',
                'type' => 'Huyện',
                'location' => '21 13 23N, 104 22 09E',
                'provinceid' => '14',
            ),
            82 => 
            array (
                'districtid' => '122',
                'name' => 'Phù Yên',
                'type' => 'Huyện',
                'location' => '21 13 33N, 104 41 51E',
                'provinceid' => '14',
            ),
            83 => 
            array (
                'districtid' => '123',
                'name' => 'Mộc Châu',
                'type' => 'Huyện',
                'location' => '20 49 21N, 104 43 10E',
                'provinceid' => '14',
            ),
            84 => 
            array (
                'districtid' => '124',
                'name' => 'Yên Châu',
                'type' => 'Huyện',
                'location' => '20 59 33N, 104 19 51E',
                'provinceid' => '14',
            ),
            85 => 
            array (
                'districtid' => '125',
                'name' => 'Mai Sơn',
                'type' => 'Huyện',
                'location' => '21 10 08N, 103 59 36E',
                'provinceid' => '14',
            ),
            86 => 
            array (
                'districtid' => '126',
                'name' => 'Sông Mã',
                'type' => 'Huyện',
                'location' => '21 06 04N, 103 43 56E',
                'provinceid' => '14',
            ),
            87 => 
            array (
                'districtid' => '127',
                'name' => 'Sốp Cộp',
                'type' => 'Huyện',
                'location' => '20 52 46N, 103 30 38E',
                'provinceid' => '14',
            ),
            88 => 
            array (
                'districtid' => '132',
                'name' => 'Yên Bái',
                'type' => 'Thành Phố',
                'location' => '21 44 28N, 104 53 42E',
                'provinceid' => '15',
            ),
            89 => 
            array (
                'districtid' => '133',
                'name' => 'Nghĩa Lộ',
                'type' => 'Thị Xã',
                'location' => '21 35 58N, 104 29 22E',
                'provinceid' => '15',
            ),
            90 => 
            array (
                'districtid' => '135',
                'name' => 'Lục Yên',
                'type' => 'Huyện',
                'location' => '22 06 44N, 104 43 12E',
                'provinceid' => '15',
            ),
            91 => 
            array (
                'districtid' => '136',
                'name' => 'Văn Yên',
                'type' => 'Huyện',
                'location' => '21 55 55N, 104 33 51E',
                'provinceid' => '15',
            ),
            92 => 
            array (
                'districtid' => '137',
                'name' => 'Mù Cang Chải',
                'type' => 'Huyện',
                'location' => '21 48 22N, 104 09 01E',
                'provinceid' => '15',
            ),
            93 => 
            array (
                'districtid' => '138',
                'name' => 'Trấn Yên',
                'type' => 'Huyện',
                'location' => '21 42 20N, 104 48 56E',
                'provinceid' => '15',
            ),
            94 => 
            array (
                'districtid' => '139',
                'name' => 'Trạm Tấu',
                'type' => 'Huyện',
                'location' => '21 30 40N, 104 28 03E',
                'provinceid' => '15',
            ),
            95 => 
            array (
                'districtid' => '140',
                'name' => 'Văn Chấn',
                'type' => 'Huyện',
                'location' => '21 34 15N, 104 35 19E',
                'provinceid' => '15',
            ),
            96 => 
            array (
                'districtid' => '141',
                'name' => 'Yên Bình',
                'type' => 'Huyện',
                'location' => '21 52 24N, 104 55 16E',
                'provinceid' => '15',
            ),
            97 => 
            array (
                'districtid' => '148',
                'name' => 'Hòa Bình',
                'type' => 'Thành Phố',
                'location' => '20 50 36N, 105 19 20E',
                'provinceid' => '17',
            ),
            98 => 
            array (
                'districtid' => '150',
                'name' => 'Đà Bắc',
                'type' => 'Huyện',
                'location' => '20 55 58N, 105 04 52E',
                'provinceid' => '17',
            ),
            99 => 
            array (
                'districtid' => '151',
                'name' => 'Kỳ Sơn',
                'type' => 'Huyện',
                'location' => '20 54 06N, 105 23 18E',
                'provinceid' => '17',
            ),
            100 => 
            array (
                'districtid' => '152',
                'name' => 'Lương Sơn',
                'type' => 'Huyện',
                'location' => '20 53 16N, 105 30 55E',
                'provinceid' => '17',
            ),
            101 => 
            array (
                'districtid' => '153',
                'name' => 'Kim Bôi',
                'type' => 'Huyện',
                'location' => '20 40 34N, 105 32 15E',
                'provinceid' => '17',
            ),
            102 => 
            array (
                'districtid' => '154',
                'name' => 'Cao Phong',
                'type' => 'Huyện',
                'location' => '20 41 23N, 105 17 48E',
                'provinceid' => '17',
            ),
            103 => 
            array (
                'districtid' => '155',
                'name' => 'Tân Lạc',
                'type' => 'Huyện',
                'location' => '20 36 44N, 105 15 03E',
                'provinceid' => '17',
            ),
            104 => 
            array (
                'districtid' => '156',
                'name' => 'Mai Châu',
                'type' => 'Huyện',
                'location' => '20 40 56N, 104 59 46E',
                'provinceid' => '17',
            ),
            105 => 
            array (
                'districtid' => '157',
                'name' => 'Lạc Sơn',
                'type' => 'Huyện',
                'location' => '20 29 59N, 105 24 57E',
                'provinceid' => '17',
            ),
            106 => 
            array (
                'districtid' => '158',
                'name' => 'Yên Thủy',
                'type' => 'Huyện',
                'location' => '20 25 42N, 105 37 59E',
                'provinceid' => '17',
            ),
            107 => 
            array (
                'districtid' => '159',
                'name' => 'Lạc Thủy',
                'type' => 'Huyện',
                'location' => '20 29 12N, 105 44 06E',
                'provinceid' => '17',
            ),
            108 => 
            array (
                'districtid' => '164',
                'name' => 'Thái Nguyên',
                'type' => 'Thành Phố',
                'location' => '21 33 20N, 105 48 26E',
                'provinceid' => '19',
            ),
            109 => 
            array (
                'districtid' => '165',
                'name' => 'Sông Công',
                'type' => 'Thị Xã',
                'location' => '21 29 14N, 105 48 47E',
                'provinceid' => '19',
            ),
            110 => 
            array (
                'districtid' => '167',
                'name' => 'Định Hóa',
                'type' => 'Huyện',
                'location' => '21 53 50N, 105 38 01E',
                'provinceid' => '19',
            ),
            111 => 
            array (
                'districtid' => '168',
                'name' => 'Phú Lương',
                'type' => 'Huyện',
                'location' => '21 45 57N, 105 43 22E',
                'provinceid' => '19',
            ),
            112 => 
            array (
                'districtid' => '169',
                'name' => 'Đồng Hỷ',
                'type' => 'Huyện',
                'location' => '21 41 10N, 105 55 43E',
                'provinceid' => '19',
            ),
            113 => 
            array (
                'districtid' => '170',
                'name' => 'Võ Nhai',
                'type' => 'Huyện',
                'location' => '21 47 14N, 106 02 29E',
                'provinceid' => '19',
            ),
            114 => 
            array (
                'districtid' => '171',
                'name' => 'Đại Từ',
                'type' => 'Huyện',
                'location' => '21 36 17N, 105 37 28E',
                'provinceid' => '19',
            ),
            115 => 
            array (
                'districtid' => '172',
                'name' => 'Phổ Yên',
                'type' => 'Huyện',
                'location' => '21 27 08N, 105 45 19E',
                'provinceid' => '19',
            ),
            116 => 
            array (
                'districtid' => '173',
                'name' => 'Phú Bình',
                'type' => 'Huyện',
                'location' => '21 29 36N, 105 57 42E',
                'provinceid' => '19',
            ),
            117 => 
            array (
                'districtid' => '178',
                'name' => 'Lạng Sơn',
                'type' => 'Thành Phố',
                'location' => '21 51 19N, 106 44 50E',
                'provinceid' => '20',
            ),
            118 => 
            array (
                'districtid' => '180',
                'name' => 'Tràng Định',
                'type' => 'Huyện',
                'location' => '22 18 09N, 106 26 32E',
                'provinceid' => '20',
            ),
            119 => 
            array (
                'districtid' => '181',
                'name' => 'Bình Gia',
                'type' => 'Huyện',
                'location' => '22 03 56N, 106 19 01E',
                'provinceid' => '20',
            ),
            120 => 
            array (
                'districtid' => '182',
                'name' => 'Văn Lãng',
                'type' => 'Huyện',
                'location' => '22 01 59N, 106 34 17E',
                'provinceid' => '20',
            ),
            121 => 
            array (
                'districtid' => '183',
                'name' => 'Cao Lộc',
                'type' => 'Huyện',
                'location' => '21 53 05N, 106 50 34E',
                'provinceid' => '20',
            ),
            122 => 
            array (
                'districtid' => '184',
                'name' => 'Văn Quan',
                'type' => 'Huyện',
                'location' => '21 51 04N, 106 33 04E',
                'provinceid' => '20',
            ),
            123 => 
            array (
                'districtid' => '185',
                'name' => 'Bắc Sơn',
                'type' => 'Huyện',
                'location' => '21 48 57N, 106 15 28E',
                'provinceid' => '20',
            ),
            124 => 
            array (
                'districtid' => '186',
                'name' => 'Hữu Lũng',
                'type' => 'Huyện',
                'location' => '21 34 33N, 106 20 33E',
                'provinceid' => '20',
            ),
            125 => 
            array (
                'districtid' => '187',
                'name' => 'Chi Lăng',
                'type' => 'Huyện',
                'location' => '21 40 05N, 106 37 24E',
                'provinceid' => '20',
            ),
            126 => 
            array (
                'districtid' => '188',
                'name' => 'Lộc Bình',
                'type' => 'Huyện',
                'location' => '21 40 41N, 106 58 12E',
                'provinceid' => '20',
            ),
            127 => 
            array (
                'districtid' => '189',
                'name' => 'Đình Lập',
                'type' => 'Huyện',
                'location' => '21 32 07N, 107 07 25E',
                'provinceid' => '20',
            ),
            128 => 
            array (
                'districtid' => '193',
                'name' => 'Hạ Long',
                'type' => 'Thành Phố',
                'location' => '20 52 24N, 107 05 23E',
                'provinceid' => '22',
            ),
            129 => 
            array (
                'districtid' => '194',
                'name' => 'Móng Cái',
                'type' => 'Thành Phố',
                'location' => '21 26 31N, 107 55 09E',
                'provinceid' => '22',
            ),
            130 => 
            array (
                'districtid' => '195',
                'name' => 'Cẩm Phả',
                'type' => 'Thị Xã',
                'location' => '21 03 42N, 107 17 22E',
                'provinceid' => '22',
            ),
            131 => 
            array (
                'districtid' => '196',
                'name' => 'Uông Bí',
                'type' => 'Thị Xã',
                'location' => '21 04 33N, 106 45 07E',
                'provinceid' => '22',
            ),
            132 => 
            array (
                'districtid' => '198',
                'name' => 'Bình Liêu',
                'type' => 'Huyện',
                'location' => '21 33 07N, 107 26 24E',
                'provinceid' => '22',
            ),
            133 => 
            array (
                'districtid' => '199',
                'name' => 'Tiên Yên',
                'type' => 'Huyện',
                'location' => '21 22 24N, 107 22 50E',
                'provinceid' => '22',
            ),
            134 => 
            array (
                'districtid' => '200',
                'name' => 'Đầm Hà',
                'type' => 'Huyện',
                'location' => '21 21 23N, 107 34 32E',
                'provinceid' => '22',
            ),
            135 => 
            array (
                'districtid' => '201',
                'name' => 'Hải Hà',
                'type' => 'Huyện',
                'location' => '21 25 50N, 107 41 26E',
                'provinceid' => '22',
            ),
            136 => 
            array (
                'districtid' => '202',
                'name' => 'Ba Chẽ',
                'type' => 'Huyện',
                'location' => '21 15 40N, 107 09 52E',
                'provinceid' => '22',
            ),
            137 => 
            array (
                'districtid' => '203',
                'name' => 'Vân Đồn',
                'type' => 'Huyện',
                'location' => '20 56 17N, 107 28 02E',
                'provinceid' => '22',
            ),
            138 => 
            array (
                'districtid' => '204',
                'name' => 'Hoành Bồ',
                'type' => 'Huyện',
                'location' => '21 06 30N, 107 02 43E',
                'provinceid' => '22',
            ),
            139 => 
            array (
                'districtid' => '205',
                'name' => 'Đông Triều',
                'type' => 'Huyện',
                'location' => '21 07 10N, 106 34 36E',
                'provinceid' => '22',
            ),
            140 => 
            array (
                'districtid' => '206',
                'name' => 'Yên Hưng',
                'type' => 'Huyện',
                'location' => '20 55 40N, 106 51 05E',
                'provinceid' => '22',
            ),
            141 => 
            array (
                'districtid' => '207',
                'name' => 'Cô Tô',
                'type' => 'Huyện',
                'location' => '21 05 01N, 107 49 10E',
                'provinceid' => '22',
            ),
            142 => 
            array (
                'districtid' => '213',
                'name' => 'Bắc Giang',
                'type' => 'Thành Phố',
                'location' => '21 17 36N, 106 11 18E',
                'provinceid' => '24',
            ),
            143 => 
            array (
                'districtid' => '215',
                'name' => 'Yên Thế',
                'type' => 'Huyện',
                'location' => '21 31 29N, 106 09 27E',
                'provinceid' => '24',
            ),
            144 => 
            array (
                'districtid' => '216',
                'name' => 'Tân Yên',
                'type' => 'Huyện',
                'location' => '21 23 23N, 106 05 55E',
                'provinceid' => '24',
            ),
            145 => 
            array (
                'districtid' => '217',
                'name' => 'Lạng Giang',
                'type' => 'Huyện',
                'location' => '21 21 58N, 106 15 21E',
                'provinceid' => '24',
            ),
            146 => 
            array (
                'districtid' => '218',
                'name' => 'Lục Nam',
                'type' => 'Huyện',
                'location' => '21 18 16N, 106 29 24E',
                'provinceid' => '24',
            ),
            147 => 
            array (
                'districtid' => '219',
                'name' => 'Lục Ngạn',
                'type' => 'Huyện',
                'location' => '21 26 15N, 106 39 09E',
                'provinceid' => '24',
            ),
            148 => 
            array (
                'districtid' => '220',
                'name' => 'Sơn Động',
                'type' => 'Huyện',
                'location' => '21 19 42N, 106 51 09E',
                'provinceid' => '24',
            ),
            149 => 
            array (
                'districtid' => '221',
                'name' => 'Yên Dũng',
                'type' => 'Huyện',
                'location' => '21 12 22N, 106 14 12E',
                'provinceid' => '24',
            ),
            150 => 
            array (
                'districtid' => '222',
                'name' => 'Việt Yên',
                'type' => 'Huyện',
                'location' => '21 16 16N, 106 04 59E',
                'provinceid' => '24',
            ),
            151 => 
            array (
                'districtid' => '223',
                'name' => 'Hiệp Hòa',
                'type' => 'Huyện',
                'location' => '21 15 51N, 105 57 30E',
                'provinceid' => '24',
            ),
            152 => 
            array (
                'districtid' => '227',
                'name' => 'Việt Trì',
                'type' => 'Thành Phố',
                'location' => '21 19 01N, 105 23 35E',
                'provinceid' => '25',
            ),
            153 => 
            array (
                'districtid' => '228',
                'name' => 'Phú Thọ',
                'type' => 'Thị Xã',
                'location' => '21 24 54N, 105 13 46E',
                'provinceid' => '25',
            ),
            154 => 
            array (
                'districtid' => '230',
                'name' => 'Đoan Hùng',
                'type' => 'Huyện',
                'location' => '21 36 56N, 105 08 42E',
                'provinceid' => '25',
            ),
            155 => 
            array (
                'districtid' => '231',
                'name' => 'Hạ Hoà',
                'type' => 'Huyện',
                'location' => '21 35 13N, 105 00 22E',
                'provinceid' => '25',
            ),
            156 => 
            array (
                'districtid' => '232',
                'name' => 'Thanh Ba',
                'type' => 'Huyện',
                'location' => '21 27 04N, 105 09 10E',
                'provinceid' => '25',
            ),
            157 => 
            array (
                'districtid' => '233',
                'name' => 'Phù Ninh',
                'type' => 'Huyện',
                'location' => '21 26 59N, 105 18 13E',
                'provinceid' => '25',
            ),
            158 => 
            array (
                'districtid' => '234',
                'name' => 'Yên Lập',
                'type' => 'Huyện',
                'location' => '21 22 21N, 105 01 25E',
                'provinceid' => '25',
            ),
            159 => 
            array (
                'districtid' => '235',
                'name' => 'Cẩm Khê',
                'type' => 'Huyện',
                'location' => '21 23 04N, 105 05 25E',
                'provinceid' => '25',
            ),
            160 => 
            array (
                'districtid' => '236',
                'name' => 'Tam Nông',
                'type' => 'Huyện',
                'location' => '21 18 24N, 105 14 59E',
                'provinceid' => '25',
            ),
            161 => 
            array (
                'districtid' => '237',
                'name' => 'Lâm Thao',
                'type' => 'Huyện',
                'location' => '21 19 37N, 105 18 09E',
                'provinceid' => '25',
            ),
            162 => 
            array (
                'districtid' => '238',
                'name' => 'Thanh Sơn',
                'type' => 'Huyện',
                'location' => '21 08 32N, 105 04 40E',
                'provinceid' => '25',
            ),
            163 => 
            array (
                'districtid' => '239',
                'name' => 'Thanh Thuỷ',
                'type' => 'Huyện',
                'location' => '21 07 26N, 105 17 18E',
                'provinceid' => '25',
            ),
            164 => 
            array (
                'districtid' => '240',
                'name' => 'Tân Sơn',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '25',
            ),
            165 => 
            array (
                'districtid' => '243',
                'name' => 'Vĩnh Yên',
                'type' => 'Thành Phố',
                'location' => '21 18 26N, 105 35 33E',
                'provinceid' => '26',
            ),
            166 => 
            array (
                'districtid' => '244',
                'name' => 'Phúc Yên',
                'type' => 'Thị Xã',
                'location' => '21 18 55N, 105 43 54E',
                'provinceid' => '26',
            ),
            167 => 
            array (
                'districtid' => '246',
                'name' => 'Lập Thạch',
                'type' => 'Huyện',
                'location' => '21 24 45N, 105 25 39E',
                'provinceid' => '26',
            ),
            168 => 
            array (
                'districtid' => '247',
                'name' => 'Tam Dương',
                'type' => 'Huyện',
                'location' => '21 21 40N, 105 33 36E',
                'provinceid' => '26',
            ),
            169 => 
            array (
                'districtid' => '248',
                'name' => 'Tam Đảo',
                'type' => 'Huyện',
                'location' => '21 27 34N, 105 35 09E',
                'provinceid' => '26',
            ),
            170 => 
            array (
                'districtid' => '249',
                'name' => 'Bình Xuyên',
                'type' => 'Huyện',
                'location' => '21 19 48N, 105 39 43E',
                'provinceid' => '26',
            ),
            171 => 
            array (
                'districtid' => '250',
                'name' => 'Mê Linh',
                'type' => 'Huyện',
                'location' => '21 10 53N, 105 42 05E',
                'provinceid' => '01',
            ),
            172 => 
            array (
                'districtid' => '251',
                'name' => 'Yên Lạc',
                'type' => 'Huyện',
                'location' => '21 13 17N, 105 34 44E',
                'provinceid' => '26',
            ),
            173 => 
            array (
                'districtid' => '252',
                'name' => 'Vĩnh Tường',
                'type' => 'Huyện',
                'location' => '21 14 58N, 105 29 37E',
                'provinceid' => '26',
            ),
            174 => 
            array (
                'districtid' => '253',
                'name' => 'Sông Lô',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '26',
            ),
            175 => 
            array (
                'districtid' => '256',
                'name' => 'Bắc Ninh',
                'type' => 'Thành Phố',
                'location' => '21 10 48N, 106 03 58E',
                'provinceid' => '27',
            ),
            176 => 
            array (
                'districtid' => '258',
                'name' => 'Yên Phong',
                'type' => 'Huyện',
                'location' => '21 12 40N, 105 59 36E',
                'provinceid' => '27',
            ),
            177 => 
            array (
                'districtid' => '259',
                'name' => 'Quế Võ',
                'type' => 'Huyện',
                'location' => '21 08 44N, 106 11 06E',
                'provinceid' => '27',
            ),
            178 => 
            array (
                'districtid' => '260',
                'name' => 'Tiên Du',
                'type' => 'Huyện',
                'location' => '21 07 37N, 106 02 19E',
                'provinceid' => '27',
            ),
            179 => 
            array (
                'districtid' => '261',
                'name' => 'Từ Sơn',
                'type' => 'Thị Xã',
                'location' => '21 07 12N, 105 57 26E',
                'provinceid' => '27',
            ),
            180 => 
            array (
                'districtid' => '262',
                'name' => 'Thuận Thành',
                'type' => 'Huyện',
                'location' => '21 02 24N, 106 04 10E',
                'provinceid' => '27',
            ),
            181 => 
            array (
                'districtid' => '263',
                'name' => 'Gia Bình',
                'type' => 'Huyện',
                'location' => '21 03 55N, 106 12 53E',
                'provinceid' => '27',
            ),
            182 => 
            array (
                'districtid' => '264',
                'name' => 'Lương Tài',
                'type' => 'Huyện',
                'location' => '21 01 33N, 106 13 28E',
                'provinceid' => '27',
            ),
            183 => 
            array (
                'districtid' => '268',
                'name' => 'Hà Đông',
                'type' => 'Quận',
                'location' => '20 57 25N, 105 45 21E',
                'provinceid' => '01',
            ),
            184 => 
            array (
                'districtid' => '269',
                'name' => 'Sơn Tây',
                'type' => 'Thị Xã',
                'location' => '21 05 51N, 105 28 27E',
                'provinceid' => '01',
            ),
            185 => 
            array (
                'districtid' => '271',
                'name' => 'Ba Vì',
                'type' => 'Huyện',
                'location' => '21 09 40N, 105 22 43E',
                'provinceid' => '01',
            ),
            186 => 
            array (
                'districtid' => '272',
                'name' => 'Phúc Thọ',
                'type' => 'Huyện',
                'location' => '21 06 32N, 105 34 52E',
                'provinceid' => '01',
            ),
            187 => 
            array (
                'districtid' => '273',
                'name' => 'Đan Phượng',
                'type' => 'Huyện',
                'location' => '21 07 13N, 105 40 49E',
                'provinceid' => '01',
            ),
            188 => 
            array (
                'districtid' => '274',
                'name' => 'Hoài Đức',
                'type' => 'Huyện',
                'location' => '21 01 25N, 105 42 03E',
                'provinceid' => '01',
            ),
            189 => 
            array (
                'districtid' => '275',
                'name' => 'Quốc Oai',
                'type' => 'Huyện',
                'location' => '20 58 45N, 105 36 43E',
                'provinceid' => '01',
            ),
            190 => 
            array (
                'districtid' => '276',
                'name' => 'Thạch Thất',
                'type' => 'Huyện',
                'location' => '21 02 17N, 105 33 05E',
                'provinceid' => '01',
            ),
            191 => 
            array (
                'districtid' => '277',
                'name' => 'Chương Mỹ',
                'type' => 'Huyện',
                'location' => '20 52 46N, 105 39 01E',
                'provinceid' => '01',
            ),
            192 => 
            array (
                'districtid' => '278',
                'name' => 'Thanh Oai',
                'type' => 'Huyện',
                'location' => '20 51 44N, 105 46 18E',
                'provinceid' => '01',
            ),
            193 => 
            array (
                'districtid' => '279',
                'name' => 'Thường Tín',
                'type' => 'Huyện',
                'location' => '20 49 59N, 105 22 19E',
                'provinceid' => '01',
            ),
            194 => 
            array (
                'districtid' => '280',
                'name' => 'Phú Xuyên',
                'type' => 'Huyện',
                'location' => '20 43 37N, 105 53 43E',
                'provinceid' => '01',
            ),
            195 => 
            array (
                'districtid' => '281',
                'name' => 'Ứng Hòa',
                'type' => 'Huyện',
                'location' => '20 42 41N, 105 47 58E',
                'provinceid' => '01',
            ),
            196 => 
            array (
                'districtid' => '282',
                'name' => 'Mỹ Đức',
                'type' => 'Huyện',
                'location' => '20 41 53N, 105 43 31E',
                'provinceid' => '01',
            ),
            197 => 
            array (
                'districtid' => '288',
                'name' => 'Hải Dương',
                'type' => 'Thành Phố',
                'location' => '20 56 14N, 106 18 21E',
                'provinceid' => '30',
            ),
            198 => 
            array (
                'districtid' => '290',
                'name' => 'Chí Linh',
                'type' => 'Huyện',
                'location' => '21 07 47N, 106 23 46E',
                'provinceid' => '30',
            ),
            199 => 
            array (
                'districtid' => '291',
                'name' => 'Nam Sách',
                'type' => 'Huyện',
                'location' => '21 00 15N, 106 20 26E',
                'provinceid' => '30',
            ),
            200 => 
            array (
                'districtid' => '292',
                'name' => 'Kinh Môn',
                'type' => 'Huyện',
                'location' => '21 00 04N, 106 30 23E',
                'provinceid' => '30',
            ),
            201 => 
            array (
                'districtid' => '293',
                'name' => 'Kim Thành',
                'type' => 'Huyện',
                'location' => '20 55 40N, 106 30 33E',
                'provinceid' => '30',
            ),
            202 => 
            array (
                'districtid' => '294',
                'name' => 'Thanh Hà',
                'type' => 'Huyện',
                'location' => '20 53 19N, 106 25 43E',
                'provinceid' => '30',
            ),
            203 => 
            array (
                'districtid' => '295',
                'name' => 'Cẩm Giàng',
                'type' => 'Huyện',
                'location' => '20 57 05N, 106 12 29E',
                'provinceid' => '30',
            ),
            204 => 
            array (
                'districtid' => '296',
                'name' => 'Bình Giang',
                'type' => 'Huyện',
                'location' => '20 52 36N, 106 11 24E',
                'provinceid' => '30',
            ),
            205 => 
            array (
                'districtid' => '297',
                'name' => 'Gia Lộc',
                'type' => 'Huyện',
                'location' => '20 51 01N, 106 17 34E',
                'provinceid' => '30',
            ),
            206 => 
            array (
                'districtid' => '298',
                'name' => 'Tứ Kỳ',
                'type' => 'Huyện',
                'location' => '20 49 05N, 106 24 05E',
                'provinceid' => '30',
            ),
            207 => 
            array (
                'districtid' => '299',
                'name' => 'Ninh Giang',
                'type' => 'Huyện',
                'location' => '20 45 13N, 106 20 09E',
                'provinceid' => '30',
            ),
            208 => 
            array (
                'districtid' => '300',
                'name' => 'Thanh Miện',
                'type' => 'Huyện',
                'location' => '20 46 02N, 106 12 26E',
                'provinceid' => '30',
            ),
            209 => 
            array (
                'districtid' => '303',
                'name' => 'Hồng Bàng',
                'type' => 'Quận',
                'location' => '20 52 37N, 106 38 32E',
                'provinceid' => '31',
            ),
            210 => 
            array (
                'districtid' => '304',
                'name' => 'Ngô Quyền',
                'type' => 'Quận',
                'location' => '20 51 13N, 106 41 57E',
                'provinceid' => '31',
            ),
            211 => 
            array (
                'districtid' => '305',
                'name' => 'Lê Chân',
                'type' => 'Quận',
                'location' => '20 50 12N, 106 40 30E',
                'provinceid' => '31',
            ),
            212 => 
            array (
                'districtid' => '306',
                'name' => 'Hải An',
                'type' => 'Quận',
                'location' => '20 49 38N, 106 45 57E',
                'provinceid' => '31',
            ),
            213 => 
            array (
                'districtid' => '307',
                'name' => 'Kiến An',
                'type' => 'Quận',
                'location' => '20 48 26N, 106 38 03E',
                'provinceid' => '31',
            ),
            214 => 
            array (
                'districtid' => '308',
                'name' => 'Đồ Sơn',
                'type' => 'Quận',
                'location' => '20 42 41N, 106 44 54E',
                'provinceid' => '31',
            ),
            215 => 
            array (
                'districtid' => '309',
                'name' => 'Kinh Dương',
                'type' => 'Quận',
                'location' => '',
                'provinceid' => '31',
            ),
            216 => 
            array (
                'districtid' => '311',
                'name' => 'Thuỷ Nguyên',
                'type' => 'Huyện',
                'location' => '20 56 36N, 106 39 38E',
                'provinceid' => '31',
            ),
            217 => 
            array (
                'districtid' => '312',
                'name' => 'An Dương',
                'type' => 'Huyện',
                'location' => '20 53 06N, 106 35 36E',
                'provinceid' => '31',
            ),
            218 => 
            array (
                'districtid' => '313',
                'name' => 'An Lão',
                'type' => 'Huyện',
                'location' => '20 47 54N, 106 33 19E',
                'provinceid' => '31',
            ),
            219 => 
            array (
                'districtid' => '314',
                'name' => 'Kiến Thụy',
                'type' => 'Huyện',
                'location' => '20 45 13N, 106 41 47E',
                'provinceid' => '31',
            ),
            220 => 
            array (
                'districtid' => '315',
                'name' => 'Tiên Lãng',
                'type' => 'Huyện',
                'location' => '20 42 23N, 106 36 03E',
                'provinceid' => '31',
            ),
            221 => 
            array (
                'districtid' => '316',
                'name' => 'Vĩnh Bảo',
                'type' => 'Huyện',
                'location' => '20 40 56N, 106 29 57E',
                'provinceid' => '31',
            ),
            222 => 
            array (
                'districtid' => '317',
                'name' => 'Cát Hải',
                'type' => 'Huyện',
                'location' => '20 47 09N, 106 58 07E',
                'provinceid' => '31',
            ),
            223 => 
            array (
                'districtid' => '318',
                'name' => 'Bạch Long Vĩ',
                'type' => 'Huyện',
                'location' => '20 08 41N, 107 42 51E',
                'provinceid' => '31',
            ),
            224 => 
            array (
                'districtid' => '323',
                'name' => 'Hưng Yên',
                'type' => 'Thành Phố',
                'location' => '20 39 38N, 106 03 08E',
                'provinceid' => '33',
            ),
            225 => 
            array (
                'districtid' => '325',
                'name' => 'Văn Lâm',
                'type' => 'Huyện',
                'location' => '20 58 31N, 106 02 51E',
                'provinceid' => '33',
            ),
            226 => 
            array (
                'districtid' => '326',
                'name' => 'Văn Giang',
                'type' => 'Huyện',
                'location' => '20 55 51N, 105 57 14E',
                'provinceid' => '33',
            ),
            227 => 
            array (
                'districtid' => '327',
                'name' => 'Yên Mỹ',
                'type' => 'Huyện',
                'location' => '20 53 45N, 106 01 21E',
                'provinceid' => '33',
            ),
            228 => 
            array (
                'districtid' => '328',
                'name' => 'Mỹ Hào',
                'type' => 'Huyện',
                'location' => '20 55 35N, 106 05 34E',
                'provinceid' => '33',
            ),
            229 => 
            array (
                'districtid' => '329',
                'name' => 'Ân Thi',
                'type' => 'Huyện',
                'location' => '20 48 49N, 106 05 30E',
                'provinceid' => '33',
            ),
            230 => 
            array (
                'districtid' => '330',
                'name' => 'Khoái Châu',
                'type' => 'Huyện',
                'location' => '20 49 53N, 105 58 28E',
                'provinceid' => '33',
            ),
            231 => 
            array (
                'districtid' => '331',
                'name' => 'Kim Động',
                'type' => 'Huyện',
                'location' => '20 44 47N, 106 01 47E',
                'provinceid' => '33',
            ),
            232 => 
            array (
                'districtid' => '332',
                'name' => 'Tiên Lữ',
                'type' => 'Huyện',
                'location' => '20 40 05N, 106 07 59E',
                'provinceid' => '33',
            ),
            233 => 
            array (
                'districtid' => '333',
                'name' => 'Phù Cừ',
                'type' => 'Huyện',
                'location' => '20 42 51N, 106 11 30E',
                'provinceid' => '33',
            ),
            234 => 
            array (
                'districtid' => '336',
                'name' => 'Thái Bình',
                'type' => 'Thành Phố',
                'location' => '20 26 45N, 106 19 56E',
                'provinceid' => '34',
            ),
            235 => 
            array (
                'districtid' => '338',
                'name' => 'Quỳnh Phụ',
                'type' => 'Huyện',
                'location' => '20 38 57N, 106 21 16E',
                'provinceid' => '34',
            ),
            236 => 
            array (
                'districtid' => '339',
                'name' => 'Hưng Hà',
                'type' => 'Huyện',
                'location' => '20 35 38N, 106 12 42E',
                'provinceid' => '34',
            ),
            237 => 
            array (
                'districtid' => '340',
                'name' => 'Đông Hưng',
                'type' => 'Huyện',
                'location' => '20 32 50N, 106 20 15E',
                'provinceid' => '34',
            ),
            238 => 
            array (
                'districtid' => '341',
                'name' => 'Thái Thụy',
                'type' => 'Huyện',
                'location' => '20 32 33N, 106 32 32E',
                'provinceid' => '34',
            ),
            239 => 
            array (
                'districtid' => '342',
                'name' => 'Tiền Hải',
                'type' => 'Huyện',
                'location' => '20 21 05N, 106 32 45E',
                'provinceid' => '34',
            ),
            240 => 
            array (
                'districtid' => '343',
                'name' => 'Kiến Xương',
                'type' => 'Huyện',
                'location' => '20 23 52N, 106 25 22E',
                'provinceid' => '34',
            ),
            241 => 
            array (
                'districtid' => '344',
                'name' => 'Vũ Thư',
                'type' => 'Huyện',
                'location' => '20 25 29N, 106 16 43E',
                'provinceid' => '34',
            ),
            242 => 
            array (
                'districtid' => '347',
                'name' => 'Phủ Lý',
                'type' => 'Thành Phố',
                'location' => '20 32 19N, 105 54 55E',
                'provinceid' => '35',
            ),
            243 => 
            array (
                'districtid' => '349',
                'name' => 'Duy Tiên',
                'type' => 'Huyện',
                'location' => '20 37 33N, 105 58 01E',
                'provinceid' => '35',
            ),
            244 => 
            array (
                'districtid' => '350',
                'name' => 'Kim Bảng',
                'type' => 'Huyện',
                'location' => '20 34 19N, 105 50 41E',
                'provinceid' => '35',
            ),
            245 => 
            array (
                'districtid' => '351',
                'name' => 'Thanh Liêm',
                'type' => 'Huyện',
                'location' => '20 27 31N, 105 55 09E',
                'provinceid' => '35',
            ),
            246 => 
            array (
                'districtid' => '352',
                'name' => 'Bình Lục',
                'type' => 'Huyện',
                'location' => '20 29 23N, 106 02 52E',
                'provinceid' => '35',
            ),
            247 => 
            array (
                'districtid' => '353',
                'name' => 'Lý Nhân',
                'type' => 'Huyện',
                'location' => '20 32 55N, 106 04 48E',
                'provinceid' => '35',
            ),
            248 => 
            array (
                'districtid' => '356',
                'name' => 'Nam Định',
                'type' => 'Thành Phố',
                'location' => '20 25 07N, 106 09 54E',
                'provinceid' => '36',
            ),
            249 => 
            array (
                'districtid' => '358',
                'name' => 'Mỹ Lộc',
                'type' => 'Huyện',
                'location' => '20 27 21N, 106 07 56E',
                'provinceid' => '36',
            ),
            250 => 
            array (
                'districtid' => '359',
                'name' => 'Vụ Bản',
                'type' => 'Huyện',
                'location' => '20 22 57N, 106 05 35E',
                'provinceid' => '36',
            ),
            251 => 
            array (
                'districtid' => '360',
                'name' => 'Ý Yên',
                'type' => 'Huyện',
                'location' => '20 19 48N, 106 01 55E',
                'provinceid' => '36',
            ),
            252 => 
            array (
                'districtid' => '361',
                'name' => 'Nghĩa Hưng',
                'type' => 'Huyện',
                'location' => '20 05 37N, 106 08 59E',
                'provinceid' => '36',
            ),
            253 => 
            array (
                'districtid' => '362',
                'name' => 'Nam Trực',
                'type' => 'Huyện',
                'location' => '20 20 08N, 106 12 54E',
                'provinceid' => '36',
            ),
            254 => 
            array (
                'districtid' => '363',
                'name' => 'Trực Ninh',
                'type' => 'Huyện',
                'location' => '20 14 42N, 106 12 45E',
                'provinceid' => '36',
            ),
            255 => 
            array (
                'districtid' => '364',
                'name' => 'Xuân Trường',
                'type' => 'Huyện',
                'location' => '20 17 53N, 106 21 43E',
                'provinceid' => '36',
            ),
            256 => 
            array (
                'districtid' => '365',
                'name' => 'Giao Thủy',
                'type' => 'Huyện',
                'location' => '20 14 45N, 106 28 39E',
                'provinceid' => '36',
            ),
            257 => 
            array (
                'districtid' => '366',
                'name' => 'Hải Hậu',
                'type' => 'Huyện',
                'location' => '20 06 26N, 106 16 29E',
                'provinceid' => '36',
            ),
            258 => 
            array (
                'districtid' => '369',
                'name' => 'Ninh Bình',
                'type' => 'Thành Phố',
                'location' => '20 14 45N, 105 58 24E',
                'provinceid' => '37',
            ),
            259 => 
            array (
                'districtid' => '370',
                'name' => 'Tam Điệp',
                'type' => 'Thị Xã',
                'location' => '20 09 42N, 103 52 43E',
                'provinceid' => '37',
            ),
            260 => 
            array (
                'districtid' => '372',
                'name' => 'Nho Quan',
                'type' => 'Huyện',
                'location' => '20 18 46N, 105 42 48E',
                'provinceid' => '37',
            ),
            261 => 
            array (
                'districtid' => '373',
                'name' => 'Gia Viễn',
                'type' => 'Huyện',
                'location' => '20 19 50N, 105 52 20E',
                'provinceid' => '37',
            ),
            262 => 
            array (
                'districtid' => '374',
                'name' => 'Hoa Lư',
                'type' => 'Huyện',
                'location' => '20 15 04N, 105 55 52E',
                'provinceid' => '37',
            ),
            263 => 
            array (
                'districtid' => '375',
                'name' => 'Yên Khánh',
                'type' => 'Huyện',
                'location' => '20 11 26N, 106 04 33E',
                'provinceid' => '37',
            ),
            264 => 
            array (
                'districtid' => '376',
                'name' => 'Kim Sơn',
                'type' => 'Huyện',
                'location' => '20 02 07N, 106 05 27E',
                'provinceid' => '37',
            ),
            265 => 
            array (
                'districtid' => '377',
                'name' => 'Yên Mô',
                'type' => 'Huyện',
                'location' => '20 07 45N, 105 59 45E',
                'provinceid' => '37',
            ),
            266 => 
            array (
                'districtid' => '380',
                'name' => 'Thanh Hóa',
                'type' => 'Thành Phố',
                'location' => '19 48 26N, 105 47 37E',
                'provinceid' => '38',
            ),
            267 => 
            array (
                'districtid' => '381',
                'name' => 'Bỉm Sơn',
                'type' => 'Thị Xã',
                'location' => '20 05 21N, 105 51 48E',
                'provinceid' => '38',
            ),
            268 => 
            array (
                'districtid' => '382',
                'name' => 'Sầm Sơn',
                'type' => 'Thị Xã',
                'location' => '19 45 11N, 105 54 03E',
                'provinceid' => '38',
            ),
            269 => 
            array (
                'districtid' => '384',
                'name' => 'Mường Lát',
                'type' => 'Huyện',
                'location' => '20 30 42N, 104 37 27E',
                'provinceid' => '38',
            ),
            270 => 
            array (
                'districtid' => '385',
                'name' => 'Quan Hóa',
                'type' => 'Huyện',
                'location' => '20 29 15N, 104 56 35E',
                'provinceid' => '38',
            ),
            271 => 
            array (
                'districtid' => '386',
                'name' => 'Bá Thước',
                'type' => 'Huyện',
                'location' => '20 22 48N, 105 14 50E',
                'provinceid' => '38',
            ),
            272 => 
            array (
                'districtid' => '387',
                'name' => 'Quan Sơn',
                'type' => 'Huyện',
                'location' => '20 15 17N, 104 51 58E',
                'provinceid' => '38',
            ),
            273 => 
            array (
                'districtid' => '388',
                'name' => 'Lang Chánh',
                'type' => 'Huyện',
                'location' => '20 08 58N, 105 07 40E',
                'provinceid' => '38',
            ),
            274 => 
            array (
                'districtid' => '389',
                'name' => 'Ngọc Lặc',
                'type' => 'Huyện',
                'location' => '20 04 08N, 105 22 39E',
                'provinceid' => '38',
            ),
            275 => 
            array (
                'districtid' => '390',
                'name' => 'Cẩm Thủy',
                'type' => 'Huyện',
                'location' => '20 12 20N, 105 27 22E',
                'provinceid' => '38',
            ),
            276 => 
            array (
                'districtid' => '391',
                'name' => 'Thạch Thành',
                'type' => 'Huyện',
                'location' => '21 12 41N, 105 36 38E',
                'provinceid' => '38',
            ),
            277 => 
            array (
                'districtid' => '392',
                'name' => 'Hà Trung',
                'type' => 'Huyện',
                'location' => '20 03 20N, 105 51 20E',
                'provinceid' => '38',
            ),
            278 => 
            array (
                'districtid' => '393',
                'name' => 'Vĩnh Lộc',
                'type' => 'Huyện',
                'location' => '20 02 29N, 105 39 28E',
                'provinceid' => '38',
            ),
            279 => 
            array (
                'districtid' => '394',
                'name' => 'Yên Định',
                'type' => 'Huyện',
                'location' => '20 00 31N, 105 37 44E',
                'provinceid' => '38',
            ),
            280 => 
            array (
                'districtid' => '395',
                'name' => 'Thọ Xuân',
                'type' => 'Huyện',
                'location' => '19 55 39N, 105 29 14E',
                'provinceid' => '38',
            ),
            281 => 
            array (
                'districtid' => '396',
                'name' => 'Thường Xuân',
                'type' => 'Huyện',
                'location' => '19 54 55N, 105 10 46E',
                'provinceid' => '38',
            ),
            282 => 
            array (
                'districtid' => '397',
                'name' => 'Triệu Sơn',
                'type' => 'Huyện',
                'location' => '19 48 11N, 105 34 03E',
                'provinceid' => '38',
            ),
            283 => 
            array (
                'districtid' => '398',
                'name' => 'Thiệu Hoá',
                'type' => 'Huyện',
                'location' => '19 53 56N, 105 40 57E',
                'provinceid' => '38',
            ),
            284 => 
            array (
                'districtid' => '399',
                'name' => 'Hoằng Hóa',
                'type' => 'Huyện',
                'location' => '19 51 59N, 105 51 34E',
                'provinceid' => '38',
            ),
            285 => 
            array (
                'districtid' => '400',
                'name' => 'Hậu Lộc',
                'type' => 'Huyện',
                'location' => '19 56 02N, 105 53 19E',
                'provinceid' => '38',
            ),
            286 => 
            array (
                'districtid' => '401',
                'name' => 'Nga Sơn',
                'type' => 'Huyện',
                'location' => '20 00 16N, 105 59 26E',
                'provinceid' => '38',
            ),
            287 => 
            array (
                'districtid' => '402',
                'name' => 'Như Xuân',
                'type' => 'Huyện',
                'location' => '19 5 55N, 105 20 22E',
                'provinceid' => '38',
            ),
            288 => 
            array (
                'districtid' => '403',
                'name' => 'Như Thanh',
                'type' => 'Huyện',
                'location' => '19 35 19N, 105 33 09E',
                'provinceid' => '38',
            ),
            289 => 
            array (
                'districtid' => '404',
                'name' => 'Nông Cống',
                'type' => 'Huyện',
                'location' => '19 36 58N, 105 40 54E',
                'provinceid' => '38',
            ),
            290 => 
            array (
                'districtid' => '405',
                'name' => 'Đông Sơn',
                'type' => 'Huyện',
                'location' => '19 47 44N, 105 42 19E',
                'provinceid' => '38',
            ),
            291 => 
            array (
                'districtid' => '406',
                'name' => 'Quảng Xương',
                'type' => 'Huyện',
                'location' => '19 40 53N, 105 48 01E',
                'provinceid' => '38',
            ),
            292 => 
            array (
                'districtid' => '407',
                'name' => 'Tĩnh Gia',
                'type' => 'Huyện',
                'location' => '19 27 13N, 105 43 38E',
                'provinceid' => '38',
            ),
            293 => 
            array (
                'districtid' => '412',
                'name' => 'Vinh',
                'type' => 'Thành Phố',
                'location' => '18 41 06N, 105 42 05E',
                'provinceid' => '40',
            ),
            294 => 
            array (
                'districtid' => '413',
                'name' => 'Cửa Lò',
                'type' => 'Thị Xã',
                'location' => '18 47 26N, 105 43 31E',
                'provinceid' => '40',
            ),
            295 => 
            array (
                'districtid' => '414',
                'name' => 'Thái Hoà',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '40',
            ),
            296 => 
            array (
                'districtid' => '415',
                'name' => 'Quế Phong',
                'type' => 'Huyện',
                'location' => '19 42 25N, 104 54 21E',
                'provinceid' => '40',
            ),
            297 => 
            array (
                'districtid' => '416',
                'name' => 'Quỳ Châu',
                'type' => 'Huyện',
                'location' => '19 32 16N, 105 03 18E',
                'provinceid' => '40',
            ),
            298 => 
            array (
                'districtid' => '417',
                'name' => 'Kỳ Sơn',
                'type' => 'Huyện',
                'location' => '19 24 36N, 104 09 45E',
                'provinceid' => '40',
            ),
            299 => 
            array (
                'districtid' => '418',
                'name' => 'Tương Dương',
                'type' => 'Huyện',
                'location' => '19 19 15N, 104 35 41E',
                'provinceid' => '40',
            ),
            300 => 
            array (
                'districtid' => '419',
                'name' => 'Nghĩa Đàn',
                'type' => 'Huyện',
                'location' => '19 21 19N, 105 26 33E',
                'provinceid' => '40',
            ),
            301 => 
            array (
                'districtid' => '420',
                'name' => 'Quỳ Hợp',
                'type' => 'Huyện',
                'location' => '19 19 24N, 105 09 12E',
                'provinceid' => '40',
            ),
            302 => 
            array (
                'districtid' => '421',
                'name' => 'Quỳnh Lưu',
                'type' => 'Huyện',
                'location' => '19 14 01N, 105 37 00E',
                'provinceid' => '40',
            ),
            303 => 
            array (
                'districtid' => '422',
                'name' => 'Con Cuông',
                'type' => 'Huyện',
                'location' => '19 03 50N, 107 47 15E',
                'provinceid' => '40',
            ),
            304 => 
            array (
                'districtid' => '423',
                'name' => 'Tân Kỳ',
                'type' => 'Huyện',
                'location' => '19 06 11N, 105 14 14E',
                'provinceid' => '40',
            ),
            305 => 
            array (
                'districtid' => '424',
                'name' => 'Anh Sơn',
                'type' => 'Huyện',
                'location' => '18 58 04N, 105 04 30E',
                'provinceid' => '40',
            ),
            306 => 
            array (
                'districtid' => '425',
                'name' => 'Diễn Châu',
                'type' => 'Huyện',
                'location' => '19 01 20N, 105 34 13E',
                'provinceid' => '40',
            ),
            307 => 
            array (
                'districtid' => '426',
                'name' => 'Yên Thành',
                'type' => 'Huyện',
                'location' => '19 01 25N, 105 26 17E',
                'provinceid' => '40',
            ),
            308 => 
            array (
                'districtid' => '427',
                'name' => 'Đô Lương',
                'type' => 'Huyện',
                'location' => '18 55 00N, 105 21 03E',
                'provinceid' => '40',
            ),
            309 => 
            array (
                'districtid' => '428',
                'name' => 'Thanh Chương',
                'type' => 'Huyện',
                'location' => '18 44 11N, 105 12 59E',
                'provinceid' => '40',
            ),
            310 => 
            array (
                'districtid' => '429',
                'name' => 'Nghi Lộc',
                'type' => 'Huyện',
                'location' => '18 47 41N, 105 31 30E',
                'provinceid' => '40',
            ),
            311 => 
            array (
                'districtid' => '430',
                'name' => 'Nam Đàn',
                'type' => 'Huyện',
                'location' => '18 40 28N, 105 30 32E',
                'provinceid' => '40',
            ),
            312 => 
            array (
                'districtid' => '431',
                'name' => 'Hưng Nguyên',
                'type' => 'Huyện',
                'location' => '18 41 13N, 105 37 41E',
                'provinceid' => '40',
            ),
            313 => 
            array (
                'districtid' => '436',
                'name' => 'Hà Tĩnh',
                'type' => 'Thành Phố',
                'location' => '18 21 20N, 105 54 00E',
                'provinceid' => '42',
            ),
            314 => 
            array (
                'districtid' => '437',
                'name' => 'Hồng Lĩnh',
                'type' => 'Thị Xã',
                'location' => '18 32 05N, 105 42 40E',
                'provinceid' => '42',
            ),
            315 => 
            array (
                'districtid' => '439',
                'name' => 'Hương Sơn',
                'type' => 'Huyện',
                'location' => '18 26 47N, 105 19 36E',
                'provinceid' => '42',
            ),
            316 => 
            array (
                'districtid' => '440',
                'name' => 'Đức Thọ',
                'type' => 'Huyện',
                'location' => '18 29 23N, 105 36 39E',
                'provinceid' => '42',
            ),
            317 => 
            array (
                'districtid' => '441',
                'name' => 'Vũ Quang',
                'type' => 'Huyện',
                'location' => '18 19 30N, 105 26 38E',
                'provinceid' => '42',
            ),
            318 => 
            array (
                'districtid' => '442',
                'name' => 'Nghi Xuân',
                'type' => 'Huyện',
                'location' => '18 38 46N, 105 46 17E',
                'provinceid' => '42',
            ),
            319 => 
            array (
                'districtid' => '443',
                'name' => 'Can Lộc',
                'type' => 'Huyện',
                'location' => '18 26 39N, 105 46 13E',
                'provinceid' => '42',
            ),
            320 => 
            array (
                'districtid' => '444',
                'name' => 'Hương Khê',
                'type' => 'Huyện',
                'location' => '18 11 36N, 105 41 24E',
                'provinceid' => '42',
            ),
            321 => 
            array (
                'districtid' => '445',
                'name' => 'Thạch Hà',
                'type' => 'Huyện',
                'location' => '18 19 29N, 105 52 43E',
                'provinceid' => '42',
            ),
            322 => 
            array (
                'districtid' => '446',
                'name' => 'Cẩm Xuyên',
                'type' => 'Huyện',
                'location' => '18 11 32N, 106 00 04E',
                'provinceid' => '42',
            ),
            323 => 
            array (
                'districtid' => '447',
                'name' => 'Kỳ Anh',
                'type' => 'Huyện',
                'location' => '18 05 15N, 106 15 49E',
                'provinceid' => '42',
            ),
            324 => 
            array (
                'districtid' => '448',
                'name' => 'Lộc Hà',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '42',
            ),
            325 => 
            array (
                'districtid' => '450',
                'name' => 'Đồng Hới',
                'type' => 'Thành Phố',
                'location' => '17 26 53N, 106 35 15E',
                'provinceid' => '44',
            ),
            326 => 
            array (
                'districtid' => '452',
                'name' => 'Minh Hóa',
                'type' => 'Huyện',
                'location' => '17 44 03N, 105 51 45E',
                'provinceid' => '44',
            ),
            327 => 
            array (
                'districtid' => '453',
                'name' => 'Tuyên Hóa',
                'type' => 'Huyện',
                'location' => '17 54 04N, 105 58 17E',
                'provinceid' => '44',
            ),
            328 => 
            array (
                'districtid' => '454',
                'name' => 'Quảng Trạch',
                'type' => 'Huyện',
                'location' => '17 50 04N, 106 22 24E',
                'provinceid' => '44',
            ),
            329 => 
            array (
                'districtid' => '455',
                'name' => 'Bố Trạch',
                'type' => 'Huyện',
                'location' => '17 29 13N, 106 06 54E',
                'provinceid' => '44',
            ),
            330 => 
            array (
                'districtid' => '456',
                'name' => 'Quảng Ninh',
                'type' => 'Huyện',
                'location' => '17 15 15N, 106 32 31E',
                'provinceid' => '44',
            ),
            331 => 
            array (
                'districtid' => '457',
                'name' => 'Lệ Thủy',
                'type' => 'Huyện',
                'location' => '17 07 35N, 106 41 47E',
                'provinceid' => '44',
            ),
            332 => 
            array (
                'districtid' => '461',
                'name' => 'Đông Hà',
                'type' => 'Thành Phố',
                'location' => '16 48 12N, 107 05 12E',
                'provinceid' => '45',
            ),
            333 => 
            array (
                'districtid' => '462',
                'name' => 'Quảng Trị',
                'type' => 'Thị Xã',
                'location' => '16 44 37N, 107 11 20E',
                'provinceid' => '45',
            ),
            334 => 
            array (
                'districtid' => '464',
                'name' => 'Vĩnh Linh',
                'type' => 'Huyện',
                'location' => '17 01 35N, 106 53 49E',
                'provinceid' => '45',
            ),
            335 => 
            array (
                'districtid' => '465',
                'name' => 'Hướng Hóa',
                'type' => 'Huyện',
                'location' => '16 42 19N, 106 40 14E',
                'provinceid' => '45',
            ),
            336 => 
            array (
                'districtid' => '466',
                'name' => 'Gio Linh',
                'type' => 'Huyện',
                'location' => '16 54 49N, 106 56 16E',
                'provinceid' => '45',
            ),
            337 => 
            array (
                'districtid' => '467',
                'name' => 'Đa Krông',
                'type' => 'Huyện',
                'location' => '16 33 58N, 106 55 49E',
                'provinceid' => '45',
            ),
            338 => 
            array (
                'districtid' => '468',
                'name' => 'Cam Lộ',
                'type' => 'Huyện',
                'location' => '16 47 09N, 106 57 52E',
                'provinceid' => '45',
            ),
            339 => 
            array (
                'districtid' => '469',
                'name' => 'Triệu Phong',
                'type' => 'Huyện',
                'location' => '16 46 32N, 107 09 12E',
                'provinceid' => '45',
            ),
            340 => 
            array (
                'districtid' => '470',
                'name' => 'Hải Lăng',
                'type' => 'Huyện',
                'location' => '16 41 07N, 107 13 34E',
                'provinceid' => '45',
            ),
            341 => 
            array (
                'districtid' => '471',
                'name' => 'Cồn Cỏ',
                'type' => 'Huyện',
                'location' => '19 09 39N, 107 19 58E',
                'provinceid' => '45',
            ),
            342 => 
            array (
                'districtid' => '474',
                'name' => 'Huế',
                'type' => 'Thành Phố',
                'location' => '16 27 16N, 107 34 29E',
                'provinceid' => '46',
            ),
            343 => 
            array (
                'districtid' => '476',
                'name' => 'Phong Điền',
                'type' => 'Huyện',
                'location' => '16 32 42N, 106 16 37E',
                'provinceid' => '46',
            ),
            344 => 
            array (
                'districtid' => '477',
                'name' => 'Quảng Điền',
                'type' => 'Huyện',
                'location' => '16 35 21N, 107 29 31E',
                'provinceid' => '46',
            ),
            345 => 
            array (
                'districtid' => '478',
                'name' => 'Phú Vang',
                'type' => 'Huyện',
                'location' => '16 27 20N, 107 42 28E',
                'provinceid' => '46',
            ),
            346 => 
            array (
                'districtid' => '479',
                'name' => 'Hương Thủy',
                'type' => 'Huyện',
                'location' => '16 19 27N, 107 37 26E',
                'provinceid' => '46',
            ),
            347 => 
            array (
                'districtid' => '480',
                'name' => 'Hương Trà',
                'type' => 'Huyện',
                'location' => '16 25 49N, 107 28 37E',
                'provinceid' => '46',
            ),
            348 => 
            array (
                'districtid' => '481',
                'name' => 'A Lưới',
                'type' => 'Huyện',
                'location' => '16 13 59N, 107 16 12E',
                'provinceid' => '46',
            ),
            349 => 
            array (
                'districtid' => '482',
                'name' => 'Phú Lộc',
                'type' => 'Huyện',
                'location' => '16 17 16N, 107 55 25E',
                'provinceid' => '46',
            ),
            350 => 
            array (
                'districtid' => '483',
                'name' => 'Nam Đông',
                'type' => 'Huyện',
                'location' => '16 07 11N, 107 41 25E',
                'provinceid' => '46',
            ),
            351 => 
            array (
                'districtid' => '490',
                'name' => 'Liên Chiểu',
                'type' => 'Quận',
                'location' => '16 07 26N, 108 07 04E',
                'provinceid' => '48',
            ),
            352 => 
            array (
                'districtid' => '491',
                'name' => 'Thanh Khê',
                'type' => 'Quận',
                'location' => '16 03 28N, 108 11 00E',
                'provinceid' => '48',
            ),
            353 => 
            array (
                'districtid' => '492',
                'name' => 'Hải Châu',
                'type' => 'Quận',
                'location' => '16 03 38N, 108 11 46E',
                'provinceid' => '48',
            ),
            354 => 
            array (
                'districtid' => '493',
                'name' => 'Sơn Trà',
                'type' => 'Quận',
                'location' => '16 06 13N, 108 16 26E',
                'provinceid' => '48',
            ),
            355 => 
            array (
                'districtid' => '494',
                'name' => 'Ngũ Hành Sơn',
                'type' => 'Quận',
                'location' => '16 00 30N, 108 15 09E',
                'provinceid' => '48',
            ),
            356 => 
            array (
                'districtid' => '495',
                'name' => 'Cẩm Lệ',
                'type' => 'Quận',
                'location' => '',
                'provinceid' => '48',
            ),
            357 => 
            array (
                'districtid' => '497',
                'name' => 'Hoà Vang',
                'type' => 'Huyện',
                'location' => '16 03 59N, 108 01 57E',
                'provinceid' => '48',
            ),
            358 => 
            array (
                'districtid' => '498',
                'name' => 'Hoàng Sa',
                'type' => 'Huyện',
                'location' => '16 21 36N, 111 57 01E',
                'provinceid' => '48',
            ),
            359 => 
            array (
                'districtid' => '502',
                'name' => 'Tam Kỳ',
                'type' => 'Thành Phố',
                'location' => '15 34 37N, 108 29 52E',
                'provinceid' => '49',
            ),
            360 => 
            array (
                'districtid' => '503',
                'name' => 'Hội An',
                'type' => 'Thành Phố',
                'location' => '15 53 20N, 108 20 42E',
                'provinceid' => '49',
            ),
            361 => 
            array (
                'districtid' => '504',
                'name' => 'Tây Giang',
                'type' => 'Huyện',
                'location' => '15 53 46N, 107 25 52E',
                'provinceid' => '49',
            ),
            362 => 
            array (
                'districtid' => '505',
                'name' => 'Đông Giang',
                'type' => 'Huyện',
                'location' => '15 54 44N, 107 47 06E',
                'provinceid' => '49',
            ),
            363 => 
            array (
                'districtid' => '506',
                'name' => 'Đại Lộc',
                'type' => 'Huyện',
                'location' => '15 50 10N, 107 58 27E',
                'provinceid' => '49',
            ),
            364 => 
            array (
                'districtid' => '507',
                'name' => 'Điện Bàn',
                'type' => 'Huyện',
                'location' => '15 54 15N, 108 13 38E',
                'provinceid' => '49',
            ),
            365 => 
            array (
                'districtid' => '508',
                'name' => 'Duy Xuyên',
                'type' => 'Huyện',
                'location' => '15 47 58N, 108 13 27E',
                'provinceid' => '49',
            ),
            366 => 
            array (
                'districtid' => '509',
                'name' => 'Quế Sơn',
                'type' => 'Huyện',
                'location' => '15 41 03N, 108 05 34E',
                'provinceid' => '49',
            ),
            367 => 
            array (
                'districtid' => '510',
                'name' => 'Nam Giang',
                'type' => 'Huyện',
                'location' => '15 36 37N, 107 33 52E',
                'provinceid' => '49',
            ),
            368 => 
            array (
                'districtid' => '511',
                'name' => 'Phước Sơn',
                'type' => 'Huyện',
                'location' => '15 23 17N, 107 50 22E',
                'provinceid' => '49',
            ),
            369 => 
            array (
                'districtid' => '512',
                'name' => 'Hiệp Đức',
                'type' => 'Huyện',
                'location' => '15 31 09N, 108 05 56E',
                'provinceid' => '49',
            ),
            370 => 
            array (
                'districtid' => '513',
                'name' => 'Thăng Bình',
                'type' => 'Huyện',
                'location' => '15 42 29N, 108 22 04E',
                'provinceid' => '49',
            ),
            371 => 
            array (
                'districtid' => '514',
                'name' => 'Tiên Phước',
                'type' => 'Huyện',
                'location' => '15 29 30N, 108 15 28E',
                'provinceid' => '49',
            ),
            372 => 
            array (
                'districtid' => '515',
                'name' => 'Bắc Trà My',
                'type' => 'Huyện',
                'location' => '15 08 00N, 108 05 32E',
                'provinceid' => '49',
            ),
            373 => 
            array (
                'districtid' => '516',
                'name' => 'Nam Trà My',
                'type' => 'Huyện',
                'location' => '15 16 40N, 108 12 15E',
                'provinceid' => '49',
            ),
            374 => 
            array (
                'districtid' => '517',
                'name' => 'Núi Thành',
                'type' => 'Huyện',
                'location' => '15 26 53N, 108 34 49E',
                'provinceid' => '49',
            ),
            375 => 
            array (
                'districtid' => '518',
                'name' => 'Phú Ninh',
                'type' => 'Huyện',
                'location' => '15 30 43N, 108 24 43E',
                'provinceid' => '49',
            ),
            376 => 
            array (
                'districtid' => '519',
                'name' => 'Nông Sơn',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '49',
            ),
            377 => 
            array (
                'districtid' => '522',
                'name' => 'Quảng Ngãi',
                'type' => 'Thành Phố',
                'location' => '15 07 17N, 108 48 24E',
                'provinceid' => '51',
            ),
            378 => 
            array (
                'districtid' => '524',
                'name' => 'Bình Sơn',
                'type' => 'Huyện',
                'location' => '15 18 45N, 108 45 35E',
                'provinceid' => '51',
            ),
            379 => 
            array (
                'districtid' => '525',
                'name' => 'Trà Bồng',
                'type' => 'Huyện',
                'location' => '15 13 30N, 108 29 57E',
                'provinceid' => '51',
            ),
            380 => 
            array (
                'districtid' => '526',
                'name' => 'Tây Trà',
                'type' => 'Huyện',
                'location' => '15 11 13N, 108 22 23E',
                'provinceid' => '51',
            ),
            381 => 
            array (
                'districtid' => '527',
                'name' => 'Sơn Tịnh',
                'type' => 'Huyện',
                'location' => '15 11 49N, 108 45 03E',
                'provinceid' => '51',
            ),
            382 => 
            array (
                'districtid' => '528',
                'name' => 'Tư Nghĩa',
                'type' => 'Huyện',
                'location' => '15 05 25N, 108 45 23E',
                'provinceid' => '51',
            ),
            383 => 
            array (
                'districtid' => '529',
                'name' => 'Sơn Hà',
                'type' => 'Huyện',
                'location' => '14 58 35N, 108 29 09E',
                'provinceid' => '51',
            ),
            384 => 
            array (
                'districtid' => '530',
                'name' => 'Sơn Tây',
                'type' => 'Huyện',
                'location' => '14 58 11N, 108 21 22E',
                'provinceid' => '51',
            ),
            385 => 
            array (
                'districtid' => '531',
                'name' => 'Minh Long',
                'type' => 'Huyện',
                'location' => '14 56 49N, 108 40 19E',
                'provinceid' => '51',
            ),
            386 => 
            array (
                'districtid' => '532',
                'name' => 'Nghĩa Hành',
                'type' => 'Huyện',
                'location' => '14 58 06N, 108 46 05E',
                'provinceid' => '51',
            ),
            387 => 
            array (
                'districtid' => '533',
                'name' => 'Mộ Đức',
                'type' => 'Huyện',
                'location' => '11 59 13N, 108 52 21E',
                'provinceid' => '51',
            ),
            388 => 
            array (
                'districtid' => '534',
                'name' => 'Đức Phổ',
                'type' => 'Huyện',
                'location' => '14 44 59N, 108 56 58E',
                'provinceid' => '51',
            ),
            389 => 
            array (
                'districtid' => '535',
                'name' => 'Ba Tơ',
                'type' => 'Huyện',
                'location' => '14 42 52N, 108 43 44E',
                'provinceid' => '51',
            ),
            390 => 
            array (
                'districtid' => '536',
                'name' => 'Lý Sơn',
                'type' => 'Huyện',
                'location' => '15 22 50N, 109 06 56E',
                'provinceid' => '51',
            ),
            391 => 
            array (
                'districtid' => '540',
                'name' => 'Qui Nhơn',
                'type' => 'Thành Phố',
                'location' => '13 47 15N, 109 12 48E',
                'provinceid' => '52',
            ),
            392 => 
            array (
                'districtid' => '542',
                'name' => 'An Lão',
                'type' => 'Huyện',
                'location' => '14 32 10N, 108 47 52E',
                'provinceid' => '52',
            ),
            393 => 
            array (
                'districtid' => '543',
                'name' => 'Hoài Nhơn',
                'type' => 'Huyện',
                'location' => '14 30 56N, 109 01 56E',
                'provinceid' => '52',
            ),
            394 => 
            array (
                'districtid' => '544',
                'name' => 'Hoài Ân',
                'type' => 'Huyện',
                'location' => '14 20 51N, 108 54 04E',
                'provinceid' => '52',
            ),
            395 => 
            array (
                'districtid' => '545',
                'name' => 'Phù Mỹ',
                'type' => 'Huyện',
                'location' => '14 14 41N, 109 05 43E',
                'provinceid' => '52',
            ),
            396 => 
            array (
                'districtid' => '546',
                'name' => 'Vĩnh Thạnh',
                'type' => 'Huyện',
                'location' => '14 14 26N, 108 44 08E',
                'provinceid' => '52',
            ),
            397 => 
            array (
                'districtid' => '547',
                'name' => 'Tây Sơn',
                'type' => 'Huyện',
                'location' => '13 56 47N, 108 53 06E',
                'provinceid' => '52',
            ),
            398 => 
            array (
                'districtid' => '548',
                'name' => 'Phù Cát',
                'type' => 'Huyện',
                'location' => '14 03 48N, 109 03 57E',
                'provinceid' => '52',
            ),
            399 => 
            array (
                'districtid' => '549',
                'name' => 'An Nhơn',
                'type' => 'Huyện',
                'location' => '13 51 28N, 109 04 02E',
                'provinceid' => '52',
            ),
            400 => 
            array (
                'districtid' => '550',
                'name' => 'Tuy Phước',
                'type' => 'Huyện',
                'location' => '13 46 30N, 109 05 38E',
                'provinceid' => '52',
            ),
            401 => 
            array (
                'districtid' => '551',
                'name' => 'Vân Canh',
                'type' => 'Huyện',
                'location' => '13 40 35N, 108 57 52E',
                'provinceid' => '52',
            ),
            402 => 
            array (
                'districtid' => '555',
                'name' => 'Tuy Hòa',
                'type' => 'Thành Phố',
                'location' => '13 05 42N, 109 15 50E',
                'provinceid' => '54',
            ),
            403 => 
            array (
                'districtid' => '557',
                'name' => 'Sông Cầu',
                'type' => 'Thị Xã',
                'location' => '13 31 40N, 109 12 39E',
                'provinceid' => '54',
            ),
            404 => 
            array (
                'districtid' => '558',
                'name' => 'Đồng Xuân',
                'type' => 'Huyện',
                'location' => '13 24 59N, 108 56 46E',
                'provinceid' => '54',
            ),
            405 => 
            array (
                'districtid' => '559',
                'name' => 'Tuy An',
                'type' => 'Huyện',
                'location' => '13 15 19N, 109 12 21E',
                'provinceid' => '54',
            ),
            406 => 
            array (
                'districtid' => '560',
                'name' => 'Sơn Hòa',
                'type' => 'Huyện',
                'location' => '13 12 16N, 108 57 17E',
                'provinceid' => '54',
            ),
            407 => 
            array (
                'districtid' => '561',
                'name' => 'Sông Hinh',
                'type' => 'Huyện',
                'location' => '12 54 19N, 108 53 38E',
                'provinceid' => '54',
            ),
            408 => 
            array (
                'districtid' => '562',
                'name' => 'Tây Hoà',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '54',
            ),
            409 => 
            array (
                'districtid' => '563',
                'name' => 'Phú Hoà',
                'type' => 'Huyện',
                'location' => '13 04 07N, 109 11 24E',
                'provinceid' => '54',
            ),
            410 => 
            array (
                'districtid' => '564',
                'name' => 'Đông Hoà',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '54',
            ),
            411 => 
            array (
                'districtid' => '568',
                'name' => 'Nha Trang',
                'type' => 'Thành Phố',
                'location' => '12 15 40N, 109 10 40E',
                'provinceid' => '56',
            ),
            412 => 
            array (
                'districtid' => '569',
                'name' => 'Cam Ranh',
                'type' => 'Thị Xã',
                'location' => '11 59 05N, 108 08 17E',
                'provinceid' => '56',
            ),
            413 => 
            array (
                'districtid' => '570',
                'name' => 'Cam Lâm',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '56',
            ),
            414 => 
            array (
                'districtid' => '571',
                'name' => 'Vạn Ninh',
                'type' => 'Huyện',
                'location' => '12 43 10N, 109 11 18E',
                'provinceid' => '56',
            ),
            415 => 
            array (
                'districtid' => '572',
                'name' => 'Ninh Hòa',
                'type' => 'Huyện',
                'location' => '12 32 54N, 109 06 11E',
                'provinceid' => '56',
            ),
            416 => 
            array (
                'districtid' => '573',
                'name' => 'Khánh Vĩnh',
                'type' => 'Huyện',
                'location' => '12 17 50N, 108 51 56E',
                'provinceid' => '56',
            ),
            417 => 
            array (
                'districtid' => '574',
                'name' => 'Diên Khánh',
                'type' => 'Huyện',
                'location' => '12 13 19N, 109 02 16E',
                'provinceid' => '56',
            ),
            418 => 
            array (
                'districtid' => '575',
                'name' => 'Khánh Sơn',
                'type' => 'Huyện',
                'location' => '12 02 17N, 108 53 47E',
                'provinceid' => '56',
            ),
            419 => 
            array (
                'districtid' => '576',
                'name' => 'Trường Sa',
                'type' => 'Huyện',
                'location' => '9 07 27N, 114 15 00E',
                'provinceid' => '56',
            ),
            420 => 
            array (
                'districtid' => '582',
                'name' => 'Phan Rang-Tháp Chàm',
                'type' => 'Thành Phố',
                'location' => '11 36 11N, 108 58 34E',
                'provinceid' => '58',
            ),
            421 => 
            array (
                'districtid' => '584',
                'name' => 'Bác Ái',
                'type' => 'Huyện',
                'location' => '11 54 45N, 108 51 29E',
                'provinceid' => '58',
            ),
            422 => 
            array (
                'districtid' => '585',
                'name' => 'Ninh Sơn',
                'type' => 'Huyện',
                'location' => '11 42 36N, 108 44 55E',
                'provinceid' => '58',
            ),
            423 => 
            array (
                'districtid' => '586',
                'name' => 'Ninh Hải',
                'type' => 'Huyện',
                'location' => '11 42 46N, 109 05 41E',
                'provinceid' => '58',
            ),
            424 => 
            array (
                'districtid' => '587',
                'name' => 'Ninh Phước',
                'type' => 'Huyện',
                'location' => '11 28 56N, 108 50 34E',
                'provinceid' => '58',
            ),
            425 => 
            array (
                'districtid' => '588',
                'name' => 'Thuận Bắc',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '58',
            ),
            426 => 
            array (
                'districtid' => '589',
                'name' => 'Thuận Nam',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '58',
            ),
            427 => 
            array (
                'districtid' => '593',
                'name' => 'Phan Thiết',
                'type' => 'Thành Phố',
                'location' => '10 54 16N, 108 03 44E',
                'provinceid' => '60',
            ),
            428 => 
            array (
                'districtid' => '594',
                'name' => 'La Gi',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '60',
            ),
            429 => 
            array (
                'districtid' => '595',
                'name' => 'Tuy Phong',
                'type' => 'Huyện',
                'location' => '11 20 26N, 108 41 15E',
                'provinceid' => '60',
            ),
            430 => 
            array (
                'districtid' => '596',
                'name' => 'Bắc Bình',
                'type' => 'Huyện',
                'location' => '11 15 52N, 108 21 33E',
                'provinceid' => '60',
            ),
            431 => 
            array (
                'districtid' => '597',
                'name' => 'Hàm Thuận Bắc',
                'type' => 'Huyện',
                'location' => '11 09 18N, 108 03 07E',
                'provinceid' => '60',
            ),
            432 => 
            array (
                'districtid' => '598',
                'name' => 'Hàm Thuận Nam',
                'type' => 'Huyện',
                'location' => '10 56 20N, 107 54 38E',
                'provinceid' => '60',
            ),
            433 => 
            array (
                'districtid' => '599',
                'name' => 'Tánh Linh',
                'type' => 'Huyện',
                'location' => '11 08 26N, 107 41 22E',
                'provinceid' => '60',
            ),
            434 => 
            array (
                'districtid' => '600',
                'name' => 'Đức Linh',
                'type' => 'Huyện',
                'location' => '11 11 43N, 107 31 34E',
                'provinceid' => '60',
            ),
            435 => 
            array (
                'districtid' => '601',
                'name' => 'Hàm Tân',
                'type' => 'Huyện',
                'location' => '10 44 41N, 107 41 33E',
                'provinceid' => '60',
            ),
            436 => 
            array (
                'districtid' => '602',
                'name' => 'Phú Quí',
                'type' => 'Huyện',
                'location' => '10 33 13N, 108 57 46E',
                'provinceid' => '60',
            ),
            437 => 
            array (
                'districtid' => '608',
                'name' => 'Kon Tum',
                'type' => 'Thành Phố',
                'location' => '14 20 32N, 107 58 04E',
                'provinceid' => '62',
            ),
            438 => 
            array (
                'districtid' => '610',
                'name' => 'Đắk Glei',
                'type' => 'Huyện',
                'location' => '15 08 13N, 107 44 03E',
                'provinceid' => '62',
            ),
            439 => 
            array (
                'districtid' => '611',
                'name' => 'Ngọc Hồi',
                'type' => 'Huyện',
                'location' => '14 44 23N, 107 38 49E',
                'provinceid' => '62',
            ),
            440 => 
            array (
                'districtid' => '612',
                'name' => 'Đắk Tô',
                'type' => 'Huyện',
                'location' => '14 46 49N, 107 55 36E',
                'provinceid' => '62',
            ),
            441 => 
            array (
                'districtid' => '613',
                'name' => 'Kon Plông',
                'type' => 'Huyện',
                'location' => '14 48 13N, 108 20 05E',
                'provinceid' => '62',
            ),
            442 => 
            array (
                'districtid' => '614',
                'name' => 'Kon Rẫy',
                'type' => 'Huyện',
                'location' => '14 32 56N, 108 13 09E',
                'provinceid' => '62',
            ),
            443 => 
            array (
                'districtid' => '615',
                'name' => 'Đắk Hà',
                'type' => 'Huyện',
                'location' => '14 36 50N, 107 59 55E',
                'provinceid' => '62',
            ),
            444 => 
            array (
                'districtid' => '616',
                'name' => 'Sa Thầy',
                'type' => 'Huyện',
                'location' => '14 16 02N, 107 36 30E',
                'provinceid' => '62',
            ),
            445 => 
            array (
                'districtid' => '617',
                'name' => 'Tu Mơ Rông',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '62',
            ),
            446 => 
            array (
                'districtid' => '622',
                'name' => 'Pleiku',
                'type' => 'Thành Phố',
                'location' => '13 57 42N, 107 58 03E',
                'provinceid' => '64',
            ),
            447 => 
            array (
                'districtid' => '623',
                'name' => 'An Khê',
                'type' => 'Thị Xã',
                'location' => '14 01 24N, 108 41 29E',
                'provinceid' => '64',
            ),
            448 => 
            array (
                'districtid' => '624',
                'name' => 'Ayun Pa',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '64',
            ),
            449 => 
            array (
                'districtid' => '625',
                'name' => 'Kbang',
                'type' => 'Huyện',
                'location' => '14 18 08N, 108 29 17E',
                'provinceid' => '64',
            ),
            450 => 
            array (
                'districtid' => '626',
                'name' => 'Đăk Đoa',
                'type' => 'Huyện',
                'location' => '14 07 02N, 108 09 36E',
                'provinceid' => '64',
            ),
            451 => 
            array (
                'districtid' => '627',
                'name' => 'Chư Păh',
                'type' => 'Huyện',
                'location' => '14 13 30N, 107 56 33E',
                'provinceid' => '64',
            ),
            452 => 
            array (
                'districtid' => '628',
                'name' => 'Ia Grai',
                'type' => 'Huyện',
                'location' => '13 59 25N, 107 43 16E',
                'provinceid' => '64',
            ),
            453 => 
            array (
                'districtid' => '629',
                'name' => 'Mang Yang',
                'type' => 'Huyện',
                'location' => '13 57 26N, 108 18 37E',
                'provinceid' => '64',
            ),
            454 => 
            array (
                'districtid' => '630',
                'name' => 'Kông Chro',
                'type' => 'Huyện',
                'location' => '13 45 47N, 108 36 04E',
                'provinceid' => '64',
            ),
            455 => 
            array (
                'districtid' => '631',
                'name' => 'Đức Cơ',
                'type' => 'Huyện',
                'location' => '13 46 16N, 107 38 26E',
                'provinceid' => '64',
            ),
            456 => 
            array (
                'districtid' => '632',
                'name' => 'Chư Prông',
                'type' => 'Huyện',
                'location' => '13 35 39N, 107 47 36E',
                'provinceid' => '64',
            ),
            457 => 
            array (
                'districtid' => '633',
                'name' => 'Chư Sê',
                'type' => 'Huyện',
                'location' => '13 37 04N, 108 06 56E',
                'provinceid' => '64',
            ),
            458 => 
            array (
                'districtid' => '634',
                'name' => 'Đăk Pơ',
                'type' => 'Huyện',
                'location' => '13 55 47N, 108 36 16E',
                'provinceid' => '64',
            ),
            459 => 
            array (
                'districtid' => '635',
                'name' => 'Ia Pa',
                'type' => 'Huyện',
                'location' => '13 31 37N, 108 30 34E',
                'provinceid' => '64',
            ),
            460 => 
            array (
                'districtid' => '637',
                'name' => 'Krông Pa',
                'type' => 'Huyện',
                'location' => '13 14 13N, 108 39 12E',
                'provinceid' => '64',
            ),
            461 => 
            array (
                'districtid' => '638',
                'name' => 'Phú Thiện',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '64',
            ),
            462 => 
            array (
                'districtid' => '639',
                'name' => 'Chư Pưh',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '64',
            ),
            463 => 
            array (
                'districtid' => '643',
                'name' => 'Buôn Ma Thuột',
                'type' => 'Thành Phố',
                'location' => '12 39 43N, 108 10 40E',
                'provinceid' => '66',
            ),
            464 => 
            array (
                'districtid' => '644',
                'name' => 'Buôn Hồ',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '66',
            ),
            465 => 
            array (
                'districtid' => '645',
                'name' => 'Ea H\'leo',
                'type' => 'Huyện',
                'location' => '13 13 52N, 108 12 30E',
                'provinceid' => '66',
            ),
            466 => 
            array (
                'districtid' => '646',
                'name' => 'Ea Súp',
                'type' => 'Huyện',
                'location' => '13 10 59N, 107 46 49E',
                'provinceid' => '66',
            ),
            467 => 
            array (
                'districtid' => '647',
                'name' => 'Buôn Đôn',
                'type' => 'Huyện',
                'location' => '12 52 45N, 107 45 20E',
                'provinceid' => '66',
            ),
            468 => 
            array (
                'districtid' => '648',
                'name' => 'Cư M\'gar',
                'type' => 'Huyện',
                'location' => '12 53 47N, 108 04 16E',
                'provinceid' => '66',
            ),
            469 => 
            array (
                'districtid' => '649',
                'name' => 'Krông Búk',
                'type' => 'Huyện',
                'location' => '12 56 27N, 108 13 54E',
                'provinceid' => '66',
            ),
            470 => 
            array (
                'districtid' => '650',
                'name' => 'Krông Năng',
                'type' => 'Huyện',
                'location' => '12 59 41N, 108 23 42E',
                'provinceid' => '66',
            ),
            471 => 
            array (
                'districtid' => '651',
                'name' => 'Ea Kar',
                'type' => 'Huyện',
                'location' => '12 48 17N, 108 32 42E',
                'provinceid' => '66',
            ),
            472 => 
            array (
                'districtid' => '652',
                'name' => 'M\'đrắk',
                'type' => 'Huyện',
                'location' => '12 42 14N, 108 47 09E',
                'provinceid' => '66',
            ),
            473 => 
            array (
                'districtid' => '653',
                'name' => 'Krông Bông',
                'type' => 'Huyện',
                'location' => '12 27 08N, 108 27 01E',
                'provinceid' => '66',
            ),
            474 => 
            array (
                'districtid' => '654',
                'name' => 'Krông Pắc',
                'type' => 'Huyện',
                'location' => '12 41 20N, 108 18 42E',
                'provinceid' => '66',
            ),
            475 => 
            array (
                'districtid' => '655',
                'name' => 'Krông A Na',
                'type' => 'Huyện',
                'location' => '12 31 51N, 108 05 03E',
                'provinceid' => '66',
            ),
            476 => 
            array (
                'districtid' => '656',
                'name' => 'Lắk',
                'type' => 'Huyện',
                'location' => '12 19 20N, 108 12 17E',
                'provinceid' => '66',
            ),
            477 => 
            array (
                'districtid' => '657',
                'name' => 'Cư Kuin',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '66',
            ),
            478 => 
            array (
                'districtid' => '660',
                'name' => 'Gia Nghĩa',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '67',
            ),
            479 => 
            array (
                'districtid' => '661',
                'name' => 'Đắk Glong',
                'type' => 'Huyện',
                'location' => '12 01 53N, 107 50 37E',
                'provinceid' => '67',
            ),
            480 => 
            array (
                'districtid' => '662',
                'name' => 'Cư Jút',
                'type' => 'Huyện',
                'location' => '12 40 56N, 107 44 44E',
                'provinceid' => '67',
            ),
            481 => 
            array (
                'districtid' => '663',
                'name' => 'Đắk Mil',
                'type' => 'Huyện',
                'location' => '12 31 08N, 107 42 24E',
                'provinceid' => '67',
            ),
            482 => 
            array (
                'districtid' => '664',
                'name' => 'Krông Nô',
                'type' => 'Huyện',
                'location' => '12 22 16N, 107 53 49E',
                'provinceid' => '67',
            ),
            483 => 
            array (
                'districtid' => '665',
                'name' => 'Đắk Song',
                'type' => 'Huyện',
                'location' => '12 14 04N, 107 36 30E',
                'provinceid' => '67',
            ),
            484 => 
            array (
                'districtid' => '666',
                'name' => 'Đắk R\'lấp',
                'type' => 'Huyện',
                'location' => '12 02 30N, 107 25 59E',
                'provinceid' => '67',
            ),
            485 => 
            array (
                'districtid' => '667',
                'name' => 'Tuy Đức',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '67',
            ),
            486 => 
            array (
                'districtid' => '672',
                'name' => 'Đà Lạt',
                'type' => 'Thành Phố',
                'location' => '11 54 33N, 108 27 08E',
                'provinceid' => '68',
            ),
            487 => 
            array (
                'districtid' => '673',
                'name' => 'Bảo Lộc',
                'type' => 'Thị Xã',
                'location' => '11 32 48N, 107 47 37E',
                'provinceid' => '68',
            ),
            488 => 
            array (
                'districtid' => '674',
                'name' => 'Đam Rông',
                'type' => 'Huyện',
                'location' => '12 02 35N, 108 10 26E',
                'provinceid' => '68',
            ),
            489 => 
            array (
                'districtid' => '675',
                'name' => 'Lạc Dương',
                'type' => 'Huyện',
                'location' => '12 08 30N, 108 27 48E',
                'provinceid' => '68',
            ),
            490 => 
            array (
                'districtid' => '676',
                'name' => 'Lâm Hà',
                'type' => 'Huyện',
                'location' => '11 55 26N, 108 11 31E',
                'provinceid' => '68',
            ),
            491 => 
            array (
                'districtid' => '677',
                'name' => 'Đơn Dương',
                'type' => 'Huyện',
                'location' => '11 48 26N, 108 32 48E',
                'provinceid' => '68',
            ),
            492 => 
            array (
                'districtid' => '678',
                'name' => 'Đức Trọng',
                'type' => 'Huyện',
                'location' => '11 41 50N, 108 18 58E',
                'provinceid' => '68',
            ),
            493 => 
            array (
                'districtid' => '679',
                'name' => 'Di Linh',
                'type' => 'Huyện',
                'location' => '11 31 10N, 108 05 23E',
                'provinceid' => '68',
            ),
            494 => 
            array (
                'districtid' => '680',
                'name' => 'Bảo Lâm',
                'type' => 'Huyện',
                'location' => '11 38 31N, 107 43 25E',
                'provinceid' => '68',
            ),
            495 => 
            array (
                'districtid' => '681',
                'name' => 'Đạ Huoai',
                'type' => 'Huyện',
                'location' => '11 27 11N, 107 38 08E',
                'provinceid' => '68',
            ),
            496 => 
            array (
                'districtid' => '682',
                'name' => 'Đạ Tẻh',
                'type' => 'Huyện',
                'location' => '11 33 46N, 107 32 00E',
                'provinceid' => '68',
            ),
            497 => 
            array (
                'districtid' => '683',
                'name' => 'Cát Tiên',
                'type' => 'Huyện',
                'location' => '11 39 38N, 107 23 27E',
                'provinceid' => '68',
            ),
            498 => 
            array (
                'districtid' => '688',
                'name' => 'Phước Long',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '70',
            ),
            499 => 
            array (
                'districtid' => '689',
                'name' => 'Đồng Xoài',
                'type' => 'Thị Xã',
                'location' => '11 31 01N, 106 50 21E',
                'provinceid' => '70',
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'districtid' => '690',
                'name' => 'Bình Long',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '70',
            ),
            1 => 
            array (
                'districtid' => '691',
                'name' => 'Bù Gia Mập',
                'type' => 'Huyện',
                'location' => '11 56 57N, 106 59 21E',
                'provinceid' => '70',
            ),
            2 => 
            array (
                'districtid' => '692',
                'name' => 'Lộc Ninh',
                'type' => 'Huyện',
                'location' => '11 49 28N, 106 35 11E',
                'provinceid' => '70',
            ),
            3 => 
            array (
                'districtid' => '693',
                'name' => 'Bù Đốp',
                'type' => 'Huyện',
                'location' => '11 59 08N, 106 49 54E',
                'provinceid' => '70',
            ),
            4 => 
            array (
                'districtid' => '694',
                'name' => 'Hớn Quản',
                'type' => 'Huyện',
                'location' => '11 37 37N, 106 36 02E',
                'provinceid' => '70',
            ),
            5 => 
            array (
                'districtid' => '695',
                'name' => 'Đồng Phù',
                'type' => 'Huyện',
                'location' => '11 28 45N, 106 57 07E',
                'provinceid' => '70',
            ),
            6 => 
            array (
                'districtid' => '696',
                'name' => 'Bù Đăng',
                'type' => 'Huyện',
                'location' => '11 46 09N, 107 14 14E',
                'provinceid' => '70',
            ),
            7 => 
            array (
                'districtid' => '697',
                'name' => 'Chơn Thành',
                'type' => 'Huyện',
                'location' => '11 28 45N, 106 39 26E',
                'provinceid' => '70',
            ),
            8 => 
            array (
                'districtid' => '703',
                'name' => 'Tây Ninh',
                'type' => 'Thị Xã',
                'location' => '11 21 59N, 106 07 47E',
                'provinceid' => '72',
            ),
            9 => 
            array (
                'districtid' => '705',
                'name' => 'Tân Biên',
                'type' => 'Huyện',
                'location' => '11 35 14N, 105 57 53E',
                'provinceid' => '72',
            ),
            10 => 
            array (
                'districtid' => '706',
                'name' => 'Tân Châu',
                'type' => 'Huyện',
                'location' => '11 34 49N, 106 17 48E',
                'provinceid' => '72',
            ),
            11 => 
            array (
                'districtid' => '707',
                'name' => 'Dương Minh Châu',
                'type' => 'Huyện',
                'location' => '11 22 04N, 106 16 58E',
                'provinceid' => '72',
            ),
            12 => 
            array (
                'districtid' => '708',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '11 19 02N, 106 00 15E',
                'provinceid' => '72',
            ),
            13 => 
            array (
                'districtid' => '709',
                'name' => 'Hòa Thành',
                'type' => 'Huyện',
                'location' => '11 15 31N, 106 08 44E',
                'provinceid' => '72',
            ),
            14 => 
            array (
                'districtid' => '710',
                'name' => 'Gò Dầu',
                'type' => 'Huyện',
                'location' => '11 09 39N, 106 14 42E',
                'provinceid' => '72',
            ),
            15 => 
            array (
                'districtid' => '711',
                'name' => 'Bến Cầu',
                'type' => 'Huyện',
                'location' => '11 07 50N, 106 08 25E',
                'provinceid' => '72',
            ),
            16 => 
            array (
                'districtid' => '712',
                'name' => 'Trảng Bàng',
                'type' => 'Huyện',
                'location' => '11 06 18N, 106 23 12E',
                'provinceid' => '72',
            ),
            17 => 
            array (
                'districtid' => '718',
                'name' => 'Thủ Dầu Một',
                'type' => 'Thị Xã',
                'location' => '11 00 01N, 106 38 56E',
                'provinceid' => '74',
            ),
            18 => 
            array (
                'districtid' => '720',
                'name' => 'Dầu Tiếng',
                'type' => 'Huyện',
                'location' => '11 19 07N, 106 26 59E',
                'provinceid' => '74',
            ),
            19 => 
            array (
                'districtid' => '721',
                'name' => 'Bến Cát',
                'type' => 'Huyện',
                'location' => '11 12 42N, 106 36 28E',
                'provinceid' => '74',
            ),
            20 => 
            array (
                'districtid' => '722',
                'name' => 'Phú Giáo',
                'type' => 'Huyện',
                'location' => '11 20 21N, 106 47 48E',
                'provinceid' => '74',
            ),
            21 => 
            array (
                'districtid' => '723',
                'name' => 'Tân Uyên',
                'type' => 'Huyện',
                'location' => '11 06 31N, 106 49 02E',
                'provinceid' => '74',
            ),
            22 => 
            array (
                'districtid' => '724',
                'name' => 'Dĩ An',
                'type' => 'Huyện',
                'location' => '10 55 03N, 106 47 09E',
                'provinceid' => '74',
            ),
            23 => 
            array (
                'districtid' => '725',
                'name' => 'Thuận An',
                'type' => 'Huyện',
                'location' => '10 55 58N, 106 41 59E',
                'provinceid' => '74',
            ),
            24 => 
            array (
                'districtid' => '731',
                'name' => 'Biên Hòa',
                'type' => 'Thành Phố',
                'location' => '10 56 31N, 106 50 50E',
                'provinceid' => '75',
            ),
            25 => 
            array (
                'districtid' => '732',
                'name' => 'Long Khánh',
                'type' => 'Thị Xã',
                'location' => '10 56 24N, 107 14 29E',
                'provinceid' => '75',
            ),
            26 => 
            array (
                'districtid' => '734',
                'name' => 'Tân Phú',
                'type' => 'Huyện',
                'location' => '11 22 51N, 107 21 35E',
                'provinceid' => '75',
            ),
            27 => 
            array (
                'districtid' => '735',
                'name' => 'Vĩnh Cửu',
                'type' => 'Huyện',
                'location' => '11 14 31N, 107 00 06E',
                'provinceid' => '75',
            ),
            28 => 
            array (
                'districtid' => '736',
                'name' => 'Định Quán',
                'type' => 'Huyện',
                'location' => '11 12 41N, 107 17 03E',
                'provinceid' => '75',
            ),
            29 => 
            array (
                'districtid' => '737',
                'name' => 'Trảng Bom',
                'type' => 'Huyện',
                'location' => '10 58 39N, 107 00 52E',
                'provinceid' => '75',
            ),
            30 => 
            array (
                'districtid' => '738',
                'name' => 'Thống Nhất',
                'type' => 'Huyện',
                'location' => '10 58 29N, 107 09 26E',
                'provinceid' => '75',
            ),
            31 => 
            array (
                'districtid' => '739',
                'name' => 'Cẩm Mỹ',
                'type' => 'Huyện',
                'location' => '10 47 05N, 107 14 36E',
                'provinceid' => '75',
            ),
            32 => 
            array (
                'districtid' => '740',
                'name' => 'Long Thành',
                'type' => 'Huyện',
                'location' => '10 47 38N, 106 59 42E',
                'provinceid' => '75',
            ),
            33 => 
            array (
                'districtid' => '741',
                'name' => 'Xuân Lộc',
                'type' => 'Huyện',
                'location' => '10 55 39N, 107 24 21E',
                'provinceid' => '75',
            ),
            34 => 
            array (
                'districtid' => '742',
                'name' => 'Nhơn Trạch',
                'type' => 'Huyện',
                'location' => '10 39 18N, 106 53 18E',
                'provinceid' => '75',
            ),
            35 => 
            array (
                'districtid' => '747',
                'name' => 'Vũng Tầu',
                'type' => 'Thành Phố',
                'location' => '10 24 08N, 107 07 05E',
                'provinceid' => '77',
            ),
            36 => 
            array (
                'districtid' => '748',
                'name' => 'Bà Rịa',
                'type' => 'Thị Xã',
                'location' => '10 30 33N, 107 10 47E',
                'provinceid' => '77',
            ),
            37 => 
            array (
                'districtid' => '750',
                'name' => 'Châu Đức',
                'type' => 'Huyện',
                'location' => '10 39 23N, 107 15 08E',
                'provinceid' => '77',
            ),
            38 => 
            array (
                'districtid' => '751',
                'name' => 'Xuyên Mộc',
                'type' => 'Huyện',
                'location' => '10 37 46N, 107 29 39E',
                'provinceid' => '77',
            ),
            39 => 
            array (
                'districtid' => '752',
                'name' => 'Long Điền',
                'type' => 'Huyện',
                'location' => '10 26 47N, 107 12 53E',
                'provinceid' => '77',
            ),
            40 => 
            array (
                'districtid' => '753',
                'name' => 'Đất Đỏ',
                'type' => 'Huyện',
                'location' => '10 28 40N, 107 18 27E',
                'provinceid' => '77',
            ),
            41 => 
            array (
                'districtid' => '754',
                'name' => 'Tân Thành',
                'type' => 'Huyện',
                'location' => '10 34 50N, 107 05 06E',
                'provinceid' => '77',
            ),
            42 => 
            array (
                'districtid' => '755',
                'name' => 'Côn Đảo',
                'type' => 'Huyện',
                'location' => '8 42 25N, 106 36 05E',
                'provinceid' => '77',
            ),
            43 => 
            array (
                'districtid' => '760',
                'name' => '1',
                'type' => 'Quận',
                'location' => '10 46 34N, 106 41 45E',
                'provinceid' => '79',
            ),
            44 => 
            array (
                'districtid' => '761',
                'name' => '12',
                'type' => 'Quận',
                'location' => '10 51 43N, 106 39 32E',
                'provinceid' => '79',
            ),
            45 => 
            array (
                'districtid' => '762',
                'name' => 'Thủ Đức',
                'type' => 'Quận',
                'location' => '10 51 20N, 106 45 05E',
                'provinceid' => '79',
            ),
            46 => 
            array (
                'districtid' => '763',
                'name' => '9',
                'type' => 'Quận',
                'location' => '10 49 49N, 106 49 03E',
                'provinceid' => '79',
            ),
            47 => 
            array (
                'districtid' => '764',
                'name' => 'Gò Vấp',
                'type' => 'Quận',
                'location' => '10 50 12N, 106 39 52E',
                'provinceid' => '79',
            ),
            48 => 
            array (
                'districtid' => '765',
                'name' => 'Bình Thạnh',
                'type' => 'Quận',
                'location' => '10 48 46N, 106 42 57E',
                'provinceid' => '79',
            ),
            49 => 
            array (
                'districtid' => '766',
                'name' => 'Tân Bình',
                'type' => 'Quận',
                'location' => '10 48 13N, 106 39 03E',
                'provinceid' => '79',
            ),
            50 => 
            array (
                'districtid' => '767',
                'name' => 'Tân Phú',
                'type' => 'Quận',
                'location' => '10 47 32N, 106 37 31E',
                'provinceid' => '79',
            ),
            51 => 
            array (
                'districtid' => '768',
                'name' => 'Phú Nhuận',
                'type' => 'Quận',
                'location' => '10 48 06N, 106 40 39E',
                'provinceid' => '79',
            ),
            52 => 
            array (
                'districtid' => '769',
                'name' => '2',
                'type' => 'Quận',
                'location' => '10 46 51N, 106 45 25E',
                'provinceid' => '79',
            ),
            53 => 
            array (
                'districtid' => '770',
                'name' => '3',
                'type' => 'Quận',
                'location' => '10 46 48N, 106 40 46E',
                'provinceid' => '79',
            ),
            54 => 
            array (
                'districtid' => '771',
                'name' => '10',
                'type' => 'Quận',
                'location' => '10 46 25N, 106 40 02E',
                'provinceid' => '79',
            ),
            55 => 
            array (
                'districtid' => '772',
                'name' => '11',
                'type' => 'Quận',
                'location' => '10 46 01N, 106 38 44E',
                'provinceid' => '79',
            ),
            56 => 
            array (
                'districtid' => '773',
                'name' => '4',
                'type' => 'Quận',
                'location' => '10 45 42N, 106 42 09E',
                'provinceid' => '79',
            ),
            57 => 
            array (
                'districtid' => '774',
                'name' => '5',
                'type' => 'Quận',
                'location' => '10 45 24N, 106 40 00E',
                'provinceid' => '79',
            ),
            58 => 
            array (
                'districtid' => '775',
                'name' => '6',
                'type' => 'Quận',
                'location' => '10 44 46N, 106 38 10E',
                'provinceid' => '79',
            ),
            59 => 
            array (
                'districtid' => '776',
                'name' => '8',
                'type' => 'Quận',
                'location' => '10 43 24N, 106 37 40E',
                'provinceid' => '79',
            ),
            60 => 
            array (
                'districtid' => '777',
                'name' => 'Bình Tân',
                'type' => 'Quận',
                'location' => '10 46 16N, 106 35 26E',
                'provinceid' => '79',
            ),
            61 => 
            array (
                'districtid' => '778',
                'name' => '7',
                'type' => 'Quận',
                'location' => '10 44 19N, 106 43 35E',
                'provinceid' => '79',
            ),
            62 => 
            array (
                'districtid' => '783',
                'name' => 'Củ Chi',
                'type' => 'Huyện',
                'location' => '11 02 17N, 106 30 20E',
                'provinceid' => '79',
            ),
            63 => 
            array (
                'districtid' => '784',
                'name' => 'Hóc Môn',
                'type' => 'Huyện',
                'location' => '10 52 42N, 106 35 33E',
                'provinceid' => '79',
            ),
            64 => 
            array (
                'districtid' => '785',
                'name' => 'Bình Chánh',
                'type' => 'Huyện',
                'location' => '10 45 01N, 106 30 45E',
                'provinceid' => '79',
            ),
            65 => 
            array (
                'districtid' => '786',
                'name' => 'Nhà Bè',
                'type' => 'Huyện',
                'location' => '10 39 06N, 106 43 35E',
                'provinceid' => '79',
            ),
            66 => 
            array (
                'districtid' => '787',
                'name' => 'Cần Giờ',
                'type' => 'Huyện',
                'location' => '10 30 43N, 106 52 50E',
                'provinceid' => '79',
            ),
            67 => 
            array (
                'districtid' => '794',
                'name' => 'Tân An',
                'type' => 'Thành Phố',
                'location' => '10 31 36N, 106 24 06E',
                'provinceid' => '80',
            ),
            68 => 
            array (
                'districtid' => '796',
                'name' => 'Tân Hưng',
                'type' => 'Huyện',
                'location' => '10 49 05N, 105 39 26E',
                'provinceid' => '80',
            ),
            69 => 
            array (
                'districtid' => '797',
                'name' => 'Vĩnh Hưng',
                'type' => 'Huyện',
                'location' => '10 52 54N, 105 45 58E',
                'provinceid' => '80',
            ),
            70 => 
            array (
                'districtid' => '798',
                'name' => 'Mộc Hóa',
                'type' => 'Huyện',
                'location' => '10 47 09N, 105 57 56E',
                'provinceid' => '80',
            ),
            71 => 
            array (
                'districtid' => '799',
                'name' => 'Tân Thạnh',
                'type' => 'Huyện',
                'location' => '10 37 44N, 105 57 07E',
                'provinceid' => '80',
            ),
            72 => 
            array (
                'districtid' => '800',
                'name' => 'Thạnh Hóa',
                'type' => 'Huyện',
                'location' => '10 41 37N, 106 11 08E',
                'provinceid' => '80',
            ),
            73 => 
            array (
                'districtid' => '801',
                'name' => 'Đức Huệ',
                'type' => 'Huyện',
                'location' => '10 51 57N, 106 15 48E',
                'provinceid' => '80',
            ),
            74 => 
            array (
                'districtid' => '802',
                'name' => 'Đức Hòa',
                'type' => 'Huyện',
                'location' => '10 53 04N, 106 23 58E',
                'provinceid' => '80',
            ),
            75 => 
            array (
                'districtid' => '803',
                'name' => 'Bến Lức',
                'type' => 'Huyện',
                'location' => '10 41 40N, 106 26 28E',
                'provinceid' => '80',
            ),
            76 => 
            array (
                'districtid' => '804',
                'name' => 'Thủ Thừa',
                'type' => 'Huyện',
                'location' => '10 39 41N, 106 20 12E',
                'provinceid' => '80',
            ),
            77 => 
            array (
                'districtid' => '805',
                'name' => 'Tân Trụ',
                'type' => 'Huyện',
                'location' => '10 31 47N, 106 30 06E',
                'provinceid' => '80',
            ),
            78 => 
            array (
                'districtid' => '806',
                'name' => 'Cần Đước',
                'type' => 'Huyện',
                'location' => '10 32 21N, 106 36 33E',
                'provinceid' => '80',
            ),
            79 => 
            array (
                'districtid' => '807',
                'name' => 'Cần Giuộc',
                'type' => 'Huyện',
                'location' => '10 34 43N, 106 38 35E',
                'provinceid' => '80',
            ),
            80 => 
            array (
                'districtid' => '808',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '10 27 52N, 106 30 00E',
                'provinceid' => '80',
            ),
            81 => 
            array (
                'districtid' => '815',
                'name' => 'Mỹ Tho',
                'type' => 'Thành Phố',
                'location' => '10 22 14N, 106 21 52E',
                'provinceid' => '82',
            ),
            82 => 
            array (
                'districtid' => '816',
                'name' => 'Gò Công',
                'type' => 'Thị Xã',
                'location' => '10 21 55N, 106 40 24E',
                'provinceid' => '82',
            ),
            83 => 
            array (
                'districtid' => '818',
                'name' => 'Tân Phước',
                'type' => 'Huyện',
                'location' => '10 30 36N, 106 13 02E',
                'provinceid' => '82',
            ),
            84 => 
            array (
                'districtid' => '819',
                'name' => 'Cái Bè',
                'type' => 'Huyện',
                'location' => '10 24 21N, 105 56 01E',
                'provinceid' => '82',
            ),
            85 => 
            array (
                'districtid' => '820',
                'name' => 'Cai Lậy',
                'type' => 'Huyện',
                'location' => '10 24 20N, 106 06 05E',
                'provinceid' => '82',
            ),
            86 => 
            array (
                'districtid' => '821',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '20 25 21N, 106 16 57E',
                'provinceid' => '82',
            ),
            87 => 
            array (
                'districtid' => '822',
                'name' => 'Chợ Gạo',
                'type' => 'Huyện',
                'location' => '10 23 45N, 106 26 53E',
                'provinceid' => '82',
            ),
            88 => 
            array (
                'districtid' => '823',
                'name' => 'Gò Công Tây',
                'type' => 'Huyện',
                'location' => '10 19 55N, 106 35 02E',
                'provinceid' => '82',
            ),
            89 => 
            array (
                'districtid' => '824',
                'name' => 'Gò Công Đông',
                'type' => 'Huyện',
                'location' => '10 20 42N, 106 42 54E',
                'provinceid' => '82',
            ),
            90 => 
            array (
                'districtid' => '825',
                'name' => 'Tân Phú Đông',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '82',
            ),
            91 => 
            array (
                'districtid' => '829',
                'name' => 'Bến Tre',
                'type' => 'Thành Phố',
                'location' => '10 14 17N, 106 22 26E',
                'provinceid' => '83',
            ),
            92 => 
            array (
                'districtid' => '831',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '10 17 24N, 106 17 45E',
                'provinceid' => '83',
            ),
            93 => 
            array (
                'districtid' => '832',
                'name' => 'Chợ Lách',
                'type' => 'Huyện',
                'location' => '10 13 26N, 106 09 08E',
                'provinceid' => '83',
            ),
            94 => 
            array (
                'districtid' => '833',
                'name' => 'Mỏ Cày Nam',
                'type' => 'Huyện',
                'location' => '10 06 56N, 106 19 40E',
                'provinceid' => '83',
            ),
            95 => 
            array (
                'districtid' => '834',
                'name' => 'Giồng Trôm',
                'type' => 'Huyện',
                'location' => '10 08 46N, 106 28 12E',
                'provinceid' => '83',
            ),
            96 => 
            array (
                'districtid' => '835',
                'name' => 'Bình Đại',
                'type' => 'Huyện',
                'location' => '10 09 56N, 106 37 46E',
                'provinceid' => '83',
            ),
            97 => 
            array (
                'districtid' => '836',
                'name' => 'Ba Tri',
                'type' => 'Huyện',
                'location' => '10 04 08N, 106 35 10E',
                'provinceid' => '83',
            ),
            98 => 
            array (
                'districtid' => '837',
                'name' => 'Thạnh Phú',
                'type' => 'Huyện',
                'location' => '9 55 53N, 106 32 45E',
                'provinceid' => '83',
            ),
            99 => 
            array (
                'districtid' => '838',
                'name' => 'Mỏ Cày Bắc',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '83',
            ),
            100 => 
            array (
                'districtid' => '842',
                'name' => 'Trà Vinh',
                'type' => 'Thị Xã',
                'location' => '9 57 09N, 106 20 39E',
                'provinceid' => '84',
            ),
            101 => 
            array (
                'districtid' => '844',
                'name' => 'Càng Long',
                'type' => 'Huyện',
                'location' => '9 58 18N, 106 12 52E',
                'provinceid' => '84',
            ),
            102 => 
            array (
                'districtid' => '845',
                'name' => 'Cầu Kè',
                'type' => 'Huyện',
                'location' => '9 51 23N, 106 03 33E',
                'provinceid' => '84',
            ),
            103 => 
            array (
                'districtid' => '846',
                'name' => 'Tiểu Cần',
                'type' => 'Huyện',
                'location' => '9 48 37N, 106 12 06E',
                'provinceid' => '84',
            ),
            104 => 
            array (
                'districtid' => '847',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '9 52 57N, 106 24 12E',
                'provinceid' => '84',
            ),
            105 => 
            array (
                'districtid' => '848',
                'name' => 'Cầu Ngang',
                'type' => 'Huyện',
                'location' => '9 47 14N, 106 29 19E',
                'provinceid' => '84',
            ),
            106 => 
            array (
                'districtid' => '849',
                'name' => 'Trà Cú',
                'type' => 'Huyện',
                'location' => '9 42 06N, 106 16 24E',
                'provinceid' => '84',
            ),
            107 => 
            array (
                'districtid' => '850',
                'name' => 'Duyên Hải',
                'type' => 'Huyện',
                'location' => '9 39 58N, 106 26 23E',
                'provinceid' => '84',
            ),
            108 => 
            array (
                'districtid' => '855',
                'name' => 'Vĩnh Long',
                'type' => 'Thành Phố',
                'location' => '10 15 09N, 105 56 08E',
                'provinceid' => '86',
            ),
            109 => 
            array (
                'districtid' => '857',
                'name' => 'Long Hồ',
                'type' => 'Huyện',
                'location' => '10 13 58N, 105 55 47E',
                'provinceid' => '86',
            ),
            110 => 
            array (
                'districtid' => '858',
                'name' => 'Mang Thít',
                'type' => 'Huyện',
                'location' => '10 10 58N, 106 05 13E',
                'provinceid' => '86',
            ),
            111 => 
            array (
                'districtid' => '859',
                'name' => 'Vũng Liêm',
                'type' => 'Huyện',
                'location' => '10 03 32N, 106 10 35E',
                'provinceid' => '86',
            ),
            112 => 
            array (
                'districtid' => '860',
                'name' => 'Tam Bình',
                'type' => 'Huyện',
                'location' => '10 03 58N, 105 58 03E',
                'provinceid' => '86',
            ),
            113 => 
            array (
                'districtid' => '861',
                'name' => 'Bình Minh',
                'type' => 'Huyện',
                'location' => '10 05 45N, 105 47 21E',
                'provinceid' => '86',
            ),
            114 => 
            array (
                'districtid' => '862',
                'name' => 'Trà Ôn',
                'type' => 'Huyện',
                'location' => '9 59 20N, 105 57 56E',
                'provinceid' => '86',
            ),
            115 => 
            array (
                'districtid' => '863',
                'name' => 'Bình Tân',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '86',
            ),
            116 => 
            array (
                'districtid' => '866',
                'name' => 'Cao Lãnh',
                'type' => 'Thành Phố',
                'location' => '10 27 38N, 105 37 21E',
                'provinceid' => '87',
            ),
            117 => 
            array (
                'districtid' => '867',
                'name' => 'Sa Đéc',
                'type' => 'Thị Xã',
                'location' => '10 19 22N, 105 44 31E',
                'provinceid' => '87',
            ),
            118 => 
            array (
                'districtid' => '868',
                'name' => 'Hồng Ngự',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '87',
            ),
            119 => 
            array (
                'districtid' => '869',
                'name' => 'Tân Hồng',
                'type' => 'Huyện',
                'location' => '10 52 48N, 105 29 21E',
                'provinceid' => '87',
            ),
            120 => 
            array (
                'districtid' => '870',
                'name' => 'Hồng Ngự',
                'type' => 'Huyện',
                'location' => '10 48 13N, 105 19 00E',
                'provinceid' => '87',
            ),
            121 => 
            array (
                'districtid' => '871',
                'name' => 'Tam Nông',
                'type' => 'Huyện',
                'location' => '10 44 06N, 105 30 58E',
                'provinceid' => '87',
            ),
            122 => 
            array (
                'districtid' => '872',
                'name' => 'Tháp Mười',
                'type' => 'Huyện',
                'location' => '10 33 36N, 105 47 13E',
                'provinceid' => '87',
            ),
            123 => 
            array (
                'districtid' => '873',
                'name' => 'Cao Lãnh',
                'type' => 'Huyện',
                'location' => '10 29 03N, 105 41 40E',
                'provinceid' => '87',
            ),
            124 => 
            array (
                'districtid' => '874',
                'name' => 'Thanh Bình',
                'type' => 'Huyện',
                'location' => '10 36 38N, 105 28 51E',
                'provinceid' => '87',
            ),
            125 => 
            array (
                'districtid' => '875',
                'name' => 'Lấp Vò',
                'type' => 'Huyện',
                'location' => '10 21 27N, 105 36 06E',
                'provinceid' => '87',
            ),
            126 => 
            array (
                'districtid' => '876',
                'name' => 'Lai Vung',
                'type' => 'Huyện',
                'location' => '10 14 43N, 105 38 40E',
                'provinceid' => '87',
            ),
            127 => 
            array (
                'districtid' => '877',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '10 13 27N, 105 48 38E',
                'provinceid' => '87',
            ),
            128 => 
            array (
                'districtid' => '883',
                'name' => 'Long Xuyên',
                'type' => 'Thành Phố',
                'location' => '10 22 22N, 105 25 33E',
                'provinceid' => '89',
            ),
            129 => 
            array (
                'districtid' => '884',
                'name' => 'Châu Đốc',
                'type' => 'Thị Xã',
                'location' => '10 41 20N, 105 05 15E',
                'provinceid' => '89',
            ),
            130 => 
            array (
                'districtid' => '886',
                'name' => 'An Phú',
                'type' => 'Huyện',
                'location' => '10 50 12N, 105 05 33E',
                'provinceid' => '89',
            ),
            131 => 
            array (
                'districtid' => '887',
                'name' => 'Tân Châu',
                'type' => 'Thị Xã',
                'location' => '10 49 11N, 105 11 18E',
                'provinceid' => '89',
            ),
            132 => 
            array (
                'districtid' => '888',
                'name' => 'Phú Tân',
                'type' => 'Huyện',
                'location' => '10 40 26N, 105 14 40E',
                'provinceid' => '89',
            ),
            133 => 
            array (
                'districtid' => '889',
                'name' => 'Châu Phú',
                'type' => 'Huyện',
                'location' => '10 34 12N, 105 12 13E',
                'provinceid' => '89',
            ),
            134 => 
            array (
                'districtid' => '890',
                'name' => 'Tịnh Biên',
                'type' => 'Huyện',
                'location' => '10 33 30N, 105 00 17E',
                'provinceid' => '89',
            ),
            135 => 
            array (
                'districtid' => '891',
                'name' => 'Tri Tôn',
                'type' => 'Huyện',
                'location' => '10 24 41N, 104 56 58E',
                'provinceid' => '89',
            ),
            136 => 
            array (
                'districtid' => '892',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '10 25 39N, 105 15 31E',
                'provinceid' => '89',
            ),
            137 => 
            array (
                'districtid' => '893',
                'name' => 'Chợ Mới',
                'type' => 'Huyện',
                'location' => '10 27 23N, 105 26 57E',
                'provinceid' => '89',
            ),
            138 => 
            array (
                'districtid' => '894',
                'name' => 'Thoại Sơn',
                'type' => 'Huyện',
                'location' => '10 16 45N, 105 15 59E',
                'provinceid' => '89',
            ),
            139 => 
            array (
                'districtid' => '899',
                'name' => 'Rạch Giá',
                'type' => 'Thành Phố',
                'location' => '10 01 35N, 105 06 20E',
                'provinceid' => '91',
            ),
            140 => 
            array (
                'districtid' => '900',
                'name' => 'Hà Tiên',
                'type' => 'Thị Xã',
                'location' => '10 22 54N, 104 30 10E',
                'provinceid' => '91',
            ),
            141 => 
            array (
                'districtid' => '902',
                'name' => 'Kiên Lương',
                'type' => 'Huyện',
                'location' => '10 20 21N, 104 39 46E',
                'provinceid' => '91',
            ),
            142 => 
            array (
                'districtid' => '903',
                'name' => 'Hòn Đất',
                'type' => 'Huyện',
                'location' => '10 14 20N, 104 55 57E',
                'provinceid' => '91',
            ),
            143 => 
            array (
                'districtid' => '904',
                'name' => 'Tân Hiệp',
                'type' => 'Huyện',
                'location' => '10 05 18N, 105 14 04E',
                'provinceid' => '91',
            ),
            144 => 
            array (
                'districtid' => '905',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '9 57 37N, 105 10 16E',
                'provinceid' => '91',
            ),
            145 => 
            array (
                'districtid' => '906',
                'name' => 'Giồng Giềng',
                'type' => 'Huyện',
                'location' => '9 56 05N, 105 22 06E',
                'provinceid' => '91',
            ),
            146 => 
            array (
                'districtid' => '907',
                'name' => 'Gò Quao',
                'type' => 'Huyện',
                'location' => '9 43 17N, 105 17 06E',
                'provinceid' => '91',
            ),
            147 => 
            array (
                'districtid' => '908',
                'name' => 'An Biên',
                'type' => 'Huyện',
                'location' => '9 48 37N, 105 03 18E',
                'provinceid' => '91',
            ),
            148 => 
            array (
                'districtid' => '909',
                'name' => 'An Minh',
                'type' => 'Huyện',
                'location' => '9 40 24N, 104 59 05E',
                'provinceid' => '91',
            ),
            149 => 
            array (
                'districtid' => '910',
                'name' => 'Vĩnh Thuận',
                'type' => 'Huyện',
                'location' => '9 33 25N, 105 11 30E',
                'provinceid' => '91',
            ),
            150 => 
            array (
                'districtid' => '911',
                'name' => 'Phú Quốc',
                'type' => 'Huyện',
                'location' => '10 13 44N, 103 57 25E',
                'provinceid' => '91',
            ),
            151 => 
            array (
                'districtid' => '912',
                'name' => 'Kiên Hải',
                'type' => 'Huyện',
                'location' => '9 48 31N, 104 37 48E',
                'provinceid' => '91',
            ),
            152 => 
            array (
                'districtid' => '913',
                'name' => 'U Minh Thượng',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '91',
            ),
            153 => 
            array (
                'districtid' => '914',
                'name' => 'Giang Thành',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '91',
            ),
            154 => 
            array (
                'districtid' => '916',
                'name' => 'Ninh Kiều',
                'type' => 'Quận',
                'location' => '10 01 58N, 105 45 34E',
                'provinceid' => '92',
            ),
            155 => 
            array (
                'districtid' => '917',
                'name' => 'Ô Môn',
                'type' => 'Quận',
                'location' => '10 07 28N, 105 37 51E',
                'provinceid' => '92',
            ),
            156 => 
            array (
                'districtid' => '918',
                'name' => 'Bình Thuỷ',
                'type' => 'Quận',
                'location' => '10 03 42N, 105 43 17E',
                'provinceid' => '92',
            ),
            157 => 
            array (
                'districtid' => '919',
                'name' => 'Cái Răng',
                'type' => 'Quận',
                'location' => '9 59 57N, 105 46 56E',
                'provinceid' => '92',
            ),
            158 => 
            array (
                'districtid' => '923',
                'name' => 'Thốt Nốt',
                'type' => 'Quận',
                'location' => '10 14 23N, 105 32 02E',
                'provinceid' => '92',
            ),
            159 => 
            array (
                'districtid' => '924',
                'name' => 'Vĩnh Thạnh',
                'type' => 'Huyện',
                'location' => '10 11 35N, 105 22 45E',
                'provinceid' => '92',
            ),
            160 => 
            array (
                'districtid' => '925',
                'name' => 'Cờ Đỏ',
                'type' => 'Huyện',
                'location' => '10 02 48N, 105 29 46E',
                'provinceid' => '92',
            ),
            161 => 
            array (
                'districtid' => '926',
                'name' => 'Phong Điền',
                'type' => 'Huyện',
                'location' => '9 59 57N, 105 39 35E',
                'provinceid' => '92',
            ),
            162 => 
            array (
                'districtid' => '927',
                'name' => 'Thới Lai',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '92',
            ),
            163 => 
            array (
                'districtid' => '930',
                'name' => 'Vị Thanh',
                'type' => 'Thị Xã',
                'location' => '9 45 15N, 105 24 50E',
                'provinceid' => '93',
            ),
            164 => 
            array (
                'districtid' => '931',
                'name' => 'Ngã Bảy',
                'type' => 'Thị Xã',
                'location' => '',
                'provinceid' => '93',
            ),
            165 => 
            array (
                'districtid' => '932',
                'name' => 'Châu Thành A',
                'type' => 'Huyện',
                'location' => '9 55 50N, 105 38 31E',
                'provinceid' => '93',
            ),
            166 => 
            array (
                'districtid' => '933',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '9 55 22N, 105 48 37E',
                'provinceid' => '93',
            ),
            167 => 
            array (
                'districtid' => '934',
                'name' => 'Phụng Hiệp',
                'type' => 'Huyện',
                'location' => '9 47 20N, 105 43 29E',
                'provinceid' => '93',
            ),
            168 => 
            array (
                'districtid' => '935',
                'name' => 'Vị Thuỷ',
                'type' => 'Huyện',
                'location' => '9 48 05N, 105 32 13E',
                'provinceid' => '93',
            ),
            169 => 
            array (
                'districtid' => '936',
                'name' => 'Long Mỹ',
                'type' => 'Huyện',
                'location' => '9 40 47N, 105 30 53E',
                'provinceid' => '93',
            ),
            170 => 
            array (
                'districtid' => '941',
                'name' => 'Sóc Trăng',
                'type' => 'Thành Phố',
                'location' => '9 36 39N, 105 59 00E',
                'provinceid' => '94',
            ),
            171 => 
            array (
                'districtid' => '942',
                'name' => 'Châu Thành',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '94',
            ),
            172 => 
            array (
                'districtid' => '943',
                'name' => 'Kế Sách',
                'type' => 'Huyện',
                'location' => '9 49 30N, 105 57 25E',
                'provinceid' => '94',
            ),
            173 => 
            array (
                'districtid' => '944',
                'name' => 'Mỹ Tú',
                'type' => 'Huyện',
                'location' => '9 38 21N, 105 49 52E',
                'provinceid' => '94',
            ),
            174 => 
            array (
                'districtid' => '945',
                'name' => 'Cù Lao Dung',
                'type' => 'Huyện',
                'location' => '9 37 36N, 106 12 13E',
                'provinceid' => '94',
            ),
            175 => 
            array (
                'districtid' => '946',
                'name' => 'Long Phú',
                'type' => 'Huyện',
                'location' => '9 34 38N, 106 06 07E',
                'provinceid' => '94',
            ),
            176 => 
            array (
                'districtid' => '947',
                'name' => 'Mỹ Xuyên',
                'type' => 'Huyện',
                'location' => '9 28 16N, 105 55 51E',
                'provinceid' => '94',
            ),
            177 => 
            array (
                'districtid' => '948',
                'name' => 'Ngã Năm',
                'type' => 'Huyện',
                'location' => '9 31 38N, 105 37 22E',
                'provinceid' => '94',
            ),
            178 => 
            array (
                'districtid' => '949',
                'name' => 'Thạnh Trị',
                'type' => 'Huyện',
                'location' => '9 28 05N, 105 43 02E',
                'provinceid' => '94',
            ),
            179 => 
            array (
                'districtid' => '950',
                'name' => 'Vĩnh Châu',
                'type' => 'Huyện',
                'location' => '9 20 50N, 105 59 58E',
                'provinceid' => '94',
            ),
            180 => 
            array (
                'districtid' => '951',
                'name' => 'Trần Đề',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '94',
            ),
            181 => 
            array (
                'districtid' => '954',
                'name' => 'Bạc Liêu',
                'type' => 'Thị Xã',
                'location' => '9 16 05N, 105 45 08E',
                'provinceid' => '95',
            ),
            182 => 
            array (
                'districtid' => '956',
                'name' => 'Hồng Dân',
                'type' => 'Huyện',
                'location' => '9 30 37N, 105 24 25E',
                'provinceid' => '95',
            ),
            183 => 
            array (
                'districtid' => '957',
                'name' => 'Phước Long',
                'type' => 'Huyện',
                'location' => '9 23 13N, 105 24 41E',
                'provinceid' => '95',
            ),
            184 => 
            array (
                'districtid' => '958',
                'name' => 'Vĩnh Lợi',
                'type' => 'Huyện',
                'location' => '9 16 51N, 105 40 54E',
                'provinceid' => '95',
            ),
            185 => 
            array (
                'districtid' => '959',
                'name' => 'Giá Rai',
                'type' => 'Huyện',
                'location' => '9 15 51N, 105 23 18E',
                'provinceid' => '95',
            ),
            186 => 
            array (
                'districtid' => '960',
                'name' => 'Đông Hải',
                'type' => 'Huyện',
                'location' => '9 08 11N, 105 24 42E',
                'provinceid' => '95',
            ),
            187 => 
            array (
                'districtid' => '961',
                'name' => 'Hoà Bình',
                'type' => 'Huyện',
                'location' => '',
                'provinceid' => '95',
            ),
            188 => 
            array (
                'districtid' => '964',
                'name' => 'Cà Mau',
                'type' => 'Thành Phố',
                'location' => '9 10 33N, 105 11 11E',
                'provinceid' => '96',
            ),
            189 => 
            array (
                'districtid' => '966',
                'name' => 'U Minh',
                'type' => 'Huyện',
                'location' => '9 22 30N, 104 57 00E',
                'provinceid' => '96',
            ),
            190 => 
            array (
                'districtid' => '967',
                'name' => 'Thới Bình',
                'type' => 'Huyện',
                'location' => '9 22 50N, 105 07 35E',
                'provinceid' => '96',
            ),
            191 => 
            array (
                'districtid' => '968',
                'name' => 'Trần Văn Thời',
                'type' => 'Huyện',
                'location' => '9 07 36N, 104 57 27E',
                'provinceid' => '96',
            ),
            192 => 
            array (
                'districtid' => '969',
                'name' => 'Cái Nước',
                'type' => 'Huyện',
                'location' => '9 00 31N, 105 03 23E',
                'provinceid' => '96',
            ),
            193 => 
            array (
                'districtid' => '970',
                'name' => 'Đầm Dơi',
                'type' => 'Huyện',
                'location' => '8 57 48N, 105 13 56E',
                'provinceid' => '96',
            ),
            194 => 
            array (
                'districtid' => '971',
                'name' => 'Năm Căn',
                'type' => 'Huyện',
                'location' => '8 46 59N, 104 58 20E',
                'provinceid' => '96',
            ),
            195 => 
            array (
                'districtid' => '972',
                'name' => 'Phú Tân',
                'type' => 'Huyện',
                'location' => '8 52 47N, 104 53 35E',
                'provinceid' => '96',
            ),
            196 => 
            array (
                'districtid' => '973',
                'name' => 'Ngọc Hiển',
                'type' => 'Huyện',
                'location' => '8 40 47N, 104 57 58E',
                'provinceid' => '96',
            ),
        ));
        
        
    }
}