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
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IE',
            'name' => 'アイルランド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AZ',
            'name' => 'アゼルバイジャン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AF',
            'name' => 'アフガニスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'US',
            'name' => 'アメリカ合衆国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VI',
            'name' => 'アメリカ領ヴァージン諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AS',
            'name' => 'アメリカ領サモア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AE',
            'name' => 'アラブ首長国連邦',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DZ',
            'name' => 'アルジェリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AR',
            'name' => 'アルゼンチン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AW',
            'name' => 'アルバ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AL',
            'name' => 'アルバニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AM',
            'name' => 'アルメニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AI',
            'name' => 'アンギラ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AO',
            'name' => 'アンゴラ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AG',
            'name' => 'アンティグア・バーブーダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AD',
            'name' => 'アンドラ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'YE',
            'name' => 'イエメン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GB',
            'name' => 'イギリス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IO',
            'name' => 'イギリス領インド洋地域',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VG',
            'name' => 'イギリス領ヴァージン諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IL',
            'name' => 'イスラエル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IT',
            'name' => 'イタリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IQ',
            'name' => 'イラク',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IR',
            'name' => 'イラン・イスラム共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IN',
            'name' => 'インド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ID',
            'name' => 'インドネシア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'WF',
            'name' => 'ウォリス・フツナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UG',
            'name' => 'ウガンダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UA',
            'name' => 'ウクライナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UZ',
            'name' => 'ウズベキスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UY',
            'name' => 'ウルグアイ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EC',
            'name' => 'エクアドル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EG',
            'name' => 'エジプト',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EE',
            'name' => 'エストニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SZ',
            'name' => 'エスワティニ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ET',
            'name' => 'エチオピア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ER',
            'name' => 'エリトリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SV',
            'name' => 'エルサルバドル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AU',
            'name' => 'オーストラリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AT',
            'name' => 'オーストリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AX',
            'name' => 'オーランド諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'OM',
            'name' => 'オマーン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NL',
            'name' => 'オランダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GH',
            'name' => 'ガーナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CV',
            'name' => 'カーボベルデ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GG',
            'name' => 'ガーンジー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GY',
            'name' => 'ガイアナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KZ',
            'name' => 'カザフスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'QA',
            'name' => 'カタール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'UM',
            'name' => '合衆国領有小離島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CA',
            'name' => 'カナダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GA',
            'name' => 'ガボン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CM',
            'name' => 'カメルーン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GM',
            'name' => 'ガンビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KH',
            'name' => 'カンボジア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MK',
            'name' => '北マケドニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MP',
            'name' => '北マリアナ諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GN',
            'name' => 'ギニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GW',
            'name' => 'ギニアビサウ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CY',
            'name' => 'キプロス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CU',
            'name' => 'キューバ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CW',
            'name' => 'キュラソー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GR',
            'name' => 'ギリシャ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KI',
            'name' => 'キリバス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KG',
            'name' => 'キルギス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GT',
            'name' => 'グアテマラ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GP',
            'name' => 'グアドループ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GU',
            'name' => 'グアム',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KW',
            'name' => 'クウェート',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CK',
            'name' => 'クック諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GL',
            'name' => 'グリーンランド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CX',
            'name' => 'クリスマス島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GD',
            'name' => 'グレナダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HR',
            'name' => 'クロアチア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KY',
            'name' => 'ケイマン諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KE',
            'name' => 'ケニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CI',
            'name' => 'コートジボワール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CC',
            'name' => 'ココス（キーリング）諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CR',
            'name' => 'コスタリカ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KM',
            'name' => 'コモロ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CO',
            'name' => 'コロンビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CG',
            'name' => 'コンゴ共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CD',
            'name' => 'コンゴ民主共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SA',
            'name' => 'サウジアラビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GS',
            'name' => 'サウスジョージア・サウスサンドウィッチ諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'WS',
            'name' => 'サモア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ST',
            'name' => 'サントメ・プリンシペ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BL',
            'name' => 'サン・バルテルミー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZM',
            'name' => 'ザンビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PM',
            'name' => 'サンピエール島・ミクロン島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SM',
            'name' => 'サンマリノ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MF',
            'name' => 'サン・マルタン（フランス領）',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SL',
            'name' => 'シエラレオネ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DJ',
            'name' => 'ジブチ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GI',
            'name' => 'ジブラルタル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JE',
            'name' => 'ジャージー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JM',
            'name' => 'ジャマイカ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GE',
            'name' => 'ジョージア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SY',
            'name' => 'シリア・アラブ共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SG',
            'name' => 'シンガポール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SX',
            'name' => 'シント・マールテン（オランダ領）',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZW',
            'name' => 'ジンバブエ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CH',
            'name' => 'スイス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SE',
            'name' => 'スウェーデン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SD',
            'name' => 'スーダン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SJ',
            'name' => 'スヴァールバル諸島およびヤンマイエン島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ES',
            'name' => 'スペイン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SR',
            'name' => 'スリナム',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LK',
            'name' => 'スリランカ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SK',
            'name' => 'スロバキア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SI',
            'name' => 'スロベニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SC',
            'name' => 'セーシェル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GQ',
            'name' => '赤道ギニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SN',
            'name' => 'セネガル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RS',
            'name' => 'セルビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KN',
            'name' => 'セントクリストファー・ネイビス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VC',
            'name' => 'セントビンセントおよびグレナディーン諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SH',
            'name' => 'セントヘレナ・アセンションおよびトリスタンダクーニャ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LC',
            'name' => 'セントルシア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SO',
            'name' => 'ソマリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SB',
            'name' => 'ソロモン諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TC',
            'name' => 'タークス・カイコス諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TH',
            'name' => 'タイ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KR',
            'name' => '大韓民国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TW',
            'name' => '台湾（中華民国）',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TJ',
            'name' => 'タジキスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TZ',
            'name' => 'タンザニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CZ',
            'name' => 'チェコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TD',
            'name' => 'チャド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CF',
            'name' => '中央アフリカ共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CN',
            'name' => '中華人民共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TN',
            'name' => 'チュニジア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'KP',
            'name' => '朝鮮民主主義人民共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'CL',
            'name' => 'チリ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TV',
            'name' => 'ツバル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DK',
            'name' => 'デンマーク',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DE',
            'name' => 'ドイツ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TG',
            'name' => 'トーゴ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TK',
            'name' => 'トケラウ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DO',
            'name' => 'ドミニカ共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'DM',
            'name' => 'ドミニカ国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TT',
            'name' => 'トリニダード・トバゴ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TM',
            'name' => 'トルクメニスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TR',
            'name' => 'トルコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TO',
            'name' => 'トンガ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NG',
            'name' => 'ナイジェリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NR',
            'name' => 'ナウル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NA',
            'name' => 'ナミビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'AQ',
            'name' => '南極',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NU',
            'name' => 'ニウエ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NI',
            'name' => 'ニカラグア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NE',
            'name' => 'ニジェール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JP',
            'name' => '日本',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'EH',
            'name' => '西サハラ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NC',
            'name' => 'ニューカレドニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NZ',
            'name' => 'ニュージーランド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NP',
            'name' => 'ネパール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NF',
            'name' => 'ノーフォーク島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'NO',
            'name' => 'ノルウェー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HM',
            'name' => 'ハード島とマクドナルド諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BH',
            'name' => 'バーレーン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HT',
            'name' => 'ハイチ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PK',
            'name' => 'パキスタン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VA',
            'name' => 'バチカン市国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PA',
            'name' => 'パナマ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VU',
            'name' => 'バヌアツ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BS',
            'name' => 'バハマ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PG',
            'name' => 'パプアニューギニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BM',
            'name' => 'バミューダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PW',
            'name' => 'パラオ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PY',
            'name' => 'パラグアイ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BB',
            'name' => 'バルバドス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PS',
            'name' => 'パレスチナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HU',
            'name' => 'ハンガリー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BD',
            'name' => 'バングラデシュ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TL',
            'name' => '東ティモール',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PN',
            'name' => 'ピトケアン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FJ',
            'name' => 'フィジー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PH',
            'name' => 'フィリピン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FI',
            'name' => 'フィンランド',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BT',
            'name' => 'ブータン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BV',
            'name' => 'ブーベ島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PR',
            'name' => 'プエルトリコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FO',
            'name' => 'フェロー諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FK',
            'name' => 'フォークランド（マルビナス）諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BR',
            'name' => 'ブラジル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FR',
            'name' => 'フランス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'GF',
            'name' => 'フランス領ギアナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PF',
            'name' => 'フランス領ポリネシア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'TF',
            'name' => 'フランス領南方・南極地域',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BG',
            'name' => 'ブルガリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BF',
            'name' => 'ブルキナファソ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BN',
            'name' => 'ブルネイ・ダルサラーム',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BI',
            'name' => 'ブルンジ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VN',
            'name' => 'ベトナム',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BJ',
            'name' => 'ベナン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'VE',
            'name' => 'ベネズエラ・ボリバル共和国',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'BY',
            'name' => 'ベラルーシ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BZ',
            'name' => 'ベリーズ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PE',
            'name' => 'ペルー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BE',
            'name' => 'ベルギー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PL',
            'name' => 'ポーランド',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'BA',
            'name' => 'ボスニア・ヘルツェゴビナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BW',
            'name' => 'ボツワナ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BQ',
            'name' => 'ボネール、シント・ユースタティウスおよびサバ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'BO',
            'name' => 'ボリビア多民族国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'PT',
            'name' => 'ポルトガル',
        ];
        DB::table('countries')->insert($param);
        $param = [
            'code' => 'HK',
            'name' => '香港',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'HN',
            'name' => 'ホンジュラス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MH',
            'name' => 'マーシャル諸島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MO',
            'name' => 'マカオ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MG',
            'name' => 'マダガスカル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'YT',
            'name' => 'マヨット',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MW',
            'name' => 'マラウイ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ML',
            'name' => 'マリ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MT',
            'name' => 'マルタ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MQ',
            'name' => 'マルティニーク',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MY',
            'name' => 'マレーシア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'IM',
            'name' => 'マン島',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'FM',
            'name' => 'ミクロネシア連邦',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ZA',
            'name' => '南アフリカ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'SS',
            'name' => '南スーダン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MM',
            'name' => 'ミャンマー',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MX',
            'name' => 'メキシコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MU',
            'name' => 'モーリシャス',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MR',
            'name' => 'モーリタニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MZ',
            'name' => 'モザンビーク',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MC',
            'name' => 'モナコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MV',
            'name' => 'モルディブ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MD',
            'name' => 'モルドバ共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MA',
            'name' => 'モロッコ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MN',
            'name' => 'モンゴル',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'ME',
            'name' => 'モンテネグロ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'MS',
            'name' => 'モントセラト',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'JO',
            'name' => 'ヨルダン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LA',
            'name' => 'ラオス人民民主共和国',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LV',
            'name' => 'ラトビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LT',
            'name' => 'リトアニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LY',
            'name' => 'リビア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LI',
            'name' => 'リヒテンシュタイン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LR',
            'name' => 'リベリア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RO',
            'name' => 'ルーマニア',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LU',
            'name' => 'ルクセンブルク',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RW',
            'name' => 'ルワンダ',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LS',
            'name' => 'レソト',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'LB',
            'name' => 'レバノン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RE',
            'name' => 'レユニオン',
        ];
        DB::table('countries')->insert($param);
        
        $param = [
            'code' => 'RU',
            'name' => 'ロシア連邦',
        ];
        DB::table('countries')->insert($param);
    }
}
