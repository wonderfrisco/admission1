<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ahafo = Region::create([
            'id'=>1,
            'name'=>'Ahafo Region'
        ]);

        $ahafo->districts()->create([
                'id'=>1,
                'name'=>'Asunafo North Municipal'
            ]);

            $ahafo->districts()->create([
                'id'=>2,
                'name'=>'Asunafo South'

            ]);
            $ahafo->districts()->create([
                'id'=>3,
                'name'=>'Asutifi North'

                ]);
            $ahafo->districts()->create([
                'id'=>4,
                'name'=>'Asutifi South'
            ]);
            $ahafo->districts()->create([
                'id'=>5,
                'name'=>'Tano North'
            ]);
                $ahafo->districts()->create([
                'id'=>6,
                'name'=>'Tano South'
            ]);

            //Ashanti Region
        $asanti = Region::create([
            'id'=>2,
            'name'=>'Ashanti Region'
        ]);

        $asanti->districts()->create([

                'id'=>7,
                'name'=>'Adansi Asokwa'
            ]);
            $asanti->districts()->create([
                'id'=>8,
                'name'=>'Adansi North'
            ]);
            $asanti->districts()->create([
                'id'=>9,
                'name'=>'Adansi South'
            ]);
            $asanti->districts()->create([
                'id'=>10,
                'name'=>'Afigya-Kwabre North'
            ]);
            $asanti->districts()->create([
                'id'=>11,
                'name'=>'Afigya-Kwabre South'
            ]);
            $asanti->districts()->create([
                'id'=>12,
                'name'=>'Ahafo-Ano North Municipal'
            ]);
            $asanti->districts()->create([

                'id'=>13,
                'name'=>'Ahafo-Ano East'
            ]);
            $asanti->districts()->create([

                'id'=>14,
                'name'=>'Ahafo-Ano West'
                ]);
            $asanti->districts()->create([

                'id'=>15,
                'name'=>'Akrofuom'
                ]);
            $asanti->districts()->create([

                'id'=>16,
                'name'=>'Amansie Central'
                ]);
            $asanti->districts()->create([

                'id'=>17,
                'name'=>'Amansie West'
                ]);
            $asanti->districts()->create([

                'id'=>18,
                'name'=>'Amansie South'
            ]);
            $asanti->districts()->create([
                'id'=>19,
                'name'=>'Asante-Akim North'
                ]);
            $asanti->districts()->create([

                'id'=>20,
                'name'=>'Asante-Akim South Municipal'
            ]);
            $asanti->districts()->create([
                'id'=>21,
                'name'=>'Asante-Akim Central Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>22,
                'name'=>'Asokore-Mampong Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>23,
                'name'=>'Asokwa Municipal'
            ]);
            $asanti->districts()->create([
                'id'=>24,
                'name'=>'Atwima-Kwanwoma'
                ]);
            $asanti->districts()->create([
                'id'=>25,
                'name'=>'Atwima-Mponua'
                ]);
            $asanti->districts()->create([

                'id'=>26,
                'name'=>'Atwima-Nwabiagya Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>27,
                'name'=>'Atwima-Nwabiagya North'
                ]);
            $asanti->districts()->create([

                'id'=>28,
                'name'=>'Bekwai Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>29,
                'name'=>'Bosome Freho'
                ]);
            $asanti->districts()->create([

                'id'=>30,
                'name'=>'Bosomtwe'
                ]);
            $asanti->districts()->create([

                'id'=>31,
                'name'=>'Ejisu Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>32,
                'name'=>'Ejura/Sekyedumase Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>33,
                'name'=>'Juaben Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>34,
                'name'=>'Kumasi Metropolitan'
            ]);
            $asanti->districts()->create([
                'id'=>35,
                'name'=>'Kwabre East Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>36,
                'name'=>'Kwadaso Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>37,
                'name'=>'Mampong Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>38,
                'name'=>'Obuasi East Municipal'
            ]);
            $asanti->districts()->create([
                'id'=>39,
                'name'=>'Obuasi Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>40,
                'name'=>'Offinso Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>41,
                'name'=>'Offinso North'
                ]);
            $asanti->districts()->create([

                'id'=>42,
                'name'=>'Oforikrom Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>43,
                'name'=>'Old Tafo Municipal'
                ]);
            $asanti->districts()->create([

                'id'=>44,
                'name'=>'Sekyere Afram Plains'
                ]);
            $asanti->districts()->create([

                'id'=>45,
                'name'=>'Sekyere Central'
                ]);
            $asanti->districts()->create([

           'id'=>46,
                'name'=>'Sekyere East'
                ]);
            $asanti->districts()->create([

                'id'=>47,
                'name'=>'Sekyere Kumawu'
                ]);
            $asanti->districts()->create([

                'id'=>48,
                'name'=>'Sekyere South'
            ]);
            $asanti->districts()->create([
                'id'=>49,
                'name'=>'Suame Municipal'
        ]);

//bono Region
        $bono = Region::create([
            'id'=>3,
            'name'=>'Bono Region'
        ]);
       $bono->districts()->create([

                'id'=>50,
                'name'=>'Banda'
            ]);
$bono->districts()->create([
                'id'=>51,
                'name'=>'Berekum East Municipal'
]);
$bono->districts()->create([
                'id'=>52,
                'name'=>'Berekum West'
]);
$bono->districts()->create([
                'id'=>53,
                'name'=>'Dormaa Central Municipal'
]);
$bono->districts()->create([
                'id'=>54,
                'name'=>'Dormaa East'
]);
$bono->districts()->create([
                'id'=>55,
                'name'=>'Dormaa West'
]);
$bono->districts()->create([
                'id'=>56,
                'name'=>'Jaman North'
            ]);
$bono->districts()->create([

                'id'=>57,
                'name'=>'Jaman South Municipal'
]);
$bono->districts()->create([
                'id'=>58,
                'name'=>'Sunyani Municipal'
]);
$bono->districts()->create([
                'id'=>59,
                'name'=>'Sunyani West'
]);
$bono->districts()->create([
                'id'=>60,
                'name'=>'Tain'
]);
$bono->districts()->create([
                'id'=>61,
                'name'=>'Wenchi Municipal'
        ]);
        //Bono East Region
        $bonoeast = Region::create([
            'id'=>4,
            'name'=>'Bono East Region'
        ]);
        $bonoeast->districts()->create([
            'id'=>251,
           'name'=>'Atebubu-Amantin Municipal'
       ]);
        $bonoeast->districts()->create([
            'id'=>252,
           'name'=>'Kintampo North Municipal'
       ]);
        $bonoeast->districts()->create([
            'id'=>253,
           'name'=>'Kintampo South'
       ]);
        $bonoeast->districts()->create([
            'id'=>254,
           'name'=>'Nkoranza North'
       ]);
        $bonoeast->districts()->create([
            'id'=>255,
           'name'=>'Nkoranza South Municipal'
       ]);
        $bonoeast->districts()->create([
            'id'=>256,
           'name'=>'Pru East'
       ]);
        $bonoeast->districts()->create([
            'id'=>257,
           'name'=>'Pru West'
       ]);
        $bonoeast->districts()->create([
            'id'=>258,
           'name'=>'Sene East'
       ]);
        $bonoeast->districts()->create([
            'id'=>259,
           'name'=>'Sene West'
       ]);
        $bonoeast->districts()->create([
            'id'=>260,
           'name'=>'Techima Municipal'
       ]);
        $bonoeast->districts()->create([
            'id'=>261,
           'name'=>'Techima North'
       ]);
        //Central region
        $central = Region::create([
            'id'=>5,
            'name'=>'Central Region'
        ]);
        $central->districts()->create([
             'id'=>62,
            'name'=>'Abura/Asebu/Kwamankese'
        ]);
        $central->districts()->create([
             'id'=>63,
            'name'=>'Agona East'
        ]);
        $central->districts()->create([
             'id'=>64,
            'name'=>'Agona West Municipal'
        ]);
        $central->districts()->create([
             'id'=>65,
            'name'=>'Ajumako/Enyan/Essiam'
        ]);
        $central->districts()->create([
             'id'=>66,
            'name'=>'Asikuma Odoben Brakwa'
        ]);
        $central->districts()->create([
             'id'=>67,
            'name'=>'Assin Central Municipal'
        ]);
        $central->districts()->create([
             'id'=>68,
            'name'=>'Assin North'
        ]);
        $central->districts()->create([
             'id'=>69,
            'name'=>'Assin South'
        ]);
        $central->districts()->create([
             'id'=>70,
            'name'=>'Awutu Senya East Municipal'
        ]);
        $central->districts()->create([
             'id'=>71,
            'name'=>'Awutu Senya West'
        ]);
        $central->districts()->create([
             'id'=>72,
            'name'=>'Cape Coast Metropolitan'
        ]);
        $central->districts()->create([
             'id'=>73,
            'name'=>'Effutu Municipal'
        ]);
        $central->districts()->create([
             'id'=>74,
            'name'=>'Ekumfi'
        ]);
        $central->districts()->create([
             'id'=>75,
            'name'=>'Gomoa East'
        ]);
        $central->districts()->create([
             'id'=>76,
            'name'=>'Gomoa Central'
        ]);
        $central->districts()->create([
             'id'=>77,
            'name'=>'Gomoa West'
        ]);
        $central->districts()->create([
             'id'=>78,
            'name'=>'Komenda/Edina/Eguafo/Abirem Municipal'
        ]);
        $central->districts()->create([
             'id'=>79,
            'name'=>'Mfantsiman Municipal'
        ]);
        $central->districts()->create([
             'id'=>80,
            'name'=>'Twifo Atti Morkwa'
        ]);
        $central->districts()->create([
             'id'=>82,
            'name'=>'Twifo/Hemang/Lower Denkyira'
        ]);
        $central->districts()->create([
             'id'=>83,
            'name'=>'Upper Denkyira East Municipal'
        ]);

        $central->districts()->create([
             'id'=>84,
            'name'=>'Upper Denkyira West'
        ]);

        //Eastern Region
        $eastern = Region::create([
            'id'=>6,
            'name'=>'Eastern Region'
        ]);
        $eastern->districts()->create([
            'id'=>85,
           'name'=>'Abuakwa North Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>86,
           'name'=>'Abuakwa South Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>87,
           'name'=>'Achiase'
       ]);
        $eastern->districts()->create([
            'id'=>88,
           'name'=>'Akuapim North Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>89,
           'name'=>'Akuapim South'
       ]);
        $eastern->districts()->create([
            'id'=>90,
           'name'=>'Akyemansa'
       ]);
        $eastern->districts()->create([
            'id'=>91,
           'name'=>'Asene Manso Akroso'
       ]);
        $eastern->districts()->create([
            'id'=>92,
           'name'=>'Asuogyaman'
       ]);
        $eastern->districts()->create([
            'id'=>93,
           'name'=>'Atiwa East'
       ]);
        $eastern->districts()->create([
            'id'=>94,
           'name'=>'Atiwa West'
       ]);
        $eastern->districts()->create([
            'id'=>95,
           'name'=>'Ayensuano'
       ]);
        $eastern->districts()->create([
            'id'=>96,
           'name'=>'Birim Central Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>97,
           'name'=>'Birim North'
       ]);
        $eastern->districts()->create([
            'id'=>98,
           'name'=>'Birim South'
       ]);
        $eastern->districts()->create([
            'id'=>99,
           'name'=>'Denkyembour'
       ]);
        $eastern->districts()->create([
            'id'=>100,
           'name'=>'Fanteakwa North'
       ]);
        $eastern->districts()->create([
            'id'=>101,
           'name'=>'Fanteakwa South'
       ]);
        $eastern->districts()->create([
            'id'=>102,
           'name'=>'Kwaebibirem'
       ]);
        $eastern->districts()->create([
            'id'=>103,
           'name'=>'Kwahu Afram Plains North'
       ]);
        $eastern->districts()->create([
            'id'=>104,
           'name'=>'Kwahu Afram Plains South'
       ]);
        $eastern->districts()->create([
            'id'=>105,
           'name'=>'Kwahu East'
       ]);
        $eastern->districts()->create([
            'id'=>106,
           'name'=>'Kwahu South'
       ]);
        $eastern->districts()->create([
            'id'=>107,
           'name'=>'Kwahu West Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>108,
           'name'=>'Lower Manya Krobo Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>109,
           'name'=>'New Juaben North Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>110,
           'name'=>'New Juaben South Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>111,
           'name'=>'Nsawam Adoagyire Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>112,
           'name'=>'Okere'
       ]);
        $eastern->districts()->create([
            'id'=>113,
           'name'=>'Suhum Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>114,
           'name'=>'Upper Manya Krobo'
       ]);
        $eastern->districts()->create([
            'id'=>115,
           'name'=>'Upper West Akim'
       ]);
        $eastern->districts()->create([
            'id'=>116,
           'name'=>'West Akim Municipal'
       ]);
        $eastern->districts()->create([
            'id'=>117,
           'name'=>'Yilo-Krobo Municipal'
       ]);


       $accra = Region::create([
        'id'=>7,
        'name'=>'Greater Accra Region'
    ]);

    $accra->districts()->create([
        'id'=>118,
       'name'=>'Ablekuma Central Municipal'
   ]);
    $accra->districts()->create([
        'id'=>119,
       'name'=>'Ablekuma North Municipal'
   ]);
    $accra->districts()->create([
        'id'=>120,
       'name'=>'Ablekuma West Municipal'
   ]);

    $accra->districts()->create([
        'id'=>121,
       'name'=>'Accra Metropolitan'
   ]);
    $accra->districts()->create([
        'id'=>122,
       'name'=>'Ada East'
   ]);
    $accra->districts()->create([
        'id'=>123,
       'name'=>'Ada West'
   ]);
    $accra->districts()->create([
        'id'=>124,
       'name'=>'Adenta Municipal'
   ]);
    $accra->districts()->create([
        'id'=>125,
       'name'=>'Ashaiman Municipal'
   ]);
    $accra->districts()->create([
        'id'=>126,
       'name'=>'Ayawaso Central Municipal'
   ]);
    $accra->districts()->create([
        'id'=>127,
       'name'=>'Ayawaso East Municipal'
   ]);
    $accra->districts()->create([
        'id'=>128,
       'name'=>'Ayawaso North Municipal'
   ]);
    $accra->districts()->create([
        'id'=>129,
       'name'=>'Ayawaso West Municipal'
   ]);
    $accra->districts()->create([
        'id'=>130,
       'name'=>'Ga Central Municipal'
   ]);
    $accra->districts()->create([
        'id'=>131,
       'name'=>'Ga East Municipal'
   ]);
    $accra->districts()->create([
        'id'=>132,
       'name'=>'Ga North Municipal'
   ]);
    $accra->districts()->create([
        'id'=>133,
       'name'=>'Ga South Municipal'
   ]);
    $accra->districts()->create([
        'id'=>134,
       'name'=>'Ga West Municipal'
   ]);
    $accra->districts()->create([
        'id'=>135,
       'name'=>'Korle-Klottey Municipal'
   ]);
    $accra->districts()->create([
        'id'=>136,
       'name'=>'Kpone-Katamanso Municipal'
   ]);
    $accra->districts()->create([
        'id'=>137,
       'name'=>'Krowor Municipal'
   ]);
    $accra->districts()->create([
        'id'=>138,
       'name'=>'La-Dade-Kotopon Municipal'
   ]);
    $accra->districts()->create([
        'id'=>139,
       'name'=>'La-Nkwantanang-Madina Municipal'
   ]);
    $accra->districts()->create([
        'id'=>140,
       'name'=>'Ledzokuku Municipal'
   ]);
    $accra->districts()->create([
        'id'=>141,
       'name'=>'Ningo-Prampram'
   ]);
    $accra->districts()->create([
        'id'=>142,
       'name'=>'Okaikwei North Municipal'
   ]);
    $accra->districts()->create([
        'id'=>143,
       'name'=>'Shai-Osudoku'
   ]);
    $accra->districts()->create([
        'id'=>144,
       'name'=>'Tema Metropolitan'
   ]);
    $accra->districts()->create([
        'id'=>145,
       'name'=>'Tema West Municipal'
   ]);
    $accra->districts()->create([
        'id'=>146,
       'name'=>'Weija Gbawe Municipal'
   ]);
//Northen Region
   $north = Region::create([
    'id'=>8,
    'name'=>'Northern Region'
]);

$north->districts()->create([
    'id'=>148,
   'name'=>'Gushegu Municipal'
]);
$north->districts()->create([
    'id'=>149,
   'name'=>'Karaga'
]);
$north->districts()->create([
    'id'=>150,
   'name'=>'Kpandai'
]);
$north->districts()->create([
    'id'=>151,
   'name'=>'Kumbungu'
]);
$north->districts()->create([
    'id'=>152,
   'name'=>'Mion'
]);
$north->districts()->create([
    'id'=>153,
   'name'=>'Nanton'
]);
$north->districts()->create([
    'id'=>154,
   'name'=>'Nanumba North Municipal	'
]);
$north->districts()->create([
    'id'=>155,
   'name'=>'Nanumba South'
]);
$north->districts()->create([
    'id'=>156,
   'name'=>'Saboba'
]);
$north->districts()->create([
    'id'=>157,
   'name'=>'Sagnarigu Municipal'
]);
$north->districts()->create([
    'id'=>158,
   'name'=>'Savelugu Municipal'
]);
$north->districts()->create([
    'id'=>159,
   'name'=>'Tamale Metropolitan'
]);
$north->districts()->create([
    'id'=>160,
   'name'=>'Tatale Sanguli'
]);
$north->districts()->create([
    'id'=>161,
   'name'=>'Tolon'
]);
$north->districts()->create([
    'id'=>162,
   'name'=>'Yendi Municipal'
]);
$north->districts()->create([
    'id'=>163,
   'name'=>'Zabzugu'
]);
//North East
$northeast = Region::create([
    'id'=>9,
    'name'=>'North East Region'
]);

$northeast->districts()->create([
    'id'=>164,
   'name'=>'Bunkpurugu Nyankpanduri'
]);
$northeast->districts()->create([
    'id'=>165,
   'name'=>'Chereponi'
]);
$northeast->districts()->create([
    'id'=>166,
   'name'=>'East Mamprusi Municipal'
]);
$northeast->districts()->create([
    'id'=>167,
   'name'=>'Mamprugu Moagduri'
]);
$northeast->districts()->create([
    'id'=>168,
   'name'=>'West Mamprusi Municipal'
]);
$northeast->districts()->create([
    'id'=>169,
   'name'=>'Yunyoo-Nasuan'
]);
//oti
$oti = Region::create([
    'id'=>10,
    'name'=>'Oti Region'
]);

$oti->districts()->create([
    'id'=>170,
   'name'=>'Biakoye'
]);
$oti->districts()->create([
    'id'=>171,
   'name'=>'Jasikan'
]);
$oti->districts()->create([
    'id'=>172,
   'name'=>'Kadjebi'
]);
$oti->districts()->create([
    'id'=>173,
   'name'=>'Krachi East Municipal'
]);
$oti->districts()->create([
    'id'=>174,
   'name'=>'Krachi Nchumuru'
]);
$oti->districts()->create([
    'id'=>175,
   'name'=>'Nkwanta North'
]);
$oti->districts()->create([
    'id'=>176,
   'name'=>'Nkwanta South Municipal'
]);
//Savannah
$savannah = Region::create([
    'id'=>11,
    'name'=>'Savannah Region'
]);
$savannah->districts()->create([
    'id'=>177,
   'name'=>'Central Gonja'
]);
$savannah->districts()->create([
    'id'=>178,
   'name'=>'East Gonja Municipal'
]);
$savannah->districts()->create([
    'id'=>179,
   'name'=>'North Gonja'
]);
$savannah->districts()->create([
    'id'=>180,
   'name'=>'North East Gonja'
]);
$savannah->districts()->create([
    'id'=>181,
   'name'=>'Sawla-Tuna-Kalba'
]);
$savannah->districts()->create([
    'id'=>182,
   'name'=>'West Gonja Municipal'
]);
$savannah->districts()->create([
    'id'=>183,
   'name'=>'West Gonja Municipal'
]);
//Upper East Region
$uppereast = Region::create([
    'id'=>12,
    'name'=>'Upper East Region'
]);

$uppereast->districts()->create([
    'id'=>184,
   'name'=>'Bawku Municipal'
]);
$uppereast->districts()->create([
    'id'=>185,
   'name'=>'Binduri'
]);
$uppereast->districts()->create([
    'id'=>186,
   'name'=>'Bolgatanga East'
]);
$uppereast->districts()->create([
    'id'=>187,
   'name'=>'Bolgatanga Municipal'
]);
$uppereast->districts()->create([
    'id'=>188,
   'name'=>'Bongo'
]);
$uppereast->districts()->create([
    'id'=>189,
   'name'=>'Builsa North Municipal'
]);
$uppereast->districts()->create([
    'id'=>190,
   'name'=>'Builsa South'
]);
$uppereast->districts()->create([
    'id'=>191,
   'name'=>'Garu'
]);
$uppereast->districts()->create([
    'id'=>192,
   'name'=>'Kassena-Nankana Municipal'
]);
$uppereast->districts()->create([
    'id'=>193,
   'name'=>'Kassena-Nankana West'
]);
$uppereast->districts()->create([
    'id'=>194,
   'name'=>'Nabdam'
]);
$uppereast->districts()->create([
    'id'=>195,
   'name'=>'Pusiga'
]);
$uppereast->districts()->create([
    'id'=>196,
   'name'=>'Talensi'
]);
$uppereast->districts()->create([
    'id'=>197,
   'name'=>'Tempane'
]);


//Upper West Region
$upperwest = Region::create([
    'id'=>13,
    'name'=>'Upper West Region'
]);

$upperwest->districts()->create([
    'id'=>198,
   'name'=>'Daffiama Bussie Issa'
]);
$upperwest->districts()->create([
    'id'=>199,
   'name'=>'Jirapa Municipal'
]);
$upperwest->districts()->create([
    'id'=>200,
   'name'=>'Lambussie Karni'
]);
$upperwest->districts()->create([
    'id'=>201,
   'name'=>'Lawra Municipal'
]);
$upperwest->districts()->create([
    'id'=>202,
   'name'=>'Nadowli-Kaleo'
]);
$upperwest->districts()->create([
    'id'=>203,
   'name'=>'Nandom Municipal'
]);
$upperwest->districts()->create([
    'id'=>204,
   'name'=>'Sissala East Municipal'
]);
$upperwest->districts()->create([
    'id'=>205,
   'name'=>'Sissala West'
]);
$upperwest->districts()->create([
    'id'=>206,
   'name'=>'Wa East'
]);
$upperwest->districts()->create([
    'id'=>207,
   'name'=>'Wa Municipal'
]);
$upperwest->districts()->create([
    'id'=>208,
   'name'=>'Wa West'
]);


//Volta Region
$volta = Region::create([
    'id'=>14,
    'name'=>'Volta Region'
]);

$volta->districts()->create([
    'id'=>209,
   'name'=>'Adaklu District'
]);
$volta->districts()->create([
    'id'=>210,
   'name'=>'Afadzato South'
]);
$volta->districts()->create([
    'id'=>211,
   'name'=>'Agotime Ziope'
]);
$volta->districts()->create([
    'id'=>212,
   'name'=>'Akatsi North'
]);
$volta->districts()->create([
    'id'=>213,
   'name'=>'Akatsi South'
]);
$volta->districts()->create([
    'id'=>214,
   'name'=>'Anloga'
]);
$volta->districts()->create([
    'id'=>215,
   'name'=>'Central Tongu'
]);
$volta->districts()->create([
    'id'=>216,
   'name'=>'Guan'
]);
$volta->districts()->create([
    'id'=>217,
   'name'=>'Ho Municipal'
]);
$volta->districts()->create([
    'id'=>218,
   'name'=>'Ho West'
]);
$volta->districts()->create([
    'id'=>219,
   'name'=>'Hohoe Municipal'
]);
$volta->districts()->create([
    'id'=>220,
   'name'=>'Keta Municipal'
]);
$volta->districts()->create([
    'id'=>221,
   'name'=>'Ketu North Municipal'
]);
$volta->districts()->create([
    'id'=>222,
   'name'=>'Ketu South Municipal'
]);
$volta->districts()->create([
    'id'=>223,
   'name'=>'Kpando Municipal'
]);
$volta->districts()->create([
    'id'=>224,
   'name'=>'North Dayi'
]);
$volta->districts()->create([
    'id'=>225,
   'name'=>'North Tongu'
]);
$volta->districts()->create([
    'id'=>226,
   'name'=>'South Dayi'
]);
$volta->districts()->create([
    'id'=>227,
   'name'=>'South Tongu'
]);

//Western Region
$western = Region::create([
    'id'=>15,
    'name'=>'Western Region'
]);

$western->districts()->create([
    'id'=>228,
   'name'=>'Ahanta West Municipal'
]);
$western->districts()->create([
    'id'=>229,
   'name'=>'Amenfi Central'
]);
$western->districts()->create([
    'id'=>230,
   'name'=>'Amenfi West Municipal'
]);
$western->districts()->create([
    'id'=>231,
   'name'=>'Effia Kwesimintsim Municipal'
]);
$western->districts()->create([
    'id'=>232,
   'name'=>'Ellembelle'
]);
$western->districts()->create([
    'id'=>233,
   'name'=>'Jomoro Municipal'
]);
$western->districts()->create([
    'id'=>234,
   'name'=>'Mpohor'
]);
$western->districts()->create([
    'id'=>235,
   'name'=>'Nzema East Municipal'
]);
$western->districts()->create([
    'id'=>236,
   'name'=>'Prestea-Huni Valley Municipal'
]);
$western->districts()->create([
    'id'=>237,
   'name'=>'Sekondi Takoradi Metropolitan'
]);
$western->districts()->create([
    'id'=>238,
   'name'=>'Shama'
]);
$western->districts()->create([
    'id'=>239,
   'name'=>'Tarkwa-Nsuaem Municipal'
]);
$western->districts()->create([
    'id'=>240,
   'name'=>'Wassa Amenfi East Municipal'
]);
$western->districts()->create([
    'id'=>241,
   'name'=>'Wassa East'
]);

//Western North Region
$westernnorth = Region::create([
    'id'=>16,
    'name'=>'Western North Region'
]);

$westernnorth->districts()->create([
    'id'=>242,
   'name'=>'Aowin Municipal'
]);
$westernnorth->districts()->create([
    'id'=>243,
   'name'=>'Bia East'
]);
$westernnorth->districts()->create([
    'id'=>244,
   'name'=>'Bia West'
]);
$westernnorth->districts()->create([
    'id'=>245,
   'name'=>'Bibiani Anhwiaso Bekwai	Municipal'
]);
$westernnorth->districts()->create([
    'id'=>246,
   'name'=>'Bodi'
]);
$westernnorth->districts()->create([
    'id'=>247,
   'name'=>'Juaboso'
]);
$westernnorth->districts()->create([
    'id'=>248,
   'name'=>'Sefwi Akontombra'
]);
$westernnorth->districts()->create([
    'id'=>249,
   'name'=>'Wiawso Municipal'
]);
$westernnorth->districts()->create([
    'id'=>250,
   'name'=>'Suaman'
]);
    }
}
