<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_homepage"
        :label="trans('plugins/membership::base.settings.enable_homepage')"
        :checked="setting('display_homepage', true)"
        :description="trans('plugins/membership::base.settings.enable_homepage')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>

<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_blog"
        :label="trans('plugins/membership::base.settings.enable_blog')"
        :checked="setting('display_blog', true)"
        :description="trans('plugins/membership::base.settings.enable_blog')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>

<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_catalog"
        :label="trans('plugins/membership::base.settings.enable_catalog')"
        :checked="setting('display_catalog', true)"
        :description="trans('plugins/membership::base.settings.enable_catalog')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>

<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_products"
        :label="trans('plugins/membership::base.settings.enable_products')"
        :checked="setting('display_products', true)"
        :description="trans('plugins/membership::base.settings.enable_products')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>

<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_page"
        :label="trans('plugins/membership::base.settings.enable_page')"
        :checked="setting('display_page', true)"
        :description="trans('plugins/membership::base.settings.enable_page')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>

<div class="mb-3">
    <x-core::form.on-off.checkbox
        name="display_tag"
        :label="trans('plugins/membership::base.settings.enable_tag')"
        :checked="setting('display_tag', true)"
        :description="trans('plugins/membership::base.settings.enable_tag')"
        class="mb-3 mt-0"
        :wrapper="false"
    />
</div>
