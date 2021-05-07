# php_session_hijacking_test
セッションハイジャックを検証するPHPコード

■検証パターン
１．Fifefoxでセッション（COOKIE）を作成する。
２．FifefoxのCOOKIE値を表示する（攻撃者がセッション値を入手したと仮定する）
３．ChromeからCOOKIE値を偽装して接続する（セッションハイジャックを検証する）

■検証環境
COOKIEを使い分けるためブラウザを2種類用意
１．Fifefox
２．Chrome（アドオン：(EditThisCookie）
※ChromeにEditThisCookie（chrome ウェブストア）を追加してCOOKIEを編集できるようにする。
