
    <?php foreach (($blocks?:[]) as $block): ?>
        <tr blockId="<?= $block['block'] ?>">
            <td class="mdl-data-table__cell--non-numeric <?= $block['numberOfTransactions']?'bold':'' ?>"><a menuLink="blocksLink" href="/block/<?= $block['block'] ?>"><?= $block['height'] ?></a></td>
            <td class="mdl-data-table__cell--non-numeric dateTd"><?= $block['timestamp'] ?></td>
            <td class="mdl-data-table__cell--non-numeric removeTiny"><?= $block['numberOfTransactions'] ?></td>
            <td class="mdl-data-table__cell--non-numeric removeSmall">
                <span class="underText" id="blockListTotalAmountNQT<?= $block['height'] ?>"><?= $block['totalAmountNQT'] ?></span>
                <div class="mdl-tooltip mdl-tooltip--right mdl-tooltip--large alignLeft" for="blockListTotalAmountNQT<?= $block['height'] ?>"> BTC: <?= number_format(($market["btc"] * str_replace("'", "", $block['totalAmountNQT'])), 8, ".", "'") ?><br>USD: <?= number_format(($market["usd"] * str_replace("'", "", $block['totalAmountNQT'])), 8, ".", "'") ?><br>EUR: <?= number_format(($market["eur"] * str_replace("'", "", $block['totalAmountNQT'])), 8, ".", "'") ?> </div>
            </td>
            <td class="mdl-data-table__cell--non-numeric removeSmall">
                <span class="underText" id="blockListFee<?= $block['height'] ?>"><?= $block['totalFeeNQT'] ?></span>
                <div class="mdl-tooltip mdl-tooltip--right mdl-tooltip--large alignLeft" for="blockListFee<?= $block['height'] ?>"> BTC: <?= number_format(($market["btc"] * str_replace("'", "", $block['totalFeeNQT'])), 8, ".", "'") ?><br>USD: <?= number_format(($market["usd"] * str_replace("'", "", $block['totalFeeNQT'])), 8, ".", "'") ?><br>EUR: <?= number_format(($market["eur"] * str_replace("'", "", $block['totalFeeNQT'])), 8, ".", "'") ?> </div>
            </td>
            <td class="mdl-data-table__cell--non-numeric longTd">
                <a menuLink="accountsLink" href="/account/<?= $block['generator'] ?>"><?= $block['generatorRS'] ?></a> 
                <i accountId="<?= $block['generator'] ?>" class="material-icons blockExpand floatRight removeTiny">keyboard_arrow_down</i>
            </td>
            <td class="mdl-data-table__cell--non-numeric removeMedium"><?= $block['payloadLength'] ?></td>
            <td class="mdl-data-table__cell--non-numeric removeMedium"><?= $block['baseTarget'] ?></td>
            <td class="mdl-data-table__cell--non-numeric removeTiny"><i blockId="<?= $block['block'] ?>" class="material-icons blockExpand floatRight">keyboard_arrow_down</i></td>
        </tr>
        <tr id="accountDetails<?= $block['generator'] ?>" class="hide removeTiny"><td class="mdl-data-table__cell--non-numeric" colspan="9"></td></tr>
        <tr id="blockDetails<?= $block['block'] ?>" class="hide removeTiny"><td class="mdl-data-table__cell--non-numeric" colspan="9"></td></tr>
    <?php endforeach; ?>
