## Bangun Sistem Manajemen Pemesanan Hotel Menggunakan PHP dan MySQL

[Gihub repositori](https://github.com/gurnitha/my_learning_php_hotel_booking)


## Bagian 0: Membuat Repositori Pada Github

        Aktivitas:

        1. modified:   README.md


#### 0.1 Memodifikasi README.md dan .gitignore file

        Aktivitas:

        1. modified:   README.md
        2.  modified:   .gitignore


## Bagian 1: Pendahuluan

        Aktivitas:

        1. modified:   README.md


#### 1.1 Perkenalan

        Aktivitas:

        1. Pass 
        2. modified:   README.md


## Bagian 2.Instalasi

        Aktivitas:

        1. modified:   README.md


#### 2.1 Menginstal Xampp

        Aktivitas:

        1. Pass 
        2. modified:   README.md


#### 2.2 Memasang Text Editor

        Aktivitas:

        1. Pass 
        2. modified:   README.md


## Bagian 3: Memulai Proyek

        Aktivitas:

        1. modified:   README.md


#### 3.1 Desain dan Kode Proyek - part 1: Menginstal semua file proyek ke root direktori

        Aktivitas:

        1. Menginstal semua file proyek ke root direktori

        modified:   .gitignore
        modified:   README.md
        new file:   about.html
        new file:   contact.html
        new file:   index.html
        new file:   login.html
        new file:   register.html
        new file:   room-single.html
        new file:   rooms.html
        new file:   services.html

        NOTE:

        Files css, fonts, images, js dan scss tidak disimpan di dalam repositori untuk melindungi hak cipta.

        2. modified:   README.md


#### 3.1 Desain dan Kode Proyek - part 2: Memindahkan css, fonts, images, js, dan scss ke dalam assets

        Aktivitas:

        1. Membuat folder baru dengan nama 'assets'
        2. Memindahkan css, fonts, images, js, dan scss ke dalam assets

        NOTE:

        Files css, fonts, images, js dan scss tidak disimpan di dalam repositori untuk melindungi hak cipta.
        
        3. modified:   README.md


#### 3.1 Desain dan Kode Proyek - part 3: Memperbaiki link css, images dan js pada semua file template

        Aktivitas:

        1. Memperbaiki link css, images dan js pada semua file template

        modified:   README.md
        modified:   about.html
        modified:   contact.html
        modified:   index.html
        modified:   login.html
        modified:   register.html
        modified:   room-single.html
        modified:   rooms.html
        modified:   services.html

        Test : Coba uji di browser
        Hasil: good :)


#### 3.2 Membuat File Konfigurasi - Part 1: Membuat variabel koneksi

        Aktivitas:

        1. Membuat folder dan file config.php
        new file:   config/config.php

        NEXT: 

        Membuat database


#### 3.2 Membuat File Konfigurasi - Part 2: Membuat database 

        Aktivitas:

        1. Membuat database

        NEXT:

        Membuat koneksi ke database dengan PDO



#### 3.2 Membuat File Konfigurasi - Part 3:Membuat koneksi ke database dengan PDO

        Aktivitas:

        1. Membuat koneksi ke database dengan PDO
        modified:   config/config.php 

        Testing: berhasil       

        NEXT:

        Memperbaiki koneksi agar lebih aman.



#### 3.2 Membuat File Konfigurasi - Part 4: Memperbaiki koneksi agar lebih aman dan pesan error lebih friendly

        Aktivitas:

        1. Memperbaiki koneksi agar lebih aman dan pesan error lebih friendly
        modified:   config/config.php

        Testing: berhasil

        NEXT: Mengganti ekstensi file


#### 3.3. Mempersiapkan Struktur Proyek - Part 1: Mengganti ekstensi file

        Aktivitas:

        1. Mengannti ekstensi file dari .html menjadi .php

        modified:   README.md
        renamed:    about.html -> about.php
        renamed:    contact.html -> contact.php
        renamed:    index.html -> index.php
        renamed:    login.html -> login.php
        renamed:    register.html -> register.php
        renamed:    room-single.html -> room-single.php
        renamed:    rooms.html -> rooms.php
        renamed:    services.html -> services.php

        NEXT:

        Membuat folder includes dan file footer dan header


#### 3.3. Mempersiapkan Struktur Proyek - Part 2: Membuat folder baru dan files

        Aktivitas:

        1. Membuat folder 'includes' dan dua file baru: footer.php dan header.php

        new file:   includes/footer.php
        new file:   includes/header.php

        NEXT: 

        Membuat struktur proyek menjadi lebih efisien


#### 3.3. Mempersiapkan Struktur Proyek - Part 3: Membuat struktur proyek menjadi lebih efisien

        Aktivitas:

        1. Memindahkan bagian header dan footer dari halama about ke file header.php dan footer.php

        2. Menyertakan / require / include header.php dan footer.php pada halaman about.ph

        modified:   about.php
        modified:   includes/footer.php
        modified:   includes/header.php

        NEXT:

        Menguji hasil kedua langkah di atas


#### 3.3. Mempersiapkan Struktur Proyek - Part 4: Menguji hasil kedua langkah di atas

        Aktivitas:

        1. Testing

        Membuka halaman about.php pada browser
        http://localhost/my_learning_php_hotel_booking/about.php

        2. Hasil: halaman about terlihat sama seperti sebelum diubah :) 

        NEXT:

        Lakukan yang sama pada file contact, index, login, register, room-single, room, dan services


#### 3.3. Mempersiapkan Struktur Proyek - Part 5: Lakukan yang sama pada file contact, index, login, register, room-single, room, dan services

        Aktivitas:

        1. Memodifikasi files di bawah ini dengan cara yang sama seperti pada langkah 3.3 - part 4 di atas

        modified:   contact.php
        modified:   index.php
        modified:   login.php
        modified:   register.php
        modified:   room-single.php
        modified:   rooms.php
        modified:   services.php

        NEXT:

        4: Membuat Sistem Autentikasi
