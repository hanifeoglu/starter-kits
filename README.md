# Laravel Starter Kits

Bu projede Laravel, Vue.js, Tailwind CSS, Inertia.js ve VITE kullanılarak modern web uygulamaları için bir başlangıç paketi oluşturulmuştur.

## Kullanılan Teknolojiler

Bu proje aşağıdaki teknolojileri kullanmaktadır:

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

- Laravel v10.38.2
- Vue v3.3.13
- Tailwind CSS v3.4
- Inertia.js v1.0
- Vite v5.0.10
```


### Kurulum
Projeyi kopyalamak için:
```
git clone https://github.com/hanifeoglu/starter-kits.git
```

### Bağımlılıkları Yükleyin

Projeyi klonladıktan sonra, gerekli bağımlılıkları yüklemek için sırasıyla:
```
cd starter-kits
composer install
npm install
```

### .env Dosyasını Ayarlayın

`.env.example` dosyasının bir kopyasını `.env` olarak oluşturun ve gerekli ayarları yapın:
```
cp .env.example .env
```

### Veritabanını Oluşturun ve Migration'ları Çalıştırın

Migration'ları çalıştırmak için:
```
php artisan migrate
```