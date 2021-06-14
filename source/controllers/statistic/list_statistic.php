<?php
include_once("source/models/statistic.php");
$sta = new Exemp();
$result = $sta->getResult();
$result3 = $sta->deleteDuplicate();
$result2 = $sta->getListStatistic();
include_once("source/views/statistic/list_statistic.php");
?>