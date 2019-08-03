<h2>Update Flarum</h2>

<p>输入数据库密码继续更新Flarum，在此之前你应该 <strong>备份数据库</strong>. 如果你有任何问题，请在 <a href="http://bbs.flarumchina.cn/" target="_blank">Flarum 中文网</a>进行讨论.</p>

<form method="post">
  <div id="error" style="display:none"></div>

  <div class="FormGroup">
    <div class="FormField">
      <label>Database Password</label>
      <input type="password" name="databasePassword">
    </div>
  </div>

  <div class="FormButtons">
    <button type="submit">Update Flarum</button>
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

        $button.prop('disabled', false).text('Update Flarum');
      });

    return false;
  });
});
</script>
