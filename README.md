# Laravel Starter Kits

Bu projede Laravel, Vue.js, Tailwind CSS, Inertia.js ve VITE kullanılarak modern web uygulamaları için bir başlangıç paketi oluşturulmuştur.

## Kullanılan Teknolojiler

Bu proje aşağıdaki teknolojileri kullanmaktadır:

| Laravel  | Vue  | Tailwind  | Inertia  | Vite  |
|------|------|------|------|------|
| ![Laravel Logo](https://avatars.githubusercontent.com/u/958072?s=120&v=4 'Laravel') | ![Vue Logo](https://avatars.githubusercontent.com/u/6128107?s=120&v=4'Vue' 'Vue') | ![Tailwind Logo](https://avatars.githubusercontent.com/u/67109815?s=120&v=4 'Tailwind') | ![Inertia Logo](https://avatars.githubusercontent.com/u/47703742?s=120&v=4 'Inertia') | ![Vite Logo](https://avatars.githubusercontent.com/u/65625612?s=120&v=4 'Vite') |
| Laravel v10.38.2 | Vue v3.3.13 | Tailwind CSS v3.4 | Inertia.js v1.0 | Vite v5.0.10 |



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