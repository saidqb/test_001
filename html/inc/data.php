<?php 

$data['php_module'] = [
	'bz2',
	'calendar',
	'Core',
	'ctype',
	'curl',
	'date',
	'dom',
	'exif',
	'FFI',
	'fileinfo',
	'filter',
	'ftp',
	'gd',
	'gettext',
	'hash',
	'iconv',
	'json',
	'libxml',
	'mbstring',
	'mysqli',
	'mysqlnd',
	'openssl',
	'pcntl',
	'pcre',
	'PDO',
	'pdo_mysql',
	'Phar',
	'posix',
	'readline',
	'Reflection',
	'session',
	'shmop',
	'SimpleXML',
	'sockets',
	'sodium',
	'SPL',
	'standard',
	'sysvmsg',
	'sysvsem',
	'sysvshm',
	'tokenizer',
	'xml',
	'xmlreader',
	'xmlwriter',
	'xsl',
	'Zend OPcache',
	'zip',
	'zlib',
];
$data['featured_list'] = [
	'max execution time 300s',
	'max execution time 300s',
	'php memory limit 1024 MB',
	'post max size 128 MB',
	'upload max filesize 128 MB',
	'max input vars 2500',
];

$data['featured_img'] = [
	[
		'img' => 'assets/svg/icon-PHP-Hosting_PHP-Semua-Versi.svg',
		'title' => 'PHP Semua Versi',
		'desc' => 'Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda',
	],
	[
		'img' => 'assets/svg/icon-PHP-Hosting_My-SQL.svg',
		'title' => 'MySQL Versi 5.6',
		'desc' => 'Nikmati MySQL versi terabaru, tercepat dan kaya akan fitur',
	],
	[
		'img' => 'assets/svg/icon-PHP-Hosting_CPanel.svg',
		'title' => 'Panel Hosting cPanel',
		'desc' => 'Kelola website dengan panel canggih yang familiar di hati Anda',
	],
	[
		'img' => 'assets/svg/icon-PHP-Hosting_garansi-uptime.svg',
		'title' => 'Garansi Uptime 99.9%',
		'desc' => 'Data center yang mendukung kelangsungan website Anda 24/7.',
	],
	[
		'img' => 'assets/svg/icon-PHP-Hosting_InnoDB.svg',
		'title' => 'Database InnoDB Unlimited',
		'desc' => 'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.',
	],
	[
		'img' => 'assets/svg/icon-PHP-Hosting_My-SQL-remote.svg',
		'title' => 'Wildcard Remote MySQL',
		'desc' => 'Mendkung S.d 25 max_user_connections dan 100 max_connections',
	],
];

$data['pricing'] = [
	[
		'sticky'=> false,
		'title'=>'Bayi',
		'price'=>'19900',
		'price_discount'=>'14900',
		'list'=> [
			'938 Pengguna Terdaftar',
			'0.5x RESOURCE POWER',
			'500 MB Disk Space',
			'Unlimited Bandwidth',
			'Unlimited Database',
			'1 Domain',
			'Instant Backup',
			'Unlimited SSL Gratis Selamanya',
			'Free Premium Course ',
		]
	],
	[
		'sticky'=> false,
		'title'=>'Pelajar',
		'price'=>'46900',
		'price_discount'=>'23450',
		'list'=>[
			'4.168 Pengguna Terdaftar',
			'~ 60.000 visitors/month',
			'Unlimited Disk Space',
			'Unlimited Bandwidth',
			'Unlimited POP3 Email',
			'Unlimited Database',
			'10 Addon Domain',
			'Instant Backup',
			'Domain Gratis',
			'Unlimited SSL Gratis Selamanya',
			'Free Premium Course',
		]
	],
	[
		'sticky'=> true,
		'title'=>'Personal',
		'price'=>'58900',
		'price_discount'=>'38900',
		'list'=>[
			'10.017 Pengguna Terdaftar',
			'~ 135.000 visitors/month',
			'Unlimited Disk Space',
			'Unlimited Bandwidth',
			'Unlimited POP3 Email',
			'Unlimited Database',
			'Unlimited Addon Domain',
			'Instant Backup',
			'Domain Gratis',
			'Unlimited SSL Gratis Selamanya',
			'SpamAsassin Mail Protection',
			'Free Premium Course',
		]
	],
	[
		'sticky'=> false,
		'title'=>'Bisnis',
		'price'=>'109900',
		'price_discount'=>'65900',
		'list'=>[
			'3.553 Pengguna Terdaftar',
			'~ 180.000 visitors/month',
			'Unlimited Disk Space',
			'Unlimited Bandwidth',
			'Unlimited POP3 Email',
			'Unlimited Database',
			'Unlimited Addon Domain',
			'Magic Auto Backup & Restore',
			'Domain Gratis',
			'Unlimited SSL Gratis Selamanya',
			'Prioritas Layanan Support',
			'SpamAsassin Mail Protection',
			'Free Premium Course',
		]
	],

];




return $data;


