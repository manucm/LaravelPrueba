<?php

    namespace App\Composers;

    use Illuminate\View\View;

    use Illuminate\Contracts\Auth\Guard;

    class CurrentUserComposer
    {
        protected $auth;

        public function __construct(Guard $guard) {
            $this->auth = $guard;
        }


        public function compose(View $view) {
            $view->with('currentUser', $this->auth->user());
        }

    }
