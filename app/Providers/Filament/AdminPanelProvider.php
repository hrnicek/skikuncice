<?php

namespace App\Providers\Filament;

use App\Filament\Pages\ManageWeather;
use App\Filament\Resources\Accommodations\AccommodationResource;
use App\Filament\Resources\Events\EventResource;
use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\RestaurantMenus\RestaurantMenuResource;
use App\Filament\Resources\Users\UserResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filamerce\FilamentTranslatable\Enums\TranslationMode;
use Filamerce\FilamentTranslatable\FilamentTranslatablePlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->darkMode(false)
            ->login()
            ->brandLogo('/img/logo.png')
            ->colors([
                'primary' => Color::Red,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->plugin(FilamentTranslatablePlugin::make()
                ->translationMode(TranslationMode::Astrotomic)
                ->displayFlagsInLocaleLabels(true)
                ->locales([
                    'cs' => 'Čeština',
                    'pl' => 'Polština',
                ]))
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return static::buildNavigation($builder);
            });
    }

    public static function buildNavigation(NavigationBuilder $builder): NavigationBuilder
    {
        $builder = new NavigationBuilder;

        $builder->items([
            NavigationItem::make('Nástěnka')
                ->icon('heroicon-o-home')
                ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.dashboard'))
                ->url(fn (): string => Dashboard::getUrl()),
        ]);

        $builder->groups([
            NavigationGroup::make('Nastaveí')
                ->items([
                    NavigationItem::make('Stav sjezdovek')
                        ->url(ManageWeather::getUrl())
                        ->icon('heroicon-o-sun')
                        ->sort(1),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Restaurace')
                ->items([
                    ...RestaurantMenuResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Obsah')
                ->items([
                    ...PostResource::getNavigationItems(),
                    ...EventResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Chaty & penziony')
                ->items([
                    ...AccommodationResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Systém')
                ->items([
                    ...UserResource::getNavigationItems(),
                ]),
        ]);

        return $builder;
    }
}
