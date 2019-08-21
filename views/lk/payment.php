<div class="lkPage">
    <div class="paymentBlock">
         <?php foreach ($bills AS $bill): ?>
         <?php
         $billMonth = substr(date("m", strtotime($bill['date'])),1);
         $billYear = date("Y", strtotime($bill['date']));

             ?>
        <h3>Задолженность по членским взносам за <?= $month[$billMonth] ?> <?= $billYear ?> года:</h3>
        <h3 class="red"><?= $bill['summ'] ?> тенге</h3>
        <button class="blueButton blue" >Оплатить</button>
        <?php endforeach; ?>
    </div>
</div>