<?php
    foreach ($rows as $item) {
        ?>
        <li class="<?php echo $item->booking ? '': 'disabled'; ?>">
            <div class="col_one_third pr-data" style="margin-bottom: 0;">
                <?php

                $date = strtotime($item->date_from);
                echo date('j', $date) . ' ' . get_name_month(date('n', $date)) . ' - ' . date('j', strtotime($item->date_to)). ' ' . get_name_month(date('n', $date));
                ?>
            </div>
            <div class="col_one_third pr-price" style="margin-bottom: 0;">
                <?php
                if ($item->location == 'sergeevka') {

                    echo $item->price_full . ' грн.';
                } else { ?>
                    <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/images/icone/4h_1.png" alt="clock" title="Лагерь на пол. дня"/> - 1440 грн.</br>
                    <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/images/icone/8h_1.png" alt="clock" title="Лагерь на весь день"/> - 2680 грн.
                <?php } ?>
            </div>
            <div class="col_one_third pr-lower col_last " style="margin-bottom: 0;">
                <button class="btn btn-primary btn-lg pr-but" data-toggle="modal" data-target="#myModal4"><b style="color: #6d6767;">.</b><?php echo $item->booking ? 'Забронировать': 'Набор закрыт'; ?><b style="color: #6d6767;">.</b></button>
            </div>
        </li>
<?php }?>