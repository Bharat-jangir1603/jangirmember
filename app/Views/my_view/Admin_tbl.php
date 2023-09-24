
<div id="new_admin" style="display:block;">
          <a class="member_id_ clas_mem" href="#" >
            <p style="margin-top: 14px;">New Member</p>
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
<div class="tbl_page">

  <table>
    <tr class="tr_th">
      <th style="width: 50%;">Members</th>
      <th>Status</th>
      <th>Birth</th>
      <th>City</th>
      <th>Action</th>
    </tr>
    <?php if(!empty($result)){
      foreach($result as $val){ ?>
    <tr>
      <td style="display: flex;">
        <div class="dis_non"><i class="logo far fa-user"></i></div>
        <div style="margin-left: 11px;">
          <?= $val->name; ?>
          <br />
          <small><?= $val->work; ?></small>
        </div>
      </td>
      <td><?= $val->status; ?></td>
      <td><?= $val->birth; ?></td>
      <td><?= $val->city; ?></td>
      <td style="display: flex; justify-content: space-evenly;">
        <a href="<?= base_url('update/'.$val->row);?>"><i class="btn fa-solid fa-user-pen"></i></a>
        <a href="<?= base_url('delete/'.$val->row);?>"><i id="cut_row" class="btn fa-solid fa-trash-can"></i></a>
      </td>
    </tr>
    <?php }
    }?>
  </table>
</div>

<div id="new_admin" style="display:block;">
          <a class="admin_id_ clas_mem" href="#" >
            <p style="margin-top: 14px;">New Admin</p>
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
<div class="tbl_page">

  <table id="adad">
    <tr class="tr_th">
      <th style="width: 50%;">Admin</th>
      <th>Work</th>
      <th>Email</th>
      <th>City</th>
    </tr>
    <?php if(!empty($admin)){
      foreach($admin as $val){ ?>
    <tr>
      <td style="display: flex;">
        <div class="dis_non"><i class="logo far fa-user"></i></div>
        <div style="margin-left: 11px;">
          <?= $val->name; ?>
        </div>
      </td>
      <td><?= $val->work; ?></td>
      <td><?= $val->email; ?></td>
      <td><?= $val->city; ?></td>
    </tr>
    <?php }
    }?>
  </table>
</div>
