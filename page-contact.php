<!-- 
Template Name: contact template
-->
<?php 
get_header(); 
get_template_part('first-view-parts');
?>
  <div class="p-contact-form">
    <form class="l-contact-form" action="">
      <div class="p-contact-form__wrap">
        <div class="p-contact-form__content">
          <label>※会社名</label>
          <input type="text" name="name" placeholder="例）株式社会〇〇">
        </div>
        <div class="p-contact-form__content">
          <label>※お名前</label>
          <input type="text" name="name" placeholder="例）山田太郎">
        </div>
        <div class="p-contact-form__content">
          <label>※ふりがな</label>
          <input type="text" name="name" placeholder="例）やまだたろう">
        </div>
        <div class="p-contact-form__content">
          <label>※メールアドレス</label>
          <input type="text" name="email" placeholder="例）guest@example.com">
        </div>
        <div class="p-contact-form__content contact-box">
          <label>※お問い合わせ内容</label>
          <textarea name="content" placeholder="お問合せ内容を入力"></textarea>
        </div>
        <div class="l-content-form-btn">
          <button type="submit" class="content-form-btn">送信</button>
        </div>
      </div>
    </form>
  </div>

<?php get_footer(); ?>