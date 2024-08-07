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
        $this->assertSame((string)$phpHash, (string)$javaHash);
    }

    public function providerTestJavaHash()
    {
        return [
            ['hello world'],
            ["HashCode"],
            ["1234567890"],
            ["!@#$%^&*()"],
            ["The quick brown fox jumps over the lazy dog"],
            ["a"],
            [""], // empty string
            ["Lorem ipsum dolor sit amet, consectetur adipiscing elit"],
            ["abcdefghijklmnopqrstuvwxyz"],
            ["ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
            ["0123456789abcdefghijklmnopqrstuvwxyz"],
            ["0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
            ["The quick brown fox jumps over the lazy dog 1234567890"],
            ["Hello, World!"],
            ["PHPUnit testing"],
            ["Java hashCode"],
            ["PHP hashCode"],
            ["!@#$%^&*()_+[];'./,<>?:\"{}|"],
            ["特殊字符"], // Chinese characters
            ["😊👍🏽✨"], // Emojis
            ["こんにちは"], // Japanese characters
            ["안녕하세요"], // Korean characters
            ["Здравствуйте"], // Russian characters
            ["مرحبا"], // Arabic characters
            ["👩‍💻"], // Emoji with ZWJ sequence
            ["👨‍🚀"], // Emoji with ZWJ sequence
            ["🚀✨💫"], // Multiple emojis
            ["foo©bar"], // String with special character
            ["emoji😊mix✨up"], // Mixed emoji and text
            ["spaces and tabs\t "], // String with space and tab
            ["中文字符测试"], // Chinese characters
            ["🎉🎈🎂"], // Multiple emojis
            ["𠜎𠜱𠝹"], // Rare Chinese characters
            ["HTML <b>bold</b>"], // HTML-like string
            ["Café au lait"], // String with accented character
            ["Jalapeño"], // String with accented character
            ["Русский текст"], // Russian text
            ["Español"], // Spanish text
            ["Löwenbräu"], // German text with umlaut
            ["Français"], // French text with cedilla
            ['Google'],
            ['Microsoft'],
            ['Amazon'],
            ['Apple'],
            ['Facebook'],
            ['Coca-Cola'],
            ['Nike'],
            ['Starbucks'],
            ['McDonald\'s'],
            ['IBM'],
            ['Disney'],
            ['Tesla'],
            ['Walmart'],
            ['Samsung'],
            ['Intel'],
            ['Adidas'],
            ['Sony'],
            ['Pepsi'],
            ['Louis Vuitton'],
            ['Mercedes-Benz'],
            ['Toyota'],
            ['Netflix'],
            ['Cisco'],
            ['Oracle'],
            ['NVIDIA'],
            ['HP'],
            ['Dell'],
            ['Lenovo'],
            ['Uber'],
            ['Lyft'],
            ['Airbnb'],
            ['Snapchat'],
            ['Twitter'],
            ['LinkedIn'],
            ['Pinterest'],
            ['eBay'],
            ['PayPal'],
            ['Square'],
            ['Stripe'],
            ['MasterCard'],
            ['Visa'],
            ['American Express'],
            ['Goldman Sachs'],
            ['JPMorgan Chase'],
            ['Bank of America'],
            ['Wells Fargo'],
            ['Citigroup'],
            ['Morgan Stanley'],
            ['BlackRock'],
            ['Berkshire Hathaway'],
            ['Allianz'],
            ['AXA'],
            ['AIG'],
            ['Prudential'],
            ['MetLife'],
            ['Zurich'],
            ['Aflac'],
            ['Manulife'],
            ['Travelers'],
            ['Chubb'],
            ['Generali'],
            ['T-Mobile'],
            ['Verizon'],
            ['AT&T'],
            ['Sprint'],
            ['Deutsche Telekom'],
            ['Vodafone'],
            ['Orange'],
            ['Telefonica'],
            ['BT Group'],
            ['China Mobile'],
            ['SoftBank'],
            ['Ericsson'],
            ['Nokia'],
            ['Huawei'],
            ['Qualcomm'],
            ['Xiaomi'],
            ['OnePlus'],
            ['LG'],
            ['HTC'],
            ['ZTE'],
            ['Panasonic'],
            ['Philips'],
            ['Toshiba'],
            ['Sharp'],
            ['Mitsubishi'],
            ['Hitachi'],
            ['Fujitsu'],
            ['Siemens'],
            ['Bosch'],
            ['Honeywell'],
            ['General Electric'],
            ['3M'],
            ['Caterpillar'],
            ['John Deere'],
            ['Komatsu'],
            ['Volvo'],
            ['Ford'],
            ['General Motors'],
            ['Honda'],
            ['BMW'],
            ['Auckland'],
            ['Wellington'],
            ['Christchurch'],
            ['Hamilton'],
            ['Tauranga'],
            ['Napier'],
            ['Hastings'],
            ['Dunedin'],
            ['Palmerston North'],
            ['Nelson'],
            ['Rotorua'],
            ['New Plymouth'],
            ['Whangarei'],
            ['Invercargill'],
            ['Gisborne'],
            ['Timaru'],
            ['Blenheim'],
            ['Taupo'],
            ['Pukekohe'],
            ['Masterton'],
            ['Levin'],
            ['Whakatane'],
            ['Feilding'],
            ['Rangiora'],
            ['Matamata'],
            ['Waiuku'],
            ['Cambridge'],
            ['Te Awamutu'],
            ['Ashburton'],
            ['Queenstown'],
            ['Rolleston'],
            ['Warkworth'],
            ['Richmond'],
            ['Kerikeri'],
            ['Cromwell'],
            ['Wanaka'],
            ['Kaikoura'],
            ['Tokoroa'],
            ['Te Puke'],
            ['Paeroa'],
            ['Dargaville'],
            ['Wairoa'],
            ['Thames'],
            ['Opotiki'],
            ['Helensville'],
            ['Putaruru'],
            ['Oamaru'],
            ['Foxton'],
            ['Kaitaia'],
            ['Alexandra'],
            ['Balclutha'],
            ['Greymouth'],
            ['Westport'],
            ['Hokitika'],
            ['Whitianga'],
            ['Waihi'],
            ['Te Kuiti'],
            ['Huntly'],
            ['Waimate'],
            ['Kawerau'],
            ['Winton'],
            ['Dannevirke'],
            ['Woodville'],
            ['Waipukurau'],
            ['Marton'],
            ['Taihape'],
            ['Pahiatua'],
            ['Raetihi'],
            ['Ohakune'],
            ['Turangi'],
            ['Taumarunui'],
            ['Stratford'],
            ['Hawera'],
            ['Eltham'],
            ['Opunake'],
            ['Inglewood'],
            ['Waitara'],
            ['Bell Block'],
            ['Manaia'],
            ['Patea'],
            ['Waverley'],
            ['Raglan'],
            ['Morrinsville'],
            ['Ngatea'],
            ['Te Aroha'],
            ['Katikati'],
            ['Tairua'],
            ['Paeroa'],
            ['Whangamata'],
            ['Te Kauwhata'],
            ['Waihi Beach'],
            ['Omokoroa'],
            ['Te Anau'],
            ['Picton'],
            ['Motueka'],
            ['Takaka'],
            ['Haast'],
            ['Milford Sound'],
            ['Sydney'],
            ['Melbourne'],
            ['Brisbane'],
            ['Perth'],
            ['Adelaide'],
            ['Gold Coast'],
            ['Canberra'],
            ['Newcastle'],
            ['Wollongong'],
            ['Sunshine Coast'],
            ['Hobart'],
            ['Geelong'],
            ['Townsville'],
            ['Cairns'],
            ['Toowoomba'],
            ['Darwin'],
            ['Launceston'],
            ['Albury'],
            ['Ballarat'],
            ['Bendigo'],
            ['Mackay'],
            ['Bundaberg'],
            ['Burnie'],
            ['Rockhampton'],
            ['Hervey Bay'],
            ['Mildura'],
            ['Wagga Wagga'],
            ['Coffs Harbour'],
            ['Gladstone'],
            ['Port Macquarie'],
            ['Tamworth'],
            ['Orange'],
            ['Dubbo'],
            ['Bunbury'],
            ['Busselton'],
            ['Geraldton'],
            ['Kalgoorlie'],
            ['Albany'],
            ['Mount Gambier'],
            ['Whyalla'],
            ['Port Lincoln'],
            ['Port Augusta'],
            ['Victor Harbor'],
            ['Broken Hill'],
            ['Goulburn'],
            ['Lismore'],
            ['Bathurst'],
            ['Wollongong'],
            ['Ballina'],
            ['Bowral'],
            ['Nowra'],
            ['Grafton'],
            ['Armidale'],
            ['Taree'],
            ['Moree'],
            ['Casino'],
            ['Forster'],
            ['Narrabri'],
            ['Wagga Wagga'],
            ['Griffith'],
            ['Goulburn'],
            ['Cowra'],
            ['Parkes'],
            ['Forbes'],
            ['Young'],
            ['Bega'],
            ['Merimbula'],
            ['Cooma'],
            ['Queanbeyan'],
            ['Batemans Bay'],
            ['Kiama'],
            ['Ulladulla'],
            ['Eden'],
            ['Jervis Bay'],
            ['Shoalhaven'],
            ['Shellharbour'],
            ['Lithgow'],
            ['Mudgee'],
            ['Muswellbrook'],
            ['Singleton'],
            ['Scone'],
            ['Batemans Bay'],
            ['Canowindra'],
            ['Grenfell'],
            ['Braidwood'],
            ['Quirindi'],
            ['Walcha'],
            ['Gloucester'],
            ['Kempsey'],
            ['Bellingen'],
            ['Nambucca Heads'],
            ['Macksville'],
            ['Wauchope'],
            ['Coonabarabran'],
            ['Gilgandra'],
            ['Narromine'],
            ['Nyngan'],
            ['Cobar'],
            ['Lightning Ridge'],
            ['Bourke'],
            ['Brewarrina'],
            ['Walgett'],
            ['Coonamble'],
            ['Google Auckland'],
            ['Microsoft Wellington'],
            ['Amazon Christchurch'],
            ['Apple Hamilton'],
            ['Facebook Tauranga'],
            ['Coca-Cola Napier'],
            ['Nike Hastings'],
            ['Starbucks Dunedin'],
            ['McDonald\'s Palmerston North'],
            ['IBM Nelson'],
            ['Disney Rotorua'],
            ['Tesla New Plymouth'],
            ['Walmart Whangarei'],
            ['Samsung Invercargill'],
            ['Intel Gisborne'],
            ['Adidas Timaru'],
            ['Sony Blenheim'],
            ['Pepsi Taupo'],
            ['Louis Vuitton Pukekohe'],
            ['Mercedes-Benz Masterton'],
            ['Toyota Levin'],
            ['Netflix Whakatane'],
            ['Cisco Feilding'],
            ['Oracle Rangiora'],
            ['NVIDIA Matamata'],
            ['HP Waiuku'],
            ['Dell Cambridge'],
            ['Lenovo Te Awamutu'],
            ['Uber Ashburton'],
            ['Lyft Queenstown'],
            ['Airbnb Rolleston'],
            ['Snapchat Warkworth'],
            ['Twitter Richmond'],
            ['LinkedIn Kerikeri'],
            ['Pinterest Cromwell'],
            ['eBay Wanaka'],
            ['PayPal Kaikoura'],
            ['Square Tokoroa'],
            ['Stripe Te Puke'],
            ['MasterCard Paeroa'],
            ['Visa Dargaville'],
            ['American Express Wairoa'],
            ['Goldman Sachs Thames'],
            ['JPMorgan Chase Opotiki'],
            ['Bank of America Helensville'],
            ['Wells Fargo Putaruru'],
            ['Citigroup Oamaru'],
            ['Morgan Stanley Foxton'],
            ['BlackRock Kaitaia'],
            ['Berkshire Hathaway Alexandra'],
            ['Allianz Balclutha'],
            ['AXA Greymouth'],
            ['AIG Westport'],
            ['Prudential Hokitika'],
            ['MetLife Whitianga'],
            ['Zurich Waihi'],
            ['Aflac Te Kuiti'],
            ['Manulife Huntly'],
            ['Travelers Waimate'],
            ['Chubb Kawerau'],
            ['Generali Winton'],
            ['T-Mobile Dannevirke'],
            ['Verizon Woodville'],
            ['AT&T Waipukurau'],
            ['Sprint Marton'],
            ['Deutsche Telekom Taihape'],
            ['Vodafone Pahiatua'],
            ['Orange Raetihi'],
            ['Telefonica Ohakune'],
            ['BT Group Turangi'],
            ['China Mobile Taumarunui'],
            ['SoftBank Stratford'],
            ['Ericsson Hawera'],
            ['Nokia Eltham'],
            ['Huawei Opunake'],
            ['Qualcomm Inglewood'],
            ['Xiaomi Waitara'],
            ['OnePlus Bell Block'],
            ['LG Manaia'],
            ['HTC Patea'],
            ['ZTE Waverley'],
            ['Panasonic Raglan'],
            ['Philips Morrinsville'],
            ['Toshiba Ngatea'],
            ['Sharp Te Aroha'],
            ['Mitsubishi Katikati'],
            ['Hitachi Tairua'],
            ['Fujitsu Paeroa'],
            ['Siemens Whangamata'],
            ['Bosch Te Kauwhata'],
            ['Honeywell Waihi Beach'],
            ['General Electric Omokoroa'],
            ['3M Te Anau'],
            ['Caterpillar Picton'],
            ['John Deere Motueka'],
            ['Komatsu Takaka'],
            ['Volvo Haast'],
            ['Ford Milford Sound'],
            ['War has changed'],
            ['Kept you waiting, huh?'],
            ['I’m no hero. Never was. Never will be.'],
            ['The world has room for only one big boss!'],
            ['You’re pretty good.'],
            ['Snake? SNAKE? SNAAAAKE!'],
            ['A strong man doesn’t need to read the future. He makes his own.'],
            ['Building the future and keeping the past alive are one and the same thing.'],
            ['It’s not over yet!'],
            ['Unfortunately, killing is one of those things that gets easier the more you do it.'],
            ['I am the lightning. The rain transformed.'],
            ['We’re not just pawns in some simulation game, you know.'],
            ['Life’s end… isn’t it beautiful? It’s almost tragic.'],
            ['There’s no such thing as miracles or the supernatural. Only cutting-edge technology.'],
            ['You can’t fight nature, Jack.'],
            ['The world would be better off without Snakes.'],
            ['The moment you close your eyes on the battlefield is the moment you never open them again.'],
            ["Time to do some serious damage."],
            ["This is my kind of rain."],
            ["Hey, look! Rocket fuel."],
            ["Ooh, shiny."],
            ["Looks like I'm gonna have to kill these guys."],
            ["It's time to get serious."],
            ["This is not happening."],
            ["Houston, we have a problem."],
            ["Another day, another deathmatch."],
            ["Let's get down to business."],
            ["I ain't got time to bleed."],
            ["Oh, this is gonna be fun."],
            ["Hey, I remember this place."],
            ["They just keep coming."],
            ["I'm too young to die!"],
            ["Rest in pieces."],
            ["I didn't come here to lose."],
            ["I'll be back."],
            ["Hasta la vista, baby."],
            ["The future is not set. There is no fate but what we make for ourselves."],
            ["I know now why you cry, but it’s something I can never do."],
            ["Come with me if you want to live."],
            ["It's in your nature to destroy yourselves."],
            ["I need your clothes, your boots, and your motorcycle."],
            ["You just can't go around killing people!"],
            ["Are you afraid?"],
            ["I swear I will not kill anyone."],
        ];
    }

    public function callJavaToGetHash($s)
    {
        $output = [];
        exec('java -cp ' . __DIR__ . '/../src/ HashCode ' . escapeshellarg($s), $output);
        return $output[0];
    }
}
