<h2>Install Flarum</h2>

<p>请设置服务器信息，如有问题请在 <a href="http://bbs.flarumchina.cn/" target="_blank">Flarum中文网</a> 中讨论.</p>

<form method="post">
  <div id="error" style="display:none"></div>

  <div class="FormGroup">
    <div class="FormField">
      <label>网站标题</label>
      <input name="forumTitle">
    </div>
  </div>

  <div class="FormGroup">
    <div class="FormField">
      <label>数据库地址</label>
      <input name="mysqlHost" value="localhost">
    </div>

    <div class="FormField">
      <label>数据库名</label>
      <input name="mysqlDatabase">
    </div>

    <div class="FormField">
      <label>数据库用户名</label>
      <input name="mysqlUsername">
    </div>

    <div class="FormField">
      <label>数据库密码</label>
      <input type="password" name="mysqlPassword">
    </div>

    <div class="FormField">
      <label>数据表头</label>
      <input type="text" name="tablePrefix">
    </div>
  </div>

  <div class="FormGroup">
    <div class="FormField">
      <label>管理员用户名</label>
      <input name="adminUsername">
    </div>

    <div class="FormField">
      <label>管理员邮箱</label>
      <input name="adminEmail">
    </div>

    <div class="FormField">
      <label>管理员密码</label>
      <input type="password" name="adminPassword">
    </div>

    <div class="FormField">
      <label>确认密码</label>
      <input type="password" name="adminPasswordConfirmation">
    </div>
  </div>

  <div class="FormButtons">
    <button type="submit">立即安装Flarum</button>
  </div>
</form>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
$(function() {
  $('form :input:first').select();

  $('form').on('submit', function(e) {
    e.preventDefault();

    var $button = $(this).find('button')
      .text('Please Wait...')
      .prop('disabled', true);

    $.post('', $(this).serialize())
      .done(function() {
        window.location.reload();
      })
      .fail(function(data) {
        $('#error').show().text('Something went wrong:\n\n' + data.responseText);

        $button.prop('disabled', false).text('Install FlarumChina');
      });

    return false;
  });
});
</script>
