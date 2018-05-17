<?php
get_header();
?>
<?php 
  $name = $_POST['req_name'];
  $email  = $_POST['req_mail'];
  $kana = $_POST['req_kana'];
  $company  = $_POST['req_company'];
  $address  = $_POST['req_address'];
  $TelTo      = $_POST['req_tel_to'];
  $Tel      = $_POST['req_tel'];
  $reqMethod      = $_POST['req_method'];
  $text      = $_POST['req_text'];

  $sent = null;
  if ($name) {
    $to      = get_option('admin_email');
    $subject = "From: " . strip_tags($name) . "\r\n";
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h2>お問合せ</h2>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
    $message .= "<tr><td><strong>Kana:</strong> </td><td>" . strip_tags($kana) . "</td></tr>";
    $message .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($company) . "</td></tr>";
    $message .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($address) . "</td></tr>";
    $message .= "<tr><td><strong>Tel To:</strong> </td><td>" . strip_tags($TelTo) . "</td></tr>";
    $message .= "<tr><td><strong>Tel number:</strong> </td><td>" . strip_tags($Tel) . "</td></tr>";
    $message .= "<tr><td><strong>Require method:</strong> </td><td>" . strip_tags($reqMethod) . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($text) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $sent = wp_mail( $to, $subject, $message, $headers );
  }
?>
<main class="main-content">
  <div class="text-center">
    <form name="MyForm" id="MyForm" action="" method="POST">
      <input type="hidden" name="action" value="contact_form">
      <div>
        <div class="padding05 bg-white">
          <div align="center">
            <h2 class="text06">
              CONTACT
            </h2>
            <p class="text09">
              お問合せ
            </p>
            <?php
              if ($name && !$sent) echo '<h5>Send the inquiry failed</h5>';
              if ($name && $sent) echo '<h5>お問い合わせありがとうございました。</h5>';
            ?>
            <img class="img05" src="/wp-content/themes/amorphy/template/images/arrow02.svg" alt="" border="0"/>
            <p class="text16">
              事業に関してのご質問・ご相談など、お気軽にお問合せください。<br/>
              こちらでご記入いただいた個人情報は、当該目的以外で使用することはありません。
            </p>
            <div class="line02">
            </div>

            <div class="table05">
              <div class="row">
                <div class="col-12 col-md-3">
                  <p class="text16 text-left">
                    メールアドレス＊
                  </p>
                </div>
                <div class="col-12 col-md-9">
                  <input class="w-100" type="text" name="req_mail" id="req_mail" size="50"/>
                </div>
              </div>
            </div>

            <div class="line02">
            </div>

            <div class="table05">
              <div class="row text-left">
                <div class="col-12 col-md-3">
                  <p class="text16">
                    お名前／ご担当者名＊
                  </p>
                </div>
                <div class="col-12 col-md-5">
                  <input class="w-100" type="text" name="req_name" id="req_name" size="50"/>
                </div>
              </div>
            </div>

            <div class="line02">
            </div>

            <div class="table05">
              <div class="row text-left">
                <div class="col-12 col-md-3">
                  <p class="text16 text-left">
                    フリガナ＊
                  </p>
                </div>
                <div class="col-12 col-md-5">
                  <input class="w-100" type="text" name="req_kana" id="req_kana" size="50"/>
                </div>
              </div>
            </div>

            <div class="line02">
            </div>

            <div class="table05">
              <div class="row text-left">
                <div class="col-12 col-md-3">
                  <p class="text16">
                    御社名
                  </p>
                </div>
                <div class="col-12 col-md-5">
                  <input class="w-100" type="text" name="req_company" id="req_company" size="50"/>
                </div>
              </div>
            </div>

            <div class="line02">
            </div>

            <div class="table05 text-left">
              <div class="row">
                <div class="col-12 col-md-3">
                  <p class="text16 text-left">
                    ご住所
                  </p>
                </div>
                <div class="col-12 col-md-9">
                  <input class="w-100" type="text" name="req_address" id="req_address" size="50"/>
                </div>
              </div>
            </div>

            <div class="line02">
            </div>

            <div class="table05">
              <div class="row text-left">
                <div class="col-12 col-md-3">
                  <p class="text16">
                    ご連絡先TEL.
                  </p>
                </div>
                <div class="col-12 col-md-5 m-mt8">
                  <input class="contact-input-radio" type="radio" name="req_tel_to" value="ご勤務先" id="req_tel_to1" checked /><label for="req_tel_to1">ご勤務先</label>
                  <input class="contact-input-radio" type="radio" name="req_tel_to" value="携帯電話" id="req_tel_to2"/><label
                  for="req_tel_to2">携帯電話</label>
                  <input class="contact-input-radio" type="radio" name="req_tel_to" value="その他" id="req_tel_to3"/><label
                  for="req_tel_to3">その他</label>
                  <table width="50" border="0" cellspacing="0" cellpadding="0" height="12">
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                  <input class="w-100" type="text" name="req_tel" id="req_tel" size="50"/></div>
              </div>
            </div>
          </div>

          <div class="line02">
          </div>

          <div class="table05 text-left">
            <div class="row">
              <div class="col-12 col-md-3">
                <p class="text16">
                  弊社からのご連絡方法
                </p>
              </div>
              <div class="col-12 col-md-9 m-mt8">
                <input class="contact-input-radio" type="radio" name="req_method" id="req_method1" value="お電話" checked/><label
                for="req_method1">お電話</label>
                <input class="contact-input-radio" type="radio" name="req_method" id="req_method2" value="メール"/><label for="req_method2">メール</label>
              </div>
            </div>
          </div>

          <div class="line02">
            </table>

            <div class="table05 text-left">
              <div class="row">
                <div class="col-12 col-md-3">
                  <p class="text16">
                    お問合せ・ご相談など＊
                  </p>
                </div>
                <div class="col-12 col-md-9 m-mt8">
                  <textarea class="w-100" name="req_text" id="req_text" rows="5" cols="40"></textarea>
                </div>
              </div>
            </div>

            <div class="line03">
              </table>

              <input type="submit" class="button06" name="buttonName" value="メールを送信する" onClick="send_check();"></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</main>
<script>
function send_check(){
  if( $("#req_mail").val() == "" ){
    alert("メールアドレスを入力してください");
    return false;
  }
  if( $("#req_name").val() == "" ){
    alert("お名前／ご担当者名を入力してください");
    return false;
  }
  if( $("#req_kana").val() == "" ){
    alert("フリガナを入力してください");
    return false;
  }
}
</script>
<?php
get_footer();
