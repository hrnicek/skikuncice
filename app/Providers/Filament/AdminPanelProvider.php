<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use App\Filament\Pages\ManageWeather;
use App\Filament\Pages\ManageWebcams;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\News\NewsResource;
use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\Users\UserResource;
use Illuminate\Session\Middleware\StartSession;
use App\Filament\Resources\Events\EventResource;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filamerce\FilamentTranslatable\Enums\TranslationMode;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Filamerce\FilamentTranslatable\FilamentTranslatablePlugin;
use App\Filament\Resources\Accommodations\AccommodationResource;
use App\Filament\Resources\RestaurantMenus\RestaurantMenuResource;

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
                ->displayFlagsInLocaleLabels(false)
                ->defaultLocale('cs')
                ->locales([
                    'cs' => 'Čeština',
                    'en' => 'English',
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
            NavigationGroup::make('Obsah')
                ->items([
                    ...NewsResource::getNavigationItems(),
                    ...PostResource::getNavigationItems(),
                    ...EventResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Restaurace')
                ->items([
                    ...RestaurantMenuResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Chaty & penziony')
                ->items([
                    ...AccommodationResource::getNavigationItems(),
                ]),
        ]);

        $builder->groups([
            NavigationGroup::make('Nastavení')
                ->items([
                        NavigationItem::make('Webkamery')
                        ->url(ManageWebcams::getUrl())
                        ->icon('heroicon-o-camera')
                        ->sort(1),
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
