<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Danh sách user</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>ID khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Tính năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($user as $value): ?>
                <tr>
                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td><?= $value['userName'] ?></td>
                <td><?= $value['address'] ?></td>

                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                  <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>