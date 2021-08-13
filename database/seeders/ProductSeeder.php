<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
         [  
            'name'=>'LG mobile',
            'price'=>'100',
            'description'=>'A smart phone with 4gb ram',
            'category'=>'Mobile',
            'gallery'=>'https://5.imimg.com/data5/IO/QJ/MY-24529291/lg-mobiles-500x500.png'
         ],
         [  
            'name'=>'LG AC',
            'price'=>'800',
            'description'=>'A smart ac ',
            'category'=>'AC',
            'gallery'=>'https://5.imimg.com/data5/XZ/PV/EJ/SELLER-24883934/lg-ac-500x500.jpg'
         ],
         [  
            'name'=>'OPPO mobile',
            'price'=>'200',
            'description'=>'A smart phone with 4gb ram',
            'category'=>'Mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/a-series/a31/A31-navigation-white-v2.png'
         ],
         [  
            'name'=>'SAMSUNG mobile',
            'price'=>'300',
            'description'=>'A smart phone with 4gb ram',
            'category'=>'Mobile',
            'gallery'=>'https://5.imimg.com/data5/IO/QJ/MY-24529291/lg-mobiles-500x500.png'
         ],
         [  
            'name'=>'LG FRIZE',
            'price'=>'1000',
            'description'=>'A smart frize',
            'category'=>'Frize',
            'gallery'=>'https://www.butterflygroupbd.com/media/catalog/product/cache/a256606fc0a9a79df2101e339f07be86/g/s/gs-x6010mc-side-by-side-refrigerators-z2_1.jpg'
         ],
         [  
            'name'=>'Printer',
            'price'=>'300',
            'description'=>'A Black color printer',
            'category'=>'Printer',
            'gallery'=>'https://static.wixstatic.com/media/2cd43b_3f896935f5bc4dea96f6e664c113f9a2~mv2.png/v1/fill/w_320,h_179,q_90/2cd43b_3f896935f5bc4dea96f6e664c113f9a2~mv2.png'
         ],
         [  
            'name'=>' EPSON Printer',
            'price'=>'300',
            'description'=>'A Black color HD printer',
            'category'=>'Printer',
            'gallery'=>'https://www.pngkey.com/png/full/295-2953572_impresora-epson-l210-epson-l210-allinone-printer.png'
         ],
         [  
            'name'=>'Camera',
            'price'=>'200',
            'description'=>'A Black color HD Camera',
            'category'=>'Camera',
            'gallery'=>'https://freepngimg.com/thumb/photo_camera/11-2-photo-camera-png-thumb.png'
         ],
         [  
            'name'=>'Camera',
            'price'=>'300',
            'description'=>'A Black color HD Camera',
            'category'=>'Camera',
            'gallery'=>'https://freepngimg.com/thumb/photo_camera/8-2-photo-camera-png-clipart.png'
         ],
         [  
            'name'=>'GUARD Camera',
            'price'=>'100',
            'description'=>'wireless-security-camera',
            'category'=>'camera',
            'gallery'=>'https://w7.pngwing.com/pngs/496/177/png-transparent-closed-circuit-television-wireless-security-camera-ip-camera-security-alarms-systems-camera.png'
         ],
         [  
            'name'=>'Sound BOX',
            'price'=>'100',
            'description'=>'wireless-sound-box',
            'category'=>'Audio',
            'gallery'=>'https://e7.pngegg.com/pngimages/169/829/png-clipart-computer-speakers-disc-jockey-sound-box-loudspeaker-dj-speakers-speaker-sound.png'
         ],
         [  
            'name'=>'Sound BOX',
            'price'=>'10',
            'description'=>'Sound BOX',
            'category'=>'Audio',
            'gallery'=>'https://e7.pngegg.com/pngimages/653/333/png-clipart-computer-speakers-subwoofer-output-device-sound-box-design-sound-electronic-device-thumbnail.png'
         ],
         [  
            'name'=>'Sound BOX SET',
            'price'=>'1000',
            'description'=>'Sound BOX SET',
            'category'=>'Audio',
            'gallery'=>'https://www.fabulatech.com/img/products/sndrdp/devices.png'
         ],
         [  
            'name'=>' Sports Equipment',
            'price'=>'1000',
            'description'=>' sports equipment for indoor ',
            'category'=>'sports',
            'gallery'=>'https://w7.pngwing.com/pngs/941/230/png-transparent-elliptical-trainers-physical-exercise-life-fitness-fitness-centre-exercise-equipment-sports-equipment-physical-fitness-sports-equipment-sports.png'
         ],
         [  
            'name'=>' Sports Equipment',
            'price'=>'1100',
            'description'=>' sports equipment for indoor ',
            'category'=>'sports',
            'gallery'=>'https://freepngimg.com/thumb/gym_equipments/41379-3-workout-machine-png-download-free.png'
         ],
         [  
            'name'=>' Sports Equipment',
            'price'=>'900',
            'description'=>' sports equipment for indoor ',
            'category'=>'sports',
            'gallery'=>'https://www.pngfind.com/pngs/m/653-6539032_download-transparent-png-exercise-machine-png-download.png'
         ],
         [  
            'name'=>'Makeup Brush',
            'price'=>'20',
            'description'=>'Makeup brush for foundation blending and blush',
            'category'=>'Makeup',
            'gallery'=>'https://www.pngfind.com/pngs/m/62-626804_cosmetic-oem-service-brushes-makeup-tools-png-transparent.png'
         ],
         [  
            'name'=>'Makeup Set',
            'price'=>'200',
            'description'=>'Makeup set lipstick red(waterprofe) , nailpolish, a brush',
            'category'=>'Makeup',
            'gallery'=>'https://w7.pngwing.com/pngs/487/304/png-transparent-three-assorted-makeup-products-lipstick-cosmetics-brush-women-make-up-supplies-holidays-school-supplies-hands-up-thumbnail.png'
         ],
         [  
            'name'=>'MAC Laptop',
            'price'=>'2000',
            'description'=>'Mac book air 2019',
            'category'=>'Laptop',
            'gallery'=>'https://www.kindpng.com/picc/m/190-1900949_mac-laptop-png-pic-macbook-air-2018-prix.png'
         ],
         [  
            'name'=>'MAC Laptop',
            'price'=>'2000',
            'description'=>'Mac book air 2019',
            'category'=>'Laptop',
            'gallery'=>'https://www.kindpng.com/picc/m/190-1900949_mac-laptop-png-pic-macbook-air-2018-prix.png'
         ],
         
          ]);
    }
}
