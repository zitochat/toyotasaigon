<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('province')->delete();
        
        \DB::table('province')->insert(array (
            0 => 
            array (
                'provinceid' => '01',
                'name' => 'Hà Nội',
                'type' => 'Thành Phố',
            ),
            1 => 
            array (
                'provinceid' => '02',
                'name' => 'Hà Giang',
                'type' => 'Tỉnh',
            ),
            2 => 
            array (
                'provinceid' => '04',
                'name' => 'Cao Bằng',
                'type' => 'Tỉnh',
            ),
            3 => 
            array (
                'provinceid' => '06',
                'name' => 'Bắc Kạn',
                'type' => 'Tỉnh',
            ),
            4 => 
            array (
                'provinceid' => '08',
                'name' => 'Tuyên Quang',
                'type' => 'Tỉnh',
            ),
            5 => 
            array (
                'provinceid' => '10',
                'name' => 'Lào Cai',
                'type' => 'Tỉnh',
            ),
            6 => 
            array (
                'provinceid' => '11',
                'name' => 'Điện Biên',
                'type' => 'Tỉnh',
            ),
            7 => 
            array (
                'provinceid' => '12',
                'name' => 'Lai Châu',
                'type' => 'Tỉnh',
            ),
            8 => 
            array (
                'provinceid' => '14',
                'name' => 'Sơn La',
                'type' => 'Tỉnh',
            ),
            9 => 
            array (
                'provinceid' => '15',
                'name' => 'Yên Bái',
                'type' => 'Tỉnh',
            ),
            10 => 
            array (
                'provinceid' => '17',
                'name' => 'Hòa Bình',
                'type' => 'Tỉnh',
            ),
            11 => 
            array (
                'provinceid' => '19',
                'name' => 'Thái Nguyên',
                'type' => 'Tỉnh',
            ),
            12 => 
            array (
                'provinceid' => '20',
                'name' => 'Lạng Sơn',
                'type' => 'Tỉnh',
            ),
            13 => 
            array (
                'provinceid' => '22',
                'name' => 'Quảng Ninh',
                'type' => 'Tỉnh',
            ),
            14 => 
            array (
                'provinceid' => '24',
                'name' => 'Bắc Giang',
                'type' => 'Tỉnh',
            ),
            15 => 
            array (
                'provinceid' => '25',
                'name' => 'Phú Thọ',
                'type' => 'Tỉnh',
            ),
            16 => 
            array (
                'provinceid' => '26',
                'name' => 'Vĩnh Phúc',
                'type' => 'Tỉnh',
            ),
            17 => 
            array (
                'provinceid' => '27',
                'name' => 'Bắc Ninh',
                'type' => 'Tỉnh',
            ),
            18 => 
            array (
                'provinceid' => '30',
                'name' => 'Hải Dương',
                'type' => 'Tỉnh',
            ),
            19 => 
            array (
                'provinceid' => '31',
                'name' => 'Hải Phòng',
                'type' => 'Thành Phố',
            ),
            20 => 
            array (
                'provinceid' => '33',
                'name' => 'Hưng Yên',
                'type' => 'Tỉnh',
            ),
            21 => 
            array (
                'provinceid' => '34',
                'name' => 'Thái Bình',
                'type' => 'Tỉnh',
            ),
            22 => 
            array (
                'provinceid' => '35',
                'name' => 'Hà Nam',
                'type' => 'Tỉnh',
            ),
            23 => 
            array (
                'provinceid' => '36',
                'name' => 'Nam Định',
                'type' => 'Tỉnh',
            ),
            24 => 
            array (
                'provinceid' => '37',
                'name' => 'Ninh Bình',
                'type' => 'Tỉnh',
            ),
            25 => 
            array (
                'provinceid' => '38',
                'name' => 'Thanh Hóa',
                'type' => 'Tỉnh',
            ),
            26 => 
            array (
                'provinceid' => '40',
                'name' => 'Nghệ An',
                'type' => 'Tỉnh',
            ),
            27 => 
            array (
                'provinceid' => '42',
                'name' => 'Hà Tĩnh',
                'type' => 'Tỉnh',
            ),
            28 => 
            array (
                'provinceid' => '44',
                'name' => 'Quảng Bình',
                'type' => 'Tỉnh',
            ),
            29 => 
            array (
                'provinceid' => '45',
                'name' => 'Quảng Trị',
                'type' => 'Tỉnh',
            ),
            30 => 
            array (
                'provinceid' => '46',
                'name' => 'Thừa Thiên Huế',
                'type' => 'Tỉnh',
            ),
            31 => 
            array (
                'provinceid' => '48',
                'name' => 'Đà Nẵng',
                'type' => 'Thành Phố',
            ),
            32 => 
            array (
                'provinceid' => '49',
                'name' => 'Quảng Nam',
                'type' => 'Tỉnh',
            ),
            33 => 
            array (
                'provinceid' => '51',
                'name' => 'Quảng Ngãi',
                'type' => 'Tỉnh',
            ),
            34 => 
            array (
                'provinceid' => '52',
                'name' => 'Bình Định',
                'type' => 'Tỉnh',
            ),
            35 => 
            array (
                'provinceid' => '54',
                'name' => 'Phú Yên',
                'type' => 'Tỉnh',
            ),
            36 => 
            array (
                'provinceid' => '56',
                'name' => 'Khánh Hòa',
                'type' => 'Tỉnh',
            ),
            37 => 
            array (
                'provinceid' => '58',
                'name' => 'Ninh Thuận',
                'type' => 'Tỉnh',
            ),
            38 => 
            array (
                'provinceid' => '60',
                'name' => 'Bình Thuận',
                'type' => 'Tỉnh',
            ),
            39 => 
            array (
                'provinceid' => '62',
                'name' => 'Kon Tum',
                'type' => 'Tỉnh',
            ),
            40 => 
            array (
                'provinceid' => '64',
                'name' => 'Gia Lai',
                'type' => 'Tỉnh',
            ),
            41 => 
            array (
                'provinceid' => '66',
                'name' => 'Đắk Lắk',
                'type' => 'Tỉnh',
            ),
            42 => 
            array (
                'provinceid' => '67',
                'name' => 'Đắk Nông',
                'type' => 'Tỉnh',
            ),
            43 => 
            array (
                'provinceid' => '68',
                'name' => 'Lâm Đồng',
                'type' => 'Tỉnh',
            ),
            44 => 
            array (
                'provinceid' => '70',
                'name' => 'Bình Phước',
                'type' => 'Tỉnh',
            ),
            45 => 
            array (
                'provinceid' => '72',
                'name' => 'Tây Ninh',
                'type' => 'Tỉnh',
            ),
            46 => 
            array (
                'provinceid' => '74',
                'name' => 'Bình Dương',
                'type' => 'Tỉnh',
            ),
            47 => 
            array (
                'provinceid' => '75',
                'name' => 'Đồng Nai',
                'type' => 'Tỉnh',
            ),
            48 => 
            array (
                'provinceid' => '77',
                'name' => 'Bà Rịa - Vũng Tàu',
                'type' => 'Tỉnh',
            ),
            49 => 
            array (
                'provinceid' => '79',
                'name' => 'Hồ Chí Minh',
                'type' => 'Thành Phố',
            ),
            50 => 
            array (
                'provinceid' => '80',
                'name' => 'Long An',
                'type' => 'Tỉnh',
            ),
            51 => 
            array (
                'provinceid' => '82',
                'name' => 'Tiền Giang',
                'type' => 'Tỉnh',
            ),
            52 => 
            array (
                'provinceid' => '83',
                'name' => 'Bến Tre',
                'type' => 'Tỉnh',
            ),
            53 => 
            array (
                'provinceid' => '84',
                'name' => 'Trà Vinh',
                'type' => 'Tỉnh',
            ),
            54 => 
            array (
                'provinceid' => '86',
                'name' => 'Vĩnh Long',
                'type' => 'Tỉnh',
            ),
            55 => 
            array (
                'provinceid' => '87',
                'name' => 'Đồng Tháp',
                'type' => 'Tỉnh',
            ),
            56 => 
            array (
                'provinceid' => '89',
                'name' => 'An Giang',
                'type' => 'Tỉnh',
            ),
            57 => 
            array (
                'provinceid' => '91',
                'name' => 'Kiên Giang',
                'type' => 'Tỉnh',
            ),
            58 => 
            array (
                'provinceid' => '92',
                'name' => 'Cần Thơ',
                'type' => 'Thành Phố',
            ),
            59 => 
            array (
                'provinceid' => '93',
                'name' => 'Hậu Giang',
                'type' => 'Tỉnh',
            ),
            60 => 
            array (
                'provinceid' => '94',
                'name' => 'Sóc Trăng',
                'type' => 'Tỉnh',
            ),
            61 => 
            array (
                'provinceid' => '95',
                'name' => 'Bạc Liêu',
                'type' => 'Tỉnh',
            ),
            62 => 
            array (
                'provinceid' => '96',
                'name' => 'Cà Mau',
                'type' => 'Tỉnh',
            ),
        ));
        
        
    }
}