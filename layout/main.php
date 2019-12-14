
    <?php
        $page = $_GET['page'];
        if (!empty($page)) {
            include_once $page.'.php';
        } 
        elseif ($page == ""){
            include_once 'content.php';
        }
        else {
            include_once 'content.php';
        }
        ?> 