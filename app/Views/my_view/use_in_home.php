
  <div id="new_admin" style="display:block;">
          <a class="member_id_ clas_mem" >
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
        <p style="color: #7e3af2;" onclick="edit_fun(<?= $val->row; ?>)" class="men_up" ><i class="btn fa-solid fa-user-pen"></i></p>
        <p style="color: #7e3af2;" onclick="del_fun(<?= $val->row; ?>)" class="act_del"  href="#"><i class="btn fa-solid fa-trash-can"></i></p>
      </td>
    </tr>
    <?php }
    }?>
  </table>
</div>

