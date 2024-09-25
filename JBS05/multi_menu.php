<?php 
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "SubMenu" => [
            [
                "nama" => "wisata",
                "SubMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
                    ],
                    [
                        "nama" => "Kuliner"
                    ],
                    [
                        "nama" => "hiburan"
                    ]
                ]
                    ],
                    [
                        "nama" => "tentang"
                    ],
                    [
                        "nama" => "kontak"
                    ],
];

function tampilMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";

        if (isset($item['SubMenu'])) {
            tampilMenuBertingkat($item['SubMenu']);
        }

        echo "</li>";
    }
    echo "</ul>";
}
tampilMenuBertingkat($menu);

?>