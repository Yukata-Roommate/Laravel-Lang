<?php

return [
    /*----------------------------------------*
     * Auth
     *----------------------------------------*/

    "password"                      => "パスワード",
    "password_confirmation"         => "パスワード(確認)",
    "current_password"              => "現在のパスワード",
    "current_password_confirmation" => "現在のパスワード(確認)",
    "new_password"                  => "新しいパスワード",
    "new_password_confirmation"     => "新しいパスワード(確認)",
    "old_password"                  => "古いパスワード",
    "old_password_confirmation"     => "古いパスワード(確認)",

    "remember" => "ログイン状態を保持",
    "forget"   => "パスワードを忘れた",

    "token"         => "トークン",
    "api_token"     => "APIトークン",
    "access_token"  => "アクセストークン",
    "refresh_token" => "リフレッシュトークン",

    "client_id"     => "クライアントID",
    "client_secret" => "クライアントシークレット",
    "client_token"  => "クライアントトークン",

    "secret"       => "秘密",
    "secret_key"   => "秘密鍵",
    "secret_token" => "秘密トークン",

    /*----------------------------------------*
     * Status
     *----------------------------------------*/

    "state"    => "状態",
    "active"   => "有効",
    "deactive" => "無効",
    "public"   => "公開",
    "private"  => "非公開",

    "status"         => "ステータス",
    "status_code"    => "ステータスコード",
    "status_name"    => "ステータス名",
    "status_type"    => "ステータス種類",
    "status_message" => "ステータスメッセージ",

    /*----------------------------------------*
     * Role
     *----------------------------------------*/

    "role"  => "権限",
    "roles" => [
        "system" => "システム管理者",
        "admin"  => "管理者",
        "user"   => "ユーザー",
    ],

    "ability"  => "権限",
    "abilities" => [
        "only_system"  => "システムのみ",
        "admin_higher" => "管理者以上",
        "user_higher"  => "ユーザー以上",
    ],

    /*----------------------------------------*
     * Locale
     *----------------------------------------*/

    "locale"   => "ロケール",
    "lang"     => "言語",
    "timezone" => "タイムゾーン",
    "locales"  => [
        "en" => "英語",
        "ja" => "日本語",
    ],

    /*----------------------------------------*
     * Time
     *----------------------------------------*/

    "date"        => "日付",
    "time"        => "時間",
    "datetime"    => "日時",
    "year"        => "年",
    "month"       => "月",
    "week"        => "週",
    "day"         => "日",
    "hour"        => "時",
    "minute"      => "分",
    "second"      => "秒",
    "millisecond" => "ミリ秒",

    "daily"    => "毎日",
    "weekly"   => "毎週",
    "biweekly" => "隔週",
    "monthly"  => "毎月",
    "yearly"   => "毎年",
    "hourly"   => "毎時",
    "minutely" => "毎分",
    "secondly" => "毎秒",

    "created_at"     => "作成日時",
    "updated_at"     => "更新日時",
    "deleted_at"     => "削除日時",
    "activated_at"   => "有効化日時",
    "deactivated_at" => "無効化日時",
    "published_at"   => "公開日時",
    "unpublished_at" => "非公開日時",
    "applied_at"     => "適用日時",
    "expired_at"     => "有効期限",
    "registered_at"  => "登録日時",
    "accessed_at"    => "アクセス日時",
    "started_at"     => "開始日時",
    "ended_at"       => "終了日時",
    "began_at"       => "開始日時",
    "finished_at"    => "終了日時",

    "first_created_at"     => "初回作成日時",
    "first_updated_at"     => "初回更新日時",
    "first_deleted_at"     => "初回削除日時",
    "first_activated_at"   => "初回有効化日時",
    "first_deactivated_at" => "初回無効化日時",
    "first_published_at"   => "初回公開日時",
    "first_unpublished_at" => "初回非公開日時",
    "first_applied_at"     => "初回適用日時",
    "first_expired_at"     => "初回有効期限",
    "first_registered_at"  => "初回登録日時",
    "first_accessed_at"    => "初回アクセス日時",
    "first_started_at"     => "初回開始日時",
    "first_ended_at"       => "初回終了日時",
    "first_began_at"       => "初回開始日時",
    "first_finished_at"    => "初回終了日時",

    "last_created_at"     => "最終作成日時",
    "last_updated_at"     => "最終更新日時",
    "last_deleted_at"     => "最終削除日時",
    "last_activated_at"   => "最終有効化日時",
    "last_deactivated_at" => "最終無効化日時",
    "last_published_at"   => "最終公開日時",
    "last_unpublished_at" => "最終非公開日時",
    "last_applied_at"     => "最終適用日時",
    "last_expired_at"     => "最終有効期限",
    "last_registered_at"  => "最終登録日時",
    "last_accessed_at"    => "最終アクセス日時",
    "last_started_at"     => "最終開始日時",
    "last_ended_at"       => "最終終了日時",
    "last_began_at"       => "最終開始日時",
    "last_finished_at"    => "最終終了日時",

    "start"    => "開始",
    "stop"     => "停止",
    "end"      => "終了",
    "begin"    => "開始",
    "finish"   => "終了",
    "before"   => "前",
    "after"    => "後",
    "previous" => "前",
    "next"     => "次",
    "first"    => "最初",
    "last"     => "最後",

    "duration" => "期間",
    "term"     => "期間",
    "period"   => "期間",
    "since"    => "開始",
    "until"    => "終了",

    "now"    => "現在",
    "past"   => "過去",
    "future" => "未来",

    "from" => "開始",
    "to"   => "終了",

    "temporary"   => "一時的",
    "permanently" => "永久的",
    "temp"        => "一時",
    "perm"        => "永久",

    "today"     => "今日",
    "tomorrow"  => "明日",
    "yesterday" => "昨日",
    "recently"  => "最近",

    "sunday"    => "日曜日",
    "monday"    => "月曜日",
    "tuesday"   => "火曜日",
    "wednesday" => "水曜日",
    "thursday"  => "木曜日",
    "friday"    => "金曜日",
    "saturday"  => "土曜日",

    "sun" => "日",
    "mon" => "月",
    "tue" => "火",
    "wed" => "水",
    "thu" => "木",
    "fri" => "金",
    "sat" => "土",

    /*----------------------------------------*
     * Personal
     *----------------------------------------*/

    "name"        => "名前",
    "first_name"  => "名",
    "last_name"   => "姓",
    "given_name"  => "名",
    "family_name" => "姓",
    "full_name"   => "フルネーム",
    "nickname"    => "ニックネーム",
    "email"       => "メールアドレス",
    "address"     => "住所",
    "birthday"    => "誕生日",
    "age"         => "年齢",
    "tel"         => "電話番号",
    "fax"         => "FAX番号",
    "mobile"      => "携帯電話番号",
    "privacy"     => "プライバシー",
    "business"    => "ビジネス",

    /*----------------------------------------*
     * Form
     *----------------------------------------*/

    "select"     => "選択",
    "selected"   => "選択済",
    "unselected" => "未選択",

    /*----------------------------------------*
     * Accounting
     *----------------------------------------*/

    "price"      => "価格",
    "quantity"   => "数量",
    "total"      => "合計",
    "discount"   => "割引",
    "tax"        => "税金",
    "subtotal"   => "小計",
    "grandtotal" => "総計",
    "payment"    => "支払い",

    /*----------------------------------------*
     * Rating
     *----------------------------------------*/

    "rating"      => "評価",
    "score"       => "スコア",
    "star"        => "星",
    "stars"       => "星",
    "point"       => "ポイント",
    "points"      => "ポイント",
    "level"       => "レベル",
    "levels"      => "レベル",
    "rank"        => "ランク",
    "ranks"       => "ランク",
    "grade"       => "グレード",
    "grades"      => "グレード",
    "result"      => "結果",
    "results"     => "結果",
    "evaluation"  => "評価",
    "evaluations" => "評価",
    "assessment"  => "評価",
    "assessments" => "評価",
    "judgement"   => "判定",
    "judgements"  => "判定",
    "opinion"     => "意見",
    "opinions"    => "意見",
    "review"      => "レビュー",
    "reviews"     => "レビュー",
    "feedback"    => "フィードバック",
    "feedbacks"   => "フィードバック",

    "hall_of_fame" => "殿堂入り",
    "awesome"      => "最高",
    "excellent"    => "素晴らしい",
    "great"        => "優秀",
    "very_good"    => "とても良い",
    "good"         => "良い",
    "poor"         => "悪い",
    "not_for_me"   => "好みでない",
    "undetermined" => "未確定",

    /*----------------------------------------*
     * File
     *----------------------------------------*/

    "file"        => "ファイル",
    "files"       => "ファイル",
    "filename"    => "ファイル名",
    "extension"   => "拡張子",
    "size"        => "サイズ",
    "mime"        => "MIME",
    "mime_type"   => "MIMEタイプ",
    "path"        => "パス",
    "directory"   => "ディレクトリ",
    "folder"      => "フォルダ",
    "image"       => "画像",
    "images"      => "画像",
    "photo"       => "写真",
    "photos"      => "写真",
    "video"       => "ビデオ",
    "videos"      => "ビデオ",
    "audio"       => "オーディオ",
    "audios"      => "オーディオ",
    "document"    => "ドキュメント",
    "documents"   => "ドキュメント",
    "excel"       => "Excel",
    "word"        => "Word",
    "powerpoint"  => "PowerPoint",
    "slide"       => "スライド",
    "spreadsheet" => "スプレッドシート",

    "text"     => "Text",
    "csv"      => "CSV",
    "tsv"      => "TSV",
    "json"     => "JSON",
    "xml"      => "XML",
    "html"     => "HTML",
    "markdown" => "Markdown",

    /*----------------------------------------*
     * Order
     *----------------------------------------*/

    "order"      => "順序",
    "sort"       => "並び替え",
    "ascending"  => "昇順",
    "ascend"     => "昇順",
    "asc"        => "昇",
    "descending" => "降順",
    "descend"    => "降順",
    "desc"       => "降",

    /*----------------------------------------*
     * Relationship
     *----------------------------------------*/

    "parent"   => "親",
    "parents"  => "親",
    "child"    => "子",
    "children" => "子供",

    /*----------------------------------------*
     * Color
     *----------------------------------------*/

    "color"  => "色",
    "colors" => "色",

    "black"  => "黒",
    "white"  => "白",
    "gray"   => "灰",

    "red"        => "赤",
    "vermilion"  => "朱",
    "orange"     => "橙",
    "amber"      => "琥珀",
    "yellow"     => "黄",
    "lime"       => "黄緑",
    "chartreuse" => "黄緑",
    "harlequin"  => "緑",
    "green"      => "緑",
    "malachite"  => "コバルトグリーン",
    "spring"     => "スプリンググリーン",
    "turquoise"  => "ターコイズグリーン",
    "cyan"       => "シアン",
    "cerulean"   => "セルリアンブルー",
    "azure"      => "アズール",
    "cobalt"     => "コバルトブルー",
    "blue"       => "青",
    "indigo"     => "藍",
    "violet"     => "紫",
    "purple"     => "紫",
    "magenta"    => "マゼンタ",
    "fuchsia"    => "紫紅",
    "rose"       => "バラ",
    "crimson"    => "深紅",

    "brown"  => "茶",
    "beige"  => "ベージュ",
    "cream"  => "クリーム",
    "ivory"  => "アイボリー",
    "khaki"  => "カーキ",
    "maroon" => "マルーン",
    "olive"  => "オリーブ",
    "peach"  => "ピーチ",
    "pink"   => "ピンク",
    "salmon" => "サーモン",

    "gold"   => "金",
    "silver" => "銀",
    "bronze" => "銅",
    "copper" => "銅",

    /*----------------------------------------*
     * Etc.
     *----------------------------------------*/

    "number"        => "番号",
    "title"         => "タイトル",
    "subject"       => "件名",
    "content"       => "コンテンツ",
    "contents"      => "内容",
    "message"       => "メッセージ",
    "comment"       => "コメント",
    "description"   => "説明",
    "memo"          => "メモ",
    "note"          => "ノート",
    "notes"         => "ノート",
    "keyword"       => "キーワード",
    "keywords"      => "キーワード",
    "tag"           => "タグ",
    "tags"          => "タグ",
    "label"         => "ラベル",
    "labels"        => "ラベル",
    "summary"       => "要約",
    "type"          => "種類",
    "category"      => "カテゴリ",
    "config"        => "設定",
    "configuration" => "構成",
    "pattern"       => "パターン",
    "template"      => "テンプレート",
    "format"        => "フォーマット",
    "icon"          => "アイコン",
    "url"           => "URL",
    "link"          => "リンク",
    "platform"      => "プラットフォーム",
    "other"         => "その他",
];
