<?php

use PHPUnit\Framework\TestCase;
use App\helper\Java;

class TestHash extends TestCase
{
    /** @dataProvider providerTestJavaHash */
    public function testJavaHash($s)
    {
        $phpHash = Java::javaStringHashCode($s);
        $javaHash = $this->callJavaToGetHash($s);
        $this->assertSame((string) $phpHash, (string)$javaHash);
    }

    public function providerTestJavaHash()
    {
        return [
            ['hello world' => 'hello world'],
            ['Google' => 'Google'],
            ['Microsoft' => 'Microsoft'],
            ['Amazon' => 'Amazon'],
            ['Apple' => 'Apple'],
            ['Facebook' => 'Facebook'],
            ['Coca-Cola' => 'Coca-Cola'],
            ['Nike' => 'Nike'],
            ['Starbucks' => 'Starbucks'],
            ['McDonald\'s' => 'McDonald\'s'],
            ['IBM' => 'IBM'],
            ['Disney' => 'Disney'],
            ['Tesla' => 'Tesla'],
            ['Walmart' => 'Walmart'],
            ['Samsung' => 'Samsung'],
            ['Intel' => 'Intel'],
            ['Adidas' => 'Adidas'],
            ['Sony' => 'Sony'],
            ['Pepsi' => 'Pepsi'],
            ['Louis Vuitton' => 'Louis Vuitton'],
            ['Mercedes-Benz' => 'Mercedes-Benz'],
            ['Toyota' => 'Toyota'],
            ['Netflix' => 'Netflix'],
            ['Cisco' => 'Cisco'],
            ['Oracle' => 'Oracle'],
            ['NVIDIA' => 'NVIDIA'],
            ['HP' => 'HP'],
            ['Dell' => 'Dell'],
            ['Lenovo' => 'Lenovo'],
            ['Uber' => 'Uber'],
            ['Lyft' => 'Lyft'],
            ['Airbnb' => 'Airbnb'],
            ['Snapchat' => 'Snapchat'],
            ['Twitter' => 'Twitter'],
            ['LinkedIn' => 'LinkedIn'],
            ['Pinterest' => 'Pinterest'],
            ['eBay' => 'eBay'],
            ['PayPal' => 'PayPal'],
            ['Square' => 'Square'],
            ['Stripe' => 'Stripe'],
            ['MasterCard' => 'MasterCard'],
            ['Visa' => 'Visa'],
            ['American Express' => 'American Express'],
            ['Goldman Sachs' => 'Goldman Sachs'],
            ['JPMorgan Chase' => 'JPMorgan Chase'],
            ['Bank of America' => 'Bank of America'],
            ['Wells Fargo' => 'Wells Fargo'],
            ['Citigroup' => 'Citigroup'],
            ['Morgan Stanley' => 'Morgan Stanley'],
            ['BlackRock' => 'BlackRock'],
            ['Berkshire Hathaway' => 'Berkshire Hathaway'],
            ['Allianz' => 'Allianz'],
            ['AXA' => 'AXA'],
            ['AIG' => 'AIG'],
            ['Prudential' => 'Prudential'],
            ['MetLife' => 'MetLife'],
            ['Zurich' => 'Zurich'],
            ['Aflac' => 'Aflac'],
            ['Manulife' => 'Manulife'],
            ['Travelers' => 'Travelers'],
            ['Chubb' => 'Chubb'],
            ['Generali' => 'Generali'],
            ['T-Mobile' => 'T-Mobile'],
            ['Verizon' => 'Verizon'],
            ['AT&T' => 'AT&T'],
            ['Sprint' => 'Sprint'],
            ['Deutsche Telekom' => 'Deutsche Telekom'],
            ['Vodafone' => 'Vodafone'],
            ['Orange' => 'Orange'],
            ['Telefonica' => 'Telefonica'],
            ['BT Group' => 'BT Group'],
            ['China Mobile' => 'China Mobile'],
            ['SoftBank' => 'SoftBank'],
            ['Ericsson' => 'Ericsson'],
            ['Nokia' => 'Nokia'],
            ['Huawei' => 'Huawei'],
            ['Qualcomm' => 'Qualcomm'],
            ['Xiaomi' => 'Xiaomi'],
            ['OnePlus' => 'OnePlus'],
            ['LG' => 'LG'],
            ['HTC' => 'HTC'],
            ['ZTE' => 'ZTE'],
            ['Panasonic' => 'Panasonic'],
            ['Philips' => 'Philips'],
            ['Toshiba' => 'Toshiba'],
            ['Sharp' => 'Sharp'],
            ['Mitsubishi' => 'Mitsubishi'],
            ['Hitachi' => 'Hitachi'],
            ['Fujitsu' => 'Fujitsu'],
            ['Siemens' => 'Siemens'],
            ['Bosch' => 'Bosch'],
            ['Honeywell' => 'Honeywell'],
            ['General Electric' => 'General Electric'],
            ['3M' => '3M'],
            ['Caterpillar' => 'Caterpillar'],
            ['John Deere' => 'John Deere'],
            ['Komatsu' => 'Komatsu'],
            ['Volvo' => 'Volvo'],
            ['Ford' => 'Ford'],
            ['General Motors' => 'General Motors'],
            ['Honda' => 'Honda'],
            ['BMW' => 'BMW'],
            ['Auckland' => 'Auckland'],
            ['Wellington' => 'Wellington'],
            ['Christchurch' => 'Christchurch'],
            ['Hamilton' => 'Hamilton'],
            ['Tauranga' => 'Tauranga'],
            ['Napier' => 'Napier'],
            ['Hastings' => 'Hastings'],
            ['Dunedin' => 'Dunedin'],
            ['Palmerston North' => 'Palmerston North'],
            ['Nelson' => 'Nelson'],
            ['Rotorua' => 'Rotorua'],
            ['New Plymouth' => 'New Plymouth'],
            ['Whangarei' => 'Whangarei'],
            ['Invercargill' => 'Invercargill'],
            ['Gisborne' => 'Gisborne'],
            ['Timaru' => 'Timaru'],
            ['Blenheim' => 'Blenheim'],
            ['Taupo' => 'Taupo'],
            ['Pukekohe' => 'Pukekohe'],
            ['Masterton' => 'Masterton'],
            ['Levin' => 'Levin'],
            ['Whakatane' => 'Whakatane'],
            ['Feilding' => 'Feilding'],
            ['Rangiora' => 'Rangiora'],
            ['Matamata' => 'Matamata'],
            ['Waiuku' => 'Waiuku'],
            ['Cambridge' => 'Cambridge'],
            ['Te Awamutu' => 'Te Awamutu'],
            ['Ashburton' => 'Ashburton'],
            ['Queenstown' => 'Queenstown'],
            ['Rolleston' => 'Rolleston'],
            ['Warkworth' => 'Warkworth'],
            ['Richmond' => 'Richmond'],
            ['Kerikeri' => 'Kerikeri'],
            ['Cromwell' => 'Cromwell'],
            ['Wanaka' => 'Wanaka'],
            ['Kaikoura' => 'Kaikoura'],
            ['Tokoroa' => 'Tokoroa'],
            ['Te Puke' => 'Te Puke'],
            ['Paeroa' => 'Paeroa'],
            ['Dargaville' => 'Dargaville'],
            ['Wairoa' => 'Wairoa'],
            ['Thames' => 'Thames'],
            ['Opotiki' => 'Opotiki'],
            ['Helensville' => 'Helensville'],
            ['Putaruru' => 'Putaruru'],
            ['Oamaru' => 'Oamaru'],
            ['Foxton' => 'Foxton'],
            ['Kaitaia' => 'Kaitaia'],
            ['Alexandra' => 'Alexandra'],
            ['Balclutha' => 'Balclutha'],
            ['Greymouth' => 'Greymouth'],
            ['Westport' => 'Westport'],
            ['Hokitika' => 'Hokitika'],
            ['Whitianga' => 'Whitianga'],
            ['Waihi' => 'Waihi'],
            ['Te Kuiti' => 'Te Kuiti'],
            ['Huntly' => 'Huntly'],
            ['Waimate' => 'Waimate'],
            ['Kawerau' => 'Kawerau'],
            ['Winton' => 'Winton'],
            ['Dannevirke' => 'Dannevirke'],
            ['Woodville' => 'Woodville'],
            ['Waipukurau' => 'Waipukurau'],
            ['Marton' => 'Marton'],
            ['Taihape' => 'Taihape'],
            ['Pahiatua' => 'Pahiatua'],
            ['Raetihi' => 'Raetihi'],
            ['Ohakune' => 'Ohakune'],
            ['Turangi' => 'Turangi'],
            ['Taumarunui' => 'Taumarunui'],
            ['Stratford' => 'Stratford'],
            ['Hawera' => 'Hawera'],
            ['Eltham' => 'Eltham'],
            ['Opunake' => 'Opunake'],
            ['Inglewood' => 'Inglewood'],
            ['Waitara' => 'Waitara'],
            ['Bell Block' => 'Bell Block'],
            ['Manaia' => 'Manaia'],
            ['Patea' => 'Patea'],
            ['Waverley' => 'Waverley'],
            ['Raglan' => 'Raglan'],
            ['Morrinsville' => 'Morrinsville'],
            ['Ngatea' => 'Ngatea'],
            ['Te Aroha' => 'Te Aroha'],
            ['Katikati' => 'Katikati'],
            ['Tairua' => 'Tairua'],
            ['Paeroa' => 'Paeroa'],
            ['Whangamata' => 'Whangamata'],
            ['Te Kauwhata' => 'Te Kauwhata'],
            ['Waihi Beach' => 'Waihi Beach'],
            ['Omokoroa' => 'Omokoroa'],
            ['Te Anau' => 'Te Anau'],
            ['Picton' => 'Picton'],
            ['Motueka' => 'Motueka'],
            ['Takaka' => 'Takaka'],
            ['Haast' => 'Haast'],
            ['Milford Sound' => 'Milford Sound'],
            ['Sydney' => 'Sydney'],
            ['Melbourne' => 'Melbourne'],
            ['Brisbane' => 'Brisbane'],
            ['Perth' => 'Perth'],
            ['Adelaide' => 'Adelaide'],
            ['Gold Coast' => 'Gold Coast'],
            ['Canberra' => 'Canberra'],
            ['Newcastle' => 'Newcastle'],
            ['Wollongong' => 'Wollongong'],
            ['Sunshine Coast' => 'Sunshine Coast'],
            ['Hobart' => 'Hobart'],
            ['Geelong' => 'Geelong'],
            ['Townsville' => 'Townsville'],
            ['Cairns' => 'Cairns'],
            ['Toowoomba' => 'Toowoomba'],
            ['Darwin' => 'Darwin'],
            ['Launceston' => 'Launceston'],
            ['Albury' => 'Albury'],
            ['Ballarat' => 'Ballarat'],
            ['Bendigo' => 'Bendigo'],
            ['Mackay' => 'Mackay'],
            ['Bundaberg' => 'Bundaberg'],
            ['Burnie' => 'Burnie'],
            ['Rockhampton' => 'Rockhampton'],
            ['Hervey Bay' => 'Hervey Bay'],
            ['Mildura' => 'Mildura'],
            ['Wagga Wagga' => 'Wagga Wagga'],
            ['Coffs Harbour' => 'Coffs Harbour'],
            ['Gladstone' => 'Gladstone'],
            ['Port Macquarie' => 'Port Macquarie'],
            ['Tamworth' => 'Tamworth'],
            ['Orange' => 'Orange'],
            ['Dubbo' => 'Dubbo'],
            ['Bunbury' => 'Bunbury'],
            ['Busselton' => 'Busselton'],
            ['Geraldton' => 'Geraldton'],
            ['Kalgoorlie' => 'Kalgoorlie'],
            ['Albany' => 'Albany'],
            ['Mount Gambier' => 'Mount Gambier'],
            ['Whyalla' => 'Whyalla'],
            ['Port Lincoln' => 'Port Lincoln'],
            ['Port Augusta' => 'Port Augusta'],
            ['Victor Harbor' => 'Victor Harbor'],
            ['Broken Hill' => 'Broken Hill'],
            ['Goulburn' => 'Goulburn'],
            ['Lismore' => 'Lismore'],
            ['Bathurst' => 'Bathurst'],
            ['Wollongong' => 'Wollongong'],
            ['Ballina' => 'Ballina'],
            ['Bowral' => 'Bowral'],
            ['Nowra' => 'Nowra'],
            ['Grafton' => 'Grafton'],
            ['Armidale' => 'Armidale'],
            ['Taree' => 'Taree'],
            ['Moree' => 'Moree'],
            ['Casino' => 'Casino'],
            ['Forster' => 'Forster'],
            ['Narrabri' => 'Narrabri'],
            ['Wagga Wagga' => 'Wagga Wagga'],
            ['Griffith' => 'Griffith'],
            ['Goulburn' => 'Goulburn'],
            ['Cowra' => 'Cowra'],
            ['Parkes' => 'Parkes'],
            ['Forbes' => 'Forbes'],
            ['Young' => 'Young'],
            ['Bega' => 'Bega'],
            ['Merimbula' => 'Merimbula'],
            ['Cooma' => 'Cooma'],
            ['Queanbeyan' => 'Queanbeyan'],
            ['Batemans Bay' => 'Batemans Bay'],
            ['Kiama' => 'Kiama'],
            ['Ulladulla' => 'Ulladulla'],
            ['Eden' => 'Eden'],
            ['Jervis Bay' => 'Jervis Bay'],
            ['Shoalhaven' => 'Shoalhaven'],
            ['Shellharbour' => 'Shellharbour'],
            ['Lithgow' => 'Lithgow'],
            ['Mudgee' => 'Mudgee'],
            ['Muswellbrook' => 'Muswellbrook'],
            ['Singleton' => 'Singleton'],
            ['Scone' => 'Scone'],
            ['Batemans Bay' => 'Batemans Bay'],
            ['Canowindra' => 'Canowindra'],
            ['Grenfell' => 'Grenfell'],
            ['Braidwood' => 'Braidwood'],
            ['Quirindi' => 'Quirindi'],
            ['Walcha' => 'Walcha'],
            ['Gloucester' => 'Gloucester'],
            ['Kempsey' => 'Kempsey'],
            ['Bellingen' => 'Bellingen'],
            ['Nambucca Heads' => 'Nambucca Heads'],
            ['Macksville' => 'Macksville'],
            ['Wauchope' => 'Wauchope'],
            ['Coonabarabran' => 'Coonabarabran'],
            ['Gilgandra' => 'Gilgandra'],
            ['Narromine' => 'Narromine'],
            ['Nyngan' => 'Nyngan'],
            ['Cobar' => 'Cobar'],
            ['Lightning Ridge' => 'Lightning Ridge'],
            ['Bourke' => 'Bourke'],
            ['Brewarrina' => 'Brewarrina'],
            ['Walgett' => 'Walgett'],
            ['Coonamble' => 'Coonamble'],
            ['Google Auckland' => 'Google Auckland'],
            ['Microsoft Wellington' => 'Microsoft Wellington'],
            ['Amazon Christchurch' => 'Amazon Christchurch'],
            ['Apple Hamilton' => 'Apple Hamilton'],
            ['Facebook Tauranga' => 'Facebook Tauranga'],
            ['Coca-Cola Napier' => 'Coca-Cola Napier'],
            ['Nike Hastings' => 'Nike Hastings'],
            ['Starbucks Dunedin' => 'Starbucks Dunedin'],
            ['McDonald\'s Palmerston North' => 'McDonald\'s Palmerston North'],
            ['IBM Nelson' => 'IBM Nelson'],
            ['Disney Rotorua' => 'Disney Rotorua'],
            ['Tesla New Plymouth' => 'Tesla New Plymouth'],
            ['Walmart Whangarei' => 'Walmart Whangarei'],
            ['Samsung Invercargill' => 'Samsung Invercargill'],
            ['Intel Gisborne' => 'Intel Gisborne'],
            ['Adidas Timaru' => 'Adidas Timaru'],
            ['Sony Blenheim' => 'Sony Blenheim'],
            ['Pepsi Taupo' => 'Pepsi Taupo'],
            ['Louis Vuitton Pukekohe' => 'Louis Vuitton Pukekohe'],
            ['Mercedes-Benz Masterton' => 'Mercedes-Benz Masterton'],
            ['Toyota Levin' => 'Toyota Levin'],
            ['Netflix Whakatane' => 'Netflix Whakatane'],
            ['Cisco Feilding' => 'Cisco Feilding'],
            ['Oracle Rangiora' => 'Oracle Rangiora'],
            ['NVIDIA Matamata' => 'NVIDIA Matamata'],
            ['HP Waiuku' => 'HP Waiuku'],
            ['Dell Cambridge' => 'Dell Cambridge'],
            ['Lenovo Te Awamutu' => 'Lenovo Te Awamutu'],
            ['Uber Ashburton' => 'Uber Ashburton'],
            ['Lyft Queenstown' => 'Lyft Queenstown'],
            ['Airbnb Rolleston' => 'Airbnb Rolleston'],
            ['Snapchat Warkworth' => 'Snapchat Warkworth'],
            ['Twitter Richmond' => 'Twitter Richmond'],
            ['LinkedIn Kerikeri' => 'LinkedIn Kerikeri'],
            ['Pinterest Cromwell' => 'Pinterest Cromwell'],
            ['eBay Wanaka' => 'eBay Wanaka'],
            ['PayPal Kaikoura' => 'PayPal Kaikoura'],
            ['Square Tokoroa' => 'Square Tokoroa'],
            ['Stripe Te Puke' => 'Stripe Te Puke'],
            ['MasterCard Paeroa' => 'MasterCard Paeroa'],
            ['Visa Dargaville' => 'Visa Dargaville'],
            ['American Express Wairoa' => 'American Express Wairoa'],
            ['Goldman Sachs Thames' => 'Goldman Sachs Thames'],
            ['JPMorgan Chase Opotiki' => 'JPMorgan Chase Opotiki'],
            ['Bank of America Helensville' => 'Bank of America Helensville'],
            ['Wells Fargo Putaruru' => 'Wells Fargo Putaruru'],
            ['Citigroup Oamaru' => 'Citigroup Oamaru'],
            ['Morgan Stanley Foxton' => 'Morgan Stanley Foxton'],
            ['BlackRock Kaitaia' => 'BlackRock Kaitaia'],
            ['Berkshire Hathaway Alexandra' => 'Berkshire Hathaway Alexandra'],
            ['Allianz Balclutha' => 'Allianz Balclutha'],
            ['AXA Greymouth' => 'AXA Greymouth'],
            ['AIG Westport' => 'AIG Westport'],
            ['Prudential Hokitika' => 'Prudential Hokitika'],
            ['MetLife Whitianga' => 'MetLife Whitianga'],
            ['Zurich Waihi' => 'Zurich Waihi'],
            ['Aflac Te Kuiti' => 'Aflac Te Kuiti'],
            ['Manulife Huntly' => 'Manulife Huntly'],
            ['Travelers Waimate' => 'Travelers Waimate'],
            ['Chubb Kawerau' => 'Chubb Kawerau'],
            ['Generali Winton' => 'Generali Winton'],
            ['T-Mobile Dannevirke' => 'T-Mobile Dannevirke'],
            ['Verizon Woodville' => 'Verizon Woodville'],
            ['AT&T Waipukurau' => 'AT&T Waipukurau'],
            ['Sprint Marton' => 'Sprint Marton'],
            ['Deutsche Telekom Taihape' => 'Deutsche Telekom Taihape'],
            ['Vodafone Pahiatua' => 'Vodafone Pahiatua'],
            ['Orange Raetihi' => 'Orange Raetihi'],
            ['Telefonica Ohakune' => 'Telefonica Ohakune'],
            ['BT Group Turangi' => 'BT Group Turangi'],
            ['China Mobile Taumarunui' => 'China Mobile Taumarunui'],
            ['SoftBank Stratford' => 'SoftBank Stratford'],
            ['Ericsson Hawera' => 'Ericsson Hawera'],
            ['Nokia Eltham' => 'Nokia Eltham'],
            ['Huawei Opunake' => 'Huawei Opunake'],
            ['Qualcomm Inglewood' => 'Qualcomm Inglewood'],
            ['Xiaomi Waitara' => 'Xiaomi Waitara'],
            ['OnePlus Bell Block' => 'OnePlus Bell Block'],
            ['LG Manaia' => 'LG Manaia'],
            ['HTC Patea' => 'HTC Patea'],
            ['ZTE Waverley' => 'ZTE Waverley'],
            ['Panasonic Raglan' => 'Panasonic Raglan'],
            ['Philips Morrinsville' => 'Philips Morrinsville'],
            ['Toshiba Ngatea' => 'Toshiba Ngatea'],
            ['Sharp Te Aroha' => 'Sharp Te Aroha'],
            ['Mitsubishi Katikati' => 'Mitsubishi Katikati'],
            ['Hitachi Tairua' => 'Hitachi Tairua'],
            ['Fujitsu Paeroa' => 'Fujitsu Paeroa'],
            ['Siemens Whangamata' => 'Siemens Whangamata'],
            ['Bosch Te Kauwhata' => 'Bosch Te Kauwhata'],
            ['Honeywell Waihi Beach' => 'Honeywell Waihi Beach'],
            ['General Electric Omokoroa' => 'General Electric Omokoroa'],
            ['3M Te Anau' => '3M Te Anau'],
            ['Caterpillar Picton' => 'Caterpillar Picton'],
            ['John Deere Motueka' => 'John Deere Motueka'],
            ['Komatsu Takaka' => 'Komatsu Takaka'],
            ['Volvo Haast' => 'Volvo Haast'],
            ['Ford Milford Sound' => 'Ford Milford Sound'],
        ];
    }

    public function callJavaToGetHash($s)
    {
        $output = [];
        exec('java -cp ' . __DIR__ . '/../src/ HashCode ' . escapeshellarg($s), $output);
        return $output[0];
    }
}
