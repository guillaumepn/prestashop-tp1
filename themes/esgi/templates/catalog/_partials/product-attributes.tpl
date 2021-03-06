{block name='product_description_short'}
    <div id="product-description-short-{$product.id}" itemprop="description">{$product.description_short nofilter}</div>
{/block}

{if $product.is_customizable && count($product.customizations.fields)}
    {block name='product_customization'}
        {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
    {/block}
{/if}

<div class="product-actions">
    {block name='product_buy'}
        <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
            <input type="hidden" name="token" value="{$static_token}">
            <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
            <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

            {block name='product_variants'}
                {include file='catalog/_partials/product-variants.tpl'}
            {/block}

            {block name='product_pack'}
                {if $packItems}
                    <section class="product-pack">
                        <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                        {foreach from=$packItems item="product_pack"}
                            {block name='product_miniature'}
                                {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                            {/block}
                        {/foreach}
                    </section>
                {/if}
            {/block}

            {block name='product_discounts'}
                {include file='catalog/_partials/product-discounts.tpl'}
            {/block}

            {block name='product_add_to_cart'}
                {include file='catalog/_partials/product-add-to-cart.tpl'}
            {/block}

            {block name='product_additional_info'}
                {include file='catalog/_partials/product-additional-info.tpl'}
            {/block}

            {block name='product_refresh'}
                <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
            {/block}
        </form>
    {/block}

</div>


{block name='hook_display_reassurance'}
    {hook h='displayReassurance'}
{/block}

{block name='product_tabs'}
    <div class="tabs">
        <ul class="nav nav-tabs" role="tablist">
            {if $product.description}
                <li class="nav-item">
                    <a
                            class="nav-link{if $product.description} active{/if}"
                            data-toggle="tab"
                            href="#description"
                            role="tab"
                            aria-controls="description"
                            {if $product.description} aria-selected="true"{/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
                </li>
            {/if}
            <li class="nav-item">
                <a
                        class="nav-link{if !$product.description} active{/if}"
                        data-toggle="tab"
                        href="#product-details"
                        role="tab"
                        aria-controls="product-details"
                        {if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
            </li>
            {if $product.attachments}
                <li class="nav-item">
                    <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#attachments"
                            role="tab"
                            aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                </li>
            {/if}
            {foreach from=$product.extraContent item=extra key=extraKey}
                <li class="nav-item">
                    <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#extra-{$extraKey}"
                            role="tab"
                            aria-controls="extra-{$extraKey}">{$extra.title}</a>
                </li>
            {/foreach}
        </ul>

        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade in{if $product.description} active{/if}" id="description" role="tabpanel">
                {block name='product_description'}
                    <div class="product-description">{$product.description nofilter}</div>
                {/block}
            </div>

            {block name='product_details'}
                {include file='catalog/_partials/product-details.tpl'}
            {/block}

            {block name='product_attachments'}
                {if $product.attachments}
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                        <section class="product-attachments">
                            <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</h3>
                            {foreach from=$product.attachments item=attachment}
                                <div class="attachment">
                                    <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                                    <p>{$attachment.description}</p
                                    <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                                        {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                                    </a>
                                </div>
                            {/foreach}
                        </section>
                    </div>
                {/if}
            {/block}

            {foreach from=$product.extraContent item=extra key=extraKey}
            <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
            {$extra.content nofilter}
        </div>
        {/foreach}
    </div>
    </div>
{/block}
