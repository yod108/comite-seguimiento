<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

     /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            // Add some items to the menu...
            $event->menu->add([
                'text'        => ' Solicitud comité',
                'route'         => 'solicitudcomitetbl.index',
                'icon'        => 'fas fa-fw fa-calendar',
                'label_color' => 'success',
            ]);

            $event->menu->add([
                'text'        => ' Aprendices',
                'route'       => 'aprendiztbl.index',
                'icon'        => 'fas fa-fw fa-user-plus',
                'label_color' => 'success',
            ]);

            $event->menu->add([
                'text'        => ' Instructor',
                'route'         => 'instructortbl.index',
                'icon'        => 'fas fa-fw fa-user-plus',
                'label_color' => 'success',
            ]);

            $event->menu->add([
                'text'        =>' Programas',
                'route'       => 'programatbl.index',
                'icon'        => 'fas fa-fw fa-folder',
                'label_color' =>'success',
            ]);

            $event->menu->add([
                'text'        =>' Reglamento',
                'url'         => 'https://www.sena.edu.co/es-co/transparencia/ProyectoNorma/Reglamento_del_Aprendiz_del_Servicio_Nacional_de_Aprendizaje%E2%80%93SENA.pdf',
                'icon'        => 'fas fa-fw fa-book',
                'label_color' =>'success',
            ]);
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
