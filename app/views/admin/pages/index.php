<h4 class="page-title">Sayfalar</h4>

<?php
function print_tr($pages, $indent = "") {
  if (!is_null($pages)) {
    foreach ($pages as $page) {
      echo "
      <tr>
      <td>" . $page->id . "</td>
      <td>" . $indent . $page->title . "</td>
      <td>" . $page->content . "</td>
      <td>" . $page->created_at . "</td>
      <td>" . $page->updated_at . "</td>

      <td>
      <form action='/admin/pages/destroy' method='post'>
      <a href='/admin/pages/show/" . $page->id . "'
      class='btn btn-default' role='button' title='Göster'><i class='fa fa-search'></i>
      </a>

      <a href='/admin/pages/edit/" . $page->id . "'
      class='btn btn-default' role='button' title='Düzenle'><i class='fa fa-edit'></i>
      </a>

      <input type='hidden' value='" . $page->id . "' id='id' name='id'/>
      <button type='submit' class='btn btn-default' onClick='return confirm(\'Bu kaydı silmek istediğinizden emin misiniz?\');' title='Sil'>
      <i class='fa fa-trash'></i>
      </button>
      </form>
      </td>
      </tr>
      ";
      print_tr($page->all_of_page, $indent . "→");
    }
  }
}
?>

<!-- id="examle" -->
<table id="" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>İd</th>
      <th>Başlık</th>
      <th>İçerik</th>
      <th>Oluştu</th>
      <th>Düzenlendi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php if ($parent_pages) { ?>

    <?php foreach ($parent_pages as $parent_page) { ?>

    <?php print_tr([$parent_page]); ?>

    <?php } ?>

    <?php } else { ?>
    <tr class="text-center"><td colspan="4">Henüz Sayfa mevcut değil</td></tr>
    <?php } ?>
  </tbody>
</table>
<a class="btn btn-primary" href="/admin/pages/create">Sayfa Ekle</a>