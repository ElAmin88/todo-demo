<?php
  require_once "config.php";
  session_start();
  
  function getStatus($status){
      if($status == 0){
          return "To-Do";
      }
      else if($status == 1){
          return "Ongoing";
      }
      else {
          return "Completed";
      }
  
  }

?>


<!DOCTYPE html>

<html lang="en">
	<style>
		

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: 'Montserrat',sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}
a:focus {
	outline: none !important;
}
a.delete{
	color: #f80b42;
}
a.Completed{
	color: #1f9625;
}
a.Ongoing{
	color: #d4bb2d;
}
a.To-Do{
	color: #0000FF;
}
a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
input[type=submit] {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #f6f5f7;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 960px;
  border-radius: 10px;
  overflow: hidden;
}

.table {
  width: 100%;
  display: table;
  margin: 0;
}

@media screen and (max-width: 768px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #fff;
}

.row.header {
  font-weight: bold;
  color: #ffffff;
  background: #FF416C;
  background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
  background: linear-gradient(to right, #FF4B2B, #FF416C);
}

@media screen and (max-width: 768px) {
  .row {
    display: block;
  }

  .row.header {
    padding: 0;
    height: 0px;
  }

  .row.header .cell {
    display: none;
  }

  .row .cell:before {
    font-family: 'Montserrat';
    font-weight: bold;
    font-size: 12px;
    color: #808080;
    line-height: 1.2;
    text-transform: uppercase;
    

    margin-bottom: 13px;
    content: attr(data-title);
    min-width: 98px;
    display: block;
  }
}
form {
            background-color: #f6f5f7;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }
        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }
        .form-container {
            position: inherit;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }
input[type=submit] {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.logout {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}
.cell {
  display: table-cell;
}

@media screen and (max-width: 768px) {
  .cell {
    display: block;
  }
}

.row .cell {
  font-family: 'Montserrat';
  font-size: 15px;
  color: #666666;
  line-height: 1.2;


  padding-top: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #f2f2f2;
}

.row.header .cell {
  font-family: 'Montserrat';
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  
  padding-top: 19px;
  padding-bottom: 19px;
}

.row .cell:nth-child(1) {
  width: 360px;
  padding-left: 40px;
}

.row .cell:nth-child(2) {
  width: 160px;
}

.row .cell:nth-child(3) {
  width: 250px;
}

.row .cell:nth-child(4) {
  width: 190px;
}


.table, .row {
  width: 100% !important;
}

.row:hover {
  background-color: #ffecec;
  cursor: pointer;
}

@media (max-width: 768px) {
  .row {
    border-bottom: 1px solid #f2f2f2;
    padding-bottom: 18px;
    padding-top: 30px;
    padding-right: 15px;
    margin: 0;
  }
  
  .row .cell {
    border: none;
    padding-left: 30px;
    padding-top: 16px;
    padding-bottom: 16px;
  }
  .row .cell:nth-child(1) {
    padding-left: 30px;
  }
  
  .row .cell {
    font-family: 'Montserrat';
    font-size: 18px;
    color: #555555;
    line-height: 1.2;

  }

  .table, .row, .cell {
    width: 100% !important;
  }
}
	</style>
<head>
	<title>Todo List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								To-Do
							</div>
							<div class="cell">
								Status
							</div>
							<div class="cell">
								Delete
							</div>
						</div>
                        <?php
                            
                            $sql = "SELECT id, content, status FROM items WHERE userId =" . $_SESSION["id"];
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $status = getStatus($row["status"]);
                                    echo '<div class="row">
                                    <div class="cell" data-title="To-Do">
                                        '.$row["content"].'
                                    </div>
                                    <div class="cell" data-title="Status">
                                        <a class="'.$status.'" href="changeItem.php?id='.$row['id'].'&status='.$row["status"].'">'. $status .'</a>
                                    </div>
                                    <div  class="cell" data-title="Delete">
                                        <a class="delete" href="deleteItem.php?id='.$row['id'].'">Delete</a>
                                    </div>
                    
                                    </div>';
                                    

                                }


                            }
                            


                        ?>
				
					</div>
      </div>
      <div class="form-container">
        <form action="addItem.php" method="post">
          <br>
          <br>
          <h1>Add Item</h1>
          <span>Type your To-Do Item</span>
          <input type="Text" name="content" placeholder="Item Name" />
          <input type="submit"  value="Add"> 
          <br>
          <br>
          <a href='logout.php' class="logout">logout</a>
      </form>
      </div>
    </div>
    
	</div>
  
</body>
</html>