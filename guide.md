# Cara cek pc

## Cek
- PHP >= 8.1
- Composer
- Node.js & NPM
- Web Server (Apache/Nginx)

## Buka terminal

1. **cek versi php**
    ```bash
    php -v
    ```

2. **cek composer**
    ```bash
    composer
    ```

3. **npm**
    ```bash
    npm -v
    ```

4. **hidupkan laragon dan klik kanan/php/version 8**
    

5. **buka file laragon/bin/php/php-8/php.ini buka zip nya**
   

6. **Configure Database**
    - buka web laravel 
   ```bash
    composer global require laravel/installer
    ```

7. **buat projek laravel**
    ```bash
    laravel new *nama_projek
    ```
#
#
# template github

1. **Buka GitHub salin code**

2. **Buka file**
    - buka laragon
    - buka www
    - klik kanan buka teriminal dan ketik
     ```bash
    git clone *tempel_linknya
    ```
     ```bash
    cd *nama_projek
    ```
    - buka vsc 
     ```bash
    code .
    ```
3. Di dalam terminal vsc
    ```bash
    composer install
    ```
    - selanjutnya
    ```bash
    cp .env.example .env
    ```
4. Di dalam env edit isi file waktu dan database nya

5. Di terminal ketik
     ```bash
    php artisan key:generate
    ```
     ```bash
    php artisan migrate
    ```
     ```bash
    php artisan serve
    ```