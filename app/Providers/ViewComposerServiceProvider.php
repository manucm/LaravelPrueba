<?php

    namespace App\Providers;

    use Illuminate\Contracts\View\Factory;
    use Illuminate\Support\ServiceProvider;
    use App\Composers\CurrentUserComposer;



    class ViewComposerServiceProvider extends ServiceProvider
    {
      /**
      * Cuando tenga todos los componentes de Laravel registrado
      * entonces en el método boot ya hace lo que tiene que HashServiceProvider
      * esto es necesario hacerlo así porque así nos aseguramos de que la vista
      * está cargada
      */
      public function boot(Factory $factory) {
        // Primero inyectamos la vista, por eso importamos
        // Illuminate\Contracts\View\Factory
        // aquí en este método deciamos en que método queremos que
        // se aplique, si es * será en todas las vistas, si es solo
        // para posts pues ponemos 'posts'
          $factory->composer('*', CurrentUserComposer::class);
      }
        public function register() {

        }
    }
