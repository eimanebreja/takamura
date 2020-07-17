<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no">
    <title>TAKAMURA</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body id="body-area">
    <nav>
        <div class="navbar-area">
            <div class="navbar-container">
                <div class="nav-content">
                    <a href="index.php" class="navbar-logo">
                        <img class="logo" src="assets/images/logo_white.svg" alt="">
                        <div class="logo-text">
                            駐車場専用検索サイト
                        </div>
                    </a>
                    <ul class="navbar-menu">
                        <li class="navbar-list"><a class="navbar-link" href="faq.php">よくあるご質問</a></li>
                        <li class="navbar-list"><a class="navbar-link" href="information.php">お役立ち情報</a></li>
                        <li class="navbar-list"><a class="navbar-link" href="">掲載をご希望の方へ</a></li>
                        <li class="navbar-list"><a class="navbar-link-btn" href="contact.php">お問合わせ</a></li>
                    </ul>
                    <div id="menu-icon" class="nav-menu-sp sp">
                        <div class="icon-set">
                            <a class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="slideout-menu">
        <ul>
            <li>
                <a href="faq.php">よくあるご質問</a>
            </li>
            <li>
                <a href="information.php">お役立ち情報 </a>
            </li>
            <li>
                <a href="">掲載をご希望の方へ</a>
            </li>
            <li>
                <a href="">車両データベース</a>
            </li>
            <li>
                <a href="company.php">運営会社 </a>
            </li>
            <li>
                <a href="contact.php">お問合わせ</a>
            </li>
        </ul>
        <div class="logo-copyright">
            <div class="logo">
                <img class="logo" src="assets/images/logo_white.svg" alt="">
            </div>
            <div class="copy-right">
                <p>copyright © 2020 TAKAMURA CORPORATION CO.,LTD.</p>
            </div>
        </div>
    </div>

    <header class="top-header">
        <div class="top-header-area">
            <div class="top-header-container section-container">
                <div class="top-header-content">
                    <form action="">
                        <div class="header-form-group">
                            <div class="form-select-check">
                                <div class="form-select">
                                    <div class="form-control">
                                        <label class="input-label" for="">メーカー</label>
                                        <select class="input-select" name="" id="">
                                            <option value="TOYOTA">TOYOTA</option>
                                            <option value="TOYOTA">TOYOTA</option>
                                        </select>
                                        <img class="arrow" src="assets/images/arrow_select.svg" alt="">
                                    </div>
                                    <div class="form-control">
                                        <label class="input-label" for="">車種</label>
                                        <select class="input-select" name="" id="">
                                            <option value="プリウス">プリウス</option>
                                            <option value="プリウス">プリウス</option>
                                        </select>
                                        <img class="arrow" src="assets/images/arrow_select.svg" alt="">
                                    </div>

                                </div>
                                <div class="form-check">
                                    <div class="form-control-check">
                                        <label class="container">平置き
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-control-check">
                                        <label class="container">機械式
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-control-check">
                                        <label class="container">機械式大型
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-control-check">
                                        <label class="container">シャッター
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-control-check">
                                        <label class="container">屋根
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-other-select">
                                    <div class="form-control">
                                        <label class="input-label" for="">エリア</label>
                                        <select class="input-select" name="" id="">
                                            <option value="プリウス">目黒区</option>
                                            <option value="プリウス">目黒区</option>
                                        </select>
                                        <img class="arrow" src="assets/images/arrow_select.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="btn">検索</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="section-search">
            <div class="section-container">
                <div class="search-title">
                    <p>84件の駐車場が見つかりました</p>
                    <ul class="pagination">
                        <li class="paginate-list"><a class="paginate-link active" href="">1</a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">2</a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">3</a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">4</a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">5</a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">></a></li>
                        <li class="paginate-list"><a class="paginate-link" href="">>></a></li>
                    </ul>
                </div>
                <div class="search-body">
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_1.png" alt="">
                        </div>
                        <div class="search-title-image">
                            クラッシィハウス目黒洗足
                        </div>
                        <div class="search-address">
                            目黒区 洗足1丁目
                        </div>
                        <div class="search-distance">
                            東急目黒線「西小山」駅徒歩8分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_2.png" alt="">
                        </div>
                        <div class="search-title-image">
                            オープンレジデンシア目黒青葉台テラス
                        </div>
                        <div class="search-address">
                            目黒区 青葉台3丁目
                        </div>
                        <div class="search-distance">
                            東急田園都市線「池尻大橋」駅徒歩9分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_3.png" alt="">
                        </div>
                        <div class="search-title-image">
                            サンハイム洗足
                        </div>
                        <div class="search-address">
                            目黒区 洗足2丁目
                        </div>
                        <div class="search-distance">
                            東急目黒線「洗足」駅徒歩2分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_4.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ブランズ碑文谷ブランズ碑文谷ブランズ碑文谷
                        </div>
                        <div class="search-address">
                            目黒区 碑文谷2丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「学芸大学」駅徒歩11分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_5.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ジオ碑文谷一丁目
                        </div>
                        <div class="search-address">
                            目黒区 碑文谷1丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「学芸大学」駅徒歩14分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_6.png" alt="">
                        </div>
                        <div class="search-title-image">
                            コスモセシオン目黒コスモセシオン目黒
                        </div>
                        <div class="search-address">
                            目黒区 下目黒5丁目
                        </div>
                        <div class="search-distance">
                            JR山手線「目黒」駅徒歩18分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_7.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ブランズ八雲
                        </div>
                        <div class="search-address">
                            目黒区 八雲4丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「都立大学」駅徒歩10分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_8.png" alt="">
                        </div>
                        <div class="search-title-image">
                            サニークレスト上目黒壱番館サニークレスト上目黒壱番館
                        </div>
                        <div class="search-address">
                            目黒区 上目黒5丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「祐天寺」駅徒歩9分 / 東急東横線「中目黒」駅徒歩13分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_9.png" alt="">
                        </div>
                        <div class="search-title-image">
                            クラッシィハウス目黒洗足
                        </div>
                        <div class="search-address">
                            目黒区 洗足1丁目
                        </div>
                        <div class="search-distance">
                            東急目黒線「西小山」駅徒歩8分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_10.png" alt="">
                        </div>
                        <div class="search-title-image">
                            オープンレジデンシア目黒青葉台テラス
                        </div>
                        <div class="search-address">
                            目黒区 青葉台3丁目
                        </div>
                        <div class="search-distance">
                            東急田園都市線「池尻大橋」駅徒歩9分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_11.png" alt="">
                        </div>
                        <div class="search-title-image">
                            サンハイム洗足
                        </div>
                        <div class="search-address">
                            目黒区 洗足2丁目
                        </div>
                        <div class="search-distance">
                            東急目黒線「洗足」駅徒歩2分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_12.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ブランズ碑文谷ブランズ碑文谷ブランズ碑文谷
                        </div>
                        <div class="search-address">
                            目黒区 碑文谷2丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「学芸大学」駅徒歩11分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_13.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ジオ碑文谷一丁目
                        </div>
                        <div class="search-address">
                            目黒区 碑文谷1丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「学芸大学」駅徒歩14分
                        </div>
                    </a>

                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_14.png" alt="">
                        </div>
                        <div class="search-title-image">
                            コスモセシオン目黒コスモセシオン目黒
                        </div>
                        <div class="search-address">
                            目黒区 下目黒5丁目
                        </div>
                        <div class="search-distance">
                            JR山手線「目黒」駅徒歩18分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_15.png" alt="">
                        </div>
                        <div class="search-title-image">
                            ブランズ八雲
                        </div>
                        <div class="search-address">
                            目黒区 八雲4丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「都立大学」駅徒歩10分
                        </div>
                    </a>
                    <a href="search-single.php" class="search-result">
                        <div class="search-image">
                            <img src="assets/images/search_16.png" alt="">
                        </div>
                        <div class="search-title-image">
                            サニークレスト上目黒壱番館サニークレスト上目黒壱番館
                        </div>
                        <div class="search-address">
                            目黒区 上目黒5丁目
                        </div>
                        <div class="search-distance">
                            東急東横線「祐天寺」駅徒歩9分 / 東急東横線「中目黒」駅徒歩13分
                        </div>
                    </a>
                </div>
                <ul class="pagination-bottom">
                    <li class="paginate-list"><a class="paginate-link active" href="">1</a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">2</a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">3</a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">4</a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">5</a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">></a></li>
                    <li class="paginate-list"><a class="paginate-link" href="">>></a></li>
                </ul>

                <a href="" class="databas-button">
                    <div class="database-title">
                        車両サイズデータベース <span> ご所有の車両のサイズをご確認いただけます。</span>
                    </div>

                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-area">
            <div class="section-container">
                <div class="footer-content">
                    <ul class="footer-menu">
                        <li class="footer-list"><a class="footer-link" href="faq.php">よくあるご質問</a></li>
                        <li class="footer-list"><a class="footer-link" href="information.php">お役立ち情報</a></li>
                        <li class="footer-list"><a class="footer-link" href="">掲載をご希望の方へ</a></li>
                        <li class="footer-list"><a class="footer-link" href="">車両データベース</a></li>
                        <li class="footer-list"><a class="footer-link" href="company.php">運営会社</a></li>
                    </ul>
                    <div class="footer-contact">
                        <a href="contact.php" class="contact-link">お問合わせ</a>
                    </div>
                </div>
                <div class="footer-copyright">
                    copyright © 2020 TAKAMURA CORPORATION CO.,LTD.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/takamura.js"></script>
</body>

</html>