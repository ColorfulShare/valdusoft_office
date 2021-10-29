<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Country;

class ContriesSedders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $arrayCountries = [
      [
        "id" => 1,
        "abbreviation" => "AF",
        "name" => "Afghanistan",
        "phoneCode" => 93
      ],
      [
        "id" => 2,
        "abbreviation" => "AL",
        "name" => "Albania",
        "phoneCode" => 355
      ],
      [
        "id" => 3,
        "abbreviation" => "DZ",
        "name" => "Algeria",
        "phoneCode" => 213
      ],
      [
        "id" => 4,
        "abbreviation" => "AS",
        "name" => "American Samoa",
        "phoneCode" => 1684
      ],
      [
        "id" => 5,
        "abbreviation" => "AD",
        "name" => "Andorra",
        "phoneCode" => 376
      ],
      [
        "id" => 6,
        "abbreviation" => "AO",
        "name" => "Angola",
        "phoneCode" => 244
      ],
      [
        "id" => 7,
        "abbreviation" => "AI",
        "name" => "Anguilla",
        "phoneCode" => 1264
      ],
      [
        "id" => 8,
        "abbreviation" => "AQ",
        "name" => "Antarctica",
        "phoneCode" => 0
      ],
      [
        "id" => 9,
        "abbreviation" => "AG",
        "name" => "Antigua And Barbuda",
        "phoneCode" => 1268
      ],
      [
        "id" => 10,
        "abbreviation" => "AR",
        "name" => "Argentina",
        "phoneCode" => 54
      ],
      [
        "id" => 11,
        "abbreviation" => "AM",
        "name" => "Armenia",
        "phoneCode" => 374
      ],
      [
        "id" => 12,
        "abbreviation" => "AW",
        "name" => "Aruba",
        "phoneCode" => 297
      ],
      [
        "id" => 13,
        "abbreviation" => "AU",
        "name" => "Australia",
        "phoneCode" => 61
      ],
      [
        "id" => 14,
        "abbreviation" => "AT",
        "name" => "Austria",
        "phoneCode" => 43
      ],
      [
        "id" => 15,
        "abbreviation" => "AZ",
        "name" => "Azerbaijan",
        "phoneCode" => 994
      ],
      [
        "id" => 16,
        "abbreviation" => "BS",
        "name" => "Bahamas The",
        "phoneCode" => 1242
      ],
      [
        "id" => 17,
        "abbreviation" => "BH",
        "name" => "Bahrain",
        "phoneCode" => 973
      ],
      [
        "id" => 18,
        "abbreviation" => "BD",
        "name" => "Bangladesh",
        "phoneCode" => 880
      ],
      [
        "id" => 19,
        "abbreviation" => "BB",
        "name" => "Barbados",
        "phoneCode" => 1246
      ],
      [
        "id" => 20,
        "abbreviation" => "BY",
        "name" => "Belarus",
        "phoneCode" => 375
      ],
      [
        "id" => 21,
        "abbreviation" => "BE",
        "name" => "Belgium",
        "phoneCode" => 32
      ],
      [
        "id" => 22,
        "abbreviation" => "BZ",
        "name" => "Belize",
        "phoneCode" => 501
      ],
      [
        "id" => 23,
        "abbreviation" => "BJ",
        "name" => "Benin",
        "phoneCode" => 229
      ],
      [
        "id" => 24,
        "abbreviation" => "BM",
        "name" => "Bermuda",
        "phoneCode" => 1441
      ],
      [
        "id" => 25,
        "abbreviation" => "BT",
        "name" => "Bhutan",
        "phoneCode" => 975
      ],
      [
        "id" => 26,
        "abbreviation" => "BO",
        "name" => "Bolivia",
        "phoneCode" => 591
      ],
      [
        "id" => 27,
        "abbreviation" => "BA",
        "name" => "Bosnia and Herzegovina",
        "phoneCode" => 387
      ],
      [
        "id" => 28,
        "abbreviation" => "BW",
        "name" => "Botswana",
        "phoneCode" => 267
      ],
      [
        "id" => 29,
        "abbreviation" => "BV",
        "name" => "Bouvet Island",
        "phoneCode" => 0
      ],
      [
        "id" => 30,
        "abbreviation" => "BR",
        "name" => "Brazil",
        "phoneCode" => 55
      ],
      [
        "id" => 31,
        "abbreviation" => "IO",
        "name" => "British Indian Ocean Territory",
        "phoneCode" => 246
      ],
      [
        "id" => 32,
        "abbreviation" => "BN",
        "name" => "Brunei",
        "phoneCode" => 673
      ],
      [
        "id" => 33,
        "abbreviation" => "BG",
        "name" => "Bulgaria",
        "phoneCode" => 359
      ],
      [
        "id" => 34,
        "abbreviation" => "BF",
        "name" => "Burkina Faso",
        "phoneCode" => 226
      ],
      [
        "id" => 35,
        "abbreviation" => "BI",
        "name" => "Burundi",
        "phoneCode" => 257
      ],
      [
        "id" => 36,
        "abbreviation" => "KH",
        "name" => "Cambodia",
        "phoneCode" => 855
      ],
      [
        "id" => 37,
        "abbreviation" => "CM",
        "name" => "Cameroon",
        "phoneCode" => 237
      ],
      [
        "id" => 38,
        "abbreviation" => "CA",
        "name" => "Canada",
        "phoneCode" => 1
      ],
      [
        "id" => 39,
        "abbreviation" => "CV",
        "name" => "Cape Verde",
        "phoneCode" => 238
      ],
      [
        "id" => 40,
        "abbreviation" => "KY",
        "name" => "Cayman Islands",
        "phoneCode" => 1345
      ],
      [
        "id" => 41,
        "abbreviation" => "CF",
        "name" => "Central African Republic",
        "phoneCode" => 236
      ],
      [
        "id" => 42,
        "abbreviation" => "TD",
        "name" => "Chad",
        "phoneCode" => 235
      ],
      [
        "id" => 43,
        "abbreviation" => "CL",
        "name" => "Chile",
        "phoneCode" => 56
      ],
      [
        "id" => 44,
        "abbreviation" => "CN",
        "name" => "China",
        "phoneCode" => 86
      ],
      [
        "id" => 45,
        "abbreviation" => "CX",
        "name" => "Christmas Island",
        "phoneCode" => 61
      ],
      [
        "id" => 46,
        "abbreviation" => "CC",
        "name" => "Cocos (Keeling) Islands",
        "phoneCode" => 672
      ],
      [
        "id" => 47,
        "abbreviation" => "CO",
        "name" => "Colombia",
        "phoneCode" => 57
      ],
      [
        "id" => 48,
        "abbreviation" => "KM",
        "name" => "Comoros",
        "phoneCode" => 269
      ],
      [
        "id" => 49,
        "abbreviation" => "CG",
        "name" => "Republic Of The Congo",
        "phoneCode" => 242
      ],
      [
        "id" => 50,
        "abbreviation" => "CD",
        "name" => "Democratic Republic Of The Congo",
        "phoneCode" => 242
      ],
      [
        "id" => 51,
        "abbreviation" => "CK",
        "name" => "Cook Islands",
        "phoneCode" => 682
      ],
      [
        "id" => 52,
        "abbreviation" => "CR",
        "name" => "Costa Rica",
        "phoneCode" => 506
      ],
      [
        "id" => 53,
        "abbreviation" => "CI",
        "name" => "Cote D''Ivoire (Ivory Coast)",
        "phoneCode" => 225
      ],
      [
        "id" => 54,
        "abbreviation" => "HR",
        "name" => "Croatia (Hrvatska)",
        "phoneCode" => 385
      ],
      [
        "id" => 55,
        "abbreviation" => "CU",
        "name" => "Cuba",
        "phoneCode" => 53
      ],
      [
        "id" => 56,
        "abbreviation" => "CY",
        "name" => "Cyprus",
        "phoneCode" => 357
      ],
      [
        "id" => 57,
        "abbreviation" => "CZ",
        "name" => "Czech Republic",
        "phoneCode" => 420
      ],
      [
        "id" => 58,
        "abbreviation" => "DK",
        "name" => "Denmark",
        "phoneCode" => 45
      ],
      [
        "id" => 59,
        "abbreviation" => "DJ",
        "name" => "Djibouti",
        "phoneCode" => 253
      ],
      [
        "id" => 60,
        "abbreviation" => "DM",
        "name" => "Dominica",
        "phoneCode" => 1767
      ],
      [
        "id" => 61,
        "abbreviation" => "DO",
        "name" => "Dominican Republic",
        "phoneCode" => 1809
      ],
      [
        "id" => 62,
        "abbreviation" => "TP",
        "name" => "East Timor",
        "phoneCode" => 670
      ],
      [
        "id" => 63,
        "abbreviation" => "EC",
        "name" => "Ecuador",
        "phoneCode" => 593
      ],
      [
        "id" => 64,
        "abbreviation" => "EG",
        "name" => "Egypt",
        "phoneCode" => 20
      ],
      [
        "id" => 65,
        "abbreviation" => "SV",
        "name" => "El Salvador",
        "phoneCode" => 503
      ],
      [
        "id" => 66,
        "abbreviation" => "GQ",
        "name" => "Equatorial Guinea",
        "phoneCode" => 240
      ],
      [
        "id" => 67,
        "abbreviation" => "ER",
        "name" => "Eritrea",
        "phoneCode" => 291
      ],
      [
        "id" => 68,
        "abbreviation" => "EE",
        "name" => "Estonia",
        "phoneCode" => 372
      ],
      [
        "id" => 69,
        "abbreviation" => "ET",
        "name" => "Ethiopia",
        "phoneCode" => 251
      ],
      [
        "id" => 70,
        "abbreviation" => "XA",
        "name" => "External Territories of Australia",
        "phoneCode" => 61
      ],
      [
        "id" => 71,
        "abbreviation" => "FK",
        "name" => "Falkland Islands",
        "phoneCode" => 500
      ],
      [
        "id" => 72,
        "abbreviation" => "FO",
        "name" => "Faroe Islands",
        "phoneCode" => 298
      ],
      [
        "id" => 73,
        "abbreviation" => "FJ",
        "name" => "Fiji Islands",
        "phoneCode" => 679
      ],
      [
        "id" => 74,
        "abbreviation" => "FI",
        "name" => "Finland",
        "phoneCode" => 358
      ],
      [
        "id" => 75,
        "abbreviation" => "FR",
        "name" => "France",
        "phoneCode" => 33
      ],
      [
        "id" => 76,
        "abbreviation" => "GF",
        "name" => "French Guiana",
        "phoneCode" => 594
      ],
      [
        "id" => 77,
        "abbreviation" => "PF",
        "name" => "French Polynesia",
        "phoneCode" => 689
      ],
      [
        "id" => 78,
        "abbreviation" => "TF",
        "name" => "French Southern Territories",
        "phoneCode" => 0
      ],
      [
        "id" => 79,
        "abbreviation" => "GA",
        "name" => "Gabon",
        "phoneCode" => 241
      ],
      [
        "id" => 80,
        "abbreviation" => "GM",
        "name" => "Gambia The",
        "phoneCode" => 220
      ],
      [
        "id" => 81,
        "abbreviation" => "GE",
        "name" => "Georgia",
        "phoneCode" => 995
      ],
      [
        "id" => 82,
        "abbreviation" => "DE",
        "name" => "Germany",
        "phoneCode" => 49
      ],
      [
        "id" => 83,
        "abbreviation" => "GH",
        "name" => "Ghana",
        "phoneCode" => 233
      ],
      [
        "id" => 84,
        "abbreviation" => "GI",
        "name" => "Gibraltar",
        "phoneCode" => 350
      ],
      [
        "id" => 85,
        "abbreviation" => "GR",
        "name" => "Greece",
        "phoneCode" => 30
      ],
      [
        "id" => 86,
        "abbreviation" => "GL",
        "name" => "Greenland",
        "phoneCode" => 299
      ],
      [
        "id" => 87,
        "abbreviation" => "GD",
        "name" => "Grenada",
        "phoneCode" => 1473
      ],
      [
        "id" => 88,
        "abbreviation" => "GP",
        "name" => "Guadeloupe",
        "phoneCode" => 590
      ],
      [
        "id" => 89,
        "abbreviation" => "GU",
        "name" => "Guam",
        "phoneCode" => 1671
      ],
      [
        "id" => 90,
        "abbreviation" => "GT",
        "name" => "Guatemala",
        "phoneCode" => 502
      ],
      [
        "id" => 91,
        "abbreviation" => "XU",
        "name" => "Guernsey and Alderney",
        "phoneCode" => 44
      ],
      [
        "id" => 92,
        "abbreviation" => "GN",
        "name" => "Guinea",
        "phoneCode" => 224
      ],
      [
        "id" => 93,
        "abbreviation" => "GW",
        "name" => "Guinea-Bissau",
        "phoneCode" => 245
      ],
      [
        "id" => 94,
        "abbreviation" => "GY",
        "name" => "Guyana",
        "phoneCode" => 592
      ],
      [
        "id" => 95,
        "abbreviation" => "HT",
        "name" => "Haiti",
        "phoneCode" => 509
      ],
      [
        "id" => 96,
        "abbreviation" => "HM",
        "name" => "Heard and McDonald Islands",
        "phoneCode" => 0
      ],
      [
        "id" => 97,
        "abbreviation" => "HN",
        "name" => "Honduras",
        "phoneCode" => 504
      ],
      [
        "id" => 98,
        "abbreviation" => "HK",
        "name" => "Hong Kong S.A.R.",
        "phoneCode" => 852
      ],
      [
        "id" => 99,
        "abbreviation" => "HU",
        "name" => "Hungary",
        "phoneCode" => 36
      ],
      [
        "id" => 100,
        "abbreviation" => "IS",
        "name" => "Iceland",
        "phoneCode" => 354
      ],
      [
        "id" => 101,
        "abbreviation" => "IN",
        "name" => "India",
        "phoneCode" => 91
      ],
      [
        "id" => 102,
        "abbreviation" => "ID",
        "name" => "Indonesia",
        "phoneCode" => 62
      ],
      [
        "id" => 103,
        "abbreviation" => "IR",
        "name" => "Iran",
        "phoneCode" => 98
      ],
      [
        "id" => 104,
        "abbreviation" => "IQ",
        "name" => "Iraq",
        "phoneCode" => 964
      ],
      [
        "id" => 105,
        "abbreviation" => "IE",
        "name" => "Ireland",
        "phoneCode" => 353
      ],
      [
        "id" => 106,
        "abbreviation" => "IL",
        "name" => "Israel",
        "phoneCode" => 972
      ],
      [
        "id" => 107,
        "abbreviation" => "IT",
        "name" => "Italy",
        "phoneCode" => 39
      ],
      [
        "id" => 108,
        "abbreviation" => "JM",
        "name" => "Jamaica",
        "phoneCode" => 1876
      ],
      [
        "id" => 109,
        "abbreviation" => "JP",
        "name" => "Japan",
        "phoneCode" => 81
      ],
      [
        "id" => 110,
        "abbreviation" => "XJ",
        "name" => "Jersey",
        "phoneCode" => 44
      ],
      [
        "id" => 111,
        "abbreviation" => "JO",
        "name" => "Jordan",
        "phoneCode" => 962
      ],
      [
        "id" => 112,
        "abbreviation" => "KZ",
        "name" => "Kazakhstan",
        "phoneCode" => 7
      ],
      [
        "id" => 113,
        "abbreviation" => "KE",
        "name" => "Kenya",
        "phoneCode" => 254
      ],
      [
        "id" => 114,
        "abbreviation" => "KI",
        "name" => "Kiribati",
        "phoneCode" => 686
      ],
      [
        "id" => 115,
        "abbreviation" => "KP",
        "name" => "Korea North",
        "phoneCode" => 850
      ],
      [
        "id" => 116,
        "abbreviation" => "KR",
        "name" => "Korea South",
        "phoneCode" => 82
      ],
      [
        "id" => 117,
        "abbreviation" => "KW",
        "name" => "Kuwait",
        "phoneCode" => 965
      ],
      [
        "id" => 118,
        "abbreviation" => "KG",
        "name" => "Kyrgyzstan",
        "phoneCode" => 996
      ],
      [
        "id" => 119,
        "abbreviation" => "LA",
        "name" => "Laos",
        "phoneCode" => 856
      ],
      [
        "id" => 120,
        "abbreviation" => "LV",
        "name" => "Latvia",
        "phoneCode" => 371
      ],
      [
        "id" => 121,
        "abbreviation" => "LB",
        "name" => "Lebanon",
        "phoneCode" => 961
      ],
      [
        "id" => 122,
        "abbreviation" => "LS",
        "name" => "Lesotho",
        "phoneCode" => 266
      ],
      [
        "id" => 123,
        "abbreviation" => "LR",
        "name" => "Liberia",
        "phoneCode" => 231
      ],
      [
        "id" => 124,
        "abbreviation" => "LY",
        "name" => "Libya",
        "phoneCode" => 218
      ],
      [
        "id" => 125,
        "abbreviation" => "LI",
        "name" => "Liechtenstein",
        "phoneCode" => 423
      ],
      [
        "id" => 126,
        "abbreviation" => "LT",
        "name" => "Lithuania",
        "phoneCode" => 370
      ],
      [
        "id" => 127,
        "abbreviation" => "LU",
        "name" => "Luxembourg",
        "phoneCode" => 352
      ],
      [
        "id" => 128,
        "abbreviation" => "MO",
        "name" => "Macau S.A.R.",
        "phoneCode" => 853
      ],
      [
        "id" => 129,
        "abbreviation" => "MK",
        "name" => "Macedonia",
        "phoneCode" => 389
      ],
      [
        "id" => 130,
        "abbreviation" => "MG",
        "name" => "Madagascar",
        "phoneCode" => 261
      ],
      [
        "id" => 131,
        "abbreviation" => "MW",
        "name" => "Malawi",
        "phoneCode" => 265
      ],
      [
        "id" => 132,
        "abbreviation" => "MY",
        "name" => "Malaysia",
        "phoneCode" => 60
      ],
      [
        "id" => 133,
        "abbreviation" => "MV",
        "name" => "Maldives",
        "phoneCode" => 960
      ],
      [
        "id" => 134,
        "abbreviation" => "ML",
        "name" => "Mali",
        "phoneCode" => 223
      ],
      [
        "id" => 135,
        "abbreviation" => "MT",
        "name" => "Malta",
        "phoneCode" => 356
      ],
      [
        "id" => 136,
        "abbreviation" => "XM",
        "name" => "Man (Isle of)",
        "phoneCode" => 44
      ],
      [
        "id" => 137,
        "abbreviation" => "MH",
        "name" => "Marshall Islands",
        "phoneCode" => 692
      ],
      [
        "id" => 138,
        "abbreviation" => "MQ",
        "name" => "Martinique",
        "phoneCode" => 596
      ],
      [
        "id" => 139,
        "abbreviation" => "MR",
        "name" => "Mauritania",
        "phoneCode" => 222
      ],
      [
        "id" => 140,
        "abbreviation" => "MU",
        "name" => "Mauritius",
        "phoneCode" => 230
      ],
      [
        "id" => 141,
        "abbreviation" => "YT",
        "name" => "Mayotte",
        "phoneCode" => 269
      ],
      [
        "id" => 142,
        "abbreviation" => "MX",
        "name" => "Mexico",
        "phoneCode" => 52
      ],
      [
        "id" => 143,
        "abbreviation" => "FM",
        "name" => "Micronesia",
        "phoneCode" => 691
      ],
      [
        "id" => 144,
        "abbreviation" => "MD",
        "name" => "Moldova",
        "phoneCode" => 373
      ],
      [
        "id" => 145,
        "abbreviation" => "MC",
        "name" => "Monaco",
        "phoneCode" => 377
      ],
      [
        "id" => 146,
        "abbreviation" => "MN",
        "name" => "Mongolia",
        "phoneCode" => 976
      ],
      [
        "id" => 147,
        "abbreviation" => "MS",
        "name" => "Montserrat",
        "phoneCode" => 1664
      ],
      [
        "id" => 148,
        "abbreviation" => "MA",
        "name" => "Morocco",
        "phoneCode" => 212
      ],
      [
        "id" => 149,
        "abbreviation" => "MZ",
        "name" => "Mozambique",
        "phoneCode" => 258
      ],
      [
        "id" => 150,
        "abbreviation" => "MM",
        "name" => "Myanmar",
        "phoneCode" => 95
      ],
      [
        "id" => 151,
        "abbreviation" => "NA",
        "name" => "Namibia",
        "phoneCode" => 264
      ],
      [
        "id" => 152,
        "abbreviation" => "NR",
        "name" => "Nauru",
        "phoneCode" => 674
      ],
      [
        "id" => 153,
        "abbreviation" => "NP",
        "name" => "Nepal",
        "phoneCode" => 977
      ],
      [
        "id" => 154,
        "abbreviation" => "AN",
        "name" => "Netherlands Antilles",
        "phoneCode" => 599
      ],
      [
        "id" => 155,
        "abbreviation" => "NL",
        "name" => "Netherlands The",
        "phoneCode" => 31
      ],
      [
        "id" => 156,
        "abbreviation" => "NC",
        "name" => "New Caledonia",
        "phoneCode" => 687
      ],
      [
        "id" => 157,
        "abbreviation" => "NZ",
        "name" => "New Zealand",
        "phoneCode" => 64
      ],
      [
        "id" => 158,
        "abbreviation" => "NI",
        "name" => "Nicaragua",
        "phoneCode" => 505
      ],
      [
        "id" => 159,
        "abbreviation" => "NE",
        "name" => "Niger",
        "phoneCode" => 227
      ],
      [
        "id" => 160,
        "abbreviation" => "NG",
        "name" => "Nigeria",
        "phoneCode" => 234
      ],
      [
        "id" => 161,
        "abbreviation" => "NU",
        "name" => "Niue",
        "phoneCode" => 683
      ],
      [
        "id" => 162,
        "abbreviation" => "NF",
        "name" => "Norfolk Island",
        "phoneCode" => 672
      ],
      [
        "id" => 163,
        "abbreviation" => "MP",
        "name" => "Northern Mariana Islands",
        "phoneCode" => 1670
      ],
      [
        "id" => 164,
        "abbreviation" => "NO",
        "name" => "Norway",
        "phoneCode" => 47
      ],
      [
        "id" => 165,
        "abbreviation" => "OM",
        "name" => "Oman",
        "phoneCode" => 968
      ],
      [
        "id" => 166,
        "abbreviation" => "PK",
        "name" => "Pakistan",
        "phoneCode" => 92
      ],
      [
        "id" => 167,
        "abbreviation" => "PW",
        "name" => "Palau",
        "phoneCode" => 680
      ],
      [
        "id" => 168,
        "abbreviation" => "PS",
        "name" => "Palestinian Territory Occupied",
        "phoneCode" => 970
      ],
      [
        "id" => 169,
        "abbreviation" => "PA",
        "name" => "Panama",
        "phoneCode" => 507
      ],
      [
        "id" => 170,
        "abbreviation" => "PG",
        "name" => "Papua new Guinea",
        "phoneCode" => 675
      ],
      [
        "id" => 171,
        "abbreviation" => "PY",
        "name" => "Paraguay",
        "phoneCode" => 595
      ],
      [
        "id" => 172,
        "abbreviation" => "PE",
        "name" => "Peru",
        "phoneCode" => 51
      ],
      [
        "id" => 173,
        "abbreviation" => "PH",
        "name" => "Philippines",
        "phoneCode" => 63
      ],
      [
        "id" => 174,
        "abbreviation" => "PN",
        "name" => "Pitcairn Island",
        "phoneCode" => 0
      ],
      [
        "id" => 175,
        "abbreviation" => "PL",
        "name" => "Poland",
        "phoneCode" => 48
      ],
      [
        "id" => 176,
        "abbreviation" => "PT",
        "name" => "Portugal",
        "phoneCode" => 351
      ],
      [
        "id" => 177,
        "abbreviation" => "PR",
        "name" => "Puerto Rico",
        "phoneCode" => 1787
      ],
      [
        "id" => 178,
        "abbreviation" => "QA",
        "name" => "Qatar",
        "phoneCode" => 974
      ],
      [
        "id" => 179,
        "abbreviation" => "RE",
        "name" => "Reunion",
        "phoneCode" => 262
      ],
      [
        "id" => 180,
        "abbreviation" => "RO",
        "name" => "Romania",
        "phoneCode" => 40
      ],
      [
        "id" => 181,
        "abbreviation" => "RU",
        "name" => "Russia",
        "phoneCode" => 70
      ],
      [
        "id" => 182,
        "abbreviation" => "RW",
        "name" => "Rwanda",
        "phoneCode" => 250
      ],
      [
        "id" => 183,
        "abbreviation" => "SH",
        "name" => "Saint Helena",
        "phoneCode" => 290
      ],
      [
        "id" => 184,
        "abbreviation" => "KN",
        "name" => "Saint Kitts And Nevis",
        "phoneCode" => 1869
      ],
      [
        "id" => 185,
        "abbreviation" => "LC",
        "name" => "Saint Lucia",
        "phoneCode" => 1758
      ],
      [
        "id" => 186,
        "abbreviation" => "PM",
        "name" => "Saint Pierre and Miquelon",
        "phoneCode" => 508
      ],
      [
        "id" => 187,
        "abbreviation" => "VC",
        "name" => "Saint Vincent And The Grenadines",
        "phoneCode" => 1784
      ],
      [
        "id" => 188,
        "abbreviation" => "WS",
        "name" => "Samoa",
        "phoneCode" => 684
      ],
      [
        "id" => 189,
        "abbreviation" => "SM",
        "name" => "San Marino",
        "phoneCode" => 378
      ],
      [
        "id" => 190,
        "abbreviation" => "ST",
        "name" => "Sao Tome and Principe",
        "phoneCode" => 239
      ],
      [
        "id" => 191,
        "abbreviation" => "SA",
        "name" => "Saudi Arabia",
        "phoneCode" => 966
      ],
      [
        "id" => 192,
        "abbreviation" => "SN",
        "name" => "Senegal",
        "phoneCode" => 221
      ],
      [
        "id" => 193,
        "abbreviation" => "RS",
        "name" => "Serbia",
        "phoneCode" => 381
      ],
      [
        "id" => 194,
        "abbreviation" => "SC",
        "name" => "Seychelles",
        "phoneCode" => 248
      ],
      [
        "id" => 195,
        "abbreviation" => "SL",
        "name" => "Sierra Leone",
        "phoneCode" => 232
      ],
      [
        "id" => 196,
        "abbreviation" => "SG",
        "name" => "Singapore",
        "phoneCode" => 65
      ],
      [
        "id" => 197,
        "abbreviation" => "SK",
        "name" => "Slovakia",
        "phoneCode" => 421
      ],
      [
        "id" => 198,
        "abbreviation" => "SI",
        "name" => "Slovenia",
        "phoneCode" => 386
      ],
      [
        "id" => 199,
        "abbreviation" => "XG",
        "name" => "Smaller Territories of the UK",
        "phoneCode" => 44
      ],
      [
        "id" => 200,
        "abbreviation" => "SB",
        "name" => "Solomon Islands",
        "phoneCode" => 677
      ],
      [
        "id" => 201,
        "abbreviation" => "SO",
        "name" => "Somalia",
        "phoneCode" => 252
      ],
      [
        "id" => 202,
        "abbreviation" => "ZA",
        "name" => "South Africa",
        "phoneCode" => 27
      ],
      [
        "id" => 203,
        "abbreviation" => "GS",
        "name" => "South Georgia",
        "phoneCode" => 0
      ],
      [
        "id" => 204,
        "abbreviation" => "SS",
        "name" => "South Sudan",
        "phoneCode" => 211
      ],
      [
        "id" => 205,
        "abbreviation" => "ES",
        "name" => "Spain",
        "phoneCode" => 34
      ],
      [
        "id" => 206,
        "abbreviation" => "LK",
        "name" => "Sri Lanka",
        "phoneCode" => 94
      ],
      [
        "id" => 207,
        "abbreviation" => "SD",
        "name" => "Sudan",
        "phoneCode" => 249
      ],
      [
        "id" => 208,
        "abbreviation" => "SR",
        "name" => "Suriname",
        "phoneCode" => 597
      ],
      [
        "id" => 209,
        "abbreviation" => "SJ",
        "name" => "Svalbard And Jan Mayen Islands",
        "phoneCode" => 47
      ],
      [
        "id" => 210,
        "abbreviation" => "SZ",
        "name" => "Swaziland",
        "phoneCode" => 268
      ],
      [
        "id" => 211,
        "abbreviation" => "SE",
        "name" => "Sweden",
        "phoneCode" => 46
      ],
      [
        "id" => 212,
        "abbreviation" => "CH",
        "name" => "Switzerland",
        "phoneCode" => 41
      ],
      [
        "id" => 213,
        "abbreviation" => "SY",
        "name" => "Syria",
        "phoneCode" => 963
      ],
      [
        "id" => 214,
        "abbreviation" => "TW",
        "name" => "Taiwan",
        "phoneCode" => 886
      ],
      [
        "id" => 215,
        "abbreviation" => "TJ",
        "name" => "Tajikistan",
        "phoneCode" => 992
      ],
      [
        "id" => 216,
        "abbreviation" => "TZ",
        "name" => "Tanzania",
        "phoneCode" => 255
      ],
      [
        "id" => 217,
        "abbreviation" => "TH",
        "name" => "Thailand",
        "phoneCode" => 66
      ],
      [
        "id" => 218,
        "abbreviation" => "TG",
        "name" => "Togo",
        "phoneCode" => 228
      ],
      [
        "id" => 219,
        "abbreviation" => "TK",
        "name" => "Tokelau",
        "phoneCode" => 690
      ],
      [
        "id" => 220,
        "abbreviation" => "TO",
        "name" => "Tonga",
        "phoneCode" => 676
      ],
      [
        "id" => 221,
        "abbreviation" => "TT",
        "name" => "Trinidad And Tobago",
        "phoneCode" => 1868
      ],
      [
        "id" => 222,
        "abbreviation" => "TN",
        "name" => "Tunisia",
        "phoneCode" => 216
      ],
      [
        "id" => 223,
        "abbreviation" => "TR",
        "name" => "Turkey",
        "phoneCode" => 90
      ],
      [
        "id" => 224,
        "abbreviation" => "TM",
        "name" => "Turkmenistan",
        "phoneCode" => 7370
      ],
      [
        "id" => 225,
        "abbreviation" => "TC",
        "name" => "Turks And Caicos Islands",
        "phoneCode" => 1649
      ],
      [
        "id" => 226,
        "abbreviation" => "TV",
        "name" => "Tuvalu",
        "phoneCode" => 688
      ],
      [
        "id" => 227,
        "abbreviation" => "UG",
        "name" => "Uganda",
        "phoneCode" => 256
      ],
      [
        "id" => 228,
        "abbreviation" => "UA",
        "name" => "Ukraine",
        "phoneCode" => 380
      ],
      [
        "id" => 229,
        "abbreviation" => "AE",
        "name" => "United Arab Emirates",
        "phoneCode" => 971
      ],
      [
        "id" => 230,
        "abbreviation" => "GB",
        "name" => "United Kingdom",
        "phoneCode" => 44
      ],
      [
        "id" => 231,
        "abbreviation" => "US",
        "name" => "United States",
        "phoneCode" => 1
      ],
      [
        "id" => 232,
        "abbreviation" => "UM",
        "name" => "United States Minor Outlying Islands",
        "phoneCode" => 1
      ],
      [
        "id" => 233,
        "abbreviation" => "UY",
        "name" => "Uruguay",
        "phoneCode" => 598
      ],
      [
        "id" => 234,
        "abbreviation" => "UZ",
        "name" => "Uzbekistan",
        "phoneCode" => 998
      ],
      [
        "id" => 235,
        "abbreviation" => "VU",
        "name" => "Vanuatu",
        "phoneCode" => 678
      ],
      [
        "id" => 236,
        "abbreviation" => "VA",
        "name" => "Vatican City State (Holy See)",
        "phoneCode" => 39
      ],
      [
        "id" => 237,
        "abbreviation" => "VE",
        "name" => "Venezuela",
        "phoneCode" => 58
      ],
      [
        "id" => 238,
        "abbreviation" => "VN",
        "name" => "Vietnam",
        "phoneCode" => 84
      ],
      [
        "id" => 239,
        "abbreviation" => "VG",
        "name" => "Virgin Islands (British)",
        "phoneCode" => 1284
      ],
      [
        "id" => 240,
        "abbreviation" => "VI",
        "name" => "Virgin Islands (US)",
        "phoneCode" => 1340
      ],
      [
        "id" => 241,
        "abbreviation" => "WF",
        "name" => "Wallis And Futuna Islands",
        "phoneCode" => 681
      ],
      [
        "id" => 242,
        "abbreviation" => "EH",
        "name" => "Western Sahara",
        "phoneCode" => 212
      ],
      [
        "id" => 243,
        "abbreviation" => "YE",
        "name" => "Yemen",
        "phoneCode" => 967
      ],
      [
        "id" => 244,
        "abbreviation" => "YU",
        "name" => "Yugoslavia",
        "phoneCode" => 38
      ],
      [
        "id" => 245,
        "abbreviation" => "ZM",
        "name" => "Zambia",
        "phoneCode" => 260
      ],
      [
        "id" => 246,
        "abbreviation" => "ZW",
        "name" => "Zimbabwe",
        "phoneCode" => 26
      ]
    ];

    foreach ($arrayCountries as $countries ) {
        Country::create($countries);
    }

    }
  
}

    
