<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Task manager</title>
  <link rel="stylesheet" href="Assets/css/task.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down"></i>
    <span class="username"><?= print_r($_SESSION['login'][0]['name']);?> </span>
    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/73.jpg" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="menu">
        <div class="title">Navigation</div>
        <ul class="folderList">
        <!-- <li class="active"><i class="fa fa-tasks"></i>Manage Tasks</li> -->

        <?php foreach (getFolder(getUserId()) as $row):?>
          <a class="" href="?<?= $row['id']?>"><i class="fa fa-tasks"></i><?= $row['name']?></a>
          <?php endforeach;?>
        </ul>
        <form id="newFolderFrm" name="newFolderFrm">
          <div class="frmBody">
            <input type="text" id="newFolderName" placeholder="enter new folder">
            <button type="submit" id="newFolderBtn" name="<?= getUserId();?>" class="">+</button>
            <p id="frmFolderResult"></p>
          </div>
        </form>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
          <form id="newTaskFrm" name="newTaskFrm">
            <p id="frmResult"></p>
            <input type="text" id="newTaskName" placeholder="enter new task">
            <button type="submit" id="newTaskBtn" class="button active">Add New Task</button>
          </form>
        </div>
      </div>
      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
            <li class="checked"><i class="fa fa-check-square-o"></i><span>Update team page</span>
              <div class="info">
                <span>Complete by 25/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
              <div class="info">
                <span>Complete by 10/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Find a front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
          <pre>
          <?= print_r($_SESSION['login'][0]);?>
          </pre>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='Assets/js/jquery.min.js'></script>
  <script  src="Assets/js/task.js"></script>

</body>
</html>
