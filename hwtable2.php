<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Design</title>
    <style>
        #head{
            width: 100%;height: 150px;top: 1px; left: 0px; position: absolute;background-color: #0e8f9f;
        }

        #menu{
            width: 100%;height: 50px;top: 160px; left: 0px; position: absolute;background-color: rosybrown;
        }

        #sidb{
            width: 25%;height: 400px;top: 215px; left: 0px; position: absolute;background-color: #1b93e1;
        }
        #con{
            width: 75%;height: 400px;top: 215px; right: 0px; position: absolute;background-color: #4F52BA;
        }

        #foot{
            width: 100%;height: 200px;top: 625px; left: 0px; position: absolute;background-color: rosybrown;
        }
		
	ul{
		text-align:center; bottom: 2px;
	}
	 li{
		list-style-type: none; display:inline ; margin-left: 20px;
	}
        a{
            text-align-last: center; text-decoration: none;
        }
        a:hover{
            background-color: red;
        }
    </style>
</head>
<body>

<div id="head">Header
<img src="E:\image\1.jpg" alt="">
</div>
<div id="menu">menu
<ul>
<li><a>Home</a></li>
<li><a>Signup</a></li>
<li><a>Contact</a></li>
</ul>

</div>
<div id="sidb">sidebar</div>
<div id="con">content
    <table width="80%"  border="1px" align="center">
        <tr>
            <th  colspan="3">Weekly Class Routine</th>

        </tr>
        <tr>
            <th >Day</th>
            <th  >Subject</th>
            <th >Teachers Name</th>
        </tr>

        <tr>
            <th rowspan="2">Sun<sub>day</sub><br>Tues<sup>day</sup></th>
            <td ></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th rowspan="2"> <del>Satarday/Friday</del><br>MW</th>
            <td ></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>
<div id="foot">footer</div>


</body>
</html>