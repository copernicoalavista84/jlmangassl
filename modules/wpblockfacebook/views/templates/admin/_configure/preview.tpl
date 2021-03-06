{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script src="{$wpfacebook_js_url|escape:'html':'UTF-8'}"></script>
<link href="{$wpfacebook_css_url|escape:'html':'UTF-8'}" rel="stylesheet">
{if $wpfacebookurl != ''}
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> {l s='Preview' mod='wpblockfacebook'}
	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 >{l s='Follow us on facebook' mod='wpblockfacebook'}</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="{$wpfacebookurl|escape:'html':'UTF-8'}" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
{/if}