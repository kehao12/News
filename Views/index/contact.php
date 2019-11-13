<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liên hệ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resources/index/index1/images/logo-e1541672296379.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php include('component/header.php') ?>

<div class="contact-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70" style="border: none;">
                    <iframe style="max-width: 100% !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6724592227592!2d106.67866501502135!3d10.836358561047215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529ca11ad3e8f:0x914c1aa94e33a7a3!2zVknhu4ZOIE5HSEnDik4gQ-G7qFUgUVXhuqJOIEzDnSBIw4BOSCBDSMONTkg!5e0!3m2!1svi!2s!4v1558086767921!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Hỗ trợ</h2>
                        <p>Địa chỉ: 181 Lê Đức Thọ - Phường 17 - Gò Vấp - HCM</p>
                        <p>Email: hocvalam24h@gmail.com</p>
                        <p>Số điện thoại: 0936.201.222</p>
                    </div>
                  <form id="contact-form" action="admin.php?controller=Admin&action=mailer" method="post">
                        <input name="name" placeholder="Họ tên*" type="text" required>
                        <input name="email" placeholder="Email*" type="email" required>
                        <input name="subject" placeholder="Chủ để*" type="text" required>
                        <textarea name="message" placeholder="Nội dung"></textarea>
                        <button class="submit btn-style" name="gui" type="submit">Gửi hỗ trợ</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('component/footer.php') ?>












<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(10.836353, 106.680854),
            styles: 
            [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(10.836353, 106.680854),
            map: map,
            icon: 'assets/img/icon-img/2.png',
            animation:google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>