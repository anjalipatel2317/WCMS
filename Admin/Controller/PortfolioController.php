<?php

include "../head.inc.php";
$PortfolioMgr = new PortfolioManager();


if(isset($_POST['edittemp'])){

    if($PortfolioMgr->updatePortfolio($_POST))
    {

        $_SESSION['msg'] = "Template has been updated successfully...";
        header('location:../portfolio.php');
    } else {
        $_SESSION['msg'] = "Fail to edit Template.... Please Try again";
        header('location:../portfolio.php');
    }

}
