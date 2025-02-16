
<?php
$_dictionary = array(
	
		// Dashboard
		'dashboard' => [
			'en' => 'Dashboard',
			'mr' => 'डॅशबोर्ड',
		],

		// booking
		'book' => [
		'en' => "(Booking)",
		'mr' => 'बुकिंग',
	],
	// Completed
	'completed' => [
    'en' => '(Completed)',
    'mr' => 'पूर्ण झाले',
],

'requests' => [
    'en' => 'Requested Ride',
    'mr' => 'विनंत्या',
],
'ongoing_requests' => [
    'en' => 'Ongoing Rides',
    'mr' => 'चालू गाड्या',
],
'completed_requests' => [
    'en' => 'Completed Ride',
    'mr' => 'पूर्ण झालेल्या गाड्या',
],
'canceled_requests' => [
    'en' => 'Canceled Ride',
    'mr' => 'रद्द झालेल्या गाड्या',
],
'rental_rides' => [
    'en' => 'Rental Rides',
    'mr' => 'भाड्याने गाड्या',
],
'booking' => [
		'en' => "Booking Ride",
		'mr' => 'बुकिंग गाड्या',
	],
    'total_bookings' => [
		'en' => 'Total Bookings',
		'mr' => 'एकूण बुकिंग्स',
	],
	'yearly_bookings' => [
		'en' => 'Yearly Bookings',
		'mr' => 'वार्षिक बुकिंग्स',
	],
	'monthly_bookings' => [
		'en' => 'Monthly Bookings',
		'mr' => 'मासिक बुकिंग्स',
	],
	'daily_bookings' => [
		'en' => 'Daily Bookings',
		'mr' => 'दैनिक बुकिंग्स',
	],

    // Ride Requests
    'total_requests' => [
        'en' => 'Total Requests',
        'mr' => 'एकूण विनंत्या',
    ],
    'yearly_requests' => [
        'en' => 'Yearly Requests',
        'mr' => 'वार्षिक विनंत्या',
    ],
    'monthly_requests' => [
        'en' => 'Monthly Requests',
        'mr' => 'मासिक विनंत्या',
    ],
    'daily_requests' => [
        'en' => 'Daily Requests',
        'mr' => 'दैनिक विनंत्या',
    ],

    // Ongoing Rides
    'total_ongoing_rides' => [
        'en' => 'Total Ongoing Rides',
        'mr' => 'एकूण चालू गाड्या',
    ],
    'yearly_ongoing_rides' => [
        'en' => 'Yearly Ongoing Rides',
        'mr' => 'वार्षिक चालू गाड्या',
    ],
    'monthly_ongoing_rides' => [
        'en' => 'Monthly Ongoing Rides',
        'mr' => 'मासिक चालू गाड्या',
    ],
    'daily_ongoing_rides' => [
        'en' => 'Daily Ongoing Rides',
        'mr' => 'दैनिक चालू गाड्या',
    ],

    // Completed Rides
    'total_completed_rides' => [
        'en' => 'Total Completed Rides',
        'mr' => 'एकूण पूर्ण झालेल्या गाड्या',
    ],
    'yearly_completed_rides' => [
        'en' => 'Yearly Completed Rides',
        'mr' => 'वार्षिक पूर्ण झालेल्या गाड्या',
    ],
    'monthly_completed_rides' => [
        'en' => 'Monthly Completed Rides',
        'mr' => 'मासिक पूर्ण झालेल्या गाड्या',
    ],
    'daily_completed_rides' => [
        'en' => 'Daily Completed Rides',
        'mr' => 'दैनिक पूर्ण झालेल्या गाड्या',
    ],

    // Canceled Rides
    'total_canceled_rides' => [
        'en' => 'Total Canceled Rides',
        'mr' => 'एकूण रद्द झालेल्या गाड्या',
    ],
    'yearly_canceled_rides' => [
        'en' => 'Yearly Canceled Rides',
        'mr' => 'वार्षिक रद्द झालेल्या गाड्या',
    ],
    'monthly_canceled_rides' => [
        'en' => 'Monthly Canceled Rides',
        'mr' => 'मासिक रद्द झालेल्या गाड्या',
    ],
    'daily_canceled_rides' => [
        'en' => 'Daily Canceled Rides',
        'mr' => 'दैनिक रद्द झालेल्या गाड्या',
    ],

    // Rental Rides
    'total_rental_rides' => [
        'en' => 'Total Rental Rides',
        'mr' => 'एकूण भाड्याने गाड्या',
    ],
    'yearly_rental_rides' => [
        'en' => 'Yearly Rental Rides',
        'mr' => 'वार्षिक भाड्याने गाड्या',
    ],
    'monthly_rental_rides' => [
        'en' => 'Monthly Rental Rides',
        'mr' => 'मासिक भाड्याने गाड्या',
    ],
    'daily_rental_rides' => [
        'en' => 'Daily Rental Rides',
        'mr' => 'दैनिक भाड्याने गाड्या',
    ],



);
if (pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_FILENAME) === 'lang' && isset($_GET['js_lang'])) {
	$lang = (!empty($_GET['js_lang']) && in_array($_GET['js_lang'], ['en', 'mr'])) ? $_GET['js_lang'] : 'en';
	header("Content-Type: text/javascript; charset=UTF-8");
	$langs = [];
	foreach ($_dictionary as $title => $data) {
		$langs[$title] = $data[$lang];
	}
	echo 'const language_disctionary = '. json_encode($langs,  JSON_UNESCAPED_UNICODE);
}