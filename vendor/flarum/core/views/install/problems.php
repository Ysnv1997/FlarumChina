<h2>Hold Up!</h2>

<p>请解决一下问题，才能继续安装Flarum，如果你无法解决请到 <a href="http://bbs.flarumchina.cn/" target="_blank">Flarum中文网</a>进行讨论.</p>

<div class="Problems">
  <?php foreach ($problems as $problem): ?>
    <div class="Problem">
      <h3 class="Problem-message"><?php echo $problem['message']; ?></h3>
      <?php if (! empty($problem['detail'])): ?>
        <p class="Problem-detail"><?php echo $problem['detail']; ?></p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>
