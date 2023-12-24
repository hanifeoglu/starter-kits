# Laravel Starter Kits

Bu projede Laravel, Vue.js, Tailwind CSS, Inertia.js ve VITE kullanılarak modern web uygulamaları için bir başlangıç paketi oluşturulmuştur.

## Kullanılan Teknolojiler

Bu proje aşağıdaki teknolojileri kullanmaktadır:


<p align="center">
  <a href="#" target="_blank" rel="noopener noreferrer">
    <img width="180" src="https://avatars.githubusercontent.com/u/6128107?" alt="Vue logo">
  </a>
</p>

<p align="center">
  <a href="#" target="_blank" rel="noopener noreferrer">
    <img width="180" src="https://vitejs.dev/logo.svg" alt="Vite logo">
  </a>
</p>




<p align="center">
  <a href="#" target="_blank" rel="noopener noreferrer">
    <img width="180" src="https://avatars.githubusercontent.com/u/47703742?" alt="Inertia logo">
  </a>
</p>

<p align="center">
  <a href="#" target="_blank" rel="noopener noreferrer">
    <img width="180" src="https://avatars.githubusercontent.com/u/67109815" alt="Tailwind logo">
  </a>
</p>

<p align="center">
  <a href="#" target="_blank" rel="noopener noreferrer">
    <img width="180" src="https://avatars.githubusercontent.com/u/958072?" alt="Tailwind logo">
  </a>
</p>


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