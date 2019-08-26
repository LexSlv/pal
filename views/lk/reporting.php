<?php
$lastNoticeDate = $notice[0]['date'];

$noticeMonth = (int)date("m", strtotime($lastNoticeDate));


isset($_GET['notice_page']) ? $nextPage = $_GET['notice_page'] + 1 : $nextPage = 1;
isset($_GET['notice_page']) ? $prevPage = $_GET['notice_page'] - 1 : $prevPage = 0;

?>

<div class="lkPage">

    <div class="reportingBlock">

        <?php if (!isset($notice[0]['date'])) { ?>
            <h1>Нет уведомлений</h1>
            <?php if (isset($_GET['notice_page'])): ?>
                <?php if ($_GET['notice_page']!=0): ?>
                    <div class="reportingPagination">
                        <a href="/lk/?notice_page=<?= $prevPage ?>"><span class="before">Назад</span></a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        <?php } else { ?>

            <h2 class="blue">Уведомления за <?= $month[$noticeMonth] ?></h2>

            <?php foreach ($notice as $notice_item): ?>
                <?php $notice_item['icon'] == 0 ? $noticeClass = "success" : $noticeClass = "warning"; ?>
                <span class="<?= $noticeClass ?>"><?= $notice_item['massage'] ?></span>
            <?php endforeach; ?>


            <div class="reportingPagination">
                <?php if ($prevPage >= 0): ?>
                <a @click="changeMonth" href="/lk/?notice_page=<?= $prevPage ?>"><span class="before">Уведомления за <?= $month[$noticeMonth + 1] ?></span></a>
                <?php endif; ?>
                <a @click="changeMonth" href="/lk/?notice_page=<?= $nextPage ?>"><span class="after">Уведомления за <?= $month[$noticeMonth - 1] ?></span></a>

            </div>
        <?php } ?>
    </div>

</div>

