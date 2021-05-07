# php_session_hijacking_test
セッションハイジャックを検証するPHPコード<br>
<br>
■検証パターン<br>
１．Fifefoxでセッション（COOKIE）を作成する。<br>
２．FifefoxのCOOKIE値を表示する（攻撃者がセッション値を入手したと仮定する）<br>
３．ChromeからCOOKIE値を偽装して接続する（セッションハイジャックを検証する）<br>
<br>
■検証環境<br>
COOKIEを使い分けるためブラウザを2種類用意<br>
１．Fifefox<br>
２．Chrome（アドオン：(EditThisCookie）<br>
※ChromeにEditThisCookie（chrome ウェブストア）を追加してCOOKIEを編集できるようにする。<br>


