<div class="metabox-holder">

<!-- フォローボタン -->
<div id="sns-share" class="postbox">
  <h2 class="hndle"><?php _e( 'シェァボタン', THEME_NAME ) ?></h2>
  <div class="inside">
    <p><?php _e( 'シェァボタンの表示に関する設定です。', THEME_NAME ) ?></p>
    <table class="form-table">
      <tbody>

        <!-- プレビュー画面 -->
        <tr>
          <th scope="row">
            <label><?php _e( 'プレビュー', THEME_NAME ) ?></label>
          </th>
          <td>
            <div class="demo">
            <?php //テンプレートの読み込み
              if (is_sns_follow_buttons_visible())
                get_template_part('/tmp/sns-share-buttons'); ?>
            </div>
          </td>
        </tr>

        <!-- シェァボタンの表示 -->
        <tr>
          <th scope="row">
            <label for="<?php echo OP_SNS_SHARE_BUTTONS_VISIBLE; ?>"><?php _e( 'シェァボタンの表示', THEME_NAME ) ?></label>
          </th>
          <td>
             <input type="checkbox" name="<?php echo OP_SNS_SHARE_BUTTONS_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_sns_share_buttons_visible()); ?>><?php _e("メインカラムのシェァボタンを表示する",THEME_NAME ); ?>
            <p class="tips"><?php _e( '投稿・固定ページのメインカラムにあるシェアボタンの表示を切り替えます。', THEME_NAME ) ?></p>
          </td>
        </tr>

        <!-- シェァメッセージ -->
        <tr>
          <th scope="row">
            <label for="<?php echo OP_SNS_SHARE_MESSAGE; ?>"><?php _e( 'シェァメッセージ', THEME_NAME ) ?></label>
          </th>
          <td>
            <input type="text" name="<?php echo OP_SNS_SHARE_MESSAGE; ?>" size="<?php echo DEFAULT_INPUT_COLS; ?>" value="<?php echo get_sns_share_message(); ?>" placeholder="<?php _e( 'シェァメッセージの入力', THEME_NAME ); ?>">
            <p class="tips"><?php _e( '訪問者にシェァを促すメッセージを入力してください。', THEME_NAME ) ?></p>
          </td>
        </tr>

        <!-- 表示切替 -->
        <tr>
          <th scope="row">
            <label><?php _e( '表示切替', THEME_NAME ) ?></label>
          </th>
          <td>
            <p><?php _e( '個々のシェアボタンの表示切り替え。', THEME_NAME ) ?></p>
            <ul>
              <li><input type="checkbox" name="<?php echo OP_TWITTER_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_twitter_share_button_visible()); ?>><?php _e( 'Twitter', THEME_NAME ) ?></li>
              <li><input type="checkbox" name="<?php echo OP_FACEBOOK_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_facebook_share_button_visible()); ?>><?php _e( 'Facebook', THEME_NAME ) ?></li>
              <li><input type="checkbox" name="<?php echo OP_HATEBU_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_hatebu_share_button_visible()); ?>><?php _e( 'Google+', THEME_NAME ) ?></li>
              <li><input type="checkbox" name="<?php echo OP_GOOOGLE_PLUS_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_gooogle_plus_share_button_visible()); ?>><?php _e( 'はてなブックマーク', THEME_NAME ) ?></li>
              <li><input type="checkbox" name="<?php echo OP_POCKET_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_pocket_share_button_visible()); ?>><?php _e( 'Pocket', THEME_NAME ) ?></li>
              <li><input type="checkbox" name="<?php echo OP_LINE_AT_SHARE_BUTTON_VISIBLE; ?>" value="1"<?php the_checkbox_checked(is_line_at_share_button_visible()); ?>><?php _e( 'LINE@', THEME_NAME ) ?></li>
            </ul>
            <p><?php _e( '表示するシェアボタンを選択してください。', THEME_NAME ) ?></p>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>




</div><!-- /.metabox-holder -->