# nonegram
###Aplikasi media sosial sederhana
Proyek Matkul MPSI, aplikasi berbasis web ini akan memungkinkan penggunanya berbagi momen berupa foto yang bisa dilihat pengguna lain.

__Daftar table yang digunakan :__

_user_ (lowercase)
* id varchar(30) primary
* username varchar(255)
* pass varchar(255)
* profile_path varchar(255)

_image_ (lowercase)
* id varchar(30)
* path varchar(255)
* user_id varchar(30)


__Jangan Lupa!__
masukkan file _dbcon.php_ pada folder _.gitignore_