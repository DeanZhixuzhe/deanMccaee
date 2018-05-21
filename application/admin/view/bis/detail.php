<!--包含头部文件-->
{include file="public/header" /}

<article class="page-container">
  <form class="form form-horizontal" >
    基本信息：
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商户名称：</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="{$bisData.name}" placeholder="" id="" name="name">
      </div>
    </div>

    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属城市：</label>
      <div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
				<select name="city_id" class="select cityId">
                  <option value="0">--请选择--</option>
                  {volist name="citys" id="vo"}
                  <option value="{$vo.id}" {if condition="$bisData.city_id eq $vo.id"} selected="selected"{/if}>{$vo.name}</option>
                  {/volist}

                </select>
				</span>
      </div>
      <div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
				<select name="se_city_id" class="select se_city_id">
                  <option value="0">{:getSeCityName($bisData.city_path)}</option>
                </select>
				</span>
      </div>
    </div>

    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
      <div class="formControls col-xs-8 col-sm-9">

        <img  id="upload_org_code_img" src="{$bisData.logo}" width="150" height="150">

      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">营业执照：</label>
      <div class="formControls col-xs-8 col-sm-9">

        <img  id="upload_org_code_img_other" src="{$bisData.licence_logo}" width="150" height="150">

      </div>
    </div>

    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">商户介绍：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <script id="editor1"  type="text/plain" name="description" style="width:80%;height:300px;">{$bisData.description|html_entity_decode}</script>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">银行账号:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="bank_info">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">开户行名称:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="bank_name">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">开户行姓名:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="bank_user">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">法人:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="faren">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">法人电话:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="faren_tel">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="email">
      </div>
    </div>
    总店信息：
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">电话:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="tel">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">联系人:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="contact">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属分类：</label>
      <div class="formControls col-xs-8 col-sm-3"> <span class="select-box">
				<select name="category_id" class="select categoryId">
                  <option value="0">--请选择--</option>
                  {volist name="categorys" id="vo"}
                  <option value="{$vo.id}">{$vo.name}</option>
                  {/volist}

                </select>
				</span>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">所属子类：</label>
      <div class="formControls col-xs-8 col-sm-3 skin-minimal">
        <div class="check-box se_category_id">

        </div>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">商户地址：</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="address">
      </div>
      <a  class="btn btn-default radius ml-10 maptag">标注</a>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">营业时间:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="" placeholder="" id="" name="open_time">
      </div>
    </div>

    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">门店简介：</label>
      <div class="formControls col-xs-8 col-sm-9">
        <script id="editor"  type="text/plain" name="content" style="width:80%;height:300px;"></script>
      </div>
    </div>

    账号信息：
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-2">用户名:</label>
      <div class="formControls col-xs-8 col-sm-3">
        <input type="text" class="input-text" value="{$accountData.username}" placeholder="" id="" name="username">
      </div>
    </div>


  </form>
</article>

<!--包含尾部文件-->
{include file="public/footer" /}
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script>
  var SCOPE = {
            'city_url' : '{:url('api/city/getCitysByParentId')}',
          'category_url' : '{:url('api/category/getCategoryByParentId')}',

  };
</script>
<!--分配编辑器-->
<script>
  $(function(){
    var ue = UE.getEditor('editor');
    var ue1 = UE.getEditor('editor1');
  });
</script>
</body>
</html>