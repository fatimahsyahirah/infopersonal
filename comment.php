<!DOCTYPE html>
<html lang="en">
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> comment</title>
	 <style> 
        .home { 
        background-color: white; 
        border: 2px solid black; 
        color: green; 
        padding: 5px 10px; 
        text-align: center; 
        display: inline-block; 
        font-size: 20px; 
        margin: 10px 30px; 
        cursor: pointer; 
        } 
		    
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}  
body { background-color: #ffffcc ;
}
    </style> 
	</head>
	
	<body>
	<H3>COMMENT SOMETHING</H3>
	
	<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="Gender">Gender</label>
    <select id="Gender" name="Gender">
      <option value="Female">Female</option>
      <option value="Male">Male</option>
    </select>

    <label for="Comment">Comment</label>
    <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
	
	
	
	
	<form action="http://localhost/dashboard/csc574/index1.php"> 
        <button class = "home" type="submit"> 
            HOME 
        </button>
</html>