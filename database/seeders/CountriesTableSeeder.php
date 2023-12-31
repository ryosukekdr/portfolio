<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$param = [
            'code' => 'Country',
            'name' => 'Name',
        ];
        DB::table('countries')->insert($param);*/
        
        $param = [
            'code' => 'IS',
            'name' => 'アイスランド',
            'english_name' => 'Iceland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IE',
            'name' => 'アイルランド',
            'english_name' => 'Ireland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AZ',
            'name' => 'アゼルバイジャン',
            'english_name' => 'Azerbaijan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AF',
            'name' => 'アフガニスタン',
            'english_name' => 'Afghanistan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'US',
            'name' => 'アメリカ合衆国',
            'english_name' => 'United.States.of.America',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VI',
            'name' => 'アメリカ領ヴァージン諸島',
            'english_name' => 'Virgin.Islands.of.the.United.States',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AS',
            'name' => 'アメリカ領サモア',
            'english_name' => 'American.Samoa',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AE',
            'name' => 'アラブ首長国連邦',
            'english_name' => 'United.Arab.Emirates',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DZ',
            'name' => 'アルジェリア',
            'english_name' => 'Algeria',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AR',
            'name' => 'アルゼンチン',
            'english_name' => 'Argentina',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AW',
            'name' => 'アルバ',
            'english_name' => 'Aruba',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AL',
            'name' => 'アルバニア',
            'english_name' => 'Albania',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AM',
            'name' => 'アルメニア',
            'english_name' => 'Armenia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AI',
            'name' => 'アンギラ',
            'english_name' => 'Anguilla',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AO',
            'name' => 'アンゴラ',
            'english_name' => 'Angola',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AG',
            'name' => 'アンティグア・バーブーダ',
            'english_name' => 'Antigua.and.Barbuda',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AD',
            'name' => 'アンドラ',
            'english_name' => 'Andorra',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'YE',
            'name' => 'イエメン',
            'english_name' => 'Yemen',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GB',
            'name' => 'イギリス',
            'english_name' => 'United.Kingdom.of.Great.Britain.and.Northern.Ireland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IO',
            'name' => 'イギリス領インド洋地域',
            'english_name' => 'British.Indian.Ocean.Territory',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VG',
            'name' => 'イギリス領ヴァージン諸島',
            'english_name' => 'British.Virgin.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IL',
            'name' => 'イスラエル',
            'english_name' => 'Israel',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IT',
            'name' => 'イタリア',
            'english_name' => 'Italy',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IQ',
            'name' => 'イラク',
            'english_name' => 'Iraq',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IR',
            'name' => 'イラン・イスラム共和国',
            'english_name' => 'Iran',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IN',
            'name' => 'インド',
            'english_name' => 'Republic.of.India',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ID',
            'name' => 'インドネシア',
            'english_name' => 'Indonesia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'WF',
            'name' => 'ウォリス・フツナ',
            'english_name' => 'Wallis.and.Futuna',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UG',
            'name' => 'ウガンダ',
            'english_name' => 'Uganda',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UA',
            'name' => 'ウクライナ',
            'english_name' => 'Ukraine',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UZ',
            'name' => 'ウズベキスタン',
            'english_name' => 'Uzbekistan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UY',
            'name' => 'ウルグアイ',
            'english_name' => 'Uruguay',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EC',
            'name' => 'エクアドル',
            'english_name' => 'Ecuador',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EG',
            'name' => 'エジプト',
            'english_name' => 'Egypt',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EE',
            'name' => 'エストニア',
            'english_name' => 'Estonia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SZ',
            'name' => 'エスワティニ',
            'english_name' => 'Eswatini',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ET',
            'name' => 'エチオピア',
            'english_name' => 'Ethiopia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ER',
            'name' => 'エリトリア',
            'english_name' => 'Eritrea',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SV',
            'name' => 'エルサルバドル',
            'english_name' => 'El.Salvador',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AU',
            'name' => 'オーストラリア',
            'english_name' => 'Australia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AT',
            'name' => 'オーストリア',
            'english_name' => 'Austria',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AX',
            'name' => 'オーランド諸島',
            'english_name' => 'land.Islands', //Åland.Islandsの頭文字省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'OM',
            'name' => 'オマーン',
            'english_name' => 'Oman',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NL',
            'name' => 'オランダ',
            'english_name' => 'Netherlands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GH',
            'name' => 'ガーナ',
            'english_name' => 'Ghana',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CV',
            'name' => 'カーボベルデ',
            'english_name' => 'Cabo.Verde',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GG',
            'name' => 'ガーンジー',
            'english_name' => 'Guernsey',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GY',
            'name' => 'ガイアナ',
            'english_name' => 'Guyana',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KZ',
            'name' => 'カザフスタン',
            'english_name' => 'Kazakhstan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'QA',
            'name' => 'カタール',
            'english_name' => 'Qatar',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UM',
            'name' => '合衆国領有小離島',
            'english_name' => 'United.States.Minor.Outlying.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CA',
            'name' => 'カナダ',
            'english_name' => 'Canada',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GA',
            'name' => 'ガボン',
            'english_name' => 'Gabon',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CM',
            'name' => 'カメルーン',
            'english_name' => 'Cameroon',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GM',
            'name' => 'ガンビア',
            'english_name' => 'Gambia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KH',
            'name' => 'カンボジア',
            'english_name' => 'Cambodia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MK',
            'name' => '北マケドニア',
            'english_name' => 'North.Macedonia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MP',
            'name' => '北マリアナ諸島',
            'english_name' => 'Northern.Mariana.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GN',
            'name' => 'ギニア',
            'english_name' => 'Guinea',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GW',
            'name' => 'ギニアビサウ',
            'english_name' => 'Guinea-Bissau',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CY',
            'name' => 'キプロス',
            'english_name' => 'Cyprus',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CU',
            'name' => 'キューバ',
            'english_name' => 'Cuba',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CW',
            'name' => 'キュラソー',
            'english_name' => 'Cura', //Curaçaoを省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GR',
            'name' => 'ギリシャ',
            'english_name' => 'Greece',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KI',
            'name' => 'キリバス',
            'english_name' => 'Kiribati',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KG',
            'name' => 'キルギス',
            'english_name' => 'Kyrgyzstan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GT',
            'name' => 'グアテマラ',
            'english_name' => 'Guatemala',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GP',
            'name' => 'グアドループ',
            'english_name' => 'Guadeloupe',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GU',
            'name' => 'グアム',
            'english_name' => 'Guam',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KW',
            'name' => 'クウェート',
            'english_name' => 'Kuwait',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CK',
            'name' => 'クック諸島',
            'english_name' => 'Cook.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GL',
            'name' => 'グリーンランド',
            'english_name' => 'Greenland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CX',
            'name' => 'クリスマス島',
            'english_name' => 'Christmas.Island',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GD',
            'name' => 'グレナダ',
            'english_name' => 'Grenada',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HR',
            'name' => 'クロアチア',
            'english_name' => 'Croatia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KY',
            'name' => 'ケイマン諸島',
            'english_name' => 'Cayman.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KE',
            'name' => 'ケニア',
            'english_name' => 'Kenya',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CI',
            'name' => 'コートジボワール',
            'english_name' => 'Ivoire', //Côte d'Ivoireを省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CC',
            'name' => 'ココス（キーリング）諸島',
            'english_name' => 'Cocos', //Cocos (Keeling) Islandsを省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CR',
            'name' => 'コスタリカ',
            'english_name' => 'Costa.Rica',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KM',
            'name' => 'コモロ',
            'english_name' => 'Comoros',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CO',
            'name' => 'コロンビア',
            'english_name' => 'Colombia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CG',
            'name' => 'コンゴ共和国',
            'english_name' => 'Congo',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CD',
            'name' => 'コンゴ民主共和国',
            'english_name' => 'Congo,.Democratic.Republic.of.the',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SA',
            'name' => 'サウジアラビア',
            'english_name' => 'Saudi.Arabia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GS',
            'name' => 'サウスジョージア・サウスサンドウィッチ諸島',
            'english_name' => 'South.Georgia.and.the.South.Sandwich.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'WS',
            'name' => 'サモア',
            'english_name' => 'Samoa',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ST',
            'name' => 'サントメ・プリンシペ',
            'english_name' => 'Sao.Tome.and.Principe',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BL',
            'name' => 'サン・バルテルミー',
            'english_name' => 'Barth', //Saint Barthélemyを省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZM',
            'name' => 'ザンビア',
            'english_name' => 'Zambia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PM',
            'name' => 'サンピエール島・ミクロン島',
            'english_name' => 'Saint.Pierre.and.Miquelon',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SM',
            'name' => 'サンマリノ',
            'english_name' => 'San.Marino',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MF',
            'name' => 'サン・マルタン（フランス領）',
            'english_name' => 'Saint.Martin',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SL',
            'name' => 'シエラレオネ',
            'english_name' => 'Sierra.Leone',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DJ',
            'name' => 'ジブチ',
            'english_name' => 'Djibouti',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GI',
            'name' => 'ジブラルタル',
            'english_name' => 'Gibraltar',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JE',
            'name' => 'ジャージー',
            'english_name' => 'Jersey',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JM',
            'name' => 'ジャマイカ',
            'english_name' => 'Jamaica',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GE',
            'name' => 'ジョージア',
            'english_name' => 'Georgia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SY',
            'name' => 'シリア・アラブ共和国',
            'english_name' => 'Syrian.Arab.Republic',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SG',
            'name' => 'シンガポール',
            'english_name' => 'Singapore',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SX',
            'name' => 'シント・マールテン（オランダ領）',
            'english_name' => 'Sint.Maarten',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZW',
            'name' => 'ジンバブエ',
            'english_name' => 'Zimbabwe',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CH',
            'name' => 'スイス',
            'english_name' => 'Switzerland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SE',
            'name' => 'スウェーデン',
            'english_name' => 'Sweden',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SD',
            'name' => 'スーダン',
            'english_name' => 'Sudan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SJ',
            'name' => 'スヴァールバル諸島およびヤンマイエン島',
            'english_name' => 'Svalbard.and.Jan.Mayen',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ES',
            'name' => 'スペイン',
            'english_name' => 'Spain',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SR',
            'name' => 'スリナム',
            'english_name' => 'Suriname',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LK',
            'name' => 'スリランカ',
            'english_name' => 'Sri.Lanka',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SK',
            'name' => 'スロバキア',
            'english_name' => 'Slovakia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SI',
            'name' => 'スロベニア',
            'english_name' => 'Slovenia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SC',
            'name' => 'セーシェル',
            'english_name' => 'Seychelles',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GQ',
            'name' => '赤道ギニア',
            'english_name' => 'Equatorial.Guinea',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SN',
            'name' => 'セネガル',
            'english_name' => 'Senegal',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RS',
            'name' => 'セルビア',
            'english_name' => 'Serbia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KN',
            'name' => 'セントクリストファー・ネイビス',
            'english_name' => 'Saint.Kitts.and.Nevis',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VC',
            'name' => 'セントビンセントおよびグレナディーン諸島',
            'english_name' => 'Saint.Vincent.and.the.Grenadines',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SH',
            'name' => 'セントヘレナ・アセンションおよびトリスタンダクーニャ',
            'english_name' => 'Saint.Helena,.Ascension.and.Tristan.da.Cunha',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LC',
            'name' => 'セントルシア',
            'english_name' => 'Saint.Lucia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SO',
            'name' => 'ソマリア',
            'english_name' => 'Somalia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SB',
            'name' => 'ソロモン諸島',
            'english_name' => 'Solomon.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TC',
            'name' => 'タークス・カイコス諸島',
            'english_name' => 'Turks.and.Caicos.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TH',
            'name' => 'タイ',
            'english_name' => 'Thailand',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KR',
            'name' => '大韓民国',
            'english_name' => 'the.Republic.of.korea',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TW',
            'name' => '台湾（中華民国）',
            'english_name' => 'Taiwan,.Province.of.China',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TJ',
            'name' => 'タジキスタン',
            'english_name' => 'Tajikistan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TZ',
            'name' => 'タンザニア',
            'english_name' => 'Tanzania,.United.Republic.of',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CZ',
            'name' => 'チェコ',
            'english_name' => 'Czechia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TD',
            'name' => 'チャド',
            'english_name' => 'Chad',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CF',
            'name' => '中央アフリカ共和国',
            'english_name' => 'Central.African.Republic',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CN',
            'name' => '中華人民共和国',
            'english_name' => 'China',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TN',
            'name' => 'チュニジア',
            'english_name' => 'Tunisia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KP',
            'name' => '朝鮮民主主義人民共和国',
            'english_name' => 'Democratic.People', //Korea (the Democratic People's Republic of)を省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CL',
            'name' => 'チリ',
            'english_name' => 'Chile',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TV',
            'name' => 'ツバル',
            'english_name' => 'Tuvalu',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DK',
            'name' => 'デンマーク',
            'english_name' => 'Denmark',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DE',
            'name' => 'ドイツ',
            'english_name' => 'Germany',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TG',
            'name' => 'トーゴ',
            'english_name' => 'Togo',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TK',
            'name' => 'トケラウ',
            'english_name' => 'Tokelau',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DO',
            'name' => 'ドミニカ共和国',
            'english_name' => 'Dominican.Republic',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DM',
            'name' => 'ドミニカ国',
            'english_name' => 'Dominica',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TT',
            'name' => 'トリニダード・トバゴ',
            'english_name' => 'Trinidad.and.Tobago',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TM',
            'name' => 'トルクメニスタン',
            'english_name' => 'Turkmenistan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TR',
            'name' => 'トルコ',
            'english_name' => 'Turkey',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TO',
            'name' => 'トンガ',
            'english_name' => 'Tonga',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NG',
            'name' => 'ナイジェリア',
            'english_name' => 'Nigeria',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NR',
            'name' => 'ナウル',
            'english_name' => 'Nauru',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NA',
            'name' => 'ナミビア',
            'english_name' => 'Namibia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AQ',
            'name' => '南極',
            'english_name' => 'Antarctica',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NU',
            'name' => 'ニウエ',
            'english_name' => 'Niue',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NI',
            'name' => 'ニカラグア',
            'english_name' => 'Nicaragua',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NE',
            'name' => 'ニジェール',
            'english_name' => 'Niger',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JP',
            'name' => '日本',
            'english_name' => 'Japan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EH',
            'name' => '西サハラ',
            'english_name' => 'Western.Sahara',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NC',
            'name' => 'ニューカレドニア',
            'english_name' => 'New.Caledonia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NZ',
            'name' => 'ニュージーランド',
            'english_name' => 'New.Zealand',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NP',
            'name' => 'ネパール',
            'english_name' => 'Nepal',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NF',
            'name' => 'ノーフォーク島',
            'english_name' => 'Norfolk.Island',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NO',
            'name' => 'ノルウェー',
            'english_name' => 'Norway',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HM',
            'name' => 'ハード島とマクドナルド諸島',
            'english_name' => 'Heard.Island.and.McDonald.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BH',
            'name' => 'バーレーン',
            'english_name' => 'Bahrain',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HT',
            'name' => 'ハイチ',
            'english_name' => 'Haiti',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PK',
            'name' => 'パキスタン',
            'english_name' => 'Pakistan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VA',
            'name' => 'バチカン市国',
            'english_name' => 'Holy.See',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PA',
            'name' => 'パナマ',
            'english_name' => 'Panama',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VU',
            'name' => 'バヌアツ',
            'english_name' => 'Vanuatu',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BS',
            'name' => 'バハマ',
            'english_name' => 'Bahamas',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PG',
            'name' => 'パプアニューギニア',
            'english_name' => 'Papua.New.Guinea',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BM',
            'name' => 'バミューダ',
            'english_name' => 'Bermuda',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PW',
            'name' => 'パラオ',
            'english_name' => 'Palau',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PY',
            'name' => 'パラグアイ',
            'english_name' => 'Paraguay',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BB',
            'name' => 'バルバドス',
            'english_name' => 'Barbados',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PS',
            'name' => 'パレスチナ',
            'english_name' => 'Palestine,.State.of',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HU',
            'name' => 'ハンガリー',
            'english_name' => 'Hungary',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BD',
            'name' => 'バングラデシュ',
            'english_name' => 'Bangladesh',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TL',
            'name' => '東ティモール',
            'english_name' => 'Timor-Leste',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PN',
            'name' => 'ピトケアン',
            'english_name' => 'Pitcairn',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FJ',
            'name' => 'フィジー',
            'english_name' => 'Fiji',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PH',
            'name' => 'フィリピン',
            'english_name' => 'Philippines',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FI',
            'name' => 'フィンランド',
            'english_name' => 'Finland',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BT',
            'name' => 'ブータン',
            'english_name' => 'Bhutan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BV',
            'name' => 'ブーベ島',
            'english_name' => 'Bouvet.Island',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PR',
            'name' => 'プエルトリコ',
            'english_name' => 'Puerto.Rico',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FO',
            'name' => 'フェロー諸島',
            'english_name' => 'Faroe.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FK',
            'name' => 'フォークランド（マルビナス）諸島',
            'english_name' => 'Falkland.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BR',
            'name' => 'ブラジル',
            'english_name' => 'Brazil',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FR',
            'name' => 'フランス',
            'english_name' => 'France',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GF',
            'name' => 'フランス領ギアナ',
            'english_name' => 'French.Guiana',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PF',
            'name' => 'フランス領ポリネシア',
            'english_name' => 'French.Polynesia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TF',
            'name' => 'フランス領南方・南極地域',
            'english_name' => 'French.Southern.Territories',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BG',
            'name' => 'ブルガリア',
            'english_name' => 'Bulgaria',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BF',
            'name' => 'ブルキナファソ',
            'english_name' => 'Burkina.Faso',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BN',
            'name' => 'ブルネイ・ダルサラーム',
            'english_name' => 'Brunei.Darussalam',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BI',
            'name' => 'ブルンジ',
            'english_name' => 'Burundi',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VN',
            'name' => 'ベトナム',
            'english_name' => 'Viet.Nam',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BJ',
            'name' => 'ベナン',
            'english_name' => 'Benin',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VE',
            'name' => 'ベネズエラ・ボリバル共和国',
            'english_name' => 'Venezuela',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'BY',
            'name' => 'ベラルーシ',
            'english_name' => 'Belarus',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BZ',
            'name' => 'ベリーズ',
            'english_name' => 'Belize',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PE',
            'name' => 'ペルー',
            'english_name' => 'Peru',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BE',
            'name' => 'ベルギー',
            'english_name' => 'Belgium',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PL',
            'name' => 'ポーランド',
            'english_name' => 'Poland',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'BA',
            'name' => 'ボスニア・ヘルツェゴビナ',
            'english_name' => 'Bosnia.and.Herzegovina',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BW',
            'name' => 'ボツワナ',
            'english_name' => 'Botswana',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BQ',
            'name' => 'ボネール、シント・ユースタティウスおよびサバ',
            'english_name' => 'Bonaire,.Sint.Eustatius.and.Saba',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BO',
            'name' => 'ボリビア多民族国',
            'english_name' => 'Bolivia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PT',
            'name' => 'ポルトガル',
            'english_name' => 'Portugal',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'HK',
            'name' => '香港',
            'english_name' => 'Hong.Kong',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HN',
            'name' => 'ホンジュラス',
            'english_name' => 'Honduras',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MH',
            'name' => 'マーシャル諸島',
            'english_name' => 'Marshall.Islands',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MO',
            'name' => 'マカオ',
            'english_name' => 'Macau',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MG',
            'name' => 'マダガスカル',
            'english_name' => 'Madagascar',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'YT',
            'name' => 'マヨット',
            'english_name' => 'Mayotte',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MW',
            'name' => 'マラウイ',
            'english_name' => 'Malawi',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ML',
            'name' => 'マリ',
            'english_name' => 'Mali',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MT',
            'name' => 'マルタ',
            'english_name' => 'Malta',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MQ',
            'name' => 'マルティニーク',
            'english_name' => 'Martinique',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MY',
            'name' => 'マレーシア',
            'english_name' => 'Malaysia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IM',
            'name' => 'マン島',
            'english_name' => 'Isle.of.Man',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FM',
            'name' => 'ミクロネシア連邦',
            'english_name' => 'Micronesia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZA',
            'name' => '南アフリカ',
            'english_name' => 'South.Africa',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SS',
            'name' => '南スーダン',
            'english_name' => 'South.Sudan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MM',
            'name' => 'ミャンマー',
            'english_name' => 'Myanmar',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MX',
            'name' => 'メキシコ',
            'english_name' => 'Mexico',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MU',
            'name' => 'モーリシャス',
            'english_name' => 'Mauritius',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MR',
            'name' => 'モーリタニア',
            'english_name' => 'Mauritania',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MZ',
            'name' => 'モザンビーク',
            'english_name' => 'Mozambique',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MC',
            'name' => 'モナコ',
            'english_name' => 'Monaco',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MV',
            'name' => 'モルディブ',
            'english_name' => 'Maldives',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MD',
            'name' => 'モルドバ共和国',
            'english_name' => 'Moldova,.Republic.of',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MA',
            'name' => 'モロッコ',
            'english_name' => 'Morocco',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MN',
            'name' => 'モンゴル',
            'english_name' => 'Mongolia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ME',
            'name' => 'モンテネグロ',
            'english_name' => 'Montenegro',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MS',
            'name' => 'モントセラト',
            'english_name' => 'Montserrat',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JO',
            'name' => 'ヨルダン',
            'english_name' => 'Jordan',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LA',
            'name' => 'ラオス人民民主共和国',
            'english_name' => 'Lao.People', //Lao People's Democratic Republicを省略
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LV',
            'name' => 'ラトビア',
            'english_name' => 'Latvia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LT',
            'name' => 'リトアニア',
            'english_name' => 'Lithuania',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LY',
            'name' => 'リビア',
            'english_name' => 'Libya',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LI',
            'name' => 'リヒテンシュタイン',
            'english_name' => 'Liechtenstein',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LR',
            'name' => 'リベリア',
            'english_name' => 'Liberia',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RO',
            'name' => 'ルーマニア',
            'english_name' => 'Romania',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LU',
            'name' => 'ルクセンブルク',
            'english_name' => 'Luxembourg',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RW',
            'name' => 'ルワンダ',
            'english_name' => 'Rwanda',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LS',
            'name' => 'レソト',
            'english_name' => 'Lesotho',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LB',
            'name' => 'レバノン',
            'english_name' => 'Lebanon',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RE',
            'name' => 'レユニオン',
            'english_name' => '', //Réunion　API設計者のミスで国旗が表示されない
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RU',
            'name' => 'ロシア連邦',
            'english_name' => 'Russian.Federation',
        ];
        DB::table('countries')->insert($param);
    }
}
