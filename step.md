## Criação da rota
> Route::get('/', [FullCalendarController::class, 'index'])->name('calendar.index');
## Criação do controller
> php artisan make:controller FullCalendarController
## Baixar e colar a pasta do fullcalendar na pasta public/assets
## Criar uma view/calendar/index.blade.php