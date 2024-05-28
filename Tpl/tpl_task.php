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
    <div class="userPanel"><i class="fa fa-chevron-down"></i><span class="username">John Doe </span><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/73.jpg" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="menu">
        <div class="title">Navigation</div>
        <ul>
          <li> <i class="fa fa-home"></i>Home</li>
          <li><i class="fa fa-signal"></i>Activity</li>
          <li class="active"> <i class="fa fa-tasks"></i>Manage Tasks</li>
          <li> <i class="fa fa-envelope"></i>Messages</li>
        </ul>
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
          <form id="newTaskFrm" name="newTaskFrm">
            <input type="text" id="newTaskName" placeholder="enter new task">
            <button type="submit" id="newTaskBtn" class="button active">Add New Task</button>
            <p id="frmResult"></p>
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
