<h4 class="page-title">Galeriler</h4>

<table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>İd</th>
      <th>Ad</th>
      <th>Oluştu</th>
      <th>Düzenlendi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php if ($galleries) { ?>
    <?php foreach ($galleries as $gallery) { ?>

    <tr>
      <td><?= $gallery->id; ?></td>
      <td><?= $gallery->name; ?></td>
      <td><?= $gallery->created_at; ?></td>
      <td><?= $gallery->updated_at; ?></td>

      <td>
        <form action="/admin/galleries/destroy" method="post">
          <a href="/admin/galleries/show/<?= $gallery->id; ?>"
            class="btn btn-default" role="button" title="Göster"><i class="fa fa-search"></i>
          </a>

          <a href="/admin/galleries/edit/<?= $gallery->id; ?>"
            class="btn btn-default" role="button" title="Düzenle"><i class="fa fa-edit"></i>
          </a>

          <input type="hidden" value="<?= $gallery->id; ?>" id="id" name="id"/>
          <button type="submit" class="btn btn-default" onClick="return confirm('Bu kaydı silmek istediğinizden emin misiniz?');" title="Sil">
            <i class="fa fa-trash"></i>
          </button>
        </form>
      </td>
    </tr>

    <?php } ?>
    <?php } else { ?>
    <tr class="text-center"><td colspan="4">Henüz Galeri mevcut değil</td></tr>
    <?php } ?>
  </tbody>
</table>
<a class="btn btn-primary" href="/admin/galleries/create">Galeri Ekle</a>