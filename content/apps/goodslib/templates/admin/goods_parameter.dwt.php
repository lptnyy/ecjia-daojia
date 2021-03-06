<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.admin.product_spec.init();
</script>
<!-- {/block} -->

<!-- {block name="main_content"} -->
{if $step eq '3'}
<!-- #BeginLibraryItem "/library/goods_step.lbi" --><!-- #EndLibraryItem -->
{/if}

{if $has_template}
<div class="alert alert-info">
	  <strong>{t domain="goodslib"}温馨提示：{/t}</strong>
      <br>
      {t domain="goodslib"}1、如需更换参数模板，请先点击【清除数据】按钮然后在重新绑定即可。{/t}<br>
      {t domain="goodslib"}2、清除后会将之前设置的参数清除，请谨慎操作。{/t}
</div>
{/if}

<div>
	<h3 class="heading">
	<!-- {if $ur_here}{$ur_here}{/if} --> 
		{if $action_link} 
	<a href="{$action_link.href}" class="btn plus_or_reply data-pjax" id="sticky_a"><i class="fontello-icon-reply"></i>{$action_link.text}</a> {/if}
	</h3>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="tabbable">
		
			{if !$step}
			<ul class="nav nav-tabs">
				<!-- {foreach from=$tags item=tag} -->
				<li{if $tag.active} class="active"{/if}><a{if $tag.active} href="javascript:;"{else}{if $tag.pjax} class="data-pjax"{/if} href='{$tag.href}'{/if}><!-- {$tag.name} --></a></li>
				<!-- {/foreach} -->
			</ul>
			{/if}
			
			<form class="form-horizontal" action="{$form_action}" method="post" name="theForm">
				<fieldset>
					<div class="template_box">
						{if $has_template}
							<div class="box_content">
								<div class="control-group">
									<label class="control-label">{t domain="goodslib"}参数模板：{/t}</label>
									<div class="controls l_h35">
										{$template_info.cat_name}
										
										{if $goodslib_info.parameter_id}
										<a data-toggle="clear_data" data-href='{url path="goodslib/admin/clear_parameter_data"}' goods-id="{$goodslib_info.goods_id}" ><button type="button" class="btn btn-gebo" >{t domain="goods"}更换模板{/t}</button></a>
										{else}
										<a href='{url path="goods/admin_category/edit" args="cat_id={$goodslib_info.cat_id}"}'><button type="button" class="btn btn-gebo" >{t domain="goodslib"}更换模板{/t}</button></a>
										{/if}
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label col-lg-2 "></label>
									<div class="controls">
										<span class="help-block">当前参数模板默认使用商品所属分类绑定的模板，如需更换，可在当前商品所属分类下更换，更换后再设置参数值</span>
									</div>
								</div>
								
								<hr>
								
								<div id="tbody-goodsAttr"> 
									{if $goods_attr_html}{$goods_attr_html}{/if}
								</div>
							</div>
						{else}
							<div class="box_content">
								<div class="control-group">
									<label class="control-label">{t domain="goodslib"}参数模板：{/t}</label>
									<div class="controls l_h35">
										<i class="fontello-icon-attention-circled ecjiafc-red"></i><span class="ecjiafc-red">您当前还未绑定任何参数模板，请先绑定后，再来设置</span>
									</div>
								</div>
								
								<div class="control-group">
									<div class="controls l_h35">
										<a href='{url path="goods/admin_category/edit" args="cat_id={$goodslib_info.cat_id}"}'><button type="button" class="btn btn-info" >{t domain="goodslib"}绑定模板{/t}</button></a>
									</div>
								</div>
							</div>
						{/if}
					</div>
					
				{if $has_template}
				<div class="control-group">
					<div class="controls m_t10">
						<button class="btn btn-gebo" type="submit">{t domain="goodslib"}保存{/t}</button>
						<input type="hidden" name="cat_id" value="{$goodslib_info.cat_id}" />
						<input type="hidden" name="goods_id" value="{$goodslib_info.goods_id}" />
						<input type="hidden" name="template_id" value="{$template_id}" />
					</div>
				</div>
				{/if}
			</form>
		</div>
	</div>
</div>
<!-- {/block} -->