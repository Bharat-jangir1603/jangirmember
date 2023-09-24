<?php

use CodeIgniter\Database\BaseUtils;
?>
<div class="Nav_page">
  <div class="left">
    <div style="margin-top: 1rem; display: flex;">
      <a id="fir" href="#">Jangir's</a>
      <i class="cut fa fa-xmark"></i>
    </div>
    <div class="link">
      <div id="forms_dash">
        <span class="trg <?= ($spn == 'dash') ? 'spn' : ''; ?>"></span>
        <a href="#">
          <i class="fa-solid fa-house"></i>
          Dashboard
        </a>
      </div>
      <div id="forms_id">
        <span class="trg <?= ($spn == 'form_id') ? 'spn' : ''; ?>"></span>
        <a href="#">
          <i class="fa-regular fa-paper-plane"></i>
          Forms
        </a>
      </div>
      <div id="forms_tbl">
        <span class="trg <?= ($spn == 'forms_tbl') ? 'spn' : ''; ?>"></span>
        <a href="#">
          <i class="fa-solid fa-table-list"></i>
          Tables
        </a>
      </div>
      <div id="forms_pg">
        <span class="trg <?= ($spn == 'forms_pg') ? 'spn' : ''; ?>"></span>
        <a href="#">
          <i class="fa-regular fa-map"></i>
          Pages
          <i style="    font-size: .77rem;
              margin-left: 4.8rem;
          " class="fa-solid fa-chevron-down"></i>
        </a>
      </div>
    </div>
    <div id="new_admin">
      <a class="admin_id_" href="#">
        <p style="margin-top: 14px;">New Admin</p>
        <i class="fa-solid fa-plus"></i>
      </a>
    </div>
    <div id="new_admin">
      <a class="member_id_" href="#">
        <p style="margin-top: 14px;">New Member</p>
        <i class="fa-solid fa-plus"></i>
      </a>
    </div>
  </div>
</div>
<div class="nav">
  <div class="data_m">
    <i class="fa-solid fa-bars"></i>
  </div>
  <div class="search_div"><input type="text" name="ser" id="search_inp" placeholder="Search here..."></div>
  <div class="data_x">
    <i class="empt fa fa-xmark"></i>
  </div>
  <div class="data_p dropdown-meenu">
    <button class="menu-btn">Admin</button>
    <div class="menu-content">
      <a class="log_out links" href="<?= base_url('logout'); ?>"><i style="margin-right: 10px;" class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
      <a class="admin_id_ links" href="#adad"><i style="margin-right: 10px;" class="fa-solid fa-user-secret"></i>New Admin</a>
      <a class="member_id_ links" href="#"><i style="margin-right: 10px;" class="fa-solid fa-user-plus"></i>New Member</a>
    </div>
  </div>
</div>
<div class="contant" style=" margin-top: 60px;">
