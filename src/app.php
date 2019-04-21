<h1>PDO Project </h1>
  <div class="container">
    <div class="left-pane">
      <h2>Insert Data</h2>
      <form action="src/api/insert.php" method="POST">
        <input type="text" name="name" placeholder="Name" class="gt-input rounded-left" required>
        <input type="submit" name="insert" value="INSERT" class="gt-button rounded-right">
      </form>

      <h2>Delete Data</h2>
      <form action="src/api/delete.php" method="POST">
        <select name="id" id="deleteList" class="gt-input full-width rounded-left">
          <?php foreach ($data as $i ) { ?>
            <option value="<?php echo $i['id'] ?>"><?php echo $i['id'].' - '.$i['name'] ?></option>
          <?php } ?>
        </select>
        <input type="submit" name="delete" value="DELETE" class="gt-button rounded-right">
      </form>

      <h2>Edit Data</h2>
      <form action="src/api/edit.php" method="POST">
        <select name="id" id="editList" class="gt-input full-width rounded-left">
          <?php foreach ($data as $i ) { ?>
            <option value="<?php echo $i['id'] ?>"><?php echo $i['id'].' - '.$i['name'] ?></option>
          <?php } ?>
        </select>
        <input type="text" name="name" placeholder="Name" class="gt-input" required>
        <input type="submit" name="edit" value="UPDATE" class="gt-button rounded-right">
      </form>
    </div>

    <div class="right-pane">
      <h2>Data</h2>

      <form method="POST">
        <input type="text" name="name" placeholder="Search Name" class="gt-input rounded-left rounded-right" onkeyup="search(this.value)"  >
      </form>

      <div class="data-wrapper">

        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody class="data-table">
            <?php foreach ($data as $i ) { ?>
            <tr>
              <td><?php echo $i['id'] ?></td>
              <td><?php echo $i['name'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<h1> IMED JABERI </h1>