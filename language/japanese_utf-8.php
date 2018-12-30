<?php

// +---------------------------------------------------------------------------+
// | japanese_utf-8.php                                                        |
// | This is the Japanese language (UTF-8) page for the Geeklog Theme Editor   |
// |   Plugin!                                                                 |
// |                                                                           |
// +---------------------------------------------------------------------------|
// | Copyright (C) 2006 - geeklog AT mystral-kk DOT net                        |
// |                                                                           |
// | Constructed with the Universal Plugin                                     |
// | Copyright (C) 2002 by the following authors:                              |
// | Tom Willett                 -    twillett@users.sourceforge.net           |
// | Blaine Lang                 -    langmail@sympatico.ca                    |
// | The Universal Plugin is based on prior work by:                           |
// | Tony Bibbs                  -    tony@tonybibbs.com                       |
// +---------------------------------------------------------------------------|
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software               |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA|
// |                                                                           |
// +---------------------------------------------------------------------------|
//
// $Id$

$LANG_THM = array (
    'plugin'            => 'プラグイン',
	'access_denied'     => 'アクセスは拒否されました。',
	'access_denied_msg' => 'このページにアクセスできるのは，Rootユーザーだけです。あなたのユーザー名とIPアドレスは記録されました。',
	'admin'		        => 'テーマエディタ',
	'install_header'	=> 'テーマエディタプラグインのインストール/アンインストール',
	'installed'         => 'テーマエディタプラグインはインストールされています。',
	'uninstalled'       => 'テーマエディタプラグインはインストールされていません。',
	'install_success'	=> 'インストールに成功しました。',
	'install_failed'	=> 'インストールに失敗しました。詳細はエラーログ(error.log)をご覧ください。',
	'uninstall_msg'		=> 'テーマエディタプラグインはアンインストールされました。',
	'install'           => 'インストール',
	'uninstall'         => 'アンインストール',
    'warning'           => '警告！　テーマエディタプラグインは有効なままです。',
    'enabled'           => 'アンインストールする前に，テーマエディタプラグインを無効にしてください。',
    'readme'            => 'ちょっと待って！　「インストール」をクリックする前に，お読みください：',
    'installdoc'        => 'インストール手順書（英語）',
    'installdoc_ja'     => 'インストール手順書（日本語）',
	'menu_label'        => 'テーマエディタ',
	'cc_label'          => 'テーマエディタ',
	'script_disabled'   => 'JavaScriptが無効になっています。操作性を向上させるには，JavaScriptを有効にしてください。',
	'theme_edited'      => '編集中のテーマ',
	'file_edited'       => '編集中のファイル',
	'select'            => '選択',
	'preview'           => 'プレビュー',
	'save'              => '保存',
	'init'              => '初期設定に戻す',
	'vars_available'    => '利用可能なテンプレート変数',
	'save_success'      => 'ファイルを保存しました。',
	'save_fail'         => 'エラー：ファイルを保存できませんでした。',
	'init_success'      => 'ファイルを初期化しました。',
	'init_fail'         => 'エラー：ファイルを初期化できませんでした。',
	'not_writable'      => 'このファイルは編集禁止になっているか，存在していません。',
	'file_changed'      => "テーマないしファイルが追加・変更されています。データベースの情報を更新するには，<a href='%s'>ここ</a>をクリックしてください。",
	'help_advanced_editor' => 'advanced_editor: アドバンストエディタを起動するためのコード',
	'help_button_advsearch' => 'button_advsearch: \'advanced search\'の和訳',
	'help_button_search'   => 'button_search: text for \'search\'の和訳',
	'help_centerblockfooter-span' => 'centerblockfooter-span:',
	'help_comments_with_count' => 'comments_with_count: コメントその数',
	'help_contributedby_user' => 'contributedby_user: 記事の投稿者',
	'help_copyright_notice'   => 'copyright_notice: コピーライト表示',
	'help_css_url'         => 'css_url: CSSファイルのURL',
	'help_datetime'        => 'datetime: 現在の日時',
	'help_direction'       => 'direction: テキストを表示する方向',
	'help_edit_link' => 'edit_link: 記事を編集するためのリンク',
	'help_email_icon' => 'email_icon: 「友だちにメールで教える」のアイコン',
	'help_end_comments_anchortag' => 'end_comments_anchortag: コメントブロックの終了タグ',
	'help_end_contributedby_anchortag' => 'end_contributedby_anchortag: 投稿者ブロックの終了タグ',
	'help_end_storylink_anchortag' => 'end_storylink_anchortag: 関連情報（リンク）ブロックの終了タグ',
	'help_end_trackbacks_anchortag' => 'end_trackbacks_anchortag: トラックバックブロックの終了タグ',
	'help_execution_textandtime' => 'execution_textandtime: 実行時間を表示するテキスト',
	'help_feed_url'        => 'feed_url: フィードファイルのURL',
	'help_geeklog_blocks'  => 'geeklog_blocks: システムデフォルトのブロックのプレースホルダー',
	'help_geeklog_url'     => 'geeklog_url: Geeklog本家(geeklog.net)のURL',
	'help_lang_contributed_by' => 'lang_contributed_by: \'contributed by\'の和訳',
	'help_lang_views' => 'lang_views:',
	'help_left_blocks'     => 'left_blocks: 左ブロックのプレースホルダー',
	'help_menu_elements'   => 'menu_elements: サイト全体のメニューのプレースホルダー',
	'help_page_selector' => 'page_selector: Google風ページングのプレースホルダー',
	'help_page_title'      => 'page_title: ページのタイトル',
	'help_pdf_icon' => 'pdf_icon: pdfアイコン',
	'help_plg_headercode'  => 'plg_headercode: HTMLのヘッダに挿入されるJavaScriptコード',
	'help_post_comment_link' => 'post_comment_link: コメント投稿用リンク',
	'help_powered_by'      => 'powered_by: \'powered_by\'の和訳',
	'help_print_icon' => 'print_icon: 印刷用アイコン',
	'help_readmore_link' => 'readmore_link: \'全文表示\'用リンク',
	'help_right_blocks'    => 'right_blocks: 右ブロックのプレースホルダー',
	'help_site_logo'       => 'site_logo: サイトのロゴのURL',
	'help_site_name'       => 'site_name: サイト名',
	'help_site_slogan'     => 'site_slogan: サイトのスローガン',
	'help_site_url'        => 'site_url: サイトのURL',
	'help_start_comments_anchortag' => 'start_comments_anchortag: コメントブロックの開始タグ',
	'help_start_contributedby_anchortag' => 'start_contributedby_anchortag: 投稿者ブロックの開始タグ',
	'help_start_storylink_anchortag' => 'start_storylink_anchortag: 関連情報（リンク）ブロックの開始タグ',
	'help_start_trackbacks_anchortag' => 'start_trackbacks_anchortag: トラックバックブロックの開始タグ',
	'help_story_anchortag_and_image' => 'story_anchortag_and_image: 記事タグと画像',
	'help_story_date' => 'story_date: 記事の投稿日時',
	'help_story_hits' => 'story_hits: 記事の表示回数',
	'help_story_introtext' => 'story_introtext: 記事の導入部',
	'help_story_title' => 'story_title: 記事のタイトル',
	'help_theme'           => 'theme: Geeklogが使用しているテーマ名',
	'help_trackbacks_with_count' => 'trackbacks_with_count: トラックバックとその数',
	'help_welcome_msg'     => 'welcome_msg: サイトの上部に表示される「ようこそ」のテキスト',
);

?>
