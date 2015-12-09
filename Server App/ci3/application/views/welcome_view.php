<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Hello</title>
 </head>
 <link href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #main {
			width:auto;
			margin:auto;
			font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
		}
        body {
            background-color: #ffe066;
            height: auto;
            width: auto;
        }
        header {
                background : gray;
				width :auto;
				height :75px;
				float:center;

            }
            footer {
                background: #ffe066;
                color: white;
                height :70px;

                margin-top: 13px;
            }
            section {
                background: #ffe066;
                color: black;
                height: 800px;

            }
            button {
                display: inline-block;
                padding: 0;
                margin: center;
                vertical-align: top;
                height: 70px;
                width: 70px;
                border-radius: 70px
            }

            #getpict img {
                display: block;
                height: 70px;
                width: 70px;
            }

			ul {
				list-style-type: none;
                display: inline-block;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}

			li {
				float: left;
				margin-left:37px;
				margin-right:37px;
				padding:5px;
			}
            p.three {
                margin-top: 3px;
                font-size:25px;
                display: block;
                width: 80px;
                background-color: gray;
                color: white;
                font-family:"Lucida Console" , Sans Serif;
                        }

             p.four {
                margin-top: 3px;
                display: block;
                background-color: gray;
                width: 80px;
                color: white;
                font-size: 25px;
                font-family: "GranstanderClean";
             }
             .scroll{
                width: 500px;
                height:800px;
                overflow:scroll;
             }

             td.one{

                font-size: 15px;

             }
             table.one{
                padding:30px;
             }

    </style>

 <body>
 <center>
<header>
<div align="center">
    <div id="main">
    </div>
        <ul>
            <div style="margin-top:20px">
          <li><p class="three">@<?php echo $this->session->userdata('user_name'); ?></p></li>
          <li><p class="four">NOM</p></li>
          <li><p class="three"><?php echo anchor('user/logout', 'Logout'); ?></p></li>
        </ul>
        </div>
        </header>
        </center>
<!--==========================================Content============================================-->
 <center>
    <div style="margin-top:60px">
    <section class="scroll">

<?php
//Display image
$conn = mysqli_connect("localhost","root","root","android_api");
$res=mysqli_query($conn, "SELECT * FROM image ORDER BY id DESC");
echo '<table class:"one">';

while($result = mysqli_fetch_assoc($res)) {
  $data = base64_decode($result['image']);
    echo "<tr>";
    echo "<td>";
  echo '<img width="500" height="500" src="data:image/jpeg;base64, '.base64_encode($data).'">';

  //echo $data;

    echo "</td>";
    echo "</tr>";
 echo "<td>";
    echo "<p> </p>";
    echo "<tr>";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo '<td class="one" align= "center";>';
    echo $result["caption"];
    echo "</td>";
    echo "</tr>";

    echo "<td>";
    echo "<p> </p>";
    echo "<tr>";
    echo "</td>";
    echo "</tr>";
    echo "<td>";
    echo "<p> </p>";
    echo "<tr>";
    echo "</td>";
    echo "</tr>";

}
  echo "</table>";
?>

        </br>
    </section>
    </center>
    </div>
    </div>
    </center>
    </body>
</html>
