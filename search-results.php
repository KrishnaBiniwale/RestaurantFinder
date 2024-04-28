<?php
require "config/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurant Finder | Search Results</title>
    <?php include "include-require/head.html" ?>
</head>

<body>
    <div id="page">
        <?php include "include-require/nav.php" ?>
        <div class="container mt-4">
            <div class="row justify-content-center" id="search-results">

                <div class="row text-center" id="results">
                    <?php if (!isset($_SESSION["favorites"]) || $_SESSION["favorites"] === "false"): ?>
                        <p class="fs-5" id="results-p"><em>Showing <strong><span id="numResults">0</span></strong> of
                                <strong><span id="totalResults">0</span></strong>
                                result(s) for "<span id="search-term"></span>"</em></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <script>

        var temp = {
            "businesses": [
                {
                    "id": "h1R2iKYdm2lwukzMJvJqDw",
                    "alias": "hangari-kalguksu-los-angeles-4",
                    "name": "Hangari Kalguksu",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/X_U65O9YnvMyb42h1BZ0JQ/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/hangari-kalguksu-los-angeles-4?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 2719,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "noodles",
                            "title": "Noodles"
                        }
                    ],
                    "rating": 4.4,
                    "coordinates": {
                        "latitude": 34.0628602582049,
                        "longitude": -118.297570301258
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "3470 W 6th St",
                        "address2": "Ste 9&10",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3470 W 6th St",
                            "Ste 9&10",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133882326",
                    "display_phone": "(213) 388-2326",
                    "distance": 4735.547276252909
                },
                {
                    "id": "0SerWqGwzNWpTA2RBLVdUg",
                    "alias": "sun-nong-dan-los-angeles-4",
                    "name": "Sun Nong Dan",
                    "image_url": "https://s3-media4.fl.yelpcdn.com/bphoto/wUy0EgDG0ocf-xgI0PpYvg/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/sun-nong-dan-los-angeles-4?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 2510,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        }
                    ],
                    "rating": 4.3,
                    "coordinates": {
                        "latitude": 34.06301163865852,
                        "longitude": -118.2975587054788
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$$",
                    "location": {
                        "address1": "3470 W 6th St",
                        "address2": "Ste 7",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3470 W 6th St",
                            "Ste 7",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133650303",
                    "display_phone": "(213) 365-0303",
                    "distance": 4751.814109683826
                },
                {
                    "id": "uzAbw27XQTXTivjgf2bN2w",
                    "alias": "han-bat-sul-lung-tang-los-angeles-2",
                    "name": "Han Bat Sul Lung Tang",
                    "image_url": "https://s3-media2.fl.yelpcdn.com/bphoto/YttPoxI3HwOSv5Y3hK_v-Q/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/han-bat-sul-lung-tang-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 2829,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        }
                    ],
                    "rating": 4.4,
                    "coordinates": {
                        "latitude": 34.06546312735243,
                        "longitude": -118.30961677418377
                    },
                    "transactions": [
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "4163 W 5th St",
                        "address2": "",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "4163 W 5th St",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133839499",
                    "display_phone": "(213) 383-9499",
                    "distance": 5344.167473040919
                },
                {
                    "id": "ifDisux3aAxV5LJOdWfZew",
                    "alias": "cafe-mukbang-los-angeles",
                    "name": "Cafe Mukbang",
                    "image_url": "https://s3-media2.fl.yelpcdn.com/bphoto/dFV3epzh6Du2FqkBNuf3OQ/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/cafe-mukbang-los-angeles?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 83,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "asianfusion",
                            "title": "Asian Fusion"
                        },
                        {
                            "alias": "japanese",
                            "title": "Japanese"
                        }
                    ],
                    "rating": 4.2,
                    "coordinates": {
                        "latitude": 34.02242,
                        "longitude": -118.2917
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "3619 S Vermont Ave",
                        "address2": null,
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90007",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3619 S Vermont Ave",
                            "Los Angeles, CA 90007"
                        ]
                    },
                    "phone": "+12132058961",
                    "display_phone": "(213) 205-8961",
                    "distance": 445.3459529025628
                },
                {
                    "id": "8RXJiao_twvDmzDAqwkw6w",
                    "alias": "kobunga-los-angeles-3",
                    "name": "KOBUNGA",
                    "image_url": "https://s3-media2.fl.yelpcdn.com/bphoto/y2LZonA6FEoquR_Bevs74w/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/kobunga-los-angeles-3?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 230,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "bbq",
                            "title": "Barbeque"
                        }
                    ],
                    "rating": 4.3,
                    "coordinates": {
                        "latitude": 34.025032,
                        "longitude": -118.285465
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "929 W Jefferson Blvd",
                        "address2": "Ste 1610",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90089",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "929 W Jefferson Blvd",
                            "Ste 1610",
                            "Los Angeles, CA 90089"
                        ]
                    },
                    "phone": "+12135365886",
                    "display_phone": "(213) 536-5886",
                    "distance": 457.13487064940256
                },
                {
                    "id": "3C2wUqSkpY4-N0O5ArVjwQ",
                    "alias": "yuk-dae-jang-los-angeles-2",
                    "name": "Yuk Dae Jang",
                    "image_url": "https://s3-media2.fl.yelpcdn.com/bphoto/5y-hXEjEBMMuGJFopTuvFQ/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/yuk-dae-jang-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 768,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "comfortfood",
                            "title": "Comfort Food"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        }
                    ],
                    "rating": 4.4,
                    "coordinates": {
                        "latitude": 34.0640411376953,
                        "longitude": -118.288063049316
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "3033 W 6th St",
                        "address2": "Ste 104-105",
                        "address3": null,
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3033 W 6th St",
                            "Ste 104-105",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133521331",
                    "display_phone": "(213) 352-1331",
                    "distance": 4768.931305192536
                },
                {
                    "id": "gdt3KaVt_KM0Mgwi69iMfw",
                    "alias": "dasom-by-chef-kang-los-angeles",
                    "name": "Dasom By Chef Kang",
                    "image_url": "https://s3-media2.fl.yelpcdn.com/bphoto/2C1QaOksmX7ENG9KEuUqVQ/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/dasom-by-chef-kang-los-angeles?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 34,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "comfortfood",
                            "title": "Comfort Food"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        }
                    ],
                    "rating": 4.9,
                    "coordinates": {
                        "latitude": 34.062128,
                        "longitude": -118.313381
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "location": {
                        "address1": "3959 Wilshire Blvd",
                        "address2": "",
                        "address3": null,
                        "city": "Los Angeles",
                        "zip_code": "90010",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3959 Wilshire Blvd",
                            "Los Angeles, CA 90010"
                        ]
                    },
                    "phone": "+12139086092",
                    "display_phone": "(213) 908-6092",
                    "distance": 5163.894540742515
                },
                {
                    "id": "1ZEUvoDlg7ixlwwlK2a3mQ",
                    "alias": "ha-sun-saeng-master-ha-los-angeles-2",
                    "name": "Ha Sun Saeng - Master Ha",
                    "image_url": "https://s3-media1.fl.yelpcdn.com/bphoto/onOiioaDsF9vO3IRN5aE6A/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/ha-sun-saeng-master-ha-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 581,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "raw_food",
                            "title": "Live/Raw Food"
                        },
                        {
                            "alias": "seafood",
                            "title": "Seafood"
                        }
                    ],
                    "rating": 4.4,
                    "coordinates": {
                        "latitude": 34.049642,
                        "longitude": -118.309526
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "1147 S Western Ave",
                        "address2": null,
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90006",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "1147 S Western Ave",
                            "Los Angeles, CA 90006"
                        ]
                    },
                    "phone": "+13239980427",
                    "display_phone": "(323) 998-0427",
                    "distance": 3774.817074334584
                },
                {
                    "id": "CcqraT0cuGKYEcZ1ri_kxg",
                    "alias": "broken-mouth-lees-homestyle-los-angeles-5",
                    "name": "BROKEN MOUTH | Lee's Homestyle",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/twffLdHV-fdV6OL4jmjAeg/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/broken-mouth-lees-homestyle-los-angeles-5?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 1860,
                    "categories": [
                        {
                            "alias": "hawaiian",
                            "title": "Hawaiian"
                        },
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "comfortfood",
                            "title": "Comfort Food"
                        }
                    ],
                    "rating": 4.8,
                    "coordinates": {
                        "latitude": 34.042734,
                        "longitude": -118.250779
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "718 S Los Angeles St",
                        "address2": null,
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90014",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "718 S Los Angeles St",
                            "Los Angeles, CA 90014"
                        ]
                    },
                    "phone": "+12134189588",
                    "display_phone": "(213) 418-9588",
                    "distance": 4112.590614242276
                },
                {
                    "id": "o8Y0SXqQuIC7HOWe45w8PQ",
                    "alias": "kingyubu-los-angeles",
                    "name": "Kingyubu",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/_qecvH_KsfBKn3Hj_p-OLA/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/kingyubu-los-angeles?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 78,
                    "categories": [
                        {
                            "alias": "sushi",
                            "title": "Sushi Bars"
                        },
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "bbq",
                            "title": "Barbeque"
                        }
                    ],
                    "rating": 4.8,
                    "coordinates": {
                        "latitude": 34.057451,
                        "longitude": -118.295235
                    },
                    "transactions": [],
                    "price": "$$",
                    "location": {
                        "address1": "3128 West 8th St",
                        "address2": null,
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90005",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3128 West 8th St",
                            "Los Angeles, CA 90005"
                        ]
                    },
                    "phone": "+12133780065",
                    "display_phone": "(213) 378-0065",
                    "distance": 4105.141926708466
                },
                {
                    "id": "svK6WXwRnTSORVkB33o3KA",
                    "alias": "yang-ban-sul-lung-tang-los-angeles",
                    "name": "Yang Ban Sul Lung Tang",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/X_ieFu07kZ3tG2eJQ8HzRw/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/yang-ban-sul-lung-tang-los-angeles?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 214,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        }
                    ],
                    "rating": 4.3,
                    "coordinates": {
                        "latitude": 34.03223,
                        "longitude": -118.25935
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$",
                    "location": {
                        "address1": "1515 Maple Ave",
                        "address2": "",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90015",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "1515 Maple Ave",
                            "Los Angeles, CA 90015"
                        ]
                    },
                    "phone": "+12134894640",
                    "display_phone": "(213) 489-4640",
                    "distance": 2819.349467023971
                },
                {
                    "id": "r6-usl4pPnuj9mlP-nEr_g",
                    "alias": "jinsol-gukbap-la-los-angeles-4",
                    "name": "Jinsol Gukbap La",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/IgEpQ9oj-PNs09DPUoK4vw/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/jinsol-gukbap-la-los-angeles-4?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 560,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        },
                        {
                            "alias": "bbq",
                            "title": "Barbeque"
                        }
                    ],
                    "rating": 4.5,
                    "coordinates": {
                        "latitude": 34.0691820399339,
                        "longitude": -118.301501308902
                    },
                    "transactions": [
                        "delivery"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "4031 W 3rd St",
                        "address2": "",
                        "address3": null,
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "4031 W 3rd St",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133650097",
                    "display_phone": "(213) 365-0097",
                    "distance": 5501.477566757995
                },
                {
                    "id": "TWHGJkTAbF22hvXeReQp9w",
                    "alias": "kobawoo-house-los-angeles-2",
                    "name": "Kobawoo House",
                    "image_url": "https://s3-media1.fl.yelpcdn.com/bphoto/_KhKAwhECb8xRW9O1Zx6GQ/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/kobawoo-house-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 1494,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        },
                        {
                            "alias": "seafood",
                            "title": "Seafood"
                        }
                    ],
                    "rating": 4.3,
                    "coordinates": {
                        "latitude": 34.06013289065783,
                        "longitude": -118.29101483970346
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "698 S Vermont Ave",
                        "address2": "Ste 109",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90005",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "698 S Vermont Ave",
                            "Ste 109",
                            "Los Angeles, CA 90005"
                        ]
                    },
                    "phone": "+12133897300",
                    "display_phone": "(213) 389-7300",
                    "distance": 4348.325886486068
                },
                {
                    "id": "X9hrLXF2lqbiA58jExIO2Q",
                    "alias": "lee-ga-los-angeles-2",
                    "name": "LEE GA",
                    "image_url": "https://s3-media4.fl.yelpcdn.com/bphoto/UsjEazXB4V6Y7EY4a0ZJEw/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/lee-ga-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 235,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "soup",
                            "title": "Soup"
                        },
                        {
                            "alias": "noodles",
                            "title": "Noodles"
                        }
                    ],
                    "rating": 4.5,
                    "coordinates": {
                        "latitude": 34.060202872158634,
                        "longitude": -118.29109645639656
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "698 S Vermont Ave",
                        "address2": "Ste 106",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90005",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "698 S Vermont Ave",
                            "Ste 106",
                            "Los Angeles, CA 90005"
                        ]
                    },
                    "phone": "+12136747288",
                    "display_phone": "(213) 674-7288",
                    "distance": 4356.70520121196
                },
                {
                    "id": "9X4Ie-oy8DbweZYjojt1ig",
                    "alias": "jinsol-gukbap-8th-los-angeles-2",
                    "name": "Jinsol Gukbap 8th",
                    "image_url": "https://s3-media4.fl.yelpcdn.com/bphoto/7DYWsvnM8IJr_Tqe4SjNKg/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/jinsol-gukbap-8th-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 77,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        }
                    ],
                    "rating": 4.6,
                    "coordinates": {
                        "latitude": 34.057516,
                        "longitude": -118.304501
                    },
                    "transactions": [],
                    "price": "$$",
                    "location": {
                        "address1": "3428 W 8th St",
                        "address2": null,
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90005",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3428 W 8th St",
                            "Los Angeles, CA 90005"
                        ]
                    },
                    "phone": "+12133757188",
                    "display_phone": "(213) 375-7188",
                    "distance": 4346.5567586523275
                },
                {
                    "id": "Dnn4_XmzQxOFNpnqh7KyWg",
                    "alias": "seong-buk-dong-los-angeles",
                    "name": "Seong Buk Dong",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/f4mko6apjVjPQ5MTJgcR-w/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/seong-buk-dong-los-angeles?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 1308,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        }
                    ],
                    "rating": 4.1,
                    "coordinates": {
                        "latitude": 34.0637349,
                        "longitude": -118.2943728
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "3303 W 6th St",
                        "address2": "",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3303 W 6th St",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12137388977",
                    "display_phone": "(213) 738-8977",
                    "distance": 4811.47986133463
                },
                {
                    "id": "WO12S4gvOYkYF8_70RWrQA",
                    "alias": "haneuem-los-angeles-3",
                    "name": "HanEuem",
                    "image_url": "https://s3-media1.fl.yelpcdn.com/bphoto/XeHd3Q-Yt-vx34Ivc1iqJg/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/haneuem-los-angeles-3?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 271,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "comfortfood",
                            "title": "Comfort Food"
                        },
                        {
                            "alias": "gastropubs",
                            "title": "Gastropubs"
                        }
                    ],
                    "rating": 4.5,
                    "coordinates": {
                        "latitude": 34.064166,
                        "longitude": -118.309516
                    },
                    "transactions": [
                        "delivery",
                        "pickup"
                    ],
                    "price": "$$$",
                    "location": {
                        "address1": "539 S Western Ave",
                        "address2": "",
                        "address3": null,
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "539 S Western Ave",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133888988",
                    "display_phone": "(213) 388-8988",
                    "distance": 5208.486151145411
                },
                {
                    "id": "edhKYvJvIFgfREnUFewxiw",
                    "alias": "sytk-sullungtang-los-angeles-3",
                    "name": "SYTK Sullungtang",
                    "image_url": "https://s3-media1.fl.yelpcdn.com/bphoto/sYUNSTDn6qFdSqtpOJI2Cw/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/sytk-sullungtang-los-angeles-3?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 158,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        }
                    ],
                    "rating": 4.8,
                    "coordinates": {
                        "latitude": 34.053109,
                        "longitude": -118.292327
                    },
                    "transactions": [],
                    "price": "$$",
                    "location": {
                        "address1": "2717 W Olympic Blvd",
                        "address2": "Ste 108",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90006",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "2717 W Olympic Blvd",
                            "Ste 108",
                            "Los Angeles, CA 90006"
                        ]
                    },
                    "phone": "+12132771339",
                    "display_phone": "(213) 277-1339",
                    "distance": 3584.710264247757
                },
                {
                    "id": "9FuxqbYXM0vaPnzrQ7B_qQ",
                    "alias": "soowon-galbi-kbbq-restaurant-los-angeles-2",
                    "name": "Soowon Galbi KBBQ Restaurant",
                    "image_url": "https://s3-media1.fl.yelpcdn.com/bphoto/0GkZ8e0y5wAXRlWJJcEYLA/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/soowon-galbi-kbbq-restaurant-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 2898,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "bbq",
                            "title": "Barbeque"
                        }
                    ],
                    "rating": 4.3,
                    "coordinates": {
                        "latitude": 34.056448,
                        "longitude": -118.291342
                    },
                    "transactions": [
                        "delivery"
                    ],
                    "price": "$$",
                    "location": {
                        "address1": "856 S Vermont Ave",
                        "address2": "Ste C",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90005",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "856 S Vermont Ave",
                            "Ste C",
                            "Los Angeles, CA 90005"
                        ]
                    },
                    "phone": "+12133659292",
                    "display_phone": "(213) 365-9292",
                    "distance": 3939.9011433733053
                },
                {
                    "id": "PX8INO1KIEn9kLGKQz8U-w",
                    "alias": "ham-ji-park-los-angeles-2",
                    "name": "Ham Ji Park",
                    "image_url": "https://s3-media3.fl.yelpcdn.com/bphoto/Gu8ugRbZxm2Jdx817iCj2Q/o.jpg",
                    "is_closed": false,
                    "url": "https://www.yelp.com/biz/ham-ji-park-los-angeles-2?adjust_creative=KqRILOEZ0b0f_Aw5uxQBmA&utm_campaign=yelp_api_v3&utm_medium=api_v3_business_search&utm_source=KqRILOEZ0b0f_Aw5uxQBmA",
                    "review_count": 1708,
                    "categories": [
                        {
                            "alias": "korean",
                            "title": "Korean"
                        },
                        {
                            "alias": "bbq",
                            "title": "Barbeque"
                        }
                    ],
                    "rating": 4.2,
                    "coordinates": {
                        "latitude": 34.063757,
                        "longitude": -118.295838
                    },
                    "transactions": [
                        "delivery"
                    ],
                    "price": "$$$",
                    "location": {
                        "address1": "3407 W 6th St",
                        "address2": "Ste 101C",
                        "address3": "",
                        "city": "Los Angeles",
                        "zip_code": "90020",
                        "country": "US",
                        "state": "CA",
                        "display_address": [
                            "3407 W 6th St",
                            "Ste 101C",
                            "Los Angeles, CA 90020"
                        ]
                    },
                    "phone": "+12133658773",
                    "display_phone": "(213) 365-8773",
                    "distance": 4804.009400634135
                }
            ],
            "total": 991,
            "region": {
                "center": {
                    "longitude": -118.287132,
                    "latitude": 34.02116
                }
            }
        };
        // Function to get URL parameters and decode them
        function getURLParams() {
            const urlParams = new URLSearchParams(window.location.search);
            const params = {};
            for (const [key, value] of urlParams) {
                params[key] = decodeURIComponent(value);
            }
            return params;
        }

        function displayFavorites() {
            $.ajax({
                type: "POST",
                url: "get-favorites.php",
                success: function (response) {
                    let restaurants = JSON.parse(response);
                    displayRestaurants(restaurants);
                }
            });
        }

        $(document).ready(function () {
            <?php if ($_SESSION['favorites'] === "true"): ?>
                displayFavorites();
            <?php else: ?>
                let params = getURLParams();
                // Base URL of the search endpoint
                let baseURL = "https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search";

                // Construct the query URL using object literals and template literals
                let queryURL = `${baseURL}?${Object.keys(params).map(key => `${key}=${encodeURIComponent(params[key])}`).join('&')}`;
                let apiKey = "KsGd36gXbL3rlu3rd-ivS-Tlev_TS4iilgg1DmoGmIYEyEAJYJiVlfH9U6NAxHdTPmS6TdaFk3Wd_dOSLV5QnIpwuG2NyiNngMPHETdidSLzw2TyCL_QKRqc5_Q6ZXYx";
                fetch(queryURL, {
                    method: "GET",
                    headers: {
                        "accept": "application/json",
                        "x-requested-with": "xmlhttprequest",
                        "Access-Control-Allow-Origin": "*",
                        "Authorization": `Bearer ${apiKey}`
                    }
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(result => {
                        document.getElementById('search-term').innerHTML = params['restaurant-name'];
                        displayRestaurants(result);
                    })
                    .catch(error => {
                        window.open("https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search");
                        alert("Return to Home to Search");
                    });
            <?php endif; ?>
        });


        function displayRestaurants(result) {
            removeAll();
            // Acquires the restaurant
            let restaurants;
            if (result['businesses']) {
                restaurants = result["businesses"];
            }
            else if (Array.isArray(result)) {
                restaurants = result;
            }
            else {
                restaurants = [];
                restaurants[0] = result;
            }

            // Adds restaurants to database
            <?php if (!isset($_SESSION['favorites']) || $_SESSION['favorites'] === "false"): ?>
                $.ajax({
                    type: "POST",
                    url: "add-restaurants.php",
                    data: { restaurants: JSON.stringify(restaurants) },
                    success: function (response) {
                    }
                });
            <?php endif; ?>
            for (let j = 0; j < restaurants.length; j++) {
                let restaurant = restaurants[j];
                if (restaurant["yelp_id"]) {
                    restaurant["id"] = restaurant["yelp_id"];
                    delete restaurant["yelp_id"];
                    restaurant["name"] = restaurant["restaurant_name"];
                    delete restaurant["restaurant_name"];
                }
                let restaurantContainer = document.createElement("div");
                restaurantContainer.classList.add("container", "col-lg-5", "col-lg-offset-1", "col-12", "restaurant", "border", "border-1", "border-dark-subtle", "rounded-5", "my-4");
                let leftCol = document.createElement("div");
                leftCol.classList.add("text-center", "col-lg-7", "col-12", "restaurant-left-col");

                let img = document.createElement("img");
                img.classList.add("img-fluid", "rounded-5");
                img.src = restaurant["image_url"];
                img.onerror = function () {
                    img.src = "https://www.healthifyme.com/blog/wp-content/uploads/2021/10/All-About-The-Right-Food-Plate-Method.jpg";
                };
                img.alt = restaurant["name"];
                leftCol.appendChild(img);

                let rightCol = document.createElement("div");
                rightCol.classList.add("col-lg-5", "col-12", "restaurant-right-col", "text-lg-left", "text-center", "text-lg-start");

                let restaurantName = document.createElement("div");
                restaurantName.classList.add("row", "pb-4", "restaurant-name", "text-center");
                let name = document.createElement("h4");
                name.classList.add("mt-3");
                name.innerHTML = restaurant["name"];
                restaurantName.appendChild(name);
                restaurantContainer.appendChild(restaurantName);

                let rating = document.createElement("h5");
                rating.classList.add("normal", "mt-4");
                rating.innerHTML = "Rating: " + restaurant["rating"];
                rightCol.appendChild(rating);

                let reviewCount = document.createElement("h5");
                reviewCount.classList.add("normal", "mt-4");
                reviewCount.innerHTML = "Review Count: " + restaurant["review_count"];
                rightCol.appendChild(reviewCount);

                let price = document.createElement("h5");
                price.classList.add("normal", "mt-4");
                price.innerHTML = "Price: " + restaurant["price"];
                rightCol.appendChild(price);

                let categoriesText = document.createElement("h5");
                categoriesText.classList.add("normal", "mt-4", "text-decoration-underline");
                categoriesText.innerHTML = "Categories";
                rightCol.appendChild(categoriesText);

                let categories = document.createElement("h5");
                categories.classList.add("normal");
                for (let i = 0; i < restaurant['categories'].length; i++) {
                    if (restaurant['categories'][i]['category_name']) {
                        restaurant['categories'][i]['title'] = restaurant['categories'][i]['category_name'];
                        delete restaurant['categories'][i]['category_name'];
                    }
                    categories.innerHTML += restaurant['categories'][i]['title'] + ", ";
                }
                categories.innerHTML = categories.innerHTML.slice(0, -2);
                rightCol.appendChild(categories);

                let addToFavoritesWrapper = document.createElement("div");
                addToFavoritesWrapper.classList.add("hidden", "add-to-favorites");
                let alert = document.createElement("div");
                alert.classList.add("alert", "alert-primary", "hidden", "mt-4");
                alert.role = "alert";
                let addToFavoritesButton = document.createElement("button");
                addToFavoritesButton.classList.add("btn", "btn-success", "btn-lg", "col-12");
                //console.log(restaurant);
                $.ajax({
                    type: "POST",
                    url: "add-favorite.php",
                    data: { yelp_id: restaurant["id"], add: false },
                    success: function (response) {
                        let result = JSON.parse(response);
                        if (result['code'] == 0) {
                            addToFavoritesButton.innerHTML = "Add to Favorites";
                        } else {
                            addToFavoritesButton.innerHTML = "Remove From Favorites";
                        }
                    }
                });
                addToFavoritesButton.innerHTML = "Add to Favorites";
                addToFavoritesButton.href = "favorites.php";
                addToFavoritesButton.addEventListener('click', function () {
                    event.stopPropagation();
                    event.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "add-favorite.php",
                        data: { yelp_id: restaurant["id"], add: true },
                        success: function (response) {
                            let result = JSON.parse(response);
                            alert.innerHTML = result['message'];
                            changeAlert(alert, result['code']);
                        }
                    });
                });
                addToFavoritesWrapper.appendChild(addToFavoritesButton);
                addToFavoritesWrapper.appendChild(alert);

                let restaurantInfo = document.createElement("div");
                restaurantInfo.classList.add("row", "pb-4");
                restaurantInfo.appendChild(leftCol);
                restaurantInfo.appendChild(rightCol);
                restaurantInfo.appendChild(addToFavoritesWrapper);
                restaurantContainer.appendChild(restaurantInfo);
                restaurantContainer.addEventListener('click', function () {
                    expandInfo(restaurantContainer, restaurant);
                });

                let searchResults = document.getElementById("search-results");
                searchResults.appendChild(restaurantContainer);
            }

            // Displays # of results and shows/hides appropriate information
            <?php if (!isset($_SESSION['favorites']) || $_SESSION['favorites'] === "false"): ?>
                let resultsP = document.getElementById("results-p");
                let navigation = document.getElementById("navigation");
                let numResults = document.getElementById("numResults");
                numResults.innerHTML = restaurants.length;
                let totalResults = document.getElementById("totalResults");
                totalResults.innerHTML = result['total'];
            <?php endif; ?>
            let restaurantContainers = document.querySelectorAll('.restaurant');
            for (let k = 0; k < restaurantContainers.length; k++) {
                restaurantContainers[k].classList.add("hover");
            }
        }

        // Changes alert based on whether it was successful
        function changeAlert(alert, code) {
            if (code == 1) {
                alert.classList.add("alert-primary");
                alert.classList.remove("alert-warning");
                alert.classList.remove("alert-danger");
            }
            else if (code == 2) {
                alert.classList.remove("alert-primary");
                alert.classList.add("alert-warning");
                alert.classList.remove("alert-danger");
            }
            else if (code == 3 || code == 4) {
                alert.classList.remove("alert-primary");
                alert.classList.remove("alert-warning");
                alert.classList.add("alert-danger");
            }
            alert.classList.remove("hidden");
        }

        // Expands and retracts additional restaurant information
        function expandInfo(restaurantContainer, restaurant) {

            let expanded = false;
            if (restaurantContainer.classList.contains("col-lg-11")) {
                expanded = true;
            }


            // Determines whether a container expands left or right
            let rightContainer = getContainerPosition(restaurantContainer) || restaurantContainer.classList.contains("right-container");
            let leftCol = restaurantContainer.querySelector('div.restaurant-left-col');
            let rightCol = restaurantContainer.querySelector('div.restaurant-right-col');
            let addToFavorites = restaurantContainer.querySelector('div.add-to-favorites');
            let restaurantName = restaurantContainer.querySelector('div.restaurant-name');
            if (!expanded) {
                restaurantContainer.classList.add("col-lg-11", "expanded");
                leftCol.classList.remove("col-lg-7");
                leftCol.classList.add("col-lg-3");
                rightCol.classList.remove("col-lg-5");
                rightCol.classList.add("col-lg-3");
                addToFavorites.classList.remove("hidden");
                addToFavorites.classList.add("col-lg-5", "col-12", "mt-3", "col-lg-offset-1");
                restaurantName.classList.add("col-lg-6");
            }
            else {
                restaurantContainer.querySelector("div.alert").classList.add("hidden");
                restaurantContainer.classList.remove("col-lg-11", "expanded");
                leftCol.classList.add("col-lg-7");
                leftCol.classList.remove("col-lg-3");
                rightCol.classList.add("col-lg-5");
                rightCol.classList.remove("col-lg-3");
                addToFavorites.classList.add("hidden");
                addToFavorites.classList.remove("col-lg-6", "col-12", "mt-3", "me-3");
                restaurantName.classList.remove("col-lg-6");
            }
            if (window.innerWidth > 992) {
                swapAllContainers(restaurantContainer, rightContainer, expanded);
            }
        }


        function swapAllContainers(restaurantContainer, rightContainer, expanded) {
            let j = 0;
            if (rightContainer && expanded) {
                j++;
            }
            let containersBelow = false;
            for (let i = 0; i < restaurantContainer.parentNode.children.length; i++) {
                if (containersBelow) {
                    if (j % 2 && restaurantContainer.parentNode.children[i - 1] != restaurantContainer) {
                        swapContainers(restaurantContainer.parentNode.children[i - 1], restaurantContainer.parentNode.children[i]);
                    }
                    j++;
                } else if (restaurantContainer.parentNode.children[i] == restaurantContainer) {
                    containersBelow = true;
                }
            }

            if (rightContainer) {
                if (!expanded) {
                    swapContainers(restaurantContainer.previousElementSibling, restaurantContainer);
                    restaurantContainer.classList.add("right-container");
                } else {
                    swapContainers(restaurantContainer, restaurantContainer.nextElementSibling);
                    restaurantContainer.classList.remove("right-container");
                }
            }

            // Scroll to appropriate position
            let newItemTop = restaurantContainer.getBoundingClientRect().top;
            let newItemBottom = restaurantContainer.getBoundingClientRect().bottom;
            if (newItemTop < 0) {
                window.scrollTo({
                    top: newItemTop + window.pageYOffset,
                    left: 0,
                    behavior: 'instant',
                });
            } else if (newItemBottom > window.innerHeight) {
                window.scrollTo({
                    top: newItemBottom + window.pageYOffset - window.innerHeight,
                    left: 0,
                    behavior: 'instant',
                });
            }

        }

        function swapContainers(containerOriginal, containerInsert) {
            containerOriginal.parentNode.insertBefore(containerInsert, containerOriginal);
        }


        function getContainerPosition(restaurantContainer) {
            let restaurantDivs = document.querySelectorAll('div.restaurant');
            let index = 0;
            for (let i = 0; i < restaurantDivs.length; i++) {
                if (restaurantDivs[i] === restaurantContainer) {
                    break;
                }
                else if (!restaurantDivs[i].classList.contains("expanded")) {
                    index++;
                }
            }
            return index % 2;
        }


        function removeAll() {

            let restaurants = document.querySelectorAll('.restaurant');
            for (let i = 0; i < restaurants.length; i++) {
                restaurants[i].parentNode.removeChild(restaurants[i]);
            }

            let hr = document.querySelectorAll('hr');
            for (let i = 0; i < hr.length; i++) {
                hr[i].parentNode.removeChild(hr[i]);
            }
        }

    </script>
    <?php include "include-require/bootstrap.html" ?>
</body>

</html>