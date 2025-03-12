<?php

namespace Botble\Membership\Providers;

use Botble\Base\Facades\PanelSectionManager;
use Botble\Base\PanelSections\PanelSectionItem;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Membership\Http\Middleware\CheckDisplayHomepage;
use Botble\Setting\PanelSections\SettingOthersPanelSection;
use Illuminate\Routing\Events\RouteMatched;

class MembershipServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {

        $this
           ->setNamespace('plugins/membership')
           ->loadHelpers()
           ->loadAndPublishConfigurations(['permissions'])
           ->loadMigrations()
           ->loadAndPublishTranslations()
           ->loadAndPublishViews()
           ->loadRoutes();

        PanelSectionManager::default()->beforeRendering(function () {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('membership')
                    ->setTitle(trans('plugins/membership::base.settings.title'))
                    ->withIcon('ti ti-file-settings')
                    ->withDescription(trans('plugins/membership::base.settings.description'))
                    ->withPriority(6)
                    ->withRoute('membership.settings')
            );
        });

        $this->app['events']->listen(RouteMatched::class, function () {
            $router = $this->app['router'];
            $router->pushMiddlewareToGroup('web', CheckDisplayHomepage::class);
        });
    }
}
