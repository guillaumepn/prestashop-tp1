{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file=$layout}

{block name='head_seo' prepend}
    <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
    <meta property="og:type" content="product">
    <meta property="og:url" content="{$urls.current_url}">
    <meta property="og:title" content="{$page.meta.title}">
    <meta property="og:site_name" content="{$shop.name}">
    <meta property="og:description" content="{$page.meta.description}">
    <meta property="og:image" content="{$product.cover.large.url}">
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
    {if isset($product.weight) && ($product.weight != 0)}
        <meta property="product:weight:value" content="{$product.weight}">
        <meta property="product:weight:units" content="{$product.weight_unit}">
    {/if}
{/block}

{block name='content'}

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="{$product.url}">

        <div class="row">
            <div class="col-md-6">
                {block name='page_content_container'}
                    <section class="page-content" id="content">
                        {block name='page_content'}
                            {block name='product_flags'}
                                <ul class="product-flags">
                                    {foreach from=$product.flags item=flag}
                                        <li class="product-flag {$flag.type}">{$flag.label}</li>
                                    {/foreach}
                                </ul>
                            {/block}

                            {block name='product_cover_thumbnails'}
                                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
                            {/block}
                            <div class="scroll-box-arrows">
                                <i class="material-icons left">&#xE314;</i>
                                <i class="material-icons right">&#xE315;</i>
                            </div>

                        {/block}
                    </section>
                {/block}
            </div>
            <div class="col-md-6">

                {block name='product_images'}
                    <div class="js-qv-mask mask">
                    <ul class="product-images js-qv-product-images">
                        {foreach from=$product.images item=image}
                            <li class="thumb-container">
                                <img
                                        class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                                        data-image-medium-src="{$image.bySize.medium_default.url}"
                                        data-image-large-src="{$image.bySize.large_default.url}"
                                        src="{$image.bySize.home_default.url}"
                                        alt="{$image.legend}"
                                        title="{$image.legend}"
                                        width="100"
                                        itemprop="image"
                                >
                            </li>
                        {/foreach}
                    </ul>
                    </div>{/block}


                {block name='page_header_container'}
                    {block name='page_header'}
                        <h1 class="h1" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
                    {/block}
                {/block}

                <div class="product-information">

                    {block name='product_attributes'}
                        {include file='catalog/_partials/product-attributes.tpl'}
                    {/block}

                </div>
            </div>
        </div>

        {block name='product_accessories'}
            {if $accessories}
                <section class="product-accessories clearfix">
                    <h3 class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</h3>
                    <div class="products">
                        {foreach from=$accessories item="product_accessory"}
                            {block name='product_miniature'}
                                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
                            {/block}
                        {/foreach}
                    </div>
                </section>
            {/if}
        {/block}

        {block name='product_footer'}
            {hook h='displayFooterProduct' product=$product category=$category}
        {/block}

        {block name='product_images_modal'}
            {include file='catalog/_partials/product-images-modal.tpl'}
        {/block}

        {block name='page_footer_container'}
            <footer class="page-footer">
                {block name='page_footer'}
                    <!-- Footer content -->
                {/block}
            </footer>
        {/block}
    </section>

{/block}
