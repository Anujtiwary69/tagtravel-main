<?php

namespace App\Http\Controllers;

use Request;
use DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->menu = array("HOME","HOLIDAY","TOP TOURS","MICE","OFFERS","HOTELS","GIFT VOUCHERS");
        $this->top = array(
            1=>array('1','Historical Tours in Uzbekistan'),
            2=>array('2','Extreme & Adventure Tours in Uzbekistan'),
            3=>array('3','Daily Tours in Uzbekistan'),
            4=>array('4','Ecological Tours in Uzbekistan'),
            5=>array('5','Medical Tours in Uzbekistan'),
            6=>array('6','Educational Tours in Uzbekistan'),
            7=>array('7','Transformational Travel in Uzbekistan'),
            8=>array('8','Winter Tourism in Uzbekistan'),
            9=>array('9','Tours in Kyrgyzstan'),
            10=>array('10','Tours in Georgia'),
            11=>array('11','Tours in Tajikistan'),
            12=>array('12','Knowledge Exchange Tours'),
            13=>array('13','Team-Building Tours'),
            14=>array('14','Solo Tours'),
            15=>array('15','Group Travel'),
        );
        $this->top_att = array(
            1=>array('1','Registan in Samarkand <span style="visibility: hidden;">Samarkand</span>','Registan in Samarkand'),
            2=>array('2','Gur-e-Amir Mausoleum in Samarkand','Gur-e-Amir Mausoleum in Samarkand','Shah-i-Zinda in Samarkand'),
            3=>array('3','Shah-i-Zinda in Samarkand <span style="visibility: hidden;">Samarkand</span>','Shah-i-Zinda in Samarkand'),
            4=>array('4','Tosh-Hovli Palace in Khiva <span style="visibility: hidden;">Samarkand</span>','Tosh-Hovli Palace in Khiva'),
            5=>array('5','Ark in Bukhara <span style="visibility: hidden;">Samarkand Samarkand Samarkand</span>','Ark in Bukhara'),
            6=>array('6','Chorsu Bazaar in Tashkent <span style="visibility: hidden;">Samarkand</span>','Chorsu Bazaar in Tashkent'),
            7=>array('7','Fergana Valley','Fergana Valley'),
            8=>array('8','Kyzylkum Desert','Kyzylkum Desert'),
            9=>array('9','Aral Sea','Aral Sea'),
        );
        $this->offers = array(
            1=>array('1','Short Breaks'),
            2=>array('2','City Tours'),
            3=>array('3','Weekend Escapes'),
            4=>array('4','Staycations'),
                   );;
        $this->des = array(
            1=>array('1','Central Asia'),
            2=>array('2','Middle East'),
            3=>array('3','Europe'),
            4=>array('4','Asia & Asia Pacific'),

        );
        $this->historic = array(
            1=>array('1','Classic Uzbekistan','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            05 days
            <small>04 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Bukhara, Samarkand</p>
            <p>Price: Upon Request</p>','555'),
            2=>array('2','Uzbekistan – Pearl of East','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            09 days
            <small>08 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Urgench, Khiva,
            Bukhara, Samarkand</p>
            <p>Price: Upon Request</p>','961'),
            3=>array('3','8-Days Classic Uzbekistan','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            08 days
            <small>07 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Urgench, Khiva,
            Bukhara, Samarkand, Tashkent</p>
            <p>Price: Upon Request</p>','952'),
            4=>array('4','History Puzzles','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            09 days
            <small>08 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Urgench, Khiva,
            Bukhara, Nurata, Samarkand</p>
            <p>Price: Upon Request</p>','1102'),
            5=>array('5','Magical Cities of Uzbekistan','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            13 days
            <small>12 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Nukus, Khiva, Ayaz
            Kala, Bukhara, Gijduvan, Samarkand,
            Shakhrisabz</p>
            <p>Price: Upon Request</p>','1048'),
            6=>array('6','The Grand Tour of Uzbekistan','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            20 days
            <small>19 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Nukus, Aral Sea,
            Ayaz Kala, Khiva, Bukhara, Nurata,
            Samarkand, Shakhrisabz, Termez,
            Fergana Valley</p>
            <p>Price: Upon Request</p>','1223'),
            7=>array('7','Oriental Tale','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            08 days
            <small>07 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Urgench, Khiva,
            Bukhara, Samarkand, Shakhrisabz</p>
            <p>Price: Upon Request</p>','1508'),
            8=>array('8','Trip Along the Silk Road','<div class="fancy-box-cell" data-text="Duration">
            <h5 class="mb-0 mt-0">
            10 days
            <small>09 nights</small>
            </h5>
            </div>
            <p >Towns: Tashkent, Urgench, Khiva,
            Bukhara, Samarkand, Fergana Valley</p>
            <p>Price: Upon Request</p>','1508'),

                   );
                   $this->central_asia = array(
                    1=>array('1','Uzbekistan'),
                    2=>array('2','Kazakhstan'),
                    3=>array('3','Kyrgyzstan'),
                    4=>array('4','Tajikistan'),

                    5=>array('5','Turkmenistan'),
                    6=>array('6','Georgia'),
                    // 7=>array('7','Iran'),

                );

                $this->middle_east=array('United Arab Emirates','Saudi Arabia',
                'Oman',
                'Bahrain',
                'Qatar',
                'Kuwait',
                'Iran',
                'Lebanon',
                'Jordan',
                'Egypt',
                'Morocco',
                'Tunisia',
                'Israel',
                );
                $this->europe=array('Germany','United Kingdom',
                'France',
                'Monaco',
                'Italy',
                'Spain',
                'Poland',
                'Belgium',
                'Austria',
                'Netherlands',
                'Greece',
                'Switzerland',
                'Turkey',
                'Sweden',
                'Bulgaria',
                'Romania',

                );
                $this->asia=array('Indonesia','Malaysia',
                'Thailand',
                'China',
                'South Korea',
                'India',
                'Pakistan',
                'Afghanistan',
                'Japan',
                'Sri Lanka',
                'Australia',
                'New Zealand',


                );


    }
    public function index($uri){
        $top="";
        $offers="";
        $des="";
        $top_att="";
        $central_asia="";
        $middle_east="";
        $asia="";
        $europe="";
        $otherPage = false;
          switch ($uri) {
            case 'top-tours':
                // $top=$this->top;
                $top = DB::table('top_tours')->get();
            break;
            case 'offers':
                $offers=$this->offers;
            break;
            case 'destinations':
                $des=$this->des;
            break;
            case 'attractions':
                $top_att=$this->top_att;
            break;
            case 'central-asia':
                $central_asia=$this->central_asia;
            break;
            case 'middle-east':
                $middle_east=$this->middle_east;
            break;
            case 'europe':
                $europe=$this->europe;
            break;
            case 'asia-&-asia-pacific':
                $asia=$this->asia;
            break;
            case 'holiday':
                $asia=$this->asia;
            break;
            case 'gift-vouchers':
            break;
            case 'press':
                $data['press'] = DB::table('press')->orderBy('id','DESC')->get();
            break;
            default:
                # code...
                $data['content'] = $this->otherPages($uri);
                $otherPage = true;
            break;
        }
        $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
        if($otherPage){
            return view('other-page',['menu'=>$this->menu,'uri'=>$uri,'data'=>$data]);
        }
        else{
            return view('page',['menu'=>$this->menu,'top'=>$top,'offers'=>$offers,'des'=>$des,'top_att'=>$top_att,'central_asia'=>$central_asia,'mainPoint'=> $mainPoint,'middle_east'=>$middle_east,'europe'=>$europe,'asia'=>$asia,'uri'=>$uri,'data'=>$data ?? array()]);
        }
       
    }

    public function dynamic($uri){
        if($uri!=""){
            try{
                $id = DB::table('constant')->select('value_int')->where('key',$uri)->first();
                // var_dump($id->value_int);
                // exit;
                // if(isset($id->value_id)){
                    $data['content'] = DB::table('Tours')->where('top_tour_id',$id->value_int)->get();
            }

            catch (\Exception $e) {

                $data['content'] =  array();
            }
          
          
           
        }
        else{
            $data['content'] =  array();
        }
       
        return view('page',['menu'=>$this->menu,'content'=>$data['content'],'uri'=>$uri]);
    }
    public function holidayTypes($uri)
    {
        $data['content'] = $this->getHolidayTypesData($uri);
        return view('holiday-types',['menu'=>$this->menu,'data'=>$data,'uri'=>$uri]);
    }

    public function tourDetailPage($id){
        $data['content'] = DB::table('tour_detail')->where('tour_id',$id)->get();
        $data['parent'] = DB::table('Tours')->where('id',$id)->first();
        return view('page.tour-details',['menu'=>$this->menu,'data'=>$data]);
    }

    public function getHolidayTypesData($para){ 
        $data = array(
            'luxury-holidays' => array('<p>Plan the ultimate luxury holiday with Chortoq travels and discover fascinating destinations and extravagant retreats. We have handpicked some of the most luxurious locations that ooze elegance, comfort and style with world-class hospitality offering guests a unique experience to make you feel like royalty every step of your way.</p>',),

            'family-holidays' => array('<p>From relaxing breaks to fun filled getaways, create family holiday memories for a lifetime with Chortoq travels. Our superb choice of family vacation packages offer luxury and comfort, along with plenty of activities to keep the kids entertained. The hand-picked selection of family-friendly hotels and resorts equipped with a range of facilities including exceptional restaurants are ideal to recharge and reconnect with you loved ones.</p>',),

            'all-inclusive-holidays' => array('<p>Relax and unwind with all-inclusive prepaid holidays by Chortoq travels. Whether you are looking for a luxury break or a family holiday with children, we offer a fabulous collection of all-inclusive value-added packages. Stylish and comfortable accommodations equipped with superb amenities, access to unlimited dining and drinks, kids’ clubs, swimming pools and spa treatments ensure you have a great time without overspending.</p>',),

            'last-minute-holidays' => array('<p>Need to get away, and don’t want to wait? Whether you are looking for a short break or a long-haul adventure, our last-minute holiday deals have got you covered. Take advantage of our last-minute offers and treat yourself to a holiday at the best hotels and the most luxurious hideaways in Uzbekistan. Book your memorable Silk Road adventure with Chortoq travels.',),

            'honeymoons' => array('<p>Plan your perfect honeymoon with Chortoq travels for we believe your honeymoon should be as unique as you are. From relaxing minimoons to adventurous maximoons, we are here to tailor-make a romantic escape that’s just perfect for you. TAG experts will listen to what’s important to you and use our knowledge and expertise to find the most extraordinary and memorable experiences that you will treasure for the rest of your lives.</p><p>With our seamless service and personalised approach, no detail is too small and no request too big. At Chortoq travels we have curated an exquisite collection of picturesque honeymoon hotels and locations in Uzbekistan and other unique destinations that will offer something unforgettable for every couple.</p>',),

            'weddings' => array('<p>Plan a dream destination wedding with Chortoq travels in the most historic and idyllic locations in Uzbekistan – the ancient land of Silk Road Treasures. Its mesmerising blue mosaic domes and glittering minarets combined with picturesque countryside and fabled past make this destination a rare jewel. Following the footsteps of Silk Road tradesmen, at Chortoq travels we have selected the most majestic and magnificent venues across Uzbekistan that will serve as a breath-taking backdrop for your photos while giving your guests an experience of a lifetime.</p>',)

        );

        return $data[$para];
            
    }

    public function newsDetail($id){
        $name = str_replace('-',' ',$id);
        $data['press'] =  DB::table('press')->where('name',$name)->first();
        $uri = 'news_details';
        return view('page.news_details',['menu'=>$this->menu,'data'=>$data]);
    }

    public function otherPages($para){
        $data =  array(
            'about-tag' => '<p>Discover Uzbekistan – the cradle of Silk Road culture in Central Asia and home to spellbinding architecture and ancient cities – with Chortoq travels. Embark on a fascinating journey of Tashkent, Samarkand, Bukhara, Khiva, Nukus, Aral Sea, Ayaz-kala, Nurata, Shakhrisabz, Termez, Fergana Valley.</p><p>Chortoq travels is proud to be Uzbekistan’s leading inbound and outbound travel agency. With a strong heritage and experience spanning over two decades in travel, adventure and ground handling services, we have established ourselves as one of the most credible and reputed companies in Central Asia.</p><p>As a market leader, Chortoq travels sets the standards for excellence in the travel and tourism industry in Uzbekistan and other parts of Central Asia with our outstanding expertise, unique products, unmatched local know-how and vast regional and international network.</p><p>The success of Chortoq travels runs parallel to the steady growth of tourism in Uzbekistan. Capitalising on the massive opportunities in the travel and tourism sector across the country, Chortoq travels caters to the requirements of both corporate and leisure travellers with a wide range of world-class services and products.</p><p>Ultimately, our progress is built on our constant quest for perfection. We ensure the highest service standards by focusing on the key business differentiators that are defined to meet and exceed our clients’ expectations - turning every moment into a memorable experience!</p>',

            'why-tag-travels'=>'<p>At Chortoq travels we understand that your holiday should be tailor-made around experiences that you will never forget. Whether you are looking for a family adventure, a romantic escape, relaxing holiday, cultural trip, ecotourism, transformational travel, city break, a life-changing tour, destination wedding, or a customised MICE package – we have it all. </p><p>Our main areas of activity include hotel and guesthouse reservations, visa support, transportation services, air and railway ticketing and bespoke recreational and travel programs in Central Asia. </p><p>You can call our team of expert travel consultants to know more about our packages. We listen to what you want, then create holidays just right for you. The sooner you book the more you save as well as have a chance to enjoy complimentary upgrades, extra room nights or other bonuses to make your holidays extra special.</p>',

            'Holiday Types'=> '<p>We offer a fabulous range of holiday types from luxury holidays to fairy tale destination weddings, dream honeymoons, fun-filled family holidays and much more.</p>',

            'group-travel' => '<p>Be it a leisure trip or a business tour, discover our amazing group offers. Whether you are looking to impress your clients or reward your team, we offer a wide range of tour options for groups of any size (large, medium and small) including exciting predesigned excursions as well as customised tours. Be it a team-building activity, a corporate gathering or a family celebration, we can make your event truly unforgettable showcasing Uzbekistan’s spectacular sights and culture.</p>',

            'hotels' => '<p>Where to stay? Chortoq travels offers a superb choice of hotels and resorts from luxurious accommodations to budget hotels in fabulous locations. Check out our great options at great prices no matter what your style and requirement.  </p>',

            'Tailor-Made Itineraries' => '<p>Take advantage of our tailor-made itineraries for once in a lifetime experiences with mesmerizing views. Whether you are looking to explore the iconic architectural buildings and impressive cities or wanting to traverse over stunning desert scenery and fascinating mountains, our exclusive tailor-made itineraries are designed to make your experience both memorable and adventurous.</p>',

            'traveller-information' => '<p><strong>Getting a tourist visa to Uzbekistan<br /></strong>Citizens of 86 countries can enjoy visa-free travel to Uzbekistan (with different lengths of stay in the country ranging from 7 days to 60 days as well as unlimited stay). In addition, individuals who possess a residency visa for UAE are also entitled to 30-day visa-free entry, provided the resident visa is valid for at least 90 days after entering Uzbekistan. For more information click <a href="/visa-for-uzbekistan" style="color:#4c6da2; !important;">here</a></p>
            <p><strong>Tourist Visa Extension<br /></strong>To extend the validity of a tourist visa, visitors must contact the Ministry of Internal Affairs of Uzbekistan located at Tashkent, Shaykhantahur District, St. Islam Karimov House 49a, Tel: (+998 71) 232-68-70.&nbsp;</p>
            <p><strong>Rules for Stay of Foreign Citizens<br /></strong>Foreign citizens temporarily staying in the Republic of Uzbekistan live in accommodation facilities, other living space, as well as medical facilities, with notification of the host organizations, as well as of persons who invited them to the Republic of Uzbekistan for private affairs.</p>
            <p>Foreign citizens residing in the Republic of Uzbekistan are required to have passports or documents replacing them and present them at the request of representatives of the competent authorities.</p>
            <p><strong>Transport and Moving<br /></strong>The most convenient way to get to Uzbekistan is by plane. Low-cost domestic flights connect almost all major cities of the country with Tashkent.</p>
            <p>International trains run regularly through Uzbekistan. Tickets can be bought at the ticket office of railway stations.</p>
            <p><strong>Intercity Transportation<br /></strong>In Uzbekistan, there are tourist train routes in the direction of the Great Silk Road. From Tashkent by train, visitors can easily get to Samarkand, Bukhara, Khiva, Termez and other large transport hubs and historical centers.</p>
            <p>When using the taxi service (except for a taxi on call), visitors should bargain in advance and agree on a price. In addition, Yandex Taxi offers its customers high-quality and fast service.</p>
            <p><strong>Credit Cards and ATMs<br /></strong>Payment by international credit cards can be made mainly in large restaurants, hotels. In shops, catering places and local transport, payment is usually made in cash Uzbek soums.</p>
            <p>Money from an international credit card can be cashed at an ATM located in airports, hotels and other tourist facilities throughout the country.</p>
            <p>In Uzbekistan, visitors can easily cash US dollars from international plastic cards Visa and MasterCard. The number of ATMs is constantly increasing not only in the capital, but also in other regions of the country.</p>
            <p>Visitors can exchange American dollars, euros, British pounds and Japanese yens for Uzbek sums at exchange offices that are installed in banks, airports, hotels and other tourist facilities of the country.</p>
            <p><strong>Insurance Coverage for Foreign Tourists<br /></strong>It is recommended that visitors purchase a medical insurance policy for their stay in Uzbekistan. This will allow travellres to get the necessary medical care if necessary. The insurance policy can be purchased both in the host country and in Uzbekistan.</p>',

            'press' => '<p>For all media enquiries and comments please contact our press office on press@tag-travels.com</p>',
            'mice' => '<p class="text-dark" style="line-height:1">We specialize in almost every aspect of corporate travel management with a wide range of business travel solutions and MICE services. Whether you are planning an important meeting, a unique incentive programme, a mega convention, a large-scale exhibition or a special event, take advantage of Chortoq travels’s world-class organizational know-how, expertise and resources for a grand success.</p><p class="text-dark" style="line-height:1">
            Skilled in every aspect of conference organisation from strategic planning to flawless execution, our team of specialists deliver lasting impressions. Working closely with our clients we provide end-to-end project management solutions with comprehensive services ranging from complete support to logistics, accommodation, banqueting, leisure activities and entertainment.
            </p>',

            'tag-club'=>'<p></p>',
            'pertnerships-&-Affiliates'=>'<p>Chortoq travels is supported by a wide network of strategic local and international affiliates and partners that allows us to deliver the very best in product and service to our customers. Our successful business partnerships and collaboration with the world’s largest and most trusted travel associations and brands gives us a unique competitive edge in the market while empowering our growth.</p>',
            'tailor-made-itineraries'=>'<p>Take advantage of our tailor-made itineraries for once in a lifetime experiences with mesmerizing views. Whether you are looking to explore the iconic architectural buildings and impressive cities or wanting to traverse over stunning desert scenery and fascinating mountains, our exclusive tailor-made itineraries are designed to make your experience both memorable and adventurous.</p>',

            'contact-us'=>'<p>We are only a phone call away and will be glad to assist you with any enquiries you may have. Call us on +998950998080 or email 
CESC@grandchortoqresort.com Alternatively fill up the form below and one of our associates will get back to you.</p>',

            'Registan-in-Samarkand' => '<p>The Registan, which means ‘Sandy Place’ was a commercial centre during the medieval times and the heart of the ancient city of Samarkand where people gathered to hear the royal proclamations. It is framed by three medressas (historic Islamic schools) that glitter at dawn and dusk in shades of the Silk Road. These architectural gems were built during the Timurid dynasty and include Ulugh Beg Medressa (1417-1420), Tilya-Kori Medressa (1646-1660) and the Sher-Dor Medress (1619-1636).</p>',

            'Gur-e-Amir-Mausoleum-in-Samarkand'=>'<p>The Gur-i-Amir is a magnificent mausoleum of Emperor Timur (1336-1405), also known as Tamerlane, and is one of the most beautiful sights on the Silk Road. With its golden domes and spectacular mosaics, it occupies an important place in the history of Persian-Mongolian architecture as the precursor for later Mughal tombs.</p>',

            'Shah-i-Zinda-in-Samarkand'=>'<p>The Shah-i-Zinda complex boasts many mausoleums that are a spectacular combination of Persian, Central Asian and East Asian influences. It was formed over eight (11th till 19th) centuries and comprises three groups of structures: lower, middle and upper connected by four-arched domed passages locally called chartak. The Shah-i-Zinda is the best place to see the movement of artistic and architectural influences along the Silk Road. </p>',

            'Tosh-Hovli-Palace-in-Khiva'=> '<p>Built by Allakuli Khan between 1832 and 1841 Tosh-Hovli or ‘Stone House’ is a magnificent palace in Khiva featuring 150 rooms around nine courtyards, with sumptuous interiors, carved wooden pillars and high ceilings designed to bring in the desert breeze. Two separate entrances take visitors into the two wings of the palace that served as the summer residence of Khivan Khans.</p>',

            'Ark-in-Bukhara'=>'<p>The Ark is a massive fortress located in the city of Bukhara. It is one of Uzbekistan’s oldest structures built around the 5th century AD and subsequently served as the residence of the emirs of Bukhara (1785-1920). Its museums offer glimpses into the ancient lives of people along the Silk Road.</p>',

            'Chorsu-Bazaar-in-Tashkent' => '<p>Chorsu Bazaar is the traditional over hundred year old bazaar located in the center of the old town of Taskent. Under its blue-coloured dome, shoppers can find an abundance of colourful and exotic merchandise ranging from handicrafts to clothing, food, bread and spices. Next to the bazaar are the choykhonas where you can enjoy an array of traditional delights.</p>',

            'Fergana-Valley'=>'<p>The Kyzylkum Desert, meaning red sand, is the 15th largest desert in the world stretching between the Amu Darya and Syr Darya. It covers about 298,000 km and stretches over Kazakhstan, Turkmenistan and Uzbekistan.</p>',

            'Kyzylkum-Desert' => '<p>The Kyzylkum Desert, meaning red sand, is the 15th largest desert in the world stretching between the Amu Darya and Syr Darya. It covers about 298,000 km and stretches over Kazakhstan, Turkmenistan and Uzbekistan.</p>',

            'Aral-Sea' => '<p>A trip to the Aral Sea is a trip of a lifetime. Its name roughly stands for ‘Sea of Islands’ referring to over 1,100 islands that had once dotted its waters. The Aral Sea has been shrinking since the 1960’s after the rivers that fed it were diverted by irrigation projects. Its receding southern shoreline still holds tremendous appeal for adventurous travellers. Popular among tourists is camping at a spot overlooking the sea or staying in a yurt camp.</p>',

            'visa-for-uzbekistan' => '<p><strong>Visa for Uzbekistan<br /></strong>Citizens of 86 countries can enjoy visa-free travel to Uzbekistan (with different lengths of stay in the country ranging from 7 days to 60 days as well as unlimited stay). In addition, individuals who possess a residency visa for UAE are also entitled to 30-day visa-free entry, provided the resident visa is valid for at least 90 days after entering Uzbekistan.<br /><br /><strong>Citizens from countries who do not need an Uzbekistan visa can be split into several groups:<br /></strong><strong>No Time Limit Visa:</strong><br /> 1. Azerbaijan Republic<br /> 2. Georgia<br /> 3. The Republic of Armenia<br /> 4. The Republic of Belarus<br /> 5. The Republic of Kazakhstan<br /> 6. Republic of Moldova<br /> 7. Russian Federation<br />8. Ukraine<br /><br /><strong>Up to 60 Days Visa:</strong><br /> 9. Kyrgyz Republic<br /><p><strong>Up to 30 Days Visa:</strong><br /> 10. Australian Union<br /> 11. The Republic of Austria<br /> 12. Argentine Republic<br /> 13. Bosnia and Herzegovina<br /> 14. Vatican<br /> 15. The Grand Duchy of Luxembourg<br /> 16. Hungary<br /> 17. State of Brunei Darussalam<br /> 18. State of Israel<br /> 19. Greek Republic<br /> 20. Ireland<br />21.Iceland<br /> 22. Italian Republic<br /> 23. Canada<br /> 24. Principality of Andorra<br /> 25. Principality of Liechtenstein<br /> 26. Principality of Monaco<br /> 27. Kingdom of Belgium<br /> 28. Kingdom of Denmark<br /> 29. Kingdom of Spain<br /> 30. Kingdom of the Netherlands<br /> 31. Kingdom of Norway<br /> 32. Kingdom of Sweden<br /> 33. Republic of Latvia<br /> 34. Republic of Lithuania<br /> 35. Malaysia<br />36. Mongolia<br /> 37. New Zealand<br /> 38. United Arab Emirates<br /> 39. Portuguese Republic<br /> 40. Republic of Bulgaria<br /> 41. Republic of Indonesia<br /> 42. Republic of Cyprus<br /> 43. Republic of Korea<br /> 44. Malta<br /> 45. Republic of Poland<br /> 46. Republic of San Marino<br /> 47. Republic of Serbia<br /> 48. Republic of Slovenia<br /> 49. Republic of Tajikistan<br /> 50. Republic of Croatia<br />51. Republic of Chile<br /> 52. Romania<br /> 53. Singapore<br /> 54. Slovak Republic<br /> 55. United Kingdom of Great Britain and Northern Ireland<br /> 56. Republic of Turkey<br /> 57. Federative Republic of Brazil<br /> 58. Federal Republic of Germany<br /> 59. Republic of Finland<br /> 60. French Republic<br /> 61. Montenegro<br /> 62. Czech Republic<br /> 63. Swiss Confederation<br /> 64. Republic of Estonia<br /> 65. Japan<br />66. Antigua and Barbuda<br /> 67. Barbados<br /> 68. Belize<br /> 69. Grenada<br /> 70. Dominican Republic<br /> 71. Mexican United States<br /> 72. Republic of Guatemala<br /> 73. Republic of Honduras<br /> 74. Republic of Costa Rica<br /> 75. Republic of Cuba<br /> 76. Republic of Nicaragua<br /> 77. Republic of Panama<br /> 78. Republic of Trinidad and Tobago<br /> 79. Republic of El Salvador<br /> 80. Saint Vincent and the Grenadines<br /> 81. Saint Lucia<br /> 82. Commonwealth of the Bahamas<br /> 83. Commonwealth of Dominica<br /> 84. Federation of Saint Kitts and Nevis<br /> 85. Jamaica&nbsp;&nbsp;<br /><br /><strong>No More Than 7 Days Visa:</strong><br /> 86. Republic of China, including Hong Kong (special Administrative Region of China).&nbsp; If tourists arrive at International airports and have a return airline ticket&nbsp;of the Air company who provides to the border State Security Service of the Republic of Uzbekistan a preliminary information about passengers on time.</p>
<p><strong>Additional (non-electronic) categories of entry visas for certain groups of foreign citizens visiting the Republic of Uzbekistan</strong></p>
<ol start="1" style="padding-left: 0px;">
<li><strong>Vatandosh </strong>&mdash; a 2-year visa for natives of the Republic of Uzbekistan and members of their families, if there are invitations from their relatives who are citizens of the Republic of Uzbekistan and permanently residing in its territory.&nbsp;</li>
<li><strong>Student Visa</strong> &mdash; a one-year visa that is issued to foreign students studying in educational institutions located in the Republic of Uzbekistan, issued at the request of educational institutions, ministries, departments and organizations of the Republic of Uzbekistan with educational institutions in their charge.&nbsp;</li>
<li><strong>Academic Visa </strong>&mdash; a visa for a period of 3 months to 2 years for foreigners wishing to conduct research and teaching activities in the Republic of Uzbekistan, issued at the request of the Academy of Sciences of the Republic of Uzbekistan, research organizations, higher educational institutions of the Republic of Uzbekistan, ministries or departments.</li>
<li><strong>Medical Visa</strong> &mdash; a visa up to 3 months for foreign citizens entering the Republic of Uzbekistan for treatment at the invitation of a medical institution.&nbsp;</li>
<li><strong>Piligrim Visa </strong>&mdash; a pilgrim visa issued for a period of up to 2 months to foreign citizens at the request of tourism entities and the Committee on Religious Affairs under the Cabinet of Ministers of the Republic of Uzbekistan to study the cultural, historical, religious and spiritual heritage, traditions of Uzbekistan.</li>
<li><strong>Investment Visa &mdash;</strong> a multiple investment visa valid for up to three years, issued to foreign citizens and stateless persons who have invested in the economy of the Republic of Uzbekistan in the amount of at least 8,500 times the basic calculation amount established in the Republic of Uzbekistan at the time of making foreign investments, in the form of acquisition of shares and shares of business companies, as well as the creation of enterprises with foreign investments, issued at the request of these enterprises, with the possibility of extending its term without leaving the territory the Republic of Uzbekistan.</li>
</ol>
<p>At the same time, the investor&rsquo;s family members (spouse, parents and children) are issued a guest visa for the duration of the &lsquo;Investment visa&rsquo; with the right to renew without leaving the republic.</p>
<p>&nbsp;</p>',






        );

        return $data[$para];
    }
}
