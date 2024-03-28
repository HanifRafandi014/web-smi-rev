<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

// Route Tentang Kami
// $routes->get('tentang-smi', 'TentangSmi::index');
// $routes->get('tim-pengembang', 'Pengembang::index');
// $routes->get('visi-misi', 'Visimisi::index');
// $routes->get('selayang-pandang', 'SelayangPandang::index');

$routes->get('tentangKami/tentang-smi', 'TentangKami::index');
$routes->get('tentangKami/tim-pengembang', 'TentangKami::timPengembang');
$routes->get('tentangKami/visi-misi', 'TentangKami::visiMisi');
$routes->get('tentangKami/selayang-pandang', 'TentangKami::selayangPandang');

// Route Program Kami
// $routes->get('studi-banding', 'StudiBanding::index');
// $routes->get('program-best', 'Best::index');
// $routes->get('pentalokanas', 'Pentalokanas::index');
// $routes->get('sekolah-kloning', 'SekolahKloning::index');
// $routes->get('sisma-tv', 'Sismatv::index');

$routes->get('programKami/studi-banding', 'StudiBanding::index');
$routes->get('programKami/program-best', 'StudiBanding::programBest');
$routes->get('programKami/pentalokanas', 'StudiBanding::pentalokanas');
$routes->get('programKami/sekolah-kloning', 'StudiBanding::sekolahKloning');
$routes->get('programKami/sisma-tv', 'StudiBanding::sismaTv');

// Route Publikasi
// $routes->get('sisma-news', 'Sismanews::index');
// $routes->get('sisma-news-details', 'Sismanews::sismaNewsDetails');
// $routes->get('agenda', 'Agenda::index');
// $routes->get('galeri', 'Galeri::index');
// $routes->get('galeri-details', 'Galeri::galeriDetails');

$routes->get('publikasi/sisma-news', 'Sismanews::index');
$routes->get('publikasi/sisma-news-details', 'Sismanews::sismaNewsDetails');
$routes->get('publikasi/agenda', 'Sismanews::agenda');
$routes->get('publikasi/galeri', 'Sismanews::galeri');
$routes->get('publikasi/galeri-details', 'Sismanews::galeriDetails');

// Route Hubungi Kami
$routes->get('hubungiKami/hubungi-kami', 'Contact::index');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}