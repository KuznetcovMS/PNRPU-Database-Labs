<?php
function query_exec($m_connect, $m_query){
    $employees = mysqli_query($m_connect, $m_query);
    $employees = mysqli_fetch_all($employees);
    foreach($employees as $row) {
        ?>
          <tr>
              <?php
              foreach($row as $col){
                  ?>
                <td><?= $col ?></td>
                <?php
              }
              ?>
          </tr>
        <?php
      }
}
?>