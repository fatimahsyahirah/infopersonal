<!DOCTYPE html>
<html lang="en">
    <head>
	<!-- This section is for the title and technical info of the page -->
	<title> Photo Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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

body  {
  background-color: #dedede;
      }
	   
.gallery{
  display: flex;
  width: 900px;
  margin: auto;  justify-content: space-between;
  flex-wrap: wrap;
} 

figure{
  width: 200px;
  margin: 8px 0;
  border: 1px solid #777;
  padding: 8px;
  box-sizing: border-box;
  background-color: #fff;
}

figure img{
  width: 100%;
}

figure figcaption{
  text-align: center;
  padding: 8px 4px;
}

p{text-align:center;
  color:navy;
  font-family:ravie;
  }
  
  h1{text-align:center;
  color:purple;
  font-family:showcard gothic;
  }
  
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

 figcaption{font-family:freestyle script;
            color:#7F462C;
			font-size:25px;
 }

    </style> 
	</head>
	
	<body>
	
	
	<h1>FAMILY'S PHOTO GALLERY</h1>
	
	
	  
	<div class="gallery">
      <figure>
        <img src="gambar/abah.jpg">
        <figcaption>Che Razali bin Mohd Noor(dad)</figcaption>
      </figure>
      <figure>
        <img src="gambar/mak.jpg">
        <figcaption>Aeshah binti Sulaiman(mom)</figcaption>
      </figure>
      <figure>
        <img src="gambar/hafiz.jpg">
        <figcaption>Mohd Hafiz bin Che Razali(oldest brother)</figcaption>
      </figure>
      <figure>
        <img src="gambar/husni.jpg">
        <figcaption>Mohd Zulhusni bin Che Razali(2nd brother)</figcaption>
      </figure>
      <figure>
        <img src="gambar/hakim.JPG">
        <figcaption>Mohd Zulhakimi bin Che Razali(3rd brother)</figcaption>
      </figure>
      <figure>
        <img src="gambar/hazmi.jpg">
        <figcaption>Mohd Zulhazmi bin Che Razali(4th brother)</figcaption>
      </figure>
      <figure>
        <img src="gambar/siti.jpg">
        <figcaption>Siti Fatimah Syahirah binti Che Razali(me)</figcaption>
      </figure>
      
    </div>
  </body>
</html>
	  
	 <!-- Create a form then add button 
        inside the form -->
    <form action="http://localhost/dashboard/csc574/index1.php"> 
        <button class = "home" type="submit"> 
            HOME 
        </button>
	</body>
	
	
</html>

