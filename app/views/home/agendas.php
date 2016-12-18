/*
  <div style="border-bottom: 1px solid #e7e7e7; background-color: #f8f8f8;">
    <div class="container">
      <h2 class="text-center">Haberler</h2> <hr/>
      <div class="row">

        <?php $agendas = Agenda::last(4); ?>
        <?php if ($agendas) { ?>
        <?php foreach ($agendas as $agenda) { ?>
        <div class="col-md-3 col-sm-3 col-xs-6">

          <div class="thumbnail">
            <?php $agendaimages = $agenda->all_of_agendaimage; ?>
            <?php if ($agendaimages) { ?>
            <img src="<?= $agendaimages[0]->image; ?>" style="width:100%; height:200px;" />
            <?php } ?>

            <div class="caption" style="min-height:200px">
              <div class="text-right">
                <?php $date = explode("-", date("Y-m-d", strtotime($agenda->agenda_date))); ?>
                <span class="label label-info"> <?= UTF8Helper::months($date[1] - 1) . " " . $date[2] . "," . $date[0]; ?></span>
              </div>
              <hr>
              <h4>
                <a href="/agendas/show/<?= $agenda->id; ?>"><?= $agenda->subject; ?></a>
              </h4>
              <p><?= substr(UTF8Helper::html_to_clear($agenda->content), 0, 180) . "..."; ?></p>

            </div>
            <p class="text-right"><a href="/home/agendas/show/<?= $agenda->id; ?>" class="btn btn-info btn-sm" role="button" style="font-size:15px;">&#8594;</a></p>
          </div>

        </div>
        <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
*/