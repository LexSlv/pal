<?php

$lastNoticeDate = $notice[0]['date'];
$noticeMonth = substr(date("m",strtotime($lastNoticeDate)),1);

isset($_GET['notice_page']) ? $nextPage = $_GET['notice_page'] + 1 : $nextPage = 1;

isset($_GET['notice_page']) ? $prevPage = $_GET['notice_page'] - 1 : $prevPage = 0;

?>

<div class="lkPage">

    <div class="reportingBlock">

        <h2 class="blue">Уведомления за <?= $month[$noticeMonth] ?></h2>

        <?php foreach ($notice as $notice_item): ?>
        <?php $notice_item['icon'] == 0 ? $noticeClass = "success" : $noticeClass = "warning"; ?>
        <span class="<?= $noticeClass ?>"><?= $notice_item['massage'] ?></span>

        <?php endforeach; ?>
        <div class="reportingPagination">
            <?php if($prevPage>=0): ?>
            <a href="/lk/?notice_page=<?= $prevPage ?>"><span class="before">Уведомления за март</span></a>
            <?php endif; ?>
            <a href="/lk/?notice_page=<?= $nextPage ?>"><span class="after">Уведомления за май</span></a>
        </div>

    </div>

</div>