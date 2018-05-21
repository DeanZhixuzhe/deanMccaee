<div class="header-frame fixed-nav">
	<div class="header">
		
		{if condition="$Think.session.theoneuser.nickname != ''"}
		<div class="information">
			<dl class="moveShow">
				<dt>你好：<a href="javascript:">{$Think.session.theoneuser.nickname}</a></dt>
				<dd class="showCon hide">
					<a href="{:url('index/Account/logout')}">注销</a>
				</dd>
			</dl>
		</div>
		{else/}
		<div class="logreg">
			<a href="{:url('index/Account/login')}">登陆</a>
			<a href="{:url('index/Account/register')}">注册</a>
		</div>
		{/if}
	</div>
</div>