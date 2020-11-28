<!doctype html>
<html lang="hu">
    <head>
        <?php include 'components/pagehead.php'; ?>
    </head>
    <body onload="abLoader()" style="height: 100vh">
        <div id="ab-loader">
            <div class="ab-loader-icon"></div>
            <div class="ab-loader-icon-sm"></div>
        </div>
        <?php include 'components/header.php'; ?>
        <main style="opacity: 0" id="abMain">
            <div class="container-fluid">
                <div class="row">
                    <div class="ab-mobile-overlay d-lg-none"></div>
                    <div class="col-12 col-lg-2 ab-column-left ab-menu-wrap">
                        <div class="ab-menu-wrap-close d-lg-none"><i class="fas fa-times"></i></div>
                        <?php include 'components/navbar.php'; ?>
                    </div>
                    <div class="col-12 col-lg-10 ab-column-right px-4 px-lg-5 pt-4 pb-5">
                        <div class="ab-page-content">
                            <div class="ab-page-head">
                                <h2 class="ab-page-title"><?php echo $contentTitle; ?></h2>
                            </div>
                            <?php
                                echo ($content);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'scripts.php'; ?>
    </body>
</html>